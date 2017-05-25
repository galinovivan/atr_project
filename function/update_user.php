<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 16.05.2017
 * Time: 14:48
 */

function update_user() {
    if (isset($_POST['user_id']) && isset($_POST['user_url'])) {
        $id = $_POST['user_id'];
        $url = $_POST['user_url'];
        updateUserUrl($id, $url);
    }

    if (isset($_POST['user_id']) && isset($_POST['user_name'])) {
        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        updateUserInfo($id, 'last_name', $name);
    }
    $lang = $_POST['current_lang'];

    if ($lang == 'ru') {
        echo 'Данные успешно сохранены';
    } elseif ($lang == 'en') {
      echo 'data saved successfully';
    } else {
        echo 'data saved successfully';
    }
    wp_die();
}

add_action('wp_ajax_update_user', 'update_user');