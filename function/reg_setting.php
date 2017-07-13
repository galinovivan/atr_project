<?php
if (!function_exists('wp_new_user_notification')) {

    function wp_new_user_notification($user_id, $plantext_pass = '') {

        $user = new WP_User($user_id);

        $user_login = stripslashes($user->user_login);
        $user_email = stripslashes($user->user_email);

        $message = "Регистрация нового пользователя" . $user_login . "email:" . $user_email;
        $subject = 'Новый пользователь';

        wp_mail(get_option('admin_email'), $subject, $message);

        if (empty($plantext_pass)) {
            return;
        }

        $userMessage = 'Добрый день' . $user_login . '! <br /> Теперь вы можете войти, используя эти данные' .
            ': логин:' . $user_login . '<br />' .
            'пароль' . $plantext_pass;
      $userSubject = 'Регистрация';


      wp_mail($user_email, $userSubject, $message);

    }


}