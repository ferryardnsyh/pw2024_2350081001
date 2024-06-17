<?php 
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', 'root', 'PW_2350081001');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
$row = mysqli_fetch_assoc($result);
var_dump($row);

// Tampung ke variabel mahasiswa


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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="img/porce1.jpg" width="200"></td>
            <td>2350081001</td>
            <td>Ferry Ardiansyah</td>
            <td>ferry23@if.unjani.ac.id</td>
            <td>Informatika</td>
            <td>
                <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>