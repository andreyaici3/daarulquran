-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 01:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daarul-quran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `slug_berita` varchar(128) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(128) DEFAULT NULL,
  `tanggal_berita` varchar(128) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`, `id_user`) VALUES
(1, 'UAS', 'uas', 'isi berita', 'gambar', '1582690962', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mata_pelajaran` varchar(128) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `foto_guru` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, '7A'),
(2, '7B'),
(3, 'TINFC-2019-D'),
(4, '7C'),
(5, '8B'),
(6, '7D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(128) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id`, `kode_mapel`, `nama_mapel`) VALUES
(10, 'DQ-TINFCW1909', 'Praktikum Pemrograman Berorientasi Object'),
(11, 'DQ-TINFCW1908', 'Pemrograman Berorientasi Object'),
(12, 'DQ-TINFCW1911', 'Rangkaian Digital'),
(13, 'DQ-TINFCW1913', 'Sistem Dan Teknologi Basis Data'),
(14, 'DQ-TINFCW1914', 'Praktikum Sistem Dan Teknologi Basis Data'),
(15, 'DQ-TINFCW1910', 'Struktur Data'),
(16, 'DQ-TINFCW1915', 'Statistika'),
(17, 'DQ-TINFCW1916', 'Praktikum Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(128) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tanggal_pengumuman`) VALUES
(1, 'Ulangan Harian', 'Ulangan Harian akan dilaksanakan mulai di pekan yang akan datang, terimakasih.', '0000-00-00'),
(2, 'Ulangan Akhir Semester', 'Ulangan Akhir smeseter (UAS) dimulai pekan ini', '2000-02-21'),
(3, 'Testing Penguman', 'dicoba check', '2020-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(128) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_kelas` int(128) NOT NULL,
  `foto_siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `id_kelas`, `foto_siswa`) VALUES
(4, '20190810004', 'Andrey Andriansyah', 'Kuningan', '2001-03-24', 3, 'Koala.jpg'),
(5, '20190810005', 'Gugun Rizal Nugraha', 'Kuningan', '2002-03-25', 3, 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`, `level`, `is_active`, `date_created`) VALUES
(4, 'Andrey Andriansyah', 'andreyandri90@gmail.com', 'andreyandri90@gmail.com', '$2y$10$vEpNKIydcixgP/PtEG.VVuMrpe777GjpEH0.4MeTUamkxNoYXcE/2', 1, 1, '1582197047'),
(5, 'Nafisah Nailal Husna', 'nafisah@gmail.com', 'nafisah@gmail.com', '$2y$10$Bu9q3GoElVxaO7PfAtQ99eUgwCwSBCvMFyDvBPiSSy7zO5NMnK0g2', 1, 1, '1582197105'),
(6, 'Ayu Munawaroh', 'ayu@gmail.com', 'ayu@gmail.com', '$2y$10$8dnGfx/oz5/lMTcCM92.5OJ60Fc7B/O2O0aQh6/25C5uOa60QPwyi', 1, 1, '1582197184'),
(7, 'Uni', 'uni@gmail.com', 'uni@gmail.com', '$2y$10$0eZ/30RJ0HgipsOGVfIL8ufYfFEfUF5Tn5Oj8HwddhN6L3wLEMaWS', 2, 1, '1582197325'),
(8, 'Roni', 'roni@gmail.com', 'roni@gmail.com', '$2y$10$ScuZHOQ/.27TiCFO3dHnFeIXqpmpl/QtuAAKDrrqMwgJUFr9h2Mpm', 1, 1, '1582197353'),
(9, 'Udin', 'udin@gmail.com', 'udin@gmail.com', '$2y$10$1GuKrHCAqjrwoPCnC5oOk.JNvG5NQHt0gXYj7wvB10VB4MLSBPwfm', 1, 1, '1582197396'),
(10, 'Ila', 'ila@gmail.com', 'ila@gmail.com', '$2y$10$/0PUfvF30nlaJAHMzholmOjfpIeUT6zwGQ5q4S6Lc4CCWwu666EaK', 1, 1, '1582197476');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `header-nav` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `header-nav`) VALUES
(1, 'Daarul Qur''an');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
