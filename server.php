<?php
require_once __DIR__ . '/helpers/functions.php';

// var_dump($_GET);
// var_dump(isset($_GET['email']));


$email = $_GET['email'];

if (isset($email)) {

    // $message = checkEmail($email);
    $response = checkEmail($email);

    $message = generateAlerttMessage($response);
    // var_dump($message);

    session_start();
    $_SESSION['message'] = $message;
    header('Location: /php/php-iscrizione-newsletter/php-iscrizione-newsletter/');
}
