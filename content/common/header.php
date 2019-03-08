<html>
	<head>
	
	<?php 
	//TODO UPDATE VERSION WHEN RELEASE!!
		$version = 17;
		if($mobile == true){
			$css = "mobile-css";
		}else{
			$css = "css";
		}
		$NOTADMIN = true;
	?>
		<link rel="icon" type="image/png" href="res/img/favicon.png">
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
            echo '<meta name="description" content="Minőségi céges ajándéktárgyak és egyedi reklámajándékok. Webshop, Ajándéktárgy, Öko, Édesség, Sport, Nyomda. Portfóliónkhoz kattintson!">';
            echo '<title>Stúdió68 Reklámajándék Kft.</title>';
        }else if(isset($page) && $page == "eco"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/eco-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Környezettudatos, öko reklámajándékok, kütyük. Megújuló energiával, napelemmel működö öko termékek.">';
        }else if(isset($page) && $page == "gift"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/gift-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Egyedi ajándéktárgyak, Személyre szabott ajándékok, Lakossági webshop, Énajándékom.">';
        	echo '<title>Stúdió68 Reklámajándék Kft. - Ajándék</title>';
        }else if(isset($page) && $page == "fan"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/fan-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Szurkolói termékek. Mezek, Sálak, Serlegek, Kupák.">';
        	echo '<title>Stúdió68 Reklámajándék Kft. - Sport</title>';
        }else if(isset($page) && $page == "sweet"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/sweet-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Promóciós édességek, cukorkák, nyalókák. Minőségi csokoládé.">';
        	echo '<title>Stúdió68 Reklámajándék Kft. - Édesség</title>';
        }else if(isset($page) && $page == "printing"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/printing-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Személyre szabott nyomdai szolgáltatások. Molinó, zászló, szórólap.">';
        	echo '<title>Stúdió68 Reklámajándék Kft. - Nyomda</title>';
        }else if(isset($page) && $page == "eshop"){
        	echo '<link rel="stylesheet" href="res/'.$css.'/eshop-styles.css?v='.$version.'">';
        	echo '<meta name="description" content="Nyisson saját online vásárlói webáruházat!">';
        	echo '<title>Stúdió68 Reklámajándék Kft. - Ebolt</title>';
        }else{
        	echo '<meta name="description" content="Minőségi céges ajándéktárgyak és egyedi reklámajándékok, rövid határidővel. Szóróajándékok logózása, feliratozása. céges ajándék, reklámajándék">';
        	echo '<title>Stúdió68 Reklámajándék Kft.</title>';
        }
          	
    ?>
		<meta name="keywords" content="reklámajándék ajándéktárgy egyediajándék cégesajándék üzletiajándék lakosságiajándék énajándékom stúdió68" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		
		
		
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
		
	</head>

<?php 
// NOT IN USE, CHECK FOOTER
//require 'googleuat.php';
?>
<body>