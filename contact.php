<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$sender = $_POST['email'];
$message = $_POST['message'];

$email_from = 'anggawisn@gmail.com';
$email_body =
    "Name: $name .\n" .
    "Email : $sender .\n" .
    "Subject: $subject .\n" .
    "Message: $message.\n";

$to = "anggaprabes@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reaply-To: $sender \r\n";
mail($to, $subject, $email_body, $headers);
header("location: index.html");
