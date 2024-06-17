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
?>