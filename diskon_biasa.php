<!-- tag include php -->
<?php
    include "header.php";
?>

<!-- content -->


    <div class="container">
        <div class="row">
            <div class="col-6">
        
    <br>
    <br>

    <form action="" method="POST">
        <div class="form-group">
            <label> Nama Barang:</label>
            <input type="text" name="nama_barang" placeholder="masukkan nama barang">
        </div>

        <div class="form-group">
            <label>Harga Barang</label>
            <input type="number" name="harga" placeholder="masukan harga barang">
        </div>

        <input type="submit" name="tambah" class="btn btn-success" value="bayar">

    </form>
    </html>

<!-- proses php -->
    
    <?php

    if(isset($_POST['tambah'])){
        $nama_barang=$_POST['nama_barang'];
        $harga=$_POST['harga'];
        $diskon=20;

        if($harga>=400000){

            echo"
            <div class='alert alert-warning'
            role='alert'>

            harga diskon yang diperoleh sebesar Rp.", $harga*$diskon;
            echo"dan harga $nama_barang yang harus dibayar sebesar Rp.",$harga-($harga*$diskon);
            echo" </div>";

        }
    }
    
    ?>

            </div>
        
        </div>

    </div>

<?php
    include "footer.php";
?>


