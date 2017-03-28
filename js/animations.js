function init() {
    $('#main-nav').addClass('active');
    
    $('.title-block2').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        firstTransition: 'fade',
        firstTransitionDuration: 5000,
        transitionDuration: 2000,
        slides: [
            { src: "img/main1.jpg" },
            { src: "img/main2.jpg"},
            { src: "img/main3.jpg"}
        ]
    });
    
    $('.fan-block').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        firstTransition: 'fade',
        firstTransitionDuration: 5000,
        transitionDuration: 2000,
        slides: [
            { src: "img/fan1.jpeg" },
            { src: "img/fan2.jpg"},
            { src: "img/fan3.jpg"}
        ]
    });
    
    $("#down_navigator_button").click(function () {
        $('html, body').animate({
            scrollTop: $("#timeline").offset().top
        }, 800);
        
        $('.nav_element').animate({
            color: "#000000"
        }, 800);
    });
    
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
            $('#reference-nav').removeClass('active');
            $('#team-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'white');
            $('#dot-nav li.active').css("background-color", '#e00901');
        }
        else if(distanceY > team_height  + counter_height - window_height/2 && distanceY < references_height - window_height/2 ){
            $('#contact-nav').removeClass('active');
            $('#timeline-nav').removeClass('active');
            $('#main-nav').removeClass('active');
            $('#team-nav').removeClass('active');
            $('#reference-nav').addClass('active');
            
            $('#dot-nav li').css("background-color", 'black');
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
}

window.onload = init();

/*$(document).ready(function () {
    var window_width = window.screen.availWidth;
    if(window_width > 1076){
        $("#eco").hover(function () {
            $("head").append('<style>#eco{width:69%;}</style>');
            $("head").append('<style>#food{width:6%;}</style>');
            $("head").append('<style>#gifts{width:6%;}</style>');
            $("head").append('<style>#fan{width:6%;}</style>');
            $("head").append('<style>#printing{width:6%;}</style>');
            $("head").append('<style>#custom{width:6%;}</style>');
        });
        $("#eco").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
        $("#food").hover(function () {
            $("head").append('<style>#food{width:69%;}</style>');
            $("head").append('<style>#eco{width:6%;}</style>');
            $("head").append('<style>#gifts{width:6%;}</style>');
            $("head").append('<style>#fan{width:6%;}</style>');
            $("head").append('<style>#printing{width:6%;}</style>');
            $("head").append('<style>#custom{width:6%;}</style>');
        });
        $("#food").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
        $("#gifts").hover(function () {
            $("head").append('<style>#gifts{width:69%;}</style>');
            $("head").append('<style>#food{width:6%;}</style>');
            $("head").append('<style>#eco{width:6%;}</style>');
            $("head").append('<style>#fan{width:6%;}</style>');
            $("head").append('<style>#printing{width:6%;}</style>');
            $("head").append('<style>#custom{width:6%;}</style>');
        });
        $("#gifts").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
        $("#fan").hover(function () {
            $("head").append('<style>#fan{width:69%;}</style>');
            $("head").append('<style>#food{width:6%;}</style>');
            $("head").append('<style>#gifts{width:6%;}</style>');
            $("head").append('<style>#eco{width:6%;}</style>');
            $("head").append('<style>#printing{width:6%;}</style>');
            $("head").append('<style>#custom{width:6%;}</style>');
        });
        $("#fan").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
        $("#printing").hover(function () {
            $("head").append('<style>#printing{width:69%;}</style>');
            $("head").append('<style>#food{width:6%;}</style>');
            $("head").append('<style>#gifts{width:6%;}</style>');
            $("head").append('<style>#fan{width:6%;}</style>');
            $("head").append('<style>#eco{width:6%;}</style>');
            $("head").append('<style>#custom{width:6%;}</style>');
        });
        $("#printing").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
        $("#custom").hover(function () {
            $("head").append('<style>#custom{width:69%;}</style>');
            $("head").append('<style>#food{width:6%;}</style>');
            $("head").append('<style>#gifts{width:6%;}</style>');
            $("head").append('<style>#fan{width:6%;}</style>');
            $("head").append('<style>#printing{width:6%;}</style>');
            $("head").append('<style>#eco{width:6%;}</style>');
        });
        $("#custom").mouseleave(function () {
            $("head").append('<style>#custom{width:16.6%;}</style>');
            $("head").append('<style>#eco{width:16.6%;}</style>');
            $("head").append('<style>#food{width:16.6%;}</style>');
            $("head").append('<style>#gifts{width:16.6%;}</style>');
            $("head").append('<style>#fan{width:16.6%;}</style>');
            $("head").append('<style>#printing{width:16.6%;}</style>');
        });
    }
});*/

$(document).ready(function(){
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
});

/*$(document).ready(function(){
   var options = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.', 
      prefix : '', 
      suffix : '' 
    };
    var demo = new CountUp("counter1", 0, 3497, 0, 2.5, options);
    demo.start(); 
});*/

