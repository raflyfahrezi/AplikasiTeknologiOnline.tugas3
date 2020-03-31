-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahsy`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `imageurl` varchar(150) NOT NULL,
  `id_author` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `content`, `imageurl`, `id_author`, `status`) VALUES
(6, 'Sektor Manufaktur Indonesia Gencar Adopsi Industri 4.0', '29 March 2020', 'Sektor manufaktur Indonesia mulai gencar mengadopsi teknologi digital terbaru dalam revolusi industri 4.0 terutama aritificial intelligence, machine learning, dan internet of things (IoT) yang semua berbasis cloud.\r\n\r\nTeknologi digital terbaru itu digunakan untuk menopang inovasi manufaktur sehingga meningkatkan efisiensi sekaligus menggenjot produktivitas, serta mampu mengatur skalabilitas produksi untuk mencapai fleksibilitas dan kegesitan operasional.\r\n\r\nVP Product Management Cloud & UC Telkomtelstra Arief Rakhmatsyah menjelaskan dalam revolusi industri 4.0 sektor manufaktur telah menggunakan IoT dan memanfaatkan banyak sensor di seluruh lini produksi.\r\n\r\nKehadiran sensor yang terhubung dengan IoT memungkinkan perusahaan manufaktur untuk mencapai efisiensi operasional, skalabilitas produksi, kegesitan, sekaligus meningkatkan produktivitas di saat peak season. \r\n\r\nBerdasarkan riset perusahaan teknologi informasi, Gartner IoT Forecast Tools 2018, akan ada 153 ribu benda yang akan terkoneksi dengan IoT di Indonesia hingga 2020. Pertumbuhan IoT di Indonesia mencapai rata-rata majemuk (compounded annual growth rate/CAGR) sebesar 19 persen sampai akhir 2022.', 'upload/images/10.jpg', 1, 1),
(7, 'Peternak di Rusia Pasang Headset VR ke Sapi Mereka, Kenapa?', '29 March 2020', 'Bertempat di peternakan susu RusMoloko di Moskow, Rusia, sejumlah peternak melakukan sebuah uji coba teknologi virtual reality (VR) yang unik.\r\n\r\nKenapa peternak di Moskow ini memasangkan headset VR ke sapi mereka? Dibuat secara khusus, VR ini digunakan agar para sapi dapat lebih santai dan gembira.\r\n\r\nAlasan yang cukup masuk akal memang, sapi tersebut dapat menikmati keseharian mereka dengan melihat video pemandangan, padang rumput hijau, hingga tak perlu khawatir dengan predator.\r\n\r\nDikutip dari laman Gamerant, Minggu (1/12/2019), peternak berharap kondisi lingkungan yang terlihat tenang itu akan membantu sapi menghilangkan stres, dan menghasilkan banyak susu.\r\n\r\nTak hanya itu, headset VR ini dirancang khusus oleh pengembang dan dokter hewan agar memiliki visual warna yang sudah dikalibrasi sesuai dengan apa yang mereka lihat.\r\n\r\nSelain mengandalkan headset VR, sejumlah peternak juga menggunakan perangkat berteknologi lainnya agar sapi mereka dapat menghasilkan susu yang lebih banyak.\r\n\r\nAdapun teknologi lain yang digunakan, termasuk memainkan musik klasik hingga sampai pemijat otomatis untuk membantu ternak mengurangi stres.\r\n\r\nPada masa pengujian, headset VR tersebut mampu menurunkan tingkat kecemasan dan meningkatkan suasana hati mereka secara keseluruhan.\r\n\r\nAkan tetapi, walau menunjukkan hasil yang postif para peneliti masih harus melakukan lebih banyak lagi uji coba terhadap hal ini.', 'upload/images/11.jpg', 1, 1),
(8, 'Google Duo Kini Dukung Group Video Call hingga 12 Orang', '30 March 2020', 'Google Duo, baru saja mengumumkan tambahan jumlah orang yang dapat menggunakan aplikasi ini dalam sekali panggilan video grup (group video call). Informasi ini diketahui dari akun Twitter Senior Director Product Google Sanaz Ahari.\r\n\r\nDikutip dari Engadget, Minggu (29/3/2020), kini panggilan video grup di Google Duo dapat mengakomodasi 12 orang--sebelumnya hanya 8 orang.\r\n\r\n\"Kami menyadari panggilan group sangat penting saat ini. Jadi, kami menambah partisipan panggilan grup dari 8 menjadi 12 mulai sekarang,\" kata Sanaz di akun @sanazahari.\r\n\r\nPembaruan fitur di Google Duo ini hampir dapat dipastikan akibat pembatasan aktivitas yang diterapkan di banyak negara di tengah pandemik Covid-19. Karenanya, panggilan video maupun telepon menjadi komunikasi andalan.\r\n\r\nPenambahan fitur ini dilakukan dari server, sehingga pengguna tidak perlu melakukan pembaruan aplikasi. Dalam cuitannya, Sanaz juga mengatakan akan ada hal lain yang akan datang, tapi belum diungkap.\r\n\r\nSekadar informasi, kemampuan Google Duo untuk menampung delapan orang sekaligus dalam satu grup sebenarnya baru diperkenalkan tahun lalu. Sebelumnya, aplikasi ini hanya mampu mendukung empat orang.', 'upload/images/13.jpg', 1, 1),
(9, '9 Hal Ini Bisa jadi Magnet untuk Lawan Jenis', '30 March 2020', 'Orang seperti apa yang dianggap paling menarik lawan jenis? Wanita pirang bermata biru? Atau pria berambut gelap dengan jenggot lebat?\r\n\r\nPara ilmuwan dari berbagai negara terus melakukan penelitian untuk mencari tahu apa yang disukai pria dan wanita dari lawan jenisnya. Selain beberapa hal yang disebutkan di atas, ternyata ada aspek lain.\r\n\r\nMelansir laman Bright Side, Jumat (7/9/2018), daya tarik seorang wanita dan pria ternyata tidak hanya ditentukan oleh penampilan, namun juga karakteristik pribadi. Berikut 9 di antaranya:\r\n\r\n1. Ekspresi Wajah\r\n\r\nPada 2011, para ilmuwan mencoba mencari tahu ekspresi wajah seperti apa yang bisa menarik perhatian pria dan wanita terhadap lawan jenisnya. Lebih dari 1.000 orang ikut andil dalam penelitian ini.\r\n\r\nSetiap orang ditunjukkan foto yang menampilkan wajah dengan ekspresi berbeda.\r\n\r\nStudi menguak bahwa pria lebih tertarik pada wanita yang terlihat bahagia --perempuan yang tersenyum dan matanya berbinar. Sedangkan wanita menyukai pria dengan wajah yang menunjukkan rasa kebanggaan --gagah.\r\n\r\nPara ilmuwan menyimpulkan bahwa fakta tersebut sesuai dengan norma evolusi dan budaya.', 'upload/images/110.jpg', 11, 1),
(10, 'Bagi Pria Pemalu, Ini 5 Tips Memikat Wanita', '31 March 2020', 'Bagi sebagian pria pemalu, butuh usaha besar untuk dekat dengan wanita. Rasa deg-degan, cemas, dan malu sering muncul ketika mendekatinya. Namun, ada beberapa cara yang bisa dilakukan di tahap awal agar Anda terlihat menarik di matanya.\r\n\r\nKebaikan dan ketulusan hati jadi modal penting. Ada juga beberapa hal lain yang membuat wanita menoleh kepada Anda. Berdasarkan beberapa riset, berikut lima tips pria jadi lebih menarik di mata wanita seperti dilansir laman Independent, Sabtu (25/8/2018).\r\n\r\n1. Memakai baju merah\r\n\r\nSalah satu cara menarik perhatiannya dengan memakai baju warna merah. Berdasarkan studi di 2010, sebagian besar wanita di China, Inggris, Jerman dan Amerika Serikat tertarik pada pria berbaju merah daripada hijau.\r\n\r\n2. Tunjukkan kemampuan bermain olahraga ekstrem\r\n\r\nSebagian besar wanita menyukai pria yang gemar berolahraga. Namun, di antara sekian banyak olahraga, studi yang dilakukan peneliti dari University of Alaska menunjukkan pria yang menyukai olahraga ekstrem disukai banyak wanita. Namun, jika tidak suka olahraga ekstrem, ya tak perlu dipaksakan.', 'upload/images/111.jpg', 11, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
