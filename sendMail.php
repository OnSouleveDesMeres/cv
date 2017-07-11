<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/17
 * Time: 22:34
 */


require_once 'PHPMailer/PHPMailerAutoload.php';

emailActivation( $_GET['mail'], $_GET['subject'], $_GET['content']);

function emailActivation($mailFrom, $subject, $content){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'compte.asfeld@gmail.com';
    $mail->Password = '6edb53506f062ec8b774f30fcd6dea3fd376a713';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('compte.asfeld@gmail.com', 'Compte');
    $mail->addAddress('sylvaincombraque@hotmail.fr');
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "{$subject}";
    $mail->Body    = "Email de {$mailFrom}<br>
                        <br>
                        {$content}";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
}