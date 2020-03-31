-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 02:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daarul-quran`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_data_siswa`
--

CREATE TABLE `master_data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `jln` varchar(128) NOT NULL,
  `rt` varchar(128) NOT NULL,
  `rw` varchar(128) NOT NULL,
  `dusun` varchar(128) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `kec` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `alamat_sekolah` varchar(128) NOT NULL,
  `email_sekolah` varchar(128) NOT NULL,
  `nama_guru_bp_bk` varchar(128) NOT NULL,
  `telp_hp` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tempat_lahir_ayah` varchar(128) NOT NULL,
  `tanggal_lahir_ayah` varchar(128) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(128) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `penghasilan_perbulan_ayah` varchar(128) NOT NULL,
  `hp_wa_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `tempat_lahir_ibu` varchar(128) NOT NULL,
  `tanggal_lahir_ibu` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(128) NOT NULL,
  `penghasilan_perbulan_ibu` varchar(128) NOT NULL,
  `hp_wa_ibu` varchar(128) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `jenis_pendaftaran` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status_akun` varchar(2) NOT NULL,
  `status_siswa` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data_siswa`
--

INSERT INTO `master_data_siswa` (`id_siswa`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `jln`, `rt`, `rw`, `dusun`, `desa`, `kec`, `kota`, `prov`, `email`, `asal_sekolah`, `alamat_sekolah`, `email_sekolah`, `nama_guru_bp_bk`, `telp_hp`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `penghasilan_perbulan_ayah`, `hp_wa_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_terakhir_ibu`, `penghasilan_perbulan_ibu`, `hp_wa_ibu`, `no_whatsapp`, `jenis_pendaftaran`, `username`, `password`, `status_akun`, `status_siswa`) VALUES
(2, 'Andrey Andriansyah', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '089675677955', 'ponpes', 'andriansyah758@daarulquran.com', '$2y$10$qwn9NZhgY/dMvdCTZymr7uSqACRkngBXj7BQJEDNEWwONEh1kyHWi', '1', ''),
(3, 'Tahrul Muttaqin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08965557745', 'ma', 'muttaqin521@daarulquran.com', '$2y$10$hrL9dgdGqmtXC8Y9gddkRuJ.iAYVJz4HqdW2neAqr0tmZULAqtP/C', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `id_album` int(11) NOT NULL,
  `judul_album` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`id_album`, `judul_album`, `sampul`) VALUES
(6, 'Gambar Gambar Hewan', 'horses.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `slug_berita` varchar(128) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(128) DEFAULT NULL,
  `tanggal_berita` varchar(128) NOT NULL,
  `terakhir_diupdate` varchar(128) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`, `terakhir_diupdate`, `id_user`) VALUES
