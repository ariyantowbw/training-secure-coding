<?php
include "../../../connection.php";

$headers = getallheaders();
$authorization = isset($headers['Authorization']) ? $headers['Authorization'] : '';


if (preg_match('/Bearer (.+)/', $authorization, $matches)) {
    $token = $matches[1];
} else {
    echo json_encode(['result' => 0]);
    exit();
}

$checkAuth = "SELECT users.id, access_login.* FROM access_login 
                                JOIN users ON users.id = access_login.user_id
                                WHERE access_login.token = '$token'";

$resultAuth = $conn->query($checkAuth);
if ($resultAuth->num_rows == 0) {
    echo json_encode(['result' => 0]);
    exit();
}

$data = json_decode(file_get_contents('php://input'), true);

$role = $data['role'];

if ($role === 'admin') {
    echo json_encode(['result' => 1, 'message' => 'Welcome to the dashboard']);
} else {
    echo json_encode(['result' => 0]);
}
?>
