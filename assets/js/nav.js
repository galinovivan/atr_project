/**
 * Created by master on 24.03.2017.
 */


(function( $ ) {

    $(document).ready(function() {

       initNav($('#mainNav'), $('#navToggle'));

    });

    /**
     * @param $nav
     * @param $toggleBtn
     */
    function initNav($nav, $toggleBtn) {

      $toggleBtn.on('click', function () {

         $nav.slideToggle();

      });

        var $closeBtn = $nav.find('.nav_close');

       $closeBtn.on('click', function(event) {

           $nav.slideToggle();
           event.preventDefault();

       });

    }

    /**
     * @param $nav
     */
    function slideNav($nav) {
        $nav.slideToggle();
    }

})(jQuery);
