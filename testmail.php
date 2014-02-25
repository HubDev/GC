<?php
/* $to = "masonroduk@googlemail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "admin@artoflivinggreen.co";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent."; */


$from = "admin@artoflivinggreen.co";
$headers = "From:" . $from;
echo mail ("n.tsagkas@gmail.com" ,"testmailfunction" , "Oj",$headers);
?>