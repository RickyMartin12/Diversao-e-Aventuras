-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22-Abr-2019 às 14:43
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva_actividades`
--

CREATE TABLE `reserva_actividades` (
  `id` int(11) NOT NULL,
  `nome_local` varchar(255) NOT NULL,
  `actividade` varchar(255) NOT NULL,
  `quant_vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva_actividades`
--

INSERT INTO `reserva_actividades` (`id`, `nome_local`, `actividade`, `quant_vagas`) VALUES
(1, 'Albufeira', 'Arborismo', 10),
(2, 'Albufeira', 'PaintBall', 30),
(3, 'Albufeira', 'Observacao de Aves', 23),
(4, 'Alcoutim', 'Slide - Limite Zero', 39),
(5, 'Alcoutim', 'Fun River - BTT', 23),
(6, 'Alcoutim', 'Fun River - Kayak', 19),
(7, 'Aljezur', 'Passeios do Cavalo - Ilha do Pesegueiro', 23),
(8, 'Aljezur', 'Sofcoastering', 23),
(9, 'Aljezur', 'Passeios de Barco', 23),
(10, 'Odeceixe', 'Aulas de Surf e de Bodyboard', 23),
(11, 'Vila nova de Milfontes', 'Passeios de Barcos e Outras Actividades no Rio Mira', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva_pessoa`
--

CREATE TABLE `reserva_pessoa` (
  `id` int(11) NOT NULL,
  `nome_pessoa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_reserva` int(11) NOT NULL,
  `id_reserva_act` int(11) NOT NULL,
  `n_pessoas` int(11) NOT NULL,
  `observacoes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva_pessoa`
--

INSERT INTO `reserva_pessoa` (`id`, `nome_pessoa`, `email`, `data_reserva`, `id_reserva_act`, `n_pessoas`, `observacoes`) VALUES
(12, 'Elisa Dias', 'ricardopeleira16@gmail.com', 1555632000, 2, 4, 'Gosto disso'),
(20, 'Rogerio Goncalves', 'elisadias8@gmail.com', 1555459200, 6, 4, 'Vamos fazer um intervalo'),
(21, 'Filomena Pires', 'r.peleira@hotmail.com', 1556668800, 2, 6, 'Vai te fornicar Alexandre'),
(22, 'Ana Ligia', 'anag914@gmail.com', 1556236800, 2, 4, 'Vou sofrer muito esta situaÃ§Ã£o. Vou ficar sem orgaos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `privilegios` varchar(10) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `no_del` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `privilegios`, `email`, `tipo`, `no_del`) VALUES
(24, 'Elisa', '21232f297a57a5a743894a0e4a801fc3', '2', 'elisadias8@gmail.com', 'Administrator', '1'),
(45, 'Ricardo', '21232f297a57a5a743894a0e4a801fc3', '2', 'r.peleira@hotmail.com', 'Administrator', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserva_actividades`
--
ALTER TABLE `reserva_actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserva_pessoa`
--
ALTER TABLE `reserva_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reservas_actividade` (`id_reserva_act`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserva_actividades`
--
ALTER TABLE `reserva_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reserva_pessoa`
--
ALTER TABLE `reserva_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reserva_pessoa`
--
ALTER TABLE `reserva_pessoa`
  ADD CONSTRAINT `id_reservas_actividade` FOREIGN KEY (`id_reserva_act`) REFERENCES `reserva_actividades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
