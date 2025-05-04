<?php
require '../../connection.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
if (isset($row)) {
    $_SESSION['username'] = $row['username'];
    header('location: '.$host.'/authentication/lab-1/profile.php');
    exit;
}
$_SESSION['error_message'] = "Email dan Password tidak cocok";

header('location: '.$host.'/authentication/lab-1/');
exit;