<?php

// https://www.johnmorrisonline.com/simple-input-filtering-php/
// https://stackoverflow.com/questions/47959654/php-contact-form-best-practice-input-validation-not-working

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $visitor_email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
  $visitor_phone = $_POST['phone'];
  $message  =filter_input( INPUT_POST, 'message', FILTER_SANITIZE_STRING );

  $email_from = 'dweiss@dvice.ch';

  $email_subject = "Kontakformular Webseite";

  $email_body = "Name: $name\n".
                "Email: $visitor_email\n".
                "Tel: $visitor_phone\n".
                "Nachricht: $message\n";

  $to = "dweiss@dvice.ch";

  //$headers = "From: $email_from \r\n";

  $headers  = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  $headers .= "Content-Type: text/plain";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");

?>