<?php 
session_start();
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){

}else{
	echo "Nincs joga";
	exit;
}
?>
<?php
$adminnews = true;
require 'common/newsletter_common.php';
$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody,True);


if(!file_exists(getNewsDir())){
	mkdir(getNewsDir());
}
if(!is_string($data["msg"]) || strlen(trim($data["msg"])) == 0 || 
		!is_string($data["subject"]) || strlen(trim($data["subject"])) == 0){
	header("HTTP/1.1 400 Bad Request");
	addError(getNewsDir(),array(
			"save_newsletter" => 1,
			"error" => "empty msg"
	));
	return;
}

$newsletterid = "news_".date("Y-m-d_h-i-sa");
$newsletterpath = getNewsDir()."/".$newsletterid;
mkdir($newsletterpath);

$path = getNewsletterUsersPath();
$json = readNewsJson($path);
$ids = array();
foreach($json as $key => $value){
	array_push($ids,$value["id"]);
}
writeNewsJson($newsletterpath."/ids.json",$ids);
writeNewsJson($newsletterpath."/todo.json",$ids);
writeStr($newsletterpath."/message.info",$data["msg"]);
writeStr($newsletterpath."/subject.info",$data["subject"]);
writeAkt($newsletterid);
echo "ok";

?>