(1, 'UAS', '2020/07/uas', '<p>hhhhh</p>\r\n', 'scream.jpg', '1582690962', '1583551815', 4),
(4, 'No Internet', '2020/07/no-internet', '<h1>No internet</h1>\r\n\r\n<p>Try:</p>\r\n\r\n<ul>\r\n	<li>Checking the network cables, modem, and router</li>\r\n	<li>Reconnecting to Wi-Fi</li>\r\n</ul>\r\n\r\n<p>ERR_INTERNET_DISCONNECTED</p>\r\n\r\n<p>try Again</p>\r\n', 'horses.jpg', '1583165223', '1583551802', 4),
(5, 'Guide CKeditor', '2020/07/guide-ckeditor', '<h2>Toolbar Configuration</h2>\r\n\r\n<p>If you want to reorder toolbar buttons or remove some of them, check&nbsp;<a href="http://localhost/dq/assets/back/ckeditor/samples/toolbarconfigurator/index.html">this handy tool</a>!</p>\r\n\r\n<h2>More Samples!</h2>\r\n\r\n<p>Visit the&nbsp;<a href="https://ckeditor.com/docs/ckeditor4/latest/examples/index.html">CKEditor Examples</a>&nbsp;for a huge collection of samples showcasing editor features, with source code readily available to copy and use in your own implementation.</p>\r\n\r\n<h2>Developer&#39;s Guide</h2>\r\n\r\n<p>The most important resource for all developers working with CKEditor, integrating it with their websites and applications, and customizing to their needs. You can start from here:</p>\r\n\r\n<ul>\r\n	<li><a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_installation.html">Getting Started</a>&nbsp;&ndash; Explains most crucial editor concepts and practices as well as the installation process and integration with your website.</li>\r\n	<li><a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_installation.html">Advanced Installation Concepts</a>&nbsp;&ndash; Describes how to upgrade, install additional components (plugins, skins.html), or create a custom build.</li>\r\n</ul>\r\n\r\n<p>When you have the basics sorted out, feel free to browse some more advanced sections like:</p>\r\n\r\n<ul>\r\n	<li><a href="https://ckeditor.com/docs/ckeditor4/latest/features/index.html">Features Overview</a>&nbsp;&ndash; Descriptions and samples of various editor features.</li>\r\n	<li><a href="https://ckeditor.com/docs/ckeditor4/latest/guide/plugin_sdk_intro.html">Plugin SDK</a>,&nbsp;<a href="https://ckeditor.com/docs/ckeditor4/latest/guide/widget_sdk_intro.html">Widget SDK</a>, and&nbsp;<a href="https://ckeditor.com/docs/ckeditor4/latest/guide/skin_sdk_intro.html">Skin SDK</a>&nbsp;&ndash; Useful when you want to create your own editor components.</li>\r\n</ul>\r\n\r\n<h2>CKEditor JavaScript API</h2>\r\n\r\n<p>CKEditor boasts a rich&nbsp;<a href="https://ckeditor.com/docs/ckeditor4/latest/api/index.html">JavaScript API</a>&nbsp;that you can use to adjust the editor to your needs and integrate it with your website or application.</p>\r\n', 'giraffe.jpg', '1583551120', '1583551120', 4),
(6, 'Pemerintah Umumkan Dua Kasus Baru Positif Corona', '2020/07/pemerintah-umumkan-dua-kasus-baru-positif-corona', '<p>Jakarta, CNN Indonesia -- Juru Bicara Pemerintah Khusus&nbsp;penanganan virus&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/indonesia-positif-corona">corona</a></strong>, Achmad Yurianto menyatakan ada dua orang baru yang positif mengidap virus corona (Covid-19). Mereka dirawat di&nbsp;<a href="https://www.cnnindonesia.com/tag/rspi-sulianti-saroso"><strong>RSPI</strong>&nbsp;<strong>Sulianti</strong>&nbsp;<strong>Saroso</strong></a><br />\r\n<br />\r\nDengan demikian,&nbsp;total jadi ada 4 orang di Indonesia yang dinyatakan positif terinfeksi virus corona oleh pemerintah.<br />\r\n<br />\r\n&quot;Kasus nomor 3 dan nomor 4. Suhu badan 37,6 derajat satunya lagi 37,7. Jenis kelamin tidak usah disebut. Usianya antara 33 dan 34 WNI,&quot; kata&nbsp;Yurianto di Kompleks Istana Kepresidenan, Jakarta, Jumat (6/3).</p>\r\n\r\n<p>Yurianto&nbsp;mengatakan dua pasien positif terinfeksi virus corona itu pernah kontak dengan pasien asal Depok yang sebelumnya dinyatakan positif terlebih dahulu.<br />\r\n<br />\r\n&quot;Ini dari kotak&nbsp;<em>tracing</em>&nbsp;pasien 1 dan hasilnya baru kita terima tadi siang,&quot; kata Yurianto.<br />\r\n<br />\r\nSebelumnya, ada dua warga yang positif mengidap virus corona. Mereka adalah seorang ibu berusia 64 tahun dan putrinya&nbsp;berusia 31 tahun. Keduanya merupakan warga Depok, Jawa Barat dan dirawat di RSPI&nbsp;Sulianti&nbsp;Saroso. Pemerintah pertama kali mengumumkan kasus dua warga Depok tersebut pada Senin (2/3).&nbsp;<br />\r\n<br />\r\nSejauh ini, pemerintah juga menyatakan ada 9 pasien yang diisolasi dan dirawat di RSPI Sulianti Saroso Jakarta. Dari 9 itu, berdasarkan informasi terbaru, maka ada 4 pasien yang positif mengidap virus corona. Sementara 5 pasien lainnya berstatus suspect corona.</p>\r\n', '07cc926d-7f68-4a6d-ba6e-230e10e5f601_169.jpeg', '1583552409', '1583552409', 4),
(7, 'Polisi Akan Periksa Kejiwaan Gadis 15 Tahun Pembunuh Teman', '2020/07/polisi-akan-periksa-kejiwaan-gadis-15-tahun-pembunuh-teman', '<p>Jakarta, CNN Indonesia -- Kapolres Metro Jakarta Pusat, Kombes Pol Heru Novianto mengatakan akan melakukan tes kejiwaan terhadap NF (15), remaja yang&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/pembunuhan-anak">membunuh bocah</a></strong>&nbsp;berusia 6 tahun di daerah Sawah Besar, Jakarta Pusat.<br />\r\n<br />\r\nHeru mengatakan tes kejiwaan dilakukan berdasarkan data-data yang diperoleh dan coretan di buku serta papan tulis milik NF yang diamankan sebagai barang bukti.<br />\r\n<br />\r\n&quot;Ini butuh pendalaman lebih dalam, mungkin kami akan panggil ahli kejiwaan (psikiater) karena data-data yang kami dapat ada hal-hal yang agak berbeda,&quot; ujar Heru seperti mengutip&nbsp;<em>Antara.</em></p>\r\n\r\n<p>Berdasarkan hasil olah TKP, polisi menemukan coretan di dalam buku tulis pelajaran dan sebuah papan tulis berupa curahan hati NF.</p>\r\n\r\n<p>NF mencurahkan kekesalannya terhadap sosok sang ayah dalam buku tersebut.<br />\r\n<br />\r\n&quot;Anak ini cukup cerdas, berkemampuan Bahasa Inggris cukup baik. Dan dia mengungkapkan berbagai perasaannya itu dalam berbagai tulisan,&quot; kata Wakapolres Jakarta Pusat AKBP Susatyo Purnomo.<br />\r\n<br />\r\n&quot;Ungkapan-ungkapan perasaannya tertulis dan lebih menark lagi bahwa apa yang dilakukan hari ini. Ini sudah tergambar,&quot; ujarnya menambahkan.</p>\r\n', '54a6c742-06a1-41ea-a858-b34fe4a94382_169.jpeg', '1583552554', '1583552554', 4),
(8, 'Demo Tolak Omnibus Law Bakal Digelar di Gejayan 9 Maret', '2020/07/demo-tolak-omnibus-law-bakal-digelar-di-gejayan-9-maret', '<p>Yogyakarta, CNN Indonesia -- Elemen masyarakat yang tergabung dalam Aliansi Rakyat Bersatu (ARB)&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/yogyakarta">Yogyakarta</a></strong>&nbsp;berencana menggelar Rapat Parlemen Jalanan menolak RUU&nbsp;<a href="https://www.cnnindonesia.com/tag/omnibus-law"><strong>Omnibus</strong>&nbsp;<strong>Law</strong></a>&nbsp;Cipta Kerja pada 9 Maret 2020 mendatang.<br />\r\n<br />\r\nRencananya aksi akan diikuti oleh berbagai elemen masyarakat dan mahasiswa dan terpusat di sepanjang Jalan&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/gejayan-demo">Gejayan</a></strong>, Yogyakarta, mulai pukul 14.00 WIB.<br />\r\n<br />\r\nHumas ARB Yogyakarta, Kontra Tirano menganggap sudah waktunya menggelar aksi menolak Omnibus Law. Pemerintah, katanya, mengklaim RUU itu baik bagi UMKM dan buruh namun hingga saat ini tak ada sosialisasi yang jelas dan rinci.<br />\r\n<br />\r\n<br />\r\n&quot;Kita harus turun ke jalan untuk menolak dan menggagalkan Omnibus Law,&quot; ujarnya Tirano di Yogyakarta, Jumat (6/3).<br />\r\n<br />\r\nKetua Serikat Buruh Korwil DIY Dani Eko Wiyono mengatakan buruh bakal ikut serta dalam aksi. Dia yakin RUU Omnibus Law memang bakal menyusahkan buruh dan menguntungkan investor jika disahkan.<br />\r\n<br />\r\nMenurutnya, alasan Pemerintah akan mengundang banyak investor masuk ke Indonesia itu tidak berimplikasi apa pun bagi buruh. Terlebih, ada wacana penghapusan penetapan Upah Minimum Kabupaten/Kota (UMK), serta penghilangan pesangon, dan jaminan sosial bagi buruh.<br />\r\n<br />\r\n&quot;Langkah yang paling tepat saat ini adalah melawan dengan suara rakyat suara,&quot; anggapnya</p>\r\n', '0846d11d-2d16-4c78-894b-1fed987c1aae_169.jpeg', '1583552644', '1583552644', 4),
(9, 'E-Commerce Akan Blokir Masker dan Hand Sanitizer Mahal', '2020/07/e-commerce-akan-blokir-masker-dan-hand-sanitizer-mahal', '<p>Jakarta, CNN Indonesia -- Perusahaan&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/e-commerce" target="_blank">e-commerce</a></strong>&nbsp;Blibli.com akan menindak mitra pedagang yang menjual produk&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/masker" target="_blank">masker</a></strong>, hand sanitizer, tisu basah hingga sabun cuci tangan dengan harga yang tidak wajar di tengah wabah virus corona (Covid-19).<br />\r\n<br />\r\nSenior Account Manager Consumer Goods Blibli, Priscilia Chintya menjelaskan pihak&nbsp;Blibli tahap awal akan memberi peringatan pedagang dan menyembunyikan produk tersebut agar tidak dapat diakses pembeli. Selanjutnya bila tidak ada tanggapan dari pedagang, produk yang diperdagangkan akan dihapus.<br />\r\n<br />\r\n&quot;Apabila tidak ada tanggapan dari&nbsp;<em>merchant</em>&nbsp;[mitra], produknya akan di&nbsp;<em>take down</em>&nbsp;dari&nbsp;<em>page&nbsp;</em>[laman jual-beli],&quot; kata Priscilia kepada&nbsp;<em>CNNIndonesia.com</em>, Jumat (6/3).<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Lihat juga:</p>\r\n			&nbsp;<a href="https://www.cnnindonesia.com/teknologi/20200205204206-206-472064/tren-dan-peluang-industri-e-commerce-di-indonesia-2020/">Tren dan Peluang Industri E-Commerce di Indonesia 2020</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Seperti diketahui permintaan masker dan hand sanitizer melonjak setelah pemerintah mengumumkan virus corona menjangkiti warga Depok awal pekan ini.<br />\r\n<br />\r\nKarena itu, Priscilia menjelaskan perusahaannya memiliki tim yang terus memantau harga produk hand sanitizer, masker, hingga tisu basah. Jika pedagang kedapatan menjual produk yang dimaksud dengan harga tidak standar, selanjutnya akan dilakukan tindakan.<br />\r\n<br />\r\nBlibli bahkan memastikan agar mitra pedagang bisa memenuhi lonjakan permintaan produk-produk tersebut.<br />\r\n<br />\r\n&quot;Kami juga selalu berkomunikasi dengan seluruh merchant kami untuk memastikan agar kami dapat memenuhi kebutuhan dan memberikan layanan terbaik untuk para pelanggan,&quot; kata Priscilia.</p>\r\n', '63b2f481-2a7a-42e9-900b-f6c4b84963a8_169.jpeg', '1583552710', '1583552710', 4),
(10, 'Apple dan Google Tarik Aplikasi Terkait Virus Corona', '2020/07/apple-dan-google-tarik-aplikasi-terkait-virus-corona', '<p>Jakarta, CNN Indonesia -- Dua perusahaan teknologi raksasa Amerika,&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/apple" target="_blank">Apple</a></strong>&nbsp;dan&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/google" target="_blank">Google</a></strong>&nbsp;menarik aplikasi berkaitan dengan virus corona novel (COVID-19) yang beredar di toko aplikasi mereka yaitu App Store dan Play Store.<br />\r\n<br />\r\nSebab, aplikasi tersebut bukan berasal dari institusi yang diakui pemerintah untuk menyalurkan informasi soal corona.<br />\r\n<br />\r\nMenurut keterangan empat pengembang aplikasi yang ditolak Apple, aplikasi mereka itu memuat daftar negara mana saja yang terinfeksi virus corona berdasarkan data dari Badan Kesehatan Dunia (WHO).<br />\r\n<br />\r\nSalah satu pengembang mengatakan kepada jurnalis<em>&nbsp;<a href="https://www.cnbc.com/2020/03/05/apple-rejects-coronavirus-apps-that-arent-from-health-organizations.html" target="_blank">CNBC</a></em>&nbsp;bahwa pihak Apple menjelaskan melalui sambungan telepon bahwa segala sesuatu yang berkaitan dengan corona, mesti dirilis oleh organisasi kesehatan resmi atau pemerintah.<br />\r\n<br />\r\nTiga pengembang lainnya mendapat keterangan rilis dari Apple yang tertulis, &quot;aplikasi yang memuat informasi medis saat ini perlu diajukan oleh lembaga yang diakui.&quot;<br />\r\n<br />\r\nSementara perusahaan mesin pencari, Google memblokir hasil pencarian soal virus corona dan COVID-19 seperti dilansir&nbsp;<em><a href="https://www.theverge.com/2020/3/5/21167102/apple-google-coronavirus-iphone-apps-android-misinformation-reject-ban" target="_blank">The Verge</a></em>.<br />\r\n<br />\r\nArtinya, jika pengguna memasukkan kata kunci &#39;virus corona&#39; atau COVID-19 di Google Play Store, maka akan muncul tulisan No results found for &quot;coronavirus&quot; (tidak ada hasil untuk pencarian virus corona).<br />\r\n<br />\r\nNamun setelah ditelusuri&nbsp;<em>CNNIndonesia.com</em>, untuk pencarian menggunakan kata kunci &quot;COVID-19&quot; di Google Play Store, ada beberapa aplikasi yang berkaitan dengan corona seperti Provides Information on New Corona Virus, Coronavirus Tracker, COVID-19, dan lainnya.<br />\r\n<br />\r\nSampai hari ini (6/3), jumlah korban terinfeksi virus corona di seluruh dunia berjumlah 97.885 orang. Sedangkan pasien yang sembuh mencapai 53.769 orang.<br />\r\n<br />\r\nLalu data korban meninggal virus corona sampai saat ini berjumlah 3.348 orang.<br />\r\n<br />\r\nJumlah kasus tertinggi masih ditempati China dengan 80.422 orang terjangkit. Sedangkan total orang yang meninggal akibat virus corona mencapai 3.013 orang, dan yang sembuh berjumlah 52.239 orang.&nbsp;<strong>(din/mik<br />\r\n)</strong></p>\r\n', '3f569139-57be-4e2a-929f-3f3d1263a568_169.jpeg', '1583552794', '1583553890', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `ket_file` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `waktu_upload` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `nama_file`, `ket_file`, `author`, `waktu_upload`) VALUES
(3, 'Tutorial-Membangun-Server-dengan-Debian.pdf', 'Cara Membangun server dengan debian', '4', '1583482316'),
(4, 'Doc1.pdf', 'Documentasi Andrey Komputer', '4', '1583486167');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_album`, `ket_foto`, `foto`) VALUES
(7, 6, 'Gambar Anjing', 'dog.jpg'),
(8, 6, 'Gambar Kuda', 'horses.jpg'),
(9, 6, 'Gambar Elang', 'eagle.jpg'),
(10, 6, 'Person', 'person.jpg'),
(11, 6, 'Kite', 'kite.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mata_pelajaran` varchar(128) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `foto_guru` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `pendidikan`, `foto_guru`) VALUES
(1, '201908181', 'Andriyanto, S.Kom', 'Kuningan', '2001-03-24', '24', 'S1', '5e7ad08b845f2.jpeg'),
(2, '20190818808', 'Agun Hambali, S.P.', 'Kuningan', '2020-02-04', '19', 'S1', 'kepsek.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, '9D'),
(3, 'TINFC-UNIKU'),
(4, '7C'),
(5, '8B'),
(6, '7D'),
(7, 'MA-Daarul Qur''an'),
(8, 'PBSI-UNIKU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(128) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id`, `kode_mapel`, `nama_mapel`) VALUES
(19, 'DQ-WB20191', 'Bahasa Pemrograman Web 1'),
(24, 'DQ-STS1209', 'Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(128) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tanggal_pengumuman`) VALUES
(1, 'Ulangan Harian', 'Ulangan Harian akan dilaksanakan mulai di pekan yang akan datang, terimakasih.', '0000-00-00'),
(2, 'Ulangan Akhir Semester', 'Ulangan Akhir smeseter (UAS) dimulai pekan ini', '2000-02-21'),
(4, 'UN 2020 Dibatalkan', 'Berdasarkan keputusan pemerintah, bahwa UN dibatalkan. untuk itu bagi siswa / siswa yang tidak berkepentingan harap diam di rumah sampai kondisi aman.', '2020-03-25'),
(6, 'Tugas Kelas 10', 'Membuat Novel', '2020-03-25'),
(7, 'Tugas Kelas 11 Sejarah Indonesia', 'Rangkuman Sejarah Indonesia Halaman 1 - 2', '2020-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(128) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `quote` varchar(256) NOT NULL,
  `id_kelas` int(128) NOT NULL,
  `foto_siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `quote`, `id_kelas`, `foto_siswa`) VALUES
(6, '20190810004', 'Andrey Andriansyah', 'Kuningan', '2001-03-24', 'Masa Muda Masa yang ber Api Api - H. Rhoma Irama', 3, 'IMG_0038.JPG'),
(7, '20190815522', 'Gugun Rizal Nugraha', 'Kuningan', '2002-02-01', '-- Place Quote --', 3, '5e7ad2c0c8097.jpeg'),
(8, '20180001578', 'Deni Agusta', 'Kuningan', '2003-03-01', '-- Place Quote --', 3, '5e7ad2808a1df.jpeg'),
(9, '20180080811', 'Ricky Permana', 'Kuningan', '2003-03-01', '-- Place Quote --', 8, '5e7ad2d542020.jpeg'),
(10, '20200821221', 'Tahrul Muttaqin', 'Kuningan', '2001-03-24', '-- Place Quote --', 7, '5e7ad31a87ce5.jpeg'),
(11, '201900522323', 'Silva Sekar Aulia', 'Kuningan', '2001-03-24', '-- Place Quote --', 8, '5e7ad2efe28b4.jpeg'),
(12, '202192090', 'Aisyah Prasasti', 'Kuningan', '2003-05-20', '-- Place Quote --', 7, 'kepsek.jpeg'),
(13, '2019080111', 'Ayu Rahma', 'Kuningan', '2003-05-20', '-- Place Quote --', 7, '5e7ad1dc7039c.jpeg'),
(14, '8230823028', 'Susan', 'Kuningan', '2003-05-20', '-- Place Quote --', 7, '5e7ad30509f7b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`, `level`, `is_active`, `date_created`) VALUES
(4, 'Andrey Andriansyah', 'andreyandri90@gmail.com', 'andreyandri90@gmail.com', '$2y$10$vEpNKIydcixgP/PtEG.VVuMrpe777GjpEH0.4MeTUamkxNoYXcE/2', 1, 1, '1582197047'),
(5, 'Nafisah Nailal Husna', 'nafisah@gmail.com', 'nafisah@gmail.com', '$2y$10$Bu9q3GoElVxaO7PfAtQ99eUgwCwSBCvMFyDvBPiSSy7zO5NMnK0g2', 1, 1, '1582197105'),
(6, 'Ayu Munawaroh', 'ayu@gmail.com', 'ayu@gmail.com', '$2y$10$8dnGfx/oz5/lMTcCM92.5OJ60Fc7B/O2O0aQh6/25C5uOa60QPwyi', 1, 1, '1582197184'),
(7, 'Uni', 'uni@gmail.com', 'uni@gmail.com', '$2y$10$0eZ/30RJ0HgipsOGVfIL8ufYfFEfUF5Tn5Oj8HwddhN6L3wLEMaWS', 2, 1, '1582197325'),
(8, 'Roni', 'roni@gmail.com', 'roni@gmail.com', '$2y$10$ScuZHOQ/.27TiCFO3dHnFeIXqpmpl/QtuAAKDrrqMwgJUFr9h2Mpm', 1, 1, '1582197353'),
(9, 'Udin', 'udin@gmail.com', 'udin@gmail.com', '$2y$10$1GuKrHCAqjrwoPCnC5oOk.JNvG5NQHt0gXYj7wvB10VB4MLSBPwfm', 1, 1, '1582197396'),
(10, 'Ila', 'ila@gmail.com', 'ila@gmail.com', '$2y$10$/0PUfvF30nlaJAHMzholmOjfpIeUT6zwGQ5q4S6Lc4CCWwu666EaK', 1, 1, '1582197476');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `header-nav` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `slider_1_foto` varchar(128) NOT NULL,
  `slider_1_judul` varchar(128) NOT NULL,
  `slider_1_sub` varchar(128) NOT NULL,
  `slider_2_foto` varchar(128) NOT NULL,
  `slider_2_judul` varchar(128) NOT NULL,
  `slider_2_sub` varchar(128) NOT NULL,
  `slider_3_foto` varchar(128) NOT NULL,
  `slider_3_judul` varchar(128) NOT NULL,
  `slider_3_sub` varchar(128) NOT NULL,
  `header_1` varchar(128) NOT NULL,
  `sub_header_1` varchar(128) NOT NULL,
  `header_2` varchar(128) NOT NULL,
  `sub_header_2` varchar(128) NOT NULL,
  `header_3` varchar(128) NOT NULL,
  `sub_header_3` varchar(128) NOT NULL,
  `header_4` varchar(128) NOT NULL,
  `sub_header_4` varchar(128) NOT NULL,
  `header_5` varchar(128) NOT NULL,
  `sub_header_5` varchar(128) NOT NULL,
  `logo_ponpes` varchar(128) NOT NULL,
  `judul_ponpes` varchar(128) NOT NULL,
  `sub_ponpes` varchar(128) NOT NULL,
  `logo_ra` varchar(128) NOT NULL,
  `judul_ra` varchar(128) NOT NULL,
  `sub_ra` varchar(128) NOT NULL,
  `logo_mts` varchar(128) NOT NULL,
  `judul_mts` varchar(128) NOT NULL,
  `sub_mts` varchar(128) NOT NULL,
  `logo_ma` varchar(128) NOT NULL,
  `judul_ma` varchar(128) NOT NULL,
  `sub_ma` varchar(128) NOT NULL,
  `nama_kepsek_ma` varchar(128) NOT NULL,
  `nama_kepsek_mts` varchar(128) NOT NULL,
  `pipmpinan_yayasan` varchar(128) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `header-nav`, `telepon`, `alamat`, `slider_1_foto`, `slider_1_judul`, `slider_1_sub`, `slider_2_foto`, `slider_2_judul`, `slider_2_sub`, `slider_3_foto`, `slider_3_judul`, `slider_3_sub`, `header_1`, `sub_header_1`, `header_2`, `sub_header_2`, `header_3`, `sub_header_3`, `header_4`, `sub_header_4`, `header_5`, `sub_header_5`, `logo_ponpes`, `judul_ponpes`, `sub_ponpes`, `logo_ra`, `judul_ra`, `sub_ra`, `logo_mts`, `judul_mts`, `sub_mts`, `logo_ma`, `judul_ma`, `sub_ma`, `nama_kepsek_ma`, `nama_kepsek_mts`, `pipmpinan_yayasan`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Daarul Qur''an', '089675677955', 'RT01/02 Dusun Puhun Desa Cikubangmulya, Kec. Ciawigebang Kab. Kuningan', '6.jpg', '', '', '4.jpg', 'Laboratorium Komputer', 'Dilengkapi dengan fasilitas laboratorium komputer untuk praktek', '1.jpg', '', '', 'Selamat Datang di website Daarul Qur''an', 'Berikut adalah pendidikan yang bisa ditempuh di yayasan kami', 'Berita Terbaru', 'Berikut adalah berita terbaru yang di posting oleh admin kami', 'Kontributor Mahasiswa', 'berikut adalah mahasiswa yang telah berkontribusi dengan Daarul Qur''an', 'Pengumuman', 'Pengumuman ini ditujukan untuk siswa / siswi yang terdaftar dalam yayasan kami mengenai informasi, tugas dll', '', '', 'PP_DQ.jpeg', 'Ponpes - Daarul Qur''an', 'Terbuka Untuk Umum', 'ra.jpg', 'RA - Daarul Qur''an', 'Pendidikan sebelum SD', 'mts.jpg', 'MTS - Daarul Qur''an', 'Pendidikan sebelum Sma / Ma', 'ma.png', 'MA - Daarul Qur''an', 'Pendidikan sebelum Perguruan Tinggi', 'Arif Hidayat', 'Ega', 'KH. Ma''sum Abdullah', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor magni aliquid assumenda cum ratione molestias obcaecati maxime ipsa autem sequi minus tempora consequatur porro, quasi, aliquam, perspiciatis officia ut excepturi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor magni aliquid assumenda cum ratione molestias obcaecati maxime ipsa autem sequi minus tempora consequatur porro, quasi, aliquam, perspiciatis officia ut excepturi.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor magni aliquid assumenda cum ratione molestias obcaecati maxime ipsa autem sequi minus tempora consequatur porro, quasi, aliquam, perspiciatis officia ut excepturi.', '1. Lorem ipsum dolor sit amet, \r\n2. consectetur adipisicing elit. Dolor \r\n3. magni aliquid assumenda cum ratione \r\n4. molestias obcaecati maxime ipsa autem 5. sequi minus tempora consequatur porro, ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_data_siswa`
--
ALTER TABLE `master_data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_data_siswa`
--
ALTER TABLE `master_data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
