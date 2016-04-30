<?php
session_start();
if(isset($_SESSION['siswa'])){
?>
<html>
<head>
    <?php
    include "../include/header.php";
    ?>
</head>
<body>
    Halaman Siswa
    <fieldset>
                <?php
                include "../include/siswa_link.php";
                ?>
    </fieldset>
    <br/>
    Selamat datang siswa!
</body>
</html>
<?php
}else{
    header("location:../login_s.php");
}
?>