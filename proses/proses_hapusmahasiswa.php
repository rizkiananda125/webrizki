<?php
    include'../koneksi/koneksi.php';


if(isset($_GET['id_mahasiswa'])){

    $id=$_GET['id_mahasiswa'];
    $hapus=mysqli_query($koneksi,"DELETE FROM nilai WHERE id_mahasiswa='$id'")or die (mysqli_error($hapus));

        if($hapus){

            echo"
                <script>alert('Data Berhasil Dihapus')
                window.location.href='../tampilanmahasiswa.php'
                </script>
                
                ";
        }
    }
?>