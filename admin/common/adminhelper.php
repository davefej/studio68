<?php 
function readJSON($type){
	$jsonstr = "";
	
	if(file_exists("dinamic/".$type.".json")){
		$path = "dinamic/".$type.".json";
	}else{
		$path ="../../dinamic/".$type.".json";
	}
	
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

function addElement($type,$text,$desc,$imgname,$status,$price){
	$data = readJSON($type);
	$newimg = array();
	$newimg['name'] = $imgname;
	$newimg['txt'] = $text;
	$newimg['status'] = $status;
	$newimg['desc'] = $desc;
	$newimg['price'] = $price;
	$newimg['time'] = date("Y-m-d H:i:s");
	$newimg['order'] = maxOrder($data);
	array_push($data,$newimg);
	writeJSON($data,$type);
}

function writeJSON($data,$type){
	$myfile = fopen("../../dinamic/".$type.".json", "w");
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

function editById($type,$id,$txt,$desc,$price){
	$data = readJSON($type);
	$ret =  false;
	for($i=0; $i < count($data); $i++){
		if($data[$i]["name"] == $id){
			$data[$i]["txt"] = $txt;
			$data[$i]["desc"] = $desc;
			$data[$i]["price"] = $price;
			$ret =  true;
			break;
		}
	}
	
	if($ret){
		writeJSON($data,$type);
	}
	return $ret;
}

function getCategoories($cat){

	switch($cat){
		case "eco1":
			return "Öko - Zöld Energia";
			break;
		case "eco2":
			return "Öko - Újrahasznosított Termékek";
			break;
		case "eco3":
			return "Öko - Környezetbarát Ötletek";
			break;		
		case "sweet1":
			return "Édesség - Csokoládék";
			break;
		case "sweet2":
			return "Édesség - Nassolnivalók";
			break;
		case "sweet3":
			return "Édesség - Promóciós Édességek";
			break;		
		case "sweet4":
			return "Édesség - Cukorkák, nyalókák";
			break;
		case "sweet5":
			return "Édesség - Ajándékcsomagok";
			break;
		case "gift1":
			return "Ajándék - Webshop termékek";
			break;
		case "gift2":
			return "Ajándék - Egyedi gyártások";
			break;
		case "gift3":
			return "Ajándék - Textilek & Munkaruhák";
			break;
		case "gift4":
			return "Ajándék - Lakossági Webshop";
			break;
		case "fan1":
			return "Sport - Szurkolói kellékek";
			break;
		case "fan2":
			return "Sport - Szurkolói Ajándékok";
			break;
		case "fan3":
			return "Sport - Textilek";
			break;
		case "fan4":
			return "Sport - Serlegek, kupák";
			break;
		default:
			return "";
			break;
	}
}

function getDivisionFromCategory($cat){
	return substr($cat, 0,-1);
}

function createBackupIfNotDev($type){
	if(strpos($_SERVER['SERVER_NAME'],"localhost") === false && strpos($_SERVER['SERVER_NAME'],"127.0.0.1") === false){
		if(file_exists("dinamic/".$type.".json")){
			$src = "dinamic/".$type.".json";
			$dst = "dinamic/".$type."_backup.json";
		}else{
			$src ="../../dinamic/".$type.".json";
			$dst = "../../dinamic/".$type."_backup.json";
		}
		copy($src,$dst);
	}
}

?>
