<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 07.04.2017
 * Time: 14:40
 */

/**
 *
 */
function sendMessageContactForm() {

    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $messages = $_POST['message'];

if (isset($name) && isset($email) && isset($messages)) {
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);


    $mailTo = get_option('tz_email');

    if (!isset($mailTo) || ($mailTo == '')) {
        $mailTo = get_option('admin_email');
    }

    $subject = "Письмо от пользователя" . $name;
    $body = "Имя" . $name . "Email:" . $email . "Содежание:" . $messages;
    $headers = 'From' . $name . ' <' . $email . '>' . "\r\n" . 'Reply-To' . $email;

    mail($mailTo, $subject, $body, $headers);

}
}



add_action( 'wp_ajax_contact_form',        'sendMessagesContactForm' ); // For logged in users
add_action( 'wp_ajax_nopriv_contact_form', 'sendMessagesContactForm' ); // For anonymous users