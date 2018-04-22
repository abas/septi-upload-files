<?php
    include('php/connect.php');
    include('php/activeUser.php');
    if($data != null){
        header('Location: '.'index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Campus Station | Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
</head>
<body background="image/bg-login2.png">
    <center>
    <div class="login-page">
        <form action="registerUser.php" method="POST">
            <div class="imgcontainer">
                <img src="image/ico.png" alt="Avatar" class="avatar">
                <h3>Campus Station</h3>
            </div>
            
            <div class="container" style="text-align: left;">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                
                <label><b>Email</b></label>
                <input type="email" placeholder="Enter Username" name="email" required>
                
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <label><b>Re-type Password</b></label>
                <input type="password" placeholder="Enter Password" name="" required>
                
            </div>
            <hr>
            <div class="container" style="background-color:#f1f1f1;text-align: left;">
                <button class="submitbtn" type="submit">Sign Up</button>
                <button class="cancelbtn" type="button" onclick="window.location.href='login.php'">Cancel</button>
            </div>
        </form>

        </div>
    </center>
    </body>
</html>