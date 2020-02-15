<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pengolahan form</title>
</head>
<body>
    <form action="" method="POST">
        Nama:<input type="name" name="nama"> <br>

        Email: <input type="email" name="email" placeholder="email@gmail.com"> <br>

        Jenis kelamin: <input type="radio" name="jenis_kelamin" value= "laki-laki">laki-laki <br>

        <input type="radio" name="jenis_kelamin" value= "perempuan"> perempuan <br>

        Alamat: <input type="textarea" name="alamat"> <br>

        Tanggal lahir: <input type="date" name="tanggal_lahir"> <br>

        Tempat lahir : <input type="text" name="tempat_lahir"> <br>

        No.hp: <input type="number" name="no_hp"> <br>

        Hobby: <input type="checkbox" name="hobby" value="mancing"> <br>
                <input type="checkbox" name="hobby" value="bola"> <br>
                <input type="checkbox" name="hobby" value="membaca"> <br>
                <input type="checkbox" name="hobby" value="mancing"> <br>

        <input type="submit" name="input" value="send">
    </form>
    <br>   
</body>
</html>

<!-- coding php -->

<?php


if (isset($_POST ['input'])){
    $name=$_POST['nama'];
    $email=$_POST['email'];
    $radio=$_POST['jenis_kelamin'];
    $textarea=$_POST['alamat'];
    $date=$_POST['tanggal_lahir'];
    $text=$_POST['tempat_lahir'];
    $number=$_POST['no_hp'];
    $checkbox=$_POST['hobby'];

    echo "nama anda adalah:$name <br>";
    echo "email anda adalah:$email <br>";
    echo "jenis kelamin anda adalah:$radio <br>";
    echo "alamat anda adalah:$textarea <br>";
    echo "tanggal lahir anda adalah:$date <br>";
    echo "tempat lahir anda adalah:$text <br>";
    echo "nomor hp anda adalah:$number <br>";
    echo "hobby anda adalah:$checkbox <br>";
    
}

?>

