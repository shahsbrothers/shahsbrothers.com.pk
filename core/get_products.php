<?php
include ('conn.php');

$sql = "SELECT title, description, thumb FROM products";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row1 = $result->fetch_assoc()) 
  {
    $products[] = $row1;
  }
} 

$conn->close();


?>