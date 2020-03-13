-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 07 mars 2020 kl 20:29
-- Serverversion: 5.7.26
-- PHP-version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `todo`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `todo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `todo`
--

INSERT INTO `todo` (`id`, `todo`) VALUES
(1, 'Ost');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
