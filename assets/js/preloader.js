/**
 * Created by master on 04.04.2017.
 */
(function( $ ) {


    $(window).on('load', function() {
        initPreloader();
    });


    /**
     * 
     */
    function initPreloader() {
        var $preloader = $('#pagePreloader'),
            $spinner = $preloader.find('.spinner');

        $spinner.fadeOut();
        $preloader.fadeOut('fast');
    }

})(jQuery);
