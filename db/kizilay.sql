-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Haz 2019, 17:25:48
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kizilay`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

DROP TABLE IF EXISTS `il`;
CREATE TABLE IF NOT EXISTS `il` (
  `il_id` int(81) NOT NULL,
  `il_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`il_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `il`
--

INSERT INTO `il` (`il_id`, `il_adi`) VALUES
(26, 'Eskişehir'),
(20, 'Denizli'),
(17, 'Çanakkale'),
(14, 'Bolu'),
(1, 'Adana'),
(31, 'Hatay'),
(32, 'Isparta'),
(34, 'İstanbul'),
(35, 'İzmir'),
(41, 'Kocaeli'),
(48, 'Muğla'),
(50, 'Nevşehir'),
(52, 'Ordu'),
(53, 'Rize'),
(55, 'Samsun'),
(61, 'Trabzon'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yalova'),
(67, 'Zonguldak');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

DROP TABLE IF EXISTS `ilce`;
CREATE TABLE IF NOT EXISTS `ilce` (
  `ilce_id` int(50) NOT NULL,
  `ilce_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ilce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilce`
--

INSERT INTO `ilce` (`ilce_id`, `ilce_adi`) VALUES
(2, 'Bergama'),
(1, 'Alsancak'),
(3, 'Buca'),
(4, 'Çiğli'),
(5, 'Gaziemir'),
(6, 'Ödemiş'),
(8, 'Konak'),
(9, 'Torbalı'),
(10, 'Üçkuyular');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce_sube`
--

