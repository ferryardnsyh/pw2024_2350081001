<?php 
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $mahasiswa['Gambar']; ?>"></li>
        <li>Nim : <?= $mahasiswa['Nim']; ?></li>
        <li>Nama : <?= $mahasiswa['Nama']; ?></li>
        <li>Email : <?= $mahasiswa['Email']; ?></li>
        <li>Jurusan : <?= $mahasiswa['Jurusan']; ?></li>
        <!-- jika true maka href nya jalan / dan jika false maka href nya tidak jalan -->
        <li><a href="ubah.php?id=<?= $mahasiswa['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
        <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>