-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2016 at 05:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mudh_attaqwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `id_audit` char(13) NOT NULL,
  `id_peg` char(6) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_audit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id_audit`, `id_peg`, `tanggal`, `keterangan`) VALUES
('ADT0000000018', 'PGW003', '2015-07-26 20:49:06', 'Berhasil logout PGW003'),
('ADT0000000019', 'PGW001', '2015-07-26 20:49:17', 'Berhasil login PGW001'),
('ADT0000000020', 'PGW001', '2015-07-26 20:50:16', 'Berhasil logout PGW001'),
('ADT0000000021', 'PGW002', '2015-07-26 20:50:26', 'Berhasil login PGW002'),
('ADT0000000022', 'PGW002', '2015-07-26 21:37:00', 'Berhasil logout PGW002'),
('ADT0000000023', 'PGW003', '2015-07-26 21:37:13', 'Berhasil login PGW003'),
('ADT0000000024', 'PGW003', '2015-07-26 21:41:37', 'Berhasil logout PGW003'),
('ADT0000000025', 'PGW002', '2015-07-26 21:41:50', 'Berhasil login PGW002'),
('ADT0000000026', 'PGW002', '2015-07-27 06:02:37', 'Berhasil login PGW002'),
('ADT0000000027', 'PGW002', '2015-07-27 06:22:47', 'Berhasil logout PGW002'),
('ADT0000000028', 'PGW003', '2015-07-27 06:22:57', 'Berhasil login PGW003'),
('ADT0000000029', 'PGW003', '2015-07-27 06:23:31', 'Berhasil logout PGW003'),
('ADT0000000030', 'PGW002', '2015-07-27 06:23:43', 'Berhasil login PGW002'),
('ADT0000000031', 'PGW002', '2015-07-27 07:25:16', 'Berhasil logout PGW002'),
('ADT0000000032', 'PGW003', '2015-07-27 07:25:27', 'Berhasil login PGW003'),
('ADT0000000033', 'PGW003', '2015-07-27 07:34:39', 'Berhasil logout PGW003'),
('ADT0000000034', 'PGW001', '2015-07-27 07:34:56', 'Berhasil login PGW001'),
('ADT0000000035', 'PGW001', '2015-07-27 07:43:26', 'Berhasil logout PGW001'),
('ADT0000000036', 'PGW006', '2015-07-27 07:43:41', 'Berhasil login PGW006'),
('ADT0000000037', 'PGW006', '2015-07-27 08:00:07', 'Berhasil logout PGW006'),
('ADT0000000038', 'PGW002', '2015-07-27 08:00:24', 'Berhasil login PGW002'),
('ADT0000000039', 'PGW002', '2015-07-27 08:01:11', 'Berhasil logout PGW002'),
('ADT0000000040', 'PGW001', '2015-07-27 08:17:18', 'Berhasil login PGW001'),
('ADT0000000041', 'PGW001', '2015-07-27 09:25:38', 'Berhasil logout PGW001'),
('ADT0000000042', 'PGW006', '2015-07-27 09:25:50', 'Berhasil login PGW006'),
('ADT0000000043', 'PGW006', '2015-07-27 10:49:55', 'Berhasil logout PGW006'),
('ADT0000000044', 'PGW001', '2015-07-27 10:50:07', 'Berhasil login PGW001'),
('ADT0000000045', 'PGW001', '2015-07-27 10:52:10', 'Berhasil logout PGW001'),
('ADT0000000046', 'PGW002', '2015-07-27 10:52:20', 'Berhasil login PGW002'),
('ADT0000000047', 'PGW002', '2015-07-27 10:54:56', 'Berhasil logout PGW002'),
('ADT0000000048', 'PGW006', '2015-07-27 10:55:08', 'Berhasil login PGW006'),
('ADT0000000049', 'PGW003', '2015-07-27 11:22:16', 'Berhasil login PGW003'),
('ADT0000000050', 'PGW006', '2015-07-27 11:29:42', 'Berhasil logout PGW006'),
('ADT0000000051', 'PGW002', '2015-07-27 11:29:53', 'Berhasil login PGW002'),
('ADT0000000052', 'PGW002', '2015-07-27 11:30:24', 'Berhasil logout PGW002'),
('ADT0000000053', 'PGW003', '2015-07-27 11:30:36', 'Berhasil login PGW003'),
('ADT0000000054', 'PGW003', '2015-07-27 11:31:07', 'Berhasil logout PGW003'),
('ADT0000000055', 'PGW002', '2015-07-27 11:31:43', 'Berhasil login PGW002'),
('ADT0000000056', 'PGW002', '2015-07-27 11:32:36', 'Berhasil logout PGW002'),
('ADT0000000057', 'PGW006', '2015-07-27 11:32:51', 'Berhasil login PGW006'),
('ADT0000000058', 'PGW006', '2015-07-27 11:52:30', 'Berhasil logout PGW006'),
('ADT0000000059', 'PGW002', '2015-07-27 11:52:41', 'Berhasil login PGW002'),
('ADT0000000060', 'PGW002', '2015-07-27 11:55:04', 'Berhasil logout PGW002'),
('ADT0000000061', 'PGW006', '2015-07-27 11:55:13', 'Berhasil login PGW006'),
('ADT0000000062', 'PGW006', '2015-07-27 12:16:03', 'Berhasil logout PGW006'),
('ADT0000000063', 'PGW003', '2015-07-27 12:16:22', 'Berhasil login PGW003'),
('ADT0000000064', 'PGW003', '2015-07-27 12:17:47', 'Berhasil login PGW003'),
('ADT0000000065', 'PGW003', '2015-07-27 12:21:56', 'Berhasil logout PGW003'),
('ADT0000000066', 'PGW002', '2015-07-27 12:22:07', 'Berhasil login PGW002'),
('ADT0000000067', 'PGW002', '2015-07-27 12:52:52', 'Berhasil logout PGW002'),
('ADT0000000068', 'PGW006', '2015-07-27 12:53:06', 'Berhasil login PGW006'),
('ADT0000000069', 'PGW006', '2015-07-27 12:56:32', 'Berhasil logout PGW006'),
('ADT0000000070', 'PGW006', '2015-07-27 12:56:43', 'Berhasil login PGW006'),
('ADT0000000071', 'PGW006', '2015-07-27 13:32:29', 'Berhasil logout PGW006'),
('ADT0000000072', 'PGW003', '2015-07-27 13:32:43', 'Berhasil login PGW003'),
('ADT0000000073', 'PGW003', '2015-07-27 15:45:55', 'Berhasil logout PGW003'),
('ADT0000000074', 'PGW001', '2015-07-27 15:46:10', 'Berhasil login PGW001'),
('ADT0000000075', 'PGW001', '2015-07-27 16:12:54', 'Berhasil logout PGW001'),
('ADT0000000076', 'PGW001', '2015-07-27 16:37:32', 'Berhasil login PGW001'),
('ADT0000000077', 'PGW001', '2015-07-27 18:21:25', 'Berhasil logout PGW001'),
('ADT0000000078', 'PGW001', '2015-07-27 18:22:01', 'Berhasil login PGW001'),
('ADT0000000079', 'PGW001', '2015-07-27 18:22:38', 'Berhasil logout PGW001'),
('ADT0000000080', 'PGW003', '2015-07-27 18:22:59', 'Berhasil login PGW003'),
('ADT0000000081', 'PGW003', '2015-07-27 20:41:38', 'Berhasil login PGW003'),
('ADT0000000082', 'PGW003', '2015-07-28 01:36:13', 'Berhasil login PGW003'),
('ADT0000000083', 'PGW003', '2015-07-28 02:06:00', 'Berhasil logout PGW003'),
('ADT0000000084', 'PGW002', '2015-07-28 02:06:20', 'Berhasil login PGW002'),
('ADT0000000085', 'PGW002', '2015-07-28 02:09:11', 'Berhasil logout PGW002'),
('ADT0000000086', 'PGW005', '2015-07-28 02:09:41', 'Berhasil login PGW005'),
('ADT0000000087', 'PGW005', '2015-07-28 02:09:47', 'Berhasil logout PGW005'),
('ADT0000000088', 'PGW001', '2015-07-28 02:11:24', 'Berhasil login PGW001'),
('ADT0000000089', 'PGW001', '2015-07-28 02:11:36', 'Berhasil logout PGW001'),
('ADT0000000090', 'PGW004', '2015-07-28 02:11:51', 'Berhasil login PGW004'),
('ADT0000000091', 'PGW004', '2015-07-28 02:18:35', 'Berhasil logout PGW004'),
('ADT0000000092', 'PGW003', '2015-07-28 02:18:48', 'Berhasil login PGW003'),
('ADT0000000093', 'PGW003', '2015-07-28 03:32:11', 'Berhasil logout PGW003'),
('ADT0000000094', 'PGW002', '2015-07-28 03:32:24', 'Berhasil login PGW002'),
('ADT0000000095', 'PGW002', '2015-07-28 04:12:09', 'Berhasil logout PGW002'),
('ADT0000000096', 'PGW003', '2015-07-28 04:12:19', 'Berhasil login PGW003'),
('ADT0000000097', 'PGW003', '2015-07-28 04:13:53', 'Berhasil logout PGW003'),
('ADT0000000098', 'PGW002', '2015-07-28 04:14:02', 'Berhasil login PGW002'),
('ADT0000000099', 'PGW002', '2015-07-28 04:49:28', 'Berhasil logout PGW002'),
('ADT0000000100', 'PGW004', '2015-07-28 04:49:58', 'Berhasil login PGW004'),
('ADT0000000101', 'PGW004', '2015-07-28 08:07:29', 'Berhasil logout PGW004'),
('ADT0000000102', 'PGW003', '2015-07-28 08:07:47', 'Berhasil login PGW003'),
('ADT0000000103', 'PGW003', '2015-07-28 08:15:55', 'Berhasil logout PGW003'),
('ADT0000000104', 'PGW001', '2015-07-28 08:16:08', 'Berhasil login PGW001'),
('ADT0000000105', 'PGW001', '2015-07-28 08:26:13', 'Berhasil logout PGW001'),
('ADT0000000106', 'PGW004', '2015-07-28 08:26:58', 'Berhasil login PGW004'),
('ADT0000000107', 'PGW001', '2015-07-28 14:07:18', 'Berhasil login PGW001'),
('ADT0000000108', 'PGW001', '2015-07-28 14:08:11', 'Berhasil logout PGW001'),
('ADT0000000109', 'PGW003', '2015-07-28 14:08:32', 'Berhasil login PGW003'),
('ADT0000000110', 'PGW003', '2015-07-28 18:04:26', 'Berhasil logout PGW003'),
('ADT0000000111', 'PGW002', '2015-07-28 18:04:39', 'Berhasil login PGW002'),
('ADT0000000112', 'PGW003', '2015-07-29 15:14:34', 'Berhasil login PGW003'),
('ADT0000000113', 'PGW003', '2015-07-29 19:31:46', 'Berhasil logout PGW003'),
('ADT0000000114', 'PGW002', '2015-07-29 19:31:55', 'Berhasil login PGW002'),
('ADT0000000115', 'PGW002', '2015-07-29 19:32:21', 'Berhasil logout PGW002'),
('ADT0000000116', 'PGW003', '2015-07-29 19:32:35', 'Berhasil login PGW003'),
('ADT0000000117', 'PGW003', '2015-07-30 04:06:39', 'Berhasil login PGW003'),
('ADT0000000118', 'PGW003', '2015-07-30 05:03:18', 'Berhasil logout PGW003'),
('ADT0000000119', 'PGW002', '2015-07-30 05:03:28', 'Berhasil login PGW002'),
('ADT0000000120', 'PGW002', '2015-07-30 11:35:50', 'Berhasil login PGW002'),
('ADT0000000121', 'PGW002', '2015-07-30 12:50:06', 'Berhasil logout PGW002'),
('ADT0000000122', 'PGW003', '2015-07-30 12:50:20', 'Berhasil login PGW003'),
('ADT0000000123', 'PGW003', '2015-07-30 12:51:21', 'Berhasil logout PGW003'),
('ADT0000000124', 'PGW002', '2015-07-30 12:51:33', 'Berhasil login PGW002'),
('ADT0000000125', 'PGW002', '2015-07-30 12:54:22', 'Berhasil logout PGW002'),
('ADT0000000126', 'PGW003', '2015-07-30 12:54:34', 'Berhasil login PGW003'),
('ADT0000000127', 'PGW003', '2015-07-30 12:56:33', 'Berhasil logout PGW003'),
('ADT0000000128', 'PGW002', '2015-07-30 12:56:44', 'Berhasil login PGW002'),
('ADT0000000129', 'PGW002', '2015-07-30 12:57:23', 'Berhasil logout PGW002'),
('ADT0000000130', 'PGW003', '2015-07-30 12:57:35', 'Berhasil login PGW003'),
('ADT0000000131', 'PGW003', '2015-07-30 12:57:46', 'Berhasil logout PGW003'),
('ADT0000000132', 'PGW001', '2015-07-30 12:58:13', 'Berhasil login PGW001'),
('ADT0000000133', 'PGW001', '2015-07-30 12:58:30', 'Berhasil logout PGW001'),
('ADT0000000134', 'PGW004', '2015-07-30 12:58:39', 'Berhasil login PGW004'),
('ADT0000000135', 'PGW004', '2015-07-30 13:36:56', 'Berhasil logout PGW004'),
('ADT0000000136', 'PGW003', '2015-07-30 13:37:07', 'Berhasil login PGW003'),
('ADT0000000137', 'PGW003', '2015-07-30 13:38:58', 'Berhasil logout PGW003'),
('ADT0000000138', 'PGW002', '2015-07-30 13:39:08', 'Berhasil login PGW002'),
('ADT0000000139', 'PGW002', '2015-07-30 13:44:32', 'Berhasil logout PGW002'),
('ADT0000000140', 'PGW003', '2015-07-30 13:44:44', 'Berhasil login PGW003'),
('ADT0000000141', 'PGW003', '2015-07-30 13:45:35', 'Berhasil logout PGW003'),
('ADT0000000142', 'PGW002', '2015-07-30 13:45:52', 'Berhasil login PGW002'),
('ADT0000000143', 'PGW002', '2015-07-30 13:53:34', 'Berhasil logout PGW002'),
('ADT0000000144', 'PGW004', '2015-07-30 13:53:53', 'Berhasil login PGW004'),
('ADT0000000145', 'PGW004', '2015-07-30 14:25:34', 'Berhasil logout PGW004'),
('ADT0000000146', 'PGW004', '2015-07-30 14:26:17', 'Berhasil login PGW004'),
('ADT0000000147', 'PGW004', '2015-07-30 17:50:02', 'Berhasil logout PGW004'),
('ADT0000000148', 'PGW003', '2015-07-30 17:50:18', 'Berhasil login PGW003'),
('ADT0000000149', 'PGW003', '2015-07-30 17:53:13', 'Berhasil logout PGW003'),
('ADT0000000150', 'PGW002', '2015-07-30 17:53:23', 'Berhasil login PGW002'),
('ADT0000000151', 'PGW002', '2015-07-30 17:54:19', 'Berhasil logout PGW002'),
('ADT0000000152', 'PGW004', '2015-07-30 17:54:38', 'Berhasil login PGW004'),
('ADT0000000153', 'PGW003', '2015-07-31 02:21:57', 'Berhasil login PGW003'),
('ADT0000000154', 'PGW003', '2015-07-31 02:22:50', 'Berhasil logout PGW003'),
('ADT0000000155', 'PGW003', '2015-07-31 03:11:28', 'Berhasil login PGW003'),
('ADT0000000156', 'PGW003', '2015-07-31 03:15:03', 'Berhasil logout PGW003'),
('ADT0000000157', 'PGW002', '2015-07-31 03:15:12', 'Berhasil login PGW002'),
('ADT0000000158', 'PGW002', '2015-07-31 03:24:52', 'Berhasil logout PGW002'),
('ADT0000000159', 'PGW004', '2015-07-31 03:25:06', 'Berhasil login PGW004'),
('ADT0000000160', 'PGW004', '2015-07-31 03:28:14', 'Berhasil logout PGW004'),
('ADT0000000161', 'PGW004', '2015-07-31 03:28:30', 'Berhasil login PGW004'),
('ADT0000000162', 'PGW004', '2015-07-31 04:49:38', 'Berhasil logout PGW004'),
('ADT0000000163', 'PGW002', '2015-07-31 06:09:20', 'Berhasil login PGW002'),
('ADT0000000164', 'PGW002', '2015-07-31 06:44:51', 'Berhasil logout PGW002'),
('ADT0000000165', 'PGW004', '2015-07-31 06:45:11', 'Berhasil login PGW004'),
('ADT0000000166', 'PGW004', '2015-07-31 09:13:10', 'Berhasil logout PGW004'),
('ADT0000000167', 'PGW003', '2015-07-31 09:28:02', 'Berhasil login PGW003'),
('ADT0000000168', 'PGW003', '2015-07-31 09:28:51', 'Berhasil logout PGW003'),
('ADT0000000169', 'PGW002', '2015-07-31 09:29:09', 'Berhasil login PGW002'),
('ADT0000000170', 'PGW002', '2015-07-31 09:31:47', 'Berhasil logout PGW002'),
('ADT0000000171', 'PGW004', '2015-07-31 09:31:57', 'Berhasil login PGW004'),
('ADT0000000172', 'PGW004', '2015-07-31 09:41:16', 'Berhasil logout PGW004'),
('ADT0000000173', 'PGW003', '2015-07-31 10:40:04', 'Berhasil login PGW003'),
('ADT0000000174', 'PGW003', '2015-07-31 10:43:22', 'Berhasil logout PGW003'),
('ADT0000000175', 'PGW002', '2015-07-31 10:43:34', 'Berhasil login PGW002'),
('ADT0000000176', 'PGW002', '2015-07-31 10:43:55', 'Berhasil logout PGW002'),
('ADT0000000177', 'PGW004', '2015-07-31 10:44:09', 'Berhasil login PGW004'),
('ADT0000000178', 'PGW004', '2015-07-31 10:49:06', 'Berhasil logout PGW004'),
('ADT0000000179', 'PGW003', '2015-07-31 10:49:16', 'Berhasil login PGW003'),
('ADT0000000180', 'PGW003', '2015-07-31 10:51:47', 'Berhasil logout PGW003'),
('ADT0000000181', 'PGW002', '2015-07-31 10:51:58', 'Berhasil login PGW002'),
('ADT0000000182', 'PGW002', '2015-07-31 10:52:59', 'Berhasil logout PGW002'),
('ADT0000000183', 'PGW004', '2015-08-28 10:53:59', 'Berhasil login PGW004'),
('ADT0000000184', 'PGW004', '2015-08-28 10:54:26', 'Berhasil login PGW004'),
('ADT0000000185', 'PGW004', '2015-09-28 10:59:24', 'Berhasil login PGW004'),
('ADT0000000186', 'PGW004', '2015-10-21 11:01:50', 'Berhasil login PGW004'),
('ADT0000000187', 'PGW004', '2015-10-21 11:03:11', 'Berhasil logout PGW004'),
('ADT0000000188', 'PGW003', '2015-10-21 11:03:23', 'Berhasil login PGW003'),
('ADT0000000189', 'PGW003', '2015-10-21 11:05:27', 'Berhasil logout PGW003'),
('ADT0000000190', 'PGW002', '2015-10-21 11:05:38', 'Berhasil login PGW002'),
('ADT0000000191', 'PGW002', '2015-10-21 11:06:01', 'Berhasil logout PGW002'),
('ADT0000000192', 'PGW004', '2015-10-21 11:06:13', 'Berhasil login PGW004'),
('ADT0000000193', 'PGW003', '2015-11-19 11:15:03', 'Berhasil login PGW003'),
('ADT0000000194', 'PGW003', '2015-11-19 11:17:30', 'Berhasil logout PGW003'),
('ADT0000000195', 'PGW002', '2015-11-19 11:17:46', 'Berhasil login PGW002'),
('ADT0000000196', 'PGW002', '2015-11-19 11:18:06', 'Berhasil logout PGW002'),
('ADT0000000197', 'PGW004', '2015-11-19 11:18:30', 'Berhasil login PGW004'),
('ADT0000000198', 'PGW003', '2015-12-11 11:21:10', 'Berhasil login PGW003'),
('ADT0000000199', 'PGW003', '2015-12-11 11:23:04', 'Berhasil logout PGW003'),
('ADT0000000200', 'PGW002', '2015-12-11 11:23:20', 'Berhasil login PGW002'),
('ADT0000000201', 'PGW002', '2015-12-11 11:23:48', 'Berhasil logout PGW002'),
('ADT0000000202', 'PGW003', '2016-01-07 11:24:11', 'Berhasil login PGW003'),
('ADT0000000203', 'PGW003', '2016-01-07 11:25:10', 'Berhasil login PGW003'),
('ADT0000000204', 'PGW003', '2016-01-07 11:26:06', 'Berhasil logout PGW003'),
('ADT0000000205', 'PGW002', '2016-01-07 11:26:18', 'Berhasil login PGW002'),
('ADT0000000206', 'PGW002', '2016-01-07 11:26:48', 'Berhasil logout PGW002'),
('ADT0000000207', 'PGW004', '2016-01-07 11:27:01', 'Berhasil login PGW004'),
('ADT0000000208', 'PGW003', '2016-02-07 00:45:58', 'Berhasil login PGW003'),
('ADT0000000209', 'PGW003', '2016-02-07 00:54:23', 'Berhasil logout PGW003'),
('ADT0000000210', 'PGW002', '2016-02-07 00:54:38', 'Berhasil login PGW002'),
('ADT0000000211', 'PGW002', '2016-02-07 00:55:37', 'Berhasil logout PGW002'),
('ADT0000000212', 'PGW004', '2016-02-07 00:55:47', 'Berhasil login PGW004'),
('ADT0000000213', 'PGW004', '2016-02-07 01:10:18', 'Berhasil logout PGW004'),
('ADT0000000214', 'PGW003', '2016-02-07 01:12:27', 'Berhasil login PGW003'),
('ADT0000000215', 'PGW003', '2016-02-07 01:25:39', 'Berhasil logout PGW003'),
('ADT0000000216', 'PGW001', '2016-02-07 04:52:08', 'Berhasil login PGW001'),
('ADT0000000217', 'PGW001', '2016-02-07 04:53:44', 'Berhasil logout PGW001'),
('ADT0000000218', 'PGW010', '2016-02-07 04:53:54', 'Berhasil login PGW010'),
('ADT0000000219', 'PGW010', '2016-02-07 04:54:20', 'Berhasil logout PGW010'),
('ADT0000000220', 'PGW010', '2016-02-07 05:07:19', 'Berhasil login PGW010'),
('ADT0000000221', 'PGW010', '2016-02-07 05:07:29', 'Berhasil logout PGW010'),
('ADT0000000222', 'PGW010', '2016-02-07 05:07:40', 'Berhasil login PGW010'),
('ADT0000000223', 'PGW010', '2016-02-07 05:08:19', 'Berhasil logout PGW010'),
('ADT0000000224', 'PGW001', '2016-02-07 05:08:32', 'Berhasil login PGW001'),
('ADT0000000225', 'PGW001', '2016-02-07 05:09:46', 'Berhasil logout PGW001'),
('ADT0000000226', 'PGW003', '2016-02-07 05:09:57', 'Berhasil login PGW003'),
('ADT0000000227', 'PGW003', '2016-02-07 05:13:35', 'Berhasil logout PGW003'),
('ADT0000000228', 'PGW002', '2016-02-07 05:13:51', 'Berhasil login PGW002'),
('ADT0000000229', 'PGW002', '2016-02-07 05:14:36', 'Berhasil logout PGW002'),
('ADT0000000230', 'PGW010', '2016-02-07 05:15:07', 'Berhasil login PGW010'),
('ADT0000000231', 'PGW010', '2016-02-07 05:21:13', 'Berhasil logout PGW010'),
('ADT0000000232', 'PGW010', '2016-02-07 05:21:36', 'Berhasil login PGW010'),
('ADT0000000233', 'PGW010', '2016-02-07 05:23:53', 'Berhasil logout PGW010'),
('ADT001', 'PGW001', '2015-07-26 10:23:27', 'Berhasil login PGW001'),
('ADT002', 'PGW001', '2015-07-26 10:58:32', 'Berhasil logout PGW001'),
('ADT003', 'PGW002', '2015-07-26 12:15:58', 'Berhasil login PGW002'),
('ADT004', 'PGW002', '2015-07-26 16:52:41', 'Berhasil login PGW002'),
('ADT005', 'PGW002', '2015-07-26 16:53:33', 'Berhasil login PGW002'),
('ADT006', 'PGW002', '2015-07-26 16:53:53', 'Berhasil logout PGW002'),
('ADT007', 'PGW002', '2015-07-26 16:54:04', 'Berhasil login PGW002'),
('ADT008', 'PGW002', '2015-07-26 17:53:42', 'Berhasil login PGW002'),
('ADT009', 'PGW002', '2015-07-26 18:38:21', 'Berhasil logout PGW002'),
('ADT010', 'PGW002', '2015-07-26 18:39:03', 'Berhasil logout PGW002'),
('ADT011', 'PGW001', '2015-07-26 18:39:39', 'Berhasil login PGW001'),
('ADT012', 'PGW001', '2015-07-26 18:41:58', 'Berhasil logout PGW001'),
('ADT013', 'PGW003', '2015-07-26 18:42:08', 'Berhasil login PGW003'),
('ADT014', 'PGW003', '2015-07-26 19:30:27', 'Berhasil logout PGW003'),
('ADT015', 'PGW001', '2015-07-26 19:30:36', 'Berhasil login PGW001'),
('ADT016', 'PGW001', '2015-07-26 19:31:14', 'Berhasil logout PGW001'),
('ADT017', 'PGW003', '2015-07-26 19:31:56', 'Berhasil login PGW003');

--
-- Triggers `audit`
--
DROP TRIGGER IF EXISTS `id_otomatis_audit`;
DELIMITER //
CREATE TRIGGER `id_otomatis_audit` BEFORE INSERT ON `audit`
 FOR EACH ROW BEGIN
  INSERT into auto_audit values (NULL);
  SET NEW.id_audit=CONCAT('ADT', LPAD(LAST_INSERT_ID(),10,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_akad`
