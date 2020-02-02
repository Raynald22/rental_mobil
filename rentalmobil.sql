-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 23.17
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama`, `kategori`, `stok`, `harga`, `gambar`) VALUES
(1, 'Jazz', 'Honda', 1, 50000, '1292.jpg'),
(2, 'Ayla', 'Honda', 1, 300000, '135.jpg'),
(3, 'CRV', 'Honda', 1, 1000000, '134.jpg'),
(4, 'X-Trail', 'Nissan', 2, 200000, '138.jpg'),
(13, 'APV', 'Suzuki', 1, 600000, '131.jpg'),
(14, 'Xenia', 'Daihatsu', 1, 300000, '130.jpg'),
(15, 'Ertiga', 'Suzuki', 1, 400000, '1321.jpg'),
(16, 'Alphard', 'Honda', 1, 1000000, '1363.jpg'),
(17, 'Brio', 'Honda', 1, 350000, '1411.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `nama`, `alamat`, `gambar`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Reynaldi', 'Jl.Salemba 22', '130.jpg', '2019-07-14 14:27:40', '2019-07-15 14:27:40'),
(2, 'Reynaldi', 'Jl.Salemba 22', '', '2019-07-14 14:28:11', '2019-07-15 14:28:11'),
(5, 'Jesslyn', 'Jl.Palembang', '', '2019-07-14 16:22:05', '2019-07-15 16:22:05'),
(6, 'Diko', 'jl.ggygyg', '', '2019-07-14 17:19:51', '2019-07-15 17:19:51'),
(7, '', '', '', '2019-07-15 04:18:28', '2019-07-16 04:18:28'),
(8, 'Reynaldi', 'Jl.Salemba 22', '', '2019-07-15 04:34:09', '2019-07-16 04:34:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `pilihan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_order`, `id_mobil`, `nama`, `jumlah`, `harga`, `gambar`, `pilihan`) VALUES
(1, 3, 1, 'Jazz', 1, 50000, '', ''),
(2, 4, 13, 'APV', 1, 600000, '', ''),
(5, 0, 2, 'Ayla', 1, 300000, '', ''),
(6, 0, 1, 'Jazz', 1, 50000, '', ''),
(7, 0, 2, 'Ayla', 3, 300000, '', ''),
(8, 0, 17, 'Brio', 1, 350000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Reynaldi Fikri', 'inyourd7@gmail.com', 'default.jpg', '$2y$10$1xJ2Wg/kdmU.8S8ZOlzV.u9NgNUxTBLTVIQXeOVLY3f2aHA2hK.5q', 1, 1, 1562942919),
(12, 'Jesslyn❤', 'ashiap@gmail.com', 'default2.jpg', '$2y$10$iSAaWu7RCh5gJYi1l/2d8.hh/.TfO/20pCx3ry9khdili/FRvGAmy', 2, 1, 1562969595),
(13, 'Jesslyn❤', 're@gmail.com', 'default2.jpg', '$2y$10$9PkX/QYGPtV6bIyZwNoGXOodzZSg.WiqnFcCOMJuQebFQQ/wtRSvm', 1, 1, 1563073238);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
