<?php
include_once ('conn.php');

$ca_id = $_POST['ca_id'];
$sql = "DELETE FROM categories WHERE ca_id=".$ca_id;

$result = $conn->query($sql);

$conn->close();
$resp = array('status' => 'OK');

echo json_encode($resp);
?>
