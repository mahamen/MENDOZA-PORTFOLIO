<?php
// config.php
// Database configuration for portfolio messages

$servername = "localhost";
$username = "root";     // Change this to your database username
$password = "";         // Change this to your database password
$dbname = "portfolio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Create table if it doesn't exist (run once)
$table_sql = "CREATE TABLE IF NOT EXISTS messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$conn->query($table_sql)) {
    error_log("Table creation failed: " . $conn->error);
}

// Set timezone if needed
date_default_timezone_set('Asia/Manila');

// No closing tag to avoid accidental whitespace
?>