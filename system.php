<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.06.17
 * Time: 13:46
 * Template name: System
 */
$result = mail('ivan.galinov28@gmail.com', 'subject', 'message');
if ($result) {
    echo 'ok';
} else {
    'error';
}
?>
