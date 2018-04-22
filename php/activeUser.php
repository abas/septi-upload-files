<?php
include('connect.php');

$sql  = "SELECT * FROM user WHERE session=1";
$user = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($user);
// echo "id: " . $data["username"];
// print_r($data);