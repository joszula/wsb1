-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lis 2020, 22:00
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wsb_project`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `citys`
--

CREATE TABLE `citys` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `voivodeships` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `citys`
--

INSERT INTO `citys` (`id`, `name`, `voivodeships`) VALUES
(1, 'Poznań', 1),
(2, 'Szczecin', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `permissions` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `permissions`
--

INSERT INTO `permissions` (`id`, `permissions`, `description`, `date`) VALUES
(1, 'user', 'uzytkownik', '2020-11-15 11:32:47'),
(2, 'admin', 'administrator', '2020-11-15 11:32:47');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`id`, `status`, `description`, `date`) VALUES
(1, 'active', 'Uzytkownić może sie zalogowac, konto aktywaane', '2020-11-15 10:57:44'),
(2, 'inactive', 'konto nie aktywowane', '2020-11-15 10:57:57'),
(3, 'blocked', 'konto zablokowane przez admina', '2020-11-15 10:58:10'),
(4, 'removed', 'konto usunięte', '2020-11-15 10:58:17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `permissions_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `city_id`, `status_id`, `permissions_id`, `birthday`) VALUES
(1, 'ad@ad.asd', 'ad@ad.asd', 'ad@ad.asd', '$argon2id$v=19$m=65536,t=4,p=1$VnRGWG5qU21WN2JGdTlXMg$yCiEKwB5qOVHdNGvpOJDsp3r+x4oSMUmZiJb46C6cLs', 1, 1, 1, '2020-10-27'),
(2, 'adda@ad.asd', 'adda@ad.asd', 'adda@ad.asd', '$argon2id$v=19$m=65536,t=4,p=1$OU1vWkFPL0hGQ2xBbVJWYQ$6+4wRxSu++3HiTOnHvY/7SyGOVQ7VWF0aexUdYS5w8c', 1, 2, 1, '2020-11-06');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `voivodeships`
--

CREATE TABLE `voivodeships` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `voivodeships`
--

INSERT INTO `voivodeships` (`id`, `name`) VALUES
(1, 'Wielkopolskie'),
(2, 'Zachodniopomorskie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voivodeships` (`voivodeships`),
  ADD KEY `voivodeships_2` (`voivodeships`);

--
-- Indeksy dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `city_id_2` (`city_id`),
  ADD KEY `city_id_3` (`city_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `permissions_id` (`permissions_id`);

--
-- Indeksy dla tabeli `voivodeships`
--
ALTER TABLE `voivodeships`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `citys`
--
ALTER TABLE `citys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `voivodeships`
--
ALTER TABLE `voivodeships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `citys`
--
ALTER TABLE `citys`
  ADD CONSTRAINT `citys_ibfk_1` FOREIGN KEY (`voivodeships`) REFERENCES `voivodeships` (`id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `citys` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`permissions_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
