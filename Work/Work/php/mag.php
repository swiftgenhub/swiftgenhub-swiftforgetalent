<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'goldeninkwriting@gmail.com';
  $subject = 'New message from Golden Ink website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Your message has been sent.';
  } else {
    echo 'An error occurred while sending your message. Please try again later.';
  }
}
?>

