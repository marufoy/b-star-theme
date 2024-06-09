jQuery(document).ready(function($) {
    $(window).on('scroll', function() {
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();
        var section = $('#Context');
        var sectionPosition = section.offset().top;
        var sectionHeight = section.outerHeight();
        
        // セクションが画面内に表示されているかどうかを確認
        if (scrollPosition + windowHeight / 2 >= sectionPosition && scrollPosition + windowHeight / 2 <= sectionPosition + sectionHeight) {
            $('.video-background video').addClass('blur-background');
        } else {
            $('.video-background video').removeClass('blur-background');
        }
        

     // 次のセクションの位置が画面の頂点に来たら動画を非表示にする
    var nextSection = section.next();
    var nextSectionPosition = nextSection.offset().top;
    if (scrollPosition >= nextSectionPosition) {
        $('.video-background video').css('display', 'none');
    }else{
        $('.video-background video').css('display', 'block');
    }
    });

});