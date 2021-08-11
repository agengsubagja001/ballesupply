-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 03:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balesupply`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_produk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `id_produk`) VALUES
('kat001', 'busana muslim', 'prod001'),
('kat002', 'baju anak', 'prod009'),
('kat003', 'aksesoris pria', 'prod005'),
('kat004', 'aksesoris wanita', 'prod004');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(15) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `harga` double NOT NULL,
  `berat` float NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `foto_utama` varchar(20) NOT NULL,
  `foto_samping` varchar(20) NOT NULL,
  `foto_atas` varchar(20) NOT NULL,
  `id_varian` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `berat`, `deskripsi`, `foto_utama`, `foto_samping`, `foto_atas`, `id_varian`, `id_kategori`) VALUES
('prod001', 'Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy', 33000, 70, '‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️\r\n\r\nThe most wanted \"Khalisa Instan” hijab super simple langsung slup tanpa ribet peniti atau pentul ini kembali restiock! MasyaAllah hijab ini solusi banget buat kamu yang ga suka ribet.\r\n\r\nBahannya diamond crepe karena bahannya ringan, adem, jadi nyaman sekali nih buat dipake di rumah atau keluar juga mantul!\r\n\r\nKhalisa Instan tersedia 20 pilihan warna yang siap kamu bawa pulang\r\n\r\nBahan : Diamond crepe\r\nUkuran :\r\nPanjang depan 70 cm\r\nPanjang belakang 90 cm\r\n✔️Finishing : Lasercut 100% cantik!\r\n\r\nYang udh tau kualitas produk hijabghaitsa udh gak pake main nunda lagi 😘 langsung cuuusss order dengan cara KLIK LIK DI BIO tanpa tapi, tanpa nanti karena klo ga kebagian nanti gigit jari 💕 !!\r\n\r\n#dailyhijab #bergodaily #diamonditaliano #bergoinstant #bergosyari #bergomurah #hijabrumahan #bergomaryam #bergotali #bergosimple', 'bergo1.jpg', 'bergo2.jpg', 'bergo3.jpg', 'var001', 'kat001'),
('prod002', 'SiennaLuxury Voal / Voal Premium - Sand', 41000, 70, 'Pemilihan hijab yang tepat akan membuat tampilanmu semakin stylish dan tetap nyaman seharian dengan segudang aktifitas!\r\n\r\nPerkenalkan seri voal terbaru \"Sienna Series\" by @hijabghaitsa 💕\r\nMatt : Premium Voal Fabric\r\n- Extra Comfort\r\n- Mudah dibentuk (nurut bgt bahannya)\r\n- Tegak di dahi\r\n- Lembuuuuutttttt\r\n- TIDAK berbulu\r\n- Ketebalannya PAS\r\n- Breathable\r\n\r\nSize : 120x120 cm\r\nFinishing : Lasercut\r\n\r\n.\r\nHappy Shopping 🛍 💕\r\n.\r\n#voaloriginal #voalsquare #squarevoal #voalhijab #voalsyari #premiumvoal #premiumhijab #jilbabexclusive #exclusivehijab #dailymuslimah #hijabdaily #plainvoal #plainhijab #jilbabvoalpremium #voalpremiumdepok #voalpremiumjakarta', 'sienna1.jpg', 'sienna2.jpg', 'sienna3.jpg', 'var001', 'kat001'),
('prod003', 'Pashmina Babydoll / pashmina Ceruty baby doll - Mause', 37000, 70, '‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️\r\n\r\nPASHMINA BABYDOLL\r\n.\r\nPashmina yang supeeer dupeeer enak di pakenya , berbahan ceruty babydoll (ceruty/ciffon yang terbaik di kelasnya) berstektur pasir, jatuh dipakenya lembuuut ga panas ya dear. Alhamdulillah pashmina ini best seller dari pertama hijab ghaitsa jualan di tahun 2017.\r\n.\r\n❤️ Pilihan warnanya juga masyaAllah cantik-cantik, ga cukup 1 loh. Bisa di jadiin daily hijab kalian yang super recomended!\r\n.\r\nMaterial : ciffon babydoll\r\nUkuran : 175x75 cm\r\nPinggiran jahit tepi super rapi\r\n.\r\n🔥TURUN HARGA🔥\r\nSatuan : 38.000\r\nMinimial order 3pcs satuannya jadi 35.000/pcs\r\n\r\n\r\n#hijabsegiempat #pashmina #pashminapolos #pashminaceruty #pashminacerutybabydoll #pashminaceruti #pashminacantik #tutorial pashmina', 'pashmina1.jpg', 'pashmina2.jpg', 'pashmina3.jpg', 'var001', 'kat001'),
('prod004', 'KAOS KAKI WUDHU SASHEE-BASIC 23-24 CM WARNA HITAM - Hitam', 21250, 50, 'Kondisi: Baru\r\nBerat: 50 Gram\r\nKategori: Kaos Kaki Wudhu\r\nEtalase: Kaos Kaki wudhu\r\nAssalamu\'alaikum sasheelovers, kita ada kaos kaki wudhu basic pendek 23-24 cm untuk sashelovers.\r\nAda 12 varian warna yang kami persembahkan untuk sasheelovers semua.\r\n\r\nJangan sampai kehabisan yaaa.\r\nKami mempersembahkan kaos kaki kaki wudhu basic untuk para sassheelovers agar lebih mudah beraktifitas dan mudah dipadupadakan dengan sandal ataupun sepatu.\r\n\r\nDengan bahan nyilon spandex pilihan,hadir dengan 11 warna warna signature dari kami serta ukuran kaos kaki yang pas sehingga nyaman untuk dikenakan dan yang paling utama pwmudahkan untuk berwudhu.\r\n#wudhu #sashee #bandung #balesocks', 'kaki1.jpg', 'kaki2.jpg', 'kaki3.jpg', 'var001', 'kat004'),
('prod005', 'SEPATU PRIA DERBY SINTESIS - 40', 139000, 1000, 'Kondisi: Baru\r\nBerat: 1.000 Gram\r\nKategori: Pantofel Pria\r\nEtalase: Semua Etalase\r\nSepatu ini sangat nyaman dipakai, bahan lembut tidak bikin kaki lecet.\r\nSole memakai bahan thermoplastic rubber lentur dan tidak licin.\r\n\r\nSpesifikasi:\r\nBahan : pu leather\r\nLinning : mesh\r\nSole : eco rubber (tidak licin)\r\nSize : 37, 38, 39, 40, 41, 42, 43 ,44, 45\r\nWarna : Tan, coklat, hitam\r\nSudah termasuk kotak/box, tisu, silica, dan packing rapih.\r\n\r\nSize chart\r\n37 = 22,5 cm\r\n38 = 23 cm\r\n39 = 24 cm\r\n40 = 25 cm\r\n41 = 26 cm\r\n42 = 27 cm\r\n43 = 28 cm\r\n44 = 29 cm\r\n45 = 30 cm (custom)\r\n46 = 31 cm (custom)\r\n47 = 32 cm (custom)', 'derby1.jpg', 'derby2.jpg', 'derby3.jpg', 'var002', 'kat003'),
('prod006', 'PLISKET FULL CERUTY TANPA GARIS TENGAH PASHMINA - Coin', 60900, 100, 'Kondisi: Baru\r\nBerat: 100 Gram\r\nKategori: Pashmina\r\nEtalase: Semua Etalase\r\nPashmina Plisket dengan bahan Ceruty Armany Babydoll high quality berserat khusus detail plisket full hingga ujung pashmina\r\nKarakter bahan tegak dipakai, tidak mudah kusut, tidak perlu disetrika\r\n\r\nDetail ukuran Lebih panjang\r\n185x75cm (toleransi jahitan)\r\nFinishing Jahit Tepi Halus\r\n\r\n#pasminaplisket\r\n#jilbabplisket\r\n#shawlpleats\r\n#shawl\r\n#hijabphasmina\r\n#hijabfashion\r\n#hijabstyle', 'plisket1.jpg', 'plisket2.jpg', 'plisket3.jpg', 'var001', 'kat001'),
('prod007', 'KHIMAR QUEEN PAD', 52000, 50, 'Assalaamualaikum Dear,,\r\nAda yang baru nih, Khimar Queen Pad. Nah kemarin sudah produksi khimar Queen tanpa Pad. Sekarang bagi yang merasa ga pede tanpa pad bisa banget order ke Leika\r\n\r\nBahan Diamond Crepe Premium, tidak terawang, anti kusut, praktis & anti tembem. Bahannya jatuh & tidak panas\r\n\r\nBagus banget di muka, terlihat rapi & cocok untuk dipakai acara apapun\r\nSantai tapi tetap manis 😘\r\n\r\n#bergo\r\n#khimarqueenleika\r\n#khimarceruty\r\n#hijabinstan\r\n#jilbabinstan\r\n#kerudungbergo', 'khimar1.jpg', 'khimar2.jpg', 'khimar3.jpg', 'var001', 'kat001'),
('prod008', 'MUKENA SLIM PREMIUM - VARIAN 1', 300000, 200, 'Kondisi: Baru\r\nBerat: 200 Gram\r\nKategori: Mukena\r\nEtalase: Mukena\r\nHai sahabat Bale,sekarang ada produk dari kami untuk perlengkapan ibadah mu\r\n\r\nSize\r\nDepan 115 cm\r\nBelakang 125 cm\r\nBawahan 117 cm\r\n\r\nAda resleting dibawah dagu, cocok sekali untuk traveling. Bisa dipakai tanpa bagian kepala tanpa merusak hijab.\r\nMotifnya benar-benar cute & banyak pilihan. Jangan sampai kehabisan lagi ya shay🥰\r\n\r\n#mukena\r\n#mukenasilkymotif\r\n#mukenatravelling\r\n#mukenapremium\r\n#mukenamewah\r\n#mukenasilky\r\n#balesocks\r\n#balesupply', 'mukena_slim1.jpg', 'mukena_slim2.jpg', 'mukena_slim3.jpg', 'var001', 'kat001'),
('prod009', 'BAJU ANAK PEREMPUAN KARAKTER LUCU MOTIF DP - TSAIBY - S', 45000, 100, 'Kondisi: Baru\r\nBerat: 100 Gram\r\nKategori: Kaos Anak Perempuan\r\nEtalase: KAOS ANAK\r\nBahan : 100% cotton combed 30s\r\n* Kenapa Combed 30s ? Karena kainnya yg mudah menyerap keringat, bahannya adem, lembut tidak kaku sangat cocok untuk menemani Aktivitas anak2 bermain maupun didlm rumah tidak akan terganggu oleh rasa gerah.\r\n\r\n* Memiliki jahitan yang rapi dengan jahitan rantai dipundak dan bagian leher menggunakan rib sehingga bagian leher tidak mudah rusak atau berubah bentuk.\r\n\r\n* Menggunakan tinta sablon jenis plastisol yang melekat kuat pada kain tidak mudah rusak /retak/pecah walaupun dicuci berkali-kali dan aman untuk kulit anak-anak\r\n\r\n* Dilengkapi dengan hangtag berkualitas . untuk membedakan produk kami dengan yang lain.\r\n\r\nUntuk motif ini tersedia dalam ukuran S,M,L,XL\r\n\r\nEstimasi size untuk usia 1 sampai 8 tahun\r\n\r\nSize S : Lebar 28cm Tinggi 41cm ( usia 1 sd 2 tahun)\r\nSize M : Lebar 31cm Tinggi 44cm (usia 3 sd 4 tahun)\r\nSize L : Lebar 34cm Tinggi 47cm (usia 5 sd 6 tahun)\r\nSize XL : Lebar 37cm Tinggi 50cm ( usia 7 sd 8 tahun)\r\n\r\n\r\n\r\nNOTE :\r\n* MOTIF READY SILAHKAN PILIH SIZE YANG DIINGINKAN PADA VARIASI\r\n* PESAN BANYAK CHAT TERLEBIH DAHULU\r\n* PENTING ! SILHAKAN LANGSUNG CHAT SAJA. KAMI FAST RESPONS\r\n* APABILA PAKET SUDAH DITERIMA SILAHKAN KLIK PESAN DITERIMA. MOHON KERJASAMANYA KAK :)\r\n\r\n\r\n#BALESOCKS#BANDUNG#KAOSKAKI#BAJUANAK#POPULER#ANAK#PEREMPUAN#LAKILAKI', 'baju_anak1.jpg', 'baju_anak2.jpg', 'baju_anak3.jpg', 'var003', 'kat002');

-- --------------------------------------------------------

--
-- Table structure for table `varian`
--

CREATE TABLE `varian` (
  `id_varian` varchar(10) NOT NULL,
  `nama_varian` varchar(30) NOT NULL,
  `isi_varian` varchar(20) NOT NULL,
  `id_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varian`
--

INSERT INTO `varian` (`id_varian`, `nama_varian`, `isi_varian`, `id_produk`) VALUES
('var001', 'warna', 'hitam', 'prod001'),
('var002', 'ukuran', '31', 'prod005'),
('var003', 'ukuran_baju', 'S', 'prod004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `ID_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `ID_produk` (`id_produk`),
  ADD KEY `ID_varian` (`id_varian`),
  ADD KEY `ID_kategori` (`id_kategori`);

--
-- Indexes for table `varian`
--
ALTER TABLE `varian`
  ADD PRIMARY KEY (`id_varian`),
  ADD KEY `ID_produk` (`id_produk`),
  ADD KEY `ID_varian` (`id_varian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
