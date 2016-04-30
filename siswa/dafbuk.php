<?php
session_start();
?>
<html>
<head>
    <?php
    include "../include/header.php";
    ?>
    <script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });
    </script>
</head>
<body>
    Halaman Siswa
    <fieldset>
            <?php
                include "../include/siswa_link.php";
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
                    <th>Aksi</th>
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
                <td><a href="dafbuk.php?pinjam=<?php echo $hasil['id_buku']; ?>">Pinjam</a></td>
            </tr>
            <?php
            $i++;
            }

            if(isset($_GET['pinjam']) != ""){
                $id_buku = $_GET['pinjam'];
            ?>
            <form action="proses-pinjam.php" method="POST">
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>Deadline Pinjam</td>
                    <td>:</td>
                    <td><input id="datepicker" type="text" class="form-control" name="deadline" placeholder="Sampai tanggal ?" /></td>
                    <td><input type="hidden" class="form-control" name="id_buku" value="<?php echo $id_buku; ?>" /></td>
                    <td><input type="hidden" class="form-control" name="id_siswa" value="<?php echo $_SESSION['id_siswa']; ?>" /></td>
                </tr>
                <tr>
                    <td><input class="btn btn-info" type="submit" value="Ubah" /></td>
                </tr>
                </table>
            </form>
            </tbody>
            <?php
            }
            ?>
        </table>
        <ul class="pagination">
        <?php
        $res = mysql_query("SELECT * FROM buku");
        $hitung = mysql_num_rows($res);
        $jum = $hitung/5;
        $jumlah = ceil($jum);
        for($i=1; $i<=$jumlah; $i++){
            echo "<li><a href='dafbuk.php?halaman=$i'>".$i."</a></li>";
        }
        ?>
        </ul>
    </div>
</body>
</html>