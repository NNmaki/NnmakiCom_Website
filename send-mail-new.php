<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$recaptchaSecret = "SUPER_SECRET";

if (isset($_POST["send"])) {

    $recaptchaResponse = $_POST["g-recaptcha-response"];
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse";
    
    $response = file_get_contents($verifyUrl);
    $responseData = json_decode($response);

    if (!$responseData->success) {
        die("<script>alert('reCAPTCHA verification failed. Please try again.'); history.go(-1);</script>");
    }

    $mail = new PHPMailer(true);

    try {
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->isSMTP();       
        $mail->SMTPDebug = 0;
        $mail->Host       = 'smtp.hostinger.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'LOGIN_USERNAME';
        $mail->Password   = 'LOGIN_PASSWORD';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;                                    

        $mail->setFrom('somebody@somewhere.com','Yhteydenotto web-lomakkeella');
        $mail->addAddress('somebody@somewhere.com'); 
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        $mail->isHTML(true);   
        $mail->Subject = $_POST["subject"];

        $message = "
                    <h3>Viesti nnmaki:com verkkolomakkeelta</h3>
                    <p><strong>Lähettäjän nimi:</strong> " . htmlspecialchars($_POST["name"]) . "</p>
                    <p><strong>Sähköposti:</strong> " . htmlspecialchars($_POST["email"]) . "</p>
                    <p><strong>Viesti:</strong><br>" . nl2br(htmlspecialchars($_POST["message"])) . "</p>
                    ";
        $mail->Body = $message;
        
        $mail->send();
        echo
            " 
            <script> 
            alert('Message was sent successfully!');
            document.location.href = 'profile.html';
            </script>
            ";
    } catch (Exception $e) {
        echo "<script> 
            alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        </script>";
    }
}
