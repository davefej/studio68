<?php 
session_start();
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
	
}else{
	header("Location: index.php?login=fail");
	exit;
}

?>

<html>
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="res/bootstrap.css">
		<link rel="stylesheet" href="res/adminstyle.css?v=<?php echo rand();?>">
		<link rel="stylesheet" href="../res/css/bootbox.css?v=<?php echo rand();?>">
		<title>Stúdió68 Kft. Admin</title>
	</head>
	<body>
		<div class="adminhadercontainer" >
			<div class="adminheader">
			<a href="hirlevel.php">HÍRLEVÉL</a>
			<a href="editor.php" >TERMÉKEK</a>
			<a href="blog.php" >BLOG</a>
			<a href="logout.php" >Kilépés</a>
			</div>
		</div>