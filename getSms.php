<?php
include "smsGateway.php";
$email="your account email"
$password="your account password"
$smsGateway = new SmsGateway($email, $password);

$id = 9;

$result = $smsGateway->getMessage($id);
var_dump($result);
?>