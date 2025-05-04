<?php
include "../../connection.php";
$userID = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$userID'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
