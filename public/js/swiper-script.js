$(function () {
    var swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 3000
        },
        speed: 2000,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        loop: false,
        breakpoints: {
            // when window width is >= 360px
            360: {
                slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 1,
            },
            // when window width is >= 1024px
            1024: {
                slidesPerView: 1,
            }
        },
        // If we need pagination
        pagination: {
            enabled: false,
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
    });
    $("#carousel1").owlCarousel({
        items: 8, // Adjust as per your need
        loop: true, // Enables looping
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // 3 seconds autoplay interval
        nav: true, // Show navigation buttons
    });
});