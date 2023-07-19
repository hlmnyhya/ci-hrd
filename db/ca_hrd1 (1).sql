-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2023 at 05:59 AM
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
-- Database: `ca_hrd1`
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
  `karyawan_pribadi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `tgl_masuk`, `masa_kerja`, `divisi`, `jabatan`, `status_terakhir`, `golongan`, `bpjs_tk`, `bpjs_kes`, `npwp`, `status_ptkp`, `alamat_ktp`, `alamat_domisili`, `pkwt_mulai`, `pkwt_selesai`, `pkwt2_mulai`, `pkwt2_selesai`, `tht`, `thl`, `percobaan_mulai`, `percobaan_selesai`, `karyawan_pribadi`) VALUES
(1, 'Aldyanto', '2023-05-23', '2023-05-17', 2, 2, 'Duda', 1, '2442525232', 34234234232, 423423423424, '4234234232', 'Jl. Sungai Andai', 'Jl. Sungai Andai', '2023-05-16', '2023-05-16', '2023-05-16', '2023-05-24', 0, 1, '2023-05-15', '2023-05-15', 1),
(3, 'Haywood Mertina', '2023-07-18', '2023-07-18', 1, 3, 'Dadu', 1, '437242827', 4762376426327, 436264327, '4736432672', 'Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', 'Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', '2023-07-18', '2023-07-18', '2023-07-18', '2023-07-18', 2023, 4, '2023-07-18', '2023-07-18', 7);

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
(1, 'Ruby', 'Banjarbaru', 'Kurau', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'A', 2),
(2, 'Akbar', 'Pelaihari', 'Kintap', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 57, 'B', 1),
(3, 'Supian', 'Bati-Bati', 'Pelaihari', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'AB', 1),
(5, 'Saffa', 'Rantau', 'Batu Ampar', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'O', 1),
(6, 'Junai', 'Batu Ampar', 'Sungai Danau', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Informasi', '2023-07-07', 21, 'B', 1),
(7, 'Haywood Mertina', 'Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', 'Tambang Ulang', 'Islam', 'Perempuan', 'SMA', 'MS', '2023-07-18', 21, 'B', 3);

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
(1, 'Samawadi', 'Anto', 'Yanto', 'Boruto'),
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
-- Table structure for table `thl`
--

CREATE TABLE `thl` (
  `id_thl` int NOT NULL,
  `nama_thl` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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

INSERT INTO `thl` (`id_thl`, `nama_thl`, `nik`, `id_divisi`, `id_jabatan`, `tanggal_masuk`, `tanggal_keluar`, `keterangan`, `status`) VALUES
(1, 'Amaleta Haggie', '53-478-4516', 2, 2, '2023-03-11', '2022-11-22', 'Karyawan Baru', 'Single'),
(4, 'Aldy', 'Tes', 1, 4, '2023-07-06', '2023-07-19', 'tes', 'Baru'),
(5, '', '', 1, 2, '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'SuperAdmin', 'SuperAdmin', NULL, '202cb962ac59075b964b07152d234b70', 1, 1, 11072023);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`, `url`) VALUES
(1, 'Dashboard', 'fa fa-dashboard yellow_color', '#'),
(2, 'MPP', 'fa fa-search blue2_color', 'mpp/mpp'),
(3, 'THL', 'fa fa-exchange yellow_color', 'Thl/thl'),
(4, 'Data Karyawan', 'fa fa-user purple_color', '#'),
(5, 'Riwayat Golongan', 'fa fa-area-chart yellow_color', 'golongan'),
(6, 'Riwayat Jabatan', 'fa fa-briefcase blue2_color', 'jabatan'),
(7, 'Data Pelamar', 'fa fa-users purple_color', '#'),
(8, 'Access Control List', 'fa fa-key yellow_color', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'SuperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `submenu` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `submenu`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Candi Artha', 'Dashboard', '', 1),
(2, 1, 'Lunik Anugerah', 'Dashboard1', '', 1),
(3, 1, 'Plasma Batakan', 'Dashboard2', '', 1),
(4, 1, 'PKS', 'Dashboard3', '', 1),
(5, 4, 'Data Pribadi', 'DataKaryawan/Pribadi', '', 1),
(6, 4, 'Data Karyawan', 'Karyawan', '', 1),
(7, 7, 'Data Pelamar', 'DataPelamar/DataPelamar', '', 1),
(8, 8, 'Menu', 'Menu/menu', '', 1),
(9, 8, 'Sub Menu', 'Menu/Menu/Submenu', '', 1),
(10, 8, 'Role', 'menu/admin/role', 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_golongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headcount`
--
ALTER TABLE `headcount`
  MODIFY `id_headcount` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  MODIFY `id_karyawan_pribadi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Constraints for table `thl`
--
ALTER TABLE `thl`
  ADD CONSTRAINT `fk_id_divisi_4` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan_4` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
