<?php
include '../../connection.php';

//cookie user id 3
setcookie('accessLogin', "01ed90ff6945d13d3bd60174e7bd057e", time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

$cookieValue = $_COOKIE['accessLogin'] ?? null;

$avatar = '';
$sql = "SELECT p.*
        FROM access_login al 
        JOIN profiles p ON al.user_id = p.user_id
        WHERE al.token = '$cookieValue'";

$result = $conn->query($sql);

$profile = mysqli_fetch_assoc($result);
$fullname = $profile['fullname'] ?? null;
$avatar = $profile['avatar'] ?? "";

$message = $_GET['message'] ?? "";