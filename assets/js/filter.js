/**
 * Created by root on 29.05.17.
 */

(function($) {


    $(document).ready(function() {

        var filterField = $('.filter_field');
        var galleryList = $('.gallery_list');
        filterField.click(function(event) {
            event.preventDefault();
            var filterQuery = $(this).attr('data-filter');
            var terms = $(this).attr('data-terms');
            var responseData = {
                'action': 'myfilter',
                'filter_nomination_query': filterQuery,
                'terms': terms
            };
            console.log(responseData);
            $.ajax({
                url: window.wp_data.ajax_url,
                data: responseData,
                type: 'POST',
                beforeSend: function (xhr) {
                    galleryList.find('.sort_preloader').show();
                },
                success: function (data) {
                    galleryList.find('.sort_preloader').hide();
                    galleryList.html(data);
                }
            })

        });

    })


})(jQuery);
