<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id_mahasiswa=uniqid();
    $nama_mahasiswa=$_GET['nama_mahasiswa'];
    $nim_mahasiswa=$_GET['nim_mahasiswa'];
    $jurusan=$_GET['jurusan'];
    $uts=$_GET['uts'];
    $uas=$_GET['uas'];
    $quiz=$_GET['quiz'];
    $harian=$_GET['harian'];

    $total=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);

                if($total<=50){
                    $predikat='E';
                    
                }else if($total<=65){
                    $predikat='D';

                }else if($total<=75){
                    $predikat='C';

                }else if($total<=85){
                    $predikat='B';

                }else if($total<=100 ||$hasil>100){
                    $predikat='A';
                }

    $update=mysqli_query($koneksi,"UPDATE nilai SET nama='$nama_mahasiswa',nim='$nim_mahasiswa',jurusan='$jurusan',uts='$uts',uas='$uas',
    quiz='$quiz',harian='$harian',total='$total', predikat='$predikat' WHERE id_mahasiswa='$id_mahasiswa'")or die(mysqli_error($update));

    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../tampilanmahasiswa.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../update_mahasiswa.php"
        </script>
    ';
    }
}
?> 