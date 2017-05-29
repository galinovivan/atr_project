/**
 * Created by root on 29.05.17.
 */

(function($) {


$(document).ready(function() {

      var sortField = $('.sort_field');
      var galleryList = $('.gallery_list');
      sortField.click(function(event) {
          event.preventDefault();
          var sortType = $(this).attr('data-sort');
          var terms = $(this).attr('data-terms');
          var responseData = {
              'action': 'myfilter',
              'sort_type': sortType,
              'terms': terms
          };
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
