<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the values of the form fields
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Send an email with the form data
  $to = 'telefontamircisi999@gmail.com';
  $headers = "From: $name <$email>";
  $mail_subject = "Contact Form - $subject";
  $mail_message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

  if (mail($to, $mail_subject, $mail_message, $headers)) {
    // Display a success message
    echo "Thank you for your message. We will get back to you soon.";
  } else {
    // Display an error message
    echo "Oops! Something went wrong. Please try again later.";
  }

} else {

  // Display the form
  ?>

  <h1>İLETİŞİM</h1>
  <p>Sizden haberdar olmak isteriz. Lütfen aşağıdaki formu doldurunuz.</p>
  <form action="" method="post">
    <input id="fname" type="text" name="name" placeholder="İsim-Soyisim" required>
    <input id="email" type="email" name="email" placeholder="E-posta" required>
    <input id="subject" type="text" name="subject" placeholder="Konu" required>
    <textarea id="massage" name="message" rows="5" cols="50" placeholder="Mesajınız" required></textarea>
    <input id="submit" type="submit" name="submit" value="Gönder">
  </form>

  <?php
}

?>