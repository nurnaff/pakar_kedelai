-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2015 pada 05.34
-- Versi Server: 5.1.22-rc-community
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkedelai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`no`, `id`, `pertanyaan`) VALUES
(1, 1, 'terdapat bercak-bercak berisi uredia'),
(2, 1, 'bercak coklat kemerahan seperti warna karat'),
(3, 2, 'Bercak kecil berwarna hijau pucat, tampak pada kedua permukaan daun, menonjol pada bagian tengah lalu menjadi bisul warna coklat muda atau putih pada permukaan bawah daun'),
(4, 2, 'bercak bervariasi dari bintik kecil sampai besar tidak beraturan,berwarna kecoklatan'),
(5, 3, 'Perkecambahan biji terganggu'),
(6, 3, 'Pada batang akan timbul bintik-bintik hitam berupa duri-duri jamur yang menjadi ciri khasnya'),
(7, 4, 'Pada permukaan bawah daun timbul bercak warna putih kekuningan, umumnya bulat dengan batas yang jelas, berukuran 1-2mm'),
(8, 4, 'pada permukaan bawah daun terutama dipagi hari yang dingin timbul misselium dan konidium'),
(9, 5, 'Bercak coklat kemerahan timbul pada daun, batang, polong, biji, hipokotil dan akar dengan diameter 10-15 mm'),
(10, 6, 'Pada tanaman yang baru tumbuh terjadi busuk (hawar) di dekat akar, kemudian tanaman mati karena rebah'),
(11, 7, 'Infeksi terjadi pada pangkal batang atau sedikit di bawah permukaan tanah berupa bercak coklat tua/warna gelap dan meluas sampai ke hipokotil'),
(12, 7, 'Miselium putih yang terbentuk pada pangkal batang, sisa daun dan pada tanah di sekililing tanaman sakit, miselium menjalar ke atas batang sampai beberapa centimeter'),
(13, 8, 'Pada daun timbul saat pengisian biji dengan kenampakan warna ungu muda selanjutnya menjadi kasar, kaku dan berwarna ungu kemerahan'),
(14, 8, 'Biji mengalami diskolorasi dengan warna yang bervariasi dari merah muda atau ungu pucat sampai ungu tua dan berbentuk titik sampai tidak beraturan dan membesar'),
(15, 9, 'Tulang daun pada daun yang masih muda menjadi kurang jernih'),
(16, 9, 'Ukuran bijinya mengecil dan jumlah biji berkurang sehingga hasil biji turun'),
(17, 1, 'Bercak berkembang ke daun-daun di atasnya sesuai bertambahnya umur tanaman'),
(18, 1, 'Bercak utama terdapat pada permukaan bawah daun'),
(19, 1, 'Bentuk bercak umumnya bersudut banyak berukuran sampai 1 mm'),
(20, 1, 'Bercak terlihat pada bagian batang dan tangkai daun'),
(21, 2, 'Bercak karat lebih kecil dan sporanya kelihatan jelas'),
(22, 2, 'Bercak kecil bersatu membentuk daerah nekrotik yang mudah robek oleh angin sehingga daun berlubang-lubang'),
(23, 2, 'Daun gugur'),
(24, 3, 'Tulang daun pada permukaan bawah tanaman biasanya menebal dengan warna kecoklatan'),
(25, 4, 'Kadang-kadang bercak menyatu membentuk bercak lebih lebar yang selanjutnya dapat menyebabkan bentuk daun abnormal, kaku'),
(26, 5, 'Kadang-kadang mengalami sonasi (membentuk lingkaran seperti pada papan tembak)'),
(27, 6, 'Pada daun, batang dan polong timbul hawar dengan arah serangan dari bawah ke atas'),
(28, 6, 'Tanaman akan kering'),
(29, 6, 'Pada kondisi yang sangat lembab timbul miselium yang menyebabkan daun-daun akan lengket satu sama lain menyerupai sarang laba-laba'),
(30, 7, 'Tanaman layu mendadak'),
(31, 7, 'Daun-daun yang terinfeksi mula-mula berupa bercak bulat berwarna merah sampai coklat dengan pinggir berwarna coklat tua, kemudian mengering dan menempel pada batang mati'),
(32, 8, 'Bercak berbentuk menyudut sampai tidak beraturan dengan ukuran yang beragam dari titik sebesar jarum sampai 10mm dan menyatu menjadi bercak yang lebih besar'),
(33, 8, 'Pada biji yang terserang timbul bercak berwarna ungu'),
(34, 9, 'Daun berkerut dan mempunyai gambaran mosaik dengan warna hijau gelap di sepanjang tulang daun'),
(35, 9, 'Tepi daun sering mengalami klorosis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(250) NOT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `keterangan`, `nilai`) VALUES
(1, 'Karat', 0.8),
(2, 'Pustul Bakteri', 0.6),
(3, 'antraknose', 0.6),
(4, 'downy mildew', 0.8),
(5, 'target spot', 0.8),
(6, 'rhizoctonia solani', 0.6),
(7, 'hawar batang', 0.8),
(8, 'cercospora kikuchii', 0.8),
(9, 'virus mosaik', 0.8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
