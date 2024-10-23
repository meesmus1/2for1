-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 okt 2024 om 11:02
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2for1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `created at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated at` datetime NOT NULL DEFAULT current_timestamp(),
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `created at`, `updated at`, `id`, `username`, `email`, `password`) VALUES
('b', 'b', '2024-10-15 10:57:02', '2024-10-15 10:57:02', '04f1ac1f-8ad6-4d0b-b442-f80b88a13eda', 'b', 'b', '$2y$10$Usvybwk1WprOO8sUUCw5j.08uZwRtwNplNDOJyiN9Z3PvupuV/06O'),
('a', 'a', '2024-10-21 15:16:16', '2024-10-21 15:16:16', '10fef14a-3282-4416-959c-2b124eb06d5f', 'a', 'a', '$2y$10$iYkRZfSF6/Xlq76rFf6NoO.3PAuw8YYH7KSkwZMdtiwqoUGy2/oCG'),
('test', 'test', '2024-10-14 16:11:54', '2024-10-14 16:11:54', '322f6d20-08e9-4f65-aecb-23c3a376c0fc', 'tet', 'test', '$2y$10$DsWqUzPLOw2Ms3z/04rSp.tfGMM8fhIhzcBvqIH.rf1X5ceIBsXHK'),
('wanne', 'vlems', '2024-10-14 15:07:31', '2024-10-14 15:07:31', '45a81f29-8a2d-11ef-98f7-c84bd62debb4', 'Wanne.V', 'Wanne.Vlems@provil.be', 'wanne'),
('c', 'c', '2024-10-21 15:09:22', '2024-10-21 15:09:22', '5e76c41c-f9f0-40c7-85cc-6c51e7f7deac', 'c', 'c', '$2y$10$kaTexX/Fco6cVVBwrLUiReTXrY8mqRdY1b/CnhI52Rzr8qv7tR/0m');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `firstname` (`firstname`),
  ADD UNIQUE KEY `lastname` (`lastname`),
  ADD UNIQUE KEY `created at` (`created at`),
  ADD UNIQUE KEY `updated at` (`updated at`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
