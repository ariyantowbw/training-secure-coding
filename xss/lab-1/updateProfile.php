<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header('Location: ' . $host . '/xss/lab-1/');
    die();
}
include '../../connection.php';

$cookieValue = $_COOKIE['accessLogin'];
$queryToken = "SELECT u.username, u.id, p.avatar 
                FROM users u
                JOIN access_login al ON al.user_id = u.id
                JOIN profiles p ON p.user_id = u.id
                WHERE al.token = '$cookieValue'";

$resultQueryToken = $conn->query($queryToken);

if ($resultQueryToken->num_rows == 0) {
    $message = "Data user tidak ditemukan";
    header('Location: ' . $host . '/xss/case-1/index.php?message=' . $message);
    die();
}

$profile = mysqli_fetch_assoc($resultQueryToken);

//update profile
$fullname = $_POST['fullname'];
$fullname = $conn->real_escape_string($fullname);

$idUser = $profile['id'];

$queryUpdateProfile = "UPDATE profiles 
                        set fullname = '$fullname' 
                        WHERE user_id = '$idUser'";


if ($conn->query($queryUpdateProfile) === FALSE) {
    $message = "Data profile gagal diupdate";
}

$message = "Data profile berhasil diupdate";
header('Location: ' . $host . '/xss/lab-1/index.php?message=' . urlencode($message));
die();