<?php
    include "header.php";
?>


<!-- tag navbar -->

<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Fake News</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lapor</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bagian
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Nasional</a>
          <a class="dropdown-item" href="#">Internasional</a>
          <a class="dropdown-item" href="#">Nanggroe</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<br>
<br>

<!-- tag konten -->

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_mahasiswa">Nama</label>
                <input type="text" class="form-control" id="nama_mahasiswa" 
                placeholder="masukkan nama...">
            </div>

            <div class="form-group">
                <label for="nim_mahasiswa">Nim</label>
                <input type="nim" class="form-control" id="nim_mahasiswa" 
                placeholder="masukkan nim...">
            </div>

            <div class="form-group">
                <label for="jur">Jurusan</label>
                <input type="jurusan" class="form-control" id="jur" 
                placeholder="silahkan masukkan nim...">
            </div>

            <div class="form-group">
                <label for="nilai_uts">UTS</label>
                <input type="uts" class="form-control" id="nilai_uts" 
                placeholder="masukkan nilai uts...">
            </div>

            <div class="form-group">
                <label for="nilai_uas">UAS</label>
                <input type="uas" class="form-control" id="nilai_uas" 
                placeholder="masukkan nilai uas...">
            </div>

            <div class="form-group">
                <label for="nilai_quiz">QUIZ</label>
                <input type="quiz" class="form-control" id="nilai_quiz" 
                placeholder="masukkan nilai quiz...">
            </div>

            <div class="form-group">
                <label for="nilai_harian">Harian</label>
                <input type="harian" class="form-control" id="nilai_harian" 
                placeholder="masukkan nilai Harian...">
            

            <input type= "submit" class= "btn btn-info" name="periksa" value="check">

            </form>
            </div>
            

           

<!-- proses php -->
    
<?php

if (isset($_POST['periksa'])){

    $text=$_POST['nama_mahasiswa'];
    $nim=$_POST['nim_mahasiswa'];
    $jurusan=$_POST['jur'];
    $uts=$_POST['nilai_uts'];
    $uas=$_POST['nilai_uas'];
    $quiz=$_POST['nilai_quiz'];
    $harian=$_POST['nilai_harian'];
   

    $total= $harian*10/100 + $uts*35/100 + $uas*40/100 + $quiz*15/100;

    if ($total<=50){
        
        div class="alert alert-secondary">Nama $nama dari jurusan $jurusan 
        dengan Nim $nim mendapatkan nilai $total dengan predikat E </div>
    }

    if ($total<=65){

        div class="alert alert-danger">Nama $nama dari jurusan $jurusan 
        dengan Nim $nim mendapatkan nilai $total dengan predikat D </div>

    }
    
    if ($total<=70){

        div class="alert alert-warning">Nama $nama dari jurusan $jurusan 
        dengan Nim $nim mendapatkan $total dengan predikat C </div>
        
    }

    if ($total<=80){

        <div class="alert alert-primary">Nama $nama jurusan $jurusan 
        Nim $nim mendapat $total dengan predikat B </div>
        

    }
    
    if ($total>=100){
        
        <div class="alert alert-success">Nama $nama jurusan $jurusan 
        Nim $nim mendapat nilai $total dengan predikat A </div>

    }
}

?>

<br>
<br>

<?php

include "footer.php";

?>
