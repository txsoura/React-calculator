-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 04:59 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int(11) NOT NULL,
  `questao` tinytext NOT NULL,
  `resposta` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pergunta`
--

INSERT INTO `pergunta` (`id`, `questao`, `resposta`) VALUES
(1, 'Reaproveitar agua da chuva não ajuda o meio ambiente?', 'sim'),
(2, 'Deixar luzes ligada desnecessarimente economiza energia?', 'sim'),
(3, 'Jogar lixo na rua ajuda o planeta terra?', 'não');

-- --------------------------------------------------------

--
-- Table structure for table `pontuacao`
--

CREATE TABLE `pontuacao` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `ponto` tinyint(4) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pontuacao`
--
ALTER TABLE `pontuacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
