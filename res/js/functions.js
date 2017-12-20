function goto(url){
	window.location = url;
}
function openurl(url){
	var win = window.open(url, '_blank');
	 win.focus();
}

$(document).ready(function () {
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
        	
        	
        	
        	
        	ga('send', 'event', 'ajanlatkeres', 'katt');
        	
        	
        	
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	setTimeout(function(){ 
        		$(".offer_contact_us").hide();
        		$("#offer_error").show();
        	}, 1000);
        }
    });
     	
     	
}