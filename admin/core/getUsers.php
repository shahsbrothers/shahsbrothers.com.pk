<?php
include_once ('conn.php');

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$outArray = array();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $outArray[] = array($row['id'], $row['username'], $row['email'],  '$2y$10$',  $row['date_created'], $row['status'], );
  }
} 

$conn->close();
echo json_encode($outArray);

?>