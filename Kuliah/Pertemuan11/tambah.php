<?php 
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if( tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'latihan3.php';       
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
    // jika sudah klik tambah ambil semua data POST dan kirimkan ke functions 'tambah'
    // tambah($_post);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="Nama" autofocus required> <!-- untuk otomatis kursor berada di kolom Nama -->
                </label>
            </li>
            <li>
                <label>
                    Nim :
                    <input type="text" name="Nim" required>
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="Email" required>
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="Jurusan" required>
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="Gambar" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>