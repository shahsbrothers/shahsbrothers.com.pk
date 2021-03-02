<?php
include_once ('conn.php');

$body = json_decode(file_get_contents('php://input'));
$ca_id = $body -> ca_id;

$body_json = json_encode($body);

$sql = "UPDATE categories SET ca_info='$body_json' WHERE ca_id=".$ca_id;

$result = $conn->query($sql);

$conn->close();
$resp = array('status' => 'OK');

echo json_encode($resp);

?>