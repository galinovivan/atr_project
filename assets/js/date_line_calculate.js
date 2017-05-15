/**
 * Created by master on 12.05.2017.
 */
(function($) {

    $(document).ready(function(){


        var dateLine = new DateLine($('#dateLineContainer'));
        dateLine.init();


    });

    /**
     *
     * @param {jquery} $elementContainer
     * @constructor
     */
  var DateLine = function($elementContainer) {
      this.container = $elementContainer;
      this.line = $elementContainer.find('.date_line');
      this.dateStart =  Date.parse($elementContainer.attr('data-datestart'));
      this.dateEnd = Date.parse($elementContainer.attr('data-dateend'));
      this.currentDate = Date.now();
    };

    /**
     *
     */
    DateLine.prototype.init = function() {
        this.setWidth();
    };

    /**
     * @returns {number}
     */
    DateLine.prototype.getDateDelta = function() {
        var start = this.dateStart;
        var end = this.dateEnd;
        var current = this.currentDate;

        var startDelta = end - start;
        var currentDelta = current - start;
        var delta = (currentDelta * 100) / startDelta;

        console.log(delta);

        return delta;

    };

    /**
     *
     */
    DateLine.prototype.setWidth = function() {
       var width = this.calculateWidth();

        this.line.css('width', width);
    };

    DateLine.prototype.calculateWidth = function() {
        var delta = this.getDateDelta();
       return delta + '%';
    }




})(jQuery);