            <?php
            $link 		= 1;
            $siswa		= "index.php";
            $dafbuk 	      = "dafbuk.php";
            $logout		= "logout.php";
            

            if($link == TRUE){
            	echo '<a href="'.$siswa.'">Halaman Depan</a> | ';
            	echo '<a href="'.$dafbuk.'">Daftar Buku</a> | ';
            	echo '<a href="'.$logout.'">Logout</a>';
            }else{
            	echo 'Link tidak tersedia.';
            }
            ?>