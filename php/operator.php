<!-- presentase diskon -->

<?php

$sepatu=100000;
$diskon=0.1;

$harga_net=$sepatu-($sepatu*$diskon);
echo "harga yang harus dibayar=Rp.$harga_net";

?>

<?php

$hal=11;
if($hal%2==0) echo"halaman genap";
else if($hal%3==2) echo"halaman utama";
else
echo"halaman ganjil";

?>

<?php

$a=10;
$b=5;
$c=7;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil="$kali";

if($hasil==80){
    echo"Nilai Anda Adalah $kali";

}else if($hasil==17){
    echo"Nilai Anda Adalah $tambah";

}else if($hasil==3){
    echo"Nilai Anda Adalah $kurang";

}else if($hasil==2){
    echo"Nilai Anda Adalah $bagi"; 
}


?>