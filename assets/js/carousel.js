(function( $ ) {

    $(document).ready(function() {
       var slider = $('#centerSlider');

        slider.slick({
           centerPadding: '0px',
            centerMode: true,
            slidesToShow: 5,
            prevArrow: '<div class="arrow left"><i class="social_arrow social_arrow-arrow_left"></i></div>',
            nextArrow: '<div class="arrow right"><i class="social_arrow social_arrow-arrow_right"></i></div>',
        });
    });

})(jQuery);