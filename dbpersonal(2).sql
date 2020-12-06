-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2020 pada 07.38
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpersonal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(10) NOT NULL,
  `kehadiran` int(10) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `Id_Peg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `kehadiran`, `gaji`, `Id_Peg`) VALUES
(23, 5, 'Rp.50.000', 103),
(30, 1, 'Rp.10.000', 104),
(45, 10, 'Rp.100.000', 111),
(123, 4, 'Rp.40.000', 102),
(222, 4, 'Rp.40.000', 105);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `IdBiodata` int(11) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Kota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`IdBiodata`, `Nama`, `Email`, `Alamat`, `Kota`) VALUES
(100, 'gede bagus', 'gedebagus@gmail.com', 'jl. puputan 10 denpasar', 'denpasar'),
(101, 'kadek jegeg', 'kadkekjegeg@gmail.com', 'jl. jegeg 11 surabaya', 'surabaya'),
(102, 'ketut sakti', 'ketutsakti@gmail.com', 'jl. sakti 12 jakarta', 'jakarta'),
(103, 'komang ayu', 'komangayu@gmail.com', 'jl. ayuning 50 denpasar', 'denpasar'),
(104, 'komang lengkong', 'komanglengkong@gmail.com', 'jl. putu made 10 Medan', 'medan'),
(105, 'wayan dueg', 'wayandueg@gmail.com', 'jl. cendrawasih 11 jayapura', 'jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `Id_Peg` int(5) NOT NULL,
  `Nama_Peg` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Id_Dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpegawai`
--

INSERT INTO `tbpegawai` (`Id_Peg`, `Nama_Peg`, `Alamat`, `Id_Dept`) VALUES
(102, 'Made Sakti', 'Tabanan', 'A001'),
(103, 'Gede Bagus', 'Gianyar', 'A002'),
(104, 'Wayan Asli', 'Denpasar', 'A003'),
(105, 'Komang Buyung', 'Denpasar', 'A002'),
(111, 'Agus', 'Bangli', 'A011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_departement`
--

CREATE TABLE `tb_departement` (
  `Id_Dept` varchar(5) NOT NULL,
  `Nama_Dept` varchar(20) NOT NULL,
  `gaji` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_departement`
--

INSERT INTO `tb_departement` (`Id_Dept`, `Nama_Dept`, `gaji`) VALUES
('A001', 'IT', 'Rp.1,500.000'),
('A002', 'Keuangan', 'Rp.1,200.000'),
('A003', 'HRD', 'Rp.1,300.000'),
('A004', 'Pemasaran', 'Rp.1,100.000'),
('A011', 'Developer', 'RP.1,200.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`IdBiodata`);

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`Id_Peg`);

--
-- Indexes for table `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD PRIMARY KEY (`Id_Dept`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `IdBiodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
