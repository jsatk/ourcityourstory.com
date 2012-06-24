<?php
  //send email
  $email = $_REQUEST['email'] ;
  $subject = "Our City, Our Story new newsletter subscriber!" ;
  $message = "Please add " + $email + " to the newsletter subscribers." ;
  mail("jesse.s.atkinson@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
?>