<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];

$to = "abhayrawat9389.com";
$subject = "Mail From infinos";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Mobile Number =".$number;
$headers = "From: noreply@inginos.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>