<?php
	
function DEVPREFIX(){
	if($_SERVER['SERVER_NAME'] == "localhost"){
		return "dev";
	}else{
		return "";
	}
}


function get_ujdonsag(){
	return JS_READER(getDataPath()."ujdonsag.json");
}

function save_ujdonsag($ujdonsag){
	return JS_WRITER(getDataPath()."ujdonsag.json",$ujdonsag);
}

function getDataPath(){
	global $NOTADMIN;
	if(isset($NOTADMIN)){
		$path = "admin/data/".DEVPREFIX();
	}else{
		$path = "data/".DEVPREFIX();
	}
	return $path;
}

function JS_READER($path){
	$jsonstr = "";
	if(file_exists($path)){
		if ($file = fopen($path, "r")) {
			while(!feof($file)) {
				$line = fgets($file);
				$jsonstr .= $line."\n";
			}
			fclose($file);
		}else{
			return null;
		}
	}else{
		return null;
	}
	$json = json_decode($jsonstr,3);
	return $json;
}

function JS_WRITER($path,$json){
	$myfile = fopen($path, "w");
	fwrite($myfile, json_encode($json));
	return fclose($myfile);
}




?>