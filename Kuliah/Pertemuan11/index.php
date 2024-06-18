<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="50" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <!-- Jika mencari data tidak ditemukan pada tabel -->
        <?php if (empty($mahasiswa)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: blue; font-style: italic;">Data mahasiswa tidak ditemukan!</p>
                </td>
            </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m['Gambar']; ?>" width="150"></td>
                <td><?= $m['Nama']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>