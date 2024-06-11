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


    tabify( '#tabs' );
    
});



