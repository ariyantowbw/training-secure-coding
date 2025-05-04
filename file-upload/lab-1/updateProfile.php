<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header('Location: ' . $host . '/file-upload/lab-1/');
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
    header('Location: ' . $host . '/file-upload/lab-1/index.php?message=' . $message);
    die();
}

$profile = mysqli_fetch_assoc($resultQueryToken);

//update profile
$fileName = $_FILES['avatar']['name'] ?? "";
$directory = '../../assets/gallery/';

if ($fileName) {
    $newFileName = $directory . $fileName;
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $newFileName)) {
    unlink($directory.'/'.$profile['avatar']);
    } else {
        $message = "File gagal diupload.";
    }
}
$idUser = $profile['id'];

$avatar = $profile['avatar'];
if($fileName){
    $avatar = $fileName;
}

$queryUpdateProfile = "UPDATE profiles 
                        set avatar = '$avatar' 
                        WHERE user_id = '$idUser'";

$conn->query($queryUpdateProfile);
if ($conn->query($queryUpdateProfile) === FALSE) {
    $message = "Data profile gagal diupdate";
}

$message = "Data profile berhasil diupdate";
header('Location: ' . $host . '/file-upload/lab-1/index.php?message=' . urlencode($message));
exit();