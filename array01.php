<?php

include "header.php"

?>

<br>


<!-- content -->
<form action="" method="POST">
<input type="text" name="mangga">
<input type="submit" name="tambah" value="tampil">



</form>


<?php

    if(isset($_POST['tambah'])){
        $buah=$_POST['mangga'];

    $arraybuah=[
      "mangga",
      "jambu",
      "kelapa"

    ];

    if($buah=$arraybuah[0]){
        echo"$arraybuah[1]";

    }
  }


  ?>

<?php

//metode pertama

$buah= array ("mangga", "Apel", "Pisang", "jeruk");
echo"<br> $buah[2]";


//metode kedua

$buahaja=[
    "mangga",
    "Apel",
    "Pisang",
    "Jeruk"
    
];

echo"<br>$buahaja[0]";

// metode ketika

$buah3=array();
$buah3[]="mangga";
$buah3[]="kelapa";
$buah3[]="jambu";
$buah3[]="apel";

echo "<br>$buah3[0]";

?>

<?php

include "footer.php";

?>