<?php

function getNewsletterUsersPath(){
	return getAdminPrefix()."res/".getTestPrefix()."newsletter.json";	
}

function getTestPrefix(){
	if($_SERVER['SERVER_NAME'] == "localhost"){
		return "test";
	}else{
		return "";
	}
}

function getAdminPrefix(){
	global $adminnews;
	if(isset($adminnews)){
		return "";
	}else{	
		return "admin/";
	}	
}

function getAktPath(){
	return getNewsDir()."/".getTestPrefix()."akt";
}

function readAkt(){
	$path = getAktPath();
	$array = readNewsJson($path);
	if(count($array) == 0){
		return null;
	}else{
		return $array[0];
	}
}

function writeAkt($id){
	$path = getAktPath();
	$array = readNewsJson($path);
	array_push($array, $id);
	writeNewsJson($path, $array);
}

function removeAkt($id){
	$path = getAktPath();
	$array = readNewsJson($path);
	array_shift($array);
	writeNewsJson($path, $array);
}

function readNewsJson($path){
	$jsonstr  ="";
	if(file_exists($path)){
		if ($file = fopen($path, "r")) {
			while(!feof($file)) {
				$line = fgets($file);
				$jsonstr .= $line."\n";
			}
			fclose($file);
		}else{
			$jsonstr = "[]";
		}
	}else{
		$jsonstr = "[]";
	}
	
	$json = json_decode($jsonstr,3);
	return $json;
}

function readLimit(){
	$path = mailLimitPath();
	$jsonstr = "";
	if(file_exists($path)){
		if ($file = fopen($path, "r")) {
			while(!feof($file)) {
				$line = fgets($file);
				$jsonstr .= $line."\n";
			}
			fclose($file);
		}else{
			$jsonstr = '{}';
		}
	}else{
		$jsonstr = '{}';
	}

	$json = json_decode($jsonstr,3);
	return $json;
}

function readErrorLimit(){
	$path = errorMailLimitPath();
	$jsonstr = "";
	if(file_exists($path)){
		if ($file = fopen($path, "r")) {
			while(!feof($file)) {
				$line = fgets($file);
				$jsonstr .= $line."\n";
			}
			fclose($file);
		}else{
			$jsonstr = '{}';
		}
	}else{
		$jsonstr = '{}';
	}

	$json = json_decode($jsonstr,3);
	return $json;
}

function writeErrorLimit($json){
	$path = errorMailLimitPath();
	$myfile = fopen($path, "w");
	fwrite($myfile, json_encode($json));
	fclose($myfile);
}

function writeLimit($json){
	$path = mailLimitPath();
	$myfile = fopen($path, "w");
	fwrite($myfile, json_encode($json));
	fclose($myfile);
}


function readStr($path){
	$str  = "";
	if(file_exists($path)){
		if ($file = fopen($path, "r")) {
			while(!feof($file)) {
				$line = fgets($file);
				$str .= $line."\n";
			}
			fclose($file);
		}else{
			return null;
		}
	}else{
		return null;
	}

	return $str;
}


function writeNewsJson($path,$json){
	$myfile = fopen($path, "w");
	fwrite($myfile, json_encode($json));
	fclose($myfile);
}


function writeStr($path,$str){
	$myfile = fopen($path, "w");
	fwrite($myfile, $str);
	fclose($myfile);
}



function subscribe($user){
	$user['id'] = md5(rand(1,100000)."qwertz")."_".date("Ymd_His");
	$path = getNewsletterUsersPath();
	$json = readNewsJson($path);
	if(isMailExists($user["email"],$json)){
		return false;
	}
	array_push($json,$user);
	writeNewsJson($path,$json);
	return true;
}

function isMailExists($mail,$json){
	foreach ($json as $key => $value){
		if($value["email"] === $mail){
			return true;
		}
	}
	return false;
}

function unsubscribeByParam($data,$param){
	$path = getNewsletterUsersPath();
	$json = readNewsJson($path);
	$newjson = array();
	$match = false;
	foreach ($json as $key => $value){
		if($value[$param] !== $data){
			array_push($newjson, $value);
		}else{
			$match = true;
		}
	}
	if($match){
		writeNewsJson($path, $newjson);
	}
	return $match;
}

function getUserById($id){
	$path = getNewsletterUsersPath();
	$json = readNewsJson($path);
	foreach ($json as $key => $value){
		if($value["id"] == $id){
			return $value;
		}
	}
	return null;
}

function  getNextId($path){
	$json = readNewsJson($path);
	$item = array_shift($json);
	writeNewsJson($path,$json);
	return $item;
}

function addId($path,$id){
	$path = $path."/done.json";
	$json = readNewsJson($path);
	array_push($json, $id);
	writeNewsJson($path,$json);
}

function addError($path,$error){
	$path = $path."/".getTestPrefix()."error.json";
	$json = readNewsJson($path);
	array_push($json, $error);
	writeNewsJson($path,$json);
	
	if(!errorLimitReached()){
		sendmail("davefej@gmail.com", "Studio Hiba", json_encode($error));
	}
}

function errorLimitReached(){
	$json = readErrorLimit();
	if(isset($json["time"])){
		$diff = strtotime("now") - $json["time"];
		$diffmin = $diff / 60;
		if($diffmin < 1000){ // ezer perc kb 1 nap
			return true;
		}
	}
	$json["time"] = strtotime("now");
	writeErrorLimit($json);
	return false;
}

function errorMailLimitPath(){
	return getNewsDir()."/errorlimit.json";
}

function sendmail($to,$subject,$message){
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: '.mb_encode_mimeheader("Stúdió 68 Kft", 'UTF-8', 'Q').' <otlet@studio68.hu>' . "\r\n";
	$headers .= 'Reply-To: Stúdió 68 Kft. <info@studio68.hu>' . "\r\n";
	return mail($to,$subject,$message,$headers);
}


function getMessage($user,$newsletter_id){
	$str = readStr(getNewsDir()."/".$newsletter_id."/message.info");
	if($str == null){
		return null;
	}else{
		$str = str_replace("#nev#",$user["name"],$str);
		$link = "https://studio68.hu/site/index.php?unsubscribe=1&id=".$user["id"];
		$str = str_replace("#link#",$link,$str);
		return $str;
	}
}

function getSubject($user,$newsletter_id){
	return readStr(getNewsDir()."/".$newsletter_id."/subject.info");
}

function testmail($to,$subject,$message,$headers){
	$myfile = fopen("mailteszt.txt", "a");
	fwrite($myfile, "#### ---- ####\r\n".$to."\r\n".$subject."\r\n".$message."\r\n".$headers."\r\n\r\n");
	fclose($myfile);
	return true;
}

function getNewsDir(){
	return getAdminPrefix().getTestPrefix()."newsletters";
}

function mailLimitPath(){
	return getNewsDir()."/limit.json";
}


function addMailLimitReached(){
	$hourlimit = 500;

	$json = readLimit();
	$limit = 0;
	if(isset($json["limit"])){
		$limit = $json["limit"];
	}
	$lasttime = strtotime("now");
	if(isset($json["lasttime"])){
		$lasttime = $json["lasttime"];
	}
	$diff = strtotime("now") - $lasttime;
	$diffmins = $diff/60;
	if($diffmins > 60 ){
		$json["limit"] = 0;
	}else{
		if($limit > $hourlimit){
			return true;
		}else{
			$json["limit"] = $limit +1;
		}
	}
	$json["lasttime"] = strtotime("now");
	writeLimit($json);
	return false;
}

?>