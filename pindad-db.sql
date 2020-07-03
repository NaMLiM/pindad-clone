-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2020 pada 13.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pindad-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(99) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `isi`, `gambar`, `kategori`) VALUES
(8, 'LIBATKAN MILLENNIAL, PINDAD INISIASI PROGRAM COVID RANGER', '2020-06-25', '../../news/5ef41863444d3/isi_berita/5ef41863444d3.html', '5ef41863444d3-1.jpeg-2.jpeg-3.jpeg', 'press-release'),
(9, 'PELANTIKAN DAN SERAH TERIMA JABATAN PEJABAT STRATA 1 DI PT PINDAD (PERSERO)', '2020-06-25', '../../news/5ef41946a5590/isi_berita/5ef41946a5590.html', '5ef41946a5590-1.jpeg-2.jpeg', 'pindad-in-news'),
(11, 'PINDAD PERKENALKAN VENTILATOR & PRODUK-PRODUK LAINNYA UNTUK PERANGI COVID-19', '2020-06-26', '../../news/5ef525c1802bb/isi_berita/5ef525c1802bb.html', '5ef525c1802bb-1.jpg', 'press-release'),
(14, 'PENGUMUMAN PEMENANG LELANG PENGADAAN PROFILE PROJECTOR', '2020-06-26', '../../news/5ef531531435b/isi_berita/5ef531531435b.html', '', 'procurement-info'),
(15, 'Pindad Siaga Covid-19', '2020-06-26', '../../news/5ef534619d64e/isi_berita/5ef534619d64e.html', '5ef534619d64e-1.jpg', 'informasi-serta-merta'),
(16, 'Medium Tank', '2020-06-26', '../../news/5ef5351ce46c4/isi_berita/5ef5351ce46c4.html', '5ef5351ce46c4-1.jpeg-2.png', 'new-innovation'),
(17, 'MENJAGA UMKM INDONESIA, PINDAD BINA PENGRAJIN SENAPAN ANGIN DAN UMKM LAINNYA', '2020-07-01', '../../news/5efc4394e8c11/isi_berita/5efc4394e8c11.html', '5efc4394e8c11-1.jpeg', 'press-release'),
(18, 'PENCIPTA ROBOT PEMBUAT TELUR DADAR, AGUNG BERKESEMPATAN LIHAT LANGSUNG FASILITAS PRODUKSI PINDAD', '2020-07-01', '../../news/5efc44c2aaf45/isi_berita/5efc44c2aaf45.html', '5efc44c2aaf45-1.jpg', 'press-release'),
(20, 'TINDAK LANJUT MOU RI - PHILIPINA, DELEGASI FILIPINA KUNJUNGI PINDAD', '2020-07-01', '../../news/5efc46a37ec6d/isi_berita/5efc46a37ec6d.html', '5efc46a37ec6d-1.jfif', 'press-release'),
(21, 'FILIPINA AKAN TANDATANGANI MOU TERKAIT PEMBELIAN TANK BUATAN PINDAD', '2020-07-01', '../../news/5efc487232326/isi_berita/5efc487232326.html', '5efc487232326-1.jpeg', 'pindad-in-news'),
(22, 'PINDAD GANDENG INDUSTRI KENDARAAN TEMPUR UKRAINA', '2020-07-01', '../../news/5efc48a84fa6c/isi_berita/5efc48a84fa6c.html', '5efc48a84fa6c-1.jpg', 'pindad-in-news'),
(23, 'PINDAD PAMERKAN PANSER ANOA 2 DI INDONESIA BUSINESS AND DEVELOPMENT', '2020-07-01', '../../news/5efc48f6b0c10/isi_berita/5efc48f6b0c10.html', '', 'pindad-in-news'),
(24, 'ROKET PERTAHANAN', '2020-07-01', '../../news/5efc4a26cdf18/isi_berita/5efc4a26cdf18.html', '5efc4a26cdf18-1.jpg', 'new-innovation'),
(28, 'Test Edit Gambar', '2020-07-02', '../../news/5efdc751989eb/isi_berita/5efdc751989eb.html', '5efdc751989eb-1.jpg', 'press-release');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(99) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `jenis_produk` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `gambar` text NOT NULL,
  `video` text NOT NULL,
  `spek` text NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `download` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `kategori`, `gambar`, `video`, `spek`, `deskripsi`, `download`) VALUES
