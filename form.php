<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@cuangga.me';
$email_subject = 'New Message from Website';
$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

$to = 'drago92c@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");




?>