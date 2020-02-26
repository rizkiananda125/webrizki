<style>
*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	background: radial-gradient(#0575E6,#021B79);
}

.forms-section {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.section-title {
	font-size: 32px;
	letter-spacing: 1px;
	color: #fff;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #999;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: hidden;
	min-width: 260px;
	margin-top: 50px;
	padding: 30px 25px;
  border-radius: 5px;
	transform-origin: top;
}

.form-login {
	animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);
}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: hidden;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 20px;
}

.input-block label {
	font-size: 14px;
  color: #a1b4b4;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 16px;
	line-height: 40px;
	color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: #fbfdff;
	background: #a7e245;
	transform: translateX(-30%);
}

.btn-signup {
	color: #a7e245;
	background: #fbfdff;
	box-shadow: inset 0 0 0 2px #a7e245;
	transform: translateX(30%);
}

</style>

<!-- koneksi database -->

<?php

include "header.php";
include "koneksi/koneksi.php";

?>

<br>
        
<!-- tag html dinamis -->

<section class="forms-section">
<h1 class="section-title" style="font-size: 43px; letter-spacing: 2px; color: #fff;
    left: -10px; position: relative;">Nilai Mahasiswa</h1>

    <div class="forms">
    <div class="form-wrapper is-active">

    <button type="button" class="switcher switcher-login" style="left: -99px;">
        yuk check!
        <span class="underline"></span>
    </button>

    <!-- tag pemanggilan -->
    <div class="container">
        <div class="row">
            <div class="col-0">

                <form class="form form-login" action="proses/prosesmahasiswa.php" method="POST" 
                style="position: relative;top: 16px;left: 193px;">
                <fieldset>

                    <div class="input-block">
                        <label for="login-nama_mahasiswa">Nama Mahasiswa</label>
                        <input id="login-nama_mahasiswa" type="text" name="nama_mahasiswa" required>
                    </div>

                    <div class="input-block">
                        <label for="login-nim_mahasiswa">NIM</label>
                        <input id="login-nim_mahasiswa" type="number" name="nim_mahasiswa" required>
                    </div>

                    <div class="input-block">
                        <label for="login-jurusan">Jurusan</label>
                        <input id="login-jurusan" type="text" name="jurusan" required>
                    </div>

                    <div class="input-block">
                        <label for="login-uts">Uts</label>
                        <input id="login-uts" type="number" name="uts" required>
                    </div>

                    <div class="input-block">
                        <label for="login-uas">Uas</label>
                        <input id="login-uas" type="number" name="uas" required>
                    </div>

                    <div class="input-block">
                        <label for="login-quiz">Quiz</label>
                        <input id="login-quiz" type="number" name="quiz" required>
                    </div>

                    <div class="input-block">
                        <label for="login-harian">Harian</label>
                        <input id="login-harian" type="number" name="harian" required>
                    </div>

                    <div class="input-block">
                        <label for="signup-jenis_kelamin">Jenis Kelamin</label>
                        <select type="text" name="jenis_kelamin" id="signup-jenis_kelamin">

                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
		            </select>
		            </div>

                </form>
            </div>
        </div>
    </div>
            <input type="submit" style="top: -11px; left: 379px; position: relative;" 
            name= "periksa" class="btn btn-success" value= "input">
        </fieldset>


    <?php

    include "koneksi/koneksi.php";

    $tampilan_data=mysqli_query($koneksi,'SELECT * FROM nilai')or die(mysqli_error(''));

    while($total=mysqli_fetch_array($tampilan_data)){

        if($total['total']<=50){
            echo"
                <div class='alert alert-secondary' role='alert'>
                nama anda ".$total['nama_mahasiswa'].", NIM ".$total['nim_mahasiswa'].", Jurusan ".$total['jurusan'].", nilai ".$total['total'].", predikat ".$total['predikat'].", 
                maaf anda tidak lulus! 

                <a href='update_mahasiswa.php?id_mahasiswa=".$total['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                </div> 
                ";

        }elseif($total['total']<=65){
            echo"
                <div class='alert alert-Jurusanger' role='alert'>
                nama anda ".$total['nama_mahasiswa'].", NIM ".$total['nim_mahasiswa'].", Jurusan ".$total['jurusan'].", nilai ".$total['total'].", predikat ".$total['predikat'].", 
                maaf anda tidak lulus!
                
                <a href='update_mahasiswa.php?id_mahasiswa=".$total['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>

                </div>
                ";
                
        }elseif($total['total']<=70){
            echo"
                <div class='alert alert-warning' role='alert'>
                nama anda ".$total['nama_mahasiswa'].", NIM ".$total['nim_mahasiswa'].", Jurusan ".$total['jurusan'].", nilai ".$total['total'].", predikat ".$total['predikat'].", 
                selamat anda lulus!
                
                <a href='update_mahasiswa.php?id_mahasiswa=".$total['id_mahasiswa']." 'type='submit' class='btn btn-info'>Edit</a>

                </div>
                ";

        }elseif($total['total']>=80){
            echo"
                <div class='alert alert-warning' role='alert'>
                nama anda ".$total['nama_mahasiswa'].", NIM ".$total['nim_mahasiswa'].", Jurusan ".$total['jurusan'].", nilai ".$total['total'].", predikat ".$total['predikat'].", 
                selamat anda lulus!
                
                <a href='update_mahasiswa.php?id_mahasiswa=".$total['id_mahasiswa']." 'type='submit' class='btn btn-info'>Edit</a>
                </div>
                ";
        }elseif($total['total']<=90){
            echo"
                <div class='alert alert-success' role='alert'>
                nama anda ".$total['nama_mahasiswa'].", NIM ".$total['nim_mahasiswa'].", Jurusan ".$total['jurusan'].", nilai ".$total['total'].", predikat ".$total['predikat'].",
                selamat anda lulus!
                
                <a href='update_mahasiswa.php?id_mahasiswa=".$total['id_mahasiswa']." 'type='submit' class='btn btn-info'>Edit</a>
                
                </div>
                ";
            }
    }
    ?>