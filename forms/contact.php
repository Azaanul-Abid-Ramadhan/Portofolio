<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "azaanulabidramadhan@gmail.com";
  $subject = $_POST["subject"];
  $message = "From: " . $_POST["name"] . "\n";
  $message .= "Email: " . $_POST["email"] . "\n";
  $message .= "Message: " . $_POST["message"];
  $headers = "From: " . $_POST["email"];

  if (mail($to, $subject, $message, $headers)) {
    echo "OK";
  } else {
    echo "Failed to send email.";
  }
}