--

CREATE TABLE IF NOT EXISTS `auto_akad` (
  `id_akad` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_akad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `auto_akad`
--

INSERT INTO `auto_akad` (`id_akad`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31);

-- --------------------------------------------------------

--
-- Table structure for table `auto_aministrasi`
--

CREATE TABLE IF NOT EXISTS `auto_aministrasi` (
  `id_administrasi` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_administrasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `auto_aministrasi`
--

INSERT INTO `auto_aministrasi` (`id_administrasi`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27);

-- --------------------------------------------------------

--
-- Table structure for table `auto_audit`
--

CREATE TABLE IF NOT EXISTS `auto_audit` (
  `id_audit` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_audit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234 ;

--
-- Dumping data for table `auto_audit`
--

INSERT INTO `auto_audit` (`id_audit`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111),
(112),
(113),
(114),
(115),
(116),
(117),
(118),
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136),
(137),
(138),
(139),
(140),
(141),
(142),
(143),
(144),
(145),
(146),
(147),
(148),
(149),
(150),
(151),
(152),
(153),
(154),
(155),
(156),
(157),
(158),
(159),
(160),
(161),
(162),
(163),
(164),
(165),
(166),
(167),
(168),
(169),
(170),
(171),
(172),
(173),
(174),
(175),
(176),
(177),
(178),
(179),
(180),
(181),
(182),
(183),
(184),
(185),
(186),
(187),
(188),
(189),
(190),
(191),
(192),
(193),
(194),
(195),
(196),
(197),
(198),
(199),
(200),
(201),
(202),
(203),
(204),
(205),
(206),
(207),
(208),
(209),
(210),
(211),
(212),
(213),
(214),
(215),
(216),
(217),
(218),
(219),
(220),
(221),
(222),
(223),
(224),
(225),
(226),
(227),
(228),
(229),
(230),
(231),
(232),
(233);

-- --------------------------------------------------------

--
-- Table structure for table `auto_jurnal`
--

CREATE TABLE IF NOT EXISTS `auto_jurnal` (
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `auto_jurnal`
--

INSERT INTO `auto_jurnal` (`id_jurnal`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24);

-- --------------------------------------------------------

--
-- Table structure for table `auto_pegawai`
--

CREATE TABLE IF NOT EXISTS `auto_pegawai` (
  `id_peg` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `auto_pegawai`
--

INSERT INTO `auto_pegawai` (`id_peg`) VALUES
(1),
(2),
(3),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `auto_pembiayaan`
--

CREATE TABLE IF NOT EXISTS `auto_pembiayaan` (
  `id_pembiayaan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pembiayaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_pemohon`
--

CREATE TABLE IF NOT EXISTS `auto_pemohon` (
  `id_pemohon` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pemohon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `auto_pemohon`
--

INSERT INTO `auto_pemohon` (`id_pemohon`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33);

-- --------------------------------------------------------

--
-- Table structure for table `auto_rek`
--

CREATE TABLE IF NOT EXISTS `auto_rek` (
  `no_rekening` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no_rekening`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `auto_rek`
--

INSERT INTO `auto_rek` (`no_rekening`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22);

-- --------------------------------------------------------

--
-- Table structure for table `auto_transaksi`
--

CREATE TABLE IF NOT EXISTS `auto_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `auto_transaksi`
--

INSERT INTO `auto_transaksi` (`id_transaksi`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `last_activity` datetime NOT NULL,
  `user_data` varchar(50) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_peg` char(6) NOT NULL,
  `date` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_identitas` enum('KTP','SIM','PASSPORT','KTM','Kartu Pelajar') NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Buddha','Hindu','Konguchu') NOT NULL,
  `level` enum('CS','Teller','Manajer','Admin') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `date`, `nama`, `username`, `password`, `jenis_identitas`, `no_identitas`, `jenis_kelamin`, `agama`, `level`, `status`, `alamat_lengkap`, `tempat_lahir`, `tgl_lahir`, `no_telp`) VALUES
('PGW001', '0000-00-00', 'Admin', 'Admin', '7dd66913004434da295aefa937f55c8e', 'KTP', '1234467890987654', 'P', 'Islam', 'Admin', 'Aktif', 'jalan-jalan boleh juga nih', 'Bukittinggi', '17/07/1995', '08561415614'),
('PGW002', '0000-00-00', 'Manajer', 'Manajer', '40dd0c01a0b7b43826dd1097c2513c8b', 'KTP', '1312020096', 'P', 'Islam', 'Manajer', 'Aktif', 'Jl. Karya Utama No. 18, Kebayoran Baru, Jaksel', 'Bukittinggi', '1995-12-07', '08561415614'),
('PGW003', '2015-07-25', 'Wahda Annisa', 'Annisa', 'ae24367566a2bd78d4a71dbbdce94ed9', 'KTP', '12345656', 'P', 'Islam', 'CS', 'Aktif', 'asdasd', 'Jakarta', '1993-12-07', '1234567'),
('PGW004', '2015-07-25', 'Adnan Susanto', 'Adnan', 'ba52055643a8cb6137bdce3e3df837da', 'KTM', '130200984', 'L', 'Islam', 'Teller', 'Aktif', 'Pamulang', 'Yang penting lahir', '1995-03-29', '08561415614'),
('PGW005', '0000-00-00', 'Rafiq Naufal', 'Rafiq', 'e32915ad46bb47fd09f74576991bfa5f', 'KTP', '15657787544676', 'L', 'Islam', 'CS', 'Aktif', 'Pamulang', 'Jakarta', '1987-12-13', '08987766885'),
('PGW006', '0000-00-00', 'Dimas Susanto', 'Teller', '34b57a8bca068db6c6271970793d58b5', 'KTP', '1312020100', 'L', 'Islam', 'Teller', 'Tidak Aktif', 'Jl. Benda Selatan no. 19, Pamulang', 'Tangerang', '1993-07-02', '085627272727'),
('PGW007', '0000-00-00', 'Dwi Lestari Handayani', 'Dwilestari', '48caee3e3ec69b137d24d0c65092dbfa', 'KTP', '555265377489276', 'L', 'Islam', 'Teller', 'Aktif', 'Jl. Benda Barat, Pamulang, Tangerang Selatan', 'Bali', '1992-07-17', '0215667667'),
('PGW008', '0000-00-00', 'Yuliza Rahmi', 'yuliza', '8cc19a5a26220a536c981ff3c7ae8712', 'KTM', '1312020096', 'L', 'Islam', 'Manajer', 'Aktif', 'Jl. Karya Utama No. 18, Gandut, Keb. Baru, Jakarta Selatan', 'Bukitinggi', '1995-07-17', '08561415614'),
('PGW009', '0000-00-00', 'Ajeng', 'Ajeng', '734c25380648cca6755e9b607f22b774', 'KTM', '678687686', 'L', 'Islam', 'CS', 'Aktif', 'Pamulang', 'Pamulang', '1997-12-12', '098878787'),
('PGW010', '0000-00-00', 'Anisa Wahdah', 'Anisa', '9317f4e74bc381bed6cfb7d4b7bcd605', 'KTP', '123123', 'L', 'Islam', 'Teller', 'Aktif', 'sgss', 'fdsdf', '1990-03-03', '23423');

--
-- Triggers `pegawai`
--
DROP TRIGGER IF EXISTS `id_otomatis_peg`;
DELIMITER //
CREATE TRIGGER `id_otomatis_peg` BEFORE INSERT ON `pegawai`
 FOR EACH ROW BEGIN
  INSERT into auto_pegawai values (NULL);
  SET NEW.id_peg=CONCAT('PGW', LPAD(LAST_INSERT_ID(),3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrasi`
--

CREATE TABLE IF NOT EXISTS `tb_administrasi` (
  `id_administrasi` varchar(8) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `biaya_pokok` int(11) NOT NULL,
  `biaya_sertifikat` int(11) NOT NULL,
  `status_adm` enum('Belum Bayar','Sudah Bayar') NOT NULL DEFAULT 'Belum Bayar',
  PRIMARY KEY (`id_administrasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_administrasi`
--

INSERT INTO `tb_administrasi` (`id_administrasi`, `no_rekening`, `nama_anggota`, `date`, `biaya_pokok`, `biaya_sertifikat`, `status_adm`) VALUES
('ADM015', 53530003, 'Ottoh Hidayatullah', '2015-07-30 08:38:53', 100000, 900000, 'Sudah Bayar'),
('ADM016', 53530002, 'Hanum Aulia Cahayati', '2015-07-30 08:45:30', 100000, 900000, 'Sudah Bayar'),
('ADM017', 53530010, 'Nabila Safira', '2015-07-30 12:53:06', 100000, 900000, 'Sudah Bayar'),
('ADM018', 53530004, 'Anisa Fitria Nasution', '2015-07-31 04:28:46', 100000, 900000, 'Sudah Bayar'),
('ADM019', 53530017, 'RIka', '2015-07-31 05:43:15', 100000, 900000, 'Sudah Bayar'),
('ADM020', 53530018, 'Riza', '2015-07-31 05:51:36', 100000, 900000, 'Sudah Bayar'),
('ADM021', 53530019, 'Taufik', '2015-10-21 06:05:19', 100000, 900000, 'Sudah Bayar'),
('ADM025', 53530021, 'Naufal', '2016-02-06 18:51:25', 100000, 900000, 'Sudah Bayar'),
('ADM026', 53530013, 'Shandy Andika', '2016-02-07 00:54:05', 0, 0, 'Belum Bayar'),
('ADM027', 53530022, 'Wicak', '2016-02-06 23:13:25', 100000, 900000, 'Sudah Bayar');

--
-- Triggers `tb_administrasi`
--
DROP TRIGGER IF EXISTS `id_auto_administrasi`;
DELIMITER //
CREATE TRIGGER `id_auto_administrasi` BEFORE INSERT ON `tb_administrasi`
 FOR EACH ROW BEGIN
  INSERT into auto_aministrasi values (NULL);
  SET NEW.id_administrasi=CONCAT('ADM', LPAD(LAST_INSERT_ID(),3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akad`
--

CREATE TABLE IF NOT EXISTS `tb_akad` (
  `id_akad` varchar(8) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_akad` enum('Belum Disetujui','Disetujui','Tidak Disetujui') NOT NULL DEFAULT 'Belum Disetujui',
  `jangka_waktu` int(11) NOT NULL,
  `basil_persen` float NOT NULL DEFAULT '2',
  `jumlah_pinjaman` int(11) NOT NULL,
  `penggunaan_pinjaman` varchar(100) NOT NULL,
  PRIMARY KEY (`id_akad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akad`
--

INSERT INTO `tb_akad` (`id_akad`, `no_rekening`, `nama_anggota`, `date`, `status_akad`, `jangka_waktu`, `basil_persen`, `jumlah_pinjaman`, `penggunaan_pinjaman`) VALUES
('AKD019', '53530003', 'Ottoh Hidayatullah', '2015-07-30 13:38:33', 'Disetujui', 10, 2, 6000000, 'Usaha Warkop'),
('AKD020', '53530002', 'Hanum Aulia Cahayati', '2015-07-30 13:45:15', 'Disetujui', 10, 2, 10000000, 'Jualan Makaroni'),
('AKD021', '53530010', 'Nabila Safira', '2015-07-30 17:52:09', 'Disetujui', 10, 2, 5000000, 'Olshop Sepatu'),
('AKD023', '53530017', 'RIka', '2015-07-31 10:42:47', 'Disetujui', 10, 2, 10000000, 'Usaha Katering '),
('AKD024', '53530018', 'Riza', '2015-07-31 10:51:20', 'Disetujui', 10, 3, 13500000, 'Usaha Katering'),
('AKD026', '53530019', 'Taufik', '2015-11-19 11:15:37', 'Disetujui', 10, 5, 17500000, 'Usaha Karaoke'),
('AKD029', '53530021', 'Naufal', '2016-02-07 00:49:35', 'Disetujui', 10, 2, 10000000, 'Jualan'),
('AKD030', '53530013', 'Shandy Andika', '2016-02-07 00:54:05', 'Belum Disetujui', 10, 2.5, 5000000, 'Jualan Baju'),
('AKD031', '53530022', 'Wicak', '2016-02-07 05:12:58', 'Disetujui', 10, 2, 10000000, 'Jualan');

--
-- Triggers `tb_akad`
--
DROP TRIGGER IF EXISTS `id_auto_akad`;
DELIMITER //
CREATE TRIGGER `id_auto_akad` BEFORE INSERT ON `tb_akad`
 FOR EACH ROW BEGIN
  INSERT into auto_akad values (NULL);
  SET NEW.id_akad=CONCAT('AKD', LPAD(LAST_INSERT_ID(),3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurnal`
--

CREATE TABLE IF NOT EXISTS `tb_jurnal` (
  `id_jurnal` varchar(10) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kode_akun` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `id_transaksi`, `tanggal`, `kode_akun`, `keterangan`, `debit`, `kredit`) VALUES
('JRN001', 'TRN017', '2015-07-31 08:55:35', '1-3000', 'invetsasi mudharabah', '10000000', ''),
('JRN002', 'TRN017', '2015-07-31 08:56:32', '1-1000', 'kas', '', '10000000'),
('JRN003', 'TRN017', '2015-07-31 08:58:15', '1-1000', 'kas', '1200000', ''),
('JRN004', 'TRN017', '2015-07-31 08:58:15', '2-1000', 'piutang', '', '1200000'),
('JRN005', 'TRN017', '2015-07-31 08:59:10', '1-1000', 'kas', '1180000', ''),
('JRN006', 'TRN017', '2015-07-31 08:59:10', '2-1000', 'piutang', '', '1180000'),
('JRN007', 'TRN017', '2015-07-31 08:59:55', '1-1000', 'kas', '1160000', ''),
('JRN008', 'TRN017', '2015-07-31 08:59:55', '2-1000', 'piutang', '', '1160000'),
('JRN009', 'TRN017', '2015-07-31 09:00:43', '1-1000', 'kas', '1140000', ''),
('JRN010', 'TRN017', '2015-07-31 09:00:43', '2-1000', 'piutang', '', '1140000'),
('JRN011', 'TRN017', '2015-07-31 09:01:16', '1-1000', 'kas', '1120000', ''),
('JRN012', 'TRN017', '2015-07-31 09:01:16', '2-1000', 'piutang', '', '1120000'),
('JRN013', 'TRN017', '2015-07-31 09:01:51', '1-1000', 'kas', '1100000', ''),
('JRN014', 'TRN017', '2015-07-31 09:01:51', '2-1000', 'piutang', '', '1100000'),
('JRN015', 'TRN017', '2015-07-31 09:02:28', '1-1000', 'kas', '1000000', ''),
('JRN016', 'TRN017', '2015-07-31 09:02:28', '2-1000', 'piutang', '', '1000000'),
('JRN017', 'TRN017', '2015-07-31 09:03:09', '1-1000', 'kas', '1080000', ''),
('JRN018', 'TRN017', '2015-07-31 09:03:09', '2-1000', 'piutang', '', '1080000'),
('JRN019', 'TRN017', '2015-07-31 09:03:52', '1-1000', 'kas', '1060000', ''),
('JRN020', 'TRN017', '2015-07-31 09:03:52', '2-1000', 'piutang', '', '1060000'),
('JRN021', 'TRN017', '2015-07-31 09:04:26', '1-1000', 'kas', '1040000', ''),
('JRN022', 'TRN017', '2015-07-31 09:04:26', '2-1000', 'piutang', '', '1040000'),
('JRN023', 'TRN017', '2015-07-31 09:05:02', '1-1000', 'kas', '1020000', ''),
('JRN024', 'TRN017', '2015-07-31 09:05:02', '2-1000', 'piutang', '', '1020000');

--
-- Triggers `tb_jurnal`
--
DROP TRIGGER IF EXISTS `id_auto_jurnal`;
DELIMITER //
CREATE TRIGGER `id_auto_jurnal` BEFORE INSERT ON `tb_jurnal`
 FOR EACH ROW BEGIN
  INSERT into auto_jurnal values (NULL);
  SET NEW.id_jurnal=CONCAT('JRN', LPAD(LAST_INSERT_ID(),3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE IF NOT EXISTS `tb_rekening` (
  `no_rekening` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL,
  `status_rek` enum('Aktif','Tidak Aktif') NOT NULL,
  `date` date NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `alamat1` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `pekerjaan_terakhir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `status_rumah` enum('Rumah Sendiri','Rumah Orangtua','Kontrak') NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `hubungan_wali` varchar(50) NOT NULL,
  `no_telp_wali` varchar(15) NOT NULL,
  PRIMARY KEY (`no_rekening`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`no_rekening`, `nama_anggota`, `saldo`, `status_rek`, `date`, `no_ktp`, `alamat1`, `no_telp`, `jenkel`, `pekerjaan_terakhir`, `tgl_lahir`, `tempat_lahir`, `status_rumah`, `nama_wali`, `alamat_wali`, `hubungan_wali`, `no_telp_wali`) VALUES
('53530001', 'Yuliza Rahmi', 10000000, 'Aktif', '0000-00-00', '878347973247', 'Jl. Karya Utama No. 18, Kebayoran Baru, Jaksel', '08561416714', 'P', 'Wirausaha', '2015-07-29', 'Bukittinggi', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530002', 'Hanum Aulia Cahayati', 50000, 'Aktif', '0000-00-00', '538647168433', 'JL. Bungur, Kebayoran Lama, Jaksel', '086766435676', 'P', 'PNS', '2015-07-29', 'Jakarta', 'Rumah Orangtua', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530003', 'Ottoh Hidayatullah', 60000, 'Aktif', '0000-00-00', '098274897897', 'JL. Kukusan Teknik, Depok', '087656431234', 'L', 'Wirausaha', '2015-07-29', 'Jakarta', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530004', 'Anisa Fitria Nasution', 50000, 'Aktif', '0000-00-00', '098274897673', 'Jl. Alpukat No.19, Pamulang', '087612345432', 'P', 'Wirausaha', '2015-07-29', 'Jakarta', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530005', 'Dini Ajeng Sekarsari', 50000, 'Aktif', '0000-00-00', '876248767864', 'Jl. Alpukat No.20, Pamulang', '087435657465', 'P', 'Wirausaha', '2015-07-29', 'Jakarta', 'Rumah Orangtua', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530006', 'Fiqi Fatima', 30000, 'Aktif', '0000-00-00', '987987897972', 'Gandaria Selatan, Jakarta', '081276382654', 'P', 'PNS', '2015-07-29', 'Jakarta', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530007', 'Maga Ayu Silvianingsih', 2000, 'Aktif', '0000-00-00', '082748979474', 'Tangerang Kota', '0219876778', 'P', 'PNS', '2015-07-29', 'Ciputat', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530008', 'Abia Dena Askuba', 100000, 'Aktif', '0000-00-00', '736485928764', 'Cinere, Ciputat', '02187699854', 'P', 'Pegawai Swasta', '2015-07-29', 'Ciputat', 'Rumah Orangtua', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530009', 'Dyah Tri Fitriani', 300000, 'Aktif', '0000-00-00', '982347829385', 'Depok', '0813672678367', 'P', 'Programmer', '2015-07-29', 'Ciputat', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530010', 'Nabila Safira', 1000, 'Aktif', '0000-00-00', '203984097564', 'Cileungsi, Bogor', '021876545676', 'P', 'Wirausaha', '2015-07-29', 'Jakarta', 'Kontrak', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530011', 'Hafizh Andika Pitoyo', 5000, 'Aktif', '0000-00-00', '127346839475', 'Pamulang', '0897872637456', 'L', 'Pegawai Swasta', '2015-07-29', 'Jakarta', 'Kontrak', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530012', 'Abidati Julia Murti', 3000000, 'Aktif', '0000-00-00', '671283749062', 'Pondok Ranji, Ciputat', '08567721000', 'P', 'Pegawai Swasta', '2015-07-29', 'Jakarta', 'Kontrak', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530013', 'Shandy Andika', 5000, 'Aktif', '0000-00-00', '761827938746', 'Pamulang', '02189765456', 'L', 'Pegawai Swasta', '2015-07-29', 'Jakarta', 'Rumah Orangtua', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530014', 'Indah Yulianingsih', 60000, 'Aktif', '0000-00-00', '772837467584', 'Cipete, Jakarta Selatan', '0218787878', 'P', 'Pegawai Swasta', '2015-07-29', 'Jakarta', 'Rumah Sendiri', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530015', 'Jangkar Bagaskara', 500000, 'Aktif', '0000-00-00', '761829837653', 'Kompleks Kostrad, Jakarta Selatan', '086754672521', 'L', 'Wirausaha', '2015-07-29', 'Jakarta', 'Kontrak', 'Octaviano Pratama', 'Jakarta', 'Dosen', '021333445566'),
('53530016', 'Fitri Putriasih', 0, 'Aktif', '2015-07-29', '78723123872', 'Pamulang', '081267546273', 'P', 'Paruh Waktu', '1995-02-27', 'Jakarta', '', 'Shandy Andika', 'Pamulang', 'Kerabat Dekat', '0218765678'),
('53530017', 'RIka', 0, 'Aktif', '2015-07-31', '13176767453', 'Pamulang', '0218787343', 'P', 'Pengusaha', '0995-03-31', 'Padang', '', 'Naufal', 'Pamulang', 'Saudara', '02187878787'),
('53530018', 'Riza', 0, 'Aktif', '2015-07-31', '121313', 'asdsad', '12124124', 'L', 'adasd', '1970-03-31', 'sdasdas', 'Rumah Sendiri', 'asdasd', 'asdsad', 'sdsad', 'sadasd'),
('53530019', 'Taufik', 0, 'Aktif', '2015-10-21', '212412', 'asdasd', '12313123', 'L', 'dsasd', '1970-12-05', 'asdasd', '', 'sadasd', 'sadasd', 'sadasf', '3523525'),
('53530020', 'Novi', 0, 'Aktif', '2015-12-11', '1212121313', 'hhhj', 'hjghgg', 'P', 'ghjg', '1978-05-05', 'hjghjg', 'Rumah Sendiri', 'hghjgj', 'hjgjhg', 'gjhgj', '76786786'),
('53530021', 'Naufal', 0, 'Aktif', '2016-02-07', '124214124', 'asdasd', 'sfsdfsdf', 'L', 'sdasdads', '1987-03-31', 'dasdasd', 'Rumah Sendiri', 'sdfsdfs', 'sdfsdf', 'sdfsdf', '12414124'),
('53530022', 'Wicak', 0, 'Aktif', '2016-02-07', '1321124124', 'asdadasd', '1231231', 'L', 'asdasdasd', '1989-11-11', 'asdasa', 'Rumah Sendiri', 'asdasda', 'sdfsdfs', 'sdfsdf', '23424434');

--
-- Triggers `tb_rekening`
--
DROP TRIGGER IF EXISTS `no_auto_rek`;
DELIMITER //
CREATE TRIGGER `no_auto_rek` BEFORE INSERT ON `tb_rekening`
 FOR EACH ROW BEGIN
  INSERT into auto_rek values (NULL);
  SET NEW.no_rekening=CONCAT('5353', LPAD(LAST_INSERT_ID(),4,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` char(6) NOT NULL,
  `id_akad` varchar(8) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `setoran_cicilan` int(11) NOT NULL,
  `jumlah_setoran` int(11) NOT NULL,
  `basil` int(11) NOT NULL,
  `cicilan_ke` int(11) NOT NULL,
  `sisa_pinjaman` int(11) NOT NULL,
  `status_cicilan` enum('Lunas','Belum Lunas') NOT NULL DEFAULT 'Belum Lunas',
  `jumlah_pinjaman` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_akad`, `nama_anggota`, `setoran_cicilan`, `jumlah_setoran`, `basil`, `cicilan_ke`, `sisa_pinjaman`, `status_cicilan`, `jumlah_pinjaman`) VALUES
('TRN013', 'AKD019', 'Ottoh Hidayatullah', 0, 0, 0, 0, 0, 'Belum Lunas', 6000000),
('TRN017', 'AKD020', 'Hanum Aulia Cahayati', 1000000, 1020000, 20000, 10, 0, 'Lunas', 10000000),
('TRN018', 'AKD021', 'Nabila Safira', 500000, 530000, 30000, 8, 1000000, 'Belum Lunas', 5000000),
('TRN022', 'AKD023', 'RIka', 1000000, 1180000, 180000, 2, 8000000, 'Belum Lunas', 10000000),
('TRN023', 'AKD024', 'Riza', 1350000, 1552500, 202500, 6, 5400000, 'Belum Lunas', 13500000),
('TRN025', 'AKD026', 'Taufik', 1750000, 2625000, 875000, 1, 15750000, 'Belum Lunas', 17500000),
('TRN028', 'AKD029', 'Naufal', 1000000, 1200000, 200000, 1, 9000000, 'Belum Lunas', 10000000),
('TRN029', 'AKD031', 'Wicak', 1000000, 1020000, 20000, 10, 0, 'Lunas', 10000000);

--
-- Triggers `tb_transaksi`
--
DROP TRIGGER IF EXISTS `id_auto_transaksi`;
DELIMITER //
CREATE TRIGGER `id_auto_transaksi` BEFORE INSERT ON `tb_transaksi`
 FOR EACH ROW BEGIN
  INSERT into auto_transaksi values (NULL);
  SET NEW.id_transaksi=CONCAT('TRN', LPAD(LAST_INSERT_ID(),3,'0'));
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
