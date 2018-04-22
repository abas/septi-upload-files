<?php
include('connect.php');

// CREATE TABLE DONATION
$sql  = "CREATE TABLE donation (".
        "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
        "name VARCHAR(30) NOT NULL,".
        "email VARCHAR(30) NOT NULL,".
        "fee INTEGER NOT NULL,".
        "reg_date TIMESTAMP".
        ")";

if ($conn->query($sql) === TRUE) {
    echo "Table 'donation' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();