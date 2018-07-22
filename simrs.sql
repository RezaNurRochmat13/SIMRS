-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 05:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(100) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `tanggal_lahir_pasien` date NOT NULL,
  `jenis_kelamin_pasien` varchar(5) NOT NULL,
  `pekerjaan_pasien` varchar(50) NOT NULL,
  `no_rekam_medis_pasien` varchar(15) NOT NULL,
  `golongan_darah_pasien` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `tanggal_lahir_pasien`, `jenis_kelamin_pasien`, `pekerjaan_pasien`, `no_rekam_medis_pasien`, `golongan_darah_pasien`) VALUES
('PASIEN-1', 'hana', 'Pakem', '2018-07-11', 'P', 'Mahasiswa', 'RM-212121', 'A'),
('PASIEN-2', 'zilla', 'Pakem', '2018-07-11', 'L', 'Mahasiswa', 'RM-010101', 'A'),
('PASIEN-2507413984690518', 'Akbar aditama', 'Pakem', '2018-07-22', 'L', 'Mahasiswa', 'RM-820563474589', 'AB'),
('PASIEN-3', 'takahiro', 'Pakem', '2018-07-11', 'L', 'Mahasiswa', 'RM-505050', 'A'),
('PASIEN-3241825901877606', 'Akbars', 'Pakem', '2018-07-22', 'L', 'Programmer', 'RM-786053', 'B'),
('PASIEN-4183292076559170', 'Reja Nur', 'Pakem', '2018-08-02', 'L', 'Developer', 'RM-239857152670', 'A'),
('PASIEN-6', 'sasaki', 'Pakem', '2018-07-11', 'L', 'Mahasiswa', 'RM-121212', 'B'),
('PASIEN-6829043578075491', 'Reja', 'Pakem', '2018-07-19', 'L', 'Programmer', 'RM-925863457083', 'A'),
('PASIEN-7', 'hyde', 'Pakem', '2018-07-11', 'L', 'Mahasiswa', 'RM-606060', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `kategori_poli` varchar(50) NOT NULL,
  `nama_petugas_poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `kategori_poli`, `nama_petugas_poli`) VALUES
('POLI-1', 'Umum', 'Dokter', 'Dr Agus'),
('POLI-2', 'Gigi', 'Dokter', 'DR Andi'),
('POLI-3', 'Syaraf', 'Dokter', 'DR Ani'),
('POLI-4', 'Penyakit Dalam', 'Dokter', 'DR Jack'),
('POLI-5', 'Anak', 'Dokter', 'DR Angela'),
('POLI-6', 'Jiwa', 'Dokter', 'DR Budi'),
('POLI-7', 'Napza', 'Dokter', 'DR Ningsih');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_poli`
--

CREATE TABLE `transaksi_poli` (
  `id_transaksi_poli` varchar(100) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `nomor_antrian` int(10) NOT NULL,
  `tanggal_masuk_berkas` date DEFAULT NULL,
  `tanggal_keluar_berkas` date DEFAULT NULL,
  `status_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_poli`
--

INSERT INTO `transaksi_poli` (`id_transaksi_poli`, `id_pasien`, `id_poli`, `nomor_antrian`, `tanggal_masuk_berkas`, `tanggal_keluar_berkas`, `status_transaksi`) VALUES
('TRX-1234', 'PASIEN-2', 'POLI-2', 2, '2018-07-13', '2018-07-07', '0'),
('TRX-124411', 'PASIEN-7', 'POLI-1', 1, '2018-07-13', '2018-07-22', '0'),
('TRX-AU4q5IZETmhxJBvN', 'PASIEN-6', 'POLI-1', 1, '2018-07-15', '2018-07-22', '0'),
('TRX-ebKaYySNBgZX2Io7', 'PASIEN-1', 'POLI-1', 3232, '2018-07-22', '2018-07-22', '1'),
('TRX-N9BVvLfMD4jRlCm7', 'PASIEN-3', 'POLI-1', 2, '2018-07-18', NULL, '1'),
('TRX-tz2lyAUogqFJr7ID', 'PASIEN-1', 'POLI-6', 5, '2018-07-22', NULL, '1'),
('TRX-V7s6vD8EFrhUj1pK', 'PASIEN-6', 'POLI-2', 78, '2018-07-22', NULL, '1'),
('TRX-VfoOd2Y5yX1BrCP3', 'PASIEN-6829043578075491', 'POLI-1', 2, '2018-07-22', '2018-07-22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `transaksi_poli`
--
ALTER TABLE `transaksi_poli`
  ADD PRIMARY KEY (`id_transaksi_poli`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_pasien_2` (`id_pasien`),
  ADD KEY `id_pasien_3` (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_poli`
--
ALTER TABLE `transaksi_poli`
  ADD CONSTRAINT `transaksi_poli_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`),
  ADD CONSTRAINT `transaksi_poli_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
