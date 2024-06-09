jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
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

        var nextSection = section.next();
        var nextSectionPosition = nextSection.offset().top;
        var distanceFromTopToHideVideo = 500;
        if (scrollPosition >= nextSectionPosition - distanceFromTopToHideVideo) {
            $('.video-background video').addClass('hide'); // hideクラスを追加してゆっくり非表示にする
        } else {
            $('.video-background video').removeClass('hide'); // hideクラスを削除して表示する
        }
    });

});