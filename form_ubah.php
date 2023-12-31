// form_ubah.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Siswa</title>
</head>
<body>
    <?php
    include 'backend.php';

    $id = $_GET['id'];
    $siswa = ambilSiswaById($id);
    ?>

    <h2>Form Ubah Siswa</h2>
    <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
        
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" value="<?= $siswa['nama'] ?>" required>
        
        <label for="foto">Foto (ukuran 3x4):</label>
        <input type="file" name="foto" accept=".jpg, .jpeg, .png">
        
        <button type="submit" name="ubah">Ubah</button>
    </form>
</body>
</html>
