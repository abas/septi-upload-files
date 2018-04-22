<!DOCTYPE html>
<html lang="en">
<head>
    <title>Campus Station | Payment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/pay.css">
    <link rel="stylesheet" href="css/grid-system.css">
    <script type="text/javascript">   
        function pop_fee(){
            var name = document.getElementById('donator').value;
            alert("Terimakasih "+name+", Atas Kerjasama Anda :)");
            window.location="detail.php";
        }
    </script>

</head>
<body background="image/donate.png" onload="onload()">
    <div class="container">
        <div class="row">
            <div class="grid-4">
                <form action="donate.php" method="POST">
                    <div class="imgcontainer">
                        <img src="image/ico.png" alt="" class="avatar">
                        <h3>Campus Station | Donation</h3>
                    </div>    
                    <div>
                        <label><b>Name</b></label>
                        <input id="donator" type="text" placeholder="name" name="name" required>
                        
                        <label><b>Email</b></label>
                        <input type="email" placeholder="email" name="email" required>

                        <label><b>Fee</b></label>
                        <input type="number" placeholder="Rp. " name="fee" required>
                        
                        <input type="checkbox" required> 
                        <b>accept all!</b>

                        <br>
                        <button onclick="pop_fee()" class="submitbtn" type="submit" href="javascript:;">Submit</button>
                        <button class="cancelbtn" type="button" onclick="window.location='index.php'">Cancel</button>
                    </div>
                </form>        
            </div>
        </div>
    </div>
    </body>
</html>