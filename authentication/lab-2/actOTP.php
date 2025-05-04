<?php
include "../../connection.php";

$phoneNumber = $_POST['phoneNumber'];
$otp = $_POST['otp'];

//validate otp
$query = "SELECT users.* from otp 
            JOIN users ON (users.id = otp.user_id)
               where otp.otp='$otp'";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
if (isset($row)) {
    $_SESSION['username'] = $row['username'];
    header('location: '.$host.'/authentication/lab-2/profile.php');
    exit;
}
$_SESSION['error_message'] = "Kode OTP Tidak Sesuai";

header('location: '.$host.'/authentication/lab-2/otp.php');
exit;