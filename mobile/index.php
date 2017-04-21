<?php
$page="home";
require_once 'mobile-common/header.php';
$motto = "Mások Örömére";
require_once 'mobile-common/topsegment.php';
?>



<!--DEPARTMENT SEGMENT-->
<div class="departments_segment container-fluid " id="departments">
	<div class="container">
		<div class="row">
			<div onclick="goto('eco.php')" class="col-xs-12 col-md-2 department " id="eco">
                <b>Öko</b>
				<hr style="width: 10%">
				<span class="desc" id="eco-desc">
					Ha érdekelnek környezetbarát termékeink itt keresd!
				</span>
			</div>
			<div onclick="goto('sweet.php')" class="col-xs-12 col-md-2 department" id="food">
                <b>Édesség</b>
				<hr style="width: 10%">
				<span class="desc" id="sweet-desc">
					Ha egy kis édességre éhezel ugorj bele!
				</span>
			</div>
			<div onclick="goto('gift.php')" class="col-xs-12 col-md-2 department" id="gifts">
                <b>Ajándék</b>
				<hr style="width: 10%">
				<span class="desc" id="gift-desc">
					Meglepnél másokat? Itt inspirációt találhatsz!
				</span>
			</div>
			<div onclick="goto('fan.php')" class="col-xs-12 col-md-2 department" id="fan">
                <b>Szurkolói</b>
				<hr style="width: 10%">
				<span class="desc" id="fan-desc">
					Szurkoljunk együtt!
				</span>
			</div>
			<div onclick="goto('printing.php')" class="col-xs-12 col-md-2 department" id="printing">
                <b>Nyomda</b>
				<hr style="width: 10%">
				<span class="desc" id="print-desc">
					Bármit kinyomtatunk neked, nézd meg mit kínálunk!
				</span>
			</div>
            <div onclick="goto('#contact')" class="col-xs-12 col-md-2 department" id="custom">
                <b>Kapcsolat</b>
				<hr style="width: 10%">
				<span class="desc" id="print-desc">
					Írj nekünk bátran!
				</span>
			</div>
		</div>
	</div>
</div>

<!--LAKOSSÁGI WEBSHOP-->
<div class="webshop_segment" id="webshop">
    Van lakossági webshopunk is!
</div>

<!--TIMELINE SEGMENT-->
<div class="timeline_segment container-fluid segmentoverflow" id="timeline">
	<div class="timeline-segment-title">
        Vállalkozásunk
    </div>
    <div class="summary-block">
        <b>Egy név - ami kötelez, több üzletág - ami összehoz.<br/></b>
        Ajándéktárgy? Textil? Emblémázás? ÖKO termékek? Páratlan promóciós finomságok?
        Nyomda? Saját, dolgozói vagy partner Web shop? Merchandise termékek?
        Kitelepülés? Egyedi gyártások? Szurkolói kellékek? Konszignációs rendelési lehetőségek?<br/>
        A válaszunk az, hogy <b>IGEN, VAN!</b><br/>
        2001 óta dolgozunk „mások örömére…”<br/>
        Célunk, hogy folytassuk a munkát, amit elkezdtünk, amihez értünk, amit szeretünk.
        Sikereink záloga, nem más, mint maga az ÜGYFÉL, azaz ÖN!<br/>Reméljük történetünk, Önnel közösen íródik tovább!
    </div>
</div>

<!--COUNTER SEGENT-->
<div class="counter_segment container-fluid" id="counters">
    <div class="row">
        <div class="half-block" style="border-right: thin solid #e00901">
            ÜGYFELEINK SZÁMA
            <div class="count first-count">0</div>
        </div>
        <div class="half-block">
            TERMÉKEINK SZÁMA
            <div class="count second-count">0</div>
        </div>
    </div>
</div>
      
<!--REFERENCES SEGMENT-->
<div class="references_segment container-fluid segmentoverflow" id="references">
    <div class="segment_title" style="color: #e00901; margin-bottom: 50px;">
        Referenciák
		<hr style="width:10%;">
		<span class="desc1">Kiemelt ügyfeleink</span>
    </div>
	<div class="hor-scroll">
		<table>
			<tr>
				<td>
					<img class="refimg" src="img/logok/logo1.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo2.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo3.jpg" >
				</td>
			</tr>
			<tr>
				<td>
					<img class="refimg" src="img/logok/logo4.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo5.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo6.jpg" >
				</td>
			</tr>
			<tr>
				<td>
					<img class="refimg" src="img/logok/logo7.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo8.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo9.jpg" >
				</td>
			</tr>
			<tr>
				<td>
					<img class="refimg" src="img/logok/logo10.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo11.jpg" >
				</td>
				<td>
					<img class="refimg" src="img/logok/logo12.jpg" >
				</td>
			</tr>
		</table>
	</div>
