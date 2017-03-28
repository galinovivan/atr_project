<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 28.03.2017
 * Time: 17:26
 */


$nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';

if (!wp_verify_nonce($nonce, 'logout_me_nonce')) wp_send_json_error(array('message' => 'ошибка'));
if (!is_user_logged_in()) wp_send_json_error(array('message' => 'Вы не авторизованы', 'redirect' => false));

wp_logout();

wp_send_json_success(array(
    'messages' => 'Вы вышли',
    'redirect' => false
));