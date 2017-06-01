<?php
$servername = "localhost";
$username = "root";
$password = "welcome";
$dbname='testdb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();//session start is necessary
?>