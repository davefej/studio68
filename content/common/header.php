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
            echo '<meta name="description" content="Minőségi céges ajándéktárgyak és egyedi reklámajándékok. Ajándéktárgy, Öko, Édesség, Sport, Nyomda, Webshop">';
		}else if(isset($page) && $page == "eco"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/eco-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Környezettudatos, öko reklámajándékok, kütyük. Megújuló energiával, napelemmel működö öko termékek.">';
        }else if(isset($page) && $page == "gift"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/gift-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Egyedi ajándéktárgyak, Személyre szabott ajándékok, Lakossági webshop, Énajándékom.">';
        }else if(isset($page) && $page == "fan"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/fan-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Szurkolói termékek. Mezek, Sálak, Serlegek, Kupák.">';
        }else if(isset($page) && $page == "sweet"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/sweet-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Promóciós édességek, cukorkák, nyalókák. Minőségi csokoládé.">';
        }else if(isset($page) && $page == "printing"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/printing-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Személyre szabott nyomdai szolgáltatások. Molinó, zászló, szórólap.">';
        }else if(isset($page) && $page == "eshop"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/eshop-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Nyisson saját online vásárlói webáruházat!">';
        }else{
        	echo '<meta name="description" content="Minőségi céges ajándéktárgyak és egyedi reklámajándékok, rövid határidővel. Szóróajándékok logózása, feliratozása. céges ajándék, reklámajándék">';
        }
          	
    ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		<title>Stúdió68 Reklámajándék Kft.</title>
	</head>
	<body>