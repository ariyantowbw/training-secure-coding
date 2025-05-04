<?php
include "../../connection.php";
$cookieValue = $_COOKIE['accessLogin'];

$sql = "SELECT s.*
        FROM access_login al 
        JOIN saldo_histories s ON al.user_id = s.user_id
        WHERE al.token = '$cookieValue'";

//var_dump($sql);
$result = $conn->query($sql);

