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
                    <th>No Anggota</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Kelas</th>
                    <th>No Telepon</th> 
                    <th>Jenis Kelamin</th>  
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
            $sql = mysql_query("SELECT * FROM siswa LIMIT $posisi,5");
            while($hasil = mysql_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $hasil['no_anggota']; ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['username']; ?></td> 
                <td><?php echo $hasil['password']; ?></td>
                <td><?php echo $hasil['kelas']; ?></td>
                <td><?php echo $hasil['no_tlp']; ?></td>
                <td><?php echo $hasil['jenis_kelamin']; ?></td>
                <td><a href="lihat_siswa.php?edit=<?php echo $hasil['id_siswa']; ?>
                       &no_anggota=<?php echo $hasil['no_anggota']; ?>
                       &nama=<?php echo $hasil['nama']; ?>
                       &username=<?php echo $hasil['username']; ?>
                       &password=<?php echo $hasil['password']; ?>
                       &kelas=<?php echo $hasil['kelas']; ?>
                       &no_tlp=<?php echo $hasil['no_tlp']; ?>
                       &jenis_kelamin=<?php echo $hasil['jenis_kelamin']; ?>">Edit</a></td>
                <td><a href="lihat_siswa.php?hapus=<?php echo $hasil['id_siswa']; ?>">Hapus</a></td>
            </tr>
            <?php
            $i++;
            }
            if(isset($_GET['hapus']) != ""){
                $hapus = mysql_query("DELETE FROM siswa WHERE id_siswa=".$_GET['hapus']."");
                if($hapus){
                    echo "<script language='javascript'>alert('Berhasil di hapus');</script>";
                    echo '<meta http-equiv="refresh" content="0; url=lihat_siswa.php">';
                }
            }
            if(isset($_GET['edit']) != ""){
                $id_siswa    = $_GET['edit'];
                $no_anggota = $_GET['no_anggota'];
                $nama  = $_GET['nama'];
                $username   = $_GET['username'];
                $password   = $_GET['password'];
                $kelas      = $_GET['kelas'];
                $no_tlp      = $_GET['no_tlp'];
                $jenis_kelamin      = $_GET['jenis_kelamin'];
            ?>
            <form action="proses-edit-siswa.php" method="POST">
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>No Anggota</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" class="form-control" name="id_siswa" value="<?php echo $id_siswa; ?>" />
                        <input type="text" class="form-control" name="no_anggota" value="<?php echo $no_anggota; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" /></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="username" value="<?php echo $username; ?>" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="password" value="<?php echo $password; ?>" /></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="kelas" value="<?php echo $kelas; ?>" /></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="no_tlp" value="<?php echo $no_tlp; ?>" /></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" /></td>
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
        $res    = mysql_query("SELECT * FROM siswa");
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