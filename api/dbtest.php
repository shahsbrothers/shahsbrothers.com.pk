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

$sql = "SELECT * FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username: " . $row["username"]. " - Password: " . $row["password"] ."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>