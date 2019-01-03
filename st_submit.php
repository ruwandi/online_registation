<?php session_start(); ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "ruwandi1102@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "doni1102@";
//Set who the message is to be sent from
$mail->setFrom('ruwandi1102@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('ruwandi1102@gmail.com', 'First Last');
//Set who the message is to be sent to
$email=$_SESSION['email'];
$name_with_initial=$_SESSION['name_with_initial'] ;
$mail->addAddress($email,$name_with_initial);
//Set the subject line
$mail->Subject = 'Successfully Register for Aptitude Test';
$mail->msgHTML("hello!");

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent! check your email";
}
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
 ?>

   