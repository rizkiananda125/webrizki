<?php
include "header.php";
include "koneksi/koneksi.php";
?>

<br>

<form action="proses/proseslogin.php" method="POST">
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

<br>

<?php
include "footer.php";
?>


