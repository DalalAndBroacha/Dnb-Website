<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

date_default_timezone_set('Etc/UTC');

$from=$_POST['email'];
$first_name=$_POST['fname'];
$feedback=$_POST['message'];
$contact=$_POST['contact'];

$message="<table style='border:1px solid #ED3630;'>
			<tr>
				<td style='padding:10px;font-weight:bold;text-transform: uppercase;'>First Name</td>
				<td style='padding:10px;'>$first_name</td>
			</tr>
			<tr>
				<td style='padding:10px;font-weight:bold;text-transform: uppercase;'>Email ID</td>
				<td style='padding:10px;'>$from</td>
			</tr>
			<tr>
				<td style='padding:10px;font-weight:bold;text-transform: uppercase;'>Contact</td>
				<td style='padding:10px;'>$contact</td>
			</tr>
			<tr>
				<td style='padding:10px;font-weight:bold;text-transform: uppercase;'>Message</td>
				<td style='padding:10px;'>$feedback</td>
			</tr>
		</table>";

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'dalal-broacha.com';         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'feedback@dalal-broacha.com';       // SMTP username
$mail->Password = 'dalalbroachafeedback';             // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($from, $first_name);
//$mail->setFrom('feedback@dalal-broacha.com', 'Dalal & Broacha Website');
$mail->addAddress('nilay.dalal@dalal-broacha.com', 'Nilay Dalal');  // Add a recipient
$mail->addAddress('hriday.dalal@dalal-broacha.com', 'Hriday Dalal');  // Add a recipient
$mail->addAddress('info@dalal-broacha.com', 'Info');  // Add a recipient
$mail->addReplyTo = $from;

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Website Form';
$mail->Body    = $message;
$mail->AltBody = 'Name: $first_name <br> From: $from <br> Contact: $contact <br> Message: $feedback';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>