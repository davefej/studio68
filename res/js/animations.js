function init() {
    $('#main-nav').addClass('active');
    
    window.addEventListener('scroll', function(e) {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var nav_heigth = document.getElementById("navbar").offsetHeight;
        var main_height = document.getElementById("main").clientHeight;
        var department_height = document.getElementById("departments").clientHeight + main_height;
        var webshop_height = department_height + document.getElementById("webshop").clientHeight;
        var timeline_height = document.getElementById("timeline").clientHeight + webshop_height;
        var team_height = document.getElementById("team").clientHeight + timeline_height;
        var counter_height = document.getElementById("counters").clientHeight;
        var window_height = window.screen.height;
        var references_height = document.getElementById("references").clientHeight + team_height + counter_height;
        var contact_height = document.getElementById("contact").clientHeight + references_height;
        
        if (distanceY < department_height - nav_heigth){
        	if(window.location.href.indexOf("index.html") > -1){
	            $('.nav_element').css("color", "white");
	            $('head').append('<style>.navbar-default .navbar-nav>li>a:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;}</style>');
        	}
        }
        else if (distanceY > department_height - nav_heigth && distanceY < timeline_height - nav_heigth){
        	if(window.location.href.indexOf("index.html") > -1){
        		$('.nav_element').css("color", "black");
        		$('head').append('<style>.navbar-default .navbar-nav>li>a:before{background-color: black;}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) )no-repeat fixed;border-bottom: rgba(0, 0, 0, 0.1) 1px solid;}</style>');
        	}
        }
        else if(distanceY > timeline_height - nav_heigth && distanceY < team_height - nav_heigth ){
        	if(window.location.href.indexOf("index.html") > -1){
        		$('.nav_element').css("color", "white");
        		$('head').append('<style>.navbar-default .navbar-nav>li>a:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;border-bottom: rgba(255, 255, 255, 0.1) 1px solid;}</style>');
        	}
        }
        else if(distanceY > team_height - nav_heigth){
        	if(window.location.href.indexOf("index.html") > -1){
        		$('.nav_element').css("color", "white");
            	$('head').append('<style>.navbar-default .navbar-nav>li>a:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;}</style>');
        	}
        }
        
        if(distanceY < department_height - window_height/2){
            $('#contact-nav').removeClass('active');
            $('#team-nav').removeClass('active');
            $('#timeline-nav').removeClass('active');
            $('#reference-nav').removeClass('active');
            $('#main-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'white');
            $('#dot-nav li.active').css("background-color", '#e00901');
        }
        else if(distanceY > department_height - window_height/2 && distanceY < timeline_height - window_height/2 ){
            $('#contact-nav').removeClass('active');
            $('#team-nav').removeClass('active');
            $('#main-nav').removeClass('active');
            $('#reference-nav').removeClass('active');
            $('#timeline-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'black');
            $('#dot-nav li.active').css("background-color", '#e00901');
            
        }
        else if(distanceY > timeline_height - window_height/2 && distanceY < team_height  + counter_height - window_height/2 ){
        	 $('#contact-nav').removeClass('active');
             $('#timeline-nav').removeClass('active');
             $('#main-nav').removeClass('active');
             $('#team-nav').removeClass('active');
             $('#reference-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'black');
            $('#dot-nav li.active').css("background-color", '#e00901');
        }
        else if(distanceY > team_height  + counter_height - window_height/2 && distanceY < references_height - window_height/2 ){
            
            $('#contact-nav').removeClass('active');
            $('#timeline-nav').removeClass('active');
            $('#main-nav').removeClass('active');
            $('#reference-nav').removeClass('active');
            $('#team-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'white');
            $('#dot-nav li.active').css("background-color", '#e00901');
        }
        else if(distanceY > references_height - window_height/2 && distanceY < contact_height - window_height/2 ){
            $('#timeline-nav').removeClass('active');
            $('#team-nav').removeClass('active');
            $('#main-nav').removeClass('active');
            $('#reference-nav').removeClass('active');
            $('#contact-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'white');
            $('#dot-nav li.active').css("background-color", 'black');
        }
        
        
     });
    
    $('.title-block').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        
        transitionDuration: 2000,
        slides: [
            { src: "res/img/main.jpg" }
        ]
    });
    
    $('.printing-block').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        firstTransition: 'fade',
        transitionDuration: 2000,
        slides: [
            { src: "res/img/printing1.jpg" },
            { src: "res/img/printing2.jpg"},
            { src: "res/img/printing3.jpg"}
        ],
        animation: 'kenburns'
    });
    
    
    /*SIDEBAR*/
    $('.awesome-tooltip').tooltip({
        placement: 'left'
    }); 
    
    $('#dot-nav li').click(function(){
      
        var id = $(this).find('a').attr("href"),
          position,
          element,
          padding = 0;
      
        element = $(id);
        position = ($(element).offset()||0).top - padding;
      
        $('html, body').animate({scrollTop:position}, 'slow');
      
        return false;
    });
}

window.onload = init();

