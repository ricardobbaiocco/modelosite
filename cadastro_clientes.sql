-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/08/2023 às 01:31
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
-- Banco de dados: `cadastro_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` int(8) NOT NULL,
  `ibge` int(20) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `rg`, `data_nascimento`, `cep`, `ibge`, `bairro`, `cidade`, `uf`, `rua`, `ativo`) VALUES
(1, 'Nome de teste', '123456789', '41115897.9879', '2000-01-12', 99770000, 4300901, 'Bela Vista', 'Erechim', 'RS', 'Rua Pedro Menegolla', 1),
(2, 'mais um teste Teste', '987654321', '49845615', '2000-01-25', 99810000, 4320602, 'Interior', 'longe', 'RS', 'lá naquele', 1),
(3, 'Cadastro teste', '00000000011', '123456789787545', '2000-02-10', 99704132, 4307005, 'Bela Vista', 'Erechim', 'RS', 'Rua Pedro Menegolla', 1),
(4, 'teste4', '111', '41946516', '1990-02-21', 0, 0, '', '', '', '', 1),
(5, 'testeeeeee', '12', '875757', '0000-00-00', 0, 0, '', '', '', '', 1),
(6, 'testando', '1', '7567', '1900-01-21', 0, 0, '', '', '', '', 1),
(7, 'opa', '5', '52252', '1980-10-10', 0, 0, '', '', '', '', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
