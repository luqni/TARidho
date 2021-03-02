-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2020 at 03:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taevaluasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`) VALUES
(1, 'Amalia Rahma'),
(2, 'Indra Hermawan');

-- --------------------------------------------------------

--
-- Table structure for table `jawabankuisioner`
--

CREATE TABLE `jawabankuisioner` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  `value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawabankuisioner`
--

INSERT INTO `jawabankuisioner` (`id`, `jawaban`, `value`) VALUES
(1, 'Sangat tidak setuju', 1),
(2, 'tidak setuju', 2),
(3, 'agak setuju', 3),
(4, 'setuju', 4),
(5, 'sangat setuju', 5),
(6, 'bisa aja', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `semester` char(5) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode`, `semester`, `dosen_id`, `matakuliah_id`, `prodi_id`) VALUES
(1, 'AE007', '6', 2, 1, 3),
(5, 'AE006', '2', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_kelas`
--

CREATE TABLE `kuesioner_kelas` (
  `id` bigint(10) NOT NULL,
  `nim` varchar(250) DEFAULT NULL,
  `kelas` varchar(250) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `pertanyaan_1` varchar(250) DEFAULT NULL,
  `pertanyaan_2` varchar(250) DEFAULT NULL,
  `pertanyaan_3` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisionerdosen`
--

CREATE TABLE `kuisionerdosen` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `aktif` smallint(6) NOT NULL,
  `choice` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuisionerdosen`
--

INSERT INTO `kuisionerdosen` (`id`, `pertanyaan`, `aktif`, `choice`) VALUES
(1, 'Pelaksanaan kuliah dimulai & diakhiri tepat waktu', 1, 1),
(2, 'Dosen menguasai materi & menyampaikan dengan baik', 1, 1),
(3, 'Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas', 1, 1),
(4, 'asik', 1, 1),
(5, 'asd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuisionerkelas`
--

CREATE TABLE `kuisionerkelas` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `pertanyaan_dosen_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `kuisionerkelas`
--
DELIMITER $$
CREATE TRIGGER `update_jawaban` AFTER INSERT ON `kuisionerkelas` FOR EACH ROW BEGIN 
UPDATE jawabankuisioner set id = jawaban_id + NEW.id where id = new.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `sks`) VALUES
(1, 'POSA', 3),
(2, 'FILSAFAT', 2),
(3, 'DDP', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
(1, 'SI'),
(2, 'TI'),
(3, 'Ekonomi islam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'muhamad ridho fadhillah', 'fadhillah056@gmail.com', NULL, '$2y$10$a8M10c95a6/rI1Ugeh22H.cbaFCcWIbwckrVrWymH8lVzFguUOKiy', NULL, '2020-08-30 12:41:51', '2020-08-30 12:41:51'),
(2, 'ridho fadhillah', 'ridhobigboy@gmail.com', NULL, '$2y$10$7TYiFCEM8qC5GugAgP.hG.C90.Rq8mL7NQGrJM/Q5T1jL61Ff/Qp2', NULL, '2020-09-09 03:36:38', '2020-09-09 03:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawabankuisioner`
--
ALTER TABLE `jawabankuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dossen_id` (`dosen_id`),
  ADD UNIQUE KEY `matakuliah_id` (`matakuliah_id`),
  ADD UNIQUE KEY `dossen_id_2` (`dosen_id`),
  ADD UNIQUE KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `kuesioner_kelas`
--
ALTER TABLE `kuesioner_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisionerdosen`
--
ALTER TABLE `kuisionerdosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisionerkelas`
--
ALTER TABLE `kuisionerkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawabankuisioner`
--
ALTER TABLE `jawabankuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kuesioner_kelas`
--
ALTER TABLE `kuesioner_kelas`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kuisionerdosen`
--
ALTER TABLE `kuisionerdosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kuisionerkelas`
--
ALTER TABLE `kuisionerkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
