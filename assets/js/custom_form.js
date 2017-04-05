/**
 * Created by master on 05.04.2017.
 */
(function( $ ) {

    $(document).ready(function() {

        var loginLabel = 'Email',
            passLabel = 'Пароль',
            repeatPassLabel = 'Повторите пароль';

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

    var $categoryList = $('.wpuf_category_select_261_141 select'),
        categoryLabel = 'Категория';

    $categoryList = $categoryList.children(':first');
    $categoryList.text(categoryLabel);



})(jQuery);
