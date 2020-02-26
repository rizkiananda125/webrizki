

<?php
    include'header.php';
?>

<?php
include 'koneksi/koneksi.php';


$id= $_GET['id_mahasiswa'];

$show=mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_mahasiswa='$id'") or die (mysqli_error(''));

if(mysqli_num_rows($show)==0){

    echo'
        <script>window.history.back()</script>
    ';
}else{
    $total=mysqli_fetch_array($show);
}


?>

<!-- tag pemanggilan -->

<div class="container">
        <div class="row">
            <div class="col-0">

            <section class="forms-section">
            <h1 class="section-title" style="font-size: 43px; letter-spacing: 2px; color: #fff;
            left: -10px; position: relative;">UPDATE DATA</h1>

                <form class="form form-login" action="proses/proses_updatemahasiswa.php" method="GET" 
                style="position: relative;top: 16px;left: 193px;">
                <fieldset>
                    <input type="text" hidden name="id_mahasiswa" class="form-control" value="<?php echo $id;?>">

                    <div class="container">
    <form action="proses/proses_edit_nilai.php" method="GET">
        <input type="text" hidden name="id_mahasiswa" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="nama_mahasiswa">Nama</label>
                <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" placeholder="Example input placeholder" value="<?php echo $total['nama_mahasiswa']?>">
            </div>

            <div class="form-group">
                <label for="nim_mahasiswa">NIM</label>
                <input type="text" name="nim_mahasiswa" class="form-control" id="nim_mahasiswa" placeholder="Another input placeholder" value="<?php echo $total['nim_mahasiswa']?>">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Another input placeholder" value="<?php echo $total['jurusan']?>">
            </div>

            <div class="form-group">
                <label for="uts">Uts</label>
                <input type="text" name="uts" class="form-control" id="uts" placeholder="Another input placeholder" value="<?php echo $total['uts']?>">
            </div>

            <div class="form-group">
                <label for="uas">Uas</label>
                <input type="text" name="uas" class="form-control" id="uas" placeholder="Another input placeholder" value="<?php echo $total['uas']?>">
            </div>
            <div class="form-group">
                <label for="quiz">Quiz</label>
                <input type="text" name="quiz" class="form-control" id="quiz" placeholder="Another input placeholder" value="<?php echo $total['quiz']?>">
            </div>
            <div class="form-group">
                <label for="harian">Harian</label>
                <input type="text" name="harian" class="form-control" id="harian" placeholder="Another input placeholder" value="<?php echo $total['harian']?>">
            </div>


            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo $total['jenis_kelamin']?>">

                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
		    </select>
		    </div>

                </form>
            </div>
        </div>
    </div>
            <input type="submit" style="top: -11px; left: 379px; position: relative;" 
            name= "update" class="btn btn-danger" value= "update">
        </fieldset>