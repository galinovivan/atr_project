/**
 * Created by root on 01.06.17.
 */
(function($) {

    $(document).ready(function() {

        var topHelperButton = $('#topActionForUnloggined');
        topHelperButton.on('click', function (event) {
            sendDataToYandexMetrica('topHelperHereButton');
        });


        var registrationForm = $('.reg_form').find('form');
        registrationForm.submit(function() {
            sendDataToYandexMetrica('registrationForm');
        });

        var buttonLearnMore = $('#buttonLearnMore');
        buttonLearnMore.click(function() {
           sendDataToYandexMetrica('buttonLearnMore');
        });

        var buttomRegistrationButton = $('#buttonRegistrationOnButtom');
        buttomRegistrationButton.click(function() {
           sendDataToYandexMetrica('bottomRegistration');
        });

        var bottomContactForm = $('.wpcf7-form');

        bottomContactForm.click(function() {
           sendDataToYandexMetrica('bottomContactForm');
        });


        var houseNominationButton = $('#buttonHouse');
        houseNominationButton.click(function() {
           sendDataToYandexMetrica('buttonHouse');
        });

        var cityOnTheWaterNomination = $('#ButtonCityOntheWater');
        cityOnTheWaterNomination.click(function() {
           sendDataToYandexMetrica('cityOnTheWaterNomination');
        });

        var appartamentsNomination = $('#buttonAppartaments');
        appartamentsNomination.click(function() {
           sendDataToYandexMetrica('buttonApartamentsNomination');
        });

        var buttonBusStation = $('#buttonBusStation');
        buttonBusStation.click(function() {
           sendDataToYandexMetrica('buttonBusStationNomination');
        });

        /**
         *
          * @param eventId
         */
        function sendDataToYandexMetrica(eventId) {
             yaCounter44245474.reachGoal(eventId, function() {
             console.log('Send event data to ' + eventId);
             });
        }
    });
})(jQuery);
