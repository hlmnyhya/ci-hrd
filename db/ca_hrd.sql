-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2023 at 03:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca_hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int NOT NULL,
  `divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`) VALUES
(1, 'Programmer'),
(2, 'Project Leader'),
(3, 'Minat dan Bakat');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `golongan`) VALUES
(1, 'A-1');

-- --------------------------------------------------------

--
-- Table structure for table `headcount`
--

CREATE TABLE `headcount` (
  `id_headcount` int NOT NULL,
  `unit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tetap` int NOT NULL,
  `probation` int NOT NULL,
  `kontrak` int NOT NULL,
  `tht` int NOT NULL,
  `thl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(2, 'Developer'),
(3, 'Programmer'),
(4, 'Mandor');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `masa_kerja` date NOT NULL,
  `divisi` int NOT NULL,
  `jabatan` int NOT NULL,
  `status_terakhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `golongan` int NOT NULL,
  `bpjs_tk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_kes` bigint NOT NULL,
  `npwp` bigint NOT NULL,
  `status_ptkp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_domisili` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pkwt_mulai` date NOT NULL,
  `pkwt_selesai` date NOT NULL,
  `pkwt2_mulai` date NOT NULL,
  `pkwt2_selesai` date NOT NULL,
  `tht` int NOT NULL,
  `thl` int NOT NULL,
  `percobaan_mulai` date NOT NULL,
  `percobaan_selesai` date NOT NULL,
  `karyawan_pribadi` int NOT NULL,
  `keluarga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `tgl_masuk`, `masa_kerja`, `divisi`, `jabatan`, `status_terakhir`, `golongan`, `bpjs_tk`, `bpjs_kes`, `npwp`, `status_ptkp`, `alamat_ktp`, `alamat_domisili`, `pkwt_mulai`, `pkwt_selesai`, `pkwt2_mulai`, `pkwt2_selesai`, `tht`, `thl`, `percobaan_mulai`, `percobaan_selesai`, `karyawan_pribadi`, `keluarga`) VALUES
(1, 'Aldyanto', '2023-05-23', '2023-05-17', 1, 2, 'Duda', 1, '2442525232', 34234234232, 423423423424, '4234234232', 'Jl. Sungai Andai', 'Jl. Sungai Andai', '2023-05-16', '2023-05-16', '2023-05-16', '2023-05-24', 1, 1, '2023-05-15', '2023-05-15', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_masuk`
--

CREATE TABLE `karyawan_masuk` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan_masuk`
--

INSERT INTO `karyawan_masuk` (`id_karyawan`, `nama`, `nik`, `id_divisi`, `id_jabatan`, `tanggal_masuk`, `tanggal_keluar`, `keterangan`) VALUES
(1, 'Honor Risman', '38-823-9082', 3, 2, '2022-09-29', '2022-12-05', 'Oth injury of brachial artery, left side, init encntr');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_pribadi`
--

CREATE TABLE `karyawan_pribadi` (
  `id_karyawan_pribadi` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `keluarga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_pribadi`
--

INSERT INTO `karyawan_pribadi` (`id_karyawan_pribadi`, `nama`, `alamat_ktp`, `alamat_domisili`, `agama`, `jenis_kelamin`, `pendidikan`, `jurusan`, `tanggal_lahir`, `usia`, `golongan_darah`, `keluarga`) VALUES
(1, 'Ruby', 'Banjarbaru', 'Kurau', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'A', 1),
(2, 'Akbar', 'Pelaihari', 'Kintap', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'B', 1),
(3, 'Supian', 'Bati-Bati', 'Pelaihari', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'AB', 1),
(5, 'Saffa', 'Rantau', 'Batu Ampar', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'O', 1),
(6, 'Junai', 'Batu Ampar', 'Sungai Danau', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int NOT NULL,
  `istri_suami` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `anak1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `anak2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `anak3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `istri_suami`, `anak1`, `anak2`, `anak3`) VALUES
(1, 'Samawa', 'Anto', 'Yanto', 'Boruto\r\n'),
(2, 'Markonah', 'Andin', 'Arun', 'Nina'),
(3, 'Marsina', 'Yonyon', 'Kasu', 'Sina'),
(5, 'Ayu', 'Richard', 'Samuel', 'Roman'),
(6, 'Olivia', 'Andra', 'Samuel', 'Roman');

