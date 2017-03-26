/**
 * Created by master on 24.03.2017.
 */
(function( $ ) {


    $(document).ready(function() {

      var $helper = $('.helper');
      var $closeToggle = $helper.find('.helper_close');

        $closeToggle.on('click', function(event) {
           $helper.slideToggle('fast');
            event.preventDefault();
        });


    });


})(jQuery);
