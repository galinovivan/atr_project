/**
 * Created by master on 28.03.2017.
 */
(function( $ ) {

    var ajaxGo = false;

    $(document).ready(function() {

        var userForm = $('.userform');

        function reqGo(data, form, options) {
            if (ajaxGo) {
                form.find('response').html('<p>Необходимо дождаться ответа предыдущего запроса</p>');
                return false;
            }
            form.find('button[type="submit"]').attr('disabled', 'disabled').val('Подождите');
            form.find('.response').html('');
            ajaxGo = true;
        }
        function reqCome(data, statusText, xhr, form) {
            console.log(arguments);
            if (data.success) {
                var response = buildMessage(data.data.message, 'success');
                form.find('button[type="submit"]').prop('disabled', false).val('Готово');
            } else {
                var response = buildMessage(data.data.message, 'error');
                form.find('button[type="subit"]').prop('disabled', false).val('Отправить');
            }
            form.find('.response').html(response);
            if (data.data.redirect) {
                window.location.href = data.data.redirect;
            }
            ajaxGo = false;
        }

        var args = {
            dataType: 'json',
            beforeSubmit: reqGo,
            success: reqCome,
            error: function(data) {
                console.log(arguments);
            },
            url: ajax_var.url
        };
        userForm.ajaxForm(args);

        $('.logout').click(function(event) {

            event.preventDefault();
            if (ajaxGo) return false;
            var link = $(this);
            $.ajax({
                type: 'POST',
                url: ajax_var.url,
                dataType: 'json',
                data: 'action=logout_me&nonce=' + $(this).data('nonce'),
                beforeSend: function(data) {
                    link.text('Подождите');
                    ajaxGo = true;
                },
                success: function(data) {
                    if (data.success) {
                        link.text('Выходим');
                        window.location.reload(true);
                    } else {
                        alert(data.data.message);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(arguments);
                },
                complete: function(data) {
                    ajaxGo = false;
                }
            })

        });



    });


    function buildMessage(message, type) {
        if (type == 'error') {

          return '<div class="alert alert-error"><p class="black">' + message + '</p></div>';

        }
        return '<div class="alert alert-success"><p class="black">' + message + '</p></div>';
    }


})(jQuery);
