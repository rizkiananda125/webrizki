<?php
    include "header.php";
?>


<!-- tag navbar -->


<br>
<br>

<!-- tag konten -->

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_mahasiswa">Nama</label>
                <input type="text"name="nama" class="form-control" id="nama_mahasiswa" 
                placeholder="masukkan nama...">
            </div>

            <div class="form-group">
                <label for="nim_mahasiswa">Nim</label>
                <input type="number" name="nim" class="form-control" id="nim_mahasiswa" 
                placeholder="masukkan nim...">
            </div>

            <div class="form-group">
                <label for="jur">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jur" 
                placeholder="silahkan masukkan jurusan...">
            </div>

            <div class="form-group">
                <label for="nilai_uts">UTS</label>
                <input type="number" name="uts" class="form-control" id="nilai_uts" 
                placeholder="masukkan nilai uts...">
            </div>

            <div class="form-group">
                <label for="nilai_uas">UAS</label>
                <input type="number" name="uas" class="form-control" id="nilai_uas" 
                placeholder="masukkan nilai uas...">
            </div>

            <div class="form-group">
                <label for="nilai_quiz">QUIZ</label>
                <input type="number" name="quiz" class="form-control" id="nilai_quiz" 
                placeholder="masukkan nilai quiz...">
            </div>

            <div class="form-group">
                <label for="nilai_harian">Harian</label>
                <input type="number" name="harian" class="form-control" id="nilai_harian" 
                placeholder="masukkan nilai Harian..."> 

            <br>

            <input type= "submit" class= "btn btn-info" name="periksa" value="check">

            </form>
            </div>
            

<!-- proses php -->
    
<?php

if (isset($_POST['periksa'])){

    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jurusan'];
    $uts=$_POST['uts'];
    $uas=$_POST['uas'];
    $quiz=$_POST['quiz'];
    $harian=$_POST['harian'];

    $total= ($harian*0.1)+($uts*0.35)+($uas*0.40)+($quiz*0.15);


    if ($total<=50){
        
        echo "<div class='alert alert-secondary' role='alert'>
        nama $nama jurusan $jurusan nim $nim dengan nilai $total, 
        predikat anda E, anda tidak lulus!</div>";
        
    }elseif ($total<=65){
        
        echo "<div class='alert alert-danger' role='alert'>
        nama $nama jurusan $jurusan nim $nim dengan nilai $total, 
        predikat anda D, maaf anda tidak lulus</div>";
        
    }elseif ($total<=70){
        
        echo "<div class='alert alert-warning' role='alert'>
        nama $nama jurusan $jurusan nim $nim dengan nilai $total, 
        predikat anda C, maaf anda lulus</div>";
        
    
    }elseif ($total<=80){
        
        echo "<div class='alert alert-primary' role='alert'>
        nama $nama jurusan $jurusan nim $nim dengan nilai $total, 
        predikat anda B,anda lulus!</div>";
    
    }
    
    elseif ($total>=100){
        
        echo "<div class='alert alert-success' role='alert'>
        nama $nama jurusan $jurusan nim $nim dengan nilai $total, 
        predikat anda A, anda lulus!</div>";
        
    }
}

?>

<br>
<br>

<?php

include "footer.php";

?>
