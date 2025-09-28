-- --------------------------------------------------------
-- Gazdagép:                     127.0.0.1
-- Szerver verzió:               8.4.6 - MySQL Community Server - GPL
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Adatbázis struktúra mentése a kanalazz.
CREATE DATABASE IF NOT EXISTS `kanalazz` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kanalazz`;

-- Struktúra mentése tábla kanalazz. etel_kategoria
CREATE TABLE IF NOT EXISTS `etel_kategoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `megnevezes` varchar(100) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `sorrend` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- Tábla adatainak mentése kanalazz.etel_kategoria: ~3 rows (hozzávetőleg)
INSERT INTO `etel_kategoria` (`id`, `megnevezes`, `sorrend`) VALUES
	(1, 'Leves', 1),
	(2, 'Főétel', 2),
	(3, 'Desszert', 3);

-- Struktúra mentése tábla kanalazz. etlap
CREATE TABLE IF NOT EXISTS `etlap` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategoria` enum('foetel','desszert') COLLATE utf8mb4_hungarian_ci NOT NULL,
  `nev` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ar` int NOT NULL,
  `leiras` text COLLATE utf8mb4_hungarian_ci,
  `kep` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `etel_kategoria_id` int NOT NULL,
  PRIMARY KEY (`id`,`etel_kategoria_id`),
  KEY `fk_etlap_etel_kategoria_idx` (`etel_kategoria_id`),
  CONSTRAINT `fk_etlap_etel_kategoria` FOREIGN KEY (`etel_kategoria_id`) REFERENCES `etel_kategoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- Tábla adatainak mentése kanalazz.etlap: ~15 rows (hozzávetőleg)
INSERT INTO `etlap` (`id`, `kategoria`, `nev`, `ar`, `leiras`, `kep`, `etel_kategoria_id`) VALUES
	(1, 'foetel', 'Pizza', 3200, 'Frissen sült olasz pizza ropogós tésztával, mozzarella sajttal és paradicsomszósszal.', 'img/pizza.jpg', 2),
	(2, 'foetel', 'Gyros', 2900, 'Puhára sült fűszeres hús, friss zöldségekkel és joghurtos szósszal pitában tálalva.', 'img/gyros.jpg', 2),
	(3, 'foetel', 'Hamburger', 3300, 'Grillezett marhahúsos burger friss zöldségekkel, sajttal, buci közé fogva.', 'img/hamburger.jpg', 2),
	(4, 'foetel', 'Lecsó', 2400, 'Hagyományos magyar lecsó paprika, paradicsom és kolbász felhasználásával.', 'img/lecso.jpg', 2),
	(5, 'foetel', 'Mediterrán paradicsomos tészta', 2700, 'Spagetti gazdag paradicsomszósszal, bazsalikommal, fokhagymával és olívaolajjal.', 'img/pasta.jpg', 2),
	(6, 'foetel', 'Töltött cukkini csirkével és paradicsommal', 2900, 'Sütőben sült cukkini csirkemell darált hússal, fűszeres paradicsomszósszal töltve.', 'img/stuffed-zucchini-with-chicken-tomatoes-olives-with-cheese-crust.jpg', 2),
	(7, 'foetel', 'Vöröslencse krémleves pirított morzsával és citrommal', 1690, 'Selymes, fűszeres vöröslencse krémleves, tetején friss citromszelettel és ropogós pirított morzsával tálalva.', 'img/red-lentil-soup-with-slice-lemon-breadcrumbs.jpg', 1),
	(8, 'desszert', 'Somlói galuska', 2200, 'Hagyományos magyar édesség, piskóta, dió, csokiöntet és tejszínhab kombinációja.', 'img/somloi.png', 3),
	(9, 'desszert', 'Palacsinta', 1800, 'Puhára sült, vastag amerikai palacsintatorony, aranybarnára pirítva, kívül enyhén ropogós, belül lágy és levegős.', 'img/palacsinta.jpeg', 3),
	(10, 'desszert', 'Túrós rétes', 1600, 'Légies rétestészta túrós töltelékkel.', 'img/turosretes.png', 3),
	(11, 'desszert', 'Csokoládétorta', 2400, 'Selymes, gazdag csokoládétorta, ganache bevonattal.', 'img/csokitorta.png', 3),
	(12, 'desszert', 'Madártej', 1900, 'Vaníliás tejkrém habbal a tetején – klasszikus magyar édesség.', 'img/madartej.png', 3),
	(13, 'desszert', 'Churros', 1500, 'Ropogósra sült spanyol fánk, fahéjas cukorba forgatva, csokoládéöntettel tálalva.', 'img/churros-2188871_640.jpg', 3),
	(14, 'desszert', 'Fagylalt', 1200, 'Házi készítésű fagylalt különféle ízekben: vanília, csokoládé, eper, pisztácia.', 'img/food-photography-8683787_640.jpg', 3),
	(15, 'desszert', 'Gâteau au chocolat', 2600, 'Lágy, francia stílusú csokoládétorta, belül olvadt maggal – egy igazi különlegesség.', 'img/gateau.jpg', 3);

-- Struktúra mentése tábla kanalazz. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Tábla adatainak mentése kanalazz.users: ~1 rows (hozzávetőleg)
INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
	(1, 'admin', '$2b$12$/dnqNj8VwbgM/C8Hd4pX9eR4Jm.kRSXUsuW4AUGAoxGKksPwk8usm', 'Adminisztrátor');

-- Struktúra mentése tábla kanalazz. uzenetek
CREATE TABLE IF NOT EXISTS `uzenetek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `targy` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `uzenet` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `idopont` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `letszam` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `bekuldve` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- Tábla adatainak mentése kanalazz.uzenetek: ~2 rows (hozzávetőleg)
INSERT INTO `uzenetek` (`id`, `nev`, `email`, `targy`, `uzenet`, `idopont`, `letszam`, `bekuldve`) VALUES
	(1, 'Kozma Zoltán', 'zoltankozma10@gmail.com', 'Asztalfoglalás értesítés', 'helloo', '', '', '2025-09-07 13:13:19'),
	(2, 'Kozma Zoltán', 'valami@gmail.com', 'Asztalfoglalás értesítés', 'haliii', '18:30', '1-2', '2025-09-08 15:16:22'),
	(3, 'enter your first name', 'elkjgelj@gmail.com', 'Asztalfoglalás értesítés', 'kljlkjlj', '18:30', '4plus', '2025-09-08 17:57:23'),
	(4, 'Kozma Zoltán', 'zoltankozma10@gmail.com', '', 'lkjlkj', '18:30', '1-2', '2025-09-21 18:49:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
