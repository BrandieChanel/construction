<?php

print_r($_Post);

$name - $_POST['name'];
$email - $_POST['email'];
$subject - $_POST['subject'];
$message - $_POST['message'];

$to ="brandie.chanel@gmail.com";


$mailheader - "From:" .$name."<".$email.">"\r\n";
$recipient = "brandie.chanel@gmail.com";

mail($to, $subject, $message, $mailheader);


?>