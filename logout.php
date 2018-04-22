<?php
include('php/connect.php');
include('php/activeUser.php');

$session = $_POST["session"];

$sql  = "UPDATE user ".
        "SET session='$session'".
        " WHERE id=".$data["id"];

if ($conn->query($sql) === TRUE) {
  header('Location: '.'login.php');
}