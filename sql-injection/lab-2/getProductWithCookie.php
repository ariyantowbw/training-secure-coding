<?php
include '../../connection.php';

// Nama cookie
$accessLogin = 'accessLogin';

$isLogin = false;
$cookieValue = null;
if (isset($_COOKIE[$accessLogin])) {
    $cookieValue = $_COOKIE[$accessLogin];
} else {
    $accessLogin = bin2hex(random_bytes(16));
    setcookie('accessLogin', $accessLogin, time() + (86400 * 30), "/", $_SERVER['SERVER_NAME'], true, true); // Cookie berlaku selama 30 hari
}


$queryToken = "SELECT u.username 
                FROM users u
                JOIN access_login al ON al.user_id = u.id
                WHERE al.token = '$cookieValue'";

$resultQueryToken = $conn->query($queryToken);

if ($resultQueryToken->num_rows > 0) {
    $accessLogin = $cookieValue;
    $isLogin = true;
    $username = $resultQueryToken->fetch_assoc()['username'];
}
$category = @$_GET['category'];

if ($category == null) {
    $sql = "SELECT p.id, p.name, p.price, p.thumbnail, pc.category_name
        FROM products p
        JOIN product_categories pc ON pc.id = p.product_category_id
        WHERE p.is_publish = true";
} else {
    $sql = "SELECT p.id, p.name, p.price, p.thumbnail, pc.category_name
        FROM products p
        JOIN product_categories pc ON pc.id = p.product_category_id
        WHERE pc.category_name = '$category' and p.is_publish = true";
}

//var_dump($sql);
$result = $conn->query($sql);
