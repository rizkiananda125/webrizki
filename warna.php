<?php

include "header.php";

?>

<br>

<!-- content -->

<form action="" method="POST">
<input type="text" name="warna">
<input type="submit" name="tambah" value="tampil">

<!-- submit: tombol mengantarkan name="" -->

</form>

<!-- proses if -->
<?php

    if(isset($_POST['tambah'])){
        $warna=$_POST['warna'];

// variable array

    $arraywarna=[

    
      "kelapa",
      "nanas",
      "semangka",

    ];

    if($warna==$arraywarna[0]){
        echo "<p style=color:red;>$warna</p>";

    }else if ($warna==$arraywarna[1]){
        echo "<p style=color:yellow;>$warna</p>";

    }else if($warna==$arraywarna[2]){
        echo "<p style=color:blue;>$warna</p>";
    }
    
    else{

    echo $warna;

    
    }
}

  ?>

<!-- tag footer -->
<?php

include "footer.php";

?>

