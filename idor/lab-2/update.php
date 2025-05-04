<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header('Location: ' . $host . '/idor/lab-2/');
    die();
}
include '../../connection.php';

$userID = $_GET['id'];
$password =  sha1($_POST['password']);


$queryUpdateProfile = "UPDATE users 
                        set password = '$password' 
                        WHERE id = '$userID'";


if ($conn->query($queryUpdateProfile) === FALSE) {
    $message = "Data profile gagal diupdate";
}

$message = "Data profile berhasil diupdate";
header('Location: ' . $host . '/idor/lab-2/index.php?message=' . urlencode($message));
die();