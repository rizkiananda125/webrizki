<?php
include "../koneksi/koneksi.php";

?>


<!-- proses isset -->

<?php

 if (isset($_POST['login'])){

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    //query

    $login=mysqli_query($koneksi,"select * from user where 
    username='$username' and password='$password'");

    // pengecekkan

    $cek=mysqli_num_rows($login);

    // menampilkan definisi data

    $data=mysqli_fetch_assoc($login);

    if($cek>0){
        if($data['level']=="penjual"){
            $_SESSION['username']=$data['username'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login';
        
        // pop up berhasil masuk

        echo "<script>
        window.location.href='../diskon.php';
        </script>";

        }elseif($data['level']=="pembeli"){
            $_SESSION['username']=$data['username'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login'; 

            // pop up berhasil masuk

                echo "<script>alert('data berhasil dimasukkan silahkan login')
                        window.location.href='../mahasiswa.php'
            </script>";
        
        // pop up jika tidak berhasil masuk

        }else{
            echo"maaf anda gagal masuk!";
        }

// pop up jika tidak berhasil masuk

}else{
    echo"maaf anda gagal masuk!";
}

}



