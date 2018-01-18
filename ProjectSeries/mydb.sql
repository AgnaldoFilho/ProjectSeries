-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2016 às 06:37
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `idt_ator` int(11) NOT NULL,
  `nme_ator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`idt_ator`, `nme_ator`) VALUES
(1, 'Emilia Clarke'),
(2, 'Travis Fimmel'),
(3, 'Katheryn Winnick'),
(4, 'Clive Standen'),
(5, 'Andrew Lincoln'),
(6, 'Steven Yeun'),
(7, 'Chandler Riggs'),
(8, 'Norman Reedus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator_temporada`
--

CREATE TABLE `ator_temporada` (
  `idt_ator_temporada` int(11) NOT NULL,
  `cod_temporada` int(11) NOT NULL,
  `cod_ator` int(11) NOT NULL,
  `primeira_participacao` int(11) NOT NULL,
  `ultima_participacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator_temporada`
--

INSERT INTO `ator_temporada` (`idt_ator_temporada`, `cod_temporada`, `cod_ator`, `primeira_participacao`, `ultima_participacao`) VALUES
(5, 1, 1, 2, 3),
(6, 7, 2, 2, 3),
(7, 7, 3, 2, 3),
(8, 7, 4, 2, 3),
(9, 4, 5, 4, 4),
(10, 4, 6, 4, 4),
(11, 4, 7, 4, 4),
(12, 4, 8, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idt_categoria` int(11) NOT NULL,
  `nme_categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idt_categoria`, `nme_categoria`) VALUES
(1, 'Medieval'),
(2, 'Drama'),
(3, 'Terror'),
(4, 'Comédia'),
(5, 'Política'),
(6, 'Policial'),
(7, 'Fantasia'),
(8, 'Ação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `episodio`
--

CREATE TABLE `episodio` (
  `idt_episodio` int(11) NOT NULL,
  `cod_temporada` int(11) NOT NULL,
  `num_episodio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `episodio`
--

INSERT INTO `episodio` (`idt_episodio`, `cod_temporada`, `num_episodio`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 2, 1),
(12, 2, 2),
(13, 2, 3),
(14, 2, 4),
(15, 2, 5),
(16, 2, 6),
(17, 2, 7),
(18, 2, 8),
(19, 2, 9),
(20, 2, 10),
(21, 3, 1),
(22, 3, 2),
(23, 3, 3),
(24, 3, 4),
(25, 3, 5),
(26, 3, 6),
(27, 3, 7),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 4, 1),
(32, 4, 2),
(33, 4, 3),
(34, 4, 4),
(35, 4, 5),
(36, 5, 1),
(37, 5, 2),
(38, 5, 3),
(39, 5, 4),
(40, 5, 5),
(41, 6, 1),
(42, 6, 2),
(43, 6, 3),
(44, 6, 4),
(45, 6, 5),
(46, 7, 1),
(47, 7, 2),
(48, 7, 3),
(49, 7, 4),
(50, 7, 5),
(51, 8, 1),
(52, 8, 2),
(53, 8, 3),
(54, 9, 1),
(55, 9, 2),
(56, 9, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escritor`
--

CREATE TABLE `escritor` (
  `idt_escritor` int(11) NOT NULL,
  `nme_escritor` varchar(45) NOT NULL,
  `cod_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escritor`
--

INSERT INTO `escritor` (`idt_escritor`, `nme_escritor`, `cod_serie`) VALUES
(1, 'Robert Kirkman', 2),
(3, 'Michael Hirst', 4),
(4, 'George R. R. Martin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `part_especial`
--

CREATE TABLE `part_especial` (
  `idt_part_especial` int(11) NOT NULL,
  `cod_episodio` int(11) NOT NULL,
  `cod_ator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `idt_perfil_usuario` int(11) NOT NULL,
  `nme_perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`idt_perfil_usuario`, `nme_perfil`) VALUES
(1, 'Comum'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `idt_serie` int(11) NOT NULL,
  `name_series` varchar(100) NOT NULL,
  `initials` varchar(10) NOT NULL,
  `year_series` int(11) NOT NULL,
  `synopsis` text NOT NULL,
  `link_trailer` varchar(80) NOT NULL,
  `img_poster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`idt_serie`, `name_series`, `initials`, `year_series`, `synopsis`, `link_trailer`, `img_poster`) VALUES
(1, 'Game of Thrones', 'got', 2011, 'Ha muito tempo, em um tempo esquecido, uma forca destruiu o equilibrio das estacoes. Em uma terra onde os veroes podem durar varios anos e o inverno toda uma vida, as reivindicacoes e as forcas sobrenaturais correm as portas do Reino dos Sete Reinos. A irmandade da Patrulha da Noite busca proteger o reino de cada criatura que pode vir de la da Muralha, mas ja nao tem os recursos necessarios para garantir a seguranca de todos. Depois de um verao de dez anos, um inverno rigoroso promete chegar com um futuro mais sombrio. Enquanto isso, conspiracoes e rivalidades correm no jogo politico pela disputa do Trono de Ferro, o simbolo do poder absoluto.', 'sadasdasdasd', 'games-of-thrones.jpg'),
(2, 'The Walking Dead', 'TWD', 2010, 'Um Apocalipse provoca uma infestacao de zumbis na cidade de Cynthiana, em Kentucky, nos Estados Unidos, e o oficial de policia Rick Grimes (Andrew Lincoln) descobre que os mortos-vivos estao se propagando progressivamente. Ele decide unir-se aos homens e mulheres sobreviventes para que tenham mais forca para combater o fenomeno que os atinge. O grupo percorre diferentes lugares em busca de solucoes para o problema.', 'asdasdasdasd', 'walking_dead_one_sheet_poster.jpg'),
(4, 'Vikings', 'Vik', 2013, 'Ragnar Lothbrok (Travis Fimmel) eh o maior guerreiro da sua era. Lider de seu bando, com seus irmaos e sua familia, ele ascende ao poder e torna-se Rei da tribo dos vikings. Alem de guerreiro implacavel, Ragnar segue as tradicoes nordicas e eh devoto dos deuses. As lendas contam que ele descende diretamente de Odin, o deus da guerra. ', 'www.youtube.com/embed/1j2sXLbzm9U', '159611932_787cf4.jpg'),
(5, 'Preacher', 'Pre', 2016, 'Based on the twisted and popular 90s comic book franchise of the same name, Preacher, created by Garth Ennis and Steve Dillon, is the story of Jesse Custer (Dominic Cooper) a conflicted Preacher in a small Texas town who is inhabited by a mysterious entity that allows him to develop a highly unconventional power. Jesse, his ex-girlfriend, Tulip (Ruth Negga), and an Irish vampire named Cassidy (Joseph Gilgun) embark on a journey to, literally, find God. The Sony Pictures Television and AMC Studios co-production was developed for television by Seth Rogen and Evan Goldberg (This Is the End, Superbad, Neighbors) and showrunner Sam Catlin (Breaking Bad). The series is set to premiere mid-2016.', 'asdasdasdads', 'preacher-poster-pic.jpg'),
(6, 'The Blacklist', 'TB', 2013, 'For decades, ex-government agent Raymond Reddington (James Spader, The Office, Boston Legal) has been one of the FBIs most wanted fugitives. Brokering shadowy deals for criminals across the globe, Red was known by many as The Concierge of Crime." Now, he is mysteriously surrendered to the FBI with an explosive offer: He will help catch a long-thought-dead terrorist, Ranko Zamani, under the condition that he speaks only to Elizabeth Keen (Megan Boone, Law & Order: Los Angeles), an FBI profiler fresh out of Quantico. For Liz, it is going to be one hell of a first day on the job.What follows is a twisting series of events as the race to stop a terrorist begins. What are Red is true intentions? Why has he chosen Liz, a woman with whom he seemingly has no connection? Does Liz have secrets of her own? Zamani is only the first of many on a list that Red has compiled over the years: a blacklist of politicians, mobsters, spies and international terrorists. He will help catch them all... with the caveat that Liz continues to work as his partner. Red will teach Liz to think like a criminal to see the bigger picture - whether she wants to or not.', 'asdasdasd', 'the-blacklist-5240753025ce0.jpg'),
(7, 'Daredevil', 'DD', 2015, 'Matthew Murdock, blinded by chemicals, is an attorney at day, and vigilante by night. He is trained in the martial arts, and feuds with criminals in Hell is Kitchen, and as he fights convicts throughout the city, he meets new allies, as well as old friends, and becomes Daredevil, a symbol of justice for a corrupted city.', 'asdasdasdasd', 'matt-poster.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `series_categoria`
--

CREATE TABLE `series_categoria` (
  `idt_series_categoria` int(11) NOT NULL,
  `cod_serie` int(11) NOT NULL,
  `cod_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `series_categoria`
--

INSERT INTO `series_categoria` (`idt_series_categoria`, `cod_serie`, `cod_categoria`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 7),
(4, 2, 2),
(5, 4, 1),
(6, 4, 2),
(7, 5, 2),
(8, 5, 7),
(9, 6, 2),
(10, 6, 6),
(11, 5, 8),
(12, 6, 8),
(13, 7, 8),
(14, 7, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_episodio_usuario`
--

CREATE TABLE `status_episodio_usuario` (
  `idt_status_episodio_usuario` int(11) NOT NULL,
  `nme_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_episodio_usuario`
--

INSERT INTO `status_episodio_usuario` (`idt_status_episodio_usuario`, `nme_status`) VALUES
(1, 'Já assisti'),
(2, 'Estou Assistindo'),
(3, 'Desejo Assistir'),
(4, 'Abandonei');

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporada`
--

CREATE TABLE `temporada` (
  `idt_temporada` int(11) NOT NULL,
  `cod_serie` int(11) NOT NULL,
  `num_temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `temporada`
--

INSERT INTO `temporada` (`idt_temporada`, `cod_serie`, `num_temporada`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idt_usuario` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `senha` text NOT NULL,
  `cod_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idt_usuario`, `first_name`, `last_name`, `email`, `birthdate`, `senha`, `cod_perfil`) VALUES
(2, 'Franciele', 'Rodrigues', 'fran-rodrigues@hotmail.com', '1992-10-06', '456dfg', 1),
(3, 'Agnaldo', 'Filho', 'agnaldo.filho@live.com', '1993-03-12', '123445', 4),
(9, 'Maria', 'Joaquina', 'mariajo@hotmail.com', '1994-12-16', '456ert', 1),
(44, 'Aguinaldo', 'oliveira', 'aguinaldo@hotmail.com', '1994-11-25', '2345', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_episodio`
--

CREATE TABLE `usuario_episodio` (
  `idt_usuario_episodio` int(11) NOT NULL,
  `cod_episodio` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_status` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `dta_atualizacao` datetime NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`idt_ator`);

--
-- Indexes for table `ator_temporada`
--
ALTER TABLE `ator_temporada`
  ADD PRIMARY KEY (`idt_ator_temporada`),
  ADD KEY `fk_ator_temporada_temporada1` (`cod_temporada`),
  ADD KEY `fk_ator_temporada_ator1` (`cod_ator`),
  ADD KEY `fk_ator_temporada_episodio1` (`primeira_participacao`),
  ADD KEY `fk_ator_temporada_episodio2` (`ultima_participacao`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idt_categoria`);

--
-- Indexes for table `episodio`
--
ALTER TABLE `episodio`
  ADD PRIMARY KEY (`idt_episodio`),
  ADD KEY `fk_episodio_temporada1` (`cod_temporada`);

--
-- Indexes for table `escritor`
--
ALTER TABLE `escritor`
  ADD PRIMARY KEY (`idt_escritor`),
  ADD KEY `fk_escritor_series1_idx` (`cod_serie`);

--
-- Indexes for table `part_especial`
--
ALTER TABLE `part_especial`
  ADD PRIMARY KEY (`idt_part_especial`),
  ADD KEY `fk_episodio_ator_episodio1` (`cod_episodio`),
  ADD KEY `fk_episodio_ator_ator1` (`cod_ator`);

--
-- Indexes for table `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`idt_perfil_usuario`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`idt_serie`);

--
-- Indexes for table `series_categoria`
--
ALTER TABLE `series_categoria`
  ADD PRIMARY KEY (`idt_series_categoria`),
  ADD KEY `fk_series_categoria_series1_idx` (`cod_serie`),
  ADD KEY `fk_series_categoria_categoria1_idx` (`cod_categoria`);

--
-- Indexes for table `status_episodio_usuario`
--
ALTER TABLE `status_episodio_usuario`
  ADD PRIMARY KEY (`idt_status_episodio_usuario`);

--
-- Indexes for table `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`idt_temporada`),
  ADD KEY `fk_temporada_series1` (`cod_serie`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idt_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuario_perfil_usuario1` (`cod_perfil`);

--
-- Indexes for table `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  ADD PRIMARY KEY (`idt_usuario_episodio`),
  ADD KEY `fk_usuario_episodio_episodio1` (`cod_episodio`),
  ADD KEY `fk_usuario_episodio_usuario1` (`cod_usuario`),
  ADD KEY `fk_usuario_episodio_status_episodio_usuario1` (`cod_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ator`
--
ALTER TABLE `ator`
  MODIFY `idt_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ator_temporada`
--
ALTER TABLE `ator_temporada`
  MODIFY `idt_ator_temporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idt_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `episodio`
--
ALTER TABLE `episodio`
  MODIFY `idt_episodio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `escritor`
--
ALTER TABLE `escritor`
  MODIFY `idt_escritor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `part_especial`
--
ALTER TABLE `part_especial`
  MODIFY `idt_part_especial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `idt_perfil_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `idt_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `series_categoria`
--
ALTER TABLE `series_categoria`
  MODIFY `idt_series_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `status_episodio_usuario`
--
ALTER TABLE `status_episodio_usuario`
  MODIFY `idt_status_episodio_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `temporada`
--
ALTER TABLE `temporada`
  MODIFY `idt_temporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idt_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  MODIFY `idt_usuario_episodio` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ator_temporada`
--
ALTER TABLE `ator_temporada`
  ADD CONSTRAINT `fk_ator_temporada_ator1` FOREIGN KEY (`cod_ator`) REFERENCES `ator` (`idt_ator`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_episodio1` FOREIGN KEY (`primeira_participacao`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_episodio2` FOREIGN KEY (`ultima_participacao`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_temporada1` FOREIGN KEY (`cod_temporada`) REFERENCES `temporada` (`idt_temporada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `episodio`
--
ALTER TABLE `episodio`
  ADD CONSTRAINT `fk_episodio_temporada1` FOREIGN KEY (`cod_temporada`) REFERENCES `temporada` (`idt_temporada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `escritor`
--
ALTER TABLE `escritor`
  ADD CONSTRAINT `fk_escritor_series1` FOREIGN KEY (`cod_serie`) REFERENCES `series` (`idt_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `part_especial`
--
ALTER TABLE `part_especial`
  ADD CONSTRAINT `fk_episodio_ator_ator1` FOREIGN KEY (`cod_ator`) REFERENCES `ator` (`idt_ator`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_episodio_ator_episodio1` FOREIGN KEY (`cod_episodio`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `series_categoria`
--
ALTER TABLE `series_categoria`
  ADD CONSTRAINT `fk_series_categoria_categoria1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`idt_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_series_categoria_series1` FOREIGN KEY (`cod_serie`) REFERENCES `series` (`idt_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `temporada`
--
ALTER TABLE `temporada`
  ADD CONSTRAINT `fk_temporada_series1` FOREIGN KEY (`cod_serie`) REFERENCES `series` (`idt_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil_usuario1` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil_usuario` (`idt_perfil_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  ADD CONSTRAINT `fk_usuario_episodio_episodio1` FOREIGN KEY (`cod_episodio`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_episodio_status_episodio_usuario1` FOREIGN KEY (`cod_status`) REFERENCES `status_episodio_usuario` (`idt_status_episodio_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_episodio_usuario1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`idt_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
