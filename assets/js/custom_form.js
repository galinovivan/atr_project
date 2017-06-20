/**
 * Created by master on 05.04.2017.
 */
(function( $ ) {

    $(document).ready(function() {
    var lang = document.documentElement.lang;

    if (lang == 'ru-RU') {
        var loginLabel = 'E-mail',
            passLabel = 'Пароль',
            repeatPassLabel = 'Повторите пароль';
    } else if (lang == 'en-US') {
        var loginLabel = 'E-mail',
            passLabel = 'Password',
            repeatPassLabel = 'Repeat password';
        $('#pass1').attr('placeholder', passLabel);
        $('#last_name').attr('placeholder', 'Name');
        //$('.auth_form .wpuf-form li input[type=submit]').val('Registration');
        $('#registrationModal').find('input[type="submit"]').first().val('Join');
        console.log($('#registrationModal').find('input[type="submit"]').first().val());
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
        Select.students = 'Students';
        Select.graduate = 'Graduates';
        Select.single = 'Single';
        Select.multiple = 'Group';
        Select.interior = 'Interior of apartment';
        Select.pavilon = 'Pavilion / arbor';
        Select.busStation = 'Bus station';
        Select.cityOnTheWater = 'Sity on the Water';
        Select.nomination = 'Nomination';
        Select.numbersOfPartners = 'Number of partners';

        var textField = {};
        textField.name = 'Full name';
        textField.city = 'City';
        textField.phoneNumber = 'Phone Number';
        textField.univer = 'University';
        textField.spec = 'Specialty';
        textField.teamLead = 'Mentor';
        textField.projectName = 'Project Name';
        textField.projectDesc = 'Project description';
        textField.submit = 'Send proect';

        if (currentLang == 'en-US') {

            $('.wpuf_category_select_353_352 option:nth-of-type(2)').text(Select.finalist);
            $('.wpuf_category_select_353_352 option:nth-of-type(3)').text(Select.students);
            $('.wpuf_category_select_353_352 option:nth-of-type(4)').text(Select.graduate);

            $('select.wpuf__352 option:first-of-type').text(Select.numbersOfPartners);
            $('select.wpuf__352 option:nth-of-type(2)').text(Select.single);
            $('select.wpuf__352 option:nth-of-type(3)').text(Select.multiple);

            $('select.wpuf_nomination_352 option:first-of-type').text(Select.nomination);
            $('select.wpuf_nomination_352 option:nth-of-type(2)').text(Select.interior);
            $('select.wpuf_nomination_352 option:nth-of-type(3)').text(Select.pavilon);
            $('select.wpuf_nomination_352 option:nth-of-type(4)').text(Select.busStation);
            $('select.wpuf_nomination_352 option:nth-of-type(5)').text(Select.cityOnTheWater);

            var wpUfForm = $('.wpuf-form-add');

            wpUfForm.find('#post_title').attr('placeholder', textField.name);
            wpUfForm.find('#city').attr('placeholder', textField.city);
            wpUfForm.find('#phone_number').attr('placeholder', textField.phoneNumber);
            wpUfForm.find('#univer').attr('placeholder', textField.univer);
            wpUfForm.find('#spec').attr('placeholder', textField.spec);
            wpUfForm.find('#team_lead').attr('placeholder', textField.teamLead);
            wpUfForm.find('#project_name').attr('placeholder', textField.projectName);
            wpUfForm.find('#project_desc').attr('placeholder', textField.projectDesc);
            wpUfForm.find('input[type="submit"]').val(textField.submit);









        }

    });


})(jQuery);
