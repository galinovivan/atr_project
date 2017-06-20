/**
 * Created by master on 24.03.2017.
 */
(function( $ ) {


    $(document).ready(function() {

      var $helper = $('.helper');
      var $closeToggle = $helper.find('.helper_close');
      var $helperToggle = $('#helperToggle');

      $helperToggle.on('click', function(event) {
         $helper.slideToggle('fast');
          event.preventDefault();

      });

        $closeToggle.on('click', function(event) {
           $helper.slideToggle('fast');
            event.preventDefault();
        });


    });


})(jQuery);
