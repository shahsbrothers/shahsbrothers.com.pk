<?php
include ('conn.php');

$sql = "SELECT * FROM `slider` WHERE id=100";
$result = $conn->query($sql);

$slider = array();

if ($result->num_rows > 0) {
  // output data of each row
$row = $result->fetch_assoc();

$slider = array(
    "slider1" => substr( $row['slider1'], 6),    
    "slider2" => substr( $row['slider2'], 6),    
    "slider3" => substr( $row['slider3'], 6),    
);

} 


$conn->close();
?>