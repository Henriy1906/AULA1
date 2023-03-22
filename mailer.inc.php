<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Password = 'qssrzavxkfvbxxfy';
$mail->SMTOSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;