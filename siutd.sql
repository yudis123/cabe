-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 07:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siutd`
--

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `id_darah` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `produk` varchar(25) NOT NULL,
  `a_positif` int(3) NOT NULL,
  `b_positif` int(3) NOT NULL,
  `o_positif` int(3) NOT NULL,
  `ab_positif` int(3) NOT NULL,
  `a_negatif` int(3) NOT NULL,
  `b_negatif` int(3) NOT NULL,
  `o_negatif` int(3) NOT NULL,
  `ab_negatif` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`id_darah`, `tanggal_masuk`, `produk`, `a_positif`, `b_positif`, `o_positif`, `ab_positif`, `a_negatif`, `b_negatif`, `o_negatif`, `ab_negatif`) VALUES
('D001', '2017-12-15', 'WB : Whole Blood', 6, 14, 6, 10, 1, 0, 2, 2),
('D002', '2017-12-15', 'PRC : Packed Red Cell', 8, 4, 9, 21, 3, 0, 7, 0),
('D003', '2017-12-15', 'TC : Trombocyte Concentra', 27, 4, 14, 5, 0, 0, 0, 0),
('D004', '2017-12-16', 'AHF : Cryoprecipitated AH', 2, 1, 6, 2, 0, 0, 0, 0),
('D005', '2017-12-16', 'LP : Liquid Plasma', 8, 5, 6, 4, 0, 0, 0, 0),
('D006', '2017-12-17', 'WE : Wash Erythrocyte', 5, 6, 10, 8, 0, 0, 0, 0),
('D007', '2017-12-18', 'FP : Fresh Plasma', 13, 8, 21, 17, 0, 0, 0, 0),
('D008', '2017-12-19', 'TC AFERERESIS', 0, 0, 0, 0, 0, 0, 0, 0),
('D009', '2017-12-20', 'PRP : Packed Red Plasma', 28, 12, 21, 12, 7, 5, 13, 11),
('D010', '2017-12-28', 'BC : Bufficoat', 4, 6, 2, 8, 0, 0, 0, 0),
('D011', '2017-12-19', 'WB :', -2, 4, 44, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_donor` varchar(10) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal_donor` date NOT NULL,
  `tempat_donor` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_donor`, `waktu`, `tanggal_donor`, `tempat_donor`) VALUES
('D001', '09:15:00', '2017-12-19', 'Lapangan desa Kalidawir, Tulungagung'),
('D002', '09:00:00', '2017-12-20', 'Kantor Kecamatan Kedungwaru, Tulungagung'),
('D003', '08:45:00', '2017-12-21', 'Lapangan SMAN 1 Ngunut, Tulungagung'),
('D005', '06:30:00', '2017-12-24', 'Taman Alun-Alun Tulungagung'),
('D006', '10:00:00', '2017-12-27', 'SMAN 1 Karangrejo, Tulungagung'),
('D007', '08:00:00', '2017-12-30', 'Taman Hutan Kota Tulungagung'),
('D008', '09:00:00', '2018-01-01', 'SMAN 1 Gondang, Tulungagung'),
('D009', '10:00:00', '2018-01-07', 'Pantai Popoh, Tulungagung');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(10) NOT NULL,
  `nama_member` varchar(75) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `wilayah` varchar(5) NOT NULL,
  `telepon` int(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat`, `wilayah`, `telepon`, `email`) VALUES
('M001', 'RS Umum Bhayangkara Tulungagung', 'Jl. I Gusti Ngurah Rai 25-27 Tulungagung', '0355', 331649, 'rsb.tulungagungpolri@yahoo.co.id'),
('M002', 'RS Umum Daerah Dr. Iskak Tulungagung', 'Jl. Wahidin Sudiro Husodo, Tulungagung', '0355', 322609, 'rsu_iskak_ta@yahoo.com'),
('M003', 'RS Umum Islam Orpeha', 'Jl. KH.R. Abdul Fatah, Kauman, Tulungagung', '0355', 323186, 'rsi_orpeha@yahoo.co.id'),
('M004', 'RS. Dharma Medika', 'Jl. Patimura Barat Kutoanyar Tulungagung', '0355', 396055, 'rsdharmamedika@gmail.com'),
('M005', 'RS Umum Islam Madinah', 'Jl. Jatiwaringin Lk2 Ngunut, Tulungagung', '0355', 395055, 'rsimadinah@yahoo.co.id'),
('M006', 'RS Umum Era Medika', 'Jl. I Raya Pulosari No. 13, Ngunut, Tulungagung', '0355', 396566, 'rseramedika@yahoo.co.id'),
('M007', 'RS Satiti Prima Husada ', 'Ds. Balesono, Ngunut, Tulungagung', '0355', 591637, 'rssatitiprimahusada@yahoo.co.id'),
('M008', 'RS Putra Waspada Tulungagung', 'Jl. Jayeng Kusumo, Ngujang, Kedungwaru, Tulungagung', '0355', 335550, 'rsputrawaspada@yahoo.com'),
('M009', 'RS Ibu dan Anak Fauziah', 'Jl. Dr. Sutomo 47 Tulungagung', '0355', 326515, 'rskiafauziah@yahoo.co.id'),
('M010', 'RS Ibu dan Anak Citra Sehat', 'Perumahan Sobontoro Permai Tulungagung', '0355', 326360, 'rsiacitrasehat@gmail.com'),
('M011', 'RS Umum Muhadiyah Bandung', 'Jl. Panglima Sudirman no. 42, Mergayu, Bandung, Tulungagung', '0355', 532760, 'rsum_bandung@yahoo.co.id'),
('M012', 'RS Ibu dan Anak Amanda', 'Jl. Mayor Sujadi No. 38 Tulungagung', '0355', 325587, 'rsia.amanda@gmail.com'),
('M013', 'RS Ibu dan Anak Trisna Medika', 'Jl. Pahlawan No. 216 Tulungagung', '0355', 323274, 'rsia.trisna.medika@gmail.com'),
('M014', 'RS Umum Prima Medika', 'Jl. Soekarna Hatta, Kutoanyar, Tulungagung', '0355', 335982, 'primamedicalz@gmail.com'),
('M015', 'UTD cabang PMI Kota Kediri', 'Jl. Mayor Bismo 15', '0354', 689072, 'utdkotakediri@gmail.com'),
('M016', 'UTD cabang PMI Kabupaten Kediri', 'Jl. Dr. Wahidin Sudiro Husodo no. 2', '0354', 391892, 'utdkabkediri@gmail.com'),
('M017', 'UTD cabang PMI Kabupaten Nganjuk', 'Jl. Mayjend Sungkono No. 10', '0358', 324692, 'utdkabnganjuk@gmail.com'),
('M018', 'zasdfghjk', 'sdfghj', 'dfghj', 2345678, 'df@sdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1),
(2, 'member', 'member', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_donor`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
