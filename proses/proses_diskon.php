<?php
include '../koneksi/koneksi.php';


if(isset($_POST['periksa'])){
    $id_barang=uniqid();
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stok_barang=$_POST['stok_barang'];
    $keterangan=$_POST['keterangan'];

// query

    $diskon=mysqli_query($koneksi,"insert into stok values('$id_barang','$nama_barang',
    '$harga_barang','$stok_barang','$keterangan')") or die
    (mysqli_error($diskon));

// pengecekkan

    if($diskon){

        echo"<script>alert('data berhasil diiimput')
                window.location.href='../diskon.php'</script>
            
            "; 
                

    }else{

        // echo "<script>alert('data gagal diimput')</script>";
    }
}
?>


