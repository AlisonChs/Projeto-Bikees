-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: 25-Nov-2021 às 22:56
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
-- Estrutura da tabela `tb_bikee_type`
--

CREATE TABLE `tb_bikee_type` (
  `id_bikee_type` int(11) NOT NULL,
  `desc_bikee_type` varchar(100) NOT NULL,
  `price_per_min` float NOT NULL,
  `bikee_type_name` varchar(100) NOT NULL,
  `bikee_img` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bikee_type`
--

INSERT INTO `tb_bikee_type` (`id_bikee_type`, `desc_bikee_type`, `price_per_min`, `bikee_type_name`, `bikee_img`) VALUES
(1, 'Simples, perfeita para uma pedalada rápida e descontraída. ', 0.5, 'Bikee Sport Normal Amarela', './media/img/normal-bikee-slider.png'),
(2, 'Feita para aqueles que querem treinar e ir ao seu máximo.', 1, 'Bikee Sport Profissional Preta', './media/img/sport-bikee-slider.png'),
(3, 'Perfeita, para aqueles que querem ir as compras ou levar suas coisas para onde forem.', 1, 'Bikee para Passeio Rosa', './media/img/rose-bikee-slider.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bikee_type`
--
ALTER TABLE `tb_bikee_type`
  ADD PRIMARY KEY (`id_bikee_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bikee_type`
--
ALTER TABLE `tb_bikee_type`
  MODIFY `id_bikee_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
