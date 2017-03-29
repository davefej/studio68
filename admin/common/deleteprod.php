<?php
require_once 'adminhelper.php';

if(deleteById($_GET["type"],$_GET["id"])){
	echo "ok";
}else{
	echo "hiba";
}
?>