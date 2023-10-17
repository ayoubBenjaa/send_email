<?php

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];

if(!empty($msg) && !empty($email)){
   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
      $reciever = "ayoubbenjaa642@gmail.com";
      $subject = "Form: $name <$email>";
      $body = "name: $name website: $website\nphone: $phone\nmessage: $msg\n";
      $sender = "From: $email";
      if(mail($reciever,$subject,$body,$sender)){
         echo "Your message has been sent successfully!";
      }else{
         echo "Sorry you email field";

      }
   }
   else{
      echo "Enter a validate email!";
   }
}
else{
   echo "Email and message are required!";
}



?>