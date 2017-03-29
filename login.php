<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 28.03.2017
 * Time: 16:33
 */


$nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';
if (!wp_verify_nonce($nonce, 'login_me_nonce')) {
    wp_send_json_error(array('message' => 'Данные присланные со сторонней страницы', 'redirect' => false));
}
if (is_user_logged_in()) {
    wp_send_error(array(
        'message' => 'Вы уже авторизованы',
        'redirect' => false
    ));
}
$log = isset($_POST['auth_email']) ? $_POST['auth_email'] : false;
$pwd = isset($_POST['auth_pass']) ? $_POST['auth_pass'] : false;
$redirectTo = isset($_POST['redirect_to']) ? $_POST['redirect_to'] : false;
$rememberMe = isset($_POST['rememberme']) ? $_POST['rememberme'] : false;

if (!$log) wp_send_json_error(array('message' => 'Поле Email не заполнено', 'redirect' => false));
if (!$pwd) wp_send_json_error(array('message' => 'Поле пароль не заполнено', 'redirect' => false));

$user = get_user_by('login', $log);

if (!$user) $user = get_user_by('email', $log);

if (!$user) {
    wp_send_json_error(array('message' => 'Неправильный логин или пароль', 'redirect' => false));
}
if (get_user_meta($user->ID, 'has_to_be_activated', true) != false) {
    wp_send_json_error(array('messages' => 'Учетная запись не активирована', 'redirect' => false));
}

//$log = $user->user_login();


$creds = array(
    'user_login' => $log,
    'user_password' => $pwd,
    'remember' => $rememberMe
);


$user = wp_signon($creds, false);



if (is_wp_error($user)) {
    wp_send_json_error(array(
        'message' => $user->get_error_message(),
        'redirect' => false
    ));
} else {

    wp_send_json_success(array(
        'message' => 'Вы успешно вошли как' . $user->display_name,
        'redirect' => $redirectTo));
}
