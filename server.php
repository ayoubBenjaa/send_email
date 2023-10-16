
<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $website = $_POST['website'];
   $phone = $_POST['phone'];
   $msg = $_POST['msg'];


if(!empty($email) && !empty($msg)){
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "ayoubbenjaa642@gmail.com";
      $subject = "From: $name <$email>";
      $name = "Name: $name\nEmail: $email\nPhone $phone\nWebsite: $website\nmessage: $msg";
      $sender = "From: $email";
      if(mail($receiver,$subject,$body,$sender)){
         echo "Your message has been sent";

      }else{
         echo "Sorry, filed to send your message";
      }
   }
   else{
      echo "Enter a valid email address!";
   }
}
else{
   echo "Email and password is required";
}














?>





