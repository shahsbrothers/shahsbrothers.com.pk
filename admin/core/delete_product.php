<?php
include_once ('conn.php');

$rowID = $_GET['rowid'];
$sql = "DELETE FROM products WHERE product_id=".$rowID;

$result = $conn->query($sql);

$conn->close();
$resp = array('status' => 'OK');


echo json_encode($resp);
?>