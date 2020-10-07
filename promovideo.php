<?php
require_once 'isMobile.php';

$page="promovideo";
require_once 'content/common/header.php';
if($selector == "mobile"){
	require_once "content/common/navbar-mobile.php";
}
else{
	require_once "content/common/navbar.php";
}
require_once "content/".$selector."/promovideo.php";
require_once 'content/common/contact.php';
require_once 'content/common/footer.php';

?>