<?php
include "../../connection.php";

$getSaldo = $_POST['saldo'];

$expSaldo = explode("Rp ", $getSaldo);
$saldo = trim($expSaldo[1]);

if ($saldo > 0) {
    $cookieValue = $_COOKIE['accessLogin'] ?? null;

    if ($cookieValue === null) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid session',
        ]);
        exit;
    }

    $sql = "SELECT s.*
        FROM access_login al 
        JOIN saldo s ON al.user_id = s.user_id
        WHERE al.token = '$cookieValue'";

//var_dump($sql);
    $result = $conn->query($sql);
    $userSaldo = mysqli_fetch_assoc($result);


    $finalSaldo = $userSaldo['saldo'] - $saldo;
    $userID = $userSaldo['user_id'];
    $sqlUpdateSaldo = "UPDATE saldo SET saldo = '$finalSaldo' WHERE user_id = '$userID'";
    $conn->query($sqlUpdateSaldo);

    //insert into history
    $sqlInsertHistory = "INSERT INTO saldo_histories (user_id,saldo, status) VALUES ('$userID', '$saldo', 1)";
    $conn->query($sqlInsertHistory);

    echo json_encode([
        'status' => 'success',
        'message' => 'Withdrawal successful',
    ]);
    exit;
}

echo json_encode([
    'status' => 'error',
    'message' => 'Insufficient balance',
]);
exit;

?>