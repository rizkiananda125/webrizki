<?php
include "../koneksi/koneksi.php";
?>

<?php


if(isset($_POST['input'])){

    $id_biodata=uniqid();
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_hp=$_POST['no_hp'];
    $hobby=$_POST['hobby'];

    $nama_file=$_FILES['foto']['name'];

    $format=explode(".",$nama_file);
    $fileExtension= end($format);
    $nama_sementara=$_FILES['foto']['tmp_name'];
    $md5file = md5($nama_file). ".". $fileExtension;

    $lokasi_upload="../uploadgambar/";

    $fungsi_upload= move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

    $query=mysqli_query($koneksi,"INSERT into biodata2 Values('$id_biodata','$nama','$email','$alamat'
    ,'$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$no_hp','$hobby','$md5file')")
    or die(mysqli_error($query));


if($query){

echo "data berhasil diimput!<br>";

}else{
echo "data gagal diimput! <br>";
}

}

?>