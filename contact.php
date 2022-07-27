<?php
// Email Setting
//=======================================
define("PHPMAILER", true);
require 'phpmailer/PHPMailerAutoload.php';
include('phpmailer/config.inc.php');

if (isset($_POST['contact_email'])) {
	// $mail->Subject = 'New Contact Information';
	// $mail->Body    = "Name: $user_name <br/>";
	// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$contact_name 	= strip_tags($_POST['contact_name']);
	$contact_email 	= strip_tags($_POST['contact_email']);
	$contact_phone 	= strip_tags($_POST['contact_phone']);
	$contact_text 	= strip_tags($_POST['contact_text']);

	$mail->Subject = 'New Contact Information';
	$mail->Body    = "Name: $contact_name <br/>Email: $contact_email <br/>Phone: $contact_phone <br/>Comment: $contact_text <br/>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if (!$mail->send()) {
		echo '5';
		exit;
	} else {
		echo '1';
	}
}
