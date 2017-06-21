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
					echo 'ÖKO';
				}
				if($page == "gift"){
					echo 'AJÁNDÉK';
				}
				if($page == "sweet"){
					echo 'ÉDESSÉG';
				}
				if($page == "fan"){
					echo 'SPORT';
				}
				if($page == "printing"){
					echo 'NYOMDA';
				}
				if($page == "eshop"){
					echo 'E-BOLT';
				}
				?>
			</a>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
          	<a href="index.php" class="nav_element">STÚDIÓ <?php if($page=="gift"){?><font color="black"> <?php }else{ ?> <font color="#e00901"><?php } ?>68</font></a>
					</li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ÜZLETÁGAK<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="eco.php" class="nav_element">ÖKO</a></li>
	            <li><a href="sweet.php" class="nav_element">ÉDESSÉG</a></li>
	            <li><a href="gift.php" class="nav_element">AJÁNDÉK</a></li>
	            <li><a href="fan.php" class="nav_element">SPORT</a></li>
							<li><a href="printing.php" class="nav_element">NYOMDA</a></li>
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

					<li><a href="eshop.php" class="nav_element">E-BOLT</a></li>
					<!-- <li><a href="blog.php" class="nav_element">BLOG</a></li> -->
					<?php if(isset($page) && $page=="blog"){?>
					<li><a href="index.php#contact" class="nav_element">KAPCSOLAT</a></li>
					<?php }else{?>
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<?php }?>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WEBSHOP<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a target="blank" href="http://giftworld.yourpromotionalshop.com/home.mvc" class="nav_element">ÜZLETI</a></li>
							<li><a target="blank" href="http://enajandekom.hu" class="nav_element">LAKOSSÁGI</a></li>
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
				</ul>
			</div>
		</div>
	</nav>
