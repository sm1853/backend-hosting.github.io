<?php
$servername = "localhost";
$database = "strings";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("cannot connect"); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>