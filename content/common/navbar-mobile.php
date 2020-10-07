<?php require_once 'common_helper.php';?>
<nav  class="navbar navbar-default navbar-fixed-top <?php echo "navbar-".$page;?>" id="navbar">
		<div class="container-fluid">
			<div class="navbar-header" >
				<a class="navbar-brand" style="pointer-events: none; cursor: default; color: white;">
					<?php
					if($page == "home"){
						echo '<span class="nav_text_span">Stúdió<font style="color:#e00901;">68</font></span>';
					}
					if($page == "eco"){
						//echo 'ÖKO';
						echo '<img class="department_icon" src="res/img/newicons/eco.png" style="text-align:center;">';
						echo '<style>
						.container-fluid>.navbar-header {
						  margin-right: 0;
						}
						</style>';
					}
					if($page == "gift"){
						echo '<img class="department_icon2" src="res/img/newicons/gift.png">';
						//echo 'AJÁNDÉK';
					}
					if($page == "sweet"){
						//echo 'ÉDESSÉG';
						echo '<img class="department_icon2" src="res/img/newicons/sweet.png">';
					}
					if($page == "fan"){
						//echo 'SPORT';
						echo '<img class="department_icon2" src="res/img/newicons/sport.png">';
					}
					if($page == "printing"){
						echo '<img class="department_icon2" src="res/img/newicons/print.png" style="text-align:center;">';
						//echo 'NYOMDA';
					}
					if($page == "eshop"){
						echo '<img class="department_icon2" src="res/img/newicons/webshop.png" style="text-align:center;">';
					}
					?>
				</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php" class="nav_element"><img style="max-height: 1.2em;" src="res/img/home_icon.png"></a></li>
					<li><a href="eco.php" class="nav_element">ÖKO</a></li>
					<li><a href="sweet.php" class="nav_element">ÉDESSÉG</a></li>
					<li><a href="gift.php" class="nav_element">AJÁNDÉK</a></li>
					<li><a href="fan.php" class="nav_element">SPORT</a></li>
					<li><a href="printing.php" class="nav_element">NYOMDA</a></li>
					<li><a href="eshop.php" class="nav_element">E-BOLT</a></li>
			
	
					
					<?php 
					$news = get_ujdonsag();
										
					if($news != null && $news["new_header_text"] != null && $news["new_header_link"] != null){	
						?>
					<!-- background-image: url(res/img/new.png); -->
					<li>     
						<a style="padding-left: 1.3em;  background-size: 1.3em; background-repeat: no-repeat; background-position: left;" target="__blank" href="<?php echo $news["new_header_link"]; ?>">
						<?php echo $news["new_header_text"]; ?>
						</a>
					</li> 
					<?php }	?>     					          		          				    				         		
					
					
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<li><a href="javascript:waitforyou()" class="nav_element">VÁRJUK ÖNT</a></li>	
					<li><a href="javascript:speialOffer()" class="nav_element">AJÁNLATKÉRÉS</a></li>	
					<li><a target="blank" href="http://enajandekom.hu" class="nav_element">LAKOSSÁGI WEBSHOP</a></li>
					<li><a target="blank" href="https://www.morethangiftscatalogue.com/CentralEuropeanCatalog/hu/eur/HomePage" class="nav_element">ÜZLETI WEBSHOP</a></li>
					<!-- 
					<li><a target="blank" href="http://hajra-magyarok.hu" class="nav_element">RIA RIA HUNGARIA</a></li>
					 -->
				</ul>
			</div>
		</div>
	</nav>
