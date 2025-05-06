<?php
require '../../connection.php';

// $_SESSION['error_count'] = 0;

if (isset($_SESSION['error_count']) && $_SESSION['error_count'] >= 2) {
    $_SESSION['error_message'] = 'You have reached maximum try for this session, try again later';
    header('location: ' . $host . '/authentication/lab-1/');
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
if (isset($row)) {
    $_SESSION['error_count'] = 0;
    $_SESSION['username'] = $row['username'];
    header('location: ' . $host . '/authentication/lab-1/profile.php');
    exit;
}
if (isset($_SESSION['error_count'])) {
    $_SESSION['error_count']++;
} else {
    $_SESSION['error_count'] = 0;
}
$_SESSION['error_message'] = "Email dan Password tidak cocok";

header('location: ' . $host . '/authentication/lab-1/');
exit;
