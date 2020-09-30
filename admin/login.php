<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
	
	if($_POST['username'] == "admin" && md5($_POST['password']) == "aa21ac96d0166f4865a019ad12e5204e"){	
		$_SESSION['auth'] = true;
		header("Location: editor.php");
	}else{
		$_SESSION['auth'] = false;
		header("Location: index.php?login=fail");
	}	
}else{
	$_SESSION['auth'] = false;
	header("Location: index.php?login=fail");
}
?>

