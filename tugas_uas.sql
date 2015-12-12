-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 08. Desember 2015 jam 23:52
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `user_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` char(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_hp` int(13) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`user_id`, `nama`, `email`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(24, 'Mulyani', 'my22', '1995-11-22', 'Islam', 'wanita', 'Jl. Gatsu Gg. Maleer 1', 67295902),
(25, 'Andi Gunadi', 'and11', '1995-07-18', 'Islam', 'pria', 'Soreng cilampeni', 234689529),
(26, 'Putra', 'Sulaiman', '1979-04-10', 'Islam', 'pria', 'Jl. Dipatiukur No. 78 Bandung', 873572472);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `nama` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`nama`, `perusahaan`, `jabatan`, `tahun`) VALUES
('Andi Gunadi', 'PT. TELKOM Bandung', 'Direktur', 2015),
('Mulyani', 'PT. INTI Bandung', 'Manajer', 2015),
('Putra Sulaiman', 'PT. KAI ', 'Staf Umum', 2001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `nama` varchar(40) NOT NULL,
  `sd` varchar(40) NOT NULL,
  `periode_sd` longtext NOT NULL,
  `smp` varchar(40) NOT NULL,
  `periode_smp` longtext NOT NULL,
  `sma` varchar(40) NOT NULL,
  `periode_sma` longtext NOT NULL,
  `perguruan_tinggi` varchar(40) NOT NULL,
  `periode_pt` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`nama`, `sd`, `periode_sd`, `smp`, `periode_smp`, `sma`, `periode_sma`, `perguruan_tinggi`, `periode_pt`) VALUES
('Mulyani', 'SDN 1 Bongas', '2001-2007', 'SMPN 1 Bongas', '2007-2010', 'SMKN 1 Losarang', '2010-2013', 'Politeknik Piksi Ganesha', '2013-2015'),
('Putra Sulaiman', 'SDN 1 Bandung', '1986-1989', 'SMPN 1 Bandung', '1989-1992', 'SMAN 1 Bandung', '1992-1995', 'ITB', '1995-1999'),
('Andi Gunadi', 'SDN 1 Cilampeni', '2000-2006', 'SMPN 1 Cilameni', '2006-2009', 'SMKN 1 Ketapang', '2009-2012', 'Politeknik Piksi Ganesha', '2013-2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
