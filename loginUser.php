<?php include('php/connect.php');

$username = $_POST["username"];
$password = $_POST["password"];

$user  = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
// $pass  = mysqli_query($conn,"SELECT * FROM user WHERE password='$password'");
$data = mysqli_fetch_array($user);

$sql2 = "UPDATE user SET session=1 WHERE id=".$data["id"];

if ($data['password'] === $password) {
  mysqli_query($conn,$sql2);
  header('Location: '.'index.php');
}else{
  echo "user tidak valid";
}