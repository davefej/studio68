<?php
require_once 'adminhelper.php';
$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody,True);

if(editById($data["type"],$data["id"],$data["name"],$data['desc'],$data['price'])){
	echo "ok";
}else{
	echo "hiba";
}
createBackupIfNotDev($data["type"]);
?>