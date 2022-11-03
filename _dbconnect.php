<?php
// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "inventory";
$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
?>