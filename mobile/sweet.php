<?php
$page="sweet";
require_once 'mobile-common/header.php';
$motto = "Nassolásunk Örömére";

?>

<!--MAIN SEGMENT-->
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
    
    <div class="sweet-title">
        Nassolásunk örömére...
        <hr style="width: 10%; border-color:#333;">
    </div>
    
    <div class="sweet-intro">
        Minőségi, belga alapanyagból készült táblás –és kocka csokik, bonbonok, egyedi kivitelezésű és megjelenésű csokoládék, cukorkák, rágógumik, ostyák, nápolyik, minden mi szem-szájnak ingere.
        Partnerei pozitív visszajelzésére bizton számíthat, ami így kezdődik majd: Hmmmmm…
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well" id="chocolate">
                            <div class="chocolate-open">
                                <b>Csokoládék</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well describe" id="chocolate-describe">
                            Lorem ipsum dolor sit amet, lobortis ligula tellus. Eget at volutpat, in orci leo gravida wisi. Quam parturient feugiat in mauris, rhoncus montes pretium viverra volutpat, justo mauris metus sit, ad neque in eu at in donec, nullam tristique at et morbi. Eget convallis magna nibh quis, mi dapibus, rhoncus in viverra egestas aut turpis.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well" id="lollypop">
                            <div class="lollypop-open">
                                <b>Promóciós édességek</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                        <div class="well describe" id="lollypop-describe">
                            Lorem ipsum dolor sit amet, lobortis ligula tellus. Eget at volutpat, in orci leo gravida wisi. Quam parturient feugiat in mauris, rhoncus montes pretium viverra volutpat, justo mauris metus sit, ad neque in eu at in donec, nullam tristique at et morbi. Eget convallis magna nibh quis, mi dapibus, rhoncus in viverra egestas aut turpis.
                        </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well promo" id="bonbon">
                    <div class="bonbon-open"><b>Nassolni valók</b></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" id="custom-describe">
                    <div class="custom-desc-open"><b>Egyedi készítésű édességek</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" id="gallery">
                    <div class="gallery-open"><b>Tekintse meg termékeinket</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--DEPARTMENT SEGMENT-->

<!--TIMELINE SEGMENT-->

<!--QUOTES-->

    
        
<?php 
require_once 'mobile-common/contact.php';
require_once 'mobile-common/footer.php';
?>