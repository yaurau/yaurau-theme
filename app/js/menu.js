
$(document).ready(function() {
$('.menu__links-item').on('click', function() {
    $(".menu").removeClass('menu_state_open')
});
});
jQuery(function($) {
    $(window).scroll(function(){
        if($(this).scrollTop()>40){
            $('#menu').addClass('fixed');
        }
        else if ($(this).scrollTop()<40){
            $('#menu').removeClass('fixed').removeClass("container");
        }
    });
});