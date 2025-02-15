jQuery(document).ready(function ($) {

    var headerHeight = $('header').outerHeight(),
        startPos = 0;
    // Scroll event handling
    $(window).on('scroll', function () {
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();
        var section = $('#Context');
    
        // #Context セクションが存在するかどうかをチェック
        if (section.length) {
            var sectionPosition = section.offset().top;
            var sectionHeight = section.outerHeight();
    
            if (scrollPosition + windowHeight / 2 >= sectionPosition && scrollPosition + windowHeight / 2 <= sectionPosition + sectionHeight) {
                $('.video-background video').addClass('blur-background');
            } else {
                $('.video-background video').removeClass('blur-background');
            }
    
            var nextSection = section.next();
            var nextSectionPosition = nextSection.offset().top;
            var distanceFromTopToHideVideo = 600;
            if (scrollPosition >= nextSectionPosition - distanceFromTopToHideVideo) {
                $('.video-background video').css('transition', 'opacity 0.5s').css('opacity', '0'); // CSSのトランジションを使用してゆっくり非表示にする
            } else {
                $('.video-background video').css('transition', 'opacity 0.5s').css('opacity', '1');
            }
        }
    
    });

    // headerの表示非表示
    $(window).on('load scroll', function () {
        var scrollPos = $(this).scrollTop();
        if (scrollPos > startPos && scrollPos > headerHeight) {
            $('header').css('top', '-' + headerHeight + 'px');
        } else {
            $('header').css('top', '0');
        }
        startPos = scrollPos;
});


// Initialize slick slider for .slider
// $('.slider').slick({
//     autoplay: false,
//     infinite: true,
//     dots: true,
//     slidesToShow: 1,
//     responsive: [
//         {
//             breakpoint: 1024,
//             settings: {
//                 dots: true,
//                 arrows: true,
//                 swipe: true,
//             }
//         }
//     ],
// });


// ScrollReveal animations
ScrollReveal().reveal('#vision-statement', {
    duration: 3000,
    origin: "left",
    distance: "50px",
    reset: true,
    mobile: false,
});

ScrollReveal().reveal('#top-text', {
    delay: 800,
    duration: 2000,
});

ScrollReveal().reveal('#mission', {
    duration: 2000,
    origin: "left",
    distance: "50px",
    mobile: false,
});

ScrollReveal().reveal('#vision', {
    duration: 2000,
    origin: "right",
    distance: "50px",
    mobile: false,
});

ScrollReveal().reveal('#value', {
    duration: 2000,
    origin: "left",
    distance: "50px",
    mobile: false,
});

ScrollReveal().reveal('.title-decoration', {
    duration: 2000,
    origin: "right",
    distance: "500px",
    mobile: true,
});

// Toggle menu
$('.menu-icon').on('click', function () {
    $('.nav-menu').toggleClass('active');
    $('.menu-icon').toggleClass('active');
});
});
