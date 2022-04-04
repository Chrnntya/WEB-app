-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 11.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblakses`
--

CREATE TABLE `tblakses` (
  `id_akses` int(11) NOT NULL,
  `jenis_akses` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblakses`
--

INSERT INTO `tblakses` (`id_akses`, `jenis_akses`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcabang`
--

CREATE TABLE `tblcabang` (
  `kodecabang` varchar(50) DEFAULT NULL,
  `namacabang` varchar(50) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tblcabang`
--

INSERT INTO `tblcabang` (`kodecabang`, `namacabang`, `createdby`, `createddate`) VALUES
('C001', 'CIKARANG', 'superadmin', '02/04/2022 11:26:34'),
('C002', 'JAKARTA BARAT', 'superadmin', '03/04/2022 02:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatakendaraan`
--

CREATE TABLE `tbldatakendaraan` (
  `kodetipe` varchar(20) DEFAULT NULL,
  `kodestok` varchar(50) DEFAULT NULL,
  `norangka` varchar(50) DEFAULT NULL,
  `nomesin` varchar(50) DEFAULT NULL,
  `tahunkendaraan` varchar(4) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbldatakendaraan`
--

INSERT INTO `tbldatakendaraan` (`kodetipe`, `kodestok`, `norangka`, `nomesin`, `tahunkendaraan`, `warna`, `createdby`, `createddate`) VALUES
('T001', 'S001', '12345', '12345', '2020', 'BLACK', 'superadmin', '2022-04-03 14:31:00'),
('T001', 'S002', '2212', '3345', '2019', 'RED', 'superadmin', '0000-00-00 00:00:00'),
('T001', 'S007', '12223', '34234', '2019', 'RED', 'superadmin', '0000-00-00 00:00:00'),
('T001', 'S003', '122456', '332411', '2021', 'BLACK', 'superadmin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatapameran`
--

CREATE TABLE `tbldatapameran` (
  `nobukti` varchar(50) DEFAULT NULL,
  `cabang` varchar(50) DEFAULT NULL,
  `tglawalpameran` date DEFAULT NULL,
  `tglakhirpameran` date DEFAULT NULL,
  `namasupir` varchar(50) DEFAULT NULL,
  `dibuatoleh` varchar(50) DEFAULT NULL,
  `dikonfirmasioleh` varchar(50) DEFAULT NULL,
  `isconfirmed` varchar(50) DEFAULT NULL,
  `kodestok` varchar(50) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatapembelian`
--

CREATE TABLE `tbldatapembelian` (
  `kodestok` varchar(50) DEFAULT NULL,
  `kodebuku` varchar(50) DEFAULT NULL,
  `nobuku` varchar(50) DEFAULT NULL,
  `nodo` varchar(50) DEFAULT NULL,
  `tgldo` date DEFAULT NULL,
  `tgldatang` date DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatapenjualan`
--

CREATE TABLE `tbldatapenjualan` (
  `kodestok` varchar(50) NOT NULL,
  `nospk` varchar(50) DEFAULT NULL,
  `namasales` varchar(50) DEFAULT NULL,
  `namakonsumen` varchar(50) DEFAULT NULL,
  `tgldo` date DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatastok`
--

CREATE TABLE `tbldatastok` (
  `kodestok` varchar(50) NOT NULL,
  `jenisstok` varchar(50) DEFAULT NULL,
  `statusstok` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `ispublish` varchar(1) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `createddate` varchar(200) DEFAULT NULL,
  `terjual` varchar(1) DEFAULT NULL COMMENT '1=ya, 0=tidak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbldatastok`
--

INSERT INTO `tbldatastok` (`kodestok`, `jenisstok`, `statusstok`, `lokasi`, `keterangan`, `ispublish`, `createdby`, `createddate`, `terjual`) VALUES
('S001', 'AVANZA VELOS', 'READY', 'JAKARTA', 'Kendaraan ready', '1', 'superadmin', '2022-04-02 20:33:13', '1'),
('S003', 'AVANZA', 'READY', 'CIKARANG', 'Barang dalam perjalanan', '0', 'superadmin', '2022-04-01 20:33:13', '0'),
('S007', 'TOYOTA  ALPHARD', 'READY', 'JAKARTA', 'mobil ready dealer', '1', 'superadmin', '088777', '1'),
('S008', 'TOYOTA ', 'READY', 'JAKARTA', 'mobil ready dealer', '0', 'superadmin', '02/04/2022 09:36:34', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldatatransfer`
--

CREATE TABLE `tbldatatransfer` (
  `nobukti` varchar(50) NOT NULL,
  `statustransfer` varchar(10) DEFAULT NULL,
  `lokasitujuan` varchar(20) DEFAULT NULL,
  `tglkirim` date DEFAULT NULL,
  `tglterima` date DEFAULT NULL,
  `namasupir` varchar(20) DEFAULT NULL,
  `ditransferoleh` varchar(20) DEFAULT NULL,
  `diterimaoleh` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `kodestok` varchar(50) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbldatatransfer`
--

INSERT INTO `tbldatatransfer` (`nobukti`, `statustransfer`, `lokasitujuan`, `tglkirim`, `tglterima`, `namasupir`, `ditransferoleh`, `diterimaoleh`, `keterangan`, `kodestok`, `createdby`, `createddate`) VALUES
('TRF11223321', 'DRAFT', 'JAKARTA', '2022-04-03', NULL, 'ABDUL', 'superadmin', NULL, 'dikirim', 'S003', 'superadmin', '2022-04-03 10:57:47'),
('TRF123456', 'DRAFT', 'JAKARTA', '2022-04-03', NULL, 'ABDUL', 'superadmin', NULL, 'Barang di kirim lengkap', 'S007', 'superadmin', '2022-04-03 00:00:00'),
('TRF1234567', 'DRAFT', 'JAKARTA', '2022-04-03', NULL, 'ABDUL', 'superadmin', NULL, 'Barang di kirim lengkap', 'S008', 'superadmin', '2022-04-03 00:00:00'),
('TRF124553411', 'DRAFT', 'SURABAYA', '2022-04-03', NULL, 'EMANUEL', 'superadmin', NULL, 'Barang sudah dikirim', 'S003', 'superadmin', '2022-04-03 00:00:00'),
('TRF12455342123', 'DRAFT', 'CIKAMPEK', '2022-04-03', NULL, 'ABDUL', 'superadmin', NULL, 'Barang di kirim lengkap', 'S003', 'superadmin', '2022-04-03 00:00:00'),
('TRF321333', 'DRAFT', 'BOGOR', '2022-04-03', NULL, 'ERIK', 'superadmin', NULL, 'mobil ready', 'S001', 'superadmin', '2022-04-03 00:00:00'),
('TRF3342343', 'DRAFT', 'SURABAYA', '2022-04-03', NULL, 'EMANUEL', 'superadmin', NULL, 'dikirim', 'S007', 'superadmin', '2022-04-03 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblhistoristok`
--

CREATE TABLE `tblhistoristok` (
  `tglhistori` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `kodestok` varchar(50) DEFAULT NULL,
  `nobukti` varchar(50) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltipekendaraan`
--

CREATE TABLE `tbltipekendaraan` (
  `kodetipe` varchar(20) NOT NULL,
  `merks` varchar(10) DEFAULT NULL,
  `tipekendaraan` varchar(50) DEFAULT NULL,
  `subtipe` varchar(50) DEFAULT NULL,
  `transmisi` varchar(3) DEFAULT NULL,
  `isdiscontinued` varchar(1) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `createddate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbltipekendaraan`
--

INSERT INTO `tbltipekendaraan` (`kodetipe`, `merks`, `tipekendaraan`, `subtipe`, `transmisi`, `isdiscontinued`, `createdby`, `createddate`) VALUES
('T001', 'TOYOTA', 'MOBIL', 'DIESEL', '1', '0', 'dani', '22-11-2727 08:30:03'),
('T002', 'HYUNDAI', 'MATIC', 'SEMI MATIC', '1', '1', 'superadmin', '02/04/2022 10:08:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `cabang` varchar(20) DEFAULT NULL,
  `akses` varchar(1) DEFAULT NULL COMMENT '1=Holding,2=Holding+SuperUser',
  `isaktif` varchar(1) DEFAULT NULL,
  `createdby` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `pass`, `email`, `namalengkap`, `cabang`, `akses`, `isaktif`, `createdby`, `created_at`, `updated_at`) VALUES
('1111', 'admin', '$2y$10$woI8NbRj9zLP1hRUKVjxWONtnWVzWAolz0AbblHx4iUyXnKkgRoYi', 'admin@gmail.com', 'admin', 'JAKARTA', '2', '1', 'superadmin', '2022-04-02 15:18:44', '2022-04-02 15:18:44'),
('1112', 'pegawai', '$2y$10$RItON3v/TmyrpPMpA4Nr2O12c5KMgz7r4DtJjWx7gHJeb/kx405yS', 'pegawai@gmail.com', 'pegawai', 'JAKARTA', '3', '1', 'superadmin', '2022-04-02 15:22:19', '2022-04-02 15:22:19'),
('1113', 'superadmin', '$2y$10$ZH5pRdI/wf8HEJouv1/iCea/GLQJqzdnN8ZGd4UrzowePK2LYL3Hq', 'superadmin', 'superadmin', 'JAKARTA', '1', '1', 'superadmin', '2022-04-03 00:00:00', '2022-04-02 15:22:19'),
('1233', 'wahyudi23', '$2y$10$uU1oWFHADC1j6m9KwWX7juiiMxTwpapl/.BlvLuXBLjUlGdaH.vcm', 'wahyudi@gmail.com', 'wahyudi', 'SURABAYA', '3', '1', 'dani', '2022-03-31 02:38:14', '2022-03-31 02:38:14'),
('1234', 'dani', '$2y$10$0dFcUUvSClKd4wt4iRs/WOQ5mAK8Dw47TrVIBAK/HK9xvD9cxKbP2', 'dani@gmail.com', 'dani har', 'JAKARTA', '1', '1', 'superadmin', '2022-03-31 11:51:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblakses`
--
ALTER TABLE `tblakses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `tbldatapenjualan`
--
ALTER TABLE `tbldatapenjualan`
  ADD PRIMARY KEY (`kodestok`);

--
-- Indeks untuk tabel `tbldatastok`
--
ALTER TABLE `tbldatastok`
  ADD PRIMARY KEY (`kodestok`);

--
-- Indeks untuk tabel `tbldatatransfer`
--
ALTER TABLE `tbldatatransfer`
  ADD PRIMARY KEY (`nobukti`);

--
-- Indeks untuk tabel `tbltipekendaraan`
--
ALTER TABLE `tbltipekendaraan`
  ADD PRIMARY KEY (`kodetipe`);

--
-- Indeks untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblakses`
--
ALTER TABLE `tblakses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
