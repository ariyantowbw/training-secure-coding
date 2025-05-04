<?php
require '../../connection.php';
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
