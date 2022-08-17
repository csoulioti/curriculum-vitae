<?php
defined('PHPMAILER') || die('Direct access to this file is not permitted.');
if (!class_exists('PHPMailer')) {
    require 'class.phpmailer.php';
    require 'class.smtp.php';
}
$mail = new PHPMailer; //$mail-> SMTPDebug = 3; // Enable verbose debug output
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'csoulioti.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'christina@csoulioti.com'; // SMTP username
$mail->Password = '98^F80wuy'; // SMTP password 
//$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587; // TCP port to connect to 
$mail->CharSet = 'utf-8';
$mail->setFrom('christina@csoulioti.com', 'Mailer');
$mail->addAddress('christina@csoulioti.com', 'recipients name'); // Add a recipient 
//$mail->addAddress('another_recipient@example.com'); // Name is optional 
//$mail->addReplyTo('info@example.com', 'Information'); 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
//$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments 
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name 
$mail->isHTML(true); // Set email format to HTML