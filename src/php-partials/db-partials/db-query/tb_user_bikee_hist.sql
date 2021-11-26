-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: 26-Nov-2021 às 02:55
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3442315_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user_bikee_hist`
--

CREATE TABLE `tb_user_bikee_hist` (
  `id_user_bikee_hist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bikee_type` int(11) NOT NULL,
  `date_use_bikee` date NOT NULL,
  `rent_price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_user_bikee_hist`
--

INSERT INTO `tb_user_bikee_hist` (`id_user_bikee_hist`, `id_user`, `id_bikee_type`, `date_use_bikee`, `rent_price`) VALUES
(1, 3, 3, '2021-11-26', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user_bikee_hist`
--
ALTER TABLE `tb_user_bikee_hist`
  ADD PRIMARY KEY (`id_user_bikee_hist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user_bikee_hist`
--
ALTER TABLE `tb_user_bikee_hist`
  MODIFY `id_user_bikee_hist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
