function init() {
    $("#down_navigator_button").click(function () {
        $('html, body').animate({
            scrollTop: $("#timeline").offset().top
        }, 800);
        
        $('.nav_element').animate({
            color: "#000000"
        }, 800);
        event.preventDefault()
    });
    
    $(".side_nav_element_1").click(function (){
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 800);
        event.preventDefault()
    });
    
    $(".side_nav_element_2").click(function (){
        $('html, body').animate({
            scrollTop: $("#departments").offset().top
        }, 800);
        event.preventDefault()
    });
    
    $(".side_nav_element_3").click(function (){
        $('html, body').animate({
            scrollTop: $("#timeline").offset().top
        }, 800);
        event.preventDefault()
    });
    
    $(".side_nav_element_4").click(function (){
        $('html, body').animate({
            scrollTop: $("#team").offset().top
        }, 800);
        event.preventDefault()
    });
    
    $(".side_nav_element_5").click(function (){
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 800);
        event.preventDefault()
    });
    
    window.addEventListener('scroll', function(e) {
    var distanceY = window.pageYOffset || document.documentElement.scrollTop;
    var window_height = document.getElementById("main").clientHeight - document.getElementById("navbar").clientHeight;     
        if (distanceY < window_height){
            $('.nav_element').css("color", "white");
        }
        else if (distanceY > window_height){
            $('.nav_element').css("color", "black");
        }
        
        if (distanceY < window_height/2){
            $('.side_nav_element').css("color", "white");
        }
        else if (distanceY > window_height/2){
            $('.side_nav_element').css("color", "black");
        }
     });
}

window.onload = init();
