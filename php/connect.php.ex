<?php
$servername = {{database_host}}
$username = {{database_username}}
$password = {{database_password}}
$dbname = {{database_name}}

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."\n");
}
// echo "Connected successfully\n";
?> 