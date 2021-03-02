<?php
include_once ('conn.php');

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$outArray = array();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $outArray[] = array(
         "producId" => $row['product_id'], 
         "title" => $row['title'], 
         "description" => $row['description'], 
         "thumb" => $row['thumb'], 
         "date_created" => $row['date_created'],
       );
  }
} 

$conn->close();
echo json_encode($outArray);

?>