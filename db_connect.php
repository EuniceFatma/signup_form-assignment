<?php
$servername = "localhost";
$username = "root"; // Default for local WAMP/Laragon
$password = ""; // Default is empty for local servers
$dbname = "user_db"; // Make sure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>