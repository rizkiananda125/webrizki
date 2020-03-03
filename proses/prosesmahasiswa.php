<?php

include '../koneksi/koneksi.php';


if(isset($_POST['periksa'])){
    $id_mahasiswa=uniqid();
    $nama_mahasiswa=$_POST['nama_mahasiswa'];
    $nim_mahasiswa=$_POST['nim_mahasiswa'];
    $jurusan=$_POST['jurusan'];
    $mata_kuliah=$_POST['mata_kuliah'];
    $uts=$_POST['uts'];
    $uas=$_POST['uas'];
    $quiz=$_POST['quiz'];
    $harian=$_POST['harian'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $total= ($harian*0.1)+($uts*0.35)+($uas*0.4)+($quiz*0.15);
    
    


// pengecekkan

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

    // query

    $total=mysqli_query($koneksi,"insert into nilai values('$id_mahasiswa','$nama_mahasiswa',
    '$nim_mahasiswa','$jurusan','$mata_kuliah','$uts','$uas','$quiz','$harian','$jenis_kelamin','$total','$predikat')") or die(mysqli_error($total));

    // proes kembali layar awal

    if($total){
        echo"<script>alert('data berhasil diimput!');
        window.location.href='../tampilanmahasiswa.php'
        </script>
            "; 


    }
}
?>


