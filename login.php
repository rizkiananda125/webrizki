<?php
$username= "Ahmad";
$pass= "000";

// variable awal

if($username == "Rizki Ananda" && $pass == "daimuda467"){
    echo"anda adalah manusia";

// variable kedua 

}else if ($username == "Ahmad" && $pass == "000"){
    echo "anda adalah robot";

// keadaan tidak ada
}else{
    echo"anda bukan manusia";
}



?>
 <br>
 <br>

<!-- memeriksa variable -->
<?php

$username="";
if(isset($username)){
    echo"variable tidak ada";
    
}else{
        echo"variable ada";
}

?>

<br>
<br>

<?php
$hari= "";
switch ($hari){
    case 'Minggu' : $hari = "minggu"; break;
    case 'Senin' : $hari = "minggu"; break;
    case 'Selasa' : $hari = "minggu"; break;
    case 'Rabu' : $hari = "minggu"; break;
    case 'Kamis' : $hari = "minggu"; break;
    case 'Jumat' : $hari = "minggu"; break;
    case 'Sabtu' : $hari = "minggu"; break;
    default      : $hari = "mungkin kiamat, hanya Allah yang tahu";
}
echo "hari ini <b>$hari</b>";

?>

<?php

$tahun = date ('Y');
$kabisat = ($tahun% 4==0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";

?>

<br>
<br>

<!-- nilai rata-rata -->
<?php

$nama="Rizki Ananda <br>";
echo $nama= "Rizki Ananda <br>"; 
$nim="140401032 <br>";
echo $nim= "140401032 <br>"; 

$harian=65*10/100;
$quiz= 70*15/100;
$uas= 85*40/100;
$uts= 60*35/100;

$nilai_rata_rata= ($harian+$quiz+$uas+$uts);
echo "nilai_total : ".$nilai_rata_rata. "<br>";

if ($nilai_rata_rata<=50){
    echo "nilainya E";

}else if ($nilai_rata_rata<=65){
    echo "nilainya D";

}else if ($nilai_rata_rata<=70){
    echo "nilainya C";

}else if ($nilai_rata_rata <=83){
    echo "nilainya B";

}else if ($nilai_rata_rata<=90){
    echo "nilainya A";

}else {
echo "nilai yang didapatkan $nama dengan $nim dinyatakan tidak lulus";
}
?>






