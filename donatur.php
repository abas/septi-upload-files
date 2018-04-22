<?php
    include('php/connect.php');
    include('php/listDonatur.php');
    include('php/activeUser.php');
    include('php/totalDonation.php');

    if($data['type'] == 'admin'){
      // $admin = "<h1>NOTICE ME!</h1>";
    }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Campus Station | donatur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/colorize.css">
    <link rel="stylesheet" href="css/grid-system.css">

    <!-- JS -->
    <script type="text/javascript" src="js/command.js"></script>
  </head>

  <body id="top">


    <div class="fixed">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="donatur.php">Daftar Donatur</a>
        </li>
        <!-- <li><a href="#news">Explore</a></li> -->
        <?php if($data == null) { ?>
        <li class="dropdown" style="float:left;margin-left:10px">
          <a href="#" class="dropbtn">Auth</a>
          <div class="dropdown-content">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
          </div>
        </li>
        <?php } else { ?>
        <li class="dropdown" style="float:left;margin-left:10px">
          <a href="#" class="dropbtn">
            <?php echo $data["username"]; ?>
          </a>
          <form action="logout.php" method="POST">
            <div class="dropdown-content">
              <input style="display:none;" value="0" name="session">
              <button id="logout" style="width:100%;background-color:white;">
                <a href="#">Logout</a>
              </button>
            </div>
          </form>
        </li>
        <?php } ?>
      </ul>
    </div>

    <div class="banner-donate">
      <div class="banner-content">
      </div>
    </div>

    <div class="grid-12 bg-teal" style="padding-top:5%;padding-bottom:10%;">
      <legend id="mostview"></legend>
      <div class="container">
        <center>
          <div class="tagline bg-white teal">
            <b>
              Total Donasi : $<?php echo $totalDonation/1000; ?>
            </b>
          </div>
        </center>
        <div class="row">
        <?php if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
          <div class="grid-4" style="padding-bottom:50px;">
            <div class="card bg-white" style="width:90%;padding-left:5%;">
              <!-- <img src="https://ukietech.com/filemanager/BLOG/4_404.jpg" alt="image/4_404.jpg" style="width:100%;" onerror="this.src='image/4_404.jpg';"> -->
              <div class='card-container'>
                <h1><b><?php echo $row['name'];?></b></h1>
                <p><?php echo $row['email'];?></p>
                <p><b><?php echo $row['reg_date'];?></b></p>
                <h1 class="teal">$ : <b>
                <?php echo $row['fee']/1000;?>k
                </b></h1>
              </div>
            </div>
          </div>
        <?php }
          } else {
            echo "0 results";
          }

          $conn->close();
          ?>
        </div>
      </div>
    </div>

    <div class="grid-12 bg-grey white footer" style="">
      <div class="container row">
        <center>
          <div class="grid-12" style="padding-top:20px;">
            <img onclick="window.location.href='https://github.com/ahmadbasir'" class="rounded-item ico-style bg-white pointer-hover"
              src="https://hammerjs.github.io/assets/img/github-icon.png" alt="image/github-icon.png" onerror="this.src='image/github-icon.png';">
            <br>
            <br>
            <b>Github</b>
          </div>
          <div class="grid-12">
            <p>&copy; campustation
              <b>2017</b> by
              <b>Abas</b>
            </p>
          </div>
        </center>
      </div>
    </div>

    <a onclick="toTop()">
      <div class="btn-top bg-teal white pointer">
        UP
      </div>
    </a>
    <script>
      document.querySelector('#top').scrollIntoView( {
        behavior: 'smooth'
      });
      function toTop(){
        document.querySelector('#top').scrollIntoView( {
          behavior: 'smooth'
        });
      }
      function toMostView(){
        document.querySelector('#mostview').scrollIntoView( {
          behavior: 'smooth'
        });
      }
      function toTopCampaign(){
        document.querySelector('#topcampaign').scrollIntoView( {
          behavior: 'smooth'
        });
      }
    </script>
  </body>

  </html>