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

    echo "Данные успешно сохранены.";
    wp_die();
}

add_action('wp_ajax_update_user', 'update_user');