<?php
include_once ('conn.php');

$ca_id = $_POST['ca_id'];;
$sql = "SELECT ca_info FROM categories WHERE ca_id=".$ca_id;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  echo json_encode(json_decode($row['ca_info']));
  $conn->close();
} 

?>