-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Ağu 2020, 15:56:00
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hazem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `diger`
--

CREATE TABLE `diger` (
  `id` int(11) NOT NULL,
  `arkaplan` varchar(2000) COLLATE utf32_turkish_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `hakkimda` longtext COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `diger`
--

INSERT INTO `diger` (`id`, `arkaplan`, `facebook`, `instagram`, `twitter`, `gmail`, `hakkimda`) VALUES
(1, '13.jpg', 'https://www.facebook.com/abomoheeb273', 'https://www.instagram.com/hazem.shallaf/', 'https://twitter.com/abomoheb5hm', 'hazem.shallaf@gmail.com', 'benim adım hazem al shallaf 23 yaşındayım bilgisayar programcılığım suriyeliyim üç dilim var (arapça , inglizçe ve türkçe) , erzincan binali yıldırım üniversitesinin tercan meslek yüksek okulunda okudum \r\nphp , html , java , c# ve c++ yazılım dilleri biliyorum ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `Kullanici_ID` int(11) NOT NULL,
  `Kullanici_Adı` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `Sifre` varchar(50) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`Kullanici_ID`, `Kullanici_Adı`, `Sifre`) VALUES
(1, 'hazem', '12345'),
(10, 'adham', '54321');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `uruntur_id` int(11) NOT NULL,
  `içerik` varchar(300) COLLATE utf32_turkish_ci NOT NULL,
  `resim` varchar(1000) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `uruntur_id`, `içerik`, `resim`) VALUES
(14, 'Kişisek Web Sitesi ', 1, 'kişisel web sitesi içerisinde ürünler, iletişim , ana sayfa , yönetim paneli ve veri tabanı vardır', 'site.png'),
(15, 'matematik oyun', 2, 'android için basit bir oyun en başta basit soruları geliyor ve sorular zor oluyor bu oyun android studior ve java dili ile programlamıştım', 'faswdadw.png'),
(16, 'şark kelimeleri ', 2, 'bu program şarkı adı giriyorsun şarkı kelimeleri çıkıyor bu program android studior ve java dili ile programlamıştım', 'dsa.png'),
(17, 'üniversite magazin ', 1, 'hocalar , öğrenciler ve genel kullanıcılar haberler paylaşabiliyor ve haberlerde yorum yapabiliyor bu site php ve html dili ile yazdım ', 'dwadsaw.png'),
(18, 'ev tasarım ', 5, 'sketchup program ile ev tasarladım ', 'ev jpeg.JPG');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uruntur`
--

CREATE TABLE `uruntur` (
  `uruntur_id` int(11) NOT NULL,
  `uruntur_adi` varchar(50) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `uruntur`
--

INSERT INTO `uruntur` (`uruntur_id`, `uruntur_adi`) VALUES
(1, 'yazılım php'),
(2, 'android '),
(3, 'yazılım java'),
(4, 'yazılım c#'),
(5, 'sketchup');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `diger`
--
ALTER TABLE `diger`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`Kullanici_ID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `uruntur`
--
ALTER TABLE `uruntur`
  ADD PRIMARY KEY (`uruntur_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `diger`
--
ALTER TABLE `diger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `Kullanici_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `uruntur`
--
ALTER TABLE `uruntur`
  MODIFY `uruntur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
