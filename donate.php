<?php include('php/connect.php');

$name = $_POST["name"];
$email = $_POST["email"];
$fee = $_POST["fee"];

$sql  = "INSERT INTO donation".
        "(name,email,fee) ".
        "VALUE".
        "('$name','$email','$fee')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: '.'detail.php');  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();