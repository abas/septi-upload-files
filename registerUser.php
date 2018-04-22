<?php
include('php/connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql  = "INSERT INTO user".
        "(username,email,password,session) ".
        "VALUE".
        "('$username','$email','$password','1')";

if ($conn->query($sql) === TRUE) {
  echo "new user successfully registered";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: '.'index.php');