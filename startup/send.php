<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "vishnu14520@gmail.com";
  $subject = "Form Submission";
  $message = "Name: " . $name ."\n"."Wrote the following: "."\n\n".$message;
  $header="From: " . $email;

  if(mail($to, $subject, $message, $header)){
    echo "<script type='text/javascript'>alert('Message was sent successfully')</script>";
  }else{
    echo "<script type='text/javascript'>alert('Submission failed! Try again later')</script>";
  }
}
?>