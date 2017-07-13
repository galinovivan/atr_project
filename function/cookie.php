<?php
function setCookieForUniqeUser() {
   return SetCookie('is_new_user', true, time() + 604800);
}