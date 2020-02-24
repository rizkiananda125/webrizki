<?php
include '../koneksi/koneksi.php';


if(isset($_POST['registrasi'])){
    
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $level=$_POST['level'];

// query
    $input_query=mysqli_query(koneksi,"insert into user values('$id_user','$username',
    '$password','$email','$level')") or die
    (mysqli_error($input_query));

// pengecekkan

if($input_query>0){
    echo"
        <script>alert('data berhasil dimasukkan silahkan login')
            window.location.href='../tampilanlogin.php'
        </script>

}
}
