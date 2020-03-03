

<!-- style bootstrap -->





<!-- close style -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My_Biodata</title>


</head>
<body>

        <form action="proses/proses_biodata.php" method="POST" enctype="multipart/form-data">

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Nama:</label> <br><br>
                    <input type="name" name="nama"> <br><br>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Email:</label> <br><br>
                <input type="email" name="email" placeholder="email@gmail.com"> <br><br>
            </div>
        </div>
        
        
        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Alamat:</label> <br><br>
                <input type="textarea" name="alamat"> <br><br>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Tanggal Lahir:</label> <br><br>
                <input type="date" name="tanggal_lahir"> <br><br>
        </div>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Tempat Lahir:</label> <br><br>
                <input type="text" name="tempat_lahir"> <br><br>
        </div>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Jenis Kelamin:</label> <br><br>
                
                <input type="radio" name="jenis_kelamin" value= "pria"> pria <br><br>
                <input type="radio" name="jenis_kelamin" value= "wanita"> wanita <br><br>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>No Hp:</label>
                <input type="number" name="no_hp"> <br><br>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Hobby:</label> <br><br>
                 
                <input type="checkbox" name="hobby" value="bola">Bola<br><br>
                <input type="checkbox" name="hobby" value="membaca">Membaca<br><br>
                <input type="checkbox" name="hobby" value="mancing">Mancing<br><br>
        </div>

        <div class="form-group row">
            <div class="col-sm-10"> 
                <label>Upload Foto:</label>
                <input type="file" name="foto"> <br><br>
        </div>
        
        <input type="submit" class="btn btn-primary" name="input"  value="input">
    
    </form>
    <br>   
</body>
</html>

