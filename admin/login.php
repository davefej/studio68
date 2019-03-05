<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
	
	if($_POST['username'] == "admin" && md5($_POST['password']) == "f95a7edd2e66f5aba9b112c48d2900d7" || 
			$_POST['username'] == "admin" && $_POST['password'] == "asdfgh"){//TODO		
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

