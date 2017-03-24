(function( $ ) {

   $(document).ready(function() {
       var $body = $('body');

       window.onscroll = function() {
           initTopLink();
       };



       function initTopLink() {

              var $topLink = $('.top_link');

           if ($body.scrollTop() > 400) {
               $topLink.show();
           } else {
               $topLink.hide();
           }
       }


   });



})(jQuery);