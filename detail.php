<?php
    include('php/connect.php');
    include('php/activeUser.php');

    $sqlGet = "SELECT * FROM post WHERE id=".$_GET['id'];

    $detail = mysqli_query($conn, $sqlGet);
    
    $post = mysqli_fetch_array($detail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Station | Detail</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/colorize.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- JS -->
    <script src="js/command.js"></script>

    <!-- INTERNAL STYLE -->
    <style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <div class="fixed">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="donatur.php">Daftar Donatur</a></li>
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
            
    <!-- <div style="width: 100%;">
        <img width="100%;" src="https://assets-a1.kompasiana.com/items/album/2016/11/04/flatdesign-581c7400727a61f87381749b.jpg" alt="">
    </div> -->
    <div class="detail-containe" style="margin-left:15%;margin-right: 15%;margin-top: 5%;">
        <div class="row">
            <div class="grid-8">
                <img src='<?php echo 'image/post/'.$post['image']; ?>' alt='image/4_404.jpg' style='width:90%;' onerror=\"this.src=\'image/4_404.jpg\';\">
                <h1 class="teal"><b>
                    <!-- <script>
                        var title = [
                                    "Workshop Programming",
                                    "Normalization City",
                                    "Interrupted Network",
                                    "Firebase Data Scrapper",
                                    "Testing Simulation",
                                    "Create Bot Hook.io",
                                    "Network Management",
                                    "Security Assignment"
                                ];
                        cetak(title[randomize(0,7)]);
                    </script>     -->
                    <?php echo $post['judul']; ?>
                </b></h1>
                <p style="text-align: justify;">
                    <?php echo $post['deskripsi'] ?>
                    <!-- <b>Ringkasan singkat</b>
                    <br>
                    Tuliskan ide yang kamu rancang dan buatlah mereka percaya akan idemu. Hal yang harus dilakukan di bagian ini:
                    <br><br>
                    <b>
                        Perkenalkan diri dan latar belakang Anda.
                        </b><br>
                    - Jelaskan secara singkat kampanye Anda dan mengapa hal ini penting bagi Anda. <br>
                    - Ungkapkan jumlah kontributor yang akan membantu Anda mencapainya. <br>
                    - Ingat, tetap ringkas, tapi pribadi. Tanyakan pada diri sendiri: jika seseorang berhenti membaca di sini apakah mereka akan siap memberikan kontribusi? <br>
                    <br><br>
                    <h3 class="teal">
                        Apa yang Kita Butuhkan & Apa yang Anda Dapatkan
                    </h3>
                    <br><br>
                    <b>
                        Jelaskan kepada orang-orang secara lebih rinci:
                    </b><br>
                    
                    - Jelaskan berapa banyak dana yang Anda butuhkan dan kemana arahnya. Jadilah transparan dan spesifik,orang perlu percaya Anda untuk mendanai kampanye Anda. <br>
                    - Beritahu orang tentang keistimewaan produk Anda. Buatlah mereka bersemangat <br>
                    - Jelaskan di mana dana pergi jika Anda tidak mencapai keseluruhan tujuan Anda.
                    <br><br>
                    <b>
                        Dampak <br>
                        </b>
                    <h4 class="teal">

                        Jangan ragu untuk menjelaskan lebih banyak tentang kampanye Anda dan biarkan orang tahu perbedaan kampanye yang telah anda buat: <br>
                    </h4>
                    
                    Jangan ragu untuk menjelaskan kampanye Anda dengan baik dan biarkan orang-orang tahu perbedaan kontribusi apa untuk mereka <br>
                    <br>
                    - Jelaskan mengapa proyek Anda berharga bagi kontributor dan Indonesia. <br>
                    - Tunjukkan rekam jejak sukses Anda dengan proyek seperti ini (jika Anda memilikinya). <br> 
                    - Jadikan itu nyata bagi orang dan membangun kepercayaan. <br>
                    <br><br>
                    
                    <b>
                        Resiko & Tantangan 
                        </b>
                    <br>
                    Orang menghargai keterbukaan Anda. Terbuka dengan memberikan wawasan tentang risiko dan hambatan yang mungkin Anda hadapi dalam mencapai tujuan Anda.
                    <br><br>
                    - Bagikan apa yang memenuhi syarat untuk mengatasi tantangan ini. <br>
                    - Jelaskan rencana Anda untuk memecahkan tantangan ini. <br><br>
                    <br>
                    <b>
                        Cara Lain yang Dapat Anda Bantuan 
                        </b>
                    
                    <h4 class="teal">
                        Beberapa orang tidak dapat berkontribusi, tapi itu tidak berarti mereka tidak dapat membantu:
                        </h4>
                    - Mintalah ke  orang-orang untuk mengeluarkan kata-kata dan membuat beberapa pernyataan tentang kampanye Anda. <br>
                    - Ingatkan mereka untuk menggunakan  Campus Station ! <br>
                </p> -->
            </div>
            <div class="grid-4">
                <div class="side-bar">
                    <div class="label bg-teal white" style="margin-bottom: 10px;">
                        <h1>
                            <b><?php echo $post['user'];?></b> 
                        </h1>
                    </div>
                    <b>Universitas Dian Nuswantoro</b><br>
                    Teknik Informatikas - S1
                    <p style="text-align: justify">
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, animi. Libero culpa vero dolor ratione molestias natus a dolorem fuga corrupti, quisquam eligendi ab, ad labore reiciendis, placeat excepturi assumenda! -->
                        dana yang dibutuhkan <br>Rp. 
                        <b>
                            <?php echo $post['dana'] ?>
                        </b>
                    </p><br>
                    <div class="label bg-teal white support" style="width:35%;">
                        <div onclick="window.location.href='pay.php'">
                            <b>Support Me!</b>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="grid-12 bg-grey white footer" style="margin-top: 10%;">
        <div class="container row">
            <center>
            <div class="grid-12" style="padding-top:20px;">
            <img onclick="window.location.href='https://github.com/ahmadbasir'" class="rounded-item ico-style bg-white pointer-hover" src="https://hammerjs.github.io/assets/img/github-icon.png" alt="image/github-icon.png" onerror="this.src='image/github-icon.png';">
            <br><b>Github</b>
            </div>
            <div class="grid-12">
            <p>&copy; campustation <b>2017</b> by <b>Abas</b></p>
            </div>
            </center>
        </div>
    </div>
</body>
</html>