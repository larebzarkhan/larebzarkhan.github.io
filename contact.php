<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'larebzarkhan@gmail.com'; // Replace with your email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = 'New message from '.$name;
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Thank you for your message. I will get back to you soon.';
    } else {
        echo 'There was a problem sending your message. Please try again later.';
    }
}
?>