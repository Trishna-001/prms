<?php
$servername = "localhost"; // Change this to your database server
$username = "promediaart_prms_admin"; // Change this to your database username
$password = "Sonarpur743613"; // Change this to your database password
$dbname = "promediaart_prms"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
