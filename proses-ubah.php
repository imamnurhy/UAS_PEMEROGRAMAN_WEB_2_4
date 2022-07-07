<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id             = $_GET['id'];
	$jenis_zakat_id = $_POST['jenis_zakat_id'];
	$nominal        = $_POST['nominal'];
	$nama_lengkap   = $_POST['nama'];
	$no_telepon     = $_POST['telpn'];
	$email          = $_POST['email'];
	$bank           = $_POST['bank'];
	$rek_bank       = $_POST['rek_bank'];

	// perintah query untuk mengubah data pada tabel is_siswa
	$query = mysqli_query($db, "UPDATE pembayaran_zakat SET 
														jenis_zakat_id 	= '$jenis_zakat_id',
														nominal 		= '$nominal',
														nama 			= '$nama_lengkap',
														telpn 			= '$no_telepon',
														email 			= '$email',
														bank 			= '$bank'
														rek_bank 		= '$rek_bank'
												  WHERE id 				= '$id'");

	// cek query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil update data
		header('location: dashboard.php?alert=3');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: dashboard.php?alert=1');
	}
}
