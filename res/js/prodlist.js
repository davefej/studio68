function openprodlist(type){

	if(usemobileview){
		jQuery.ajax({
			type: 'GET',
			url: "admin/common/listprod_mobile.php?type="+type,
			success: function(data) {
				bootbox.alert(data);
				
			}
		});
	}else{
		jQuery.ajax({
			type: 'GET',
			url: "admin/common/listprods.php?type="+type,
			success: function(data) {
				bootbox.alert(data);				
				$( ".proddesc" ).hover(function() {
					$(this).children(".proddescdetails").show();
					$(this).children(".proddescdotdot").hide();
				},function() {
					$(this).children(".proddescdetails").hide();
					$(this).children(".proddescdotdot").show();
				});
				
				$( ".prodimgbg" ).click(function() {
					
					var desc = $(this).parent().next().html() || "";
					
					bootbox.alert("<div class='imgshow'><img class='imgshowimg' src="+$(this).attr("src")+"><br/></img><span class='imgshowtitle'>"+desc+"</span></div>")
				});
				
			}
		});
	}
}


var offerbb = null 

function offer(id){
	var ptitle = $("#prodtitle_"+id).html();
	var pdesc = $("#proddesc_"+id).html();
	if(!ptitle){
		ptitle ="";
	}else{
		ptitle = ptitle.replace('<br/>'," ").replace('<br/>'," ").replace('\n'," ").replace('\n'," ")
		ptitle = "Kedves Stúdió 68!\n\nSzeretnék ajánlatot kérni a "+ptitle+" termékre.\n\n";
		ptitle += "Darabszám: \n";
		ptitle += "Grafikai kivitelezés / színek száma: \n";
		ptitle += "Kért szállítási határidő: \n";
		ptitle += "Cégnév: \n";
		ptitle += "Egyéb információ: \n";

	}
	if(!pdesc){
		pdesc ="";
	}
	var bbcontent = "";
	if(typeof usemobileview !== 'undefined' && usemobileview){
		bbcontent += '<div class="col-md-12 col-md-6"style="float: inherit;margin:0 auto;margin-top:2vh;">';
	}else{
		bbcontent += '<div class="col-md-12 col-md-6"style="float: inherit;margin:0 auto;margin-top:18vh;">';
	}
	bbcontent += '<div class="well well-contact">';
	bbcontent += ' <div class="contact form-group">';
         	
	bbcontent += '<div class="offer_contact_us" id="offer_header">Várjuk ajánlatkérését!</div>';
	bbcontent += '<div class="offer_contact_us" id="offer_error_mail">Hibás Email</div>';
	bbcontent += '<div class="offer_contact_us" id="offer_error_empty">Üres Mező!</div>';
	bbcontent += '<div class="offer_contact_us" id="offer_success">Hamarosan válaszolunk!</div>';
	bbcontent += '<div class="offer_contact_us" id="offer_error">Sikertelen küldés :(</div>';
	bbcontent += '<div class="offer_contact_us" id="offer_loading_header"><img class="contact_loading" src="res/img/loading.gif"></img></div>';
	bbcontent += '<input class="form-control name" type="text" id="offerlastname" name="offerlastname" placeholder="Vezetéknév"><input class="form-control name" type="text" id="offerfirstname" name="offerfirstname" placeholder="Keresztnév"><br>';
	bbcontent += '<input class="form-control" type="email" name="offeremail" id="offeremail" placeholder="Email cím" style="width:100%"><br>';
	bbcontent += '<textarea class="form-control" rows="7" id="offermessage"  name="offermessage" placeholder="Egyéni ajánlat kérés.">'+ptitle+'</textarea>';
	bbcontent += '<input class="form-control submit" type="button" onclick="offersendMessage('+id+')" value="Küldés">';
         	
	bbcontent += '</div>';
	bbcontent += '</div>';
	bbcontent += '</div>';
	
	offerbb = bootbox.alert("<div class='imgshow'>"+bbcontent+"<span class='imgshowtitle'></span></div>");
	$(".offer_contact_us").hide();
	$("#offer_header").show();

	
}

