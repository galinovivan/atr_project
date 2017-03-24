(function( $ ) {

   $(document).ready(function() {
       var $body = $('body');
       var $topLink = $('.top_link');

       $topLink.on('click', function(event) {

           event.preventDefault();
           $body.animate({scrollTop: 0}, 800);

       });


       window.onscroll = function() {
           initTopLink();
       };


       /**
        * 
        */
       function initTopLink() {
           if ($body.scrollTop() > 400) {
               $topLink.show('fast');
           } else {
               $topLink.hide('fast');
           }
       }


   });



})(jQuery);