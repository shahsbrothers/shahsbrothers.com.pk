<?php
include_once ('conn.php');


$body = json_decode(file_get_contents('php://input'));

$body_json = json_encode($body);

// echo ($body_json);

$sql = "INSERT INTO categories(ca_info) VALUES('$body_json')";

$result = $conn->query($sql);

$conn->close();
$resp = array('status' => 'OK');

echo json_encode($resp);

?>