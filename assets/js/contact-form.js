/**
 * Created by master on 07.04.2017.
 */
(function( $ ) {

    $(document).ready(function() {

        $('#contactForm').submit(function(event) {
            event.preventDefault();
           var formData = $(this).serialize();
           var action = formData['action'];

            $.ajax({
                type: "POST",
                url: window.wp_data.ajax_url,
                data: formData,
                success: function() {
                    var $contactModal = $('#contactModal');
                    $contactModal.modal('show');
                }
            })
        });

    });


})(jQuery);
