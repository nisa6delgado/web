<?php

// Check for empty fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'No arguments provided!';
    return false;
}

$name    = strip_tags(htmlspecialchars($_POST['name']));
$email   = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$body    = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'nisadelgado@gmail.com';

$headers = "From: {$email}";
$headers .= "Reply-To: {$email}";

mail($to, $subject, $body, $headers);

return true;
