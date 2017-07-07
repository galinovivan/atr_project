;
(function($) {
    $(document).ready(function() {
        var subscribleHelper = $('#subscribleHelper');
        if (document.cookie) {
            var uniqeCookieIdenfer = Cookie.getCookie('user_is_visited');
            if (!uniqeCookieIdenfer) {
                Cookie.setCookie('user_is_visited', 'true', {expires: 604800});
                 subscribleHelper.show();
            }
        } else {
            subscribleHelper.show();
        }
        // для отладки
       // subscribleHelper.show();
        var closeToggle = $('#subscribleCloseButton');
        closeToggle.click(function(event) {
            event.preventDefault();
            subscribleHelper.slideToggle('fast');
        });
    });
    /**
     * @type {{setCookie: Cookie.setCookie, getCookie: Cookie.getCookie, deleteCookie: Cookie.deleteCookie}}
     */
   var Cookie = {
        /**
         * @param name
         * @param value
         * @param options
         */
        setCookie: function(name, value, options) {
            options = options || {};

            var expires = options.expires;

            if (typeof expires == "number" && expires) {
                var d = new Date();
                d.setTime(d.getTime() + expires * 1000);
                expires = options.expires = d;
            }
            if (expires && expires.toUTCString) {
                options.expires = expires.toUTCString();
            }

            value = encodeURIComponent(value);

            var updatedCookie = name + "=" + value;

            for (var propName in options) {
                updatedCookie += "; " + propName;
                var propValue = options[propName];
                if (propValue !== true) {
                    updatedCookie += "=" + propValue;
                }
            }
            console.log(options.expires);
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
    };

})(jQuery);