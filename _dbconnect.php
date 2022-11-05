<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "inventory";
$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 
  echo "Connected successfully";
  
?>