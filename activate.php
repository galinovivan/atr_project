<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 29.03.2017
 * Time: 12:31
 * Template name: Activate
 */
?>
<?php  get_header('custom'); ?>
<?php
if (is_user_logged_in()): ?>
<h3>Вы уже активированы</h3>
<?php
else:
    $userId = isset($_GET['user']) ? (int) $_GET['user'] : '';
    $key = isset($_GET['key']) ? $_GET['key'] : '';

    if (!$userId || !$key) {
        echo '<p>Не переданы параметры для </p>';
    } else {
        $code = get_user_meta($userId, 'has_be_to_activated', true);
        if ($code == $key) {
            delete_user_meta($userId, 'has_be_to_activated');
            echo '<p>Активация прошла успешно</p>';
        } else {
            echo '<p>Данные активации не верны или вы уже активированы</p>';
        }
    }

endif;
?>

<?php get_footer(); ?>




