<?php
include "../include/koneksi.php";

$id_buku		= $_POST['id_buku'];
$judul_buku		= $_POST['judul_buku'];
$pengarang		= $_POST['pengarang'];
$kategori		= $_POST['kategori'];
$penerbit		= $_POST['penerbit'];
$tahun			= $_POST['tahun'];

if(empty($_POST["judul_buku"]) || empty($_POST["pengarang"]) || 
	empty($_POST["kategori"]) || empty($_POST["penerbit"]) || empty($_POST["tahun"])){
	echo "<script language='javascript'>alert('Gagal di edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=dafbuk.php">';
}else{
	$edit	= "UPDATE buku SET judul_buku='$judul_buku', kategori='$kategori',
			   pengarang='$pengarang', penerbit='$penerbit',
			   tahun='$tahun' WHERE buku.id_buku = $id_buku";
	$query 	= mysql_query($edit);
	echo "<script language='javascript'>alert('Berhasil di edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=dafbuk.php">';
}
?>
