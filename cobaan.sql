-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Jan 2021 pada 15.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabankuisioner`
--

CREATE TABLE `jawabankuisioner` (
  `id` int(11) DEFAULT NULL,
  `jawaban` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawabankuisioner`
--

INSERT INTO `jawabankuisioner` (`id`, `jawaban`) VALUES
(1, 'Sangat Tidak Setuju'),
(2, 'Tidak Setuju'),
(3, 'Agak Setuju'),
(4, 'Setuju'),
(5, 'Sangat Setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) DEFAULT NULL,
  `kode` varchar(20) NOT NULL,
  `semester` char(5) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisionerdosen`
--

CREATE TABLE `kuisionerdosen` (
  `id` int(11) DEFAULT NULL,
  `pertanyaan` text NOT NULL,
  `aktif` smallint(6) NOT NULL,
  `choice` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuisionerdosen`
--

INSERT INTO `kuisionerdosen` (`id`, `pertanyaan`, `aktif`, `choice`) VALUES
(1, 'Apakah perkulaiahn dimulai dan diakhiri tepat waktu', 1, 5),
(2, 'Dosen menguasai & menyampaikan materi dengan baik', 1, 5),
(3, 'Diskusi materi & pembahasan tugas/ujian berjalan baik, di dalam/luar kelas', 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisionerkelas`
--

CREATE TABLE `kuisionerkelas` (
  `id` int(11) DEFAULT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `jawaban_id` int(11) NOT NULL,
  `jawaban_text` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'satu'),
(2, 'dua'),
(3, 'tiga'),
(4, 'empat'),
(5, 'lima'),
(6, 'enam'),
(7, 'tujuh'),
(8, 'delapan'),
(9, 'sembilan'),
(10, 'sepuluh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
