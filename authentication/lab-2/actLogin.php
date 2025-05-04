<?php
require '../../connection.php';
$phoneNumber = $_POST['phone_number'];

$query = "SELECT * FROM users WHERE phone_number = '$phoneNumber'";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
if (isset($row)) {
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['user_id'] = $row['id'];
    header('location: '.$host.'/authentication/lab-2/otp.php');
    exit;
}
$_SESSION['error_message'] = "No Handphone tidak ditemukan";

header('location: '.$host.'/authentication/lab-2/');
exit;