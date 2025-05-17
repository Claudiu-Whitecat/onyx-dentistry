<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$smtpHost = $_ENV['MAIL_HOST'];
$smtpPort = $_ENV['MAIL_PORT'];
$smtpUsername = $_ENV['MAIL_USERNAME'];
$smtpPassword = $_ENV['MAIL_PASSWORD'];
$smtpEncryption = $_ENV['MAIL_ENCRYPTION'];

if(array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require './vendor/autoload.php';

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);


    $mail = new PHPMailer(true);
    // configure an SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = $smtpEncryption ;
    $mail->SMTPAutoTLS = false;
    $mail->Port = $smtpPort ;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;

    $mail->setFrom('info@onyx-dentistry.ro', 'Onyx Dentistry');
//    $mail->addAddress('contact@onyx-dentistry.ro');
    $mail->addAddress('claudiucerna@gmail.com');
    $phoneLenght = strlen($phone);

    if ($email  != "" and $name!= "" and $phone != "" and $message != "" and $phoneLenght == 10) {
        $mail->Subject = 'Onyx Dentistry Contact';
        $mail->CharSet = 'UTF-8';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Nume: {$name}
            Email: {$email}
            Telefon: {$phone}
            Mesaj: {$message}
            Vreau să fiu contactat prin: {$_POST['contact-answer']}
        EOT;


        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but it's unsafe to display errors directly to users - process the error, log it on your server.
            echo 'Sorry, something went wrong. Please try again later.';

        } else {
            echo 1;
//            echo 'Mesajul a fost trimis! Îți mulțumim';
        }
    } else {
        echo 0;
//        echo  'Mesajul nu a fost trimis! Completează cu atenție câmpurile marcate.';
    }
}

