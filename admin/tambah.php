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
    <form action="proses-tambah.php" method="POST">
        <table cellpadding="0" cellspacing="0">
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="judul_buku" /></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="pengarang" /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="kategori" /></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="penerbit" /></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="tahun" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-info" type="submit" value="Tambah" /></td>
        </tr>
        </table>
    </form>
</body>
</html>