jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();
        var section = $('#Context');
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
    });


    tabify('#tabs');

    jQuery('.slider').slick({
        autoplay: false,
        infinite: true,
        dots: true,
        slidesToShow: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    dots: true,
                    arrows:true,
                    swipe:true,
                }
            }
        ],
    });



    // topの文字をアニメーション
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

    // contentsの要素を表示する
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
        mobile: false,
    });


    // toggle menu
    $('.menu-icon').on('click', function () {
        $('.nav-menu').toggleClass('active');
    });
    // toggle menu-icon
    $('.menu-icon').on('click', function () {
        $('.menu-icon').toggleClass('active');
    });
});



