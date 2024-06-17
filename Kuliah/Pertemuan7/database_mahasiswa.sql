-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2024 pada 09.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table mahasiswa`
--

CREATE TABLE `table mahasiswa` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Prodi / Jurusan` varchar(26) NOT NULL,
  `Angkatan` varchar(10) NOT NULL,
  `Alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table mahasiswa`
--

INSERT INTO `table mahasiswa` (`NIM`, `Nama`, `Prodi / Jurusan`, `Angkatan`, `Alamat`) VALUES
('2350081001', 'Ferry Ardiansyah', 'Informatika', '2023', 'Jl. Margamulya rt04 / rw04 desa cilame, kecamatan ngamprah, kabupaten bandung barat'),
('2350081018', 'Aditya Rivarwa Prasetia', 'Informatika', '2023', 'Jl. Raya pemkot'),
('2350081030', 'Asep Tatang', 'Informatika', '2023', 'Kp.Cisasawi Rt02/05 Des.Cihanjuang Kec.Parongpong Kab.Bandung Barat'),
('2350081051', 'Rizki Dwinanda', 'Informatika', '2023', 'Jl. Cikalong wetan'),
('2350081055', 'Ramdani', 'Informatika', '2023', 'Jl. Raya panaris');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table mahasiswa`
--
ALTER TABLE `table mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
