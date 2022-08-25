-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 11.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatabantul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_abt` int(30) NOT NULL,
  `isi_abt` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_abt`, `isi_abt`, `foto`) VALUES
(1, '<p><strong>Daerah Istimewa Yogyakarta, Kabupaten Bantul&nbsp;cerminan sempurna dari keterpaduan antara dunia modern dan budaya tradisional, tidak heran banyak wisatawan dari dalam dan luar negeri yang berkunjung di Kabupaten Bantul.</strong></p>\r\n\r\n<p>Kabupaten Bantul memiliki daya tarik yang dapat memikat para wisatawan dengan tempat wisatanya yang sangat beragam dan juga keramahan masyarakat Bantul. Wisata alam di Kabupaten Bantul yang sangat dikenal oleh para wisatawan yaitu Pantai Parangtritis dan Pantai Parangkusumo dengan keunikannya terdapat gumuk pasir, Pantai Depok, Pantai Samas, Pantai Kwaru, Pantai Baru dan Pantai Pandansimo. Pantai Depok juga memiliki landasan pacu untuk pesawat berukuran kecil dengan kondisi angin dan bentang alam yang ada sangat cocok untuk olahraga kedirgantaraan. Jogja Air Show merupakan acara tahunan yang diadakan di landasan pacu Pantai Depok. Faktor alam di Kecamatan Dlingo khususnya Desa Mangunan sering menjadi tempat berfoto yang terkenal, juga terdapat wisata budaya dan pendidikan di kawasan Kasongan, Tembi, Wukirsari, Jagalan dan lain-lain.</p>\r\n', 'berdua_(2)31.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `password`, `email_adm`) VALUES
(1, 'nrlkrsndr', 51198, 'nurulkrisna98@gmail.com'),
(2, 'admin', 123456, 'nurulkrisnandari@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `nm_cmt` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `mssg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_cmt`, `nm_cmt`, `email`, `subject`, `mssg`) VALUES
(10, 'nvrvl', 'nurulkrisna1105@gmail.com', 'Kerajinan', 'Informasi kerajinan belum tersedia'),
(11, 'nvrvl', 'nurulkrisna98@gmail.com', 'Pantai', 'ffggvgyvyg'),
(13, 'aku', 'nurulkrisnandari@gmail.com', 'Kuliner', 'tambahkan data kuliner'),
(14, 'saya', 'nurulkrisnandari@gmail.com', 'Kuliner', 'Berikan komentar'),
(15, 'saya', 'nurulkrisnandari@gmail.com', 'Kuliner', 'Tambahkan data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(50) NOT NULL,
  `nm_tempat` varchar(50) NOT NULL,
  `id_kate` int(50) NOT NULL,
  `uploader` varchar(50) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `diskripsi` text NOT NULL,
  `hrg_tiket` varchar(50) NOT NULL,
  `jam` time NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `kordinat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `nm_tempat`, `id_kate`, `uploader`, `tgl_rilis`, `isi`, `foto`, `diskripsi`, `hrg_tiket`, `jam`, `fasilitas`, `kordinat`) VALUES
(1, 'Pantai Goa Cemara', 1, 'Rama', '2022-08-25', '<p>Pantai Goa Cemara (bahasa Jawa: ꦥꦱꦶꦱꦶꦂ ꦒꦸꦮ ꦕꦺꦩꦫ, translit. Pasisir Guwa Cemara) adalah objek wisata pantai yang terletak di Dusun Patihan,</p>\r\n\r\n<p>Desa Gadingsari, Kecamatan Sanden, Kabupaten Bantul. Daerah Istimewa Yogyakarta. Pantai ini terletak tepatnya berdampingan dengan Pantai Samas dan Pantai Pandansari.<br />\r\nPelepasan Penyu di Pantai Goa Cemara. Pantai ini memiliki pasir berwarna hitam tapi lembut dengan ombak yang cukup besar kerakteristik pantai selatan. Pantai ini merupakan pantai pengembangan baru dimana terdapat banyak pohong Cemara udang rindang membentuk seperti goa, hal ini yang membuat pantai ini dinamai Goa Cemara. Pohon&nbsp;<br />\r\nCemara ini bertujuan untuk melindungi abrasi air laut dan menahan gumuk pasir supaya tidak mengalamai perpindahan akibat tiupan angin.&nbsp;Suasananya yang teduh dan sejuk jadi tempat favorit wisatawan. Kamu juga bisa berkuda, naik ATV, berkemah, hingga menikmati berbagai makanan khasnya di pantai wisata Bantul ini.&nbsp;</p>\r\n', 'pantai_goa_cemara.jpg', 'Suasananya yang teduh dan sejuk jadi tempat favorit wisatawan. Kamu juga bisa berkuda, naik ATV, berkemah, hingga menikmati berbagai makanan khasnya di pantai wisata Bantul ini. ', '10000', '06:00:00', 'Kuda, ATV', '-7.9991945687452795, 110.24898981940024'),
(2, 'Pantai Parangtritis', 1, 'Rama', '2022-08-25', '<p>Pantai Parangtritis terletak 27 km selatan Kota Jogja dan mudah dicapai dengan transportasi umum yang beroperasi hingga pk 17.00 maupun kendaraan pribadi. Sore menjelang matahari terbenam adalah saat terbaik untuk mengunjungi pantai paling terkenal di Yogyakarta ini. Namun bila Anda tiba lebih cepat, tak ada salahnya untuk naik ke Tebing Gembirawati di belakang pantai ini. Dari sana kita bisa melihat seluruh area Pantai Parangtritis, laut selatan, hingga ke batas cakrawala.</p>\r\n', 'Pantai-Parangtritis.jpg', 'Pantai Parangtritis memang tidak bisa lepas dari sejarah, legenda dan mitos Ratu Pantai Selatan yang sudah sangat terkenal di Indonesia. Hal itu berawal dari cerita mitos tentang kerajaan yang konon ada di laut sekitar pantai.', '15000', '17:00:00', 'kuda delman, ATV', '-8.023910503110445, 110.32974405368257'),
(3, 'Hutan Pinus Dlingo', 2, 'Rama', '2022-08-25', '<p><strong>Hutan Pinus Mangunan</strong>&nbsp;merupakan kawasan wisata hits di Bantul dengan keasrian dari alamnya. Hutan Pinus ini juga merupakan hutan lindung&nbsp; dimana disulap menjadi sala satu destinasi wisata di Bantul. Tempat wisata dengan Pepohonan pinus yang menjulang tinggi dengan di lengkapi berbagai fasilitas unik dan menarik menjadikan wisata hits di Mangunan Bantul ini memiliki spot instagramable untuk berfoto foto. Tempat wisata yang cocok untuk hangout dan healing karena jauh dari perkotaan atau liburan bersama keluarga, teman ataupun bersama pasangan anda.</p>\r\n\r\n<p><strong>Hutan Pinus Mangunan</strong>&nbsp;ini merupakan kawasan resort pengelolaan Hutan yang berada di Mangunan, dimana dekat dengan lokasi&nbsp;<em>Makam Raja Raja Imogiri</em>. Hutan dengan jejeran pohon pinus ini memiliki luas 500 hektare yang di kelola masyarakat sekitar. Memasuki kawasan wisata anda akan di suguhkan dengan hamparan pepohonan pinus yang tinggi menjulang dengan suasana sejuk dan menyegarkan.Kebersihan dan keasrian tempat wisata ini sangat terjaga, sehingga cocok sebagai pilihan berlibur bersama keluarga. Dilengkapi dengan berbagai spot foto yang instagramable untuk berswafoto dengan berlatarbelakang panorama hutan pinus. Wisata Hutan Pinus Mangunan ini merupakan salah satu spot terbaik untuk hunting foto, apalagi kalangan anak muda sekarang, berlibur juga berfoto.</p>\r\n', 'hutan_pinus.jpeg', 'Beranda Yogyakarta Hutan Pinus Mangunan Dlingo Jogja Tiket dan Daya Tarik Hutan Pinus Mangunan Dlingo Jogja - Liburan di Jogja terasa belum lengkap jika belum mengunjungi wisata hits di Dlingo Bantul ini. Kawasan wisata di Bantul ini memang banyak memiliki destinasi wisata yang menggiurkan untuk dikunjungi. ', '3000', '05:20:00', 'Spot Foto', '-7.926581794070674, 110.4320074264669');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(30) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `kategori`) VALUES
(1, 'Pantai'),
(2, 'Hutan Pinus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_abt`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nm_tempat` (`nm_tempat`),
  ADD KEY `tb_artikel_ibfk_1` (`id_kate`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_kate`) REFERENCES `tb_kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
