<?php
session_start();

// Include config file
include_once ('conn.php');

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

$username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty($_POST['username']))
        $errors['login'] = 'Name is required.';

    if (empty($_POST['password']))
        $errors['login'] = 'Email is required.';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        
        $row = $result->fetch_assoc();
        $status = $row['status'];
        $password_hash = $row['password'];
        $id = $row['id'];
        if ($status) {
            if (password_verify($password, $password_hash))
                {
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;  
                }
                else
                    $errors['login'] = 'The password you entered was not valid.';
        }
        else
            $errors['login'] = 'This account is suspended.';
      } 
    else
    $errors['login'] = 'No account found with that username.';

    $conn->close();        

    // return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } 
    else 
    {
        $data['success'] = true;
        $data['message'] = 'Success!';
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}
