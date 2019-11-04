-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Nov 04. 20:20
-- Kiszolgáló verziója: 10.1.35-MariaDB
-- PHP verzió: 7.2.9

CREATE DATABASE IF NOT EXISTS fiktivceg DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE fiktivceg;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fiktivceg`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  `jogosultsag` varchar(3) NOT NULL DEFAULT '_1_',
  PRIMARY KEY (`bejelentkezes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) VALUES
('Rendszer', 'Admin', 'Admin', 'D033E22AE348AEB5660FC2140AEC35850C4DA997', '__1'),
('Bacsa', 'Adam', 'Baad1226', 'cb662e69f9f0781d2fdb6352d516c2c19d183069', '_1_');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hirek`
--

CREATE TABLE IF NOT EXISTS `hirek` (
  `hirek_id` int(11) NOT NULL,
  `cim` varchar(30) NOT NULL,
  `hirek` varchar(4000) NOT NULL,
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `letrehozas_ideje` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`bejelentkezes`) REFERENCES felhasznalok(`bejelentkezes`),
  PRIMARY KEY (`hirek_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `hirek`
--

INSERT INTO `hirek` (`hirek_id`, `cim`, `hirek`, `bejelentkezes`, `letrehozas_ideje`) VALUES
(1, 'Teszt', 'Teszt', 'Baad1226', '2019-11-03 18:38:50'),
(2, 'Tesztelem', 'Itt egy teszt szöveg', 'Admin', '2019-11-03 20:40:49'),
(3, 'Ez', 'Az', 'Admin', '2019-11-04 18:14:41');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `szulo` varchar(30) NOT NULL,
  `jogosultsag` varchar(3) NOT NULL,
  `sorrend` tinyint(4) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`url`, `nev`, `szulo`, `jogosultsag`, `sorrend`) VALUES
('admin', 'Admin', '', '001', 51),
('alapinfok', 'Alapinfók', 'elerhetoseg', '111', 41),
('belepes', 'Belépés', '', '100', 50),
('elerhetoseg', 'Elérhetőség', '', '111', 40),
('hirek', 'Hírek', '', '011', 20),
('kezdolap', 'Kezdőlap', '', '111', 10),
('kiegeszitesek', 'Kiegészítések', 'elerhetoseg', '011', 42),
('kilepes', 'Kilépés', '', '011', 70),
('regisztracio', 'Regisztráció', '', '100', 60),
('uj_hir_iras', 'Új hír írás', 'hirek', '011', 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
