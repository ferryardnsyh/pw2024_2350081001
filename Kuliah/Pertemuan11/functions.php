<?php 

function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'pw_2350081001');
}

function query($query) {
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // jika data-nya banyak lakukan yang ini V
    $mahasiswa = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $mahasiswa[] = $row;
    }

    return $mahasiswa;
}

// baru
function tambah($data) {
    $conn = koneksi();

    // cara mengamankan dibungkus menggunakan htmlspecialchars  (semua data yang dikirim dari user dicek apakah ada lebih kecil darinya, jika ada jangan ditampilkan untuk menghindari hacking)
    $Nama = htmlspecialchars($data['Nama']);
    $Nim = htmlspecialchars($data['Nim']);
    $Email = htmlspecialchars($data['Email']);
    $Jurusan = htmlspecialchars($data['Jurusan']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO mahasiswa (Nama, Nim, Email, Jurusan, Gambar)
              VALUES ('$Nama', '$Nim', '$Email', '$Jurusan', '$Gambar');";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// latihan 11
// untuk mengetahui bagian yang error dimananya
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    // cara mengamankan dibungkus menggunakan htmlspecialchars  (semua data yang dikirim dari user dicek apakah ada lebih kecil darinya, jika ada jangan ditampilkan untuk menghindari hacking)
    $id = $data['id'];
    $Nama = htmlspecialchars($data['Nama']);
    $Nim = htmlspecialchars($data['Nim']);
    $Email = htmlspecialchars($data['Email']);
    $Jurusan = htmlspecialchars($data['Jurusan']);
    $Gambar = htmlspecialchars($data['Gambar']); 

    $query = "UPDATE mahasiswa SET
                Nama = '$Nama',
                Nim = '$Nim',
                Email = '$Email',
                Jurusan = '$Jurusan',
                Gambar = '$Gambar'
              WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// functions searching data
function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM mahasiswa
                WHERE
                Nama LIKE '%$keyword%' OR
                Nim LIKE '%$keyword%' OR
                Jurusan LIKE '%$keyword%'
                ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


?>