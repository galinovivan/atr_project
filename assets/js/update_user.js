/**
 * Created by master on 16.05.2017.
 */
(function( $ ) {

    $(document).ready(function() {

        var $form = $('#updateUserInfo');

        $form.submit(function(event) {
            event.preventDefault();

            var userId = $('#userId').val();
            var userUrl = $('#userUrl').val();
            var formAction = $('#formAction').val();

            var formData = {
                action: formAction,
                user_id: userId,
                user_url: userUrl
            };

            $.post(ajax_var, formData, function(response) {
                var $userMessage = $('#userMessages');

                $userMessage.text(response);
                $userMessage.slideToggle();
            });
        })








    });







})(jQuery);