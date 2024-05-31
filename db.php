<?php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
