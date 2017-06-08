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
            var sessionStorage = window.sessionStorage;
            if (sessionStorage) {
              sessionStorage.setItem('project-publish-status', 'create');
            }
        });


    });



})(jQuery);
