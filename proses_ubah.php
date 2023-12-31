<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];

$query = "UPDATE siswa SET nama='$nama' WHERE id=$id";
mysqli_query($koneksi, $query);

header("location:index.php");
?>
