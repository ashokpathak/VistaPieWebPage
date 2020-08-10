<?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address'];
$formcontent=" From: $name \n Phone: $phone \n Address: $address";
$recipient = "vistapie.digital@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if ($_POST['submit']) {
   mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='Index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>
