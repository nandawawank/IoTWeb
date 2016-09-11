<?php

	include "inc/koneksi.php";
?>

<?php
	
	$username = $_POST['txt_username'];
	$password = $_POST['txt_password'];
	$nama = $_POST['txt_nama-team'];
	$level = $_POST['txt_level'];

	if(empty($username)){

		echo "Anda Belum Mengisi Username />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($password)){

		echo "Anda Belum Mengisi Password />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($nama)){

		echo "Anda Belum Mengisi Password />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($level)){

		echo "Anda Belum Mengisi Password />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		$sql = mysql_query("insert into user (username, password, nama_team, level) values ('$username', '$password', '$nama', '$level')") or die(mysql_error());
		header("location:tambah-admin.php");
	}
?>