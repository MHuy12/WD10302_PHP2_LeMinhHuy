<?php

namespace src\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailModel
{
    public function sendConfirmationCode($email, $code)
    {
        $mail = new PHPMailer(true);
        try {
            $_SESSION['confirmation_code'] = $code;
            $_SESSION['email'] = $email;
            // Server settings
            $mail->SMTPDebug = 0;  // Set to 0 to suppress debug output
            $mail->isSMTP();
            $mail->Charset = 'utf-8';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leminhhuy1604@gmail.com';
            $mail->Password = 'fxyu dnmr csxk yjsp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('leminhhuy1604@gmail.com', 'Huy');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Confirmation Code';
            $mail->Body = 'Code cua ban la: ' . $code;

            // Send the email
            $mail->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            return false; // Failed to send email
        }
    }
}



