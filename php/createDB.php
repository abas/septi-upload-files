<?php
include('connect.php');

$sql = "CREATE DATABASE abas";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error."\n";
}

$conn->close();
