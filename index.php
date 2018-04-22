<?php
    // include('php/connect.php');
    include('php/activeUser.php');
    include('php/postingan.php');

    if($data['type'] == 'admin'){
      // $admin = "<h1>NOTICE ME!</h1>";
    }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Septi | Web Lanjut</title>
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
    <div class="container">

      <div class="fixed">
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="post.php">Upload Tugas</a>
          </li>
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

      <!-- <div class="banner">
      <div class="banner-content">
        <center>
          <div class="banner-image-rounded">
            <img src="image/ico.png" height="100px" alt="" style="margin-top:11px;">
          </div>
          <h2>Campus Station</h2>
          <p>
            <b>$></b> Enterpreneur
            <b>Start</b> From
            <b>Campus</b>
          </p>
          <button class="bg-teal white get-start" onclick="window.location.href='#most'">
            Get Stared
          </button>
        </center>
      </div>
    </div> -->

      <legend id="topcampaign"></legend>
      <div class="container">
        <div class="row">
          <?php if ($posts->num_rows > 0) {
        while($row = $posts->fetch_assoc()) { 

        ?>

          <center>
            <div class='grid-4' style='padding-bottom:50px;'>
              <div class='card' style='width:98%;'>
                <a href='detail.php'>
                  <a href='<?php echo 'image/post/'.$row['image'];?>' alt='image not found' style='width:100%;'>Download</a>
                  </a>
                  <div class='card-container'>
                    <h4>
                      <b>
                        <?php echo $row['judul'];?>
                      </b>
                      <br>
                      <b style="color:#3FB9A4;font-size:30px;">$
                        <?php echo $row['dana']/1000;?>K</b>
                    </h4>
                    <br>
                    <a href='detail.php?id=<?php echo $row[id];?>' style='text-decoration:none;' class='teal'>
                      <b>Read More</b>
                    </a>
                  </div>
              </div>
            </div>
          </center>
          <?php }
          } else {
            echo "tidak ada tugas terupload";
          }

          $conn->close();
          ?>
        </div>
      </div>
    </div>
    <a onclick="toTop()">
      <div class="btn-top bg-teal white pointer">
        UP
      </div>
    </a>
    <script>
      document.querySelector('#top').scrollIntoView({
        behavior: 'smooth'
      });

      function toTop() {
        document.querySelector('#top').scrollIntoView({
          behavior: 'smooth'
        });
      }

      function toMostView() {
        document.querySelector('#mostview').scrollIntoView({
          behavior: 'smooth'
        });
      }

      function toTopCampaign() {
        document.querySelector('#topcampaign').scrollIntoView({
          behavior: 'smooth'
        });
      }
    </script>
  </body>

  </html>