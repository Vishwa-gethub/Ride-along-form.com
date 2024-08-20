<?php
session_start();


$servername = "sql110.infinityfree.com"; // Replace with your server name
$username = "if0_37131669";      // Replace with your username
$password = "6364498644Sa";      // Replace with your password
$dbname = "if0_37131669_ride_along_form"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
