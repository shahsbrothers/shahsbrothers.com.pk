<?php
include ('conn.php');

$sql = "SELECT ca_info FROM `categories`";
$result = $conn->query($sql);

$categories = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $categories[] = json_decode( $row['ca_info']);
  }
} 

$conn->close();
?>