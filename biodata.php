<?php
$nim= "140401032";
$nama= "Rizki Ananda";
$umur=23;
$nilai= 82.25;
$status= TRUE;

echo "Nim : ".$nim. "<br>";
echo "Nama : $nama<br>";
print "umur: " . $umur; print"<br>";
printf ("Nilai : %.3f<br>", $nilai);

if ($status)
    echo "status : Aktif";
else
    echo "status : Tidak Aktif";
?>
<!-- cara membuat varible define -->

<?php
define ("nama", "Rizki Ananda");
define ("nilai",90);

//Nama= 'Muhammad";//akan menyebabkan error

echo "nama:".nama;
echo "nilai :".nilai;

?>

<br>
<br>

<!-- operator aritmatika -->
<?php
$gaji=1000000;
$pajak=0.25;
$thp=$gaji-($gaji*$pajak);
echo "gaji sebelum pajak= Rp. $gaji <br>";
echo "pajak=25% <br>";
echo"gaji yang dibawa pulang= Rp. $thp";

?>

<br>
<br>

<!-- cara membuat operator logika dan perbadingan dalam php -->

<?php

$a=5;
$b=4;

echo "$a==$b : ". ($a==$b);
echo "<br>$a !=$b : ". ($a !=$b);
echo "<br>$a>$b : ". ($a>$b);
echo "<br>$a<$b : ". ($a<$b);
echo "<br> ($a !=$b) && ($a>$b) :".(($a !=$b) && ($a.$b));
echo "<br> ($a !=$b) || ($a>$b) : ".(($a !=$b) || ($a>$b));
?>

<br>
<br>

<!-- membuat waktu -->

<?php

$hari="senin";

if($hari=="senin"){
    echo"upacara bendera";

}else if ($hari=="selasa"){
    echo"belajar";

}else{
    echo"hari jadinya kamu";
}

?>

<br>
<br>


<!-- nilai. php -->

<?php

$nim="140401032";
$nama="Rizki Ananda";
$jurusan="KPI";
$nilai=83;


if($nilai <=50){
    echo"grade yang diperoleh oleh $nama dengan nim $nim dari jurusan $jurusan adalah E";

}else if ($nilai <=65){
    echo"grade yang diperoleh oleh $nama dengan nim $nim dari jurusan $jurusan adalah D";

}else if ($nilai <=72){
    echo"grade yang diperoleh oleh $nama dengan nim $nim dari jurusan $jurusan adalah C";

}else if ($nilai <=83){
    echo"grade yang diperoleh oleh $nama dengan nim $nim dari jurusan $jurusan adalah B";


}else if ($nilai <=100){
    echo "grade yang diperoleh oleh $nama dengan nim $nim dari jurusan $jurusan adalah A";

}else{
    echo"$nama dengan nim $nim dari jurusan $jurusan dinyatakan tidak lulus";
}


?>