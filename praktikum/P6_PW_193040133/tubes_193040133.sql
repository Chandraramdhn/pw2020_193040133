-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 10:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040133`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID` int(11) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `judulbuku` varchar(100) NOT NULL,
  `deskripsibuku` varchar(200) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID`, `foto`, `judulbuku`, `deskripsibuku`, `pengarang`, `penerbit`, `harga`) VALUES
(1, 'buku7.jpg', 'Dahsyatnya TAHAJUD, SUBUH, & DHUHA: Keberkahan Bangun Pagi', 'Dahsyatnya TAHAJUD, SUBUH, & DHUHA, Keberkahan Bangun Pagi: Cara Hidup Sehat, Berkah, dan Rezeki Berlimpah Dimulai Bangun Lebih Pagi. \'...dan (dirikanlah pula sholat) Subuh. Sesungguhnya sholat subuh ', 'Adnan Tarsyah', 'Shahih', 52275),
(2, 'buku8.jpg', 'Zikir dan Doa Penghuni Surga', 'Allah Swt. telah memberikan banyak amalan dahsyat, salah satunya adalah zikir. Dengan zikir segala hal yang sulit menjadi mudah, setiap yang berat menjadi ringan, dapat melapangkan rezeki, dan mendata', 'Supriyadi', 'Bentang Pustaka', 50500),
(3, 'buku9.jpg', 'Terapi Shalat Tahajud', 'Lebih dari 14 abad perintah dan keutamaan tahajud diajarkan dari generasi ke generasi. Al-Qur\'an maupun Al-Hadis menyatakan betapa dahsyatnya kekuatan shalat tahajud bagi pembentukan jiwa. Dengan berj', 'Moh. Sholeh, Dr.', 'Noura Books', 40000),
(4, 'buku5.jpg', 'Biodiesel: Bahan Baku, Proses, dan Teknologi', 'Buku biodiesel ini ditulis dengan harapan pembaca mempunyai wawasan yang komprehensif terkait biodiesel mulai dari bahan baku, proses, teknologi, sampai aspek kesehatan. Pada Bab 1 dipaparkan sejarah ', 'Arief Budiman, Ratna Dewi Kusumaningtyas, Yano Sur', 'UGM PRESS', 53300),
(5, 'buku4.jpg', 'Menjemput Jodoh Impian', 'Cinta adalah fitrah bagi manusia. Perasaan luar biasa indah yang Allah titipkan pada diri setiap insan. Bagaimana tidak? Sebab cinta semakin dimengerti semakin memberi bahagia. Cinta selalu mengajarka', 'Innes Durrotun Nafis', 'Guepedia', 60500),
(6, 'buku2.jpg', 'Di Bawah Atap Surgaku', 'Nilai arti sebuah keluarga tak akan pernah terlampaui oleh apapun di dunia ini. Kita kan mengerti arti dari sebuah keluarga saat kita kehilangan mereka', 'Alpha RZ, Q-Writing Consulting', 'Read The World', 40100),
(7, 'buku3.jpg', 'Setiap Rasa Ada Batasnya, Setiap Kita Ada Jodohnya', 'Konon, perempuan adalah makhluk perasa. Sedikit-sedikit dirasa. Sedikit-sedikit merasa. Jika bahagia, seolah tidak ada akhirnya. Kalau bersedih, pasti berlama-lama dengan rasa sakitnya. Benarkah demik', 'negeri akhirat', 'Qultum Media', 70500),
(8, 'buku10.jpg', 'Jangan Lelah Berdoa!', 'Pernah putus asa karena doa tak kunjung dikabulkan?. Di dalam hadits qudsi, Allah berjanji mengabulkan doa semua hamba-Nya. Tak satu pun doa yang Allah lewatkan. Tapi, mengapa harapan atau cita-cita y', 'Nasrudin Abd. Rohim', 'QultumMedia', 33000),
(9, 'buku6.jpg', 'Buat Apa Shalat?!', 'SHALAT, secara harfiah, berarti doa. Dalam konteks ini, yang dimaksud shalat adalah doa yang disampaikan dengan tata cara?syarat dan rukun?yang khas dalam bentuk bacaanbacaan dan gerakan-gerakan terte', 'Haidar Bagir', 'Mizan Pustaka', 20500),
(21, 'buku1.jpg', 'Di Kedalaman Samudera Al-Fatihah', 'Kita benar-benar akrab dengan al-Fatihah. Jika kita termasuk orang yang komitmen dengan shalat, maka surah yang satu ini adalah bacaan kita saat Allah memanggil kita untuk sujud. Tapi sudahkah kita ak', 'Syekh Sayyid Muhammad Syatha', 'Mirqat', 30500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
