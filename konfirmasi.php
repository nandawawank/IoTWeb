<?php
	
	include "inc/koneksi.php";
	include "Config/fungsi_waktu.php";
?>

<?php
	
	$nama = $_POST['txt_nama'];
	$jumlah = $_POST['txt_jumlah'];
	$oleh = implode(",",$_POST['wakil']);
	$tema = $_POST['pilihan_tema'];
	$konfirmasi = trim($_POST['konfirmasi']);

	if(empty($nama)){

		echo "Anda Belum Mengisi Nama Team />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($jumlah)){

		echo "Anda Belum Mengisi Jumlah Anggota Team Anda />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($oleh)){

		echo "Anda Belum Memilih Identitas Pengirim Konfirmasi />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($tema)){

		echo "Anda Belum Memilih Tema Team Anda />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($konfirmasi)){

		echo "Anda Belum Mengisi Konfirmasi Kehadiran Anda />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("insert into kehadiran(nama_team, jumlah, konfirmasi_oleh, tema_team, keterangan, tanggal_konfirmasi) values ('$nama', '$jumlah', '$oleh', '$tema', '$_POST[konfirmasi]', '$tanggal_sekarang')") or die (mysql_error());
		header("location:respon-page.php");
	}
?> 