</div>

<!--TEAM SEGMENT-->
<div class="team_segment container-fluid segmentoverflow" id="team">
    <div class="title-block">
     <h1 class="teamsegmenttitle">Csapat</h1>
     <ul id="scroller">
			<li>
				<img class="teamimg" src="img/zoli_profil.png" width="250" height="250">
				  <div class="teamitemdiv">
					 <span class="teamname">Plicher Zoltán</span><br/>
	                 <span class="teamtitle">ügyvezető igazgató</span><br/>
	                 <a class="teammail" href="mailto:zoltan@studio68.hu">zoltan@studio68.hu</a>
                     <br/><br/><span class="teamtext">Vallom, hogy a megalkuvást nem ismerő, alázatos hivatás gyakorlása, kimunkálja azt a bizalmat, amely reménységet és hitet adhat a jövő célkitűzéseihez.</span>
                    
                 </div>
			</li>
			<li>
				<img class="teamimg" src="img/andras_profil.png" width="250" height="250">
				<div class="teamitemdiv">
                   <span class="teamname">Lőrincz András</span><br/> 
                   <span class="teamtitle">kereskedelmi igazgató</span> <br/>
                   <a class="teammail" href="mailto:andras@studio68.hu">andras@studio68.hu</a>
                    <br/><br/><span class="teamtext">Először tedd meg amit kell, aztán tedd meg amit lehet, utána a lehetetlen is sikerülni fog!</span>                 </div>
			</li>
			<li>
				<img class="teamimg" src="img/deni_profil.png" width="250" height="250">
				<div class="teamitemdiv">
					 <span class="teamname">Droszt Denisa</span><br/> 
                     <span class="teamtitle">promóciós vezető</span>
                     <br/><a class="teammail" href="mailto:deni@studio68.hu">deni@studio68.hu</a>
                     <br/><br/><span class="teamtext">A minőségre törekszem, és akkor is próbálok jó munkát végezni, ha éppen nincs szem előtt!</span>
                </div>
			</li>
            <li>
				<img class="teamimg" src="img/reni_profil.png" width="250" height="250">
				<div class="teamitemdiv">
					  <span class="teamname">Ádám Renáta</span><br/> 
                      <span class="teamtitle">promóciós szakértő</span>
                      <br/><a class="teammail" href="mailto:reni@studio68.hu">reni@studio68.hu</a>
                      <br/><br/><span class="teamtext" >A lehetőségeket nem csak megkapni kell, hanem élni is tudni kell velük!</span>
                </div>
			</li>
			<li>
				<img class="teamimg" src="img/evi_profil.png" width="250" height="250">
				<div class="teamitemdiv">
					 <span class="teamname">Szabó Éva</span><br/> 
                     <span class="teamtitle">promóciós asszisztens</span>
                     <br/><a class="teammail" href="mailto:eva@studio68.hu">eva@studio68.hu</a>
                     <br/><br/><span class="teamtext" >Semmi sem fontosabb a szenvedélynél. Nem számít, mit csinálsz az életedben, azt szenvedéllyel tedd!</span>                                
                 </div>
			</li>
			<li>
				<img class="teamimg" src="img/robi_profil.png" width="250" height="250">
				<div class="teamitemdiv">
					 <span class="teamname">Lutze Róbert</span><br/> 
                     <span class="teamtitle">logisztikai vezető</span>
                     <br/><a class="teammail" href="mailto:logisztika@studio68.hu">logisztika@studio68.hu</a> 
                     <br/><br/><span class="teamtext">Kiemelten figyelek arra, hogy mindig, minden időben és épségben célba érjen!</span>     
                 </div>
			</li>
			<li>
				<img class="teamimg" src="img/magdi_profil.png" width="250" height="250">
				<div class="teamitemdiv">
					 <span class="teamname">Csorba Magdolna</span><br/>
                     <span class="teamtitle">pénzügy / könyvelés</span>
                    <br/><a class="teammail" href="mailto:magdi@studio68.hu">magdi@studio68.hu</a>
                    <br/><br/><span class="teamtext">Szeretem a munkám. Hivatásomnak tekintem.
						Bár látszólag „csak” papírmunka és számok tengere, én mégis örömmel végzem.
						Érzem, hogy számítanak rám, és ez kellő motivációt ad a mindennapokhoz.</span>                 
			</div>
			</li>
	</ul>
    </div>
</div>


<?php 
$page="home";
require_once 'mobile-common/contact.php';
require_once 'mobile-common/footer.php';
?>

</script>
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css">
<link rel="stylesheet" href="css/reference-styles.css?v=<?php echo $version;?>">
<link rel="stylesheet" href="css/team-style.css?v=<?php echo $version;?>">

