(function( $ ) {

    $(document).ready(function() {
       var slider = $('#centerSlider');

        slider.slick({
            centerPadding: '60px',
            centerMode: true,
            slidesToShow: 5
        });
    });

})(jQuery);