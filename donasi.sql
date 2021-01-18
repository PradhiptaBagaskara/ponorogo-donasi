-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk donasi
-- CREATE DATABASE IF NOT EXISTS `donasi` /*!40100 DEFAULT CHARACTER SET latin1 */;
-- USE `donasi`;

-- membuang struktur untuk table donasi.data_admin
CREATE TABLE IF NOT EXISTS `data_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hak_akses` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel donasi.data_admin: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `data_admin` DISABLE KEYS */;
REPLACE INTO `data_admin` (`id_admin`, `username`, `password`, `hak_akses`) VALUES
	(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin');
/*!40000 ALTER TABLE `data_admin` ENABLE KEYS */;

-- membuang struktur untuk table donasi.data_donasi
CREATE TABLE IF NOT EXISTS `data_donasi` (
  `id_donasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_donasi` text NOT NULL,
  `kategori_donasi` text NOT NULL,
  `target_donasi` text NOT NULL,
  `perolehan_donasi` text NOT NULL,
  `masa_donasi` date NOT NULL,
  `deskripsi_donasi` text NOT NULL,
  `tgl_donasi` date NOT NULL,
  `masa_aktif` int(3) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel donasi.data_donasi: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `data_donasi` DISABLE KEYS */;
REPLACE INTO `data_donasi` (`id_donasi`, `nama_donasi`, `kategori_donasi`, `target_donasi`, `perolehan_donasi`, `masa_donasi`, `deskripsi_donasi`, `tgl_donasi`, `masa_aktif`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
	(1, 'korban bencana tsunami banten & lampung', 'Bencana Alam', '10000000', '0', '2021-02-06', 'Tsunami menerjang Banten, Lampung, dan sekitarnya, malam (22/12). Sebabkan puluhan jiwa meninggal dan ratusan luka-luka. ', '2019-03-05', 29, 'front/images/donasi/1.jpg', 'front/images/donasi/806456_720.jpg', 'front/images/donasi/b59ddcac-961a-4b6e-a50f-8a7ed7d1bdca.jpg', 'front/images/donasi/bencana-alam-terjang-3-kabupaten-9-705-warga-aceh-jadi-korban-gDUhFbrS5M.jpg', 'front/images/donasi/tohoku-gempa-dan-tsunami-2011_20171226_155443.jpg'),
	(2, 'Wujudkan Impian Ani Bersekolah', 'pendidikan', '50000000', '50643', '2021-02-06', 'Ani Maulidah (10), merupakan salah satu anak kurang beruntung itu. Sejak ditinggal ayahnya ketika ia masih kecil, keluarganya hidup dalam kesulitan.  Walau hidupnya sulit, Ani memiliki tekad yang kuat untuk menjalani hidupnya. Dengan motivasi untuk membahagiakan orang tuanya, serta mewujudkan mimpinya agar orang tuanya bangga dengan apa yang ia dapat raih.', '2019-03-12', 29, 'front/images/donasi/20171207tersisihkan-anak-tki-ilegal-berhak-sekolah_20171207_112412.jpg', 'front/images/donasi/555dc2f40423bdfc308b4567.jpeg', 'front/images/donasi/anak-tki.jpg', 'front/images/donasi/hipwee-Sekolah-9-750x422.jpg', 'front/images/donasi/perumnas-balaroa-gempa_20181001_083821.jpg'),
	(3, 'Bantu Renovasi Mesjid Jami AT-TAQWA Kami ', 'Rumah Ibadah', '300000000', '0', '2021-02-06', 'Kami memohon kepada Alloh Swt , dan hakikatnya dari bapak/ibu untuk membantu kami merenovasi mesjid utama kami (AT-TAQWA) di kampung kami agar proses beribadah kami bisa nyaman dan mendapat amal yang bermanfaat untuk urusan dunia & akhirat . Sementara kami membutuhkan dana sekitar Rp. 300.000.000 (Tiga Ratus Juta Rupiah) Untuk Memulai Proses Renovasi/pembangunan ulang dan insya alloh untuk bantuan yang anda berikan hanya alloh yang bisa membalas nya dengan amal baik dan amal jariyah yang insya alloh mengalir sampe akhirat nanti karena bantuan berapapun juga untuk rumah Alloh akan panjang dan bermanfaat untuk selamanya . Aamiin', '2019-03-14', 29, 'front/images/donasi/31_29526_1493805004_378839_f.jpg', 'front/images/donasi/31_16980_1462171386_185311_f.png', 'front/images/donasi/images.jpg', 'front/images/donasi/ewew.jpg', 'front/images/donasi/thumbnail9-5be8261aa530d.jpg');
/*!40000 ALTER TABLE `data_donasi` ENABLE KEYS */;

-- membuang struktur untuk table donasi.data_feedback
CREATE TABLE IF NOT EXISTS `data_feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `nama_feedback` text NOT NULL,
  `no_telp_feedback` text NOT NULL,
  `pesan_feedback` text NOT NULL,
  `tgl_feedback` date NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel donasi.data_feedback: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `data_feedback` DISABLE KEYS */;
REPLACE INTO `data_feedback` (`id_feedback`, `nama_feedback`, `no_telp_feedback`, `pesan_feedback`, `tgl_feedback`) VALUES
	(1, 'Steven Hernanda', '087777565', 'ditingkatkan lagi pelayanannya', '2019-03-05'),
	(2, 'KanzuL aUfa', '0877667667667', 'semoga lebih baik lagi', '2019-04-09');
/*!40000 ALTER TABLE `data_feedback` ENABLE KEYS */;

-- membuang struktur untuk table donasi.data_settings
CREATE TABLE IF NOT EXISTS `data_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `code` varchar(128) DEFAULT NULL,
  `value` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel donasi.data_settings: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `data_settings` DISABLE KEYS */;
REPLACE INTO `data_settings` (`id`, `name`, `code`, `value`, `description`) VALUES
	(1, 'BRI', 'bank', '3218127189', 'Ponorogo Aksi'),
	(2, 'BNI', 'bank', '43421313', 'Ponorogo Aksi'),
	(3, 'BCA', 'bank', '2133443223424', 'Ponorogo Aksi'),
	(4, 'Muamalat', 'bank', '422332323', 'Ponorogo Aksi'),
	(5, 'Tentang Kami', 'about', 'Ponorogo Aksi (LMI) adalah lembaga filantropi profesional yang berkhidmat mengangkat harkat martabat masyarakat dhuafa (masyarakat kurang mampu) melalui penghimpunan dana ZISWAF (zakat, infaq, sedekah, dan wakaf) masyarakat dan dana corporate sosial responsibilty perusahaan.\r\nProgram-program sosial dan pemberdayaan masyarakat tidak mampu yang digulirkan telah menjadikan dana masyarakat yang dihimpun LMI memiliki nilai tambah dan manfaat yang berlipat ganda bagi masyarakat kurang mampu. Karena LMI berusaha senantiasa menumbuhkan iklim transparansi dan profesionalitas untuk mengawal amanah masyarakat yang demikian besar.', NULL),
	(6, 'No. WhatsApp', 'wa', '0823456684', 'Ponorogo Aksi');
/*!40000 ALTER TABLE `data_settings` ENABLE KEYS */;

-- membuang struktur untuk table donasi.data_transaksi
CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_donasi` int(11) NOT NULL,
  `nama_donatur` text NOT NULL,
  `no_telp_donatur` text NOT NULL,
  `pesan_donatur` text NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel donasi.data_transaksi: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `data_transaksi` DISABLE KEYS */;
REPLACE INTO `data_transaksi` (`id_transaksi`, `id_donasi`, `nama_donatur`, `no_telp_donatur`, `pesan_donatur`, `jumlah_donasi`, `kode_transaksi`, `tgl_transaksi`, `bayar`) VALUES
	(31, 2, 'Sujiwo Tejo', '085655082415', 'Semoga Bermanfaat', 50643, 'LMI080431', '2021-01-08', 1);
/*!40000 ALTER TABLE `data_transaksi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
