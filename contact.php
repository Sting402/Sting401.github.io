
<?php

$to = "steven19930326@gmail.com";
$name = $_POST['$name'];
$subject=$_POST['$subject'];
$message=$_POST['$message'];
$headers = 'From: example' . "\r\n" .
    'Reply-To: steven19930326@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to,$subject,$message,$headers);