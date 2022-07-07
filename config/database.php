<?php
// deklarasi parameter koneksi database
$server   = "mysql";
$username = "root";
$password = "root";
$database = "app_uas";

// koneksi database
$db = new mysqli($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . $db->connect_error);
}
