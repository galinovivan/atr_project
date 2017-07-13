/**
 * Created by master on 07.04.2017.
 */

(function( $ ) {
    
    
    $(document).ready(function() {

     initScrollLink();

        /**
         *
         */
        function initScrollLink() {
            var $scrollLink = $('.scroll_link');
            
            $scrollLink.on('click', function(event) {
               
                event.preventDefault();
                
                makeScrollLink($scrollLink);
                
            });
        }
        /**
         * @param {jQuery} $link
         */
        function makeScrollLink($link) {
            var href = $link.attr('href');
            var $elTarget = $(href);
            var scroll = getScroll($elTarget);
            var $body = $('body');
            $body.animate({scrollTop: scroll}, 800);
            $('#mainNav').slideToggle();

        }

        /**
         * 
         * @param {jQuery} $el
         * @returns {Integer}
         */
        function getScroll($el) {
            
        var $scroll = $el.offset().top - 325;
        
            console.log($scroll);
            return $scroll;
            
            
        }
        
        
        
    });
    
    
    
})(jQuery);
