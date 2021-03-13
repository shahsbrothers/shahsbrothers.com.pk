<?php
include_once ('conn.php');

$rowID = $_GET['rowid'];
if ($rowID == "1")
{
    echo "ERROR";
}
else
{
    $sql = "DELETE FROM users WHERE id=".$rowID;

    $result = $conn->query($sql);
    
    $conn->close();
    
    
    echo "OK";
}

?>