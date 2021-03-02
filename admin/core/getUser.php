<?php
include_once ('conn.php');

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");
$userId = $_GET['userId'];

$sql = "SELECT * FROM users WHERE id='$userId'";
$result = $conn->query($sql);

$outArray = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $outArray = array(
          "username" => $row['username'], 
          "email" => $row['email'],    
          "status" => $row['status']
        );
  
} 

$conn->close();
echo json_encode($outArray);

?>