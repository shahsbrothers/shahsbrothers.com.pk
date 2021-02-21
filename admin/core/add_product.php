<?php

// Include config file
include_once ('conn.php');

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

$username = $password = "";

// print_r($_POST);
// print_r($_FILES);
$ext ="";

$target_dir = "../../assets/img/products/";
$target_dir_db = "../assets/img/products/";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['prod_title']))
        $errors['error'] = 'Product Title is required.';

    if (empty($_POST['prod_desc']))
        $errors['error'] = 'Product Description is required.';
    
    if (empty($_FILES['prod_thumb']['name']))
    {
        $errors['error'] = 'Thumbnail  is required.';
   
        $data['success'] = false;
        $data['errors']  = $errors;
        echo json_encode($data);
        die(); 
    }    

    
    $check = getimagesize($_FILES["prod_thumb"]["tmp_name"]);
    if(!$check) {
        $errors['error'] = 'Only image type files are allowed.';
    }

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } 
    else 
    {
        if (isset($_POST['prod_title']) && isset($_POST['prod_desc']))
        {
    
            $prod_title = $_POST['prod_title'];
            $prod_desc = $_POST['prod_desc'];
            $image = $_FILES['prod_thumb']['tmp_name']; 
            $file_name = $_FILES['prod_thumb']['name']; 

            $fileNameCmps = explode(".", $file_name);
            $ext = strtolower(end($fileNameCmps));

            $target_file = $target_dir . basename($image) . "." . $ext;
            $target_file_db_path = $target_dir_db . basename($image) . "." . $ext;

            if (move_uploaded_file($image, $target_file)) {
                
                $errors['error'] = "The file ". htmlspecialchars( basename( $_FILES["prod_thumb"]["name"])). " has been uploaded.";
              } else {
                $errors['error'] = "Sorry, there was an error uploading your file.";
              }
                          
            $sql = "INSERT INTO products(title,description,thumb) VALUES('$prod_title', '$prod_desc', '$target_file_db_path')";
            $result = $conn->query($sql);


        }
        $data['success'] = $ext;
        $data['message'] = "OK";

    }
    // return all our data to an AJAX call
    $conn->close(); 
    echo json_encode($data);
}

?>