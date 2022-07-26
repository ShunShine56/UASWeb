-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 06:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(250) NOT NULL,
  `judul_berita` varchar(150) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `Gambar`, `judul_berita`, `deskripsi`, `tanggal`) VALUES
(1459347765, 'berita1.png', 'SMANSABUK BERTABUR PRESTASI', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi', '2017-12-12'),
(1459347766, 'berita2.png', 'TIM OSK SMA Negeri 1 Bukateja', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', '2013-12-16'),
(1459347767, 'berita3.png', 'Peringatan HARDIKNAS', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia', '2019-03-10'),
(1459347768, 'berita4.png', 'PENGAJIAN AKBAR BULAN RAMADHAN 1440 H', 'rendi ganteng', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(5) NOT NULL,
  `copy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copy`) VALUES
(1, '© Copyright 2017 - 2022 SMN 1 Bukateja. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `Id` int(11) NOT NULL,
  `Gambar` varchar(250) NOT NULL,
  `judul_gambar` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`Id`, `Gambar`, `judul_gambar`, `deskripsi`, `tanggal`) VALUES
(17, '1.png', 'gambar satu', '', '2017-12-12'),
(18, '2.png', 'gambar dua', '', '2017-12-12'),
(19, '3.png', 'gambar tiga', '', '2017-12-12'),
(20, '4.png', 'gambar empat', '', '2017-12-12'),
(21, '5.png', 'gambar lima', '', '2017-12-12'),
(22, '6.png', 'gambar enam', '', '2017-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `gurukaryawan`
--

CREATE TABLE `gurukaryawan` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(250) NOT NULL,
  `nama_guru` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gurukaryawan`
--

INSERT INTO `gurukaryawan` (`id`, `Gambar`, `nama_guru`, `keterangan`) VALUES
(8, '292249291_1698566500492831_817707543542376154_n.jpg', 'Shun', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `kepalasekolah`
--

CREATE TABLE `kepalasekolah` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(250) NOT NULL,
  `nama_kepsek` varchar(250) NOT NULL,
  `sambutan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepalasekolah`
--

INSERT INTO `kepalasekolah` (`id`, `Gambar`, `nama_kepsek`, `sambutan`) VALUES
(1, '292249291_1698566500492831_817707543542376154_n.jpg', 'Purwito.S.Pd', 'Puji syukur pada Allah SWT, atas berkat dan karuniaNya sehingga website sekolah mulai diaktifkan kembali sebagai sarana informasi dan komunikasi sekolah dengan peserta didik, guru, pemerhati sekolah, orang tua siswa dan juga masyarakat. Untuk itu saya mengucapkan banyak terima kasih kepada semua pihak yang mendukung diaktifkannya kembali website ini.\r\nera global dan pesatnya Teknologi Informasi ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu instansi seperti halnya di SMA Negeri 1 Bukateja sangatlah penting. Wahana website tersebut dapat digunakan sebagai sarana informasi dan komunikasi pihak sekolah dengan siswa, alumni, dan stake holder secara luas. Selanjutnya, website sekolah dapat berfungsi sebagai media pembelajaran yang memuat blog-blog yang dibuat oleh guru-guru. Di dalam blog tersebut guru dapat menuliskan berbagai artikel tentang pembelajaran atau materi penting pelajaran yang bersangkutan. Bahkan guru dapat memberikan tugas-tugas Mandiri kepada peserta didi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tipe_gambar` varchar(255) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `gambar`, `keterangan`, `tipe_gambar`, `ukuran_gambar`) VALUES
(6, '3163png-transparent-silhouette-student-happy-with-woman-excited-college-happiness-class-lesson.png', 'mencoba', 'image/png', 11810);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gurukaryawan`
--
ALTER TABLE `gurukaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1459347769;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gurukaryawan`
--
ALTER TABLE `gurukaryawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
