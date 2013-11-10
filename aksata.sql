-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2013 at 08:14 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aksata`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE IF NOT EXISTS `circle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`id`, `name`, `description`) VALUES
(1, 'Geng Jomblo', 'isinya orang2 idealis jomblo yang ingin langsung nikah aja');

-- --------------------------------------------------------

--
-- Table structure for table `circle_membership`
--

CREATE TABLE IF NOT EXISTS `circle_membership` (
  `circle` int(11) NOT NULL,
  `member` char(8) NOT NULL,
  PRIMARY KEY (`circle`,`member`),
  KEY `fk_circle_membership_member1_idx` (`member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circle_membership`
--

INSERT INTO `circle_membership` (`circle`, `member`) VALUES
(1, '13510001');

-- --------------------------------------------------------

--
-- Table structure for table `external_activity`
--

CREATE TABLE IF NOT EXISTS `external_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `externalITB` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `external_activity`
--

INSERT INTO `external_activity` (`id`, `name`, `description`, `externalITB`) VALUES
(2, 'MUSLIF', 'keren', 0);

-- --------------------------------------------------------

--
-- Table structure for table `external_activity_membership`
--

CREATE TABLE IF NOT EXISTS `external_activity_membership` (
  `member` char(8) NOT NULL,
  `external_activity` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`member`,`external_activity`),
  KEY `external_activity` (`external_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external_activity_membership`
--

INSERT INTO `external_activity_membership` (`member`, `external_activity`, `role`, `start`, `end`, `description`) VALUES
('13510001', 2, 'Ketua', '2012-12-01', '2013-12-01', 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE IF NOT EXISTS `kepengurusan` (
  `year` year(4) NOT NULL COMMENT 'Tahun dimulainya sebuah kepengurusan.',
  `title` varchar(45) DEFAULT NULL COMMENT 'Judul kepengurusan DE, jika ada.',
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `NIM` char(8) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `status` enum('Biasa','Muda','Kehormatan') NOT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `batch` year(4) DEFAULT NULL COMMENT 'Angkatan efektif, berguna untuk anggota HMIF yang merupakan mutasi dari perguruan tinggi lain sehingga NIM tidak menggambarkan angkatan efektif anggota tersebut.',
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Anggota HMIF, yakni seluruh mahasiswa Sarjana Teknik Informa /* comment truncated */ /*tika dan Sarjana Sistem Teknologi dan Informasi, serta Anggota Kehormatan HMIF.*/';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`NIM`, `fullname`, `nickname`, `address`, `phone`, `status`, `picture`, `dob`, `batch`) VALUES
('13510001', 'Irfan Kamil', 'kamilersz', 'Jalan Rajawali Barat no 4', '02292195952', 'Muda', 'kamilersz.jpg', '1992-11-16', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `online_presence`
--

CREATE TABLE IF NOT EXISTS `online_presence` (
  `member` char(8) NOT NULL,
  `service` varchar(45) DEFAULT 'URL',
  `handle` varchar(45) NOT NULL COMMENT 'Handle (username, alamat) atau URL dari online presence yang bersangkutan.',
  PRIMARY KEY (`member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `finish` date DEFAULT NULL,
  `workgroup` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `workgroup` (`workgroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `start`, `finish`, `workgroup`) VALUES
(1, 'Aksata Development', '2013-09-01', '2013-11-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `program_membership`
--

CREATE TABLE IF NOT EXISTS `program_membership` (
  `member` char(8) NOT NULL,
  `program` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`member`,`program`),
  KEY `fk_program_membership_program1_idx` (`program`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_membership`
--

INSERT INTO `program_membership` (`member`, `program`, `role`, `score`) VALUES
('13510001', 1, 'Developer', 100);

-- --------------------------------------------------------

--
-- Table structure for table `workgroup`
--

CREATE TABLE IF NOT EXISTS `workgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL COMMENT 'Nama divisi/departemen/komunitas. Termasuk kata-kata ''Divisi''/''Departemen''/''Komunitas''. Jika null, maka mewadahi seluruh staf yang melapor langsung ke kepala lembaga.',
  `kepengurusan` year(4) NOT NULL,
  `parent` int(11) DEFAULT NULL COMMENT 'ID dari kelompok kerja yang membawahi kelompok kerja ini. Jika null atau 0, berarti merupakan lembaga teratas HMIF (berarti kelompok kerja ini merepresentasikan DE/DPP/Senator).',
  `lembaga` enum('DE','DPP','Kesenatoran') DEFAULT NULL,
  `leader` int(11) DEFAULT NULL,
  `leaderTitle` varchar(45) DEFAULT NULL,
  `isPseudo` tinyint(1) DEFAULT NULL COMMENT 'True jika kelompok kerja tersebut tidak memiliki anggota (misalnya, Wakil Ketua Himpunan, jika ada)',
  PRIMARY KEY (`id`),
  KEY `kepengurusan` (`kepengurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Kelompok kerja di dalam HMIF: Divisi, departemen, komunitas, /* comment truncated */ /* bidang, kesekjenan, baik dalam konteks DE, DPP, ataupun Kesenatoran.*/' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workgroup`
--

INSERT INTO `workgroup` (`id`, `name`, `kepengurusan`, `parent`, `lembaga`, `leader`, `leaderTitle`, `isPseudo`) VALUES
(1, 'MSDA', 2013, 0, '', 13510000, 'Kadiv', 0);

-- --------------------------------------------------------

--
-- Table structure for table `workgroup_membership`
--

CREATE TABLE IF NOT EXISTS `workgroup_membership` (
  `member` char(8) NOT NULL,
  `workgroup` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`member`,`workgroup`),
  KEY `fk_workgroup_membership_workgroup1_idx` (`workgroup`),
  KEY `member` (`member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workgroup_membership`
--

INSERT INTO `workgroup_membership` (`member`, `workgroup`, `title`) VALUES
('13510001', 1, 'Anggota');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `circle_membership`
--
ALTER TABLE `circle_membership`
  ADD CONSTRAINT `fk_circle_membership_circle1` FOREIGN KEY (`circle`) REFERENCES `circle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_circle_membership_member1` FOREIGN KEY (`member`) REFERENCES `member` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `external_activity_membership`
--
ALTER TABLE `external_activity_membership`
  ADD CONSTRAINT `external_activity_membership_ibfk_1` FOREIGN KEY (`external_activity`) REFERENCES `external_activity` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_external_activity_membership_member1` FOREIGN KEY (`member`) REFERENCES `member` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD CONSTRAINT `fk_kepengurusan_workgroup1` FOREIGN KEY (`year`) REFERENCES `workgroup` (`kepengurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `online_presence`
--
ALTER TABLE `online_presence`
  ADD CONSTRAINT `fk_online_presence_member1` FOREIGN KEY (`member`) REFERENCES `member` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`workgroup`) REFERENCES `workgroup` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `program_membership`
--
ALTER TABLE `program_membership`
  ADD CONSTRAINT `fk_program_membership_member1` FOREIGN KEY (`member`) REFERENCES `member` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_program_membership_program1` FOREIGN KEY (`program`) REFERENCES `program` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `workgroup_membership`
--
ALTER TABLE `workgroup_membership`
  ADD CONSTRAINT `workgroup_membership_ibfk_1` FOREIGN KEY (`member`) REFERENCES `member` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_workgroup_membership_workgroup1` FOREIGN KEY (`workgroup`) REFERENCES `workgroup` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
