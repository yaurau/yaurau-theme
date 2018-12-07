// $(document).ready(function(){
// 	var touch 	= $('#touch-menu');
// 	var menu 	= $('.menu');
//
// 	$(touch).on('click', function(e) {
// 		e.preventDefault();
// 		menu.slideToggle();
// 	});
//
// 	$(window).resize(function(){
// 		var w = $(window).width();
// 		if(w > 767 && menu.is(':hidden')) {
// 			menu.removeAttr('style');
// 		}
// 	});
//     // new WOW().init();
// });

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

