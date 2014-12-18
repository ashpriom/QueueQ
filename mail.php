<?php
// This example will send mail through the SMTP server with authentication.
require("../ticket/classes/class.phpmailer.php"); // be sure to change this to your location!
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "abarth.websitewelcome.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port
$mail->Username = "info@iutps.org"; // GMAIL username
$mail->Password = "priom"; // GMAIL password
$mail->From = "info@iutps.com";
$mail->FromName = "RBS";
$mail->AddAddress("sa.priom@gmail.com");
$mail->Subject = "Test PHPMailer Message";
$mail->Body = "Hi! \n\n This was sent with phpMailer_example3.php.";
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>