<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial_08";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the 'posts' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS posts (
    
)";

if (!$conn->query($sql)) {
    echo "Error creating table: " . $conn->error;
}
