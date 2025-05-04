<?php
require '../../connection.php';

//cookie user id 3
setcookie('accessLogin', "01ed90ff6945d13d3bd60174e7bd057e", time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

$cookieValue = $_COOKIE['accessLogin'];

$sql = "SELECT s.saldo
        FROM access_login al 
        JOIN saldo s ON al.user_id = s.user_id
        WHERE al.token = '$cookieValue'";

//var_dump($sql);
$result = $conn->query($sql);
$data = mysqli_fetch_assoc($result);