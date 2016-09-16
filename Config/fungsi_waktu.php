<?php
	
	include "inc/koneksi.php";
?>

<?php
	
	date_default_timezone_set('Asia/Jakarta');

	// Format dalam Seminggu
	$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	$sehari = date("w");
	$hari_ini = $seminggu[$sehari];

	// Format Waktu
	$tanggal_sekarang = date("Ymd");
	$tanggal_ini = date("d");
	$bulan_sekarang = date("m");
	$tahun_sekarang = date("Y");
	$jam_sekarang = date("H:i:s");
?>