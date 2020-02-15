<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diskon</title>
</head>
<body>

<form action="" method="POST">
<label> Nama Produk:</label>
<input type="text" name="produk" placeholder="masukan nama produk">
<label> Harga Produk:</label>
<input type="number" name="harga" placeholder="masukan harga produk">
<label> Diskon:</label>
<input type="number" name="diskon" placeholder="masukan jumlah diskon">

<input type="submit" name="submit" value="check"> <br><br>

<hr>

</body>
</html>

<?php

if (isset($_POST['submit'])){
    $produk=$_POST['produk'];
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];

    echo"produk yang dibeli:$produk <br>";
    echo"harga produk:$harga <br>";
    echo"jumlah diskon:$diskon <br>";

    if ($harga>=10000){
        $harga_diskon=$harga-($harga*$diskon/100);
        echo"harga diskon $harga_diskon";
    
    }else {
        echo"$harga";
    }
}

?>