-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 09:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tahfidz_quran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id_account` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenkel` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL,
  `kedudukan` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id_account`, `id_pengguna`, `nama_lengkap`, `ttl`, `alamat`, `jenkel`, `email`, `password`, `status`, `kedudukan`, `created_at`, `updated_at`) VALUES
(1, 1, 'ADMIN', '2018-08-07', '', '', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 'aktif', 1, NULL, NULL),
(8, 2, 'Ust. Adi Sastra Nugraha', '1980-08-01', 'Karangtengan-Cianjur', 'L', 'a@a', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 2, NULL, NULL),
(10, 0, 'Muhammad irkhan', '0000-00-00', 'cianjur', 'L', 'i@i', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 3, NULL, NULL),
(12, 0, 'muhamad gian', '0000-00-00', 'cianjur', 'L', 'g@g', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 2, NULL, NULL),
(13, 0, 'muhamad fikri', '0000-00-00', 'cianjur selatan', 'L', 'f@f', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 2, NULL, NULL),
(14, 0, 'muhamad sopian', '0000-00-00', 'cianjur', 'L', 's@s', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 2, NULL, NULL),
(15, 0, 'muhamad agisni zaelani', '0000-00-00', 'cianjur', 'L', 'o@o', 'c4ca4238a0b923820dcc509a6f75849b', 'aktif', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_grup`
--

CREATE TABLE `tb_grup` (
  `id_grup` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_grup` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `surat` int(255) NOT NULL,
  `ayat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grup`
--

INSERT INTO `tb_grup` (`id_grup`, `id_ustadz`, `id_siswa`, `nama_grup`, `tanggal`, `keterangan`, `surat`, `ayat`) VALUES
(1, 1, 1, 'grup', '2018-08-06', 'al ittihad', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(255) NOT NULL,
  `jenis_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `jenis_kelas`) VALUES
(1, 'TAHSIN'),
(2, 'TAHFIDZ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `dari` int(11) NOT NULL,
  `kepada` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_private`
--

CREATE TABLE `tb_private` (
  `ustadz` varchar(255) NOT NULL,
  `siswa` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `surat` int(255) NOT NULL,
  `ayat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `ttl` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_orang_tua` varchar(50) NOT NULL,
  `jenkel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `id_kelas`, `ttl`, `tempat_lahir`, `alamat`, `nama_orang_tua`, `jenkel`) VALUES
