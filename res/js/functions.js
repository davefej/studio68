function goto(url){
	window.location = url;
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
    zoom: 15,
    styles: [
    	  {
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#242f3e"
    		      }
    		    ]
    		  },
    		  {
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#746855"
    		      }
    		    ]
    		  },
    		  {
    		    "elementType": "labels.text.stroke",
    		    "stylers": [
    		      {
    		        "color": "#242f3e"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "administrative.locality",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#d59563"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#d59563"
    		      }
    		    ]
    		  },
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
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#263c3f"
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
    		  },
    		  {
    		    "featureType": "poi.park",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#6b9a76"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#38414e"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road",
    		    "elementType": "geometry.stroke",
    		    "stylers": [
    		      {
    		        "color": "#212a37"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#9ca5b3"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.highway",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#746855"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.highway",
    		    "elementType": "geometry.stroke",
    		    "stylers": [
    		      {
    		        "color": "#1f2835"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.highway",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#f3d19c"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "transit",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#2f3948"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "transit.station",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#d59563"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "water",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#17263c"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "water",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#515c6d"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "water",
    		    "elementType": "labels.text.stroke",
    		    "stylers": [
    		      {
    		        "color": "#17263c"
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