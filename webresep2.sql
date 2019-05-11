-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 02:35 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webresep2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lidya', 202);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jkel` varchar(6) NOT NULL,
  `tgl` varchar(2) DEFAULT NULL,
  `bulan` varchar(10) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `profesi` varchar(30) DEFAULT NULL,
  `bio` longtext,
  `foto_profil` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `email`, `jkel`, `tgl`, `bulan`, `tahun`, `profesi`, `bio`, `foto_profil`) VALUES
(1, 'Lidya Haning', 'lidyahaning', '5413e1bbd03f1ad0819a0df2366641fa', 'lidya.haning@gmail.com', 'Wanita', '3', 'Februari', '1994', 'Mahasiswa', 'Mahasiswi biasa yang ingin belajar memasak', 'IMG_20150312_211950.jpg'),
(2, 'Ran Mouri', 'ran', '202cb962ac59075b964b07152d234b70', 'ran_m@gmail.com', 'Wanita', '4', 'Mei', '1997', 'Mahasiswa', '', 'IMG_20150615_213500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_resep`
--

CREATE TABLE `bahan_resep` (
  `id_resep` varchar(30) NOT NULL,
  `bahan_resep` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_resep`
--

INSERT INTO `bahan_resep` (`id_resep`, `bahan_resep`) VALUES
('20160902192233', '1/2 ekor ayam bagian atas'),
('20160902192233', '2 lembar daun salam'),
('20160902192233', '1 lembar daun jeruk'),
('20160902192233', 'garam'),
('20160902192233', 'gula'),
('20160902192233', 'kaldu bubuk'),
('20160902192233', '6 siung bawang merah'),
('20160902192233', '3 siung bawang putih'),
('20160902192233', '10 buah cabe merah'),
('20160902192233', '1/4 atau 1/2 bagian tomat'),
('20160902192233', '1/2 ruas lengkuas'),
('20160902192233', '2 butir kemiri'),
('20160902193048', '300 gram daging ayam, dipotong 2x2x1 cm'),
('20160902193048', '1 sdm kecap manis'),
('20160902193048', '25 ml air'),
('20160902193048', '1 sdt minyak goreng'),
('20160902193048', '19 buah tusuk sate'),
('20160902193048', '50 gram gula merah, disisir halus'),
('20160902193048', '1 sdm ketumbar bubuk'),
('20160902193048', '1 sdt garam'),
('20160902193048', '8 buah cabai rawit hijau, diiris'),
('20160902193048', '5 butir bawang merah, diiris halus'),
('20160902193048', '6 sdm kecap manis'),
('20160902193512', '1 kg Ikan Baung, kemudian anda potong me'),
('20160902193512', '1 liter Air'),
('20160902193512', '3 buah Asam Kandis'),
('20160902193512', '1 tangkai Serai, kemudian anda memarkan'),
('20160902193512', '1 lembar Daun Kunyit'),
('20160902193512', '3 cm Lengkuas'),
('20160902193512', '10 buah Cabai Merah'),
('20160902193512', '2 cm Jahe'),
('20160902193512', '2 cm Kunyit'),
('20160902193512', '5 butir Bawang Merah'),
('20160902193512', '½ sendok makan Garam'),
('20160902194122', '700 ml air '),
('20160902194122', '75 gram gula pasir'),
('20160902194122', '1 bungkus agar-agar bubuk'),
('20160902194122', '1 sendok teh jeli bubuk'),
('20160902194122', '100 gram yoghurt mangga'),
('20160902194122', '300 gram mangga gedong blender halus'),
('20160902194122', '75 gram susu kental manis putih '),
('20160902194122', '2 buah mangga gedong, diambil dagingnya,'),
('20160902194122', '200 ml susu cair '),
('20160902194122', '3 sendok makan maizena'),
('20160902194122', '75 gram gula pasir '),
('20160902194122', '1 kuning telur'),
('20160911193139', 'a'),
('20160917003702', '2 batang serai, geprek'),
('20160917003702', '5 lembar daun jeruk'),
('20160917003702', '2 lembar daun kunyit, simpulkan'),
('20160917003702', '2,5 liter santan dari 3 buah kelapa tua '),
('20160917003702', '1 kg daging sapi has dalam, potong sesua'),
('20160917003702', '5 cm lengkuas, geprek'),
('20160917003702', '5 buah kapulaga'),
('20160917003702', '2 buah bunga lawang (pekak)'),
('20160917003702', '2 buah asam kandis'),
('20160917003702', '2 buah asam kandis'),
('20160917003702', '200 gr cabe merah keriting'),
('20160917003702', '15 siung bawang merah'),
('20160917003702', '8 siung bawang putih'),
('20160917003702', '1 ibu jari jahe'),
('20160917003702', '1 sdm ketumbar bubuk'),
('20160917003702', '1 buah pala'),
('20160917004200', '750 gram ikan tenggiri, potong setebal 1'),
('20160917004200', '2 sdm air jeruk nipis'),
('20160917004200', 'garam secukupnya'),
('20160917004200', '5 lembar daun salam'),
('20160917004200', '2 ruas ibu jari lengkuas, iris tipis'),
('20160917004200', '3 buah cabai merah besar, buang bijinya,'),
('20160917004200', '1 lembar daun kunyit, potong-potong'),
('20160917004200', '2 batang daun kemangi, petik daunnya'),
('20160917004200', '1 batang serai, iris tipis serong'),
('20160917004200', '2 buah tomat, buang bijinya, potong-poto'),
('20160917004200', '750 ml santan dari 1 butir kelapa'),
('20160917004200', '12 butir bawang merah'),
('20160917004200', '5 siung bawang putih'),
('20160917004200', '5 butir kemiri sangrai'),
('20160917004200', '1 ruas ibu jari jahe, parut'),
('20160917004200', '1 ruas ibu jari kunyit bakar'),
('20160917171945', '5 btr telur ayam, rebus sampai matang, k'),
('20160917171945', '1 lbr daun jeruk nipis'),
('20160917171945', 'Minyak goreng, secukupnya'),
('20160917171945', '2 sdm kecap manis'),
('20160917171945', 'Air, secukupnya'),
('20160917171945', '4 btr bawang merah'),
('20160917171945', '2 siung bawang putih'),
('20160917171945', '2 btr kemiri goreng'),
('20160917171945', '5 buah cabe rawit'),
('20160917171945', '1 sdt gula merah'),
('20160917171945', '1 sdm garam'),
('20160917171945', '1 buah tomat'),
('20160917173036', 'setengah kg Ikan Tongkol'),
('20160917173036', '1 buah Jeruk Nipis'),
('20160917173036', 'Daun Kemangi'),
('20160917173036', 'Cabai Rawit Hijau'),
('20160917173036', '2 sendok makan Minyak'),
('20160917173036', '1 batang Sereh'),
('20160917173036', '2 lembar Daun Salam'),
('20160917173036', '600ml Air Matang'),
('20160917173036', '2 siung Bawang Putih'),
('20160917173036', '4 buah Bawang Merah'),
('20160917173036', '3 buah Kemiri'),
('20160917173036', '2 cm Jahe'),
('20160917173036', '2 cm Kunyit'),
('20160917173036', '1 sendok makan Gula Pasir'),
('20160917173036', '1 sendok makan Garam'),
('20160917205251', '1 ikat Kangkung'),
('20160917205251', '4 buah Cabai Rawit'),
('20160917205251', '10 buah Cabai Merah'),
('20160917205251', '1 sendok teh Terasi'),
('20160917205251', '2 Bawang Putih'),
('20160917205251', '5 buah Kemiri'),
('20160917205251', '1-2 Jeruk Limau'),
('20160917205251', 'Minyak Jelantah hangat'),
('20160917205251', 'Garam secukupnya');

-- --------------------------------------------------------

--
-- Table structure for table `cara_resep`
--

CREATE TABLE `cara_resep` (
  `id_resep` varchar(30) NOT NULL,
  `cara_resep` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cara_resep`
--

INSERT INTO `cara_resep` (`id_resep`, `cara_resep`) VALUES
('20160902192233', 'Cuci bersih ayam lalu lumuri dgn garam secukupnya,diamkan kurleb 5 menit'),
('20160902192233', 'Setelah 5 menit,panaskan minyak goreng dlm wajan lalu goreng ayam setengah matang,angkat dan sisihkan'),
('20160902192233', 'Minyak bekas goreng ayam tadi bisa di gunakan lagi buat menumis'),
('20160902192233', 'Panaskan minyak secukupnya lalu tumis bumbu yg di haluskan,jgn lupa masukkan daun salam dan daun jeruk'),
('20160902192233', 'Tumis bumbu sampai harum dan kering lalu tuang air secukupnya'),
('20160902192233', 'Masukkan ayam,tambahkan garam,gula dan kaldu bubuk lalu tunggu smp air susut dan ayam empuk'),
('20160902192233', 'Setelah susut masukkan irisan bawang bombay,aduk2 sebentar lalu angkat'),
('20160902193048', 'Campurkan daging ayam dengan semua bumbu halus, kemudian tambahkan kecap dan juga minyak goreng. Remas-remas daging hingga rata, kemudian beri air dan aduk hingga rata. Kemudian diamkan selama 1 jam.'),
('20160902193048', 'Tusuk daging ayam pada tusuk sate yang telah disediakan.'),
('20160902193048', 'Lalu bakar sate sambil diolesi dengan sisa bumbu tadi hingga matang.'),
('20160902193048', 'Membuat Sambal, campurkan semua bahan membuat sambal dan aduk rata.'),
('20160902193512', 'Pertama anda rebus terlebih dahulu semua bumbu halusnya, kemudian masukkan juga asam kandis, serai, daun kunyit sambil anda aduk-adukkan hingga rata dan kuah mengental.'),
('20160902193512', 'Nah setelah itu anda masukkan ikan baungnya lalu rebus diatas api kecil hingga matang.'),
('20160902193512', 'Siapkan piring saji, angkat dan tuangkan kedalam piring sajinya.'),
('20160902194122', 'Isi, rebus susu cair, maizena, dan gula pasir sambil diaduk sampai meletup-letup. Matikan api. Masukkan kuning telur. Aduk cepat. Nyalakan api. Masukkan mangga. Aduk sampai meletup-letup. Sisihkan.'),
('20160902194122', 'Rebus air, gula pasir, agar-agar bubuk, dan jeli bubuk sambil diaduk sampai mendidih. '),
('20160902194122', 'Masukkan yoghurt mangga dan mangga gedong. Aduk sampai mendidih. Tambahkan susu kental manis. Aduk rata.'),
('20160902194122', 'Tuang ke dalam cetakan agar-agar bentuk mangga hingga setengah tinggi cetakan. Biarkan setengah beku. Beri isi. Siramkan adonan sampai penuh. Biarkan beku.  '),
('20160917003702', 'Setelah santan mendidih dan agak mengental masukkan potongan daging, tambahkan garam, kecilkan api kompor, masak sambil terus diaduk, masak dengan api kecil sampai kuah semakin mengental, koreksi rasa'),
('20160917003702', 'Masukkan dalam wajan santan dan bumbu halus, masukkan juga daun kunyit, daun jeruk, serai, lengkuas, kapulaga, bunga lawang, dan asam kandis, aduk terus agar santan tidak pecah'),
('20160917003702', 'Masak terus hingga menjadi rendang yg kering, dagingnya empuk, kandungan airnya habis dan minyaknya keluar serta berwarna coklat gelap (Â±3jam) Rendang siap disajikan'),
('20160917004200', 'Cuci bersih ikan, kemudian lumuri dengan air jeruk nipis dan garam secukupnya. Diamkan sebentar hingga meresap.'),
('20160917004200', 'Campur bumbu halus dengan santan dan semua bahan lainnya kecuali daun salam dan lengkuas, aduk rata.'),
('20160917004200', 'Siapkan wajan atau panci (sebaiknya gunakan anti lengket), alasi dengan daun salam dan irisan lengkuas. Letakan ikan, kemudian masukancampuran bumbu, dan masak diatas api sedang hingga mendidih.'),
('20160917004200', 'Kecilkan apinya, teruskan memasaknya hingga ikan dan semua bahan lainnya matang dan santan menyusut (tidak perlu dibalik-balik).'),
('20160917171945', 'Haluskan semua bahan bumbu halus. Sisihkan.'),
('20160917171945', 'Tumis bumbu yang sudah dihaluskan hingga tercium aroma harum. Lalu masukkan daun jeruk nipis. Aduk-aduk'),
('20160917171945', 'Masukkan telur yang sudah di rebus tadi. Kemudian tambahkan kecap manis dan air secukupnya, aduk-aduk kembali dan masak sampai bumbu meresap. Angkat, sajikan selagi hangat.'),
('20160917173036', 'Semua bahan bumbu halusnya anda haluskan terlebih dahulu.'),
('20160917173036', 'Kemudian anda tumis bumbu halusnya berserta sereh dan daun salam hingga harum dan matang'),
('20160917173036', 'Lalu anda tambahkan air matang, kemudian anda masak hingga mendidih.'),
('20160917173036', 'Nah sekarang masukkan ikan, garam, gula dan cabai rawitnya, kemudian anda masak hingga ikannya matang'),
('20160917205251', 'Pertama anda buang akar kangkungnya, lalu anda cuci bersih'),
('20160917205251', 'Kemudian anda panaskan air hingga mendidih, kemudian anda tambahkan sedikit garam dan masukkan kangkung'),
('20160917205251', 'Anda tunggu hingga 5 menit agar kangkungnya empuk, kemudian anda angkat'),
('20160917205251', 'Segera anda rendam dengan air es agar warnanya tetap hijau segar (+/- 10 menit), setelah itu anda tiriskan.'),
('20160917205251', 'Belah 2 memanjang dari pangkal hingga pucuk'),
('20160917205251', 'bakar terasi, kemiri, bawang putih yang sudah diiris agak tebal, cabai rawit, cabai merah hingga matang'),
('20160917205251', 'ulek kasar cabai merah, cabai rawit, kemiri dan bawang putih yang sudah matang, terasi bakar dan tambahkan sedikit garam'),
('20160917205251', 'Siram dengan minyak jelantah, dan anda aduk rata'),
('20160917205251', 'potong jeruk limau menjadi 4 bagian dan buang bijinya'),
('20160917205251', 'Masukkan potongan jeruk limaunya kedalam sambel dan aduk lagi'),
('20160917205251', 'masukkan kangkungnya kedalam sambal dan aduk lagi');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_resep`
--

CREATE TABLE `komentar_resep` (
  `isi_komentar` longtext NOT NULL,
  `tgl_komentar` varchar(20) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_resep` varchar(30) NOT NULL,
  `kd_komentar` int(5) NOT NULL,
  `kd_turunan` int(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_resep`
--

INSERT INTO `komentar_resep` (`isi_komentar`, `tgl_komentar`, `id_anggota`, `id_resep`, `kd_komentar`, `kd_turunan`) VALUES
('mantap', '2016-09-02 20:03', 2, '20160902193048', 1, 0),
('test', '2016-09-08 23:27', 1, '20160902193048', 2, 0),
('contoh balasan', '2016-09-08 23:37', 1, '20160902193048', 3, 1),
('balas', '2016-09-14 21:28', 1, '20160902193048', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_topik`
--

CREATE TABLE `komentar_topik` (
  `kd_komentar` int(5) NOT NULL,
  `isi_komentar` longtext NOT NULL,
  `tgl_komentar` varchar(20) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_topik` int(5) NOT NULL,
  `kd_turunan` int(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_topik`
--

INSERT INTO `komentar_topik` (`kd_komentar`, `isi_komentar`, `tgl_komentar`, `id_anggota`, `id_topik`, `kd_turunan`) VALUES
(1, 'jeruk', '2016-09-02 20:05', 2, 4, 0),
(2, 'test', '2016-09-08 23:44', 1, 4, 1),
(3, 'test 2', '2016-09-13 17:57', 1, 4, 0),
(4, 'balas test', '2016-09-14 21:28', 1, 4, 2),
(5, 'balas test 2', '2016-09-14 21:28', 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(14) NOT NULL,
  `nama_resep` varchar(40) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `bahan` varchar(10) NOT NULL,
  `cara` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `porsi` int(3) NOT NULL,
  `tips` longtext NOT NULL,
  `foto_resep` longtext NOT NULL,
  `tgl_resep` varchar(20) NOT NULL,
  `id_anggota` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `nama_resep`, `deskripsi`, `jenis`, `bahan`, `cara`, `asal`, `waktu`, `porsi`, `tips`, `foto_resep`, `tgl_resep`, `id_anggota`) VALUES
('20160902192233', 'Resep Ayam Bumbu Balado', 'Ayam pedas dengan bumbu balado', 'Makanan Utama', 'Daging', 'Tumis', 'Sumatera', '', 6, 'sumber : https://cookpad.com/id/resep/932415-ayam-bumbu-balado', 'balado.jpg', '2016-09-02 19:22', 1),
('20160902193048', 'Sate Ayam Bumbu Kecap', 'sate ayam yang enak dengan bumbu kecap yang mudah dibuat dan sederhana tapi rasanya sangat lezat dan maknyuuus. Sate biasanya menggunakan bahan daging sapi atau kambing, namun karena beberapa orang sangat tidak direkomendasikan untuk mengkonsumsi daging-daging tersebut, sehingga lahirlah sate ayam sebagai alternatif. Jadi bagi yang tidak dianjurkan mengkonsumsi daging sapi atau kambing tetap bisa merasakan lezatnya makan sate. ', 'Makanan Utama', 'Daging', 'Bakar/Panggang', 'Jawa', '2 jam', 2, 'Sajikan sate ayam ini secara berkala untuk keluarga tercinta untuk menjaga variasi menu makan keluarga sehingga mereka betah makan di rumah. \r\nSumber : http://resepmasakanpedia.com/resep-sate-ayam-enak-bumbu-kecap/', 'sate+ayam.jpg', '2016-09-02 19:30', 1),
('20160902193512', 'Ikan Baung Asam Padeh', 'Ikan Baung Asam Padeh merupakan salah satu masakan khas daerah Riau, masakan ini menggunakan bahan dasar ikan baung yang dimana daging dari ikan baung ini sangat empuk sekali saat dinikmati.', 'Makanan Utama', 'Ikan', 'Rebus', 'Sumatera', '', 3, 'Sumber : http://www.menuresepmasakan.com/resep-masakan-ikan-baung-asam-padeh/', 'ikan-baung-615x410.jpg', '2016-09-02 19:35', 1),
('20160917003702', 'Rendang daging khas padang', 'Masak rendang....menu paling mainstream dikala lebaran yak? ðŸ˜‹ \r\nBiasa deh ya, tiap dapet daging qurban, masakan yg ga pernah absen ya ini nih, si rendang yg nikmat ini, hihihi, klw ada sisa daging barulah diolah menu lain, yuk intip resepku, cekidot ðŸ˜', 'Makanan Utama', 'Daging', 'Rebus', 'Sumatera', '180 Menit', 4, 'Banyaknya cabe yang dipakai sesuaikan dengan selera anda. https://cookpad.com/id/resep/958030-rendang-daging-khas-padang', 'photo (1).jpg', '2016-09-17 00:37', 1),
('20160917004200', 'Pangkek Ikan', 'Mengkonsumsi ikan sangat bagus untuk tubuh kita, oleh karena itu sering lah mengkonsumsi ikan, pangek ikan dengan rasa yang tidak biasa tentu akan membuat anda dan keluarga pun tidak akan bosan untuk mengkonsumsi jenis makanan laut ini.', 'Makanan Utama', 'Ikan', 'Rebus', 'Sumatera', '1 Jam', 5, 'Sebenarnya anda bebas saja memilih jenis ikan yang anda sukai untuk dijadikan resep pangek ikan ini. Bisa juga memakai ikan mas, namun bagi anda yang tidak mau repot memisahkan duri-duri dalam ikannya dapat menggunakan jenis ikan tenggiri, selain lebih tebal dagingnya juga lebih mudah menyantapnya karena tidak terlalu banyak memiliki duri. http://www.bacaresepdulu.com/resep-pangek-ikan/', 'resep-pangek-ikan.jpg', '2016-09-17 00:42', 1),
('20160917171945', 'Resep telur bumbu bali', 'Seringkali para ibu pengen masak yang enak dan juga cepat, tetapi bingung mau membuat apa dan bagaimana cara membuatnya. Mungkin salah satu solusinya adalah membuat telur bali ini yang begitu sangat praktis dan juga sederhana tetapi bercita rasa tinggi yang akan menggugah selera makan anda.', 'Makanan Utama', 'Daging', 'Tumis', 'Bali', '', 5, 'Sedikit tips sebelum anda memasak resep telur bumbu bali ini yaitu sebelum di masak hendaknya kulit telur dibersihkan, agar bakteri salmonella pada kulit telur tidak menempel. Selain itu, masak telur hingga benar-benar matang. http://www.resepbuntik.com/2014/09/resep-telur-bumbu-bali-asli-spesial.html', 'Resep Telur Bumbu Bali Asli Spesial Enak Dan Praktis.jpg', '2016-09-17 17:19', 2),
('20160917173036', 'Resep Ikan Kuah Kuning Khas Papua', 'Resep Ikan Kuah Kuning Khas Papua merupakan salah satu resep yang sangat banyak diminati masyarakat papua, selain rasanya yang enak masakan ini juga sangat mudah dibuatnya. Resep ikan kuah kuning ini berbahan dasar ikan tongkol dengan taburan daun kemangi yang membuat masakan ini enak saat disantap. ', 'Makanan Utama', 'Ikan', 'Rebus', 'Papua', '1 Jam', 4, 'Ikan kuah kuning khas papua ini sangat cocok bila dinikmati dengan Papeda, namun bila anda tidak suka dengan papeda, anda juga bisa menggantinya dengan Nasi Putih. http://www.menuresepmasakan.com/resep-masakan-ikan-kuah-kuning/', 'resep-ikan-kuning-papua.jpg', '2016-09-17 17:30', 2),
('20160917205251', 'Plecing Kangkung', 'Plecing Kangkung merupakan salah satu makanan khas daerah lombok yang banyak sekali masyarakat yang suka. Selain rasanya yang enak dan gurih, masakan ini juga sangat mudah sekali dibuatnya.', 'Makanan Utama', 'Sayuran', 'Tumis', 'Bali', '45 Menit', 4, 'plecing kangkung sangat enak dan gurih sekali rasanya bila disantap bersamaan dengan nasi panas. http://www.menuresepmasakan.com/resep-plecing-kangkung-khas-lombok-yang-enak-dan-nikmat/', 'plecing-kangkung-613x410.jpg', '2016-09-17 20:52', 2);

-- --------------------------------------------------------

--
-- Table structure for table `saji_resep`
--

CREATE TABLE `saji_resep` (
  `id_resep` varchar(30) NOT NULL,
  `saji_resep` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saji_resep`
--

INSERT INTO `saji_resep` (`id_resep`, `saji_resep`) VALUES
('20160902192233', 'Sajikan selagi hangat'),
('20160902193048', 'Sajikan sate ayam dengan bumbu kecap dan bahan pelengkap. Sate Ayam Bumbu Kecap siap untuk disantap.'),
('20160902193512', 'Sajikan dengan nasi hangat.'),
('20160902194122', 'Hias dengan buah atau susu'),
('20160917173036', 'Sesaat sebelum masakan diangkat, anda tambahkan terlebih dahulu daun kemangi dan jeruk nipis, anda aduk rata'),
('20160917205251', 'sajikan dengan tahu goreng yang enak dan nasi panas');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id_topik` int(5) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `isi` longtext NOT NULL,
  `tgl_topik` varchar(20) NOT NULL,
  `id_anggota` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `judul`, `isi`, `tgl_topik`, `id_anggota`) VALUES
(4, 'Buah untuk puding', '<p>Buah yang cocok untuk dimasak menjadi&nbsp;puding apa ya?</p>\r\n', '2016-09-02 20:01', 1),
(5, 'Ayam negeri atau ayam kampung', '<p>Untuk diolah, lebih enak ayam kota atau ayam kampung ya?</p>\r\n', '2016-09-02 20:06', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `komentar_resep`
--
ALTER TABLE `komentar_resep`
  ADD PRIMARY KEY (`kd_komentar`);

--
-- Indexes for table `komentar_topik`
--
ALTER TABLE `komentar_topik`
  ADD PRIMARY KEY (`kd_komentar`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD UNIQUE KEY `nama_resep` (`nama_resep`);
ALTER TABLE `resep` ADD FULLTEXT KEY `nama_resep_2` (`nama_resep`,`jenis`,`bahan`,`cara`,`asal`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id_topik`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar_resep`
--
ALTER TABLE `komentar_resep`
  MODIFY `kd_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar_topik`
--
ALTER TABLE `komentar_topik`
  MODIFY `kd_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
