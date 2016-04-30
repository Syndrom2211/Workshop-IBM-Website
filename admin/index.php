<?php
session_start();
if(isset($_SESSION['admin'])){
?>
<html>
<head>
    <?php
    include "../include/header.php";
    ?>
</head>
<body>
    Halaman Administrator
    <fieldset>
                <?php
                include "../include/adm_link.php";
                ?>
    </fieldset>
    <br/>
    Selamat datang kembali wahai admin!
</body>
</html>
<?php
}else{
    header("location:../login.php");
}
?>
