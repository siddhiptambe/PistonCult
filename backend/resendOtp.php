<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once '../otp/mail_vendor/autoload.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email =  $_SESSION['ema'];
    $otp = rand(1000,9999);
    $_SESSION['otp'] = $otp;

    function otpmail($em, $ot) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cultpiston@gmail.com';
        $mail->Password = 'xfzi ctkl jbth amqo';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('cultpiston@gmail.com', 'Piston Cult');
        $mail->addAddress($em,'Me');
        $mail->Subject = 'Resend OTP';
        $mail->isHTML(TRUE);
        $mail->Body = '<html>Your OTP is ' . $ot . '</html>';
        $mail->AltBody = 'Your OTP is ' . $ot;

        if (!$mail->send()) {
            echo '<script>alert("Failed to resend OTP. Error: ' . $mail->ErrorInfo . '");</script>';
        } else {
            echo '<script>alert("OTP has been resent to ' . $em . '"); window.history.back();</script>';
        }
    }

    otpmail($email, $otp);
}
?>