-- --------------------------------------------------------

--
-- Table structure for table `masa_kontrak`
--

CREATE TABLE `masa_kontrak` (
  `id_kontrak` int NOT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `keterangan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `in_aktif` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `icon`, `in_aktif`) VALUES
('M001', 'Dashboard', 'fa-dashboard', 1),
('M002', 'Master Data', 'fa-bars', 1),
('M003', 'Data Karyawan', 'fa-user', 1),
('M004', 'Riwayat Golongan', 'fa-area-chart', 1),
('M005', 'Riwayat Jabatan', 'fa-briefcase', 1),
('M006', 'Data Pelamar', 'fa-bars', 1),
('M007', 'MPP', 'fa-bars', 1),
('M008', 'THL', 'fa-bars', 1),
('M009', 'Menu Akses', 'fa-gear', 1),
('M010', 'Help', 'fa-ask', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_akses`
--

CREATE TABLE `menu_akses` (
  `id_menu_akses` int NOT NULL,
  `id_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_usergroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_akses`
--

INSERT INTO `menu_akses` (`id_menu_akses`, `id_menu`, `id_usergroup`) VALUES
(1, 'M001', 'CA0001');

-- --------------------------------------------------------

--
-- Table structure for table `mpp`
--

CREATE TABLE `mpp` (
  `id_mpp` int NOT NULL,
  `unit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total` int NOT NULL,
  `total_karyawan` int NOT NULL,
  `vacant` int NOT NULL,
  `keterangan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mpp`
--

INSERT INTO `mpp` (`id_mpp`, `unit`, `posisi`, `total`, `total_karyawan`, `vacant`, `keterangan`) VALUES
(1, 'DIVISI CA', 'LA', 1, 2, 2, 'THL'),
(3, 'LUNIK', 'LA', 5, 5, 5, 'THT'),
(4, 'LUNIK', 'LA', 5, 5, 2, 'TETAP');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `nama`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `email`, `file`, `created_at`) VALUES
(3, 'Ruby', 'Angsau', '2023-07-07', 'Laki-Laki', '123456768798', 'rubyanjas99@gmail.com', 'CICI_BW1.pdf', '2023-07-06 16:00:00'),
(4, 'Zain', 'Angsau', '2023-07-03', 'Laki-Laki', '123456789', 'zainakbar@gmail.com', 'LENGKAP.pdf', '2023-07-06 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `submenu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `in_aktif` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `submenu`, `url`, `icon`, `id_menu`, `in_aktif`) VALUES
('SM001', 'Menu', 'master/menu/menu', '', 'M002', 1),
('SM002', 'Sub Menu', 'master/menu/subMenu', '', 'M002', 1),
('SM003', 'User', 'master/user/user', '', 'M002', 1),
('SM004', 'Usergroup', 'master/usergroup/userGroup', '', 'M002', 1),
('SM005', 'Pribadi', 'Karyawan/karyawan_pribadi/karyawanPribadi', '', 'M003', 1),
('SM006', 'Karyawan', 'Karyawan/Karyawan/karyawan', '', 'M003', 1),
('SM007', 'Track Record Golongan', 'master/golongan/golongan', '', 'M004', 1),
('SM008', 'Data Golongan', 'master/golongan/golongan', '', 'M004', 1),
('SM009', 'Track Record Jabatan', 'master/jabatan', '', 'M005', 1),
('SM010', 'Data Jabatan', 'master/jabatan/jabatan', '', 'M005', 1),
('SM011', 'Data Mutasi Kerja', 'master/mutasi', '', 'M005', 1),
('SM012', 'Data', 'karyawan/pelamar', '', 'M006', 1),
('SM013', 'Menu Akses', 'master/menu/menuAkses', '', 'M009', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thl`
--

CREATE TABLE `thl` (
  `id_thl` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thl`
--

INSERT INTO `thl` (`id_thl`, `nama`, `nik`, `id_divisi`, `id_jabatan`, `tanggal_masuk`, `tanggal_keluar`, `keterangan`, `status`) VALUES
(1, 'Amaleta Haggie', '53-478-4516', 2, 2, '2023-03-11', '2022-11-22', 'Karyawan Baru', 'Single'),
(4, 'Aldy', 'Tes', 1, 4, '2023-07-06', '2023-07-19', 'tes', 'Baru'),
(5, '', '', 1, 2, '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_usergroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `input_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `edit_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_edit` date DEFAULT NULL,
  `row_status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `id_usergroup`, `status`, `input_by`, `tanggal_input`, `edit_by`, `tanggal_edit`, `row_status`) VALUES
(1, 'Hilmanadi Yahya', 'IT-CA', '6313264b63685a83a0ba1a40f2e53798', 'CA0001', '1', 'Superadmin', '2023-05-12', 'Superadmin', '2023-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id_usergroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usergroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `input_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `edit_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_edit` date DEFAULT NULL,
  `row_status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id_usergroup`, `usergroup`, `input_by`, `tanggal_input`, `edit_by`, `tanggal_edit`, `row_status`) VALUES
('CA0001', 'Superadmin', 'Buruh Tani Sawit', '2023-05-17', 'Buruh Tani Sawit', '2023-05-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `headcount`
--
ALTER TABLE `headcount`
  ADD PRIMARY KEY (`id_headcount`),
  ADD KEY `fk_id_thl` (`thl`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `fk_id_karyawan_pribadi` (`karyawan_pribadi`),
  ADD KEY `fk_id_jabatan` (`jabatan`),
  ADD KEY `fk_id_divisi` (`divisi`),
  ADD KEY `fk_id_golongan` (`golongan`),
  ADD KEY `fk_id_keluarga_2` (`keluarga`),
  ADD KEY `fk_id_thl_2` (`thl`);

--
-- Indexes for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  ADD PRIMARY KEY (`id_karyawan_pribadi`),
  ADD KEY `fk_id_keluarga` (`keluarga`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `masa_kontrak`
--
ALTER TABLE `masa_kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_akses`
--
ALTER TABLE `menu_akses`
  ADD PRIMARY KEY (`id_menu_akses`),
  ADD KEY `fk_id_usergroup` (`id_usergroup`),
  ADD KEY `fk_id_menu_2` (`id_menu`);

--
-- Indexes for table `mpp`
--
ALTER TABLE `mpp`
  ADD PRIMARY KEY (`id_mpp`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`),
  ADD KEY `fk_id_menu` (`id_menu`);

--
-- Indexes for table `thl`
--
ALTER TABLE `thl`
  ADD PRIMARY KEY (`id_thl`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_usergroup_2` (`id_usergroup`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id_usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headcount`
--
ALTER TABLE `headcount`
  MODIFY `id_headcount` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  MODIFY `id_karyawan_pribadi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `masa_kontrak`
--
ALTER TABLE `masa_kontrak`
  MODIFY `id_kontrak` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mpp`
--
ALTER TABLE `mpp`
  MODIFY `id_mpp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thl`
--
ALTER TABLE `thl`
  MODIFY `id_thl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `headcount`
--
ALTER TABLE `headcount`
  ADD CONSTRAINT `fk_id_thl` FOREIGN KEY (`thl`) REFERENCES `thl` (`id_thl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `fk_id_divisi` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_golongan` FOREIGN KEY (`golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_karyawan_pribadi` FOREIGN KEY (`karyawan_pribadi`) REFERENCES `karyawan_pribadi` (`id_karyawan_pribadi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_keluarga_2` FOREIGN KEY (`keluarga`) REFERENCES `keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_thl_2` FOREIGN KEY (`thl`) REFERENCES `thl` (`id_thl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  ADD CONSTRAINT `fk_id_divisi_2` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  ADD CONSTRAINT `fk_id_keluarga` FOREIGN KEY (`keluarga`) REFERENCES `keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masa_kontrak`
--
ALTER TABLE `masa_kontrak`
  ADD CONSTRAINT `fk_id_divisi_3` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan_3` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_akses`
--
ALTER TABLE `menu_akses`
  ADD CONSTRAINT `fk_id_menu_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usergroup` FOREIGN KEY (`id_usergroup`) REFERENCES `usergroup` (`id_usergroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `fk_id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thl`
--
ALTER TABLE `thl`
  ADD CONSTRAINT `fk_id_divisi_4` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan_4` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_usergroup_2` FOREIGN KEY (`id_usergroup`) REFERENCES `usergroup` (`id_usergroup`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
