<html>
	<head>
	
	<?php 
		$version = rand();
		if($mobile == true){
			$css = "mobile-css";
		}else{
			$css = "css";
		}
	?>
	
		<!-- COMMON CSS -->
		<link rel="stylesheet" href="res/css/fonts.css">
		<link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="res/css/vegas.min.css?v=<?php echo $version;?>">
        <link rel="stylesheet" href="res/css/bootbox.css?v=<?php echo $version;?>">
        <link rel="stylesheet" href="res/css/footer.css?v=<?php echo $version;?>">
        <!-- SPECIFIC CSS -->
    <?php 
		echo '<link rel="stylesheet" href="res/'.$css.'/contact-style.css?v='.$version.'">';		
		echo '<link rel="stylesheet" href="res/'.$css.'/nav-style.css?v='.$version.'">';

        if(isset($page) && $page == "home"){
            echo '<link rel="stylesheet" href="res/'.$css.'/departments-style.css?v= '.$version.'">';
		}
        if(isset($page) && $page == "eco")
            echo '<link rel="stylesheet" href="res/'.$css.'/eco-styles.css?v='.$version.'">';
        if(isset($page) && $page == "gift")
            echo '<link rel="stylesheet" href="res/'.$css.'/gift-styles.css?v='.$version.'">';
        if(isset($page) && $page == "fan")
            echo '<link rel="stylesheet" href="res/'.$css.'/fan-styles.css?v='.$version.'">';
        if(isset($page) && $page == "sweet")
            echo '<link rel="stylesheet" href="res/'.$css.'/sweet-styles.css?v='.$version.'">';
        if(isset($page) && $page == "printing")
            echo '<link rel="stylesheet" href="res/'.$css.'/printing-styles.css?v='.$version.'">';
    ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		<title>Stúdió68 Kft.</title>
	</head>
	<body>