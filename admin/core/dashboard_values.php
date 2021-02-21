<?php
include_once ('conn.php');

$data = array();

// Users
$sql = "SELECT COUNT(*) as users_count FROM `users`";
$result = $conn->query($sql);
$users_count = $result->fetch_assoc();
$users_count = $users_count['users_count'];


// Products
$sql = "SELECT COUNT(*) as product_count FROM `products`";
$result = $conn->query($sql);
$product_count = $result->fetch_assoc();
$product_count = $product_count['product_count'];


$conn->close();
?>