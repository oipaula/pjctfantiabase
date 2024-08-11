-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/08/2024 às 23:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdagenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbamigos`
--

CREATE TABLE `tbamigos` (
  `codigo` int(11) NOT NULL,
  `amigo` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `telefone` varchar(22) DEFAULT NULL,
  `datanasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbamigos`
--

INSERT INTO `tbamigos` (`codigo`, `amigo`, `email`, `telefone`, `datanasc`) VALUES
(53, 'Teste', 'teste@gmail.com', '1234567899', '2000-05-20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcomercial`
--

CREATE TABLE `tbcomercial` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `comercio` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `telefone` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcomercial`
--

INSERT INTO `tbcomercial` (`codigo`, `nome`, `comercio`, `email`, `telefone`) VALUES
(9, 'Teste', 'Teste', 'teste@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`codigo`, `nome`, `senha`) VALUES
(19, 'mxspaula', '202cb962ac59075b964b07152d234b70'),
(21, 'anselmo', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `tbcomercial`
--
ALTER TABLE `tbcomercial`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `tbcomercial`
--
ALTER TABLE `tbcomercial`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
