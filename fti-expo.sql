-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2023 at 07:07 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fti-expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$yJ4AcMht0c6JWsydpKiH0u2tAg5ZJsnJLWMzNUkWE/a5iC4XW8hy.');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `instansi` varchar(80) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(50) NOT NULL,
  `motivasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `instansi`, `hp`, `alamat`, `kelamin`, `jenis_kegiatan`, `motivasi`) VALUES
(1, 'Arianto', 'USN Kolaka', '082349095', 'Bombana', 'Laki-Laki', 'Android Programming', 'Oke');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `nama`, `jenis`, `gambar`) VALUES
(1, 'Universitas Sembilanbelas November Kolaka', 'Host', 'USN.png'),
(2, 'Universitas Muhammadiyah Kendari', 'Co-Host', 'UMK.png'),
(3, 'Universitas Haluoleo', 'Co-Host', 'UHO.png'),
(4, 'Universitas Mandala Waluya', 'Co-Host', 'UMW.png'),
(5, 'Universitas Cokroaminoto Palopo', 'Co-Host', 'UNCP.png'),
(7, 'Universitas Sumatera Utara', 'Co-Host', 'USU.png'),
(8, 'Akademi Manufaktur Bantaeng', 'Co-Host', 'AK.png'),
(9, 'Universitas Sulawesi Barat', 'Co-Host', 'UNSULBAR.png'),
(10, 'Universitas Islam Negeri Alauddin', 'Co-Host', 'UIN.png'),
(11, 'Institut Sains dan Teknologi AKPRIND Yogyakarta', 'Co-Host', 'IST.png');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `register` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `submit` varchar(255) NOT NULL,
  `tgl_kumpul` date NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_revisi` date NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `tentang`, `register`, `template`, `submit`, `tgl_kumpul`, `tgl_pengumuman`, `tgl_revisi`, `tgl_kegiatan`, `gambar`) VALUES
(1, 'IT Expo merupakan platform Seminar Nasional yang menampilkan artikel asli dari berbagai peneliti, akademisi, praktisi, dan pengusaha bisnis untuk menciptakan peluang penelitian yang berorientasi global di era pasca pandemi dengan memanfaatkan teknologi transformasi digital.Pagelaran SEMNAS Corisindo oleh ITB STIKOM Bali, CORIS dan INDOCEISS pada tanggal 11-12 Agustus 2022, bertempat di Bali, Indonesia, bertema “Seminar Nasional & Seminar Pengabdian Kepada Masyarakat”.', 'https://docs.google.com', 'https://docs.google.com', 'https://seminar.popakos.com/', '2023-07-11', '2023-07-27', '2023-07-26', '2023-07-19', '549659110_paper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patner`
--

CREATE TABLE `patner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patner`
--

INSERT INTO `patner` (`id`, `nama`, `gambar`) VALUES
(1, 'Tribun-Timur.com', '134320890_tt.jpg'),
(2, 'Radio Swara Kolaka', '1681623036_sw.jpg'),
(3, 'Zonasultra.id', '477463560_zona-sultra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `deksripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `deksripsi`, `gambar`) VALUES
(1, 'Servis Laptop dan Maintenence', 'servis1.jpg'),
(2, 'Install Ulang Sistem Operasi', 'servis2.jpg'),
(3, 'Perbaikan CD-ROM', 'servis3.jpg'),
(4, 'Instalasi Aplikasi Pendukung', 'servis4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `nama`, `tugas`, `jabatan`, `gambar`) VALUES
(13, 'Dr. H. Nur Ihsan HL, M.Hum', 'Sambutan', 'Rektor Universitas Sembilanbelas November Kolaka', '245020951_rektor.png'),
(15, 'Ir. Muh. Nurtanzis Sutoyo, S.Kom., M.Cs., IPP  ', 'Sambutan', 'Dekan Fakultas Teknologi Informasi', '1995593441_Dekan.png'),
(18, 'Romi Satria Wahono, M.Eng., Ph.D', 'Keynote Speaker', '-', '2026811658_romi.png');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nama`, `gambar`) VALUES
(3, 'Taufik Computer', '1150789118_tc.jpg'),
(4, 'Popakos.com', '1036910595_pk.jpg'),
(5, 'Konawe Institute', '1513854038_ki.jpg'),
(6, 'SAS Apparel', '1379325238_sas.jpg'),
(7, 'Syahni Pabalu', '346007144_sp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `nama`, `gambar`) VALUES
(1, 'BEM FTI USN Kolaka', '1242140885_bem.jpg'),
(2, 'HMPS-SI', '2128279550_hmps.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `nama`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'Pemrograman Web For Pemula', 'Kelas ini merupakan langkah ke-satu Anda untuk menjadi Front-End Web Developer.', 'course-5.jpg', '2023-09-05'),
(2, 'Workshop Android Programming', 'Kelas ini merupakan langkah awal untuk menjadi Professional Android Developer.', 'course-6.jpg', '2023-09-05'),
(3, 'Workshop Graphic Design', 'Kelas ini merupakan kelas persiapan menjadi Professional Grafik Desainer.', 'course-2.jpg', '2023-09-05'),
(4, 'Workshop Video Editing', 'Kelas ini merupakan kelas expert untuk menjadi editor video.', 'course-4.jpg', '2023-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patner`
--
ALTER TABLE `patner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patner`
--
ALTER TABLE `patner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
