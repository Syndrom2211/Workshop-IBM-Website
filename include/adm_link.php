            <?php
            $link 		= 1;
            $admin		= "index.php";
            $dafbuk 	      = "dafbuk.php";
            $tambah 	      = "tambah.php";
            $peminjaman	      = "peminjaman.php";
            $siswa            = "lihat_siswa.php";
            $logout		= "logout.php";
            

            if($link == TRUE){
            	echo '<a href="'.$admin.'">Halaman Depan</a> | ';
            	echo '<a href="'.$dafbuk.'">Daftar Buku</a> | ';
            	echo '<a href="'.$peminjaman.'">Daftar Peminjaman</a> | ';
                  echo '<a href="'.$siswa.'">Daftar Siswa</a> | ';
            	echo '<a href="'.$tambah.'">Tambah Buku</a> | ';
            	echo '<a href="'.$logout.'">Logout</a>';
            }else{
            	echo 'Link tidak tersedia.';
            }
            ?>