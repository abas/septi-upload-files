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
    <title>Campus Station | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
</head>
<body background="image/bg-login2.png">
    <center>
    <div class="login-page">
        <form action="adminLogin.php" method="POST">
            <div class="imgcontainer">
                <img src="image/ico.png" alt="Avatar" class="avatar">
                <h3>Admin | Login</h3>
            </div>
            
            <div class="container" style="text-align: left;">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                
                <button type="submit">Login</button>
                <!-- <input type="checkbox" checked="checked"> Remember me -->
            </div>
            
            <div class="container" style="background-color:#f1f1f1;text-align: left;">
                <button class="cancelbtn" type="button" onclick="window.location.href='index.php'">Back</button>
            </div>
        </form>

        </div>
    </center>
    </body>
</html>