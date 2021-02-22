<?php
$servername = "localhost";
$username = "shahsbrothers_user";
$password = "XHZI]j4ume0z";
$dbname = "shahsbrothers_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>