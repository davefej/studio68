<?php
$page="eco";
require_once 'common/header.php';
$motto = "Környezetünk Örömére";
$page="eco";
//require_once 'common/topsegment.php';
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
					<li><a href="reference.php" class="nav_element">REFERENCIÁK</a></li>
					<li><a href="#contact" class="nav_element">KAPCSOLAT</a></li>
					<li><a href="#" class="nav_element">WEBSHOP</a></li>
				</ul>
			</div>
		</div>
	</nav>
		
	<div class="container">
		<div data-spy="affix" id="dot-nav">
			<ul>
			<li class="awesome-tooltip" title="Termékek" id="main-nav"><a href="#main"></a></li>
			<li class="awesome-tooltip" title="Környezetünkről" id="timeline-nav"><a href="#timeline"></a></li>
			<li class="awesome-tooltip" title="Kapcsolat" id="contact-nav"><a href="#contact"></a></li>
			</ul>
		</div>
	</div>

    <div class="eco-title">
        Környezetünk örömére...
    </div>
    
    <div class="eco-intro">
        Környezettudatos termékeink nem pusztán divatból kerültek be kínálatunkba.
        Valljuk, hogy természetünk drága kincs, melyet óvni kell, nemcsak beszélni róla.
        Amennyiben Ön is elkötelezett a természetvédelem területén, itt a lehetőség, hogy együtt forradalmasíthassuk meg az öko tudatos gondolkodást.
        Rendeljen promóciós céljaihoz zöld termékeket.
        Itt minden újrahasznosított. Vagy vízzel működik. Illetve napelemmel. Esetleg dinamóval.
        Görget. És…
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="well" id="energy">
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well" id="energy-describe">
                            Zöld Energia
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well" id="textil-describe">
                            Öko Textil termékek
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well" id="textil">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="well promo" id="eco-gifts">
                    <div class="eco-gifts-open">Öko Ajándékok</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well promo" id="gallery">
                    <div class="gallery-open">Tekintse meg termékeinket
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
$page="eco";
require_once 'common/contact.php';
require_once 'common/footer.php';
?>