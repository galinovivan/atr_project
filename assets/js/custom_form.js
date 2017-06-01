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



        var $pdfField = $('#wpuf-___________________pdf-pickfiles'),
            pdfFieldLabel = 'Загрузить работу в pdf';

        $pdfField.text(pdfFieldLabel);

        var $thumbField = $('#wpuf-featured_image-pickfiles'),
            thumbFieldLabel = 'Загрузить превью в jpg';

        $thumbField.text(thumbFieldLabel);
    });

    var $categoryList = $('.wpuf_category_select_353_352 select'),
        categoryLabel = 'Категория';

    $categoryList = $categoryList.children(':first');
    $categoryList.text(categoryLabel);



})(jQuery);
