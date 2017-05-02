/**
 * Created by master on 02.05.2017.
 */

(function( $ ) {


    $(document).ready(function() {
        Filter.init();
    });


    var Filter = {};

    Filter.nominationKey = 'nomination';
    Filter.dataAttr = 'data-filter';
    Filter.buttonsNominationClass = 'nomination_filter_button';
    Filter.galleryItemClass = 'filterable';

    /**
     *
     */
    Filter.init = function() {

        this.initButton($('.' + this.buttonsNominationClass));
    };


    /**
     * @param buttons
     */
    Filter.initButton = function(buttons) {
      var self = this;
      buttons.click(function(event) {
          event.preventDefault();

          filter = $(this).attr(self.dataAttr);

          elementList = $('.' + self.galleryItemClass);
          self.filterContent(filter, elementList, self.nominationKey);

      });

    };


    /**
     * @param exp
     * @param elementList
     * @param attrVal
     */
    Filter.filterContent = function(exp, elementList, attrVal) {
        var self = this;
        exp = exp.toLowerCase();

        elementList.each(function(key, value) {
            elemAttr = $(this).attr('data-' + attrVal);
            elemAttr = elemAttr.toLowerCase();
            if (elemAttr != exp) {
                $(this).hide();
            }

        })

    };


    /**
     * @param elementList
     */
    Filter.removeFilter = function(elementList) {
        
        elementList.each(function(key, value) {
           
            $(this).show();
            
        });
        
    }
    






})(jQuery);
