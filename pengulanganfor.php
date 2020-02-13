<!-- pengulangan kata -->

<?php

$nama="Rizki Ananda";

for ($i=0; $i<=10; $i++){

    echo "hello $nama <br>";

}


?>

<br>
<br>

<hr>

<!-- pengulangan angka -->

<?php

for ($i=1;$i<=10;$i+=2){
    echo" Angka ganjil adalah $i <br>";
}

?>

<br>
<br>

<hr>

<?php

for ($i=2;$i<=10;$i+=2){
    echo" Angka genap adalah $i <br>";
}

?>

<br>
<br>
<hr>

<!-- contoh 1 -->
<?php

for ($i=1;$i<=10; $i++){
    echo "$i";
}
echo "<br></br>";

?>

<hr>
<!-- contoh 2 -->

<?php

for ($i=1; ; $i++){
    if ($i>10){
    break;
    }
    echo "$i";
}

echo "<br></br>";

?>

<hr>

<!-- contoh 3 -->

<?php

$i=1;
for (;;){
    if ($i>10){
    break;
    }
    echo "$i";
    $i++;

}echo "<br></br>";

?>

<hr>

<?php

for ($i=1; $i<=10; print "$i", $i++);

?>

<br>
<br>
<hr>

