<?php
$servername = "localhost"; // The server hosting your database (localhost is used for local development)
$username = "root"; // Default username for MySQL in XAMPP or WAMP is "root"
$password = ""; // Default password for MySQL in XAMPP or WAMP is empty
$dbname = "tourism_website"; // The name of your database (make sure it matches the actual database name)

$conn = new mysqli($servername, $username, $password, $dbname); // Create a new MySQLi connection

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // If connection fails, show the error
} 
?>



