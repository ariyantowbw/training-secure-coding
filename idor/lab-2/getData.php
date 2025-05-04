<?php
include '../../connection.php';

//cookie user id 3
setcookie('accessLogin', "01ed90ff6945d13d3bd60174e7bd057e", time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

$cookieValue = $_COOKIE['accessLogin'] ?? null;

$avatar = '';
$sql = "SELECT u.*
        FROM access_login al 
        JOIN users u ON al.user_id = u.id
        WHERE al.token = '$cookieValue'";

$result = $conn->query($sql);

$user = mysqli_fetch_assoc($result);

$userID = $user['id'];
$email = $user['email'];

$message = $_GET['message'] ?? "";