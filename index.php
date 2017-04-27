<?php 
	require_once 'isMobile.php';
	$page="home";
	require_once 'content/common/header.php';
	
	if($mobile){
?>
		<link rel="stylesheet" href="res/mobile-css/styles.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="res/mobile-css/reference-styles.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="res/mobile-css/team-style.css?v=<?php echo $version;?>">
<?php 
	}else{
?>
		<link rel="stylesheet" href="res/css/styles.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="res/css/jquery.simplyscroll.css" media="all" type="text/css">
		<link rel="stylesheet" href="res/css/reference-styles.css?v=<?php echo $version;?>">
		<link rel="stylesheet" href="res/css/team-style.css?v=<?php echo $version;?>">
<?php
	}
	require_once 'content/common/navbar.php';
	require_once "content/".$selector."/index.php";
	require_once 'content/common/contact.php';
	require_once 'content/common/footer.php';

	if(!$mobile){
?>
	<script type="text/javascript" src="res/js/jquery.simplyscroll.js"></script>
	<script type="text/javascript">
		(function($) {
			$(function() {
				$("#scroller").simplyScroll();
			});
		})(jQuery);
	
		(function($) {
			$(function() {
				$("#scroller2").simplyScroll({
					auto:true,
					pauseOnHover:true,
					reference_stop:true,
					supportsTouch:false
					});
			});
		})(jQuery);
	
	</script>
<?php
	} 
?>