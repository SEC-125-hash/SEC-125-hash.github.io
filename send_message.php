<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["full-name"];
    $email = $_POST["email-address"];
    $message = $_POST["message"];

    $to = "secglobal23@gmail.com";
    $subject = "New message from SEC contact form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
