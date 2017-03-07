<?php
require_once 'common/header.php';
$motto = "Mások Örömére";
$page="home";
require_once 'common/topsegment.php';
?>



<!--DEPARTMENT SEGMENT-->
<div class="departments_segment container-fluid" id="departments">
	<div class="container">
		<div class="row">
			<div onclick="goto('eco.php')" class="col-xs-12 col-md-2 department " id="eco">
                Öko
                <div class="eco-opened">
                    Környezettudatos Reklámajándék
                </div>
			</div>
			<div onclick="goto('sweet.php')" class="col-xs-12 col-md-2 department" id="food">
                Édesség
                <div class="food-opened">
                    A páratlan finomságok tárháza
                </div>
			</div>
			<div onclick="goto('gift.php')" class="col-xs-12 col-md-2 department" id="gifts">
                Ajándék
                <div class="gifts-opened">
                    Ügyfeleink örömére
                </div>
			</div>
			<div onclick="goto('fan.php')" class="col-xs-12 col-md-2 department" id="fan">
                Szurkolói
                <div class="fan-opened">
                    Hallasd a hangod!
                    Szurkolói ajándék
                </div>
			</div>
			<div onclick="goto('printing.php')" class="col-xs-12 col-md-2 department" id="printing">
                Nyomda
                <div class="printing-opened">
                    Partnereink örömére
                </div>
			</div>
			<div onclick="goto('reference.php')" class="col-xs-12 col-md-2 department" id="custom">
                Referenciák
                <div class="custom-opened">
                    Az elmúlt évek művei
                </div>
			</div>
		</div>
	</div>
</div>

<!--TIMELINE SEGMENT-->
<div class="timeline_segment container-fluid" id="timeline">
	<div class="teamsegmenttitle">
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

<!--QUOTES-->
<div class="quote" id="quote">
"Idézet"
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

          <div class="frame" id="crazy">
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
                            <td class="teamtd ">
                                <span >Vallom, hogy a megalkuvást nem ismerő, alázatos hivatás gyakorlása, kimunkálja azt a bizalmat, amely reménységet és hitet adhat a jövő célkitűzéseihez.</span>
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
                            <td class="teamtd ">
                                <span >Először tedd meg amit kell, aztán tedd meg amit lehet, utána a lehetetlen is sikerülni fog!</span>
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
                               <span class="teamname">Droszt Denisa</span><br/> 
                                <span class="teamtitle">Promóciós Vezető</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd ">
                                <span >.......</span>
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
                                <span class="teamname">Ádám Renáta</span><br/> 
                                <span class="teamtitle">Promóciós Szakértő</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd ">
                                <span >A lehetőségeket nem csak megkapni kell, hanem tudni is kell velük élni!</span>
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
                                <span class="teamname">Szabó Éva</span><br/> 
                                <span class="teamtitle">promóciós asszisztens</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd ">
                                <span >Egy két mondat amivel összegezem miért szeretek a stúdió68nál dolgozni dolgozni</span>
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
                                <span class="teamname">Lutze Róbert</span><br/> 
                                <span class="teamtitle">logisztikai vezető</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd ">
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
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd">
                                <br/>	<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="teamtd ">
                                <span >Egy két mondat amivel összegezem miért szeretek a stúdió68nál dolgozni dolgozni</span>
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
                
        
<?php 
require_once 'common/contact.php';
require_once 'common/footer.php';
?>