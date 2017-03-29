<?php
$page="home";
require_once 'common/header.php';
$motto = "Mások Örömére";
require_once 'common/topsegment.php';
?>



<!--DEPARTMENT SEGMENT-->
<div class="departments_segment container-fluid" id="departments">
	<div class="container">
		<div class="row">
			<div onclick="goto('eco/eco.php')" class="col-xs-12 col-md-2 department " id="eco">
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
                Szurkolói
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
<div class="webshop_segment" id="webshop">
    Van lakossági webshopunk is!
</div>

<!--TIMELINE SEGMENT-->
<div class="timeline_segment container-fluid" id="timeline">
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
      
<!--TEAM SEGMENT-->
<div class="team_segment container-fluid" id="team">
    <div class="title-block">
     <h1 class="teamsegmenttitle">Csapat</h1>

       <div class="wrap">
          <div class="scrollbar">
            <div class="handle">
              <div class="mousearea"></div>
            </div>
          </div>
            
          <div class="frame" id="cyclepages">
            <ul class="clearfix">
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/nobody.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                              <span class="teamname">Plicher Zoltán</span><br/>
                                <span class="teamtitle">ügyvezető igazgató</span><br/>
                                 <a class="teammail" href="mailto:zoltan@studio68.hu">zoltan@studio68.hu</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >Vallom, hogy a megalkuvást nem ismerő, alázatos hivatás gyakorlása, kimunkálja azt a bizalmat, amely reménységet és hitet adhat a jövő célkitűzéseihez.</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/andras_profil.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <span class="teamname">Lőrincz András</span><br/> 
                                <span class="teamtitle">kereskedelmi igazgató</span>
                                <br/><a class="teammail" href="mailto:andras@studio68.hu">andras@studio68.hu</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >Először tedd meg amit kell, aztán tedd meg amit lehet, utána a lehetetlen is sikerülni fog!</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/deni_profil.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                               <span class="teamname">Droszt Denisa</span><br/> 
                                <span class="teamtitle">promóciós vezető</span>
                                 <br/><a class="teammail" href="mailto:deni@studio68.hu">deni@studio68.hu</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >A minőségre törekszem, és akkor is próbálok jó munkát végezni, ha éppen nincs szem előtt!</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/reni_profil.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <span class="teamname">Ádám Renáta</span><br/> 
                                <span class="teamtitle">promóciós szakértő</span>
                                <br/><a class="teammail" href="mailto:reni@studio68.hu">reni@studio68.hu</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >A lehetőségeket nem csak megkapni kell, hanem élni is tudni kell velük!</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/evi_profil.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <span class="teamname">Szabó Éva</span><br/> 
                                <span class="teamtitle">promóciós asszisztens</span>
                                <br/><a class="teammail" href="mailto:eva@studio68.hu">eva@studio68.hu</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >Semmi sem fontosabb a szenvedélynél. Nem számít, mit csinálsz az életedben, azt szenvedéllyel tedd!</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/robi_profil.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <span class="teamname">Lutze Róbert</span><br/> 
                                <span class="teamtitle">logisztikai vezető</span>
                                <br/><a class="teammail" href="mailto:logisztika@studio68.hu">logisztika@studio68.hu</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >Kiemelten figyelek arra, hogy mindig, minden időben és épségben célba érjen!</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table class="teamtable">
                        <tr>
                            <td class="teamtd">
                                <img class="teamimg" src="img/nobody.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <span class="teamname">Csorba Magdolna</span><br/>
                                <span class="teamtitle">pénzügy / könyvelés</span>
                                <br/><a class="teammail" href="mailto:magdi@studio68.hu">magdi@studio68.hu</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd teamtext">
                                <span >Szeretem a munkám. Hivatásomnak tekintem.
Bár látszólag „csak” papírmunka és számok tengere, én mégis örömmel végzem.
Érzem, hogy számítanak rám, és ez kellő motivációt ad a mindennapokhoz.</span>
                            </td>
                        </tr>
                    </table>
                </li>
            </ul>
          </div>

          <ul class="pages"></ul>
        </div>
    </div>
</div>      
        
<!--REFERENCES SEGMENT-->
<div class="references_segment container-fluid segmentoverflow" id="references">
    <div class="segment_title" style="color: #e00901; margin-bottom: 50px;">
        Referenciák
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo1.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo2.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo3.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo4.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo5.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo6.jpg" alt="" width="50%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo7.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo8.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo9.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo10.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo11.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo12.jpg" alt="" width="50%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo13.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo14.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo15.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo16.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo17.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo18.jpg" alt="" width="50%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo19.png" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo20.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo21.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo22.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo23.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo24.jpg" alt="" width="50%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo25.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo26.gif" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo27.bmp" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo28.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo29.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo30.jpg" alt="" width="50%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo31.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo32.bmp" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo33.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo34.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo35.jpg" alt="" width="50%">
            </div>
            <div class="col-sm-4 col-sm-2">
                <img class="logos" src="img/logok/logo36.png" alt="" width="50%">
            </div>
        </div>
    </div>
</div>

<?php 
$page="home";
require_once 'common/contact.php';
require_once 'common/footer.php';
?>