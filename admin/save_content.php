<?php
session_start();
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){

}else{
	echo "Nincs joga";
	exit;
}

require_once '../common_helper.php';
$entityBody = file_get_contents('php://input');
$body = json_decode($entityBody,True);

if($body["type"] == "save_new_header"){
	$data = $body["data"];
	if(isset($data["new_header_text"]) && isset($data["new_header_link"])){
		if(save_ujdonsag($data)){
			echo "ok";
		}
		
	}
}else{
	echo "Invalid req";
}
?>