<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial_10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the 'users' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
  
  )";

if (!$conn->query($sql)) {
    echo "Error creating table: " . $conn->error;
}
