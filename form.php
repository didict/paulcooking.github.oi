<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['message']
$message = $_POST['']

$email_from = 'atancalos23@gmail.com';

$email_subject = 'New Form Submission';

$emai_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"Method: $subject.\n".
				"User Message: $message.\n";

$to = 'didictstotomas@gmail.com'

$headers = "From: $email_from \r\n"

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$headers);
header("Location: contact.html");
?>