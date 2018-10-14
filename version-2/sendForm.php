<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $visitor_phone = $_POST['phone'];
  $message = $_POST['message'];

  // $email_from = 'dweiss@dvice.ch';

  $email_subject = "Kontakformular Webseite";

  $email_body = "Name: $name\n".
                "Email: $visitor_email\n".
                "Tel: $visitor_phone\n".
                "Nachricht: $message\n";

  $to = "dweiss@dvice.ch";

  //$headers = "From: $email_from \r\n";

  //$headers = "From: $visitor_email \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");

?>