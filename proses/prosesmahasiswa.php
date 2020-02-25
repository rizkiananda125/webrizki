<?php
include '../koneksi/koneksi.php';


if(isset($_POST['periksa'])){
    $id_mahasiswa=uniqid();
    $nama_mahasiswa=$_POST['nama_mahasiswa'];
    $nim_mahasiswa=$_POST['nim_mahasiswa'];
    $jurusan=$_POST['jurusan'];
    $uts=$_POST['uts'];
    $uas=$_POST['uas'];
    $quiz=$_POST['quiz'];
    $harian=$_POST['harian'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    $total= ($harian*0.1)+($uts*0.35)+($uas*0.4)+($quiz*0.15);

// query

    $total=mysqli_query($koneksi,"insert into nilai values('$id_mahasiswa','$nama_mahasiswa',
    '$nim_mahasiswa','$jurusan','$uts','$uas','$quiz','$harian','$jenis_kelamin')") or die
    (mysqli_error($total));

// pengecekkan

    if ($total<=50){
        
        echo"<script>alert('predikat anda E, maaf anda tidak lulus!')</script>
            "; 
        
    }elseif ($total<=65){
        
        echo"<script>alert('predikat anda D, maaf anda tidak lulus!')</script>
            "; 
        
    }elseif ($total<=70){
        
        echo"<script>alert('predikat anda C, maaf anda tidak lulus!')</script>
            "; 
        
    
    }elseif ($total<=80){
        
        echo"<script>alert('predikat anda B, maaf anda tidak lulus!')</script>
            "; 

    }elseif ($total>=100){
        
        echo"<script>alert('predikat anda A, maaf anda tidak lulus!')</script>
            "; 
        
    }
}
?>


