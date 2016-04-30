<?php
include "include/koneksi.php";

$nama		= $_POST["nama"];
$no_anggota	= $_POST["no_anggota"];
$username	= $_POST["username"];
$password 	= $_POST["password"];
$kelas 		= $_POST["kelas"];
$no_telepon	= $_POST["no_telepon"];
$jk			= $_POST["jk"];

if(empty($_POST["nama"]) || empty($_POST["no_anggota"]) || empty($_POST["username"]) || 
   empty($_POST["password"]) || empty($_POST["kelas"]) || empty($_POST["no_telepon"]) || empty($_POST["jk"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=register.php">';
}else{
	$sql = "INSERT INTO siswa (id_siswa, no_anggota, nama, username, password, kelas, no_tlp, jenis_kelamin) 
			VALUES (NULL, '$no_anggota', '$nama', '$username', '".md5($password)."', '$kelas', '$no_telepon', '$jk')";
	$kueri = mysql_query($sql);
	echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=register.php">';
}
?>
