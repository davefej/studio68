<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if( preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
	$_SESSION['mobile'] = true;
	$mobile = true;
	if($_SERVER[HTTP_HOST] == "localhost" || $_SERVER[HTTP_HOST] == "davidanddavid.hu"){
		header('Location: '."http://$_SERVER[HTTP_HOST]"."/studio68/mobile".str_replace("/studio68", "", $_SERVER[REQUEST_URI]));
	}else{
		header('Location: '."http://$_SERVER[HTTP_HOST]"."/mobile".$_SERVER[REQUEST_URI]);
	}
	
	exit();
}else{
	$_SESSION['mobile'] = false;
}
?>

<html>
	<head>
	
		<link href="https://fonts.googleapis.com/css?family=Muli:300,900|Raleway:300,900|Source+Code+Pro|Lora:400i" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php $version = rand();?>
		<link rel="stylesheet" href="css/contact-style.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="css/vegas.min.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="css/footer.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="css/nav-style.css?v=<?php echo $version;?>">
		
        <?php
        if(isset($page) && $page == "home")
		  echo '<link rel="stylesheet" href="css/departments-style.css?v= '.$version.'">'
        ?>
		<link rel="stylesheet" href="css/bootbox.css?v=<?php echo $version;?>">
        
        <?php
        if(isset($page) && $page == "home")
            echo '<link rel="stylesheet" href="css/styles.css?v='.$version.'">';
        if(isset($page) && $page == "eco")
            echo '<link rel="stylesheet" href="css/eco-styles.css?v='.$version.'">';
        if(isset($page) && $page == "gift")
            echo '<link rel="stylesheet" href="css/gift-styles.css?v='.$version.'">';
        if(isset($page) && $page == "fan")
            echo '<link rel="stylesheet" href="css/fan-styles.css?v='.$version.'">';
        if(isset($page) && $page == "sweet")
            echo '<link rel="stylesheet" href="css/sweet-styles.css?v='.$version.'">';
        if(isset($page) && $page == "printing")
            echo '<link rel="stylesheet" href="css/printing-styles.css?v='.$version.'">';
        ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		<title>Stúdió68 Kft.</title>
	</head>
	<body>