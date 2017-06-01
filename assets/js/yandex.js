/**
 * Created by root on 01.06.17.
 */
(function($) {

    $(document).ready(function() {

        var topHelperButton = $('#topActionForUnloggined');
        topHelperButton.on('click', function (event) {
            event.preventDefault();
            sendDataToYandexMetrica('topHelperHereButton');
        });



    function sendDataToYandexMetrica(eventId) {
        yaCounter44245474.reachGoal(eventId, function() {
          console.log('Send event data to ' + eventId);
        });
    }
    });
})(jQuery);
