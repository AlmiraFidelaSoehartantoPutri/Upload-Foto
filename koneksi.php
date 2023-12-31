// koneksi.php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "struktur_tabel_siswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
?>