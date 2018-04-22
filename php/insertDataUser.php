<?php
include('connect.php');

// 
$sql  = "INSERT INTO user".
        "(username,email,password) ".
        "VALUE".
        "('Abas','akhmadbasir5@gmail.com','abas123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();