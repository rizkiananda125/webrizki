<?php
include "header.php";
?>

<br>

<form action="" method="POST">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" placeholder="masukkan username">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" placeholder="masukkan password">
        </div>

        <input type="submit" name= "login" value= "login">

</form>
</html>

<!-- proses isset -->

<?php

if (isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

// proses if, else if, dan else


    if($username=='admin'&& $password=='admin123'){
        header('location:mahasiswa.php');

    }else if($username=='siswa'&& $password=='siswa123'){
        echo "<script>
        alert(window.location.href='diskon.php');
        </script>"; 

    }else{
        echo "login anda gagal";

    }

}

?>

<?php
include "footer.php";
?>


