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
	usort($ret,function($a,$b){
		if(array_key_exists('order',$a) && array_key_exists('order',$b)){
			return $a['order'] < $b['order'] ? -1 : 1;
		}
		return -1;
	});
	return $ret;
}

function addElement($type,$text,$desc,$imgname,$status){
	$data = readJSON($type);
	$newimg = array();
	$newimg['name'] = $imgname;
	$newimg['txt'] = $text;
	$newimg['status'] = $status;
	$newimg['desc'] = $desc;
	$newimg['time'] = date("Y-m-d H:i:s");
	$newimg['order'] = maxOrder($data);
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

function maxOrder($data){
	$max = 0;
	for($i=0; $i < count($data); $i++){
		if($data[$i]["order"] > $max){
			$max = $data[$i]["order"];
		}
	}
	$max++;
	return $max;
}

function changeOrder($type,$name1,$name2){
	$data = readJSON($type);
	$ret =  false;
	$order1 = -1;
	$order2 = -1;
	for($i=0; $i < count($data); $i++){
		if($data[$i]["name"] == $name1){
			$order1 =  $data[$i]["order"];
		}
		if($data[$i]["name"] == $name2){
			$order2 =  $data[$i]["order"];
		}
	}
	
	if($order1 > -1 && $order2 > -1){
		for($i=0; $i < count($data); $i++){
			if($data[$i]["name"] == $name1){
				$data[$i]["order"] = $order2;
			}
			if($data[$i]["name"] == $name2){
				$data[$i]["order"] = $order1;
			}
		}
		writeJSON($data,$type);
		return true;
	}else{
		return false;
	}
}

?>