<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div id="login">
        <h3>Register Siswa</h3>
        <form action="proses-register.php" method="POST">
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="text" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="text" name="no_anggota" placeholder="No.Anggota">
            </div>
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="text" name="kelas" placeholder="Kelas">
            </div>
            <div class="form-group">
                <input style="margin:20px;width:200px;" class="form-control" type="text" name="no_telepon" placeholder="No.Telepon">
            </div>
                <input style="margin-left:20px;" class="inputs-r" type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
                <input style="margin-left:20px;" class="inputs-r" type="radio" name="jk" value="Perempuan"> Perempuan<br>
                <input style="margin:20px;width:100px;" class="btn btn-success" type="submit" name="submit" value="Register">                
        </form>
        <a href="index.php"><button style="margin:20px;width:100px;" class="btn btn-default">Kembali</button></a>
    </div>
</body>
</html>