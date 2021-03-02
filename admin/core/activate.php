<?php
include_once ('conn.php');

$userId = $_POST['userId'];
$status = $_POST['status'];

$sql = "UPDATE users SET status='$status' WHERE id='$userId'";
$result = $conn->query($sql);
$conn->close(); 

$response = array('status' => 'OK');
echo json_encode($response);

?>