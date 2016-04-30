<?php
include "include/koneksi.php";
include "login_s.php";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysql_query("SELECT * FROM siswa WHERE username='$username' && password='".md5($password)."'");
	$num = mysql_num_rows($sql);
	$num2 = mysql_fetch_array($sql);
	if($num==1){
		$_SESSION['id_siswa'] = $num2['id_siswa'];
		$_SESSION['siswa'] = $username;
		$_SESSION['password'] = $password;
		echo "<script language='javascript'>alert('Login Berhasil')</script>";
		echo '<meta http-equiv="refresh" content="0; url=siswa/index.php">';
	}else{
		echo "<script language='javascript'>alert('Login Gagal')</script>";
		echo '<meta http-equiv="refresh" content="0; url=login_s.php">';
	}
}
?>
