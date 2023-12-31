// index.php
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>
<body>
    <h2>Form Tambah Siswa</h2>
    <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="foto">Upload Foto (3x4):</label>
        <input type="file" name="foto" accept="image/*" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
