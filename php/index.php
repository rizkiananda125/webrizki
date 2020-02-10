<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpawal</title>
</head>
<body>

<?php

    $a=10;
    $b=20;
    function myTest(){
global $a;
global $b;
    
    echo ($a)+($b);
    }
myTest();

?>

<?php

    global$a,$b;
    
    $a="abc";
    $b="Rizki Ananda";

    echo $GLOBALS["a"]="abc";
    echo $GLOBALS["b"]="Rizki Ananda";

?>

</body>
</html>


