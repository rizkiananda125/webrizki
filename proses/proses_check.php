<?php
include "../koneksi/koneksi.php";

?>


<!-- proses isset -->

<?php

 if (isset($_POST['periksa'])){

    $id_barang=uniqid();
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stok_barang=$_POST['stok_barang'];
    $jenis=$_POST['jenis'];

    //query

    $diskon=mysqli_query($koneksi,"select * from stok where 
    username='$username' and password='$password'");

    // pengecekkan

    $cek=mysqli_num_rows($diskon);

    // menampilkan definisi data

    $data=mysqli_fetch_assoc($diskon);
    if($check>0){
        
    }


}



