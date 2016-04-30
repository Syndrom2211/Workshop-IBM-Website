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
    <table class="table">
            <thead>
               <tr>
                    <th>Deadline</th>  
                    <th>Nama Buku</th>
                    <th>Nama Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            include "../include/koneksi.php";
            $q = mysql_query("SELECT * FROM peminjaman,buku,siswa WHERE 
                              peminjaman.id_siswa = siswa.id_siswa AND 
                              peminjaman.id_buku = buku.id_buku");
            while($t = mysql_fetch_array($q)){
            ?>
                <tr>
                    <td><?php echo $t['deadline']; ?></td>
                    <td><?php echo $t['judul_buku']; ?></td>
                    <td><?php echo $t['nama']; ?></td>
                    <td><a href="peminjaman.php?hapus=<?php echo $t['id_peminjaman']; ?>">Hapus</a></td>
                </tr>
            <?php
            $i++;
            }
            if(isset($_GET['hapus']) != ""){
                $hapus = mysql_query("DELETE FROM peminjaman WHERE id_peminjaman=".$_GET['hapus']."");
                if($hapus){
                    echo "<script language='javascript'>alert('Berhasil di hapus');</script>";
                    echo '<meta http-equiv="refresh" content="0; url=peminjaman.php">';
                }
            }
            ?>
            </tbody>
        </table>
</body>
</html>