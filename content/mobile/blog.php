<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		<link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="res/mobile-css/nav-style.css">
		<link href="res/blog/booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="res/blog/css/mobile.css" type="text/css" media="screen"/>
		<title>Stúdió68 Blog</title>
		        <script src="res/js/jquery1.12.4.js"></script>
        <script src="res/js/jquery-ui.min.js"></script>       
	    <script src="res/bootstrap/js/bootstrap.min.js"></script>
	
	</head>
	<body>


<?php

require_once "content/common/navbar-mobile.php";

?>
	
	<br/><br/>
	<h1 class="title">Köszöntjük blogunkon!</h1>
			
				
				<div id="mybook">					
					<?php 
					$admin = false;
					require_once 'admin/common/renderblog_mobile.php';
					
					?>
				</div>
			
	        <div>
	           
			</div>

	</body>
</html>
	