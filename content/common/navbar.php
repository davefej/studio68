<?php require_once 'common_helper.php';?>
	<nav  class="navbar navbar-default navbar-fixed-top <?php echo "navbar-".$page;?>" id="navbar">
		<div class="container-fluid">
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a class="navbar-brand" style="pointer-events: none; cursor: default; color: white;">
				<?php
				if($page == "home"){
					echo '';
				}
				if($page == "eco"){
					//echo 'ÖKO';
					echo '<img alt="öko-reklámajándékok" class="department_icon" src="res/img/newicons/eco.png">';
				}
				if($page == "gift"){
					echo '<img alt="ajándéktárgy-reklámajándékok" class="department_icon" src="res/img/newicons/gift.png">';
					//echo 'AJÁNDÉK';
				}
				if($page == "sweet"){
					//echo 'ÉDESSÉG';
					echo '<img alt="édesség-csoki" class="department_icon" src="res/img/newicons/sweet.png">';
				}
				if($page == "fan"){
					//echo 'SPORT';
					echo '<img alt="szurkolói-sport" class="department_icon" src="res/img/newicons/sport.png">';
				}
				if($page == "printing"){
					echo '<img alt="nyomda-szórólap" class="department_icon" src="res/img/newicons/print.png">';
					//echo 'NYOMDA';
				}
				if($page == "eshop"){
					echo '<img alt="nyomda-szórólap" class="department_icon" src="res/img/newicons/webshop.png">';
				}
				?>
			</a>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
          				<a href="index.php" class="nav_element"><img style="max-height: 1.2em;" src="res/img/home_icon.png"></img></a>
					</li>
					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TERMÉKKÍNÁLAT<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="eco.php" class="nav_element department_icon_container">ÖKO <img class="department_icon_gray" src="res/img/newicons/eco.png"></a></li>
			            <li><a href="sweet.php" class="nav_element department_icon_container">ÉDESSÉG  <img class="department_icon_gray" src="res/img/newicons/sweet.png"></a></li>
			            <li><a href="gift.php" class="nav_element department_icon_container">AJÁNDÉK  <img class="department_icon_gray" src="res/img/newicons/gift.png"></a></li>
			            <li><a href="fan.php" class="nav_element department_icon_container">SPORT  <img class="department_icon_gray" src="res/img/newicons/sport.png"></a></li>
						<li><a href="printing.php" class="nav_element department_icon_container">NYOMDA  <img class="department_icon_gray" src="res/img/newicons/print.png"></a></li>
						<li><a href="eshop.php" class="nav_element department_icon_container">E-BOLT  <img class="department_icon_gray" src="res/img/newicons/webshop.png"></a></li>
						
			          </ul>
						<style>
						<?php
							if($page == "home"){
								echo '.dropdown-menu{
								  background: black;
								  text-align: center;
								}';
							}
							if($page == "eco"){
								echo '.dropdown-menu{
								  background-color: rgba(48, 130, 55, 1);
								  text-align: center;
								}';
							}
							if($page == "gift"){
								echo '.dropdown-menu{
								  background-color: rgba(244, 67, 54, 1);
								  text-align: center;
								}';
							}
							if($page == "sweet"){
								echo '.dropdown-menu{
								  background-color: rgba(163, 107, 70, 1);
								  text-align: center;
								}';
							}
							if($page == "fan"){
								echo '.dropdown-menu{
								  background-color: rgba(255, 175, 57, 1);
								  text-align: center;
								}';
							}
							if($page == "printing"){
								echo '.dropdown-menu{
								  background-color: rgba(83, 115, 114, 1);
								  text-align: center;
								}';
							}
							if($page == "eshop"){
								echo '.dropdown-menu{
								  background-color: black;
								  text-align: center;
								}';
							}
						?>
						</style>
          </li>
					
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<li><a href="javascript:waitforyou()" class="nav_element">VÁRJUK ÖNT</a></li>	
					<li><a href="javascript:speialOffer()" class="nav_element">AJÁNLATKÉRÉS</a></li>	
							
					<li class="dropdown">
	         		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WEBSHOP<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a target="blank" href="https://www.morethangiftscatalogue.com/CentralEuropeanCatalog/hu/eur/HomePage" class="nav_element">ÜZLETI</a></li>
							<li><a target="blank" href="http://enajandekom.hu" class="nav_element">LAKOSSÁGI</a></li>
							<!-- 
							<li><a target="blank" href="http://hajra-magyarok.hu" class="nav_element">RIA RIA HUNGARIA</a></li>
							 -->
						</ul>
						<style>
						<?php
							if($page == "home"){
								echo '.dropdown-menu{
								  background: black;
								  text-align: center;
								}';
							}
							if($page == "eco"){
								echo '.dropdown-menu{
								  background-color: rgba(48, 130, 55, 1);
								  text-align: center;
								}';
							}
							if($page == "gift"){
								echo '.dropdown-menu{
								  background-color: rgba(244, 67, 54, 1);
								  text-align: center;
								}';
							}
							if($page == "sweet"){
								echo '.dropdown-menu{
								  background-color: rgba(163, 107, 70, 1);
								  text-align: center;
								}';
							}
							if($page == "fan"){
								echo '.dropdown-menu{
								  background-color: rgba(255, 175, 57, 1);
								  text-align: center;
								}';
							}
							if($page == "printing"){
								echo '.dropdown-menu{
								  background-color: rgba(83, 115, 114, 1);
								  text-align: center;
								}';
							}
							if($page == "eshop"){
								echo '.dropdown-menu{
								  background-color: black;
								  text-align: center;
								}';
							}
						?>
						</style>
          			</li> 
          			         			
          			
          			
				<?php 
					$news = get_ujdonsag();
										
					if($news != null && $news["new_header_text"] != null && $news["new_header_link"] != null){	
						?>
						<li>  
						<!-- background-image: url(res/img/new.png); -->   
						<a style="padding-left: 1.3em;  background-size: 1.3em; background-repeat: no-repeat; background-position: left;" target="__blank" href="<?php echo $news["new_header_link"]; ?>">
						<?php echo $news["new_header_text"]; ?>
						</a>
						</li> 
				<?php }	?>     					          		          				    				         		
					
				</ul>
			</div>
		</div>
	</nav>