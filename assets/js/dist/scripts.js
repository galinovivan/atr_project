!function(t){t(document).ready(function(){t("#centerSlider").slick({centerPadding:"0px",centerMode:!0,slidesToShow:5,prevArrow:'<div class="arrow left"><i class="social_arrow social_arrow-arrow_left"></i></div>',nextArrow:'<div class="arrow right"><i class="social_arrow social_arrow-arrow_right"></i></div>'})})}(jQuery),function(t){t(document).ready(function(){t("#contactForm").submit(function(e){e.preventDefault();var n=t(this).serialize();n.action;t.ajax({type:"POST",url:window.wp_data.ajax_url,data:n,success:function(){t("#contactModal").modal("show")}})})})}(jQuery),function(t){t(document).ready(function(){var e=t("#wpuf-user_login"),n=t("#wpuf-user_pass"),o=t("#pass2");e.attr("placeholder","Email"),n.attr("placeholder","Пароль"),o.attr("placeholder","Повторите пароль");t("#wpuf-___________________pdf-pickfiles").text("Загрузить работу в pdf");t("#wpuf-featured_image-pickfiles").text("Загрузить превью в jpg")});var e=t(".wpuf_category_select_353_352 select");e=e.children(":first"),e.text("Категория")}(jQuery),function(t){t(document).ready(function(){new e(t("#dateLineContainer")).init()});var e=function(e){this.container=e,this.line=e.find(".date_line"),this.dateStart=Date.parse(e.attr("data-datestart")),this.dateEnd=Date.parse(e.attr("data-dateend")),this.currentDate=Date.now(),this.mobileParentHeight=276,this.mobileLine=t(".date_line_mobile"),this.mobileWidth="767"};e.prototype.init=function(){return this.isMobile()?(this.setMobileHeight(),!0):(this.setWidth(),!0)},e.prototype.getDateDelta=function(){var t=this.dateStart,e=this.dateEnd,n=this.currentDate,o=e-t,a=n-t,i=100*a/o;return console.log(i),i},e.prototype.isMobile=function(){return t(window).width()<this.mobileWidth},e.prototype.setWidth=function(){var t=this.calculateWidth();this.line.css("width",t)},e.prototype.calculateWidth=function(){return this.getDateDelta()+"%"},e.prototype.setMobileHeight=function(){var t=this.calculateMobileHeight();console.log(t),this.mobileLine.css("height",t)},e.prototype.calculateMobileHeight=function(){var t=this.getDateDelta(),e=this.mobileParentHeight;return Math.floor(e*(t/100))+"px"}}(jQuery),function(t){t(document).ready(function(){var e=t(".filter_field"),n=t(".gallery_list");e.click(function(e){e.preventDefault();var o=t(this).attr("data-filter"),a=t(this).attr("data-terms"),i={action:"myfilter",filter_nomination_query:o,terms:a};console.log(i),t.ajax({url:window.wp_data.ajax_url,data:i,type:"POST",beforeSend:function(t){n.find(".sort_preloader").show()},success:function(t){n.find(".sort_preloader").hide(),n.html(t)}})})})}(jQuery),function(t){t(document).ready(function(){var e=t(".helper"),n=e.find(".helper_close");t("#helperToggle").on("click",function(t){e.slideToggle("fast"),t.preventDefault()}),n.on("click",function(t){e.slideToggle("fast"),t.preventDefault()})})}(jQuery),function(t){t(document).ready(function(){function e(e){var o=e.attr("href"),a=t(o),i=n(a);t("body").animate({scrollTop:i},800),t("#mainNav").slideToggle()}function n(t){var e=t.offset().top-325;return console.log(e),e}!function(){var n=t(".scroll_link");n.on("click",function(t){t.preventDefault(),e(n)})}()})}(jQuery),function(t){function e(t,e){return"error"==e?'<div class="alert alert-error"><p class="black">'+t+"</p></div>":'<div class="alert alert-success"><p class="black">'+t+"</p></div>"}var n=!1;t(document).ready(function(){function o(t,e,o){if(n)return e.find("response").html("<p>Необходимо дождаться ответа предыдущего запроса</p>"),!1;e.find('input[type="submit"]').attr("disabled","disabled").val("Подождите"),e.find(".response").html(""),n=!0}function a(o,a,i,r){if(console.log(arguments),o.success){var c=t("#stepSuccess");if(null!=(c=t(c.val())))t("#registrationModal").modal("hide"),c.modal("show");else{var s=e(o.data.message,"success");r.find('input[type="submit"]').prop("disabled",!1).val("Готово")}}else{var s=e(o.data.message,"error");r.find('input[type="submit"]').prop("disabled",!1).val("Отправить")}r.find(".response").html(s),o.data.redirect&&(window.location.href=o.data.redirect),n=!1}var i=t(".userform"),r={dataType:"json",beforeSubmit:o,success:a,error:function(t){console.log(arguments)},url:ajax_var.url};i.ajaxForm(r),t(".logout").click(function(e){if(e.preventDefault(),n)return!1;var o=t(this);t.ajax({type:"POST",url:"admin-ajax.php",dataType:"json",data:"action=logout_me&nonce="+t(this).data("nonce"),beforeSend:function(t){o.text("Подождите"),n=!0},success:function(t){t.success?(o.text("Выходим"),window.location.reload(!0)):alert(t.data.message)},error:function(t,e,n){console.log(arguments)},complete:function(t){n=!1}})})})}(jQuery),function(t){t(document).ready(function(){var e={successSendProject:t("#successSendProject")};t(".wpuf-form-add").submit(function(t){e.successSendProject.modal("show")})})}(jQuery),function(t){function e(t,e){e.on("click",function(){t.slideToggle()}),t.find(".nav_close").on("click",function(e){t.slideToggle(),e.preventDefault()})}t(document).ready(function(){e(t("#mainNav"),t("#navToggle"))})}(jQuery),function(t){function e(){var e=t("#pagePreloader");e.find(".spinner").fadeOut(),e.delay(350).fadeOut("slow")}t(window).on("load",function(){e()})}(jQuery),function(t){t(document).ready(function(){function e(){n.scrollTop()>400?o.show("fast"):o.hide("fast")}var n=t("body"),o=t(".top_link");o.on("click",function(t){t.preventDefault(),n.animate({scrollTop:0},800)}),window.onscroll=function(){e()}})}(jQuery),function(t){t(document).ready(function(){var e=t(".sort_field"),n=t(".gallery_list");e.click(function(e){e.preventDefault();var o=t(this).attr("data-sort"),a=t(this).attr("data-terms"),i={action:"myfilter",sort_type:o,terms:a};t.ajax({url:window.wp_data.ajax_url,data:i,type:"POST",beforeSend:function(t){n.find(".sort_preloader").show()},success:function(t){n.find(".sort_preloader").hide(),n.html(t)}})})})}(jQuery),function(t){t(document).ready(function(){t('[data-toggle="tooltip"]').tooltip()})}(jQuery),function(t){t(document).ready(function(){t("#updateUserInfo").submit(function(e){e.preventDefault();var n=t("#userId").val(),o=t("#userUrl").val(),a=t("#userName").val(),i=t("#formAction").val(),r=t("#currentLang").val(),c={action:i,user_id:n,user_url:o,user_name:a,current_lang:r};t.post(ajax_var,c,function(e){var n=t("#userMessages");n.text(e),n.slideToggle()})})})}(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImNhcm91c2VsLmpzIiwiY29udGFjdC1mb3JtLmpzIiwiY3VzdG9tX2Zvcm0uanMiLCJkYXRlX2xpbmVfY2FsY3VsYXRlLmpzIiwiZmlsdGVyLmpzIiwiaGVscGVyLmpzIiwibGluay1zY3JvbGwuanMiLCJsb2dpbi5qcyIsIm1vZGFscy5qcyIsIm5hdi5qcyIsInByZWxvYWRlci5qcyIsInNjcm9sbC5qcyIsInNvcnQtaGFuZGxlci5qcyIsInRvb2x0aXAuanMiLCJ1cGRhdGVfdXNlci5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInNsaWNrIiwiY2VudGVyUGFkZGluZyIsImNlbnRlck1vZGUiLCJzbGlkZXNUb1Nob3ciLCJwcmV2QXJyb3ciLCJuZXh0QXJyb3ciLCJqUXVlcnkiLCJzdWJtaXQiLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiZm9ybURhdGEiLCJ0aGlzIiwic2VyaWFsaXplIiwiYWpheCIsInR5cGUiLCJ1cmwiLCJ3aW5kb3ciLCJ3cF9kYXRhIiwiYWpheF91cmwiLCJkYXRhIiwic3VjY2VzcyIsIm1vZGFsIiwiJGxvZ2luRmllbGQiLCIkcGFzc3dvcmRGaWVsZCIsIiRyZXBlYXRQYXNzd29yZEZpZWxkIiwiYXR0ciIsInRleHQiLCIkY2F0ZWdvcnlMaXN0IiwiY2hpbGRyZW4iLCJEYXRlTGluZSIsImluaXQiLCIkZWxlbWVudENvbnRhaW5lciIsImNvbnRhaW5lciIsImxpbmUiLCJmaW5kIiwiZGF0ZVN0YXJ0IiwiRGF0ZSIsInBhcnNlIiwiZGF0ZUVuZCIsImN1cnJlbnREYXRlIiwibm93IiwibW9iaWxlUGFyZW50SGVpZ2h0IiwibW9iaWxlTGluZSIsIm1vYmlsZVdpZHRoIiwicHJvdG90eXBlIiwiaXNNb2JpbGUiLCJzZXRNb2JpbGVIZWlnaHQiLCJzZXRXaWR0aCIsImdldERhdGVEZWx0YSIsInN0YXJ0IiwiZW5kIiwiY3VycmVudCIsInN0YXJ0RGVsdGEiLCJjdXJyZW50RGVsdGEiLCJkZWx0YSIsImNvbnNvbGUiLCJsb2ciLCJ3aWR0aCIsImNhbGN1bGF0ZVdpZHRoIiwiY3NzIiwiaGVpZ2h0IiwiY2FsY3VsYXRlTW9iaWxlSGVpZ2h0IiwicGFyZW50SGVpZ2h0IiwiTWF0aCIsImZsb29yIiwiZmlsdGVyRmllbGQiLCJnYWxsZXJ5TGlzdCIsImNsaWNrIiwiZmlsdGVyUXVlcnkiLCJ0ZXJtcyIsInJlc3BvbnNlRGF0YSIsImFjdGlvbiIsImZpbHRlcl9ub21pbmF0aW9uX3F1ZXJ5IiwiYmVmb3JlU2VuZCIsInhociIsInNob3ciLCJoaWRlIiwiaHRtbCIsIiRoZWxwZXIiLCIkY2xvc2VUb2dnbGUiLCJvbiIsInNsaWRlVG9nZ2xlIiwibWFrZVNjcm9sbExpbmsiLCIkbGluayIsImhyZWYiLCIkZWxUYXJnZXQiLCJzY3JvbGwiLCJnZXRTY3JvbGwiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwiJGVsIiwiJHNjcm9sbCIsIm9mZnNldCIsInRvcCIsIiRzY3JvbGxMaW5rIiwiYnVpbGRNZXNzYWdlIiwibWVzc2FnZSIsImFqYXhHbyIsInJlcUdvIiwiZm9ybSIsIm9wdGlvbnMiLCJ2YWwiLCJyZXFDb21lIiwic3RhdHVzVGV4dCIsImFyZ3VtZW50cyIsIm5leHRTdGVwTW9kYWwiLCJyZXNwb25zZSIsInByb3AiLCJyZWRpcmVjdCIsImxvY2F0aW9uIiwidXNlckZvcm0iLCJhcmdzIiwiZGF0YVR5cGUiLCJiZWZvcmVTdWJtaXQiLCJlcnJvciIsImFqYXhfdmFyIiwiYWpheEZvcm0iLCJsaW5rIiwicmVsb2FkIiwiYWxlcnQiLCJhamF4T3B0aW9ucyIsInRocm93bkVycm9yIiwiY29tcGxldGUiLCJNb2RhbHMiLCJzdWNjZXNzU2VuZFByb2plY3QiLCJpbml0TmF2IiwiJG5hdiIsIiR0b2dnbGVCdG4iLCJpbml0UHJlbG9hZGVyIiwiJHByZWxvYWRlciIsImZhZGVPdXQiLCJkZWxheSIsImluaXRUb3BMaW5rIiwiJGJvZHkiLCIkdG9wTGluayIsIm9uc2Nyb2xsIiwic29ydEZpZWxkIiwic29ydFR5cGUiLCJzb3J0X3R5cGUiLCJ0b29sdGlwIiwidXNlcklkIiwidXNlclVybCIsInVzZXJOYW1lIiwiZm9ybUFjdGlvbiIsImN1cnJlbnRMYW5nIiwidXNlcl9pZCIsInVzZXJfdXJsIiwidXNlcl9uYW1lIiwiY3VycmVudF9sYW5nIiwicG9zdCIsIiR1c2VyTWVzc2FnZSJdLCJtYXBwaW5ncyI6IkNBQUEsU0FBQUEsR0FFQUEsRUFBQUMsVUFBQUMsTUFBQSxXQUNBRixFQUFBLGlCQUNBRyxPQUNBQyxjQUFBLE1BQ0FDLFlBQUEsRUFDQUMsYUFBQSxFQUNBQyxVQUFBLHFGQUNBQyxVQUFBLDRGQUlBQyxRQ1ZBLFNBQUFULEdBRUFBLEVBQUFDLFVBQUFDLE1BQUEsV0FFQUYsRUFBQSxnQkFBQVUsT0FBQSxTQUFBQyxHQUNBQSxFQUFBQyxnQkFDQSxJQUFBQyxHQUFBYixFQUFBYyxNQUFBQyxXQUNBRixHQUFBLE1BRUFiLEdBQUFnQixNQUNBQyxLQUFBLE9BQ0FDLElBQUFDLE9BQUFDLFFBQUFDLFNBQ0FDLEtBQUFULEVBQ0FVLFFBQUEsV0FDQXZCLEVBQUEsaUJBQ0F3QixNQUFBLGdCQVFBZixRQ3ZCQSxTQUFBVCxHQUVBQSxFQUFBQyxVQUFBQyxNQUFBLFdBRUEsR0FJQXVCLEdBQUF6QixFQUFBLG9CQUNBMEIsRUFBQTFCLEVBQUEsbUJBQ0EyQixFQUFBM0IsRUFBQSxTQUdBeUIsR0FBQUcsS0FBQSxjQVRBLFNBVUFGLEVBQUFFLEtBQUEsY0FUQSxVQVVBRCxFQUFBQyxLQUFBLGNBVEEsbUJBc0JBNUIsR0FBQSwwQ0FHQTZCLEtBRkEseUJBSUE3QixHQUFBLGtDQUdBNkIsS0FGQSwyQkFLQSxJQUFBQyxHQUFBOUIsRUFBQSx1Q0FHQThCLEdBQUFBLEVBQUFDLFNBQUEsVUFDQUQsRUFBQUQsS0FIQSxjQU9BcEIsUUMvQ0EsU0FBQVQsR0FFQUEsRUFBQUMsVUFBQUMsTUFBQSxXQUdBLEdBQUE4QixHQUFBaEMsRUFBQSx1QkFDQWlDLFFBVUEsSUFBQUQsR0FBQSxTQUFBRSxHQUNBcEIsS0FBQXFCLFVBQUFELEVBQ0FwQixL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SUFBQW1JLEdBQUEvSSxFQUFBLFdBQUF3RyxNQUNBd0MsRUFBQWhKLEVBQUEsWUFBQXdHLE1BQ0F5QyxFQUFBakosRUFBQSxhQUFBd0csTUFDQTBDLEVBQUFsSixFQUFBLGVBQUF3RyxNQUNBMkMsRUFBQW5KLEVBQUEsZ0JBQUF3RyxNQUVBM0YsR0FDQTZELE9BQUF3RSxFQUNBRSxRQUFBTCxFQUNBTSxTQUFBTCxFQUNBTSxVQUFBTCxFQUNBTSxhQUFBSixFQUdBbkosR0FBQXdKLEtBQUFsQyxTQUFBekcsRUFBQSxTQUFBZ0csR0FDQSxHQUFBNEMsR0FBQXpKLEVBQUEsZ0JBRUF5SixHQUFBNUgsS0FBQWdGLEdBQ0E0QyxFQUFBckUscUJBbUJBM0UiLCJmaWxlIjoic2NyaXB0cy5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiggJCApIHtcclxuXHJcbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcclxuICAgICAgIHZhciBzbGlkZXIgPSAkKCcjY2VudGVyU2xpZGVyJyk7XHJcbiAgICAgICAgc2xpZGVyLnNsaWNrKHtcclxuICAgICAgICAgICBjZW50ZXJQYWRkaW5nOiAnMHB4JyxcclxuICAgICAgICAgICAgY2VudGVyTW9kZTogdHJ1ZSxcclxuICAgICAgICAgICAgc2xpZGVzVG9TaG93OiA1LFxyXG4gICAgICAgICAgICBwcmV2QXJyb3c6ICc8ZGl2IGNsYXNzPVwiYXJyb3cgbGVmdFwiPjxpIGNsYXNzPVwic29jaWFsX2Fycm93IHNvY2lhbF9hcnJvdy1hcnJvd19sZWZ0XCI+PC9pPjwvZGl2PicsXHJcbiAgICAgICAgICAgIG5leHRBcnJvdzogJzxkaXYgY2xhc3M9XCJhcnJvdyByaWdodFwiPjxpIGNsYXNzPVwic29jaWFsX2Fycm93IHNvY2lhbF9hcnJvdy1hcnJvd19yaWdodFwiPjwvaT48L2Rpdj4nLFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG59KShqUXVlcnkpOyIsIi8qKlxuICogQ3JlYXRlZCBieSBtYXN0ZXIgb24gMDcuMDQuMjAxNy5cbiAqL1xuKGZ1bmN0aW9uKCAkICkge1xuXG4gICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgJCgnI2NvbnRhY3RGb3JtJykuc3VibWl0KGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAgICB2YXIgZm9ybURhdGEgPSAkKHRoaXMpLnNlcmlhbGl6ZSgpO1xuICAgICAgICAgICB2YXIgYWN0aW9uID0gZm9ybURhdGFbJ2FjdGlvbiddO1xuXG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6IFwiUE9TVFwiLFxuICAgICAgICAgICAgICAgIHVybDogd2luZG93LndwX2RhdGEuYWpheF91cmwsXG4gICAgICAgICAgICAgICAgZGF0YTogZm9ybURhdGEsXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciAkY29udGFjdE1vZGFsID0gJCgnI2NvbnRhY3RNb2RhbCcpO1xuICAgICAgICAgICAgICAgICAgICAkY29udGFjdE1vZGFsLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSk7XG5cbiAgICB9KTtcblxuXG59KShqUXVlcnkpO1xuIiwiLyoqXG4gKiBDcmVhdGVkIGJ5IG1hc3RlciBvbiAwNS4wNC4yMDE3LlxuICovXG4oZnVuY3Rpb24oICQgKSB7XG5cbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAgICAgICB2YXIgbG9naW5MYWJlbCA9ICdFbWFpbCcsXG4gICAgICAgICAgICBwYXNzTGFiZWwgPSAn0J/QsNGA0L7Qu9GMJyxcbiAgICAgICAgICAgIHJlcGVhdFBhc3NMYWJlbCA9ICfQn9C+0LLRgtC+0YDQuNGC0LUg0L/QsNGA0L7Qu9GMJztcblxuICAgICAgIHZhciAkbG9naW5GaWVsZCA9ICQoJyN3cHVmLXVzZXJfbG9naW4nKSxcbiAgICAgICAgICAgJHBhc3N3b3JkRmllbGQgPSAkKCcjd3B1Zi11c2VyX3Bhc3MnKSxcbiAgICAgICAgICAgJHJlcGVhdFBhc3N3b3JkRmllbGQgPSAkKCcjcGFzczInKTtcblxuXG4gICAgICAgICRsb2dpbkZpZWxkLmF0dHIoJ3BsYWNlaG9sZGVyJywgbG9naW5MYWJlbCk7XG4gICAgICAgICRwYXNzd29yZEZpZWxkLmF0dHIoJ3BsYWNlaG9sZGVyJywgcGFzc0xhYmVsKTtcbiAgICAgICAgJHJlcGVhdFBhc3N3b3JkRmllbGQuYXR0cigncGxhY2Vob2xkZXInLCByZXBlYXRQYXNzTGFiZWwpO1xuXG4gICAgICAgIC8vIHZhciAkcmVnRm9ybSA9ICQoJy5yZWdfZm9ybScpLmZpbmQoJ2Zvcm0nKSxcbiAgICAgICAgLy8gICAgICRpbmZvTW9kYWwgPSAkKCcjaW5mb1JlZ2lzdHJhdGlvbicpLFxuICAgICAgICAvLyAgICAgJHJlZ2lzdHJhdGlvbk1vZGFsID0gJCgnI3JlZ2lzdHJhdGlvbk1vZGFsJyk7XG4gICAgICAgIC8vXG4gICAgICAgIC8vICRyZWdGb3JtLm9uKCdzdWJtaXQnLCBmdW5jdGlvbigpIHtcbiAgICAgICAgLy8gICAgICRyZWdpc3RyYXRpb25Nb2RhbC5tb2RhbCgnaGlkZScpO1xuICAgICAgICAvLyAgICAgJGluZm9Nb2RhbC5tb2RhbCgnc2hvdycpO1xuICAgICAgICAvLyB9KTtcblxuXG5cbiAgICAgICAgdmFyICRwZGZGaWVsZCA9ICQoJyN3cHVmLV9fX19fX19fX19fX19fX19fX19wZGYtcGlja2ZpbGVzJyksXG4gICAgICAgICAgICBwZGZGaWVsZExhYmVsID0gJ9CX0LDQs9GA0YPQt9C40YLRjCDRgNCw0LHQvtGC0YMg0LIgcGRmJztcblxuICAgICAgICAkcGRmRmllbGQudGV4dChwZGZGaWVsZExhYmVsKTtcblxuICAgICAgICB2YXIgJHRodW1iRmllbGQgPSAkKCcjd3B1Zi1mZWF0dXJlZF9pbWFnZS1waWNrZmlsZXMnKSxcbiAgICAgICAgICAgIHRodW1iRmllbGRMYWJlbCA9ICfQl9Cw0LPRgNGD0LfQuNGC0Ywg0L/RgNC10LLRjNGOINCyIGpwZyc7XG5cbiAgICAgICAgJHRodW1iRmllbGQudGV4dCh0aHVtYkZpZWxkTGFiZWwpO1xuICAgIH0pO1xuXG4gICAgdmFyICRjYXRlZ29yeUxpc3QgPSAkKCcud3B1Zl9jYXRlZ29yeV9zZWxlY3RfMzUzXzM1MiBzZWxlY3QnKSxcbiAgICAgICAgY2F0ZWdvcnlMYWJlbCA9ICfQmtCw0YLQtdCz0L7RgNC40Y8nO1xuXG4gICAgJGNhdGVnb3J5TGlzdCA9ICRjYXRlZ29yeUxpc3QuY2hpbGRyZW4oJzpmaXJzdCcpO1xuICAgICRjYXRlZ29yeUxpc3QudGV4dChjYXRlZ29yeUxhYmVsKTtcblxuXG5cbn0pKGpRdWVyeSk7XG4iLCIvKipcbiAqIENyZWF0ZWQgYnkgbWFzdGVyIG9uIDEyLjA1LjIwMTcuXG4gKi9cbihmdW5jdGlvbigkKSB7XG5cbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuXG5cbiAgICAgICAgdmFyIGRhdGVMaW5lID0gbmV3IERhdGVMaW5lKCQoJyNkYXRlTGluZUNvbnRhaW5lcicpKTtcbiAgICAgICAgZGF0ZUxpbmUuaW5pdCgpO1xuXG5cbiAgICB9KTtcblxuICAgIC8qKlxuICAgICAqXG4gICAgICogQHBhcmFtIHtqcXVlcnl9ICRlbGVtZW50Q29udGFpbmVyXG4gICAgICogQGNvbnN0cnVjdG9yXG4gICAgICovXG4gIHZhciBEYXRlTGluZSA9IGZ1bmN0aW9uKCRlbGVtZW50Q29udGFpbmVyKSB7XG4gICAgICB0aGlzLmNvbnRhaW5lciA9ICRlbGVtZW50Q29udGFpbmVyO1xuICAgICAgdGhpcy5saW5lID0gJGVsZW1lbnRDb250YWluZXIuZmluZCgnLmRhdGVfbGluZScpO1xuICAgICAgdGhpcy5kYXRlU3RhcnQgPSAgRGF0ZS5wYXJzZSgkZWxlbWVudENvbnRhaW5lci5hdHRyKCdkYXRhLWRhdGVzdGFydCcpKTtcbiAgICAgIHRoaXMuZGF0ZUVuZCA9IERhdGUucGFyc2UoJGVsZW1lbnRDb250YWluZXIuYXR0cignZGF0YS1kYXRlZW5kJykpO1xuICAgICAgdGhpcy5jdXJyZW50RGF0ZSA9IERhdGUubm93KCk7XG4gICAgICB0aGlzLm1vYmlsZVBhcmVudEhlaWdodCA9IDI3NjtcbiAgICAgIHRoaXMubW9iaWxlTGluZSA9ICQoJy5kYXRlX2xpbmVfbW9iaWxlJyk7XG4gICAgICB0aGlzLm1vYmlsZVdpZHRoID0gJzc2Nyc7XG4gICAgfTtcblxuICAgIC8qKlxuICAgICAqIEByZXR1cm5zIHtib29sZWFufVxuICAgICAqL1xuICAgIERhdGVMaW5lLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIGlmICghdGhpcy5pc01vYmlsZSgpKSB7XG4gICAgICAgICAgICB0aGlzLnNldFdpZHRoKCk7XG4gICAgICAgICAgICByZXR1cm4gdHJ1ZTtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLnNldE1vYmlsZUhlaWdodCgpO1xuICAgICAgICByZXR1cm4gdHJ1ZTtcbiAgICB9O1xuXG4gICAgLyoqXG4gICAgICogQHJldHVybnMge251bWJlcn1cbiAgICAgKi9cbiAgICBEYXRlTGluZS5wcm90b3R5cGUuZ2V0RGF0ZURlbHRhID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBzdGFydCA9IHRoaXMuZGF0ZVN0YXJ0O1xuICAgICAgICB2YXIgZW5kID0gdGhpcy5kYXRlRW5kO1xuICAgICAgICB2YXIgY3VycmVudCA9IHRoaXMuY3VycmVudERhdGU7XG5cbiAgICAgICAgdmFyIHN0YXJ0RGVsdGEgPSBlbmQgLSBzdGFydDtcbiAgICAgICAgdmFyIGN1cnJlbnREZWx0YSA9IGN1cnJlbnQgLSBzdGFydDtcbiAgICAgICAgdmFyIGRlbHRhID0gKGN1cnJlbnREZWx0YSAqIDEwMCkgLyBzdGFydERlbHRhO1xuXG4gICAgICAgIGNvbnNvbGUubG9nKGRlbHRhKTtcblxuICAgICAgICByZXR1cm4gZGVsdGE7XG5cbiAgICB9O1xuXG4gICAgLyoqXG4gICAgICogQHJldHVybnMge2Jvb2xlYW59XG4gICAgICovXG4gICAgRGF0ZUxpbmUucHJvdG90eXBlLmlzTW9iaWxlID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIHJldHVybiAkKHdpbmRvdykud2lkdGgoKSA8IHRoaXMubW9iaWxlV2lkdGg7XG4gICAgfTtcblxuICAgIC8qKlxuICAgICAqXG4gICAgICovXG4gICAgRGF0ZUxpbmUucHJvdG90eXBlLnNldFdpZHRoID0gZnVuY3Rpb24oKSB7XG4gICAgICAgdmFyIHdpZHRoID0gdGhpcy5jYWxjdWxhdGVXaWR0aCgpO1xuXG4gICAgICAgIHRoaXMubGluZS5jc3MoJ3dpZHRoJywgd2lkdGgpO1xuICAgIH07XG5cbiAgICBEYXRlTGluZS5wcm90b3R5cGUuY2FsY3VsYXRlV2lkdGggPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdmFyIGRlbHRhID0gdGhpcy5nZXREYXRlRGVsdGEoKTtcbiAgICAgICByZXR1cm4gZGVsdGEgKyAnJSc7XG4gICAgfTtcblxuXG4gICAgRGF0ZUxpbmUucHJvdG90eXBlLnNldE1vYmlsZUhlaWdodCA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgaGVpZ2h0ID0gdGhpcy5jYWxjdWxhdGVNb2JpbGVIZWlnaHQoKTtcbiAgICAgICAgY29uc29sZS5sb2coaGVpZ2h0KTtcbiAgICAgICAgdGhpcy5tb2JpbGVMaW5lLmNzcygnaGVpZ2h0JywgaGVpZ2h0KTtcbiAgICB9O1xuXG4gICAgRGF0ZUxpbmUucHJvdG90eXBlLmNhbGN1bGF0ZU1vYmlsZUhlaWdodCA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgZGVsdGEgPSB0aGlzLmdldERhdGVEZWx0YSgpO1xuICAgICAgICB2YXIgcGFyZW50SGVpZ2h0ID0gdGhpcy5tb2JpbGVQYXJlbnRIZWlnaHQ7XG4gICAgICAgIHZhciBoZWlnaHQgPSBNYXRoLmZsb29yKHBhcmVudEhlaWdodCAqIChkZWx0YSAvIDEwMCkpO1xuXG4gICAgICAgIHJldHVybiBoZWlnaHQgKyAncHgnO1xuICAgIH07XG5cblxuXG59KShqUXVlcnkpOyIsIi8qKlxuICogQ3JlYXRlZCBieSByb290IG9uIDI5LjA1LjE3LlxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblxuICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuXG4gICAgICAgIHZhciBmaWx0ZXJGaWVsZCA9ICQoJy5maWx0ZXJfZmllbGQnKTtcbiAgICAgICAgdmFyIGdhbGxlcnlMaXN0ID0gJCgnLmdhbGxlcnlfbGlzdCcpO1xuICAgICAgICBmaWx0ZXJGaWVsZC5jbGljayhmdW5jdGlvbihldmVudCkge1xuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIHZhciBmaWx0ZXJRdWVyeSA9ICQodGhpcykuYXR0cignZGF0YS1maWx0ZXInKTtcbiAgICAgICAgICAgIHZhciB0ZXJtcyA9ICQodGhpcykuYXR0cignZGF0YS10ZXJtcycpO1xuICAgICAgICAgICAgdmFyIHJlc3BvbnNlRGF0YSA9IHtcbiAgICAgICAgICAgICAgICAnYWN0aW9uJzogJ215ZmlsdGVyJyxcbiAgICAgICAgICAgICAgICAnZmlsdGVyX25vbWluYXRpb25fcXVlcnknOiBmaWx0ZXJRdWVyeSxcbiAgICAgICAgICAgICAgICAndGVybXMnOiB0ZXJtc1xuICAgICAgICAgICAgfTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlc3BvbnNlRGF0YSk7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHVybDogd2luZG93LndwX2RhdGEuYWpheF91cmwsXG4gICAgICAgICAgICAgICAgZGF0YTogcmVzcG9uc2VEYXRhLFxuICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICBiZWZvcmVTZW5kOiBmdW5jdGlvbiAoeGhyKSB7XG4gICAgICAgICAgICAgICAgICAgIGdhbGxlcnlMaXN0LmZpbmQoJy5zb3J0X3ByZWxvYWRlcicpLnNob3coKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChkYXRhKSB7XG4gICAgICAgICAgICAgICAgICAgIGdhbGxlcnlMaXN0LmZpbmQoJy5zb3J0X3ByZWxvYWRlcicpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAgICAgZ2FsbGVyeUxpc3QuaHRtbChkYXRhKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KVxuXG4gICAgICAgIH0pO1xuXG4gICAgfSlcblxuXG59KShqUXVlcnkpO1xuIiwiLyoqXG4gKiBDcmVhdGVkIGJ5IG1hc3RlciBvbiAyNC4wMy4yMDE3LlxuICovXG4oZnVuY3Rpb24oICQgKSB7XG5cblxuICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuXG4gICAgICB2YXIgJGhlbHBlciA9ICQoJy5oZWxwZXInKTtcbiAgICAgIHZhciAkY2xvc2VUb2dnbGUgPSAkaGVscGVyLmZpbmQoJy5oZWxwZXJfY2xvc2UnKTtcbiAgICAgIHZhciAkaGVscGVyVG9nZ2xlID0gJCgnI2hlbHBlclRvZ2dsZScpO1xuXG4gICAgICAkaGVscGVyVG9nZ2xlLm9uKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAkaGVscGVyLnNsaWRlVG9nZ2xlKCdmYXN0Jyk7XG4gICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgfSk7XG5cbiAgICAgICAgJGNsb3NlVG9nZ2xlLm9uKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAgICRoZWxwZXIuc2xpZGVUb2dnbGUoJ2Zhc3QnKTtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIH0pO1xuXG5cbiAgICB9KTtcblxuXG59KShqUXVlcnkpO1xuIiwiLyoqXG4gKiBDcmVhdGVkIGJ5IG1hc3RlciBvbiAwNy4wNC4yMDE3LlxuICovXG5cbihmdW5jdGlvbiggJCApIHtcbiAgICBcbiAgICBcbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAgICBpbml0U2Nyb2xsTGluaygpO1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gaW5pdFNjcm9sbExpbmsoKSB7XG4gICAgICAgICAgICB2YXIgJHNjcm9sbExpbmsgPSAkKCcuc2Nyb2xsX2xpbmsnKTtcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgJHNjcm9sbExpbmsub24oJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpIHtcbiAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgbWFrZVNjcm9sbExpbmsoJHNjcm9sbExpbmspO1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICAgICAgLyoqXG4gICAgICAgICAqIEBwYXJhbSB7alF1ZXJ5fSAkbGlua1xuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gbWFrZVNjcm9sbExpbmsoJGxpbmspIHtcbiAgICAgICAgICAgIHZhciBocmVmID0gJGxpbmsuYXR0cignaHJlZicpO1xuICAgICAgICAgICAgdmFyICRlbFRhcmdldCA9ICQoaHJlZik7XG4gICAgICAgICAgICB2YXIgc2Nyb2xsID0gZ2V0U2Nyb2xsKCRlbFRhcmdldCk7XG4gICAgICAgICAgICB2YXIgJGJvZHkgPSAkKCdib2R5Jyk7XG4gICAgICAgICAgICAkYm9keS5hbmltYXRlKHtzY3JvbGxUb3A6IHNjcm9sbH0sIDgwMCk7XG4gICAgICAgICAgICAkKCcjbWFpbk5hdicpLnNsaWRlVG9nZ2xlKCk7XG5cbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBcbiAgICAgICAgICogQHBhcmFtIHtqUXVlcnl9ICRlbFxuICAgICAgICAgKiBAcmV0dXJucyB7SW50ZWdlcn1cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIGdldFNjcm9sbCgkZWwpIHtcbiAgICAgICAgICAgIFxuICAgICAgICB2YXIgJHNjcm9sbCA9ICRlbC5vZmZzZXQoKS50b3AgLSAzMjU7XG4gICAgICAgIFxuICAgICAgICAgICAgY29uc29sZS5sb2coJHNjcm9sbCk7XG4gICAgICAgICAgICByZXR1cm4gJHNjcm9sbDtcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgXG4gICAgICAgIH1cbiAgICAgICAgXG4gICAgICAgIFxuICAgICAgICBcbiAgICB9KTtcbiAgICBcbiAgICBcbiAgICBcbn0pKGpRdWVyeSk7XG4iLCIvKipcbiAqIENyZWF0ZWQgYnkgbWFzdGVyIG9uIDI4LjAzLjIwMTcuXG4gKi9cbihmdW5jdGlvbiggJCApIHtcblxuICAgIHZhciBhamF4R28gPSBmYWxzZTtcblxuICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuXG4gICAgICAgIHZhciB1c2VyRm9ybSA9ICQoJy51c2VyZm9ybScpO1xuXG4gICAgICAgIGZ1bmN0aW9uIHJlcUdvKGRhdGEsIGZvcm0sIG9wdGlvbnMpIHtcbiAgICAgICAgICAgIGlmIChhamF4R28pIHtcbiAgICAgICAgICAgICAgICBmb3JtLmZpbmQoJ3Jlc3BvbnNlJykuaHRtbCgnPHA+0J3QtdC+0LHRhdC+0LTQuNC80L4g0LTQvtC20LTQsNGC0YzRgdGPINC+0YLQstC10YLQsCDQv9GA0LXQtNGL0LTRg9GJ0LXQs9C+INC30LDQv9GA0L7RgdCwPC9wPicpO1xuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGZvcm0uZmluZCgnaW5wdXRbdHlwZT1cInN1Ym1pdFwiXScpLmF0dHIoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJykudmFsKCfQn9C+0LTQvtC20LTQuNGC0LUnKTtcbiAgICAgICAgICAgIGZvcm0uZmluZCgnLnJlc3BvbnNlJykuaHRtbCgnJyk7XG4gICAgICAgICAgICBhamF4R28gPSB0cnVlO1xuICAgICAgICB9XG4gICAgICAgIGZ1bmN0aW9uIHJlcUNvbWUoZGF0YSwgc3RhdHVzVGV4dCwgeGhyLCBmb3JtKSB7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhhcmd1bWVudHMpO1xuICAgICAgICAgICAgaWYgKGRhdGEuc3VjY2Vzcykge1xuXG4gICAgICAgICAgICAgICAgdmFyIG5leHRTdGVwTW9kYWwgPSAkKCcjc3RlcFN1Y2Nlc3MnKTtcbiAgICAgICAgICAgICAgICBuZXh0U3RlcE1vZGFsID0gJChuZXh0U3RlcE1vZGFsLnZhbCgpKTtcblxuXG4gICAgICAgICAgICAgICAgaWYgKG5leHRTdGVwTW9kYWwgIT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAkKCcjcmVnaXN0cmF0aW9uTW9kYWwnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICBuZXh0U3RlcE1vZGFsLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgdmFyIHJlc3BvbnNlID0gYnVpbGRNZXNzYWdlKGRhdGEuZGF0YS5tZXNzYWdlLCAnc3VjY2VzcycpO1xuICAgICAgICAgICAgICAgICAgICBmb3JtLmZpbmQoJ2lucHV0W3R5cGU9XCJzdWJtaXRcIl0nKS5wcm9wKCdkaXNhYmxlZCcsIGZhbHNlKS52YWwoJ9CT0L7RgtC+0LLQvicpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdmFyIHJlc3BvbnNlID0gYnVpbGRNZXNzYWdlKGRhdGEuZGF0YS5tZXNzYWdlLCAnZXJyb3InKTtcbiAgICAgICAgICAgICAgICBmb3JtLmZpbmQoJ2lucHV0W3R5cGU9XCJzdWJtaXRcIl0nKS5wcm9wKCdkaXNhYmxlZCcsIGZhbHNlKS52YWwoJ9Ce0YLQv9GA0LDQstC40YLRjCcpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZm9ybS5maW5kKCcucmVzcG9uc2UnKS5odG1sKHJlc3BvbnNlKTtcbiAgICAgICAgICAgIGlmIChkYXRhLmRhdGEucmVkaXJlY3QpIHtcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGRhdGEuZGF0YS5yZWRpcmVjdDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGFqYXhHbyA9IGZhbHNlO1xuICAgICAgICB9XG5cbiAgICAgICAgdmFyIGFyZ3MgPSB7XG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgYmVmb3JlU3VibWl0OiByZXFHbyxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IHJlcUNvbWUsXG4gICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGFyZ3VtZW50cyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgdXJsOiBhamF4X3Zhci51cmxcbiAgICAgICAgfTtcbiAgICAgICAgdXNlckZvcm0uYWpheEZvcm0oYXJncyk7XG5cbiAgICAgICAgJCgnLmxvZ291dCcpLmNsaWNrKGZ1bmN0aW9uKGV2ZW50KSB7XG5cbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICBpZiAoYWpheEdvKSByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB2YXIgbGluayA9ICQodGhpcyk7XG4gICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICdhZG1pbi1hamF4LnBocCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICBkYXRhOiAnYWN0aW9uPWxvZ291dF9tZSZub25jZT0nICsgJCh0aGlzKS5kYXRhKCdub25jZScpLFxuICAgICAgICAgICAgICAgIGJlZm9yZVNlbmQ6IGZ1bmN0aW9uKGRhdGEpIHtcbiAgICAgICAgICAgICAgICAgICAgbGluay50ZXh0KCfQn9C+0LTQvtC20LTQuNGC0LUnKTtcbiAgICAgICAgICAgICAgICAgICAgYWpheEdvID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKGRhdGEpIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGRhdGEuc3VjY2Vzcykge1xuICAgICAgICAgICAgICAgICAgICAgICAgbGluay50ZXh0KCfQktGL0YXQvtC00LjQvCcpO1xuICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCh0cnVlKTtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGFsZXJ0KGRhdGEuZGF0YS5tZXNzYWdlKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uKHhociwgYWpheE9wdGlvbnMsIHRocm93bkVycm9yKSB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGFyZ3VtZW50cyk7XG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBjb21wbGV0ZTogZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgICAgICBhamF4R28gPSBmYWxzZTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KVxuXG4gICAgICAgIH0pO1xuXG5cblxuICAgIH0pO1xuXG5cbiAgICBmdW5jdGlvbiBidWlsZE1lc3NhZ2UobWVzc2FnZSwgdHlwZSkge1xuICAgICAgICBpZiAodHlwZSA9PSAnZXJyb3InKSB7XG5cbiAgICAgICAgICByZXR1cm4gJzxkaXYgY2xhc3M9XCJhbGVydCBhbGVydC1lcnJvclwiPjxwIGNsYXNzPVwiYmxhY2tcIj4nICsgbWVzc2FnZSArICc8L3A+PC9kaXY+JztcblxuICAgICAgICB9XG4gICAgICAgIHJldHVybiAnPGRpdiBjbGFzcz1cImFsZXJ0IGFsZXJ0LXN1Y2Nlc3NcIj48cCBjbGFzcz1cImJsYWNrXCI+JyArIG1lc3NhZ2UgKyAnPC9wPjwvZGl2Pic7XG4gICAgfVxuXG5cbn0pKGpRdWVyeSk7XG4iLCIvKipcbiAqIENyZWF0ZWQgYnkgbWFzdGVyIG9uIDI5LjAzLjIwMTcuXG4gKi9cbihmdW5jdGlvbiggJCApIHtcbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAgICAgICB2YXIgTW9kYWxzID0ge1xuICAgICAgICAgICAgJ3N1Y2Nlc3NTZW5kUHJvamVjdCc6ICQoJyNzdWNjZXNzU2VuZFByb2plY3QnKVxuICAgICAgICB9O1xuXG5cbiAgICAgICB2YXIgJGNyZWF0ZVByb2plY3RGb3JtID0gJCgnLndwdWYtZm9ybS1hZGQnKTtcblxuICAgICAgICAkY3JlYXRlUHJvamVjdEZvcm0uc3VibWl0KGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAgICBNb2RhbHMuc3VjY2Vzc1NlbmRQcm9qZWN0Lm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIH0pO1xuXG5cbiAgICB9KTtcblxuXG5cbn0pKGpRdWVyeSk7XG4iLCIvKipcbiAqIENyZWF0ZWQgYnkgbWFzdGVyIG9uIDI0LjAzLjIwMTcuXG4gKi9cblxuXG4oZnVuY3Rpb24oICQgKSB7XG5cbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAgICAgIGluaXROYXYoJCgnI21haW5OYXYnKSwgJCgnI25hdlRvZ2dsZScpKTtcblxuICAgIH0pO1xuXG4gICAgLyoqXG4gICAgICogQHBhcmFtICRuYXZcbiAgICAgKiBAcGFyYW0gJHRvZ2dsZUJ0blxuICAgICAqL1xuICAgIGZ1bmN0aW9uIGluaXROYXYoJG5hdiwgJHRvZ2dsZUJ0bikge1xuXG4gICAgICAkdG9nZ2xlQnRuLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcblxuICAgICAgICAgJG5hdi5zbGlkZVRvZ2dsZSgpO1xuXG4gICAgICB9KTtcblxuICAgICAgICB2YXIgJGNsb3NlQnRuID0gJG5hdi5maW5kKCcubmF2X2Nsb3NlJyk7XG5cbiAgICAgICAkY2xvc2VCdG4ub24oJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpIHtcblxuICAgICAgICAgICAkbmF2LnNsaWRlVG9nZ2xlKCk7XG4gICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICB9KTtcblxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEBwYXJhbSAkbmF2XG4gICAgICovXG4gICAgZnVuY3Rpb24gc2xpZGVOYXYoJG5hdikge1xuICAgICAgICAkbmF2LnNsaWRlVG9nZ2xlKCk7XG4gICAgfVxuXG59KShqUXVlcnkpO1xuIiwiLyoqXG4gKiBDcmVhdGVkIGJ5IG1hc3RlciBvbiAwNC4wNC4yMDE3LlxuICovXG4oZnVuY3Rpb24oICQgKSB7XG5cblxuICAgICQod2luZG93KS5vbignbG9hZCcsIGZ1bmN0aW9uKCkge1xuICAgICAgICBpbml0UHJlbG9hZGVyKCk7XG4gICAgfSk7XG5cblxuICAgIC8qKlxuICAgICAqIFxuICAgICAqL1xuICAgIGZ1bmN0aW9uIGluaXRQcmVsb2FkZXIoKSB7XG4gICAgICAgIHZhciAkcHJlbG9hZGVyID0gJCgnI3BhZ2VQcmVsb2FkZXInKSxcbiAgICAgICAgICAgICRzcGlubmVyID0gJHByZWxvYWRlci5maW5kKCcuc3Bpbm5lcicpO1xuXG4gICAgICAgICRzcGlubmVyLmZhZGVPdXQoKTtcbiAgICAgICAgJHByZWxvYWRlci5kZWxheSgzNTApLmZhZGVPdXQoJ3Nsb3cnKTtcbiAgICB9XG5cbn0pKGpRdWVyeSk7XG4iLCIoZnVuY3Rpb24oICQgKSB7XG5cbiAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgICAgIHZhciAkYm9keSA9ICQoJ2JvZHknKTtcbiAgICAgICB2YXIgJHRvcExpbmsgPSAkKCcudG9wX2xpbmsnKTtcblxuICAgICAgICR0b3BMaW5rLm9uKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XG5cbiAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgJGJvZHkuYW5pbWF0ZSh7c2Nyb2xsVG9wOiAwfSwgODAwKTtcblxuICAgICAgIH0pO1xuXG5cbiAgICAgICB3aW5kb3cub25zY3JvbGwgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgaW5pdFRvcExpbmsoKTtcbiAgICAgICB9O1xuXG5cbiAgICAgICAvKipcbiAgICAgICAgKiBcbiAgICAgICAgKi9cbiAgICAgICBmdW5jdGlvbiBpbml0VG9wTGluaygpIHtcbiAgICAgICAgICAgaWYgKCRib2R5LnNjcm9sbFRvcCgpID4gNDAwKSB7XG4gICAgICAgICAgICAgICAkdG9wTGluay5zaG93KCdmYXN0Jyk7XG4gICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAkdG9wTGluay5oaWRlKCdmYXN0Jyk7XG4gICAgICAgICAgIH1cbiAgICAgICB9XG5cblxuICAgfSk7XG5cblxuXG59KShqUXVlcnkpOyIsIi8qKlxuICogQ3JlYXRlZCBieSByb290IG9uIDI5LjA1LjE3LlxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cbiAgICAgIHZhciBzb3J0RmllbGQgPSAkKCcuc29ydF9maWVsZCcpO1xuICAgICAgdmFyIGdhbGxlcnlMaXN0ID0gJCgnLmdhbGxlcnlfbGlzdCcpO1xuICAgICAgc29ydEZpZWxkLmNsaWNrKGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICB2YXIgc29ydFR5cGUgPSAkKHRoaXMpLmF0dHIoJ2RhdGEtc29ydCcpO1xuICAgICAgICAgIHZhciB0ZXJtcyA9ICQodGhpcykuYXR0cignZGF0YS10ZXJtcycpO1xuICAgICAgICAgIHZhciByZXNwb25zZURhdGEgPSB7XG4gICAgICAgICAgICAgICdhY3Rpb24nOiAnbXlmaWx0ZXInLFxuICAgICAgICAgICAgICAnc29ydF90eXBlJzogc29ydFR5cGUsXG4gICAgICAgICAgICAgICd0ZXJtcyc6IHRlcm1zXG4gICAgICAgICAgfTtcbiAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICB1cmw6IHdpbmRvdy53cF9kYXRhLmFqYXhfdXJsLFxuICAgICAgICAgICAgICBkYXRhOiByZXNwb25zZURhdGEsXG4gICAgICAgICAgICAgIHR5cGU6ICdQT1NUJyxcbiAgICAgICAgICAgICAgYmVmb3JlU2VuZDogZnVuY3Rpb24gKHhocikge1xuICAgICAgICAgICAgICAgICAgZ2FsbGVyeUxpc3QuZmluZCgnLnNvcnRfcHJlbG9hZGVyJykuc2hvdygpO1xuICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSkge1xuICAgICAgICAgICAgICAgICAgZ2FsbGVyeUxpc3QuZmluZCgnLnNvcnRfcHJlbG9hZGVyJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgICAgZ2FsbGVyeUxpc3QuaHRtbChkYXRhKTtcbiAgICAgICAgICAgICAgfVxuICAgICAgICAgIH0pXG5cbiAgICAgIH0pO1xuXG4gIH0pXG5cblxufSkoalF1ZXJ5KTtcbiIsIi8qKlxuICogQ3JlYXRlZCBieSBtYXN0ZXIgb24gMzAuMDMuMjAxNy5cbiAqL1xuXG4oZnVuY3Rpb24oICQgKSB7XG5cbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAgICAgJCgnW2RhdGEtdG9nZ2xlPVwidG9vbHRpcFwiXScpLnRvb2x0aXAoKTtcbiAgICB9KTtcblxufSkoalF1ZXJ5KTtcbiIsIi8qKlxuICogQ3JlYXRlZCBieSBtYXN0ZXIgb24gMTYuMDUuMjAxNy5cbiAqL1xuKGZ1bmN0aW9uKCAkICkge1xuXG4gICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgdmFyICRmb3JtID0gJCgnI3VwZGF0ZVVzZXJJbmZvJyk7XG5cbiAgICAgICAgJGZvcm0uc3VibWl0KGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgICAgICB2YXIgdXNlcklkID0gJCgnI3VzZXJJZCcpLnZhbCgpO1xuICAgICAgICAgICAgdmFyIHVzZXJVcmwgPSAkKCcjdXNlclVybCcpLnZhbCgpO1xuICAgICAgICAgICAgdmFyIHVzZXJOYW1lID0gJCgnI3VzZXJOYW1lJykudmFsKCk7XG4gICAgICAgICAgICB2YXIgZm9ybUFjdGlvbiA9ICQoJyNmb3JtQWN0aW9uJykudmFsKCk7XG4gICAgICAgICAgICB2YXIgY3VycmVudExhbmcgPSAkKCcjY3VycmVudExhbmcnKS52YWwoKTtcblxuICAgICAgICAgICAgdmFyIGZvcm1EYXRhID0ge1xuICAgICAgICAgICAgICAgIGFjdGlvbjogZm9ybUFjdGlvbixcbiAgICAgICAgICAgICAgICB1c2VyX2lkOiB1c2VySWQsXG4gICAgICAgICAgICAgICAgdXNlcl91cmw6IHVzZXJVcmwsXG4gICAgICAgICAgICAgICAgdXNlcl9uYW1lOiB1c2VyTmFtZSxcbiAgICAgICAgICAgICAgICBjdXJyZW50X2xhbmc6IGN1cnJlbnRMYW5nXG4gICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICAkLnBvc3QoYWpheF92YXIsIGZvcm1EYXRhLCBmdW5jdGlvbihyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHZhciAkdXNlck1lc3NhZ2UgPSAkKCcjdXNlck1lc3NhZ2VzJyk7XG5cbiAgICAgICAgICAgICAgICAkdXNlck1lc3NhZ2UudGV4dChyZXNwb25zZSk7XG4gICAgICAgICAgICAgICAgJHVzZXJNZXNzYWdlLnNsaWRlVG9nZ2xlKCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSlcblxuXG5cblxuXG5cblxuXG4gICAgfSk7XG5cblxuXG5cblxuXG5cbn0pKGpRdWVyeSk7Il19
