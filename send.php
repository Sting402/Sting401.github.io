<?php
  $to = "sw4work@seancv2018.com"; 
  $subject = $_POST['subject']; 
  $message = $_POST['message'];
  $headers = "From: ".$_POST['name']."<".$_POST['email'].">"; 

  
  if(mail("$to", "$subject", "$message", "$headers")):
   echo "Your message has been successfully sent.";
  else:
   echo "Failed to submit, please try again later！";
  endif;
  header("Refresh:3; url=index.html") ;
?>