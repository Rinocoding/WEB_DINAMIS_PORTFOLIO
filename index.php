<?php  
require "functions.php";
$ambil_data = query("SELECT * FROM images");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet" />
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jersey+20+Charted&family=Lilita+One&family=Poppins&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <h2>MY PORTFOLIO</h2>
      </div>
      <div class="list-bar">
        <a href="#tentang"><li class="list">Tentang</li></a>
        <a href="#portfolio"><li class="list">portfolio</li></a>
        <a href="#skils"><li class="list">skils</li></a>
        <a href="#kontak"><li class="list">kontak</li></a>
        <button id="ubah-warna">Ubah warna</button>
      </div>
    </header>
    <div class="awalan">
      <!-- <div class="div"></div> -->
      <div class="text">
         <h2 class="halo-semua">Halo semua!!!</h2>
         <p class="isi">Saya seorang junior Web developer</p>
         <p class="text-kecil">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam velit repellendus cupiditate <br>similique! Unde alias illum, dolores voluptates assumenda odit?
         </p>
        </div>
         <div class="awalan-img">
          <img src="img/Screenshot_2024-04-13_100831-removebg-preview.png" alt="">
        
         </div>
        <!-- <div class="div"></div> -->
    </div>
    <div class="about" id="tentang">
      <h1 class="judul">About</h1>
      <div class="utama">
        <div class="text1">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iusto in quisquam, adipisci facere voluptas necessitatibus eaque asperiores amet quod minima doloribus vitae rerum unde! Ipsum rerum voluptatem alias et facere sapiente eveniet nostrum? Ducimus magni pariatur deleniti? Commodi totam dolore dolores similique eligendi laboriosam repellat incidunt explicabo aliquid provident!</p>
        </div>
        <div class="text2">
          Lorem ipsum dolor sit amet, consecte  tur adipisicing elit. Asperiores temporibus sapiente nostrum dolorem quisquam reprehenderit corrupti officia. Voluptate eum non dolorum, quas necessitatibus a! Ipsa eveniet, pariatur fugit adipisci sunt velit quam saepe voluptate non sint nulla corrupti dolorum voluptatum commodi. Qui soluta rerum officia nisi veniam totam velit architecto!
        </div>
      </div>
    </div>
    <!-- Slils -->

    <div class="skils" id="skils">
      <h1 class="Skils-h1 judul">Skils</h1>
      <div class="kontent-skils">

        <!--  BATAS-BATAS-BATAS -->
        
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
          <!--  BATAS-BATAS-BATAS  -->
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
          <!-- BATAS-BATAS-BATAS   -->
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
          <!-- BATAS-BATAS-BATAS   -->
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
          <!-- BATAS-BATAS-BATAS   -->
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
          <!--BATAS-BATAS-BATAS  -->
          <div class="div-skils" id="div-skils">
            <div class="icon">
              <i class='bx bxl-html5 skills__icon icon'></i>
            </div>
            <button class="animasi-kan" data-target="animasi-2">Detail</button>
          </div>
      

      </div>
    </div>
  <!-- ini kode untuk memunculkan ddetails -->
    <div class="animasi" id="animasi-1">
        <i class='bx bxl-html5 skills__icon icon'></i>
        <img src="gambar1.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, et ea veritatis quam iusto incidunt laudantium neque rem quidem doloribus nisi id. In corrupti voluptatem, dolore aut quo nam libero.</p>
        <button class="hapus">hapus</button>
    </div>
    
    <div class="animasi" id="animasi-2">
      <i class='bx bxl-html5 skills__icon icon'></i>
      <img src="gambar2.png" alt="">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus incidunt placeat, facilis autem et laudantium. Doloremque aut incidunt, culpa pariatur nam ullam ut tempora dignissimos officiis ea, repellat quod cum?</p>
      <button class="hapus">hapus</button>
    </div>

    <div class="animasi" id="animasi-3">
      <i class='bx bxl-html5 skills__icon icon'></i>
      <img src="gambar1.png" alt="">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quasi sequi, quis, et earum ipsa, sunt illum eius explicabo magni dignissimos dolorem. Veniam nisi excepturi, incidunt vel officiis commodi sunt!</p>
      <button class="hapus">hapus</button>
    </div>
    
    <div class="animasi" id="animasi-4">
      <i class='bx bxl-html5 skills__icon icon'></i>
      <img src="gambar2.png" alt="">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, provident. Adipisci eaque distinctio ea ipsum cupiditate fuga, vel odit ex ducimus exercitationem maxime ratione libero aspernatur voluptate, expedita accusantium sit.</p>
      <button class="hapus">hapus</button>
    </div>

    <div class="animasi" id="animasi-5">
      <i class='bx bxl-html5 skills__icon icon'></i>
      <img src="gambar1.png" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores veritatis suscipit totam numquam ipsam, a repellat, est libero error saepe omnis perspiciatis corrupti delectus temporibus ex odit laudantium, quis facere!</p>
      <button class="hapus">hapus</button>
    </div>
    
    <div class="animasi" id="animasi-6">
      <i class='bx bxl-html5 skills__icon icon'></i>
      <img src="gambar2.png" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus vitae, corrupti nisi praesentium nihil ullam consequuntur velit architecto pariatur enim atque, temporibus autem rem, labore illum necessitatibus beatae placeat veritatis?</p>
      <button class="hapus">hapus</button>
    </div>

    <!-- ini kode untuk memunculkan ddetails -->

    <!-- INI BAGIAN PORTFOLIO -->
    <div class="portfolio"id="portfolio">
        <h1 class="judul">Portfolio</h1>
        <div class="kontent-port">
            <?php if(empty($ambil_data)): ?>
                <li>Data is empty</li>
            <?php else: ?>
                <?php foreach($ambil_data as $row): ?>
                    <div class="hidden loping" width="80%">
                        <div class="card">
                            <div class="isi">
                                <h1>UI/UX FIGMA</h1>
                                <p style="padding-top: 2rem;"><?php echo $row["Tulisan"]; ?><br></p>
                                <a href="" class="a-details">DETAILS INFO</a>
                            </div>
                        </div>
                        <img src="IMG/<?php echo $row['IMG']; ?>" alt="" width="100px">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Kontak -->
    <h1 class="judul">Kontak</h1>
    <div class="kontak" id="kontak">
        <form method="post" action="functions.php">
            <input type="text" placeholder="Nama" class="nama" name="nama">
            <input type="text" placeholder="Email" class="email" name="email">
            <textarea name="pesan" cols="0" rows="10" placeholder="Pesan"></textarea>
            <button class="kirim-form kirim-kontak" type="submit">Kirim</button>
        </form>
    </div>

    <footer>
        <p>Rino Sitanggang</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


   <script src="js/script.js"></script> 
  </body>
</html>
