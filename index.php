<?php 

$firstname = $_POST['firstname'];
$country = $_POST['country'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $firstname \n Country: $country \n Sender Email: $email \n Message: $message";
$recipient = "mmahasriram2006@gmail.com";
$subject = "Contact Form";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You";

?>