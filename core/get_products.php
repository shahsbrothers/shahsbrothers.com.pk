<?php
include_once ('conn.php');

$sql = "SELECT title, description, thumb FROM products";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $products[] = $row;
  }
} 

$conn->close();


?>