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
    <div class="table-responsive">          
        <table class="table">
            <thead>
               <tr>
                    <th>No</th>  
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th> 
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "../include/koneksi.php";
            $halaman = @$_GET['halaman'];
            if(empty($halaman)){
                $posisi  = 0;
                $halaman = 1;
            }else{
                $posisi = ($halaman-1) * 5;
            }

            $i = $posisi + 1;
            $sql = mysql_query("SELECT * FROM buku LIMIT $posisi,5");
            while($hasil = mysql_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $hasil['judul_buku']; ?></td>
                <td><?php echo $hasil['kategori']; ?></td>
                <td><?php echo $hasil['pengarang']; ?></td> 
                <td><?php echo $hasil['penerbit']; ?></td>
                <td><?php echo $hasil['tahun']; ?></td>
                <td><a href="dafbuk.php?edit=<?php echo $hasil['id_buku']; ?>
                       &judul_buku=<?php echo $hasil['judul_buku']; ?>
                       &kategori=<?php echo $hasil['kategori']; ?>
                       &pengarang=<?php echo $hasil['pengarang']; ?>
                       &penerbit=<?php echo $hasil['penerbit']; ?>
                       &tahun=<?php echo $hasil['tahun']; ?>">Edit</a></td>
                <td><a href="dafbuk.php?hapus=<?php echo $hasil['id_buku']; ?>">Hapus</a></td>
            </tr>
            <?php
            $i++;
            }
            if(isset($_GET['hapus']) != ""){
                $hapus = mysql_query("DELETE FROM buku WHERE id_buku=".$_GET['hapus']."");
                if($hapus){
                    echo "<script language='javascript'>alert('Berhasil di hapus');</script>";
                    echo '<meta http-equiv="refresh" content="0; url=dafbuk.php">';
                }
            }
            if(isset($_GET['edit']) != ""){
                $id_buku    = $_GET['edit'];
                $judul_buku = $_GET['judul_buku'];
                $pengarang  = $_GET['pengarang'];
                $kategori   = $_GET['kategori'];
                $penerbit   = $_GET['penerbit'];
                $tahun      = $_GET['tahun'];
            ?>
            <form action="proses-edit.php" method="POST">
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" class="form-control" name="id_buku" value="<?php echo $id_buku; ?>" />
                        <input type="text" class="form-control" name="judul_buku" value="<?php echo $judul_buku; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="pengarang" value="<?php echo $pengarang; ?>" /></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="kategori" value="<?php echo $kategori; ?>" /></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="penerbit" value="<?php echo $penerbit; ?>" /></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>" /></td>
                </tr>
                <tr>
                    <td><input class="btn btn-info" type="submit" value="Ubah" /></td>
                </tr>
                </table>
            </form>
            <?php
            }
            ?>
            </tbody>
        </table>
        <ul class="pagination">
        <?php
        $res    = mysql_query("SELECT * FROM buku");
        $hitung = mysql_num_rows($res);
        $jum    = $hitung/5;
        $jumlah = ceil($jum);
        for($i=1; $i<=$jumlah; $i++){
            echo "<li><a href='dafbuk.php?halaman=$i'>".$i."</a></li>";
        }
        ?>
        </ul>
    </div>
</body>
</html>