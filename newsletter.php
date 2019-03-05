<?php
require 'admin/common/newsletter_common.php';
$entityBody = file_get_contents('php://input');

$file = "admin/log.log";
$msg = "\n newsletter.php ".date("Y-m-d H:i:s")." \n".$entityBody;
file_put_contents($file,$msg, FILE_APPEND | LOCK_EX);

$data = json_decode($entityBody,True);


if(isset($data["subscribe"]) && isset($data["email"]) && isset($data["name"])){
	
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
		header("HTTP/1.1 400 Bad Request");
		return;
	}
	unset($data["subscribe"]);
	$data['email'] = htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8');
	$data['name'] = htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8');
	$ret = subscribe($data);
	if($ret){
		echo "ok";
	}else{
		echo "exists";
		addError(getNewsDir(),array(
				"subscribe" => 1,
				"exists" => 1,
				"data" => $data
		));
	}

}else{
	addError(getNewsDir(),array(
			"subscribe" => 2,
			"error" => "bad req",
			"data" => $data
	));
	header("HTTP/1.1 400 Bad Request");
	return;
}




?>