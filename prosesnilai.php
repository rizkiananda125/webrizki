<!-- codingan HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pengolahan form</title>
</head>
<body>
    <form action="" method="post">
        <label>Nama</label>
        <input type="name" name="nama"> <br>

        <label>NIM</label>
        <input type="number" name="nim"> <br>

        <label>Jurusan</label>
        <input type="direction" name="jurusan"> <br>

        <label>Nilai Harian</label>
        <input type="number" name="nilai_harian"> <br>

        <label>Nilai Quiz</label>
        <input type="number" name="nilai_quiz"> <br>

        <label>UTS</label>
        <input type="number" name="nilai_uts"> <br>

        <label>UAS</label>
        <input type="number" name="nilai_uas"> <br>

        <input type="submit" name="periksa_nilai" value="check">

    </form>
    <br>   
</body>
</html>


<!-- codingan PHP -->

<?php

$nama="";
$nim="";
$jurusan="";

// nilai


if (isset($_POST['periksa_nilai']) == "check"){
    $name=$_POST['nama'];
    $nim=$_POST['nim'];
    $direction=$_POST['jurusan'];
    $harian=$_POST['nilai_harian'];
    $uts=$_POST['nilai_uts'];
    $uas=$_POST['nilai_uas'];
    $quiz=$_POST['nilai_quiz'];

    $hasil= $harian*10/100 + $uts*35/100 + $uas*40/100 + $quiz*15/100;

    if ($hasil<=50){
            echo " nama $nama dengan $nim dan $jurusan $hasil nilainya E";
            
    }elseif ($hasil<=65){
            echo " nama $nama dengan $nim dan $jurusan $hasil nilainya D";
            
    }elseif ($hasil<=70){
            echo "nama $nama dengan $nim dan $jurusan $hasil nilainya C";
            
    }elseif ($hasil<=83){
            echo "nama $nama dengan $nim dan $jurusan $hasil nilainya B";
            
    }elseif ($hasil>=100){
            echo "nama $nama dengan $nim dan $jurusan $hasil nilainya A";
    }else{
        echo "tidak lulus";
    }
}
    
// echo "nama $name dengan NIM $nim dan Jurusan $direction mendapatkan 
// nilai $hasil";

?>

