<?php
$page="fan";
require_once 'common/header.php';
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
		
	<div class="container">
		<div data-spy="affix" id="dot-nav">
			<ul>
			<li class="awesome-tooltip" title="Kezdőoldal" id="main-nav"><a href="#main"></a></li>
			<li class="awesome-tooltip" title="Cégünkről" id="timeline-nav"><a href="#timeline"></a></li>
            <li class="awesome-tooltip" title="Csapat" id="team-nav"><a href="#team"></a></li>
            <li class="awesome-tooltip" title="Referenciák" id="reference-nav"><a href="#references"></a></li>
			<li class="awesome-tooltip" title="Kapcsolat" id="contact-nav"><a href="#contact"></a></li>
			</ul>
		</div>
	</div>
    
    <div class="fan-block">
		<div class="maintext">
        <span class="title">Stúdió<font color="#e00901">68</font></span><br>
			<span class="motto">Szurkolóink Örömére...</span>
		</div>
	</div>
</div>

<!--DEPARTMENT SEGMENT-->
<div class="departments_segment container-fluid fan-color" id="departments">
	<div class="container">
		<div class="department_text">
		Célunk, hogy a hazai sportszakmai szervezetekkel közösen, tudatosítsuk a merchandise fogalmát Magyarországon.
        Feladataink közé tartoznak jelenleg: Shop ellátás, szurkolói termékek gyártása, Clubok, Egyesületek portfóliójának bővítése.
        Részt vettünk több hazai rendezésű Európa –ill. Világbajnokságon, mint promóciós partner, akár kitelepüléssel együtt.
        Felkészülten várjuk jelentkezését, valósítsuk meg együtt sport promóciós terveit.
		</div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="well promo" style="background-color: #e00901;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" style="background-color: white;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="well promo" style="background-color: green;">
                </div>
            </div>
        </div>
	</div>
    
</div>
        
<?php 
require_once 'common/contact.php';
require_once 'common/footer.php';
?>