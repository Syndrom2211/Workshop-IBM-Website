<?php
include "../include/koneksi.php";

$deadline	= $_POST["deadline"];
$id_buku	= $_POST["id_buku"];
$id_siswa	= $_POST["id_siswa"];

if(empty($_POST["deadline"]) || empty($_POST["id_buku"]) || empty($_POST["id_siswa"])){
	echo "<script language='javascript'>alert('Gagal pinjam');</script>";
	echo '<meta http-equiv="refresh" content="0; url=dafbuk.php">';
}else{
	$sql = "INSERT INTO peminjaman (id_peminjaman, deadline, id_buku, id_siswa) 
			VALUES (NULL, '$deadline', '$id_buku', '$id_siswa')";
	$kueri = mysql_query($sql);
	echo "<script language='javascript'>alert('Berhasil pinjam');</script>";
	echo '<meta http-equiv="refresh" content="0; url=dafbuk.php">';
}
?>
