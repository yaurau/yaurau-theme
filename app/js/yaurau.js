$(document).ready(function() {
    $(".loader__inner").fadeOut();
    $(".yaurau__loader").delay(500).fadeOut("slow");
});

$(window).resize(function() {
    function getWindowWidth() {
        return window.innerWidth || document.body.clientWidth;
    }

    if (getWindowWidth() <= 634) {
        $(".reserve").removeClass("delete");
    } else {
        $(".reserve").addClass("delete");
    }
});

(function($){
    $(function() {
        new WOW().init();
        $('.menu__icon').on('click', function() {
            $(this).closest('.menu').toggleClass('menu_state_open');
        });
    });
})(jQuery);