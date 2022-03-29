<?php
require_once 'email-config.php';

try {

    $mail->setFrom('henrique.moura@grumft.com', 'Contato Website');
    $mail->addAddress('henrique.moura@grumft.com', 'Contato LEX Website');
    //$mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

    $mail->IsHTML(true);
    $mail->Subject = "Contato LEX Website";

    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;font-size:17px;">Contato LEX Assessoria</h1>';
    $message .= '<p style="color:black;font-size:15px;"><b>Nome: </b> ' . $obj->name . '</p>';
    $message .= '<p style="color:black;font-size:15px;"><b>E-mail: </b> ' . $obj->email . '</p>';
    $message .= '<p style="color:black;font-size:15px;"><b>Mensagem.: </b> ' . $obj->message . '</p>';
    $message .= '</body></html>';

    $mail->Body = $message;
    $mail->send();
} catch (Exception $e) {
    echo 0;
}
