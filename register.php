<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 29.03.2017
 * Time: 11:29
 */

$nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';
if (!wp_verify_nonce($nonce, 'register_me_nonce')) {
   sendJSONErrorRequest('Данные присланы со сторонней страницы', false );
}
if (is_user_logged_in()) {
    sendJSONErrorRequest('Вы уже авторазованы', false);
}
//
//if (!can_option('users_can_register')) {
//    sendJSONErrorRequest('Регистрация временно недоступна', false);
//}

$userName = isset($_POST['user_name']) ? $_POST['user_name'] : '';
$userEmail = isset($_POST['user_email']) ? $_POST['user_email'] : '';
$userConfirm = isset($_POST['confirm']) ? $_POST['confirm'] : false;
$redirectTo = isset($_POST['redirect_to']) ? $_POST['redirect_to'] : false;
if (!$userName || !$userEmail) {
    sendJSONErrorRequest('Пожалуйста заполните все необходимые поля', false);
}

if (!$userConfirm) {
    sendJSONErrorRequest('Необходимо согласие на обработку персональтных данных', false);
}

$user_pass = wp_generate_password( $length=12, $include_standard_special_chars=false );
$user_id = wp_create_user($userEmail, $user_pass, $userName);


if (is_wp_error($user_id) && $user_id->get_error_code() == 'existing__user_email') {
    sendJSONErrorRequest('Пользователь с таким Email уже существует', false);
} elseif (is_wp_error($user_id)) {
    sendJSONErrorRequest($user_id->get_error_code(), false);
}


update_user_meta($user_id, 'first_name', $userName);
$userData = get_userdata($user_id);

//$user_pass = $userData->get('user_pass');

$code = sha1($user_id . time());
$activationLink = home_url() . '/activate/?key=' . $code . '&user=' . $user_id;
add_user_meta($user_id, 'has_be_to_activated', $code, true);
$txt = '<h3>Для активации вашего аккаунта на сайте' . home_url() .
    'перейдите по ссылке: <a href="' . $activationLink . '" 
    target="_blank">'. $activationLink . '</a><br /> <p>Ваш пароль ' . $user_pass . '</p>';

add_filter('wp_mail_content_type', 'set_html_content_type');
wp_mail($userEmail,'Активация пользователя.', $txt);
remove_filter('wp_mail_content_type', 'set_html_content_type');


sendJSONSuccessRequest('Регистрация успешно завершена', false);



function sendJSONErrorRequest($message, $redirect) {
    wp_send_json_error(array(
        'message' => $message,
        'redirect' => $redirect
    ));
}

function sendJSONSuccessRequest($message, $redirect) {
    wp_send_json_success(array(
        'message' => $message,
        'redirect' => $redirect
    ));
}