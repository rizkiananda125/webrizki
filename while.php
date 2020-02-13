<!-- perulangan while -->

<?php

$nilai_awal=1;

//konidisi (while)

while($nilai_awal<=10){

//statement atau output

    echo "$nilai_awal<br>"; 
    $nilai_awal++;
}
?>


<!--Rumus perulangan while:

 init_awal;
while (kondisi){
    statement-yang diulang;
    counter;

} -->


<!-- menggunakan perulangan do while -->
<hr>

<?php

$nilai_awal=1;

do{

    echo"$nilai_awal <br>";
    $nilai_awal++;

} while ($nilai_awal<=10);

?>

<!-- contoh perulangan gambar -->
<?php

$gambar=1;

do{
 echo"<img src= html/gambar/KAHOLOGO.png'width='30>'<br>";
    $gambar++;

}while ($gambar<=10);

?>



