<?php
include 'koneksi.php';

$nama = $_POST['nama'];

// Upload foto
$folder_upload = "images/";
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tmp_file = $_FILES['foto']['tmp_name'];

$upload = move_uploaded_file($tmp_file, $folder_upload . $nama_file);

if ($upload) {
    $query = "INSERT INTO siswa (nama, foto) VALUES ('$nama', '$nama_file')";
    mysqli_query($koneksi, $query);
    header("location:index.php");
} else {
    echo "Upload foto gagal";
}
?>