DROP TABLE IF EXISTS `ilce_sube`;
CREATE TABLE IF NOT EXISTS `ilce_sube` (
  `ilce_id` int(50) NOT NULL,
  `sube_id` int(50) NOT NULL,
  UNIQUE KEY `ilce_id` (`ilce_id`,`sube_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il_ilce`
--

DROP TABLE IF EXISTS `il_ilce`;
CREATE TABLE IF NOT EXISTS `il_ilce` (
  `il_id` int(50) NOT NULL,
  `ilce_id` int(50) NOT NULL,
  UNIQUE KEY `il_id` (`il_id`,`ilce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_cevap`
--

DROP TABLE IF EXISTS `kullanici_cevap`;
CREATE TABLE IF NOT EXISTS `kullanici_cevap` (
  `cevap_id` int(50) NOT NULL,
  `soru_id` int(50) NOT NULL,
  `tc_kimlik` bigint(20) NOT NULL,
  PRIMARY KEY (`cevap_id`),
  UNIQUE KEY `soru_id` (`soru_id`,`tc_kimlik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

DROP TABLE IF EXISTS `randevu`;
CREATE TABLE IF NOT EXISTS `randevu` (
  `randevu_id` int(50) NOT NULL AUTO_INCREMENT,
  `il_id` int(81) NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `sube_id` int(50) NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL,
  PRIMARY KEY (`randevu_id`),
  UNIQUE KEY `tc_kimlik` (`ilce_id`,`sube_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `il_id`, `ilce_id`, `sube_id`, `tarih`, `saat`) VALUES
(1, 35, 1, 1, '2018-11-29', '13:50:00'),
(2, 35, 4, 4, '2018-12-04', '14:20:00'),
(3, 35, 9, 9, '2018-12-06', '10:00:00'),
(4, 14, 3, 5, '2018-12-12', '13:30:00'),
(5, 17, 4, 2, '2018-12-13', '09:50:00'),
(6, 50, 2, 7, '2018-12-14', '11:15:00'),
(7, 32, 6, 7, '2018-12-14', '13:05:00'),
(8, 48, 5, 6, '2018-12-23', '09:10:00'),
(9, 61, 3, 3, '2018-12-23', '11:40:00'),
(10, 14, 2, 8, '2018-12-23', '16:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru`
--

DROP TABLE IF EXISTS `soru`;
CREATE TABLE IF NOT EXISTS `soru` (
  `soru_id` int(50) NOT NULL AUTO_INCREMENT,
  `tc_kimlik` bigint(20) NOT NULL,
  `ad_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `baba_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `dogum_yeri` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` text COLLATE utf8_turkish_ci NOT NULL,
  `medeni_hal` text COLLATE utf8_turkish_ci NOT NULL,
  `egitim_durumu` text COLLATE utf8_turkish_ci NOT NULL,
  `meslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kan_bagisi_gecmisi` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ev_no` bigint(11) NOT NULL,
  `is_no` bigint(11) NOT NULL,
  `cep_no` bigint(11) NOT NULL,
  `bilgilendirme_isteme` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`soru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `soru`
--

INSERT INTO `soru` (`soru_id`, `tc_kimlik`, `ad_soyad`, `baba_adi`, `dogum_tarihi`, `dogum_yeri`, `cinsiyet`, `medeni_hal`, `egitim_durumu`, `meslek`, `kan_bagisi_gecmisi`, `adres`, `ev_no`, `is_no`, `cep_no`, `bilgilendirme_isteme`) VALUES
(61, 84855555555, 'Can Deöir', 'Ali', '2018-12-05', '17', 'Erkek', 'Bekar', 'Doktora', 'jh', ' İlk Kez Kan Bağışlıyorum.', 'hjgjy', 25555555555, 55555555555, 55555555555, 'EVET'),
(60, 54845415587, 'Özlem', 'Demir', '1994-03-17', '34', 'Kadın', 'Bekar', 'Doktora', 'Öğrenci', ' İlk Kez Kan Bağışlıyorum.', 'Torbalı', 23254848545, 23254878887, 53848622554, 'EVET'),
(59, 54858487478, 'Ahmet', 'Ayyıldız', '1991-09-12', '26', 'Erkek', 'Evli', 'Ortaokul', 'Esnaf', ' İlk Kez Kan Bağışlıyorum.', 'Mahmudiye', 22258478668, 22287876796, 53785468763, 'EVET'),
(58, 54854845415, 'Şule', 'Çelik', '1995-10-16', '26', 'Kadın', 'Evli', 'Lisans', 'Memur', ' İlk Kez Kan Bağışlıyorum.', 'İnönü', 22254585458, 22288974854, 53745646584, 'EVET'),
(57, 54854854554, 'Aynur', 'Karademir', '1992-03-17', '35', 'Kadın', 'Bekar', 'Doktora', 'Öğrenci', 'Önce Kan Bağışı Yaptım.', 'Çiğli', 23254554154, 23258487487, 53848454541, 'EVET'),
(56, 44854854541, 'Emre', 'Albayrak', '1986-08-12', '17', 'Erkek', 'Evli', 'Ortaokul', 'Esnaf', ' İlk Kez Kan Bağışlıyorum.', 'Ayvacık', 28615445157, 28654515848, 53454455656, 'EVET'),
(55, 48454556211, 'Demir', 'Özdemir', '1990-07-12', '61', 'Erkek', 'Bekar', 'Lise', 'Esnaf', ' İlk Kez Kan Bağışlıyorum.', 'Araklı', 46255885457, 46254878545, 53625848545, 'EVET'),
(54, 45847584545, 'Ceyda', 'Demir', '1983-12-14', '35', 'Kadın', 'Evli', 'Yok', 'Ev Hanımı', ' İlk Kez Kan Bağışlıyorum.', 'Buca', 23287545845, 23248784545, 53658458454, 'HAYIR'),
(53, 15485748545, 'Mert Yıldız', 'Ali', '1997-09-26', '35', 'Erkek', 'Bekar', 'Önslisans', 'Öğrenci', ' İlk Kez Kan Bağışlıyorum.', 'Alsancak', 23248585454, 23248748545, 53254874854, 'EVET'),
(52, 24774454878, 'Ayşe Yılmaz', 'Veli', '1981-09-24', '1', 'Kadın', 'Evli', 'Lisans', 'Müdür', 'Önce Kan Bağışı Yaptım.', 'Seyhan', 32275458485, 32265884547, 53954844158, 'EVET'),
(51, 75185571223, 'Ali Kara', 'Cemal', '1986-09-25', '34', 'Erkek', 'Evli', 'Lisans', 'Memur', 'Önce Kan Bağışı Yaptım.', 'Şişli', 2124548712, 2123548975, 54566225658, 'HAYIR'),
(50, 14554541251, 'Eda Çelik', 'Ahmet', '1998-09-21', '35', 'Kadın', 'Bekar', 'Önslisans', 'Öğrenci', ' İlk Kez Kan Bağışlıyorum.', 'Konak', 2324856568, 2321454545, 53745412521, 'EVET');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

DROP TABLE IF EXISTS `sorular`;
CREATE TABLE IF NOT EXISTS `sorular` (
  `soru_id` int(50) NOT NULL AUTO_INCREMENT,
  `soru1` text COLLATE utf8_turkish_ci NOT NULL,
  `soru2` text COLLATE utf8_turkish_ci NOT NULL,
  `soru3` text COLLATE utf8_turkish_ci NOT NULL,
  `soru4` text COLLATE utf8_turkish_ci NOT NULL,
  `soru5` text COLLATE utf8_turkish_ci NOT NULL,
  `soru6` text COLLATE utf8_turkish_ci NOT NULL,
  `soru7` text COLLATE utf8_turkish_ci NOT NULL,
  `soru8` text COLLATE utf8_turkish_ci NOT NULL,
  `soru9` text COLLATE utf8_turkish_ci NOT NULL,
  `soru10` text COLLATE utf8_turkish_ci NOT NULL,
  `soru11` text COLLATE utf8_turkish_ci NOT NULL,
  `soru12` text COLLATE utf8_turkish_ci NOT NULL,
  `soru13` text COLLATE utf8_turkish_ci NOT NULL,
  `soru14` text COLLATE utf8_turkish_ci NOT NULL,
  `soru15` text COLLATE utf8_turkish_ci NOT NULL,
  `soru16` text COLLATE utf8_turkish_ci NOT NULL,
  `soru17` text COLLATE utf8_turkish_ci NOT NULL,
  `soru18` text COLLATE utf8_turkish_ci NOT NULL,
  `soru19` text COLLATE utf8_turkish_ci NOT NULL,
  `soru20` text COLLATE utf8_turkish_ci NOT NULL,
  `soru21` text COLLATE utf8_turkish_ci NOT NULL,
  `soru22` text COLLATE utf8_turkish_ci NOT NULL,
  `soru23` text COLLATE utf8_turkish_ci NOT NULL,
  `soru24` text COLLATE utf8_turkish_ci NOT NULL,
  `soru25` text COLLATE utf8_turkish_ci NOT NULL,
  `soru26` text COLLATE utf8_turkish_ci NOT NULL,
  `soru27` text COLLATE utf8_turkish_ci NOT NULL,
  `soru28` text COLLATE utf8_turkish_ci NOT NULL,
  `soru29` text COLLATE utf8_turkish_ci NOT NULL,
  `soru30` text COLLATE utf8_turkish_ci NOT NULL,
  `soru31` text COLLATE utf8_turkish_ci NOT NULL,
  `soru32` text COLLATE utf8_turkish_ci NOT NULL,
  `soru33` text COLLATE utf8_turkish_ci NOT NULL,
  `soru34` text COLLATE utf8_turkish_ci NOT NULL,
  `soru35` text COLLATE utf8_turkish_ci NOT NULL,
  `soru36` text COLLATE utf8_turkish_ci NOT NULL,
  `soru37` text COLLATE utf8_turkish_ci NOT NULL,
  `soru38` text COLLATE utf8_turkish_ci NOT NULL,
  `soru39` text COLLATE utf8_turkish_ci NOT NULL,
  `soru40` text COLLATE utf8_turkish_ci NOT NULL,
  `soru41` text COLLATE utf8_turkish_ci NOT NULL,
  `soru42` text COLLATE utf8_turkish_ci NOT NULL,
  `soru43` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  UNIQUE KEY `soru_id` (`soru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`soru_id`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`, `soru19`, `soru20`, `soru21`, `soru22`, `soru23`, `soru24`, `soru25`, `soru26`, `soru27`, `soru28`, `soru29`, `soru30`, `soru31`, `soru32`, `soru33`, `soru34`, `soru35`, `soru36`, `soru37`, `soru38`, `soru39`, `soru40`, `soru41`, `soru42`, `soru43`, `tarih`) VALUES
(1, 'Evet', 'Evet', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-19'),
(2, 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-11'),
(3, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-19'),
(4, 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', 'Evet', '2018-12-05'),
(5, 'Evet', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', '2018-12-22'),
(6, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-23'),
(7, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-21'),
(8, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-23'),
(9, 'Evet', 'Evet', 'Evet', 'Evet', 'Hayır', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-13'),
(10, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Evet', 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-22'),
(11, 'Evet', 'Evet', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', 'Hayır', '2018-12-13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sube`
--

DROP TABLE IF EXISTS `sube`;
CREATE TABLE IF NOT EXISTS `sube` (
  `sube_id` int(50) NOT NULL,
  `sube_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sube_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sube`
--

INSERT INTO `sube` (`sube_id`, `sube_adi`) VALUES
(1, 'Alsancak KAB'),
(2, 'Buca Kız Öğrenci Yurdu'),
(3, 'Buca Tuğvasul İlkokulu'),
(4, 'Çiğli Çelik AVM Önü'),
(5, 'Çiğli İzzet Gökçimen Ortaokulu'),
(6, 'Gaziemir KAB'),
(7, 'İZSU Ödemiş'),
(8, 'Konak Meydanı'),
(9, 'Torbalı Meydan'),
(10, 'Üçkuyular KAB');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
