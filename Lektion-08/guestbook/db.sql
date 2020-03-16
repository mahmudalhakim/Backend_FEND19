-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 07 mars 2020 kl 19:10
-- Serverversion: 5.7.26
-- PHP-version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `guestbook`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `body` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `body`, `date`) VALUES
(2, 'Mahmud Al Hakim', 'Detta är mitt första meddelande på gästboken. Borde visas längst ner på sidan!', '2020-03-07 12:21:57'),
(3, 'Yasmin', 'Snyggt jobbat.', '2020-03-07 12:43:36');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
