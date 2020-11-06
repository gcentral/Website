<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
// Alias the League Google OAuth2 provider class
use League\OAuth2\Client\Provider\Google;

class Mailer {
    public function createMail() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->AuthType = 'XOAUTH2';

        $provider = new Google(
            [
                'clientId' => $_ENV['MAIL_CLIENTID'],
                'clientSecret' => $_ENV['MAIL_CLIENTSECRET'],
            ]
        );
        
        $mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => $_ENV['MAIL_CLIENTID'],
                    'clientSecret' => $_ENV['MAIL_CLIENTSECRET'],
                    'refreshToken' => $_ENV['MAIL_REFRESHTOKEN'],
                    'userName' => $_ENV['MAIL_EMAIL'],
                ]
            )
        );

        return $mail;
    }
}