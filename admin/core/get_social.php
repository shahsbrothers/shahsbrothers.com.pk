<?php
include_once ('conn.php');


$sql = "SELECT * FROM social WHERE id=100";
$result = $conn->query($sql);

$outArray = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $outArray = $row;
} 

$conn->close();
echo json_encode($outArray);

?>