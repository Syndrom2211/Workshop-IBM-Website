<?php
include "include/koneksi.php";
include "login.php";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysql_query("SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'");
	$num = mysql_num_rows($sql);
	if($num==1){
		$_SESSION['admin'] = $username;
		$_SESSION['password'] = $password;
		echo "<script language='javascript'>alert('Login Berhasil')</script>";
		echo '<meta http-equiv="refresh" content="0; url=admin/index.php">';
	}else{
		echo "<script language='javascript'>alert('Login Gagal')</script>";
		echo '<meta http-equiv="refresh" content="0; url=login.php">';
	}
}
?>
