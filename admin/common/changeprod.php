<?php
require_once 'adminhelper.php';

if(changeOrder($_GET["type"],$_GET["id1"],$_GET["id2"])){
	echo "ok";
}else{
	echo "hiba";
}
?>