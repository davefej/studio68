<?php

$path = "admin/nlcounter".date("Ym").".txt";
if($_SERVER['SERVER_NAME'] == "localhost"){
	$path = "admin/testnlcounter".date("Ym").".txt";
}
$ret = file_get_contents($path);
if($ret === false){
	$content = "0";
}else{
	$content = $ret;
}
$num = intval($content);
$num++;
file_put_contents($path, strval($num));

?>