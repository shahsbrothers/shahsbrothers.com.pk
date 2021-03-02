<?php

// Include config file
include_once ('conn.php');

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST['new_pass_e']))
    $errors['error'] = 'New Password Cannot be NULL.';

    if (empty($_POST['confirm_pass_e']))
        $errors['error'] = 'Confirm Password Cannot be NULL.';
      

    if ($_POST['new_pass_e'] != $_POST['confirm_pass_e'])
    {
        $errors['error'] = 'New Password and Confirm Password must match.';        
    }

    // if no errors
    if ( empty($errors)) {

        $username = $_POST['username_e'];
        $new_password = $_POST['new_pass_e'];

        $password_hash=password_hash($new_password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET password='$password_hash' WHERE username='$username'";
        $result = $conn->query($sql);
        $conn->close(); 

        $data['success'] = true;
        $data['message'] = 'Account updated';
    }
    else
    {
        $data['success'] = false;
        $data['errors']  = $errors;
       
    }

    echo json_encode($data);

}

?>