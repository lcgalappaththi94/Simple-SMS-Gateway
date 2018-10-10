<?php
include "smsGateway.php";
$email="your account email"
$password="your account password"
$smsGateway = new SmsGateway($email, $password);

$deviceID = 68331;
$number = 'Reciever mobile number';
$message = 'This is Hello World!';


//Please note options is no required and can be left out
$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
?>