<?php
include "../include/koneksi.php";
include "tambah.php";

$judul_buku	= $_POST["judul_buku"];
$pengarang	= $_POST["pengarang"];
$kategori	= $_POST["kategori"];
$penerbit 	= $_POST["penerbit"];
$tahun 		= $_POST["tahun"];

if(empty($_POST["judul_buku"]) || empty($_POST["pengarang"]) || empty($_POST["kategori"]) || 
   empty($_POST["penerbit"]) || empty($_POST["tahun"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambah.php">';
}else{
	$sql = "INSERT INTO buku (id_buku, judul_buku, kategori, pengarang, penerbit, tahun) 
			VALUES (NULL, '$judul_buku', '$kategori', '$pengarang', '$penerbit', '$tahun')";
	$kueri = mysql_query($sql);
	echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambah.php">';
}
?>
