<?php
include ('conn.php');

if (!empty($_POST['facebook']))
{   $facebook = $_POST['facebook'];
    $sql = "UPDATE social SET facebook='$facebook' WHERE id=100";

    $result = $conn->query($sql);
   
}

if (!empty($_POST['twitter']))
{   $facebook = $_POST['twitter'];
    $sql = "UPDATE social SET twitter='$facebook' WHERE id=100";

    $result = $conn->query($sql);
   
}

if (!empty($_POST['instagram']))
{   $facebook = $_POST['instagram'];
    $sql = "UPDATE social SET instagram='$facebook' WHERE id=100";

    $result = $conn->query($sql);
   
}


if (!empty($_POST['skype']))
{   $facebook = $_POST['skype'];
    $sql = "UPDATE social SET skype='$facebook' WHERE id=100";

    $result = $conn->query($sql);
   
}

if (!empty($_POST['linkdin']))
{   $facebook = $_POST['linkdin'];
    $sql = "UPDATE social SET linkdin='$facebook' WHERE id=100";

    $result = $conn->query($sql);
   
}
$conn->close();
$resp = array('status' => 'OK');
echo json_encode($resp);

?>