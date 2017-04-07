/**
 * Created by master on 29.03.2017.
 */
(function( $ ) {
    $(document).ready(function() {

        var Modals = {
            'successSendProject': $('#successSendProject')
        };


       var $createProjectForm = $('.wpuf-form-add');

        $createProjectForm.submit(function(event) {
            Modals.successSendProject.modal('show');
        });


    });



})(jQuery);