(9, 'SS1-M1 Kal. 5.56 mm', 'Senjata', 'Rifles', '5ef2b1ca92bd7-1.jpg-2.jpg', '', '../upload/5ef2b1ca92bd7/spek/5ef2b1ca92bd7.html', '../upload/5ef2b1ca92bd7/deskripsi/5ef2b1ca92bd7.html', ''),
(10, 'GT6-SUPAR', 'Munisi', 'Special Ammunition', '5ef3f139a0e3c-1.jpg', '', '../upload/5ef3f139a0e3c/spek/5ef3f139a0e3c.html', '../upload/5ef3f139a0e3c/deskripsi/5ef3f139a0e3c.html', ''),
(11, 'Anoa 6x6 Mortar', 'Kendaraan Khusus', '6 x 6 Anoa', '5ef3f9a36d5f9-1.jpg-2.jpg', '', '../upload/5ef3f9a36d5f9/spek/5ef3f9a36d5f9.html', '../upload/5ef3f9a36d5f9/deskripsi/5ef3f9a36d5f9.html', ''),
(15, 'SPR-4', 'Senjata', 'Sniper Rifles', '5ef54a59cceb2-1.jpeg', '', '../upload/5ef54a59cceb2/spek/5ef54a59cceb2.html', '../upload/5ef54a59cceb2/deskripsi/5ef54a59cceb2.html', ''),
(16, 'SS2-V7 Subsonic', 'Senjata', 'Rifles', '5ef54d1948518-1.png', '', '../upload/5ef54d1948518/spek/5ef54d1948518.html', '../upload/5ef54d1948518/deskripsi/5ef54d1948518.html', ''),
(17, 'SM2 V2 Kal. 7.62mm', 'Senjata', 'Machine Guns', '5ef54da934fbf-1.jpg-2.jpg', '', '../upload/5ef54da934fbf/spek/5ef54da934fbf.html', '../upload/5ef54da934fbf/deskripsi/5ef54da934fbf.html', ''),
(18, 'SPG1-V4 Cal. 40 mm', 'Senjata', 'Grenade Launcher', '5ef54e1dd6f3d-1.jpg-2.jpg', '', '../upload/5ef54e1dd6f3d/spek/5ef54e1dd6f3d.html', '../upload/5ef54e1dd6f3d/deskripsi/5ef54e1dd6f3d.html', ''),
(19, 'SB-1 V1 Kal. 7.62 mm', 'Senjata', 'Rifles', '5ef91ec686f98-1.jpg-2.jpg', '', '../upload/5ef91ec686f98/spek/5ef91ec686f98.html', '../upload/5ef91ec686f98/deskripsi/5ef91ec686f98.html', ''),
(20, 'SB1-V2 Kal. 7.62 mm', 'Senjata', 'Rifles', '5ef91f18bf1f2-1.jpg-2.jpg', '', '../upload/5ef91f18bf1f2/spek/5ef91f18bf1f2.html', '../upload/5ef91f18bf1f2/deskripsi/5ef91f18bf1f2.html', ''),
(21, 'TEST EDIT GAMBAR', 'Munisi', 'Small Caliber', '5efb3b93ed4ef-1.jpg', '', '../upload/5efb3b93ed4ef/spek/5efb3b93ed4ef.html', '../upload/5efb3b93ed4ef/deskripsi/5efb3b93ed4ef.html', ''),
(22, 'Mortar Kaliber 60mm', 'Munisi', 'Big Caliber', '5efb3c5159689-1.jpg-2.jpg', '', '../upload/5efb3c5159689/spek/5efb3c5159689.html', '../upload/5efb3c5159689/deskripsi/5efb3c5159689.html', ''),
(23, 'Komodo 4x4 Missile Launcher', 'Kendaraan Khusus', '4 x 4 Komodo', '5efb3f1bb7f6c-1.png', '', '../upload/5efb3f1bb7f6c/spek/5efb3f1bb7f6c.html', '../upload/5efb3f1bb7f6c/deskripsi/5efb3f1bb7f6c.html', ''),
(25, 'Motor Traksi', 'Peralatan Industri dan Jasa', 'Electric Machines', '5efb4609d18b9-1.jpg', '', '../upload/5efb4609d18b9/spek/5efb4609d18b9.html', '../upload/5efb4609d18b9/deskripsi/5efb4609d18b9.html', ''),
(26, 'Pindad TPS (Tongkang Penjebak Sampah)', 'Peralatan Industri dan Jasa', 'Agricultural Equipments', '5efb46a4b49a6-1.jpg', '', '../upload/5efb46a4b49a6/spek/5efb46a4b49a6.html', '../upload/5efb46a4b49a6/deskripsi/5efb46a4b49a6.html', ''),
(27, 'BERITA PINDAD VOL. 6 EDISI DESEMBER 2019', 'Majalah', 'Bulletin', '../upload/5efb492e974c9/gambar/1.jpg', '', '', '../upload/5efb492e974c9/deskripsi/5efb492e974c9.html', '../upload/5efb492e974c9/download/5efb492e974c9.pdf'),
(28, 'Panglima Tentera Darat Malaysia Visit', 'Gallery', '', '5efbb62473dc8-1.jpg', '', '', '../upload/5efbb62473dc8/deskripsi/5efbb62473dc8.html', ''),
(29, 'Pindad Ikuti BUMNIS Gathering dan Workshop 2019', 'Gallery', '', '5efbb656287e4-1.jpg', '', '', '../upload/5efbb656287e4/deskripsi/5efbb656287e4.html', ''),
(30, 'Pindad Memperingati Hari Sumpah Pemuda 2019', 'Gallery', '', '5efbb6e92baaf-1.jpeg', '', '', '../upload/5efbb6e92baaf/deskripsi/5efbb6e92baaf.html', ''),
(31, 'PKBL Pindad Selenggarakan Layanan Kesehatan untuk Veteran', 'Gallery', '', '5efbb71061d89-1.jpg', '', '', '../upload/5efbb71061d89/deskripsi/5efbb71061d89.html', ''),
(32, 'Pindad Sabet 2 Juara dalam BusinessNews Awards 2019', 'Gallery', '', '5efbb72dd5e8c-1.jpeg', '', '', '../upload/5efbb72dd5e8c/deskripsi/5efbb72dd5e8c.html', ''),
(33, 'Catalog of Industrial Products (All Products)', 'Katalog dan Brosur', '', '../upload/5efbb964d7b31/gambar/1.jpg', '', '', '../upload/5efbb964d7b31/deskripsi/5efbb964d7b31.html', '../upload/5efbb964d7b31/download/5efbb964d7b31.pdf'),
(34, 'Jasa Tempa', 'Infrastruktur Perhubungan', 'Forging', '5efbbc9772c40-1.jpg-2.jpg-3.jpg-4.jpg', '', '../upload/5efbbc9772c40/spek/5efbbc9772c40.html', '../upload/5efbbc9772c40/deskripsi/5efbbc9772c40.html', ''),
(35, 'Shaft Fine Impactor', 'Infrastruktur Perhubungan', 'Casting', '5efbbcfc16068-1.jpg', '', '../upload/5efbbcfc16068/spek/5efbbcfc16068.html', '../upload/5efbbcfc16068/deskripsi/5efbbcfc16068.html', ''),
(36, 'Air Brake System Type G', 'Infrastruktur Perhubungan', 'Railway Equipment', '5efbbd1e393ea-1.jpg', '', '../upload/5efbbd1e393ea/spek/5efbbd1e393ea.html', '../upload/5efbbd1e393ea/deskripsi/5efbbd1e393ea.html', ''),
(37, ' Sludge Crane', 'Infrastruktur Perhubungan', 'Ship Equipment', '5efbbd80b8678-1.png', '', '../upload/5efbbd80b8678/spek/5efbbd80b8678.html', '../upload/5efbbd80b8678/deskripsi/5efbbd80b8678.html', ''),
(38, 'geoPENTOSEIS (SEISMIC EXPLOSIVE)', 'Layanan Pertambangan', 'Explosive', '5efbbde56a68a-1.jpg-2.jpg', '', '../upload/5efbbde56a68a/spek/5efbbde56a68a.html', '../upload/5efbbde56a68a/deskripsi/5efbbde56a68a.html', ''),
(39, 'Pemusnahan Bahan Peledak', 'Layanan Pertambangan', 'Explosive Services', '5efbbe182cb7b-1.jpg-2.jpg', '', '../upload/5efbbe182cb7b/spek/5efbbe182cb7b.html', '../upload/5efbbe182cb7b/deskripsi/5efbbe182cb7b.html', ''),
(41, 'Certification', 'Cyber Security', '', '5efbc00fc8f4d-1.png', '', '../upload/5efbc00fc8f4d/spek/5efbc00fc8f4d.html', '../upload/5efbc00fc8f4d/deskripsi/5efbc00fc8f4d.html', ''),
(42, 'Mobile Sterilization Chamber', 'Produk Anak Perusahaan', 'PT.PEI', '5efbc19fcf138-1.png-2.jpg', '', '../upload/5efbc19fcf138/spek/5efbc19fcf138.html', '../upload/5efbc19fcf138/deskripsi/5efbc19fcf138.html', ''),
(43, 'PG TZ1', 'Produk Anak Perusahaan', 'PT. PGST', '5efbc1d4b9d8c-1.png', '', '../upload/5efbc1d4b9d8c/spek/5efbc1d4b9d8c.html', '../upload/5efbc1d4b9d8c/deskripsi/5efbc1d4b9d8c.html', ''),
(44, 'Rumah Sakit Pindad', 'Produk Anak Perusahaan', 'PT. PMU', '5efbc2281fb0d-1.jpg-2.jpg-3.jpg', '', '../upload/5efbc2281fb0d/spek/5efbc2281fb0d.html', '../upload/5efbc2281fb0d/deskripsi/5efbc2281fb0d.html', ''),
(45, 'ANNUAL REPORT 2019', 'Annual Report', '', '../upload/5efbdaa9071d2/gambar/1.jpg', '', '', '../upload/5efbdaa9071d2/deskripsi/5efbdaa9071d2.html', '../upload/5efbdaa9071d2/download/5efbdaa9071d2.pdf'),
(46, 'Penghargaan kategori TOP IT Implementation on Manufacture Sector 2017', 'Achievement', '', '5efbdd7e8125b-1.jpg', '', '', '../upload/5efbdd7e8125b/deskripsi/5efbdd7e8125b.html', ''),
(47, 'Excava 200', 'Alat Berat', '', '5efc33833f2ce-1.jpg-2.jpg-3.jpg', 'https://youtu.be/xbkuZwJqCA8', '../upload/5efc33833f2ce/spek/5efc33833f2ce.html', '../upload/5efc33833f2ce/deskripsi/5efc33833f2ce.html', ''),
(48, 'SS2-V2 HB Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc37c704089-1.jpg-2.jpg', '', '../upload/5efc37c704089/spek/5efc37c704089.html', '../upload/5efc37c704089/deskripsi/5efc37c704089.html', ''),
(49, 'SS2-V1 HB Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc380e2007b-1.jpg', '', '../upload/5efc380e2007b/spek/5efc380e2007b.html', '../upload/5efc380e2007b/deskripsi/5efc380e2007b.html', ''),
(50, 'SS1-M2 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc38710f609-1.jpg-2.jpg', '', '../upload/5efc38710f609/spek/5efc38710f609.html', '../upload/5efc38710f609/deskripsi/5efc38710f609.html', ''),
(51, 'SS2-V5 A1 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc38fd75d7d-1.jpg-2.jpg', '', '../upload/5efc38fd75d7d/spek/5efc38fd75d7d.html', '../upload/5efc38fd75d7d/deskripsi/5efc38fd75d7d.html', ''),
(52, 'SS2-V4 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc397c32ccb-1.jpg-2.jpg', '', '../upload/5efc397c32ccb/spek/5efc397c32ccb.html', '../upload/5efc397c32ccb/deskripsi/5efc397c32ccb.html', ''),
(53, 'SS2-V1 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3af761e65-1.jpg', '', '../upload/5efc3af761e65/spek/5efc3af761e65.html', '../upload/5efc3af761e65/deskripsi/5efc3af761e65.html', ''),
(54, 'SS2-V2 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3b570d1ad-1.jpg', '', '../upload/5efc3b570d1ad/spek/5efc3b570d1ad.html', '../upload/5efc3b570d1ad/deskripsi/5efc3b570d1ad.html', ''),
(55, 'SS1-R5 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3bb49735d-1.jpg-2.jpg', '', '../upload/5efc3bb49735d/spek/5efc3bb49735d.html', '../upload/5efc3bb49735d/deskripsi/5efc3bb49735d.html', ''),
(56, 'SS1-V5 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3c1a8a88d-1.jpg-2.jpg', '', '../upload/5efc3c1a8a88d/spek/5efc3c1a8a88d.html', '../upload/5efc3c1a8a88d/deskripsi/5efc3c1a8a88d.html', ''),
(57, 'SS1-V2 Kal. 5,56 mm', 'Senjata', 'Rifles', '5efc3ceb510fc-1.jpg-2.jpg', '', '../upload/5efc3ceb510fc/spek/5efc3ceb510fc.html', '../upload/5efc3ceb510fc/deskripsi/5efc3ceb510fc.html', ''),
(58, 'SS1-V1 Kal. 5,56 mm', 'Senjata', 'Rifles', '5efc3dbb05b0b-1.jpg-2.jpg', '', '../upload/5efc3dbb05b0b/spek/5efc3dbb05b0b.html', '../upload/5efc3dbb05b0b/deskripsi/5efc3dbb05b0b.html', ''),
(59, 'SS2-V4 HB Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3e2e834c9-1.jpg-2.jpg', '', '../upload/5efc3e2e834c9/spek/5efc3e2e834c9.html', '../upload/5efc3e2e834c9/deskripsi/5efc3e2e834c9.html', ''),
(60, 'SS2-V5 Kal. 5.56 mm', 'Senjata', 'Rifles', '5efc3eb756cc0-1.jpg-2.jpg', '', '../upload/5efc3eb756cc0/spek/5efc3eb756cc0.html', '../upload/5efc3eb756cc0/deskripsi/5efc3eb756cc0.html', ''),
(61, 'SS3', 'Senjata', 'Rifles', '5efc3ee997b96-1.png', '', '../upload/5efc3ee997b96/spek/5efc3ee997b96.html', '../upload/5efc3ee997b96/deskripsi/5efc3ee997b96.html', ''),
(62, 'SPR-3 Kal. 7.62 mm', 'Senjata', 'Sniper Rifles', '5efc3f313410a-1.jpg-2.jpg', '', '../upload/5efc3f313410a/spek/5efc3f313410a.html', '../upload/5efc3f313410a/deskripsi/5efc3f313410a.html', ''),
(63, 'SPR-2 Kal. 12.7 mm', 'Senjata', 'Sniper Rifles', '5efc40174eef9-1.jpg-2.png', '', '../upload/5efc40174eef9/spek/5efc40174eef9.html', '../upload/5efc40174eef9/deskripsi/5efc40174eef9.html', ''),
(64, 'SM2 V1 Kal.7.62 mm', 'Senjata', 'Machine Guns', '5efc417c69644-1.jpg-2.jpg', '', '../upload/5efc417c69644/spek/5efc417c69644.html', '../upload/5efc417c69644/deskripsi/5efc417c69644.html', ''),
(65, 'SPG1-V3 Kal. 40 mm', 'Senjata', 'Grenade Launcher', '5efc41d8f2d23-1.jpg', '', '../upload/5efc41d8f2d23/spek/5efc41d8f2d23.html', '../upload/5efc41d8f2d23/deskripsi/5efc41d8f2d23.html', ''),
(66, 'SPG1-V2 Kal. 40 mm', 'Senjata', 'Grenade Launcher', '5efc420b55d47-1.jpg', '', '../upload/5efc420b55d47/spek/5efc420b55d47.html', '../upload/5efc420b55d47/deskripsi/5efc420b55d47.html', ''),
(67, 'SAR-2 Kal 38 mm', 'Senjata', 'Grenade Launcher', '5efc42587b09e-1.jpg-2.jpg', '', '../upload/5efc42587b09e/spek/5efc42587b09e.html', '../upload/5efc42587b09e/deskripsi/5efc42587b09e.html', ''),
(68, 'Mo-2 Kal. 60 mm LR', 'Senjata', 'Mortir', '5efc429da3db6-1.jpg', '', '../upload/5efc429da3db6/spek/5efc429da3db6.html', '../upload/5efc429da3db6/deskripsi/5efc429da3db6.html', ''),
(69, 'Mo-3 Kal. 81 mm', 'Senjata', 'Mortir', '5efc42cb20158-1.jpg', '', '../upload/5efc42cb20158/spek/5efc42cb20158.html', '../upload/5efc42cb20158/deskripsi/5efc42cb20158.html', ''),
(70, 'G2 Premium kal. 9mm', 'Senjata', 'Pistols', '5efc431c87f79-1.jpg', '', '../upload/5efc431c87f79/spek/5efc431c87f79.html', '../upload/5efc431c87f79/deskripsi/5efc431c87f79.html', ''),
(71, 'MAG4', 'Senjata', 'Pistols', '5efc4359dde28-1.jpg-2.jpg-3.jpg', '', '../upload/5efc4359dde28/spek/5efc4359dde28.html', '../upload/5efc4359dde28/deskripsi/5efc4359dde28.html', ''),
(72, 'G2 COMBAT Kal. 9 mm', 'Senjata', 'Pistols', '5efc43a457aa1-1.jpg-2.jpg', '', '../upload/5efc43a457aa1/spek/5efc43a457aa1.html', '../upload/5efc43a457aa1/deskripsi/5efc43a457aa1.html', ''),
(73, 'G2 ELITE Kal. 9 mm', 'Senjata', 'Pistols', '5efc43f8b63bc-1.jpg-2.jpg-3.jpg-4.jpg', '', '../upload/5efc43f8b63bc/spek/5efc43f8b63bc.html', '../upload/5efc43f8b63bc/deskripsi/5efc43f8b63bc.html', ''),
(74, 'P-3A Kal. 7.65 mm', 'Senjata', 'Pistols', '5efc447bb4865-1.jpg-2.jpg-3.jpg', '', '../upload/5efc447bb4865/spek/5efc447bb4865.html', '../upload/5efc447bb4865/deskripsi/5efc447bb4865.html', ''),
(75, 'SG-1 12 GAUGE', 'Senjata', 'Shotguns', '5efc44ab79961-1.jpg', '', '../upload/5efc44ab79961/spek/5efc44ab79961.html', '../upload/5efc44ab79961/deskripsi/5efc44ab79961.html', ''),
(76, 'PM3', 'Senjata', 'Submachine Guns', '5efc44f352627-1.png', '', '../upload/5efc44f352627/spek/5efc44f352627.html', '../upload/5efc44f352627/deskripsi/5efc44f352627.html', ''),
(77, 'PM2-V1 Kal. 9 mm', 'Senjata', 'Submachine Guns', '5efc453304ef6-1.jpg', '', '../upload/5efc453304ef6/spek/5efc453304ef6.html', '../upload/5efc453304ef6/deskripsi/5efc453304ef6.html', ''),
(78, 'PM2-V2 Kal. 9 mm', 'Senjata', 'Submachine Guns', '5efc456239735-1.jpg', '', '../upload/5efc456239735/spek/5efc456239735.html', '../upload/5efc456239735/deskripsi/5efc456239735.html', ''),
(79, ' Komodo 4x4 Battering Ram', 'Kendaraan Khusus', '4 x 4 Komodo', '5efc4675d2dae-1.jpg', '', '../upload/5efc4675d2dae/spek/5efc4675d2dae.html', '../upload/5efc4675d2dae/deskripsi/5efc4675d2dae.html', ''),
(80, 'Komodo 4x4 APC Police', 'Kendaraan Khusus', '4 x 4 Komodo', '5efc46c88513b-1.jpg-2.jpg', '', '../upload/5efc46c88513b/spek/5efc46c88513b.html', '../upload/5efc46c88513b/deskripsi/5efc46c88513b.html', ''),
(81, 'Komodo 4x4 Recon', 'Kendaraan Khusus', '4 x 4 Komodo', '5efc4723da14e-1.jpg', '', '../upload/5efc4723da14e/spek/5efc4723da14e.html', '../upload/5efc4723da14e/deskripsi/5efc4723da14e.html', ''),
(82, 'Anoa 6x6 Command', 'Kendaraan Khusus', '6 x 6 Anoa', '5efc475c11423-1.jpg', '', '../upload/5efc475c11423/spek/5efc475c11423.html', '../upload/5efc475c11423/deskripsi/5efc475c11423.html', ''),
(83, 'Anoa 6x6 Amphibious', 'Kendaraan Khusus', '6 x 6 Anoa', '5efc47b753e7e-1.jpg', '', '../upload/5efc47b753e7e/spek/5efc47b753e7e.html', '../upload/5efc47b753e7e/deskripsi/5efc47b753e7e.html', ''),
(84, 'Badak 6x6', 'Kendaraan Khusus', '6 x 6 Anoa', '5efc6abfc9040-1.jpg', '', '../upload/5efc6abfc9040/spek/5efc6abfc9040.html', '../upload/5efc6abfc9040/deskripsi/5efc6abfc9040.html', ''),
(85, ' Harimau Medium Tank', 'Kendaraan Khusus', '6 x 6 Anoa', '5efc6b566ba68-1.png', '', '../upload/5efc6b566ba68/spek/5efc6b566ba68.html', '../upload/5efc6b566ba68/deskripsi/5efc6b566ba68.html', ''),
(86, 'Distributor Valve KE2cSL', 'Infrastruktur Perhubungan', 'Railway Equipment', '5efc6f15a6bb4-1.jpg', '', '../upload/5efc6f15a6bb4/spek/5efc6f15a6bb4.html', '../upload/5efc6f15a6bb4/deskripsi/5efc6f15a6bb4.html', ''),
(87, 'Excava 200 Amphibious', 'Alat Berat', '', '5efc700e3371b-1.jpg-2.jpg-3.jpg', 'https://youtu.be/D0dvRJVbKOU', '../upload/5efc700e3371b/spek/5efc700e3371b.html', '../upload/5efc700e3371b/deskripsi/5efc700e3371b.html', ''),
(88, 'Generator', 'Peralatan Industri dan Jasa', 'Electric Machines', '5efc70b62a95e-1.jpg', '', '../upload/5efc70b62a95e/spek/5efc70b62a95e.html', '../upload/5efc70b62a95e/deskripsi/5efc70b62a95e.html', ''),
(89, 'Traktor Roda Empat PTM-45', 'Alat Berat', '', '5efc71c7cfee2-1.png', '', '../upload/5efc71c7cfee2/spek/5efc71c7cfee2.html', '../upload/5efc71c7cfee2/deskripsi/5efc71c7cfee2.html', ''),
(90, 'Provision Crane', 'Alat Berat', '', '5efc725331ce3-1.png-2.png', '', '../upload/5efc725331ce3/spek/5efc725331ce3.html', '../upload/5efc725331ce3/deskripsi/5efc725331ce3.html', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(99) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_admin`, `username`, `password`) VALUES
(1, 'Nafi\'ul Anam', 'namlim1', 'anam1234'),
(2, 'Khoirul Anam', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
