-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2019 pada 15.16
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lomba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` varchar(6) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` char(13) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `username`, `password`, `foto_profil`, `tanggal_daftar`) VALUES
('ADM002', 'Dinda', 'Perempuan', 'Jember', '085678910000', NULL, 'dinda', 'N73+x+j1AoykrvwG4bz6/w==', '', '0000-00-00'),
('ADM003', 'Bayu', 'Laki laki', 'Kediri', '085736445676', NULL, 'bay', 'LbCgliOkOlg=', '', '0000-00-00'),
('ADM004', 'Nabila', 'Perempuan', 'Jember', '086789330440', NULL, 'nabil', '1234', '', '0000-00-00'),
('ADM005', 'NurHD', 'Laki-Laki', 'Jember', '082552374658', 'hadi@gmail.com', 'hadi', '1234', '24112019145552Emperor-cold_hg.jpg', '2019-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_biaya`
--

CREATE TABLE `tabel_biaya` (
  `id_biaya` varchar(6) NOT NULL,
  `nama_biaya` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_biaya`
--

INSERT INTO `tabel_biaya` (`id_biaya`, `nama_biaya`, `biaya`) VALUES
('BIY001', 'Plastik', 725000),
('BIY002', 'Sticker', 250000),
('BIY003', 'Transport', 600000),
('BIY004', 'Service Alat', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detpengeluaran`
--

CREATE TABLE `tabel_detpengeluaran` (
  `id_pengeluaran` varchar(6) NOT NULL,
  `id_biaya` varchar(6) NOT NULL,
  `quantity_png` int(11) NOT NULL,
  `sub_total_png` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_detpengeluaran`
--

INSERT INTO `tabel_detpengeluaran` (`id_pengeluaran`, `id_biaya`, `quantity_png`, `sub_total_png`) VALUES
('PNG001', 'BIY002', 1, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detpenjualan`
--

CREATE TABLE `tabel_detpenjualan` (
  `id_penjualan` varchar(6) NOT NULL,
  `id_produk` varchar(6) NOT NULL,
  `quantity_pnj` int(11) NOT NULL,
  `sub_total_pnj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_detpenjualan`
--

INSERT INTO `tabel_detpenjualan` (`id_penjualan`, `id_produk`, `quantity_pnj`, `sub_total_pnj`) VALUES
('PNJ001', 'PRD001', 1, 5000),
('PNJ002', 'PRD001', 2, 10000),
('PNJ002', 'PRD004', 2, 25000),
('PNJ003', 'PRD004', 2, 25000),
('PNJ004', 'PRD002', 10, 110000),
('PNJ005', 'PRD002', 1, 11000),
('PNJ006', 'PRD004', 3, 37500),
('PNJ007', 'PRD001', 125, 625000),
('PNJ008', 'PRD004', 100, 1250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_labarugi`
--

CREATE TABLE `tabel_labarugi` (
  `id_labarugi` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `total_pengeluaran` int(11) NOT NULL,
  `total_pasok` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(4) NOT NULL,
  `id_admin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasok_bhn`
--

CREATE TABLE `tabel_pasok_bhn` (
  `id_pasok` varchar(5) NOT NULL,
  `nama_bahan` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_pasok` date NOT NULL,
  `id_suplier` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pasok_bhn`
--

INSERT INTO `tabel_pasok_bhn` (`id_pasok`, `nama_bahan`, `jumlah`, `satuan`, `harga`, `tanggal_pasok`, `id_suplier`) VALUES
('PS001', 'Marning', 1, 'Ton', 4000000, '2019-06-17', 'SP002'),
('PS002', 'Marning', 1, 'Kwintal', 400000, '2019-05-17', 'SP001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengeluaran`
--

CREATE TABLE `tabel_pengeluaran` (
  `id_pengeluaran` varchar(6) NOT NULL,
  `jam` time NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `total_png` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_admin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pengeluaran`
--

INSERT INTO `tabel_pengeluaran` (`id_pengeluaran`, `jam`, `tanggal_pengeluaran`, `total_png`, `bayar`, `kembali`, `id_admin`) VALUES
('PNG001', '00:00:00', '2019-05-17', 250000, 250000, 0, 'ADM003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_penjualan` varchar(6) NOT NULL,
  `jam` time NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_pnj` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_admin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_penjualan`, `jam`, `tanggal_penjualan`, `total_pnj`, `bayar`, `kembali`, `id_admin`) VALUES
('PNJ001', '00:00:00', '2019-06-16', 5000, 5000, 0, 'ADM003'),
('PNJ002', '00:00:00', '2019-06-16', 35000, 35000, 0, 'ADM003'),
('PNJ003', '00:00:00', '2019-06-16', 25000, 25000, 0, 'ADM003'),
('PNJ004', '00:00:00', '2019-06-17', 110000, 110000, 0, 'ADM003'),
('PNJ005', '00:00:00', '2019-07-17', 11000, 0, 0, 'ADM003'),
('PNJ006', '00:00:00', '2019-06-17', 37500, 40000, 2500, 'ADM003'),
('PNJ007', '00:00:00', '2019-05-17', 625000, 700000, 75000, 'ADM003'),
('PNJ008', '00:00:00', '2019-05-17', 1250000, 1250000, 0, 'ADM003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id_produk` varchar(6) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `tanggal_input` date NOT NULL DEFAULT '0000-00-00',
  `foto_produk` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_produk`
--

INSERT INTO `tabel_produk` (`id_produk`, `nama_produk`, `stok`, `harga_produk`, `tanggal_input`, `foto_produk`) VALUES
('PRD001', 'Marning Kecil', 1000, 5000, '0000-00-00', ''),
('PRD002', 'Marning Besar', 750, 11000, '0000-00-00', ''),
('PRD003', 'Marning Pedas', 750, 12000, '0000-00-00', ''),
('PRD004', 'Marning Pedas Manis', 650, 12500, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_suplier`
--

CREATE TABLE `tabel_suplier` (
  `id_suplier` varchar(5) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_suplier`
--

INSERT INTO `tabel_suplier` (`id_suplier`, `nama_suplier`, `alamat`, `no_hp`) VALUES
('SP001', 'Waluyo', 'Bondowoso', '089765432123'),
('SP002', 'Sunari', 'Malang', '087657445666'),
('SP003', 'Tukimin', 'Situbondo', '083556776446'),
('SP004', 'Samigrain', 'Kediri', '087658778990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_biaya`
--
ALTER TABLE `tabel_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tabel_detpengeluaran`
--
ALTER TABLE `tabel_detpengeluaran`
  ADD KEY `tabel_detpengeluaran_ibfk_1` (`id_biaya`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`);

--
-- Indexes for table `tabel_detpenjualan`
--
ALTER TABLE `tabel_detpenjualan`
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `tabel_labarugi`
--
ALTER TABLE `tabel_labarugi`
  ADD PRIMARY KEY (`id_labarugi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tabel_pasok_bhn`
--
ALTER TABLE `tabel_pasok_bhn`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indexes for table `tabel_pengeluaran`
--
ALTER TABLE `tabel_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tabel_suplier`
--
ALTER TABLE `tabel_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_detpengeluaran`
--
ALTER TABLE `tabel_detpengeluaran`
  ADD CONSTRAINT `tabel_detpengeluaran_ibfk_1` FOREIGN KEY (`id_pengeluaran`) REFERENCES `tabel_pengeluaran` (`id_pengeluaran`),
  ADD CONSTRAINT `tabel_detpengeluaran_ibfk_2` FOREIGN KEY (`id_biaya`) REFERENCES `tabel_biaya` (`id_biaya`);

--
-- Ketidakleluasaan untuk tabel `tabel_detpenjualan`
--
ALTER TABLE `tabel_detpenjualan`
  ADD CONSTRAINT `tabel_detpenjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tabel_penjualan` (`id_penjualan`),
  ADD CONSTRAINT `tabel_detpenjualan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tabel_produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `tabel_labarugi`
--
ALTER TABLE `tabel_labarugi`
  ADD CONSTRAINT `tabel_labarugi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tabel_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tabel_pasok_bhn`
--
ALTER TABLE `tabel_pasok_bhn`
  ADD CONSTRAINT `tabel_pasok_bhn_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `tabel_suplier` (`id_suplier`);

--
-- Ketidakleluasaan untuk tabel `tabel_pengeluaran`
--
ALTER TABLE `tabel_pengeluaran`
  ADD CONSTRAINT `tabel_pengeluaran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tabel_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD CONSTRAINT `tabel_penjualan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tabel_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
