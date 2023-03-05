<?php

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send email
    $to = "larebzarkhan@gmail.com"; // Replace with your email address
    $subject = "New message from your webpage";
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    $headers = "From: $email";
    mail($to, $subject, $body, $headers);
}

?>
