<?php
include '../../connection.php';


//cookie user id 3
setcookie('accessLogin', "63de90ff6945d13d3bd60174e7bd057e", time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

$cookieValue = $_COOKIE['accessLogin'] ?? null;

$avatar = '';
$sql = "SELECT p.*
        FROM access_login al 
        JOIN profiles p ON al.user_id = p.user_id
        WHERE al.token = '$cookieValue'";

//var_dump($sql);
$result = $conn->query($sql);

$profile = mysqli_fetch_assoc($result);

$avatar = $profile['avatar'] ?? "";


$message = $_GET['message'] ?? "";