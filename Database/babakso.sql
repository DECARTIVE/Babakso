-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jan 2024 pada 08.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babakso`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `mail`, `isi`, `waktu`) VALUES
(1, 'Bambang', 'user@mail.com', 'dry yzt', '2024-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_upload` datetime DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `judul`, `isi`, `tanggal_upload`, `gambar`) VALUES
(8, 'Bakso Kuah', 'Berikut adalah resep bakso kuah yang lezat dan mudah untuk disiapkan:\r\n\r\n<!-- Resep Bakso Kuah -->\r\n\r\n<h2>Bahan-bahan:</h2>\r\n\r\n<h3>Untuk Bakso:</h3>\r\n<ul>\r\n  <li>250 gram daging sapi cincang</li>\r\n  <li>150 gram tepung tapioka</li>\r\n  <li>1 sendok teh garam</li>\r\n  <li>1/2 sendok teh merica bubuk</li>\r\n  <li>1 sendok makan bawang putih cincang</li>\r\n  <li>1 sendok makan bawang merah cincang</li>\r\n  <li>1 sendok makan kecap manis</li>\r\n  <li>1 butir telur</li>\r\n  <li>Es batu secukupnya (optional)</li>\r\n</ul>\r\n\r\n<p>Atau bisa membeli bakso yang sudah jadi dari Babakso</p>\r\n\r\n<h3>Untuk Kuah:</h3>\r\n<ul>\r\n  <li>1 liter kaldu sapi (bisa menggunakan kaldu instan)</li>\r\n  <li>2 siung bawang putih, cincang halus</li>\r\n  <li>2 cm jahe, memarkan</li>\r\n  <li>Garam dan merica secukupnya</li>\r\n  <li>1 sendok makan kecap manis</li>\r\n  <li>1 sendok makan minyak wijen</li>\r\n  <li>1 batang seledri, iris halus</li>\r\n</ul>\r\n\r\n<h3>Bahan Pelengkap:</h3>\r\n<ul>\r\n  <li>Bakmi atau bihun, rebus sesuai petunjuk kemasan</li>\r\n  <li>Sawi hijau, potong-potong dan rebus sebentar</li>\r\n  <li>Telur rebus (opsional)</li>\r\n  <li>Bawang goreng sebagai hiasan</li>\r\n  <li>Daun bawang, iris halus</li>\r\n</ul>\r\n\r\n<h2>Instruksi:</h2>\r\n\r\n<h3>1. Membuat Bakso:</h3>\r\n<ol>\r\n  <li>Campurkan daging sapi cincang, tepung tapioka, garam, merica bubuk, bawang putih, bawang merah, kecap manis, dan telur dalam sebuah mangkuk besar.</li>\r\n  <li>Aduk rata hingga adonan tercampur homogen.</li>\r\n  <li>Ambil sejumput adonan, bulatkan menjadi bola bakso. Ulangi proses hingga adonan habis.</li>\r\n  <li>Jika suka, tambahkan es batu ke dalam adonan bakso untuk membuat tekstur lebih kenyal.</li>\r\n  <li>Didihkan air dalam panci besar, lalu masak bakso dalam air mendidih hingga bola-bola bakso mengapung. Angkat dan tiriskan.</li>\r\n</ol>\r\n\r\n<p><strong>NB:</strong> Jika telah membeli BABAKSO lewati bagian ini</p>\r\n\r\n<h3>2. Membuat Kuah:</h3>\r\n<ol>\r\n  <li>Rebus kaldu sapi dalam panci besar.</li>\r\n  <li>Tumis bawang putih dan jahe dengan sedikit minyak hingga harum.</li>\r\n  <li>Tambahkan tumisan bawang putih dan jahe ke dalam kaldu sapi.</li>\r\n  <li>Beri garam, merica, kecap manis, dan minyak wijen. Aduk rata dan biarkan kuah mendidih.</li>\r\n  <li>Masukkan bakso yang telah dimasak ke dalam kuah. Biarkan sebentar hingga bakso terhangat.</li>\r\n  <li>Tambahkan seledri ke dalam kuah.</li>\r\n</ol>\r\n\r\n<h3>3. Sajikan:</h3>\r\n<ol>\r\n  <li>Letakkan bakmi atau bihun dalam mangkuk.</li>\r\n  <li>Tuangkan kuah beserta bakso di atasnya.</li>\r\n  <li>Tambahkan potongan sawi hijau, telur rebus (jika menggunakan), bawang goreng, dan daun bawang di atasnya sebagai hiasan.</li>\r\n  <li>Sajikan bakso kuah selagi hangat.</li>\r\n</ol>\r\n\r\n<p>Selamat menikmati bakso kuah yang lezat! Anda juga dapat menyesuaikan bumbu dan jumlah bahan sesuai dengan selera pribadi.</p>\r\n', '2023-12-19 14:58:26', NULL),
(9, 'Bakso Goreng Sambal', 'Berikut adalah resep sederhana untuk membuat Bakso Goreng Sambal:\r\n<br>\r\n\r\n<h1>RESEP BAKSO GORENG SAMBAL</h1>\r\n\r\n<!-- Resep Bakso Goreng -->\r\n<h3>Bahan-bahan Bakso Goreng:</h3>\r\n<p>- 250 gram daging sapi cincang</p>\r\n<p>- 150 gram tepung tapioka</p>\r\n<p>- 1 sendok teh garam</p>\r\n<p>- 1/2 sendok teh merica bubuk</p>\r\n<p>- 2 sendok makan bawang putih cincang</p>\r\n<p>- 1 sendok makan kecap manis</p>\r\n<p>- 1 butir telur</p>\r\n<p>- Minyak untuk menggoreng</p>\r\n<br>\r\n<p>Atau bisa membeli bakso yang sudah jadi dari Babakso</p>\r\n\r\n<!-- Resep Sambal -->\r\n<h3>Bahan-bahan Sambal:</h3>\r\n<p>- 10-15 buah cabe rawit (sesuai selera pedas)</p>\r\n<p>- 5 buah bawang merah</p>\r\n<p>- 2 buah tomat</p>\r\n<p>- 1 sendok makan gula merah, serut halus</p>\r\n<p>- Garam secukupnya</p>\r\n\r\n<!-- Instruksi -->\r\n<h3>Instruksi:</h3>\r\n\r\n<h4>Membuat Bakso Goreng:</h4>\r\n<ol>\r\n    <li>Campurkan daging sapi cincang, tepung tapioka, garam, merica bubuk, bawang putih cincang, kecap manis, dan telur dalam sebuah wadah. Aduk hingga tercampur rata.</li>\r\n    <li>Ambil sejumput adonan, bulatkan menjadi bola-bola kecil bakso.</li>\r\n    <li>Panaskan minyak dalam wajan dengan api sedang.</li>\r\n    <li>Goreng bakso hingga kuning kecoklatan dan matang. Angkat dan tiriskan.</li>\r\n</ol>\r\n<p><strong>NB:</strong> Jika telah membeli BABAKSO lewati bagian pembuatan langsung goreng saja</p>\r\n\r\n<h4>Membuat Sambal:</h4>\r\n<ol>\r\n    <li>Haluskan cabe rawit, bawang merah, dan tomat menggunakan blender atau ulekan.</li>\r\n    <li>Panaskan sedikit minyak dalam wajan, tumis bumbu halus hingga harum dan matang.</li>\r\n    <li>Tambahkan gula merah serut, aduk rata. Beri garam sesuai selera.</li>\r\n    <li>Masak sambal hingga matang dan bumbu meresap. Angkat dan dinginkan.</li>\r\n</ol>\r\n\r\n<!-- Penyajian -->\r\n<h3>Penyajian:</h3>\r\n<ol>\r\n    <li>Sajikan bakso goreng dengan sambal sebagai pelengkap.</li>\r\n    <li>Nikmati bakso goreng sambal yang pedas dan lezat!</li>\r\n</ol>', '2023-12-19 15:19:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(225) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `mail`, `password`, `token`, `last_login`) VALUES
(3, 'admin', 'asepsr48@engineer.com', '25f9e794323b453885f5181f1b624d0b', 'c561acea86161390fe8bc97a433c20ad', '2024-01-01 14:00:14'),
(4, 'asep', 'asep@sr.com', 'dc855efb0dc7476760afaa1b281665f1', 'f5fe046cefd434b1b1cf1a60950f9526', '2023-12-21 15:40:06'),
(5, 'user1', 'user@mail.com', '24c9e15e52afc47c225b757e7bee1f9d', '9faf5c744c3e652668ec3a87a462d775', '2023-12-21 15:41:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
