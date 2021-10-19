-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2021 às 13:19
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdteste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user_address`
--

CREATE TABLE `tb_user_address` (
  `id_user_address` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cep_address` varchar(8) NOT NULL,
  `log_address` varchar(100) DEFAULT NULL,
  `complement_address` varchar(50) DEFAULT NULL,
  `neighborhood_address` varchar(200) DEFAULT NULL,
  `location_address` varchar(100) DEFAULT NULL,
  `uf_address` varchar(2) DEFAULT NULL,
  `ibge_address` varchar(10) DEFAULT NULL,
  `gia_address` varchar(4) DEFAULT NULL,
  `ddd_address` varchar(4) DEFAULT NULL,
  `siafi_address` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_user_address`
--
ALTER TABLE `tb_user_address`
  ADD PRIMARY KEY (`id_user_address`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_user_address`
--
ALTER TABLE `tb_user_address`
  MODIFY `id_user_address` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
