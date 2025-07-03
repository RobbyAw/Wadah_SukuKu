-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2025 pada 05.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Casual Shoes Adidas', 350000, 'Sepatu casual Adidas original menggunakan kombinasi material berkualitas tinggi untuk kenyamanan, daya tahan, dan gaya, dengan upper umumnya terbuat dari kulit sintetis atau kulit asli dan outsole dari karet, sementara insole bisa berbahan PVC atau material lain yang mendukung. Adidas juga mengedepankan keberlanjutan, dengan 96% poliester yang digunakan dalam produknya kini merupakan poliester daur ulang. ', 'sepatu1.jpg'),
(2, 'Nike Air Jordan', 300000, 'Sepatu Nike Air Jordan original umumnya dibuat dari material berkualitas tinggi seperti kulit asli (kulit sapi, nubuck, atau kulit sintetis berkualitas tinggi), bahan tekstil, dan mesh berkualitas baik. Untuk sol, digunakan sol karet yang berkualitas dengan lem yang kuat dan tidak berbau menyengat. Beberapa model juga menggabungkan teknologi Nike Air untuk bantalan dan penyerapan benturan yang optimal. \r\nTeknologi Nike Air: Beberapa model juga dilengkapi teknologi Nike Air yang terkenal efektif dalam menyerap benturan dan memberikan kenyamanan ekstra.', 'sepatu2.jpg'),
(3, 'Shoes Puma Cycle', 400000, 'Sepatu Puma Cycle asli dikenal menggunakan material berkualitas premium untuk kenyamanan dan ketahanan, dengan bagian atas umumnya terbuat dari kulit asli, suede, atau mesh berkualitas tinggi, serta sol luar dari karet murni. Puma juga semakin mengintegrasikan bahan-bahan yang lebih berkelanjutan dalam produksinya, seperti poliester daur ulang dan katun dari sumber yang lebih baik.\r\nDetail Material Sepatu Puma Asli (Umum):\r\nBagian Atas (Upper):\r\nKulit Asli: Memberikan tampilan premium, daya tahan, dan kenyamanan, sering digunakan pada model klasik atau olahraga.\r\nSuede: Memberikan sentuhan lembut, tampilan elegan, dan sering digunakan pada model dengan nuansa retro.\r\nMesh: Bahan jala yang ringan, fleksibel, dan breathable, sangat baik untuk sirkulasi udara dan kenyamanan, terutama pada sepatu lari atau kasual yang mengutamakan kenyamanan sehari-hari.\r\nPoliester: Terutama poliester daur ulang, digunakan untuk berbagai komponen sepatu, termasuk bagian atas atau lapisan, sejalan dengan komitmen keberlanjutan Puma.', 'sepatu3.jpg'),
(4, 'Shoes Adidas Samba', 500000, 'Sepatu Adidas Samba terkenal dengan perpaduan material premium yang klasik dan tahan lama, meliputi bagian atas kulit lembut dengan tambahan lapisan suede pada bagian jari (T-toe), serta sol karet gum yang ikonis. Desainnya yang ramping, nyaman, dan serbaguna.', 'sepatu4.jpg'),
(5, 'Shoes New Balance 550', 450000, 'Balance 550 original umumnya terbuat dari kulit (cow leather atau pig skin) untuk bagian atas, dikombinasikan dengan textile atau jaring ringan untuk bagian dalam dan sirkulasi udara, serta sol karet untuk daya tahan dan kenyamanan. \r\nDetail Material Sepatu New Balance 550 Original:\r\nMaterial Atas (Upper):\r\nKomponen utama sepatu ini adalah kulit, baik itu cow leather (kulit sapi) atau pig skin (kulit babi). Kulit ini memberikan tampilan premium, daya tahan, dan bentuk yang kokoh pada sepatu. Beberapa varian mungkin juga memiliki panel suede atau mesh untuk memberikan variasi tekstur dan ventilasi. \r\nMaterial Bagian Dalam (Lining):\r\nBagian dalam sepatu biasanya dilapisi dengan textile yang nyaman untuk sirkulasi udara dan mengurangi gesekan. \r\nMaterial Sol (Outsole):\r\nSol luar sepatu New Balance 550 terbuat dari bahan karet yang kuat dan tahan lama, dirancang untuk memberikan traksi dan stabilitas saat digunakan sehari-hari. \r\nSistem Pengikat:\r\nSepatu ini menggunakan tali sebagai sistem pengikatnya untuk memberikan keamanan dan kesesuaian yang pas. \r\nDetail Lainnya:\r\nBeberapa desain mungkin memiliki detail tambahan seperti lidah berlapis dengan branding New Balance, detail berlubang untuk ventilasi tambahan, atau fitur anti-tabrakan untuk keamanan. ', 'sepatu5.jpg'),
(6, 'Shoes Nike Air', 370000, 'Sepatu Nike Air original umumnya menggunakan material berkualitas tinggi yang dirancang untuk kenyamanan, dukungan, dan daya tahan, dengan kombinasi material seperti kulit (asli atau sintetis), suede, mesh, nilon, poliester, dan busa EVA (Ethylene Vinyl Acetate) untuk solnya, serta teknologi khas seperti Max Air Cushion. ', 'sepatu6.jpg'),
(7, 'Shoes New Balance Azkoyen', 650000, 'Sepatu New Balance \"Azkoyen\" original kemungkinan besar merujuk pada model tertentu yang menggunakan kombinasi material berkualitas tinggi untuk kenyamanan, daya tahan, dan gaya. Material umum yang digunakan pada sepatu New Balance original meliputi: mesh untuk sirkulasi udara, kulit sintetis atau suede untuk daya tahan dan tampilan premium, serta outsole karet untuk traksi dan stabilitas. ', 'sepatu7.jpg'),
(8, 'Shoes Nike Air Force 1', 375000, 'Sepatu Nike Air Force 1 original secara umum dibuat dengan material kulit berkualitas tinggi, baik kulit asli maupun sintetis, serta sol karet yang tahan lama untuk traksi dan daya tahan. Selain itu, terdapat bantalan Nike Air yang memberikan kenyamanan.\r\nDetail Material Nike Air Force 1 Original:\r\nMaterial Atas (Upper):\r\nUmumnya menggunakan kulit berkualitas tinggi, seperti kulit asli (misalnya kulit sapi atau nubuck) atau kulit sintetis, yang memberikan kesan kokoh dan tahan lama. Beberapa varian mungkin juga menggunakan panel tekstil tenun untuk menambah kontras dan tampilan visual. \r\nMaterial Bagian Dalam (Lining):\r\nMenggunakan material tekstil yang nyaman di bagian dalam sepatu. \r\nMaterial Sol:\r\nMenggunakan karet yang tahan lama dengan pola tapak pivot circle yang ikonik untuk traksi yang optimal. \r\nBantalan (Cushioning):\r\nTeknologi Nike Air yang terintegrasi dalam sol memberikan kenyamanan ringan dan peredam kejut yang telah teruji, baik untuk aktivitas olahraga maupun sehari-hari. \r\nKonstruksi:\r\nDilengkapi dengan jahitan overlay yang kuat pada bagian upper untuk menambah daya tahan dan dukungan, serta desain cupsole yang kokoh. Beberapa model mungkin memiliki kerah berlapis mesh untuk kenyamanan tambahan di area pergelangan kaki. ', 'sepatu8.jpg'),
(9, 'Shoes Converse All Star', 200000, 'Sepatu Converse original sebagian besar terbuat dari kanvas katun berkualitas tinggi yang dikenal kuat dan awet, meskipun juga tersedia dalam varian kulit dan suede untuk tampilan yang berbeda dan daya tahan lebih. Sol sepatu Converse umumnya dibuat dari karet TPR yang lentur dan tahan lama, dengan pola berlian pada outsole untuk cengkeraman anti selip.\r\nMaterial Utama Sepatu Converse Original:\r\nKanvas:\r\nBahan utama yang digunakan adalah kanvas katun yang dicampur dengan berbagai bahan kimia. Kanvas ini dikenal kuat, nyaman, dan menyerap keringat, cocok untuk penggunaan sehari-hari. \r\nKulit dan Suede:\r\nBeberapa model Converse original menawarkan bahan kulit dan suede untuk tampilan yang lebih mewah dan peningkatan daya tahan. \r\nSol Karet TPR:\r\nSol sepatu Converse terbuat dari Thermoplastic Rubber (TPR) yang memberikan kelenturan, ketahanan, dan kenyamanan saat digunakan. \r\nLogam:\r\nConverse original juga menggunakan perangkat keras logam pada bagian eyelet (lubang tali). \r\nFitur Material Lainnya:\r\nToe cap dan Toe bumper:\r\nPelindung jari kaki yang didesain untuk memberikan kenyamanan dan kebebasan bergerak pada kaki. \r\nInsole:\r\nSepatu Converse original memiliki insole yang tebal dan empuk, yang memberikan kenyamanan ekstra. \r\nPatch Logo:\r\nPada sisi bagian dalam sepatu, terdapat patch atau tambalan logo bundar yang menjadi ciri khas sepatu Converse original. \r\nChuck 70:\r\nModel ini secara spesifik dikenal memiliki kanvas yang lebih kokoh dan lebih banyak jahitan dibandingkan model klasik Chuck Taylor, serta bantalan busa untuk kenyamanan yang lebih baik. ', 'sepatu9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_produk`, `harga`, `tanggal_transaksi`) VALUES
(1, 'Sepatu Sport Keren', 750000, '2025-07-02 03:32:30'),
(2, '', 0, '2025-07-02 03:49:39'),
(3, 'Sepatu Sport Keren', 750000, '2025-07-02 03:52:13'),
(4, 'Sepatu Sport Keren', 750000, '2025-07-02 03:57:21'),
(5, 'Sepatu Sport Keren', 750000, '2025-07-02 05:05:12'),
(6, 'Sneakers Casual', 650000, '2025-07-03 02:36:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
