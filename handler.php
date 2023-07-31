<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POSt['message'];

$email_form = 'info@omkarbhoite1.github.io.';

$email_subject = 'New Form submission';

$email_body = "User Name : $name.\n"."User Email : $visitor_email.\n"."Subject : $subject.\n"."User Message : $message .\n";

$to = 'omkarbhoite120@gmail.com';

$headers = "Form : $email_form \r\n";

$headers .="Reply-To : $visitor_email \r\n";

mail($to , $email_subject , $email_body , $headers);

header("Location : contact.html");

?>