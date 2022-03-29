<?php
require_once  '../vendor/phpmailer/src/Exception.php';
require_once  '../vendor/phpmailer/src/PHPMailer.php';
require_once  '../vendor/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$mail->SMTPDebug = false;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->CharSet = "utf8";
$mail->Username = 'dev@grumft.com';
$mail->Password = 'GfT@21$P3k4!2#g';
