function init() {
    $("#down_navigator_button").click(function() {
        $('html, body').animate({
            scrollTop: $("#timeline").offset().top
        }, 800);
    });
}

window.onload = init();