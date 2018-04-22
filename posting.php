<?php include('php/connect.php');
$judul = $_POST['judul'];
$dana = $_POST['dana'];
$deskripsi = $_POST['deskripsi'];
$user = $_POST['user'];
$filename = $_FILES['image']['name'];
$getDir = $_FILES['image']['tmp_name'];

$sql  = "INSERT INTO post".
        "(judul,dana,deskripsi,image,user) ".
        "VALUE".
        "('$judul','$dana','$deskripsi','$filename','$user')";

if(move_uploaded_file($getDir,'image/post/'.$filename)){
  echo "success upload image\n";
  if ($conn->query($sql) === TRUE) {
    echo "new post successfully posted";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}else{
  echo "fail";
  $conn->close();
}

header('Location:'.'index.php');