;
(function($) {

    $(document).ready(function() {
        var uniqeCookieIdenfer = Cookie.getCookie('visited');
        var subscribleModal = $('#subscribleModal');
        if (!uniqeCookieIdenfer) {
            Cookie.setCookie('visited', 'true', {expires: 604800});
         //  subscribleModal.modal('show');
        }
        console.log(document.cookie);
    });
    /**
     * @type {{setCookie: Cookie.setCookie, getCookie: Cookie.getCookie, deleteCookie: Cookie.deleteCookie}}
     */
    Cookie = {
        /**
         * @param name
         * @param value
         * @param options
         */
        setCookie: function(name, value, options) {
            options = options || {};
            var expires = options.expires;
            if (typeof expires == 'number' && expires) {
                var date = new Date();
                date.setDate(date.getTime() + expires * 1000);
                expires = options.expires = date;
            }
            if (expires && expires.toUTCString()) {
                options.expires = expires.toUTCString();
            }
            value = encodeURIComponent(value);
            var updatedCookie = name + '=' + value;

            for (var propName in options) {
                updatedCookie += '; ' + propName;
                var propValue = options[propName];
                if (propValue !== true) {
                    updatedCookie += '=' + propValue;
                }
            }

            document.cookie = updatedCookie;
        },
        /**
         * @param name
         * @returns {*}
         */
        getCookie: function(name) {
            var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));

            return matches ? decodeURIComponent(matches[1]) : undefined;
        },
        /**
         * @param name
         */
        deleteCookie: function(name) {
            this.setCookie(name, '', {
                expires: -1
            })
        }
    }
})(jQuery);