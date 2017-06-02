/**
 * Created by master on 05.04.2017.
 */
(function( $ ) {

    $(document).ready(function() {
    var lang = document.documentElement.lang;

    if (lang == 'ru-RU') {
        var loginLabel = 'Email',
            passLabel = 'Пароль',
            repeatPassLabel = 'Повторите пароль';
    } else if (lang == 'en-US') {
        var loginLabel = 'Email',
            passLabel = 'Password',
            repeatPassLabel = 'repeat password';
        $('#pass1').attr('placeholder', passLabel);
        $('#last_name').attr('placeholder', 'Name');
        $('.auth_form .wpuf-form li input[type=submit]').val('Registration');
    }


       var $loginField = $('#wpuf-user_login'),
           $passwordField = $('#wpuf-user_pass'),
           $repeatPasswordField = $('#pass2');


        $loginField.attr('placeholder', loginLabel);
        $passwordField.attr('placeholder', passLabel);
        $repeatPasswordField.attr('placeholder', repeatPassLabel);

        // var $regForm = $('.reg_form').find('form'),
        //     $infoModal = $('#infoRegistration'),
        //     $registrationModal = $('#registrationModal');
        //
        // $regForm.on('submit', function() {
        //     $registrationModal.modal('hide');
        //     $infoModal.modal('show');
        // });


        if (lang == 'ru-RU') {

            var thumbFieldLabel = 'Загрузить превью в jpg';
            var pdfFieldLabel = 'Загрузить работу в pdf';


        } else if (lang == 'en-US') {
            var thumbFieldLabel = 'Download preview in jpg';
            var pdfFieldLabel = 'Download the work in pdf';
        }


        var $pdfField = $('#wpuf-___________________pdf-pickfiles');


        $pdfField.text(pdfFieldLabel);

        var $thumbField = $('#wpuf-featured_image-pickfiles');


        $thumbField.text(thumbFieldLabel);
    });

    var $categoryList = $('.wpuf_category_select_353_352 select');

    var currentLang = document.documentElement.lang;

    if (currentLang == 'ru-RU') {
        var categoryLabel = 'Категория';
    } else if (currentLang == 'en-US') {
        var categoryLabel = 'Category';
    }

    $categoryList = $categoryList.children(':first');
    $categoryList.text(categoryLabel);








})(jQuery);
(function($) {

    $(document).ready(function() {
        currentLang = document.documentElement.lang;

        var Select = {};
        Select.finalist = 'Finalists 2016';
        Select.students = 'students';
        Select.graduate = 'Graduates';
        Select.single = 'single';
        Select.multiple = 'group';
        Select.interior = 'INTERIOR OF APARTMENT';
        Select.pavilon = 'PAVILION / ARBOR';
        Select.busStation = 'Bus station';
        Select.cityOnTheWater = 'Sity on the Water';
        Select.nomination = 'Nomination';
        Select.numbersOfPartners = 'Number of partners';

        if (currentLang == 'en-US') {
            console.log($('.wpuf_category_select_353_352 option:nth-of-type(2)'));
            $('.wpuf_category_select_353_352 option:nth-of-type(2)').text(Select.finalist);

        }

    });


})(jQuery);
