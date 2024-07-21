jQuery(document).ready(function ($) {
    // Scroll event handling
    var lastScrollTop = 0;
    var delta = 5;
    var header = $('header');
    var headerHeight = header.outerHeight();

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

        // Add logic for hiding/showing header on scroll
        if (Math.abs(lastScrollTop - scrollPosition) > delta) {
            if (scrollPosition > lastScrollTop && scrollPosition > headerHeight) {
                header.addClass('hidden');
            } else {
                if (scrollPosition + windowHeight < $(document).height()) {
                    header.removeClass('hidden');
                }
            }
            lastScrollTop = scrollPosition;
        }
    });

    // Initialize tabs
    tabify('#tabs');

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

    // Initialize additional slick slider
    $('#js-slider').slick({
        arrows: true, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        // appendDots: $('.dots'), // ドットナビゲーションの生成位置を変更
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
    });

    $('#js-slider-sp').slick({
        arrows: false, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        // appendDots: $('.dots'), // ドットナビゲーションの生成位置を変更
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
    });

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
