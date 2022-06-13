<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
       if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $to = "selvigtech@gmail.com";
           $subject = "From: " . $email . " Subject: " . $subject;
           $message = "Name: " . $name . "\n\n" . "Email: " . $email . "\n\n" . "Message: " . $message;
           $headers = "From: " . $email . "\r\n";
           $headers .= "Reply-To: " . $email . "\r\n";
          if (mail($to, $subject, $message, $headers)) {
              echo "Your message has been sent.";
          } else {
              echo "There was a problem sending your message.";
          }

       }
       else {
           echo "Please enter a valid email address";
       }
    } else {
        echo "Please fill in all fields";
        die();
    }
