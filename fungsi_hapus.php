<?php

	include "inc/koneksi.php";
?>

<?php
	
	$username = $_POST['txt_username'];
	$nama = $_POST['txt_nama-team'];

	if(empty($username)){

		echo "Anda Belum Mengisi Username />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("delete from user where username = '$username'") or die(mysql_error());
		mysql_query("delete from kehadiran where nama_team = '$username'") or die (mysql_error());
		header("location:hapus-admin.php");
	}
?>