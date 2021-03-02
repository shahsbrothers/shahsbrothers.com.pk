<?php

// Include config file
include_once ('conn.php');

$target_dir = "../../assets/img/slide/";


if ($_FILES['slider1']['size'] > 0 )
{
    $slider_image = $_FILES['slider1']['tmp_name']; 
    $slider_filename = $_FILES['slider1']['name']; 

    $fileNameCmps = explode(".", $slider_filename);
    $ext = strtolower(end($fileNameCmps));

    $target_file = $target_dir . basename($slider_image) . "." . $ext;

    if (move_uploaded_file($slider_image, $target_file)) {
                    
        $errors['error'] = "The file ". htmlspecialchars( basename( $_FILES["slider1"]["name"])). " has been uploaded.";
    } 
    else 
    {
        $errors['error'] = "Sorry, there was an error uploading your file.";
    }
                
    $sql = "UPDATE slider SET slider1='$target_file' WHERE id=100";
    $result = $conn->query($sql);
}

if ($_FILES['slider2']['size'] > 0 )
{
    $slider_image = $_FILES['slider2']['tmp_name']; 
    $slider_filename = $_FILES['slider2']['name']; 

    $fileNameCmps = explode(".", $slider_filename);
    $ext = strtolower(end($fileNameCmps));

    $target_file = $target_dir . basename($slider_image) . "." . $ext;

    if (move_uploaded_file($slider_image, $target_file)) {
                    
        $errors['error'] = "The file ". htmlspecialchars( basename( $_FILES["slider2"]["name"])). " has been uploaded.";
    } 
    else 
    {
        $errors['error'] = "Sorry, there was an error uploading your file.";
    }
                
    $sql = "UPDATE slider SET slider2='$target_file' WHERE id=100";
    $result = $conn->query($sql);
}

if ($_FILES['slider3']['size'] > 0 )
{
    $slider_image = $_FILES['slider3']['tmp_name']; 
    $slider_filename = $_FILES['slider3']['name']; 

    $fileNameCmps = explode(".", $slider_filename);
    $ext = strtolower(end($fileNameCmps));

    $target_file = $target_dir . basename($slider_image) . "." . $ext;

    if (move_uploaded_file($slider_image, $target_file)) {
                    
        $errors['error'] = "The file ". htmlspecialchars( basename( $_FILES["slider3"]["name"])). " has been uploaded.";
    } 
    else 
    {
        $errors['error'] = "Sorry, there was an error uploading your file.";
    }
                
    $sql = "UPDATE slider SET slider3='$target_file' WHERE id=100";
    $result = $conn->query($sql);
}


$conn->close(); 

$resp = array('status' => 'OK');
echo json_encode($resp);

?>