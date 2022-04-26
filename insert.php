

<?php

include 'connect.php';
include 'index.php';

$servername = "localhost";
$username = "jeje5";
$password = "jeje5";
$dbname = "DB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (user_name, password)
VALUES ('$username0', '$password0')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
