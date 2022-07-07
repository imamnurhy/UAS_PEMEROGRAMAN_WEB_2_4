<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$jenis_zakat_id = $_POST['jenis_zakat_id'];
	$nominal        = $_POST['nominal'];
	$nama_lengkap   = $_POST['nama'];
	$no_telepon     = $_POST['telpn'];
	$email          = $_POST['email'];
	$bank           = $_POST['bank'];
	$rek_bank       = $_POST['rek_bank'];


	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO pembayaran_zakat(jenis_zakat_id,
													 nominal,
													 nama,
													 telpn,
													 email,
													 bank,
													 rek_bank)	
											  VALUES('$jenis_zakat_id',
													 '$nominal',
													 '$nama_lengkap',
													 '$no_telepon',
													 '$email',
													 '$bank',
													 '$rek_bank')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: dashboard.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: dashboard.php?alert=1');
	}
}
