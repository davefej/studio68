<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if( preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
	//$_SESSION['mobile'] = true;
	$mobile = true;
	$selector = "mobile";

}else{
	//$_SESSION['mobile'] = false;
	$mobile = false;
	$selector = "desktop";
}
?>
