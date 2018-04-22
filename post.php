<?php
    include('php/connect.php');
    include('php/activeUser.php');

    if($data['type'] == 'admin'){
      // $admin = "<h1>NOTICE ME!</h1>";
    }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Campus Station | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="css/post.css">
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
        <li class="dropdown" style="float:left;margin-left">
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
    
    
      <form class="form-control" action="posting.php" method="post" enctype="multipart/form-data">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="" placeholder="masukkan judul kampanye">

        <label for="image">Image</label>
        <input type="file" name="image" id="">

        <label for="dana">Dana Dibutuhkan</label>
        <input type="number" name="dana" id="" placeholder="masukkan dana yang anda butuhkan, ex:1000000">
          
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="" placeholder="masukkan deskripsi kampanye"></textarea>
        
        <input name="user" type="text" value="<?php echo $data['username'];?>" style="display:none;">

        <button class="btn bg-teal white pointer" TYPE="submit" name="upload">Posting</button>
      </form>
      
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