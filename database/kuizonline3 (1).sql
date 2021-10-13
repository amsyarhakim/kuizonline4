-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 11:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizonline3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `aras` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `password`, `nama`, `jantina`, `aras`) VALUES
('000001', '0001', 'AMSYAR NURHAKIM BIN ABDUL RASHID ', 'LELAKI', 'PELAJAR'),
('000002', '0002', 'MUHAMMAD HAZIQ BIN ROHAIZAN', 'LELAKI', 'PELAJAR'),
('000004', '0004', 'FARISHA BINTI SHUKOR', 'PEREMPUAN', 'PELAJAR'),
('000005', '0005', 'NUUR AMIRA BINTI AZMAN', 'PEREMPUAN', 'PELAJAR'),
('000006', '0006', 'SYAHDINA AQILAH BINTI AINUDDIN', 'PEREMPUAN', 'PELAJAR'),
('000007', '0007', 'ALIF MIRZA BIN KAMAL SAHAR', 'LELAKI', 'PELAJAR'),
('000008', '0008', 'AFHAM FARIHIN BIN HANAFIAH ', 'LELAKI', 'PELAJAR'),
('000009', '0009', 'AZFAREEQ LUQMAN BIN A.AZMI', 'LELAKI', 'PELAJAR'),
('000010', '0010', 'MOHD TOHIR BIN HASIP', 'LELAKI', 'PELAJAR'),
('000011', '0011', 'SITI SAFIAH BINTI FAISIR ANUAR', 'PEREMPUAN', 'PELAJAR'),
('000012', '0012', 'ADWA MUZAFFAR BIN ABDUL MAJID', 'LELAKI', 'PELAJAR'),
('123456789123', '1234', 'ADMIN', 'LELAKI', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `perekodan`
--

CREATE TABLE `perekodan` (
  `idperekodan` int(11) NOT NULL,
  `idpengguna` varchar(12) NOT NULL,
  `idtopik` int(10) NOT NULL,
  `skor` varchar(5) NOT NULL,
  `catatan_masa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perekodan`
--

INSERT INTO `perekodan` (`idperekodan`, `idpengguna`, `idtopik`, `skor`, `catatan_masa`) VALUES
(1, '111111111112', 2, '5', '2021-08-15 05:25:17'),
(2, '111111111112', 2, '0', '2021-08-15 05:25:31'),
(3, '111111111112', 2, '0', '2021-08-15 05:25:41'),
(4, '111111111112', 2, '0', '2021-08-15 05:25:46'),
(5, '111111111116', 2, '2', '2021-08-24 03:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idpilihan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `jawapan` varchar(20) NOT NULL,
  `pilihan_jawapan` text NOT NULL,
  `idsoalan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`idpilihan`, `nom_soalan`, `jawapan`, `pilihan_jawapan`, `idsoalan`) VALUES
(1, 1, '1', 'LEE ZII JIA', 1),
(2, 1, '0', 'ZIZAN RAZAK', 1),
(3, 1, '0', 'JOHAN ERA', 1),
(4, 1, '0', 'LEE CHONG WEI', 1),
(5, 2, '1', 'LEE ZII JIA', 2),
(6, 2, '0', 'ZIZAN RAZAK', 2),
(7, 2, '0', 'JOHAN ERA', 2),
(8, 2, '0', 'LEE CHONG WEI', 2),
(9, 1, '1', '1946', 3),
(10, 1, '0', '1945', 3),
(11, 1, '0', '1943', 3),
(12, 1, '0', '1947', 3),
(13, 2, '1', 'DATO ONN JAAFAR', 4),
(14, 2, '0', 'TUANKU ABDUL RAHMAN', 4),
(15, 2, '0', 'TUN ABDUL RAZAK', 4),
(16, 2, '0', 'TUN DR MAHATHIR ', 4),
(17, 3, '0', 'UMNO,PAS,PKR', 5),
(18, 3, '1', 'UMNO,MCA,MIC', 5),
(19, 3, '0', 'PAS,DAP,AMANAH', 5),
(20, 3, '0', 'PPBM,WARISAN,STAR', 5),
(21, 4, '0', 'DR WEE KA SIONG', 6),
(22, 4, '0', 'LEE SAN CHOON', 6),
(23, 4, '1', 'TUN TAN CHENG LOCK', 6),
(24, 4, '0', 'LING LIONG SIK', 6),
(25, 5, '0', 'PAKATAN HARAPAN', 7),
(26, 5, '1', 'BARISAN NASIONAL', 7),
(27, 5, '0', 'BARISAN ALTERNATIF', 7),
(28, 5, '0', 'PERIKATAN NASIONAL', 7),
(29, 1, '1', 'ADA', 8),
(30, 1, '0', 'ADAG', 8),
(31, 1, '0', 'ADAD', 8),
(32, 1, '0', 'ADAF', 8),
(33, 2, '1', 'DATO ONN JAAFAR', 9),
(34, 2, '0', 'TUANKU ABDUL RAHMAN', 9),
(35, 2, '0', 'NAJIB RAZAK', 9),
(36, 2, '0', 'TUN DR MAHATHIR ', 9),
(37, 3, '1', '1946', 10),
(38, 3, '0', '1945', 10),
(39, 3, '0', '1943', 10),
(40, 3, '0', '1947', 10),
(41, 4, '1', '1957', 11),
(42, 4, '0', '1945', 11),
(43, 4, '0', '1943', 11),
(44, 4, '0', '1947', 11),
(45, 1, '', 'UMNO', 0),
(46, 1, '1', 'AMSYAR', 12),
(47, 1, '0', 'AMSYHAR', 12),
(48, 1, '0', 'TUN ABDUL RAZAK', 12),
(49, 1, '0', 'PPBM,WARISAN,STAR', 12),
(50, 2, '0', 'AMSYAR', 13),
(51, 2, '0', '5', 13),
(52, 2, '1', 'JOHAN ERA', 13),
(53, 2, '0', 'TUN DR MAHATHIR ', 13),
(54, 3, '1', 'PARTI', 14),
(55, 3, '0', 'GABUNGAN', 14),
(56, 3, '0', 'PERSATUAN', 14),
(57, 3, '0', 'KOMUNITI', 14),
(58, 4, '1', '10A', 15),
(59, 4, '0', '9A', 15),
(60, 4, '0', '8A', 15),
(61, 4, '0', '7A', 15),
(62, 5, '0', 'DFSDD', 16),
(63, 5, '1', 'SDFDS', 16),
(64, 5, '0', 'SDVS', 16),
(65, 5, '0', 'SDS', 16),
(66, 6, '0', 'ASDAS', 17),
(67, 6, '0', 'ASDA', 17),
(68, 6, '1', 'DAS', 17),
(69, 6, '0', 'DASD', 17);

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` int(11) NOT NULL,
  `nom_soalan` int(11) NOT NULL,
  `soalan` text NOT NULL,
  `gambarajah` varchar(20) NOT NULL,
  `idtopik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `nom_soalan`, `soalan`, `gambarajah`, `idtopik`) VALUES
(12, 1, 'SIAPAKAH NAMA SAYA?', '', 10),
(13, 2, 'HAI NAMA AWAK SIAPA??', '', 10),
(14, 3, 'APAKAH ITU UMNO?', '', 10),
(15, 4, 'AWAK TARGET DAPAT BERAPA A?', '', 10),
(16, 5, 'UJHJJK', '', 10),
(17, 6, 'DASASAS', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` int(11) NOT NULL,
  `topik` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idtopik`, `topik`, `jenis`, `markah`) VALUES
(10, 'USAHA KE ARAH KEMERDEKAAN', 'MCQ/TF', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD PRIMARY KEY (`idperekodan`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`idpilihan`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perekodan`
--
ALTER TABLE `perekodan`
  MODIFY `idperekodan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idpilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
  MODIFY `idsoalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
