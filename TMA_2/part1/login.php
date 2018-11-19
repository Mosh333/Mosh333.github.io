<?php
$servername = "db4free.net";
$username = "mosh333";
$password = "moshiur391";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>