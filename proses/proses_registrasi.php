<?php
include '../koneksi/koneksi.php';


if(isset($_POST['registrasi'])){
    $id_user=uniqid();
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $level=$_POST['level'];

// query
    $input_query=mysqli_query($koneksi,"insert into user values('$id_user','$username',
    '$password','$email','$jenis_kelamin','$level')") or die
    (mysqli_error($input_query));

// pengecekkan

if($input_query){
    echo"
        <script>alert('data berhasil dimasukkan silahkan login')
            window.location.href='../tampilanlogin.php'
        </script>";
    }
}
?>