<?php
$servername = "db4free.net"; //"sql312.unaux.com";//
$username = "mosh333"; //"unaux_23022042";//
$password = "moshiur391";//"moshiur391";
$database = "unaux_23022042_Comp466_Assign2_Part1";

//how to find password
//https://profreehost.com/forum/discussion/comment/2964/#Comment_2964

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>