<!--MAIN SEGMENT-->
<div class="main_segment container-fluid" id="main">
		
	<div class="container">
		<div data-spy="affix" id="dot-nav">
			<ul>
			<li class="awesome-tooltip" title="Kezdőoldal" id="main-nav"><a href="#main"></a></li>
			<li class="awesome-tooltip" title="Cégünkről" id="timeline-nav"><a href="#timeline"></a></li>
			<li class="awesome-tooltip" title="Referenciák" id="reference-nav"><a href="#references"></a></li>
            <li class="awesome-tooltip" title="Katalógus" id="team-nav"><a href="#catalog"></a></li>          
			<li class="awesome-tooltip" title="Kapcsolat" id="contact-nav"><a href="#contact"></a></li>
			</ul>
		</div>
	</div>
    
    <div class="navhider">
        <h1 style="color:#181819;color: #181819;height: 20px;display: inline-block;font-size: 16px;">Stúdió68  Reklámajándék Kft</h1>
    </div>
    <div class="title-block">
    	
	</div>
</div>


<!-- CLOSED -->
<!-- 
<div class="closed_segment container-fluid segmentoverflow" id="closed">
<br/>
<br/>
	<b style="font-size:1.5em;">Cégünk 2017. december 22.<br/> és 2018 január 2. között ZÁRVA tart.</b><br/>
	<br/>
	<font>
	Ezen időszak alatt sem e-mail-ben,<br/> sem telefonon nem vagyunk elérhetőek!<br/>
	2018-ban megújult erővel állunk ismét rendelkezésükre!<br/>
	Keressenek mindket bizalommal!<br/>
	</font>
	<font class="specfont-closed">Áldott Békés Meghitt ünnepeket kívánunk!</font>
</div>
 -->

<!--DEPARTMENT SEGMENT-->
<div class="departments_segment container-fluid " id="departments">
	<div class="container">
		<div class="row">
			<div onclick="goto('eco.php')" class="col-xs-12 col-md-2 department " id="eco">
                Öko
                <div class="eco-opened">
                    <br>
                    Portfóliónkhoz kattintson
                    <hr style="width: 20%;">
                </div>
			</div>
			<div onclick="goto('sweet.php')" class="col-xs-12 col-md-2 department" id="food">
                Édesség
                <div class="food-opened">
                    <br>
                    Portfóliónkhoz kattintson
                    <hr style="width: 20%;">
                </div>
			</div>
			<div onclick="goto('gift.php')" class="col-xs-12 col-md-2 department" id="gifts">
                Ajándék
                <div class="gifts-opened">
                    <br>
                    Portfóliónkhoz kattintson
                    <hr style="width: 20%;">
                </div>
			</div>
			<div onclick="goto('fan.php')" class="col-xs-12 col-md-2 department" id="fan">
                Sport
                <div class="fan-opened">
                    <br>
                    Portfóliónkhoz kattintson
                    <hr style="width: 20%;">
                </div>
			</div>
			<div onclick="goto('printing.php')" class="col-xs-12 col-md-2 department" id="printing">
                Nyomda
                <div class="printing-opened">
                    <br>
                    Portfóliónkhoz kattintson
                    <hr style="width: 20%;">
                </div>
			</div>
            <div onclick="goto('#contact')" class="col-xs-12 col-md-2 department" id="custom">
                Kapcsolat
                <div class="custom-opened">
                    <br>
                    Írjon nekünk!
                    <hr style="width: 20%;">
                </div>
			</div>
		</div>
	</div>
</div>



<!--LAKOSSÁGI WEBSHOP-->
<!--<a target="_blank" href="http://www.enajandekom.hu" style="text-decoration: none;">
    <div class="webshop_segment" id="webshop">
        Lakossági Webshop
    </div>
</a>-->
<div onclick="subscribe_newsletter()" class="webshop_segment" id="webshop">
        Hírlevél Feliratkozás
    </div>


<!--TIMELINE SEGMENT-->
<div class="timeline_segment container-fluid segmentoverflow" id="timeline">
	<div class="timeline-segment-title">
       <h1 class="timeline-segment-header">Stúdió<font color="#e00901">68</font></h1>
    </div>
    <div class="summary-block">
        <b>Szeretjük a munkánkat és a kihívásokat!</b><br>
		Hittel, szakértelemmel, innovációval és örömmel tesszük a dolgunk.<br>
		Szakmailag teljes mértékben elhivatottak vagyunk, e téren nem ismerünk kompromisszumokat!<br>
		Nevünk alá, több üzletág csoportosul, hogy minél szélesebb ügyféligényeket elégíthessünk ki.<br>
		Sikereink záloga, nem más, mint maga az ÜGYFÉL, azaz ÖN!<br>
		Reméljük történetünk, Önnel közösen íródik tovább!<br>
		<b>Mi ezért dolgozunk 2001 óta „mások örömére…”*</b><br>
		*mások örömére = szlogenünk hűen tükrözi, hogy kizárólag akkor vagyunk elégedettek a ránk bízott munkákkal,
		ha mindaz Aki adja és mindaz Aki kapja mosolyog a végén.
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
    <div class="segment_title references_segment_title" style="margin-bottom: 50px;">
        <h1 class='reference-title'>Referenciák</h1>
    </div>

     <div class="reference-list-container">
     <?php 
     	$img_count = 1;
     	while($img_count < 70){
     		?>
     		<div class="reference-list-column">
	     		<div  class="refli">
					<img class="refimg"  alt="referencia logó" src="res/img/logok/logo<?php echo $img_count; ?>.jpg" >
					
				</div>
				<div  class="refli">
					<img class="refimg"  alt="referencia logó" src="res/img/logok/logo<?php echo $img_count+1; ?>.jpg" >
					
				</div>				
     		</div>
     		<?php      		     	
     		$img_count++;
     		$img_count++;
     	}
     
     ?>
    </div>
</div>

<!--TEAM SEGMENT-->
<!-- SZEZONÁLIS UPDATE. KÖNNYŰ VISSZATÉRÉSHEZ A b4bf9f5f76937bac1174fe8ba3b5c1772fe91629 HASH-ű COMMITHOZ ROLLBACK--> 
<!--
<div id="catalog" style="background-color:white;text-align:center;font-size:3em;color:black;    font-family: 'Muli', sans-serif;">
Lapozzon bele 2019-as ajándéktárgy katalógusunkba
	
</div>
<a style="display:block;background-color:white;" href="http://online.fliphtml5.com/ohnj/xtwq/" target="_blank" id="christmas">
	<div href="http://online.fliphtml5.com/ohnj/mkje/" class="catalog_segment container-fluid segmentoverflow" id="team">
	</div>
</a>

-->