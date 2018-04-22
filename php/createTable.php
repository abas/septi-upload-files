<?php
include('connect.php');

// CREATE TABLE USER
$sql  = "CREATE TABLE user (".
        "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
        "username VARCHAR(30) NOT NULL,".
        "email VARCHAR(30) NOT NULL,".
        "password VARCHAR(50) NOT NULL,".
        "session INTEGER(5) DEFAULT 0,".
        "reg_date TIMESTAMP".
        ")";

if ($conn->query($sql) === TRUE) {
    echo "Table \'user\' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();