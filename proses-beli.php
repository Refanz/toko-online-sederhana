<?php

  include 'function-beli.php';

  $makanan = new makanan();

  if(isset($_POST["beli1"])){

    $makanan->setNamaMakanan("Ayam Goreng Kremes");
    $makanan->setHargaMakanan("15000");

  }
  if(isset($_POST["beli2"])){

    $makanan->setNamaMakanan("Soto Ayam Kampung");
    $makanan->setHargaMakanan("10000");

  }
  if(isset($_POST["beli3"])){

    $makanan->setNamaMakanan("Seblak");
    $makanan->setHargaMakanan("11000");

  }
  if(isset($_POST["beli4"])){

    $makanan->setNamaMakanan("Rawon");
    $makanan->setHargaMakanan("12000");

  }

  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="beli.css">

</head>
<body>

<div class="header">
  <h1>TOKO MAKANAN SERBAMURAH</h1>
  <h4>HARGA PREMIUM RASA PERTAMAX</h4>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="menu-belanja.php">Belanja</a>
  <a href="menu-tentang-kami.php">Tentang Kami</a>
</div>

<div class="row">

  <form action="menu-rincian.php" method="post">

    <div class="centercolumn">

    <div class="card">

      <h2>PESANAN ANDA</h2>

      <div class="row">
        <div class="col-25">
          <label for="fname">Nama Makanan</label>
        </div>
        <div class="col-25">
          <input readonly type="text" id="fname" name="nama_makanan" autocomplete="off" value="<?php echo $makanan->getNamaMakanan();?>">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Harga Per Porsi</label>
        </div>
        <div class="col-25">
          <input readonly type="number" id="fname" name="harga_makanan" autocomplete="off" value="<?php echo $makanan->getHargaMakanan();?>">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Jumlah Beli</label>
        </div>
        <div class="col-25">
          <input  type="number" id="fname" name="jumlah_beli" autocomplete="off">
        </div>
      </div>

    </div>

    <div class="card">

  

      <div class="row">
        <div class="col-25">
          <label for="fname">Nama</label>
        </div>
        <div class="col-25">
          <input type="text" id="fname" name="nama_pembeli" autocomplete="off" >
        </div>
      </div>


    <div class="row">
      <div class="col-25">
        <label for="subject">Alamat Rumah</label>
      </div>
      <div class="col-25">
        <textarea id="subject" name="alamat_rumah" style="height:200px" autocomplete="off"></textarea>
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>

    </div>

    </form>

    </div>

</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Serbamurah. All rights reserved.</h4>
</div>

</body>
</html>