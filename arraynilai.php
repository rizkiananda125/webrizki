<?php
$arrnilai=array (
    "ani"=>80, 
    "otim" =>90, 
    "ana"=>75, 
    "budi"=>85,
);

// echo "menampilkan isi array dengan foreach:<br>";

foreach ($arrnilai as $nama=> $nilai){
    echo "nilai $nama=$nilai <br>";
}

reset ($arrnilai);

// echo "menampilkan isi array dengan while dan list:<br>";

while (list($nama,$nilai)=each($arrnilai)){
    echo "nilai $nama=$nilai<br>";
}

?>


<!-- mencetak struktur data array dengan warna -->

<?php

$arrwarna=array ("blue","black","red","yellow","green");
$arrnilai=array ("ani"=>80, "otim"=>90, "ana"=>75, "budi"=> 85);

echo "<pre>";
print_r ($arrwarna);
echo "<br>";
print_r ($arrnilai);
echo "</pre>";

?>