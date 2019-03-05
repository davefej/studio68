<?php
require 'admin/common/newsletter_common.php';

$file = "admin/log.log";
$msg = "\n unsubscribe.php ".date("Y-m-d H:i:s")." \n".$_SERVER['QUERY_STRING'];
file_put_contents($file,$msg, FILE_APPEND | LOCK_EX);


if(isset($_GET["id"])){
	$param = "id";
	$data = $_GET["id"];
}else if(isset($_GET["email"])){
	$param = "email";
	$data = $_GET["email"];
}

if(isset($param)){
	if(unsubscribeByParam($data,$param)){
		echo "ok";
	}else{
		echo "noid";
		addError(getNewsDir(),array(
				"unsubscribe" => 1,
				"param" => $param,
				"data" => $data
		));
	}
}else{
	echo "error";
	addError(getNewsDir(),array(
			"unsubscribe" => 2,
			"url" => $_SERVER['REQUEST_URI']
	));
}

?>