<?php
require "../../connection.php";
if(!$_SESSION['phone_number'] || !$_SESSION['user_id']){
    header('Location: '.$host.'/authentication/lab-2');
    exit();
}
$phoneNumber = $_SESSION['phone_number'];
$userID = $_SESSION['user_id'];

$otp = rand(1000, 9999);


$sql = "INSERT INTO otp (otp,user_id) VALUES ('$otp','$userID')";
$conn->query($sql);

?>