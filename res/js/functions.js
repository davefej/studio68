function goto(url){
	window.location = url;
}
function openurl(url){
	var win = window.open(url, '_blank');
	 win.focus();
}

$(document).ready(function () {
	showdata_policy();
    if($(".well-contact").height() > $(".well-address").height())
        $(".well-address").height($(".well-contact").height());
    else
        $(".well-contact").height($(".well-address").height())
});

window.initMap = function() {
  // Styles a map in night mode.
  var map = new google.maps.Map(document.getElementById('map-frame'), {
    center: {lat: 47.459255, lng: 19.030968},
    zoom: 16,
    styles: [
    	  {
    		    "featureType": "poi.business",
    		    "stylers": [
    		      {
    		        "visibility": "off"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi.park",
    		    "elementType": "labels.text",
    		    "stylers": [
    		      {
    		        "visibility": "off"
    		      }
    		    ]
    		  }
    		]
  });
  
  var marker = new google.maps.Marker({
      position: {lat: 47.459255, lng: 19.030968},
      map: map
  });
}


function sendMessage(){
	$(".contact_us").hide();
	
    // Maybe show a loading indicator...
	if(!validateEmail($("#email").val())){
		$("#contact_error_mail").show();
		return;
	}
	
	if($("#lastname").val() == "" || $("#firstname").val() == "" || $("#message").val() == ""){
		$("#contact_error_empty").show();
		return;
	}
	
	
	
	$("#loading_header").show();
	var data = {};
	data.email = $("#email").val();
	data.lastname = $("#lastname").val()
	data.firstname =  $("#firstname").val()
	data.message =  $("#message").val()
	data.pass = "123456_pass";
    
 	$.ajax({
        type: 'POST',
        cache: false,
        url: "contact_us.php",
        data: JSON.stringify(data), 
        success: function(msg) {

        	setTimeout(function(){ 
        		$(".contact_us").hide();
            	$("#contact_success").show();
        	}, 1000);
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	setTimeout(function(){ 
        		$(".contact_us").hide();
        		$("#contact_error").show();
        	}, 1000);
        }
    });


}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function offersendMessage(id){
	$(".offer_contact_us").hide();
	
    // Maybe show a loading indicator...
	if(!validateEmail($("#offeremail").val())){
		$("#offer_error_mail").show();
		return;
	}
	
	if($("#offerlastname").val() == "" || $("#offerfirstname").val() == "" || $("#offermessage").val() == ""){
		$("#offer_error_empty").show();
		return;
	}
	
	
	
	$("#offer_loading_header").show();
	var data = {};
	data.email = $("#offeremail").val();
	data.lastname = $("#offerlastname").val()
	data.firstname =  $("#offerfirstname").val()
	data.message =  $("#offermessage").val()
	data.pass = "123456_pass";
    
     	$.ajax({
        type: 'POST',
        cache: false,
        url: "contact_us.php",
        data: JSON.stringify(data), 
        success: function(msg) {

        	setTimeout(function(){ 
        		$(".offer_contact_us").hide();
            	$("#offer_success").show();
            	if(offerbb){
            		debugger;
            		setTimeout(function(){
            			offerbb.modal('hide'); 
                		offerbb = null;
            		},1000);
            		
            	}
        	}, 1000);
        	
        	
        	$("#offerbutton_"+id).html("Elküldve");
        	$("#offerbutton_"+id).attr("disabled", true);
        	$("#offerbutton_"+id).css({
        		background: "gray",
        		color: "white"
        	});
        	
        	
        	
        	
        	//ga('send', 'event', 'ajanlatkeres', 'katt');
        	try{
        		gtag('event', 'ajanlatkeres', {
          		  'event_category' : 'ajanlatkeres',
          		  'event_label' : 'katt'
          		});
        	}catch(e){
        		
        	}
        	
        	
        	
        	
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	setTimeout(function(){ 
        		$(".offer_contact_us").hide();
        		$("#offer_error").show();
        	}, 1000);
        }
    });
     	
     	
}

function showdata_policy(){
	if(typeof localStorage !== "undefined" && !Number(localStorage.data_policy)){
		document.getElementById("data_policy").style.display="";		
	}	
}

function hidedata_policy(){
	if(typeof localStorage !== "undefined"){
		localStorage.data_policy = 1;
	}
	document.getElementById("data_policy").style.display="none";
	
}

if(typeof loadnewsletter != "undefined" && loadnewsletter){
	subscribe_newsletter();
}

if(typeof unsubscribe_id != "undefined" && unsubscribe_id){
	unsubscribe(unsubscribe_id);
}

if(typeof unsubscribe_mail != "undefined" && unsubscribe_mail){
	unsubscribe_email();
}

if(typeof newsletter_counter != "undefined" && newsletter_counter){
	call_newsletter_counter();
}





function subscribe_newsletter(){
	var frommail = "";
	try{
		frommail = atob(decodeURIComponent(nlfrom));
	}catch(e){
		frommail = "";
	}
	
	var divcontent ="";
	divcontent += '<div class="newsletterok" id="newsletterok">Köszönjük, hogy feliratkozott hírlevelünkre!</div>'
	divcontent += '<div class="newslettercontainer" id="newslettercontainer">'		
	divcontent += '<div class="newslettertitle" id="newsletter_header">Hírlevél Feliratkozás</div>'
	divcontent += '<div class="newsletterloading" id="newsletterloading"><img class="contact_loading" src="res/img/loading.gif"></img></div>'
	divcontent += '<div class="newslettererr" id="newslettererr"></div>'
	divcontent += '<div class="newsletteritem"><input class="form-control newsletterinput" type="text" id="newslettername" name="newslettername" placeholder="Név"><br>'
	divcontent += '<input class="form-control newsletterinput" type="email" name="newsletteremail" id="newsletteremail" placeholder="Email cím" value="'+frommail+'" style="width:100%"><br>'
	divcontent += '<div class="dataprot-container"><input type="checkbox" id="newsletter_datapolicy"><span class="dataprotection" >Hozzájárulok, hogy a Stúdió 68 Reklámajándék Kft, elektronikus hírlevelet küldjön e-mail címemre, valamint az <a target="_blank" href="res/files/adatkezeles.pdf"> adatkezelési Nyilatkozatot</a> elfogadom</span></div></div>';	 
	divcontent += '<div class="dataprot2">A hozzájárulást bármikor visszavonhatja a hírlevelek alján található linken, vagy a honlapon keresztül.</div>';
	
	divcontent += '<div class="newsletteritem"><input class="form-control submit newsletterinput" type="button" onclick="subscribe()" value="Feliratkozom a hírlevélre"></div></div>'
	bootbox.alert(divcontent)
}

function subscribe(){
	try{
		var container = document.getElementById("newslettercontainer");
		var loadingnode = document.getElementById("newsletterloading");
		var oknode = document.getElementById("newsletterok");
		var errornode = document.getElementById("newslettererr");
		
		var name = document.getElementById("newslettername").value;
		var mail = document.getElementById("newsletteremail").value;
		var policy = document.getElementById("newsletter_datapolicy").checked;
		if(!policy){
			errornode.style.display = "block";
			errornode.innerHTML = "Adatekezési nyilatkozat elfogadása kötelező";		
		}else if(!validateEmail(mail)){
			errornode.style.display = "block";
			errornode.innerHTML = "Hibás Email cím";	
		}else if(!name){
			errornode.style.display = "block";
			errornode.innerHTML = "Név megadása kötelező";
		}else{
			errornode.style.display = "none";
			loadingnode.style.display = "block";
			$.ajax({
		        type: 'POST',
		        cache: false,
		        url: "newsletter.php",
		        data: JSON.stringify({
		        	email:mail,
		        	name:name,
		        	subscribe:1
		        }),		        
		        success: function(msg) {
		        	if(msg.trim() == "ok"){
		        		setTimeout(function(){ 
			        		oknode.style.display = "block";
			        		container.style.display = "none";
			        		loadingnode.style.display = "none";
			        	}, 500);
		        		
		        	}else if(msg.trim() == "exists"){
		        		setTimeout(function(){ 
			        		errornode.style.display = "block";
			    			errornode.innerHTML = "Ezzel az e-mail címmel már feliratkoztak";
			    			loadingnode.style.display = "none";
			        	}, 500);
		        	}else{
		        		setTimeout(function(){ 
			        		errornode.style.display = "block";
			    			errornode.innerHTML = "Sikertelen Feliratkozás";
			    			loadingnode.style.display = "none";
			        	}, 500);
		        	}
		        	
		        },
		        error: function(jqXHR, textStatus, errorThrown) {
		        	setTimeout(function(){ 
		        		errornode.style.display = "block";
		    			errornode.innerHTML = "Sikertelen Feliratkozás";
		    			loadingnode.style.display = "none";
		        	}, 500);
		        }
		    });
			
		}
	}catch(e){
		errornode.innerHTML = "Sikertelen Feliratkozás";
		errornode.style.display = "block";
	}

	
}

function unsubscribe(id){
	
	var divcontent ="";
	divcontent += '<div class="newslettercontainer" id="newslettercontainer">'		
	divcontent += '<div class="unsubscibeloading" id="unsubscibeloading"><img class="contact_loading" src="res/img/loading.gif"></img></div></div>'
		bootbox.alert(divcontent)
	
	$.ajax({
        type: 'GET',
        cache: false,
        url: "unsubscribe.php?id="+id,	        
        success: function(msg) {
        	if(msg.trim() != "ok"){
        		
        		setTimeout(function(){ 
        			if(msg.trim() == "noid"){
        				var alertmsg = "Hibás leiratkozási link vagy már leiratkozott!";
        			}else{
        				var alertmsg = "Sikertelen leiratkozás!";
        			}
	        		document.getElementById("unsubscibeloading").innerHTML = alertmsg;
	        	}, 500);
        	}else{
        		setTimeout(function(){ 
        			document.getElementById("unsubscibeloading").innerHTML = "Sikeres Leiratkozás!";
	        	}, 500);
        	}
        	
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	setTimeout(function(){ 
        		document.getElementById("newslettercontainer").innerHTML = "Sikertelen Leiratkozás!";
        	}, 500);
        }
    });
}

function unsubscribe_email(){

	var divcontent ="";
	divcontent += '<div class="newsletterok" id="newsletterok">Sikeres leiratkozás!</div>'
	divcontent += '<div class="newslettercontainer" id="newslettercontainer">'		
	divcontent += '<div class="newslettertitle" id="newsletter_header">Hírlevél Leiratkozás</div>'
	divcontent += '<div class="newsletterloading" id="newsletterloading"><img class="contact_loading" src="res/img/loading.gif"></img></div>'
	divcontent += '<div class="newslettererr" id="newslettererr"></div>'
	divcontent += '<input class="form-control newsletterinput" type="email" name="newsletteremail" id="newsletteremail" placeholder="Email cím" style="width:100%"><br>'	 
	divcontent += '<div class="newsletteritem"><input class="form-control submit newsletterinput" type="button" onclick="dounsubscribe_email()" value="Leiratkozom"></div></div>'
	bootbox.alert(divcontent);	
	
}

function dounsubscribe_email(){
	var container = document.getElementById("newslettercontainer");
	var loadingnode = document.getElementById("newsletterloading");
	var oknode = document.getElementById("newsletterok");
	var errornode = document.getElementById("newslettererr");
	
	var mail = document.getElementById("newsletteremail").value;
	
	$.ajax({
        type: 'GET',
        cache: false,
        url: "unsubscribe.php?email="+mail,
        success: function(msg) {
        	if(msg.trim() != "ok"){
        		setTimeout(function(){ 
        			if(msg.trim() == "noid"){
        				var alertmsg = "Nincs ilyen e-mail címmel feliratkozás!";
        			}else{
        				var alertmsg = "Sikertelen leiratkozás!";
        			}
	        		errornode.style.display = "block";
	    			errornode.innerHTML = alertmsg;
	    			loadingnode.style.display = "none";
	        	}, 500);
        	}else{
        		setTimeout(function(){ 
	        		oknode.style.display = "block";
	        		container.style.display = "none";
	        		loadingnode.style.display = "none";
	        	}, 500);
        	}
        	
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	setTimeout(function(){ 
        		errornode.style.display = "block";
    			errornode.innerHTML = "Sikertelen Leiratkozás";
    			loadingnode.style.display = "none";
        	}, 500);
        }
    });
	
}

function call_newsletter_counter(){
	$.ajax({
        type: 'GET',
        cache: false,
        url: "newscounter.php?type="+newsletter_counter
    });
}

