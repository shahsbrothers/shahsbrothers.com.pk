<?php
include_once ('conn.php');

$sql = "SELECT * FROM `categories`";
$result = $conn->query($sql);

$categories = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $temp = json_decode($row['ca_info']);
    $temp->ca_id =  $row['ca_id'];
    $categories[] = $temp;
    
  }
} 
    echo json_encode($categories);
$conn->close();

?>