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
    $outArray[] = array(
          "userId" => $row['id'], 
          "username" => $row['username'], 
          "email" => $row['email'],  
          "password" => '$2y$10$',  
          "date_created" => $row['date_created'], 
          "status" => $row['status']
        );
  }
} 

$conn->close();
echo json_encode($outArray);

?>