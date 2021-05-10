<?php

  include 'function-beli.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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

    <form action="proses-beli.php" method="post">

    <div style="display: flex;" class="centercolumn">
        

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>Ayam Goreng Kremes</h3>

            <img style=" height: 150px; width: 200px;" src="image/ayamkremes.jpg" alt="">

        
            <input type="submit" name="beli1" value="BELI">


        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>Soto Ayam Kampung</h3>

            <img style="height: 150px; width: 200px;" src="image/resep-soto-ayam.jpg" alt="">

           <input type="submit" name="beli2" value="BELI">


        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>Seblak</h3>

            <img style="height: 150px; width: 200px;" src="image/seblak.jpg" alt="">

           <input type="submit" name="beli3" value="BELI">


        </div>

        <div style="width: 25%;" class="card">

            <h3>Rawon</h3>

            <img style="height: 150px; width: 200px;" src="image/rawon.jpg" alt="">

           <input type="submit" name="beli4" value="BELI">


        </div>


    </div>


    </form>

  
</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Serbamurah. All rights reserved.</h4>
</div>

</body>
</html>