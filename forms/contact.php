<?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $to = "bhaskarsatyabola.bs11@gmail.com";
      $subject = "New Message from Contact Form";
      $body = "Name : $name: Email: $email Message: $message";
      mail($to,$subject,$body);
      echo "Thank you for your message!";
   }
?>