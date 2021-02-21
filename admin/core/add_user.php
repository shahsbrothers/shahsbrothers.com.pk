<?php

// Include config file
include_once ('conn.php');

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

$username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['username_c']))
        $errors['error'] = 'Username is required.';

    if (empty($_POST['email_c']))
        $errors['error'] = 'Password is required.';
    
    if (empty($_POST['password_c']))
        $errors['error'] = 'Password is required.';

    if (empty($_POST['confirm_pass_c']))
        $errors['error'] = 'Confirm Password is required.';        

    if ($_POST['password_c'] != $_POST['confirm_pass_c'])
    {
        $errors['error'] = 'Password and Confirm Password must match.';        

    }

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } 
    else 
    {
        if (isset($_POST['username_c']) && isset($_POST['email_c']) && isset($_POST['password_c']) && isset($_POST['confirm_pass_c']) )
        {
    
            $username = $_POST['username_c'];
            $email = $_POST['email_c'];
            $password_c = $_POST['password_c'];
            $password_hash=password_hash($password_c, PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO users(username,email,password) VALUES('$username', '$email', '$password_hash')";
            $result = $conn->query($sql);
            $conn->close(); 
        }
        $data['success'] = true;
        $data['message'] = 'Success!';
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}

?>