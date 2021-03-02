-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2020 pada 14.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ais`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`) VALUES
(1, 'Amalia Rahma'),
(2, 'Indra Hermawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabankuisioner`
--

CREATE TABLE `jawabankuisioner` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawabankuisioner`
--

INSERT INTO `jawabankuisioner` (`id`, `jawaban`) VALUES
(1, 'Sangat tidak setuju'),
(2, 'tidak setuju'),
(3, 'agak setuju'),
(4, 'setuju'),
(5, 'sangat setuju'),
(6, 'bisa aja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `semester` char(5) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisionerdosen`
--

CREATE TABLE `kuisionerdosen` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `aktif` smallint(6) NOT NULL,
  `choice` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisionerdosen`
--

INSERT INTO `kuisionerdosen` (`id`, `pertanyaan`, `aktif`, `choice`) VALUES
(1, 'Pelaksanaan kuliah dimulai & diakhiri tepat waktu', 1, 1),
(2, 'Dosen menguasai materi & menyampaikan dengan baik', 1, 1),
(3, 'Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisionerkelas`
--

CREATE TABLE `kuisionerkelas` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `jawaban_id` int(11) NOT NULL,
  `jawaban_text` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `kuisionerkelas`
--
DELIMITER $$
CREATE TRIGGER `update_jawaban` AFTER INSERT ON `kuisionerkelas` FOR EACH ROW BEGIN 
UPDATE jawabankuisioner set id = jawaban_id + NEW.id where id = new.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
(1, 'SI'),
(2, 'TI'),
(3, 'Ekonomi islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'muhamad ridho fadhillah', 'fadhillah056@gmail.com', NULL, '$2y$10$a8M10c95a6/rI1Ugeh22H.cbaFCcWIbwckrVrWymH8lVzFguUOKiy', NULL, '2020-08-30 12:41:51', '2020-08-30 12:41:51'),
(2, 'ridho fadhillah', 'ridhobigboy@gmail.com', NULL, '$2y$10$7TYiFCEM8qC5GugAgP.hG.C90.Rq8mL7NQGrJM/Q5T1jL61Ff/Qp2', NULL, '2020-09-09 03:36:38', '2020-09-09 03:36:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawabankuisioner`
--
ALTER TABLE `jawabankuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dossen_id` (`dosen_id`),
  ADD UNIQUE KEY `matakuliah_id` (`matakuliah_id`),
  ADD UNIQUE KEY `dossen_id_2` (`dosen_id`),
  ADD UNIQUE KEY `prodi_id` (`prodi_id`);

--
-- Indeks untuk tabel `kuisionerdosen`
--
ALTER TABLE `kuisionerdosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisionerkelas`
--
ALTER TABLE `kuisionerkelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_id` (`kelas_id`),
  ADD UNIQUE KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD UNIQUE KEY `jawaban_id` (`jawaban_id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jawabankuisioner`
--
ALTER TABLE `jawabankuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuisionerdosen`
--
ALTER TABLE `kuisionerdosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kuisionerkelas`
--
ALTER TABLE `kuisionerkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`);

--
-- Ketidakleluasaan untuk tabel `kuisionerkelas`
--
ALTER TABLE `kuisionerkelas`
  ADD CONSTRAINT `kuisionerkelas_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `kuisionerkelas_ibfk_2` FOREIGN KEY (`pertanyaan_id`) REFERENCES `kuisionerdosen` (`id`),
  ADD CONSTRAINT `kuisionerkelas_ibfk_3` FOREIGN KEY (`jawaban_id`) REFERENCES `jawabankuisioner` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
