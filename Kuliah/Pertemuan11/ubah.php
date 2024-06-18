<?php 
require 'functions.php';

// masuk kehalaman ubah tanpa mengirimkan id
// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
// var_dump($mahasiswa['Nama']);

// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
    if( ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';       
            </script>";
    } else {
        echo "data gagal diubah!";
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <!-- agar bisa mengirimkan id, jika klik ubah data maka kekirim juga id-nya -->
        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="Nama" autofocus required value="<?= $mahasiswa['Nama']; ?>"> <!-- untuk otomatis kursor berada di kolom Nama -->
                </label>
            </li>
            <li>
                <label>
                    Nim :
                    <input type="text" name="Nim" required value="<?= $mahasiswa['Nim']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="email" name="Email" required value="<?= $mahasiswa['Email']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="Jurusan" required value="<?= $mahasiswa['Jurusan']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="Gambar" required value="<?= $mahasiswa['Gambar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>