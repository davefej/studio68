<?php
$page="eco";
require_once '../common/header.php';
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
					<li><a href="index.php" class="nav_element">STÚDIÓ<font color="#f44336">68</font></a></li>
					<li><a href="eco/eco.php" class="nav_element">ÖKO</a></li>
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
		
	<div class="title-block">
		<div class="maintext">
			
		</div>
	</div>
</div>

<!--DEPARTMENT SEGMENT-->
<div class=" departments_segment container-fluid eco-color" id="eco-main">
	<div class="container">
		<div class="row">
			<div onclick="goto('eco.php')" class="col-xs-12 col-md-2 department " id="eco">
                Öko
                <div class="eco-opened">
                    Környezettudatos Reklámajándék
                </div>
			</div>
			<div onclick="goto('sweet.php')" class="col-xs-12 col-md-2 department" id="eco">
                Édesség
                <div class="eco-opened">
                    A páratlan finomságok tárháza
                </div>
			</div>
			<div onclick="goto('gift.php')" class="col-xs-12 col-md-2 department" id="eco">
                Ajándék
                <div class="eco-opened">
                    Ügyfeleink örömére
                </div>
			</div>
			<div onclick="goto('fan.php')" class="col-xs-12 col-md-2 department" id="eco">
                Szurkolói
                <div class="eco-opened">
                    Hallasd a hangod!
                    Szurkolói ajándék
                </div>
			</div>
			<div onclick="goto('printing.php')" class="col-xs-12 col-md-2 department" id="eco">
                Nyomda
                <div class="eco-opened">
                    Partnereink örömére
                </div>
			</div>
			<div onclick="goto('reference.php')" class="col-xs-12 col-md-2 department" id="eco">
                Referenciák
                <div class="eco-opened">
                    Az elmúlt évek művei
                </div>
			</div>
		</div>
	</div>
</div>

<!--TIMELINE SEGMENT-->
<div class="timeline_segment container-fluid" id="eco-bio">
	<div class="title-block">
        <div class="timeline-segment-title">
            Környezetünk
        </div>
		<div class="summary-block" style="color:000000">
			Környezettudatos termékeink nem pusztán divatból kerültek be kínálatunkba.
            Valljuk, hogy természetünk drága kincs, melyet óvni kell, nemcsak beszélni róla.
            Amennyiben Ön is elkötelezett a természetvédelem területén, itt a lehetőség, hogy együtt forradalmasíthassuk meg az öko tudatos gondolkodást.
            Rendeljen promóciós céljaihoz zöld termékeket.
            Itt minden újrahasznosított. Vagy vízzel működik. Illetve napelemmel. Esetleg dinamóval.
            Görget. És…
		</div>
	</div>
</div>

<!--QUOTES-->
<div class="quote" id="quote">
    "Idézet"
</div>
      
<?php 
$page="eco";
require_once '../common/contact.php';
require_once '../common/footer.php';
?>