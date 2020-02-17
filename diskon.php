<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diskon</title>

<!-- backround -->


<style>

.navbar-brand{
    font-size: x-large;
    font-style: bold;
    font-family: Verdana, Tahoma, sans-serif;
    position: relative;

}


</style>

    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">

    <!-- css bootstrap rebbot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">

    <!-- css bootstrap css for bootstrap -->

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">

</head>
<body>

<div class="background">

</div>

<!-- Membuat Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">TUAH-RIZKI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bonus</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Check Barang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Terlaris</a>
          <a class="dropdown-item" href="#">Terbaik</a>
          <a class="dropdown-item" href="#">Termurah</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<br>
<br>


<!-- tag form -->

<title><b> Sistem Perhitungan Diskon <b></title>

<form action="" method="POST">
<label> Nama Produk:</label>
<input type="text" name="produk" placeholder="masukan nama produk">
<label> Harga Produk:</label>
<input type="number" name="harga" placeholder="masukan harga produk">
<label> Diskon:</label>
<input type="number" name="diskon" placeholder="masukan jumlah diskon">

<input type="submit" name="submit" value="check"> <br><br>

<hr>

<!-- tag php -->

<?php

if (isset($_POST['submit'])){
    $produk=$_POST['produk'];
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];

    echo"produk yang dibeli:$produk <br>";
    echo"harga produk:$harga <br>";
    echo"jumlah diskon:$diskon <br>";

    if ($harga>=100000){
        $harga_diskon=$harga-($harga*$diskon/100);
        echo"harga diskon $harga_diskon";
    
    }else {
        echo"$harga";
    }
}

?>

<!-- Java script for Bootstrap -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.js.map"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js.map"></script>

<!-- js for bootstrap -->

<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.js.map"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js.map"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.js.map"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.min.js.map"></script>

</body>
</html>

<!-- tag php -->

