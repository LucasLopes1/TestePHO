-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2017 às 01:27
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNas` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `dataNas`, `cpf`, `sexo`) VALUES
(1, 'LUCASeditar12322', '1994-08-08', '2147483647', 'M'),
(7, 'teste1aterado', '1994-08-08', '42822844801', 'M'),
(8, 'teste3Editado', '0000-00-00', '42822844805', 'M'),
(9, 'teste8editado2', '1994-08-08', '42822844807', 'F'),
(10, 'LUCAS', '1994-08-08', '55555555555', 'M'),
(14, 'testando 1233', '0000-00-00', '44444444444', 'M'),
(15, 'teste16', '1994-08-08', '22222222223', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corridas`
--

CREATE TABLE `corridas` (
  `id` int(11) NOT NULL,
  `nomeMoto` varchar(50) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `corridas`
--

INSERT INTO `corridas` (`id`, `nomeMoto`, `nomeCli`, `valor`) VALUES
(1, 'LUCAS', '', '45'),
(2, 'motorista1', 'LUCAS', '29'),
(3, 'motorista1', 'teste3', '77'),
(4, 'motorista1', 'cliente45', '45'),
(5, 'teste', 'cliente45', '29'),
(6, 'motorista1', 'teste8', '35'),
(7, 'motorista1editado', 'cliente45editar', '34'),
(8, 'motorista1editado', 'testando 1233', '68'),
(9, 'Motorista14', 'LUCASeditar12322', '88'),
(10, 'Motorista145', 'LUCASeditar12322', '56'),
(11, 'motorista1editado', 'LUCAS', '45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoristas`
--

CREATE TABLE `motoristas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNas` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `modcar` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `motoristas`
--

INSERT INTO `motoristas` (`id`, `nome`, `dataNas`, `cpf`, `modcar`, `sexo`, `status`) VALUES
(3, 'motorista1editado', '1111-11-11', '11111111111', 'camaro', 'M', 'A'),
(4, 'motoristaInativo', '1994-08-08', '42822844805', 'gol', 'F', 'I'),
(5, 'motoristaInativo3', '1994-08-08', '42822844804', 'eclipse', 'M', 'A'),
(6, 'Motorista145', '1994-08-08', '42822844801', 'gol', 'M', 'A'),
(7, 'teste23', '0000-00-00', '42822844809', 'idea', 'M', 'A'),
(8, 'lucasRRR', '0000-00-00', '42822844802', 'fox', 'M', 'A'),
(9, 'lucasTeste', '0000-00-00', '33333333333', 'teste45', 'M', 'A'),
(10, 'felipe', '0000-00-00', '33333333334', 'celta', 'M', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `corridas`
--
ALTER TABLE `corridas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motoristas`
--
ALTER TABLE `motoristas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `corridas`
--
ALTER TABLE `corridas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `motoristas`
--
ALTER TABLE `motoristas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
