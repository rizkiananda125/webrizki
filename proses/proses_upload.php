<?php

if (isset($_POST['upload'])){

    $nama_file=$_FILES['foto']['name'];

    $format=explode(".",$nama_file);
    $fileExtension= end($format);
    $nama_sementara=$_FILES['foto']['tmp_name'];
    $md5file = md5($nama_file). ".". $fileExtension;

    $lokasi_upload="../upload_gambar/";

    $fungsi_upload= move_uploaded_file($nama_sementara,
    $lokasi_upload.$md5file);

if($fungsi_upload){

    echo "Upload File Berhasil!<br>";

}else{
    echo "data gagal diupload! <br>";
}

}

?>