(1, 'Muhamad Agisni Zaelani', 1, '2018-08-08', 'cianjur', 'ciranjang', '', 0),
(2, 'Ovik Koswara', 1, '2018-08-02', 'Purwakarta', 'Purwakarta', '', 0),
(3, 'Odysseus Nanda Giani', 1, '2018-08-03', 'Cianjur', 'Cianjur', '', 0),
(4, 'Ilham Malik', 1, '2018-08-04', 'Cianjur', 'Cianjur', '', 0),
(5, 'Dede Aris Herdiansyah', 1, '2018-08-05', 'Cianjur', 'Cianjur', '', 0),
(6, 'Bayu Muhammad Mi\'raj', 1, '2018-08-06', 'Cianjur', 'Cianjur', '', 0),
(7, 'Muhammad Gian Ramadhan', 1, '2018-08-07', 'Cianjur', 'Cianjur', '', 0),
(8, 'Dede Rizkan Fauzan', 1, '2018-08-08', 'Bandung', 'Bandung', '', 0),
(9, 'Muhammad Al-Hazmi', 1, '2018-08-09', 'Sukabumi', 'Sukabumi', '', 0),
(10, 'Muhamad Rizki Win Mario', 1, '2018-08-10', 'Bekasi', 'Bekasi', '', 0),
(11, 'Akhmad Falahudin', 1, '2018-08-06', 'Cianjur', 'cianjur', '', 0),
(12, 'Aditya Lhana', 1, '2018-08-20', 'jakanrta', 'jakanrta', '', 0),
(13, 'Wahyu Nur Cahaya', 1, '2018-08-14', 'Purwakarta', 'Purwakarta', '', 0),
(14, 'Taupik Yanuar', 1, '2018-08-07', 'Bandung', 'Bandung', '', 0),
(15, 'Reza Dwiyanto', 1, '2018-08-13', 'Cianjur', 'Cianjur', '', 0),
(16, 'Rega Aprisandi', 1, '2018-08-30', 'Bandung', 'Bandung', '', 0),
(17, 'Rakha Fadil Abdals Najahi', 1, '2018-08-07', 'Sukabumi', 'Sukabumi', '', 0),
(18, 'Syarif Hidayatullah', 1, '2018-08-30', 'Sukabumi', 'Sukabumi', '', 0),
(19, 'Sahrul Awal Ramdani', 1, '2018-08-07', 'Sukabumi', 'Sukabumi', '', 0),
(20, 'Shihab Mabubilah', 1, '2018-08-15', 'Banten', 'Banten', '', 0),
(21, 'Imam Muhamad Yusuf', 1, '2018-08-14', 'Cianjur', 'Cianjur ', '', 0),
(22, 'Muhamad Iqbal Junior', 1, '2018-08-20', 'Cianjur', 'Cianjur', '', 0),
(23, 'Muhamad Rizki Sihab', 1, '2018-08-14', 'Sukabumi', 'Sukabumi', '', 0),
(24, 'Muhamad Fikri', 1, '2018-08-17', 'Cianjur ', 'Cianjur ', '', 0),
(25, 'Abdul Latif', 1, '2018-08-25', 'Cianjur', 'Cianjur', '', 0),
(26, 'Abdul Rosyid', 1, '2018-08-27', 'Bandung', 'Cianjur ', '', 0),
(27, 'Faizul ula', 1, '2018-08-07', 'Cianjur ', 'Cianjur ', '', 0),
(28, 'Febri Agung Husaini', 1, '2018-08-20', 'Garut', 'Garut', '', 0),
(29, 'Ikram Achmad Ibtihad', 1, '2018-08-27', 'Bogor', 'Bogor', '', 0),
(30, 'Wahyu Rahmat Hidayat', 1, '2018-08-18', 'Bogor', 'Bogor', '', 0),
(31, 'Muhamad Najib Kamil', 1, '2018-08-31', 'Sukabumi', 'Sukabumi', '', 0),
(32, 'Zahid Al-lawami', 1, '2018-08-23', 'Sukabumi', 'Sukabumi', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `surat` varchar(50) NOT NULL,
  `ayat` varchar(222) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ustadz`
--

CREATE TABLE `tb_ustadz` (
  `id_ustadz` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_ustadz` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ttl` varchar(222) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_ustadz`
--

INSERT INTO `tb_ustadz` (`id_ustadz`, `id_pengguna`, `nama_ustadz`, `alamat`, `ttl`, `status`) VALUES
(1, 1, 'Ust. Adi Sastra Nugraha', 'Karangtengan-Cianjur', 'cianjur, 1980-08-01', 'aktif'),
(2, 0, 'Ust. Dadan Wijaya', 'cianjur', 'cianjur, 1981-08-02', 'aktif'),
(3, 0, 'Ust. Aji Nugraha', 'Cibeber - Cianjur', 'cianjur, 1982-08-03', 'aktif'),
(4, 0, 'Ust. Ari Kurniawan', 'Karangtengah-Cianjur', 'cianjur, 1984-08-04', 'aktif'),
(5, 0, 'Ust. Ilham Ahmad', 'Cianjur', 'Cianjur, 1985-08-05', 'aktif'),
(7, 0, 'Ust. Aldi Renaldi', 'bogor', ', ', 'aktif'),
(8, 0, 'ust. Ali Nasirudin', 'cianjur', ', ', 'aktif'),
(9, 0, 'Ust. Bahrul Fikri', 'bandung', ', ', 'aktif'),
(11, 0, 'Ust. Bahrul Ullum', 'bogor', 'Bogor, 02-03-1999', 'aktif'),
(12, 0, 'Ust. Rangga Hadi Sukmana', 'bandung', 'bandung, 2018-08-08', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ustadz_terpilih`
--

CREATE TABLE `tb_ustadz_terpilih` (
  `id` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ustadz_terpilih`
--

INSERT INTO `tb_ustadz_terpilih` (`id`, `id_ustadz`, `id_siswa`) VALUES
(1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_private`
--
ALTER TABLE `tb_private`
  ADD PRIMARY KEY (`ustadz`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- Indexes for table `tb_ustadz_terpilih`
--
ALTER TABLE `tb_ustadz_terpilih`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_ustadz_terpilih`
--
ALTER TABLE `tb_ustadz_terpilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
