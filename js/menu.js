(function($){
    $(function() {
        new WOW().init();
        $('.menu__icon').on('click', function() {
            $(this).closest('.menu').toggleClass('menu_state_open');
        });
    });
})(jQuery);

function getWindowWidth() {
    return window.innerWidth || document.body.clientWidth;
}
if (getWindowWidth() <= 999) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $(".menu_state_open").fadeOut();
        }
        if ($(window).scrollTop() < 100) {
            $(".menu").removeClass('menu_state_open').fadeIn();
        }
    });
}

