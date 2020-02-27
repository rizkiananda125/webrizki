<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama_mahasiswa=$_GET['nama_mahasiswa'];
    $nim_mahasiswa=$_GET['nim_mahasiswa'];
    $jurusan=$_GET['jurusan'];
    $mata_kuliah=$_GET['mata_kuliah'];
    $uts=$_GET['uts'];
    $uas=$_GET['uas'];
    $quiz=$_GET['quiz'];
    $harian=$_GET['harian'];

    $total=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);
        
    if ($total <= 50){

        $predikat='E';
        
    }elseif ($total <= 65){

        $predikat='D';
          
    }elseif ($total <= 70){

        $predikat='C';
        
    }elseif ($total >= 80){

        $predikat='B';
        
        
    }elseif ($total <= 90){

        $predikat='A';
        
    }

    $update=mysqli_query($koneksi,"update nilai set nama_mahasiswa='$nama_mahasiswa',nim_mahasiswa='$nim_mahasiswa',jurusan='$jurusan',mata_kuliah='$mata_kuliah',uts='$uts',uas='$uas',
    quiz='$quiz',harian='$harian',total='$total', predikat='$predikat' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));

    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../tampilanmahasiswa.php"
            </script>
            ';

    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../update_mahasiswa.php"
        </script>
    ';
    }
}
?> 