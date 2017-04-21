<?php
$page="fan";
require_once 'mobile-common/header.php';
$motto = "Szurkolóink Örömére";
//require_once 'common/topsegment.php';

?>

<div class="main_segment container-fluid" id="main">
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
					<li><a href="index.php" class="nav_element">STÚDIÓ<font color="#e00901">68</font></a></li>
					<li><a href="eco.php" class="nav_element">ÖKO</a></li>
					<li><a href="sweet.php" class="nav_element">ÉDESSÉG</a></li>
					<li><a href="gift.php" class="nav_element">AJÁNDÉK</a></li>
					<li><a href="fan.php" class="nav_element">SZURKOLÓI</a></li>
					<li><a href="printing.php" class="nav_element">NYOMDA</a></li>
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<li><a href="#" class="nav_element">WEBSHOP</a></li>
				</ul>
			</div>
		</div>
	</nav>

    <div class="gift-title">
        Szurkolóink örömére…
        <hr style="width: 10%; border-color:#333;">
    </div>
    
    <div class="gift-intro">
        Célunk, hogy a hazai sportszakmai szervezetekkel közösen, tudatosítsuk a merchandise fogalmát Magyarországon.
        Feladataink közé tartoznak jelenleg: Shop ellátás, szurkolói termékek gyártása, Clubok, Egyesületek portfóliójának bővítése.
        Részt vettünk több hazai rendezésű Európa –ill. Világbajnokságon, mint promóciós partner, akár kitelepüléssel együtt.
        Felkészülten várjuk jelentkezését, valósítsuk meg együtt sport promóciós terveit.
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well" id="gift-webshop">
                    <div class="gift-webshop-open">
                        <b>Ajándék tárgyak</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well describe" id="gift-webshop-describe">
                    Lorem ipsum dolor sit amet, lobortis ligula tellus. Eget at volutpat, in orci leo gravida wisi. Quam parturient feugiat in mauris, rhoncus montes pretium viverra volutpat, justo mauris metus sit, ad neque in eu at in donec, nullam tristique at et morbi. Eget convallis magna nibh quis, mi dapibus, rhoncus in viverra egestas aut turpis.
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <div class="well" id="custom-gift">
                    <div class="custom-gift-open">
                        <b>Textilek</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well describe" id="custom-gift-describe">
                    Lorem ipsum dolor sit amet, lobortis ligula tellus. Eget at volutpat, in orci leo gravida wisi. Quam parturient feugiat in mauris, rhoncus montes pretium viverra volutpat, justo mauris metus sit, ad neque in eu at in donec, nullam tristique at et morbi. Eget convallis magna nibh quis, mi dapibus, rhoncus in viverra egestas aut turpis.
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="well promo" id="textile">
                    <div class="textile-open"><b>Szurkolói kellékek</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" id="people-webshop">
                    <div class="people-webshop-open">
                        <b>Egyedi gyártás</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" id="gallery">
                    <div class="gallery-open"><b>serlegek, kupák</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
        
<?php 
$page = "fan";
require_once 'mobile-common/contact.php';
require_once 'mobile-common/footer.php';
?>