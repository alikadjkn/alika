/*
 Navicat Premium Data Transfer

 Source Server         : mamp
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:8889
 Source Schema         : db_alika

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 28/01/2021 11:50:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_gaji
-- ----------------------------
DROP TABLE IF EXISTS `data_gaji`;
CREATE TABLE `data_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdjns` varchar(1) DEFAULT NULL,
  `kdsatker` int(6) DEFAULT NULL,
  `kdanak` varchar(2) DEFAULT NULL,
  `kdsubanak` varchar(2) DEFAULT NULL,
  `kdkawin` varchar(4) DEFAULT NULL,
  `kdgapok` varchar(4) DEFAULT NULL,
  `kdjab` varchar(5) DEFAULT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `gapok` double(12,0) DEFAULT NULL,
  `tistri` double(12,0) DEFAULT NULL,
  `tanak` double(12,0) DEFAULT NULL,
  `tumum` double(12,0) DEFAULT NULL,
  `ttambumum` double(12,0) DEFAULT NULL,
  `tstruktur` double(12,0) DEFAULT NULL,
  `tfungsi` double(12,0) DEFAULT NULL,
  `bulat` double(12,0) DEFAULT NULL,
  `tberas` double(12,0) DEFAULT NULL,
  `tpajak` double(12,0) DEFAULT NULL,
  `pberas` double(12,0) DEFAULT NULL,
  `tpapua` double(12,0) DEFAULT NULL,
  `tpencil` double(12,0) DEFAULT NULL,
  `tlain` double(12,0) DEFAULT NULL,
  `iwp` double(12,0) DEFAULT NULL,
  `pph` double(12,0) DEFAULT NULL,
  `sewarmh` double(12,0) DEFAULT NULL,
  `tunggakan` double(12,0) DEFAULT NULL,
  `utanglebih` double(12,0) DEFAULT NULL,
  `potlain` double(12,0) DEFAULT NULL,
  `taperum` double(12,0) DEFAULT NULL,
  `bpjs` double(12,0) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41026 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `data_keluarga`;
CREATE TABLE `data_keluarga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` int(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT '',
  `nama` varchar(150) DEFAULT NULL,
  `kdkeluarga` varchar(1) DEFAULT '',
  `tgllhr` date NOT NULL,
  `kddapat` varchar(1) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11510 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for data_kurang
-- ----------------------------
DROP TABLE IF EXISTS `data_kurang`;
CREATE TABLE `data_kurang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdjns` varchar(1) DEFAULT NULL,
  `kdsatker` int(6) DEFAULT NULL,
  `kdanak` varchar(2) DEFAULT NULL,
  `kdsubanak` varchar(2) DEFAULT NULL,
  `kdkawin` varchar(4) DEFAULT NULL,
  `kdgapok` varchar(4) DEFAULT NULL,
  `kdjab` varchar(5) DEFAULT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `gapok` double(12,0) DEFAULT NULL,
  `tistri` double(12,0) DEFAULT NULL,
  `tanak` double(12,0) DEFAULT NULL,
  `tumum` double(12,0) DEFAULT NULL,
  `ttambumum` double(12,0) DEFAULT NULL,
  `tstruktur` double(12,0) DEFAULT NULL,
  `tfungsi` double(12,0) DEFAULT NULL,
  `bulat` double(12,0) DEFAULT NULL,
  `tberas` double(12,0) DEFAULT NULL,
  `tpajak` double(12,0) DEFAULT NULL,
  `pberas` double(12,0) DEFAULT NULL,
  `tpapua` double(12,0) DEFAULT NULL,
  `tpencil` double(12,0) DEFAULT NULL,
  `tlain` double(12,0) DEFAULT NULL,
  `iwp` double(12,0) DEFAULT NULL,
  `pph` double(12,0) DEFAULT NULL,
  `sewarmh` double(12,0) DEFAULT NULL,
  `tunggakan` double(12,0) DEFAULT NULL,
  `utanglebih` double(12,0) DEFAULT NULL,
  `potlain` double(12,0) DEFAULT NULL,
  `taperum` double(12,0) DEFAULT NULL,
  `ket` varchar(256) DEFAULT NULL,
  `bpjs` double(12,0) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2491 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_lain
-- ----------------------------
DROP TABLE IF EXISTS `data_lain`;
CREATE TABLE `data_lain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `kdsatker` varchar(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `bruto` double(15,0) DEFAULT NULL,
  `pph` double(15,0) DEFAULT NULL,
  `netto` double(15,0) DEFAULT NULL,
  `jenis` varchar(32) DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `tanggal` int(11) DEFAULT NULL,
  `nospm` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_lembur
-- ----------------------------
DROP TABLE IF EXISTS `data_lembur`;
CREATE TABLE `data_lembur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `kdsatker` varchar(6) DEFAULT NULL,
  `kdanak` varchar(2) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `gol` varchar(1) DEFAULT NULL,
  `jhari1` int(2) DEFAULT NULL,
  `jhari2` int(2) DEFAULT NULL,
  `jhari3` int(2) DEFAULT NULL,
  `jhari4` int(2) DEFAULT NULL,
  `jhari5` int(2) DEFAULT NULL,
  `jhari6` int(2) DEFAULT NULL,
  `jhari7` int(2) DEFAULT NULL,
  `jhari8` int(2) DEFAULT NULL,
  `jhari9` int(2) DEFAULT NULL,
  `jhari10` int(2) DEFAULT NULL,
  `jhari11` int(2) DEFAULT NULL,
  `jhari12` int(2) DEFAULT NULL,
  `jhari13` int(2) DEFAULT NULL,
  `jhari14` int(2) DEFAULT NULL,
  `jhari15` int(2) DEFAULT NULL,
  `jhari16` int(2) DEFAULT NULL,
  `jhari17` int(2) DEFAULT NULL,
  `jhari18` int(2) DEFAULT NULL,
  `jhari19` int(2) DEFAULT NULL,
  `jhari20` int(2) DEFAULT NULL,
  `jhari21` int(2) DEFAULT NULL,
  `jhari22` int(2) DEFAULT NULL,
  `jhari23` int(2) DEFAULT NULL,
  `jhari24` int(2) DEFAULT NULL,
  `jhari25` int(2) DEFAULT NULL,
  `jhari26` int(2) DEFAULT NULL,
  `jhari27` int(2) DEFAULT NULL,
  `jhari28` int(2) DEFAULT NULL,
  `jhari29` int(2) DEFAULT NULL,
  `jhari30` int(2) DEFAULT NULL,
  `jhari31` int(2) DEFAULT NULL,
  `jkerja` int(2) DEFAULT NULL,
  `jlibur` int(2) DEFAULT NULL,
  `jmakan` int(2) DEFAULT NULL,
  `lembur` double(15,0) DEFAULT NULL,
  `makan` double(15,0) DEFAULT NULL,
  `pph` double(15,0) DEFAULT NULL,
  `bruto` double(15,0) DEFAULT NULL,
  `netto` double(15,0) DEFAULT NULL,
  `keterangan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=504 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_makan
-- ----------------------------
DROP TABLE IF EXISTS `data_makan`;
CREATE TABLE `data_makan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `kdsatker` varchar(6) DEFAULT NULL,
  `kdanak` varchar(2) DEFAULT NULL,
  `kdsubanak` varchar(2) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `kdgol` varchar(2) DEFAULT NULL,
  `jmlhari` double(5,0) DEFAULT NULL,
  `tarif` double(15,0) DEFAULT NULL,
  `pph` double(15,0) DEFAULT NULL,
  `bruto` double(15,0) DEFAULT NULL,
  `netto` double(15,0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=38171 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(6) DEFAULT NULL,
  `kdanak` varchar(2) DEFAULT NULL,
  `kdsubanak` varchar(2) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nmpeg` varchar(128) DEFAULT NULL,
  `kdpeg` varchar(1) DEFAULT NULL,
  `kdduduk` varchar(2) DEFAULT NULL,
  `tempatlhr` varchar(64) DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `kdgol` varchar(2) DEFAULT NULL,
  `kdkawin` varchar(4) DEFAULT NULL,
  `kdjab` varchar(5) DEFAULT NULL,
  `kdgapok` varchar(4) DEFAULT NULL,
  `rekening` varchar(64) DEFAULT NULL,
  `kdkelamin` varchar(1) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `npwp` varchar(32) DEFAULT NULL,
  `nm_bank` varchar(128) DEFAULT NULL,
  `nmrek` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7767 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_perubahan
-- ----------------------------
DROP TABLE IF EXISTS `data_perubahan`;
CREATE TABLE `data_perubahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` int(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT '',
  `tgl` date NOT NULL,
  `no` varchar(40) DEFAULT '',
  `uraian` varchar(254) DEFAULT '',
  `tmt` date NOT NULL,
  `tglupdate` date NOT NULL,
  `kdgapok` varchar(4) DEFAULT '',
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15055 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for data_profil
-- ----------------------------
DROP TABLE IF EXISTS `data_profil`;
CREATE TABLE `data_profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) DEFAULT NULL,
  `kdsatker` varchar(6) DEFAULT NULL,
  `no_skp` varchar(128) DEFAULT NULL,
  `nama_ttd_skp` varchar(128) DEFAULT NULL,
  `nip_ttd_skp` varchar(18) DEFAULT NULL,
  `jab_ttd_skp` varchar(128) DEFAULT NULL,
  `nama_ttd_kp4` varchar(128) DEFAULT NULL,
  `nip_ttd_kp4` varchar(18) DEFAULT NULL,
  `jab_ttd_kp4` varchar(128) DEFAULT NULL,
  `npwp_bendahara` varchar(15) DEFAULT NULL,
  `nama_bendahara` varchar(128) DEFAULT NULL,
  `nip_bendahara` varchar(18) DEFAULT NULL,
  `tgl_spt` int(11) DEFAULT NULL,
  `file` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=692 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_satker
-- ----------------------------
DROP TABLE IF EXISTS `data_satker`;
CREATE TABLE `data_satker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(6) DEFAULT NULL,
  `nmsatker` varchar(128) DEFAULT NULL,
  `header1` varchar(256) DEFAULT NULL,
  `header2` varchar(256) DEFAULT NULL,
  `subheader1` varchar(256) DEFAULT NULL,
  `subheader2` varchar(256) DEFAULT NULL,
  `subheader3` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_satker
-- ----------------------------
BEGIN;
INSERT INTO `data_satker` VALUES (1, '411792', 'Kantor Pusat DJKN', 'SEKRETARIAT DIREKTORAT JENDERAL', 'BAGIAN KEUANGAN', 'GEDUNG SYAFRUDIN PRAWIRANEGARA II LANTAI 10 SELATAN', 'JALAN LAPANGAN BANTENG TIMUR NO. 2-4 JAKARTA 10710 KOTAK POS 3169', 'TELP. (021) 3810162 ext.4550 situs: http://www.djkn.kemenkeu.go.id');
INSERT INTO `data_satker` VALUES (2, '506050', 'Kanwil DJKN Aceh', 'Kanwil DJKN Aceh', 'Kanwil DJKN Aceh', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (3, '537827', 'KPKNL Banda Aceh', 'Kanwil DJKN Aceh', 'KPKNL Banda Aceh', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (4, '506069', 'KPKNL Lhokseumawe', 'Kanwil DJKN Aceh', 'KPKNL Lhokseumawe', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (5, '411806', 'Kanwil DJKN Sumatera Utara', 'Kanwil DJKN Sumatera Utara', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (6, '537831', 'KPKNL Medan', 'Kanwil DJKN Sumatera Utara', 'KPKNL Medan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (7, '119703', 'KPKNL Pematang Siantar', 'Kanwil DJKN Sumatera Utara', 'KPKNL Pematang Siantar', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (8, '506081', 'KPKNL Kisaran', 'Kanwil DJKN Sumatera Utara', 'KPKNL Kisaran', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (9, '506090', 'KPKNL Padang Sidimpuan', 'Kanwil DJKN Sumatera Utara', 'KPKNL Padang Sidimpuan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (10, '506101', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (11, '537848', 'KPKNL Padang', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'KPKNL Padang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (12, '119745', 'KPKNL Bukittinggi', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'KPKNL Bukittinggi', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (13, '537852', 'KPKNL Pekanbaru', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'KPKNL Pekanbaru', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (14, '119656', 'KPKNL Batam', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'KPKNL Batam', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (15, '506461', 'KPKNL Dumai', 'Kanwil DJKN Riau, Sumatera Barat, dan Kepulauan Riau', 'KPKNL Dumai', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (16, '537880', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (17, '537873', 'KPKNL Jambi', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', 'KPKNL Jambi', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (18, '537894', 'KPKNL Palembang', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', 'KPKNL Palembang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (19, '506126', 'KPKNL Lahat', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', 'KPKNL Lahat', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (20, '119809', 'KPKNL Pangkal Pinang', 'Kanwil DJKN Sumatera Selatan, Jambi, dan Bangka Belitung', 'KPKNL Pangkal Pinang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (21, '506142', 'Kanwil DJKN Lampung dan Bengkulu', 'Kanwil DJKN Lampung dan Bengkulu', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (22, '538154', 'KPKNL Bengkulu', 'Kanwil DJKN Lampung dan Bengkulu', 'KPKNL Bengkulu', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (23, '537902', 'KPKNL Bandar Lampung', 'Kanwil DJKN Lampung dan Bengkulu', 'KPKNL Bandar Lampung', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (24, '506157', 'KPKNL Metro', 'Kanwil DJKN Lampung dan Bengkulu', 'KPKNL Metro', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (25, '506172', 'Kanwil DJKN Banten', 'Kanwil DJKN Banten', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (26, '119724', 'KPKNL Serang', 'Kanwil DJKN Banten', 'KPKNL Serang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (27, '506188', 'KPKNL Tangerang I', 'Kanwil DJKN Banten', 'KPKNL Tangerang I', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (28, '506194', 'KPKNL Tangerang II', 'Kanwil DJKN Banten', 'KPKNL Tangerang II', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (29, '411852', 'Kanwil DJKN DKI Jakarta', 'Kanwil DJKN DKI Jakarta', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (30, '537721', 'KPKNL Jakarta I', 'Kanwil DJKN DKI Jakarta', 'KPKNL Jakarta I', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (31, '604442', 'KPKNL Jakarta II', 'Kanwil DJKN DKI Jakarta', 'KPKNL Jakarta II', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (32, '537916', 'KPKNL Jakarta III', 'Kanwil DJKN DKI Jakarta', 'KPKNL Jakarta III', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (33, '537937', 'KPKNL Jakarta IV', 'Kanwil DJKN DKI Jakarta', 'KPKNL Jakarta IV', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (34, '119312', 'KPKNL Jakarta V', 'Kanwil DJKN DKI Jakarta', 'KPKNL Jakarta V', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (35, '411812', 'Kanwil DJKN Jawa Barat', 'Kanwil DJKN Jawa Barat', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (36, '537738', 'KPKNL Bandung', 'Kanwil DJKN Jawa Barat', 'KPKNL Bandung', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (37, '604460', 'KPKNL Bekasi', 'Kanwil DJKN Jawa Barat', 'KPKNL Bekasi', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (38, '537759', 'KPKNL Bogor', 'Kanwil DJKN Jawa Barat', 'KPKNL Bogor', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (39, '506208', 'KPKNL Purwakarta', 'Kanwil DJKN Jawa Barat', 'KPKNL Purwakarta', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (40, '525343', 'KPKNL Tasikmalaya', 'Kanwil DJKN Jawa Barat', 'KPKNL Tasikmalaya', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (41, '119393', 'KPKNL Cirebon', 'Kanwil DJKN Jawa Barat', 'KPKNL Cirebon', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (42, '411821', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (43, '537763', 'KPKNL Semarang', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Semarang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (44, '119511', 'KPKNL Surakarta', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Surakarta', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (45, '506239', 'KPKNL Pekalongan', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Pekalongan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (46, '411786', 'KPKNL Tegal', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Tegal', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (47, '537784', 'KPKNL Yogyakarta', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Yogyakarta', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (48, '537770', 'KPKNL Purwokerto', 'Kanwil DJKN Jawa Tengah dan D.I. Yogyakarta', 'KPKNL Purwokerto', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (49, '411837', 'Kanwil DJKN Jawa Timur', 'Kanwil DJKN Jawa Timur', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (50, '537791', 'KPKNL Surabaya', 'Kanwil DJKN Jawa Timur', 'KPKNL Surabaya', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (51, '506276', 'KPKNL Sidoarjo', 'Kanwil DJKN Jawa Timur', 'KPKNL Sidoarjo', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (52, '537810', 'KPKNL Malang', 'Kanwil DJKN Jawa Timur', 'KPKNL Malang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (53, '538140', 'KPKNL Jember', 'Kanwil DJKN Jawa Timur', 'KPKNL Jember', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (54, '506282', 'KPKNL Pamekasan', 'Kanwil DJKN Jawa Timur', 'KPKNL Pamekasan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (55, '537920', 'KPKNL Madiun', 'Kanwil DJKN Jawa Timur', 'KPKNL Madiun', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (56, '506291', 'Kanwil DJKN Kalimantan Barat', 'Kanwil DJKN Kalimantan Barat', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (57, '604456', 'KPKNL Pontianak', 'Kanwil DJKN Kalimantan Barat', 'KPKNL Pontianak', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (58, '506302', 'KPKNL Singkawang', 'Kanwil DJKN Kalimantan Barat', 'KPKNL Singkawang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (59, '506327', 'Kanwil DJKN Kalimantan Selatan dan Tengah', 'Kanwil DJKN Kalimantan Selatan dan Tengah', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (60, '119834', 'KPKNL Palangka Raya', 'Kanwil DJKN Kalimantan Selatan dan Tengah', 'KPKNL Palangka Raya', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (61, '506333', 'KPKNL Pangkalan Bun', 'Kanwil DJKN Kalimantan Selatan dan Tengah', 'KPKNL Pangkalan Bun', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (62, '537958', 'KPKNL Banjarmasin', 'Kanwil DJKN Kalimantan Selatan dan Tengah', 'KPKNL Banjarmasin', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (63, '506358', 'Kanwil DJKN Kalimantan Timur dan Utara', 'Kanwil DJKN Kalimantan Timur dan Utara', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (64, '537962', 'KPKNL Balikpapan', 'Kanwil DJKN Kalimantan Timur dan Utara', 'KPKNL Balikpapan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (65, '537941', 'KPKNL Samarinda', 'Kanwil DJKN Kalimantan Timur dan Utara', 'KPKNL Samarinda', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (66, '506364', 'KPKNL Tarakan', 'Kanwil DJKN Kalimantan Timur dan Utara', 'KPKNL Tarakan', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (67, '506370', 'KPKNL Bontang', 'Kanwil DJKN Kalimantan Timur dan Utara', 'KPKNL Bontang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (68, '538051', 'Kanwil DJKN Bali dan Nusa Tenggara', 'Kanwil DJKN Bali dan Nusa Tenggara', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (69, '538065', 'KPKNL Denpasar', 'Kanwil DJKN Bali dan Nusa Tenggara', 'KPKNL Denpasar', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (70, '525591', 'KPKNL Singaraja', 'Kanwil DJKN Bali dan Nusa Tenggara', 'KPKNL Singaraja', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (71, '538086', 'KPKNL Mataram', 'Kanwil DJKN Bali dan Nusa Tenggara', 'KPKNL Mataram', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (72, '538072', 'KPKNL Bima', 'Kanwil DJKN Bali dan Nusa Tenggara', 'KPKNL Bima', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (73, '538108', 'KPKNL Kupang', 'Kanwil DJKN Bali dan Nusa Tenggara', 'KPKNL Kupang', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (74, '411843', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (75, '538019', 'KPKNL Makassar', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Makassar', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (76, '538190', 'KPKNL Pare-Pare', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Pare-Pare', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (77, '119944', 'KPKNL Palopo', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Palopo', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (78, '538030', 'KPKNL Kendari', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Kendari', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (79, '418495', 'KPKNL Mamuju', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Mamuju', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (80, '537979', 'Kanwil DJKN Sulawesi Utara, Tengah, Gorontalo, dan Maluku Utara', 'KANWIL DJKN SULAWESI UTARA, TENGAH, GORONTALO, dan MALUKU UTARA', '', 'GEDUNG SYAFRUDIN PRAWIRANEGARA II LANTAI 10 SELATAN', 'JALAN LAPANGAN BANTENG TIMUR NO. 2-4 JAKARTA 10710 KOTAK POS 3169', 'TELP. (021) 3810162 ext.4550 situs: http://www.djkn.kemenkeu.go.id');
INSERT INTO `data_satker` VALUES (81, '538023', 'KPKNL Gorontalo', 'KANWIL DJKN SULAWESI UTARA, TENGAH, GORONTALO, dan MALUKU UTARA', 'KPKNL GORONTALO', '', '', '');
INSERT INTO `data_satker` VALUES (82, '538002', 'KPKNL Palu', 'Kanwil DJKN Sulawesi Selatan, Tenggara, dan Barat', 'KPKNL Palu', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (83, '538133', 'KPKNL Ternate', 'Kanwil DJKN Sulawesi Utara, Tengah, Gorontalo, dan Maluku Utara', 'KPKNL Ternate', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (84, '537983', 'KPKNL Manado', 'Kanwil DJKN Sulawesi Utara, Tengah, Gorontalo, dan Maluku Utara', 'KPKNL Manado', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (85, '506409', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', '', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (86, '538129', 'KPKNL Jayapura', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', 'KPKNL Jayapura', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (87, '537990', 'KPKNL Sorong', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', 'KPKNL Sorong', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (88, '525474', 'KPKNL Biak', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', 'KPKNL Biak', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (89, '538044', 'KPKNL Ambon', 'Kanwil DJKN Papua, Papua Barat, dan Maluku', 'KPKNL Ambon', NULL, NULL, NULL);
INSERT INTO `data_satker` VALUES (90, '604445', 'Lembaga Manajemen Aset Negara', 'Lembaga Manajemen Aset Negara', 'Lembaga Manajemen Aset Negara', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for data_spt_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `data_spt_pegawai`;
CREATE TABLE `data_spt_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(6) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `npwp` varchar(15) DEFAULT NULL,
  `kdgol` varchar(2) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `kdkawin` varchar(4) DEFAULT NULL,
  `kdjab` varchar(5) DEFAULT NULL,
  `nourut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3071 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_tukin
-- ----------------------------
DROP TABLE IF EXISTS `data_tukin`;
CREATE TABLE `data_tukin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `kdsatker` varchar(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL,
  `tjpokok` double(15,0) DEFAULT NULL,
  `tjtamb` double(15,0) DEFAULT NULL,
  `abspotr` double(15,0) DEFAULT NULL,
  `abspotp` float(5,2) DEFAULT NULL,
  `tkpph` double(15,0) DEFAULT NULL,
  `p1` int(2) DEFAULT NULL,
  `p2` int(2) DEFAULT NULL,
  `p3` int(2) DEFAULT NULL,
  `p4` int(2) DEFAULT NULL,
  `p5` int(2) DEFAULT NULL,
  `p6` int(2) DEFAULT NULL,
  `p7` int(2) DEFAULT NULL,
  `p8` int(2) DEFAULT NULL,
  `p9` int(2) DEFAULT NULL,
  `p10` int(2) DEFAULT NULL,
  `p11` int(2) DEFAULT NULL,
  `p12` int(2) DEFAULT NULL,
  `p13` int(2) DEFAULT NULL,
  `p14` int(2) DEFAULT NULL,
  `p15` int(2) DEFAULT NULL,
  `p16` int(2) DEFAULT NULL,
  `p17` int(2) DEFAULT NULL,
  `p18` int(2) DEFAULT NULL,
  `p19` int(2) DEFAULT NULL,
  `p20` int(2) DEFAULT NULL,
  `p21` int(2) DEFAULT NULL,
  `p22` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30812 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_unit_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `data_unit_pegawai`;
CREATE TABLE `data_unit_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdsatker` varchar(6) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_unit_pegawai
-- ----------------------------
BEGIN;
INSERT INTO `data_unit_pegawai` VALUES (9, '411792', '199605052018012004', 'Arini Cahyaningtyas');
INSERT INTO `data_unit_pegawai` VALUES (10, '411792', '198407022003121004', 'DANA KRISTIAWAN');
INSERT INTO `data_unit_pegawai` VALUES (11, '411792', '199102132013101001', 'Hanry Abi Himawan');
COMMIT;

-- ----------------------------
-- Table structure for keys
-- ----------------------------
DROP TABLE IF EXISTS `keys`;
CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keys
-- ----------------------------
BEGIN;
INSERT INTO `keys` VALUES (1, 1, 'hGfdg456ghD4f566afjh6Fg@hgb#jijk', 1, 0, 0, NULL, 1595413807);
COMMIT;

-- ----------------------------
-- Table structure for ref_bulan
-- ----------------------------
DROP TABLE IF EXISTS `ref_bulan`;
CREATE TABLE `ref_bulan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `kode` varchar(2) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ref_bulan
-- ----------------------------
BEGIN;
INSERT INTO `ref_bulan` VALUES (1, '01', 'Januari');
INSERT INTO `ref_bulan` VALUES (2, '02', 'Februari');
INSERT INTO `ref_bulan` VALUES (3, '03', 'Maret');
INSERT INTO `ref_bulan` VALUES (4, '04', 'April');
INSERT INTO `ref_bulan` VALUES (5, '05', 'Mei');
INSERT INTO `ref_bulan` VALUES (6, '06', 'Juni');
INSERT INTO `ref_bulan` VALUES (7, '07', 'Juli');
INSERT INTO `ref_bulan` VALUES (8, '08', 'Agustus');
INSERT INTO `ref_bulan` VALUES (9, '09', 'September');
INSERT INTO `ref_bulan` VALUES (10, '10', 'Oktober');
INSERT INTO `ref_bulan` VALUES (11, '11', 'November');
INSERT INTO `ref_bulan` VALUES (12, '12', 'Desember');
INSERT INTO `ref_bulan` VALUES (13, '13', 'Ketigabelas');
INSERT INTO `ref_bulan` VALUES (14, '14', 'THR');
COMMIT;

-- ----------------------------
-- Table structure for ref_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `ref_jabatan`;
CREATE TABLE `ref_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) DEFAULT NULL,
  `nama` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ref_jabatan
-- ----------------------------
BEGIN;
INSERT INTO `ref_jabatan` VALUES (1, '99999', 'Pelaksana x');
INSERT INTO `ref_jabatan` VALUES (2, '00111', 'Pejabat Eselon I');
INSERT INTO `ref_jabatan` VALUES (3, '00121', 'Pejabat Eselon II');
INSERT INTO `ref_jabatan` VALUES (4, '00122', 'Pejabat Eselon IIb');
INSERT INTO `ref_jabatan` VALUES (5, '00131', 'Pejabat Eselon III');
INSERT INTO `ref_jabatan` VALUES (6, '00141', 'Pejabat Eselon IV');
INSERT INTO `ref_jabatan` VALUES (7, '15403', 'Pranata Komputer');
INSERT INTO `ref_jabatan` VALUES (8, '15404', 'Pranata Komputer');
INSERT INTO `ref_jabatan` VALUES (9, '15406', 'Pranata Komputer');
COMMIT;

-- ----------------------------
-- Table structure for ref_pangkat
-- ----------------------------
DROP TABLE IF EXISTS `ref_pangkat`;
CREATE TABLE `ref_pangkat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdgol` varchar(2) DEFAULT NULL,
  `nmgol` varchar(16) DEFAULT NULL,
  `kdgapok` varchar(2) DEFAULT NULL,
  `nama` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ref_pangkat
-- ----------------------------
BEGIN;
INSERT INTO `ref_pangkat` VALUES (1, '14', 'I/d', '1D', 'Juru Selamat Tk. I / I.d');
INSERT INTO `ref_pangkat` VALUES (2, '21', 'II/a', '2A', 'Pengatur Muda / II.a');
INSERT INTO `ref_pangkat` VALUES (3, '22', 'II/b', '2B', 'Pengatur Muda Tk. I / II.b');
INSERT INTO `ref_pangkat` VALUES (4, '23', 'II/c', '2C', 'Pengatur / II.c');
INSERT INTO `ref_pangkat` VALUES (5, '24', 'II/d', '2D', 'Pengatur Tk. I / II.d');
INSERT INTO `ref_pangkat` VALUES (6, '31', 'III/a', '3A', 'Penata Muda / III.a');
INSERT INTO `ref_pangkat` VALUES (7, '32', 'III/b', '3B', 'Penata Muda Tk. I / III.b');
INSERT INTO `ref_pangkat` VALUES (8, '33', 'III/c', '3C', 'Penata / III.c');
INSERT INTO `ref_pangkat` VALUES (9, '34', 'III/d', '3D', 'Penata Tk. I / III.d');
INSERT INTO `ref_pangkat` VALUES (10, '41', 'IV/a', '4A', 'Pembina / IV.a');
INSERT INTO `ref_pangkat` VALUES (11, '42', 'IV/b', '4B', 'Pembina Tk. I / IV.b');
INSERT INTO `ref_pangkat` VALUES (12, '43', 'IV/c', '4C', 'Pembina Utama Muda / IV.c');
INSERT INTO `ref_pangkat` VALUES (13, '44', 'IV/d', '4D', 'Pembina Utama Madya / IV.d');
INSERT INTO `ref_pangkat` VALUES (14, '45', 'IV/e', '4E', 'Pembina Utama / IV.e');
COMMIT;

-- ----------------------------
-- Table structure for ref_spt_tahunan
-- ----------------------------
DROP TABLE IF EXISTS `ref_spt_tahunan`;
CREATE TABLE `ref_spt_tahunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) DEFAULT NULL,
  `ptkp_wp` double(15,0) DEFAULT NULL,
  `ptkp_istri` double(15,0) DEFAULT NULL,
  `ptkp_anak` double(15,0) DEFAULT NULL,
  `iuran_pensiun` float(4,2) DEFAULT NULL,
  `biaya_jabatan` float(4,2) DEFAULT NULL,
  `biaya_jabatan_maks` double(15,0) DEFAULT NULL,
  `pph_tarif_1` float(4,2) DEFAULT NULL,
  `pph_tarif_2` float(4,2) DEFAULT NULL,
  `pph_tarif_3` float(4,2) DEFAULT NULL,
  `pph_tarif_4` float(4,2) DEFAULT NULL,
  `pph_limit_1` double(15,0) DEFAULT NULL,
  `pph_limit_2` double(15,0) DEFAULT NULL,
  `pph_limit_3` double(15,0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ref_spt_tahunan
-- ----------------------------
BEGIN;
INSERT INTO `ref_spt_tahunan` VALUES (1, '2017', 54000000, 4500000, 4500000, 4.75, 5.00, 6000000, 5.00, 15.00, 25.00, 30.00, 50000000, 250000000, 500000000);
INSERT INTO `ref_spt_tahunan` VALUES (2, '2018', 54000000, 4500000, 4500000, 4.75, 5.00, 6000000, 5.00, 15.00, 25.00, 30.00, 50000000, 250000000, 500000000);
INSERT INTO `ref_spt_tahunan` VALUES (3, '2019', 54000000, 4500000, 4500000, 4.75, 5.00, 6000000, 5.00, 15.00, 25.00, 30.00, 50000000, 250000000, 500000000);
INSERT INTO `ref_spt_tahunan` VALUES (4, '2020', 54000000, 4500000, 4500000, 4.75, 5.00, 6000000, 5.00, 15.00, 25.00, 30.00, 50000000, 250000000, 500000000);
INSERT INTO `ref_spt_tahunan` VALUES (5, '2021', 54000000, 1, 1, 1.00, 1.00, 1, 1.00, 1.00, 1.00, 1.00, 1, 1, 1);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (4, '198407022003121004', 'Dana Kristiawan', 'danakristiawan@gmail.com', '$2y$10$.WOt64Sf2QnX4NqPkea60uNJMrnhZhWLAGW/JFRvkN1VYK3LG79Wq', 1, 1577811600);
COMMIT;

-- ----------------------------
-- View structure for view_data_kurang
-- ----------------------------
DROP VIEW IF EXISTS `view_data_kurang`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_data_kurang` AS select `data_kurang`.`nip` AS `nip`,`data_kurang`.`bulan` AS `bulan`,`data_kurang`.`tahun` AS `tahun`,sum(`data_kurang`.`gapok`) AS `gapok`,sum(`data_kurang`.`tistri`) AS `tistri`,sum(`data_kurang`.`tanak`) AS `tanak`,sum(`data_kurang`.`tumum`) AS `tumum`,sum(`data_kurang`.`ttambumum`) AS `ttambumum`,sum(`data_kurang`.`tstruktur`) AS `tstruktur`,sum(`data_kurang`.`tfungsi`) AS `tfungsi`,sum(`data_kurang`.`bulat`) AS `bulat`,sum(`data_kurang`.`tberas`) AS `tberas`,sum(`data_kurang`.`tpajak`) AS `tpajak`,sum(`data_kurang`.`iwp`) AS `iwp`,sum(`data_kurang`.`pph`) AS `pph`,sum(`data_kurang`.`sewarmh`) AS `sewarmh`,sum(`data_kurang`.`tpapua`) AS `tpapua`,sum(`data_kurang`.`tpencil`) AS `tpencil`,sum(`data_kurang`.`tlain`) AS `tlain`,sum(`data_kurang`.`pberas`) AS `pberas`,sum(`data_kurang`.`tunggakan`) AS `tunggakan`,sum(`data_kurang`.`utanglebih`) AS `utanglebih`,sum(`data_kurang`.`potlain`) AS `potlain`,sum(`data_kurang`.`taperum`) AS `taperum`,sum(`data_kurang`.`bpjs`) AS `bpjs` from `data_kurang` group by `data_kurang`.`nip`,`data_kurang`.`bulan`,`data_kurang`.`tahun`;

-- ----------------------------
-- View structure for view_gaji
-- ----------------------------
DROP VIEW IF EXISTS `view_gaji`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_gaji` AS select `data_gaji`.`bulan` AS `bulan`,`data_gaji`.`tahun` AS `tahun`,`data_gaji`.`nip` AS `nip`,(((((((((((`data_gaji`.`gapok` + `data_gaji`.`tistri`) + `data_gaji`.`tanak`) + `data_gaji`.`tumum`) + `data_gaji`.`ttambumum`) + `data_gaji`.`tstruktur`) + `data_gaji`.`tfungsi`) + `data_gaji`.`bulat`) + `data_gaji`.`tberas`) + `data_gaji`.`tpajak`) + `data_gaji`.`tpapua`) + `data_gaji`.`tlain`) AS `bruto`,((((((((`data_gaji`.`pberas` + `data_gaji`.`iwp`) + `data_gaji`.`pph`) + `data_gaji`.`sewarmh`) + `data_gaji`.`tunggakan`) + `data_gaji`.`utanglebih`) + `data_gaji`.`potlain`) + `data_gaji`.`taperum`) + `data_gaji`.`bpjs`) AS `potongan`,((((((((((((`data_gaji`.`gapok` + `data_gaji`.`tistri`) + `data_gaji`.`tanak`) + `data_gaji`.`tumum`) + `data_gaji`.`ttambumum`) + `data_gaji`.`tstruktur`) + `data_gaji`.`tfungsi`) + `data_gaji`.`bulat`) + `data_gaji`.`tberas`) + `data_gaji`.`tpajak`) + `data_gaji`.`tpapua`) + `data_gaji`.`tlain`) - ((((((((`data_gaji`.`pberas` + `data_gaji`.`iwp`) + `data_gaji`.`pph`) + `data_gaji`.`sewarmh`) + `data_gaji`.`tunggakan`) + `data_gaji`.`utanglebih`) + `data_gaji`.`potlain`) + `data_gaji`.`taperum`) + `data_gaji`.`bpjs`)) AS `netto` from `data_gaji`;

-- ----------------------------
-- View structure for view_kurang
-- ----------------------------
DROP VIEW IF EXISTS `view_kurang`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kurang` AS select `view_data_kurang`.`bulan` AS `bulan`,`view_data_kurang`.`tahun` AS `tahun`,`view_data_kurang`.`nip` AS `nip`,(((((((((((`view_data_kurang`.`gapok` + `view_data_kurang`.`tistri`) + `view_data_kurang`.`tanak`) + `view_data_kurang`.`tumum`) + `view_data_kurang`.`ttambumum`) + `view_data_kurang`.`tstruktur`) + `view_data_kurang`.`tfungsi`) + `view_data_kurang`.`bulat`) + `view_data_kurang`.`tberas`) + `view_data_kurang`.`tpajak`) + `view_data_kurang`.`tpapua`) + `view_data_kurang`.`tlain`) AS `bruto`,((((((((`view_data_kurang`.`pberas` + `view_data_kurang`.`iwp`) + `view_data_kurang`.`pph`) + `view_data_kurang`.`sewarmh`) + `view_data_kurang`.`tunggakan`) + `view_data_kurang`.`utanglebih`) + `view_data_kurang`.`potlain`) + `view_data_kurang`.`taperum`) + `view_data_kurang`.`bpjs`) AS `potongan`,((((((((((((`view_data_kurang`.`gapok` + `view_data_kurang`.`tistri`) + `view_data_kurang`.`tanak`) + `view_data_kurang`.`tumum`) + `view_data_kurang`.`ttambumum`) + `view_data_kurang`.`tstruktur`) + `view_data_kurang`.`tfungsi`) + `view_data_kurang`.`bulat`) + `view_data_kurang`.`tberas`) + `view_data_kurang`.`tpajak`) + `view_data_kurang`.`tpapua`) + `view_data_kurang`.`tlain`) - ((((((((`view_data_kurang`.`pberas` + `view_data_kurang`.`iwp`) + `view_data_kurang`.`pph`) + `view_data_kurang`.`sewarmh`) + `view_data_kurang`.`tunggakan`) + `view_data_kurang`.`utanglebih`) + `view_data_kurang`.`potlain`) + `view_data_kurang`.`taperum`) + `view_data_kurang`.`bpjs`)) AS `netto` from `view_data_kurang`;

-- ----------------------------
-- View structure for view_pajak_gaji
-- ----------------------------
DROP VIEW IF EXISTS `view_pajak_gaji`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pajak_gaji` AS select `data_gaji`.`tahun` AS `tahun`,`data_gaji`.`nip` AS `nip`,count(`data_gaji`.`nip`) AS `jumlah`,sum(`data_gaji`.`gapok`) AS `gapok`,sum(`data_gaji`.`tistri`) AS `tistri`,sum(`data_gaji`.`tanak`) AS `tanak`,sum(`data_gaji`.`tumum`) AS `tumum`,sum(`data_gaji`.`tstruktur`) AS `tstruktur`,sum(`data_gaji`.`tfungsi`) AS `tfungsi`,sum(`data_gaji`.`tberas`) AS `tberas`,sum(`data_gaji`.`bulat`) AS `bulat`,sum(`data_gaji`.`tpapua`) AS `tpapua`,sum(`data_gaji`.`tpajak`) AS `tpajak` from `data_gaji` group by `data_gaji`.`tahun`,`data_gaji`.`nip`;

-- ----------------------------
-- View structure for view_pajak_kurang
-- ----------------------------
DROP VIEW IF EXISTS `view_pajak_kurang`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pajak_kurang` AS select `data_kurang`.`tahun` AS `tahun`,`data_kurang`.`nip` AS `nip`,sum(`data_kurang`.`gapok`) AS `gapok`,sum(`data_kurang`.`tistri`) AS `tistri`,sum(`data_kurang`.`tanak`) AS `tanak`,sum(`data_kurang`.`tumum`) AS `tumum`,sum(`data_kurang`.`tstruktur`) AS `tstruktur`,sum(`data_kurang`.`tfungsi`) AS `tfungsi`,sum(`data_kurang`.`tberas`) AS `tberas`,sum(`data_kurang`.`bulat`) AS `bulat`,sum(`data_kurang`.`tpapua`) AS `tpapua`,sum(`data_kurang`.`tpajak`) AS `tpajak` from `data_kurang` group by `data_kurang`.`tahun`,`data_kurang`.`nip`;

-- ----------------------------
-- View structure for view_tukin
-- ----------------------------
DROP VIEW IF EXISTS `view_tukin`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tukin` AS select `data_tukin`.`bulan` AS `bulan`,`data_tukin`.`tahun` AS `tahun`,`data_tukin`.`nip` AS `nip`,(((`data_tukin`.`tjpokok` + `data_tukin`.`tjtamb`) + `data_tukin`.`tkpph`) - `data_tukin`.`abspotr`) AS `bruto`,`data_tukin`.`tkpph` AS `potongan`,((((`data_tukin`.`tjpokok` + `data_tukin`.`tjtamb`) + `data_tukin`.`tkpph`) - `data_tukin`.`abspotr`) - `data_tukin`.`tkpph`) AS `netto` from `data_tukin`;

SET FOREIGN_KEY_CHECKS = 1;
