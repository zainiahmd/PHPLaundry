-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2014 pada 19.00
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(10, 'beti', 'beti@ymail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE IF NOT EXISTS `detail_pemesanan` (
  `Id_pemesanan` varchar(15) NOT NULL,
  `No_KTP` varchar(20) NOT NULL,
  `Berat(kg)` int(11) NOT NULL,
  `Total_harga` int(11) NOT NULL,
  `Status_bayar` varchar(20) NOT NULL,
  UNIQUE KEY `Id_pemesanan` (`Id_pemesanan`),
  UNIQUE KEY `No_KTP` (`No_KTP`),
  KEY `Id_pemesanan_2` (`Id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `No_KTP` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_Telp` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`No_KTP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`No_KTP`, `Nama`, `Alamat`, `Email`, `No_Telp`, `Password`) VALUES
('123', 'beti', 'dk', 'beti@ymail.com', '0899988888', '12345'),
('123412341234', 'dicoba', 'asrama', 'coba@gmail.com', '087812345678', 'coba'),
('1234567890123', 'Izal Rivai', 'asrama', 'ijal@gmail.com', '087845031494', '123456'),
('5432154321123', 'Orang Baru', 'Perumahan Buah Batu, Blok c No 144', 'baru@rocketmail.com', '02295455210', '654321'),
('9876543210123', 'Orang Sana', 'Jl. Sukabirus', 'sana@yahoo.com', '082126230018', 'abc123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `Id_pemesanan` varchar(15) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Tgl_pesan` date NOT NULL,
  `Type_loundry` varchar(20) NOT NULL,
  `Type_lainnya` varchar(20) NOT NULL,
  `Berat(kg)` int(11) NOT NULL,
  `Status_pengambilan` varchar(20) NOT NULL,
  `Total_harga` int(20) NOT NULL,
  PRIMARY KEY (`Id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`No_KTP`) REFERENCES `pelanggan` (`No_KTP`),
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`Id_pemesanan`) REFERENCES `pemesanan` (`Id_pemesanan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
