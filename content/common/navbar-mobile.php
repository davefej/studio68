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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php" class="nav_element">STÚDIÓ <?php if($page=="gift"){?><font color="black"> <?php }else{ ?> <font color="#e00901"><?php } ?>68</font></a></li>
					<li><a href="eco.php" class="nav_element">ÖKO</a></li>
					<li><a href="sweet.php" class="nav_element">ÉDESSÉG</a></li>
					<li><a href="gift.php" class="nav_element">AJÁNDÉK</a></li>
					<li><a href="fan.php" class="nav_element">SPORT</a></li>
					<li><a href="printing.php" class="nav_element">NYOMDA</a></li>
					<li><a href="eshop.php" class="nav_element">E-BOLT</a></li>
					
					<?php if(isset($page) && $page=="blog"){?>					
					<li><a href="index.php#contact" class="nav_element">KAPCSOLAT</a></li>
					<?php }else{?>
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<?php }?>
					<li><a target="blank" href="http://giftworld.yourpromotionalshop.com/home.mvc" class="nav_element">WEBSHOP</a></li>
				</ul>
			</div>
		</div>
	</nav>