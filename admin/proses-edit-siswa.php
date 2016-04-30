<?php
include "../include/koneksi.php";

$id_siswa		= $_POST['id_siswa'];
$no_anggota		= $_POST['no_anggota'];
$nama			= $_POST['nama'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$kelas			= $_POST['kelas'];
$no_tlp			= $_POST['no_tlp'];
$jenis_kelamin	= $_POST['jenis_kelamin'];

if(empty($_POST["no_anggota"]) || empty($_POST["nama"]) || 
	empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["kelas"]) || empty($_POST["no_tlp"]) || empty($_POST["jenis_kelamin"])){
	echo "<script language='javascript'>alert('Gagal di edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=lihat_siswa.php">';
}else{
	$edit	= "UPDATE siswa SET no_anggota='$no_anggota', nama='$nama',
			   username='$username', password='".md5($password)."',
			   kelas='$kelas', no_tlp='$no_tlp', jenis_kelamin='$jenis_kelamin' WHERE siswa.id_siswa = $id_siswa";
	$query 	= mysql_query($edit);
	echo "<script language='javascript'>alert('Berhasil di edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=lihat_siswa.php">';
}
?>
