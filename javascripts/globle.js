$(document).ready(function() {
    "use strict";

    $('.review').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1500,
        autoplay: !0,
        autoplaySpeed: 2000,
        arrows: !0,
        dots: !0,
        adaptiveHeight: !0
    });

    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('.scrollup').fadeIn()
        } else {
            $('.scrollup').fadeOut()
        }
    });
    var toTop = $('.scrollup');
    toTop.on('click', function() {
        $('html, body').animate({
            scrollTop: $('html, body').offset().top,
        })
    });
});
