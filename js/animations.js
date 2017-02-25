function init() {
    $('.main_segment, .quote').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        firstTransition: 'fade',
        firstTransitionDuration: 5000,
        transitionDuration: 2000,
        slides: [
            { src: "/studio68/img/city.jpg" },
            { src: "/studio68/img/flat.jpg" },
            { src: "/studio68/img/snow.jpg" },
            { src: "/studio68/img/sunset.jpg" }
        ],
        
        overlay: 'js/overlays/02.png'
    });
    
    $("#down_navigator_button").click(function () {
        $('html, body').animate({
            scrollTop: $("#departments").offset().top
        }, 800);
        
        $('.nav_element').animate({
            color: "#000000"
        }, 800);
    });
    
    $("#side_nav_element_1").click(function (){
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 800);
        event.preventDefault();
    });
    
    $("#side_nav_element_2").click(function (){
        $('html, body').animate({
            scrollTop: $("#timeline").offset().top
        }, 800);
        event.preventDefault();
    });
    
    $("#side_nav_element_3").click(function (){
        $('html, body').animate({
            scrollTop: $("#team").offset().top
        }, 800);
        event.preventDefault();
    });
    
    $("#side_nav_element_4").click(function (){
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 800);
        event.preventDefault();
    });
    
    window.addEventListener('scroll', function(e) {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var nav_heigth = document.getElementById("navbar").offsetHeight;
        var main_height = document.getElementById("main").clientHeight - nav_heigth;
        var department_height = document.getElementById("departments").clientHeight - nav_heigth;
        //Nincs benne a nav magassága, hogy szorzásnál ne tolódjon el.
        var window_height = document.getElementById("main").clientHeight + document.getElementById("departments").clientHeight; 
    
        
        if (distanceY < window_height - nav_heigth){
            $('.nav_element').css("color", "white");
            $('head').append('<style>a.nav_element:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;}</style>');
        }
        else if (distanceY > window_height - nav_heigth && distanceY < 2 * window_height - nav_heigth){
            $('.nav_element').css("color", "black");
            $('head').append('<style>a.nav_element:before{background-color: black;}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) )no-repeat fixed;border-bottom: rgba(0, 0, 0, 0.1) 1px solid;}</style>');
        }
        else if(distanceY > 2 * window_height - nav_heigth && distanceY < 3 * window_height - nav_heigth ){
           $('.nav_element').css("color", "white");
            $('head').append('<style>a.nav_element:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;border-bottom: rgba(255, 255, 255, 0.1) 1px solid;}</style>');
        }
        else if(distanceY > 3 * window_height - nav_heigth){
            $('.nav_element').css("color", "white");
            $('head').append('<style>a.nav_element:before{background-color: white}.navbar.navbar-default{background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) )no-repeat fixed;}</style>');
        }
        
        if (distanceY < window_height/2){
            $('span.glyphicon.glyphicon-one-fine-dot').css("color", "white");
        }
        else if (distanceY > window_height/2){
            $('span.glyphicon.glyphicon-one-fine-dot').css("color", "black");
        }
        
        if(distanceY < window_height/2){
            $('.glyphicon.glyphicon-one-fine-dot.active').removeClass('active');
            $('#1').addClass('active');
        }
        
        else if(distanceY > window_height/2 && distanceY < window_height + window_height/2 ){
            $('.glyphicon.glyphicon-one-fine-dot.active').removeClass('active');
            $('#2').addClass('active');
        }
        else if(distanceY > window_height + window_height/2 && distanceY < 2*window_height + window_height/2 ){
            $('span.glyphicon.glyphicon-one-fine-dot').css("color", "white");
            
            $('.glyphicon.glyphicon-one-fine-dot.active').removeClass('active');
            $('#3').addClass('active');
        }
        else if(distanceY > 2*window_height + window_height/2 && distanceY < 3*window_height + window_height/2 ){
            
            $('.glyphicon.glyphicon-one-fine-dot.active').removeClass('active');
            $('#4').addClass('active');
        }
        
     });
}

window.onload = init();
