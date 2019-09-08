<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
	//Server settings
	$mail->SMTPDebug = 0; // Enable debug errores
	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'YOUR_EMAIL_SMTP'; // SMTP username
	$mail->Password = 'YOUR_PASSWORD_SMTP'; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to

	//Recipients
	$mail->setFrom('FROM_EMAIL', 'FROM_NAME'); //who sends email
	$mail->addAddress('EMAIL_NEW_ADDRESS', 'EMAIL_NAME'); // who receives email
	// $mail->addReplyTo('info@example.com', 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

	//Attachments
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	//Content
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = 'Probando PHP Mailer Version 2';
	$mail->Body = '<h1>Auxilio me desmayo callese viejo lesbiano</h1>';
	$mail->AltBody = 'Auxilio me desmayo jajaja';

	$mail->send();
	echo 'El Correo se envio correctamente';
} catch (Exception $e) {
	echo 'Correo no pudo ser enviado, debido a este error: ', $mail->ErrorInfo;
}