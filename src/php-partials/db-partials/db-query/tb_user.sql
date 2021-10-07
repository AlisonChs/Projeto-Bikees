-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2021 às 19:11
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
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_full_name` varchar(150) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_cpf` varchar(11) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_cash` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email` (`user_email`(11));

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
