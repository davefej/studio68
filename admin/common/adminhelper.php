<?php 
function readJSON($type){
	$jsonstr = "";
	if ($file = fopen("../../res/".$type.".json", "r")) {
		while(!feof($file)) {
			$line = fgets($file);
			$jsonstr .= $line."\n";
		}
		fclose($file);
	}else{
		$jsonstr = "[]";
	}
	$json = json_decode($jsonstr,3);
	return $json;
}

function getJSON($type){
	$data = readJSON($type);
	$ret = array();
	foreach ($data as $jsonintem) {
		if($jsonintem["status"] == "1"){
			array_push($ret,$jsonintem);
		}
	}
	return $ret;
}

function addElement($type,$text,$imgname,$status){
	$data = readJSON($type);
	$newimg = array();
	$newimg['name'] = $imgname;
	$newimg['txt'] = $text;
	$newimg['status'] = $status;
	array_push($data,$newimg);
	writeJSON($data,$type);
}

function writeJSON($data,$type){
	$myfile = fopen("../../res/".$type.".json", "w");
	fwrite($myfile, json_encode($data));
	fclose($myfile);
}

function deleteById($type,$id){
	$data = readJSON($type);
	$ret =  false;
	for($i=0; $i < count($data); $i++){
		if($data[$i]["name"] == $id){
			$data[$i]["status"] = "2";
			$ret =  true;
			break;
		}
	}
	
	if($ret){
		writeJSON($data,$type);
	}
	return $ret;
}
?>