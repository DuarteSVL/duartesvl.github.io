-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.infinityfree.com
-- Generation Time: Apr 19, 2024 at 03:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22


-- --------------------------------------------------------------------------------

-- NOTA: esta é a base de dados que foi utilizada no projecto, com os valores inseridos.
-- As tabelas valência, tipo, e ementa_data não foram usadas.

-- --------------------------------------------------------------------------------






SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36352104_ementas`
--

-- --------------------------------------------------------

--
-- Table structure for table `celula`
--

CREATE TABLE `celula` (
  `id_celula` int(11) NOT NULL,
  `id_refeicao` int(11) DEFAULT NULL,
  `valencia` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `dia` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celula`
--

INSERT INTO `celula` (`id_celula`, `id_refeicao`, `valencia`, `tipo`, `dia`) VALUES
(1, 32, 'Basico', 'Sopa', 'segunda'),
(2, 25, 'Basico', 'Sopa', 'terca'),
(3, 25, 'Basico', 'Sopa', 'quarta'),
(4, 25, 'Basico', 'Sopa', 'quinta'),
(5, 25, 'Basico', 'Sopa', 'sexta'),
(6, 27, 'Basico', 'Prato', 'segunda'),
(7, 27, 'Basico', 'Prato', 'terca'),
(8, 27, 'Basico', 'Prato', 'quarta'),
(9, 27, 'Basico', 'Prato', 'quinta'),
(10, 27, 'Basico', 'Prato', 'sexta'),
(11, 29, 'Basico', 'Dieta', 'segunda'),
(12, 29, 'Basico', 'Dieta', 'terca'),
(13, 29, 'Basico', 'Dieta', 'quarta'),
(14, 29, 'Basico', 'Dieta', 'quinta'),
(15, 29, 'Basico', 'Dieta', 'sexta'),
(16, 30, 'Basico', 'Vegetariano', 'segunda'),
(17, 30, 'Basico', 'Vegetariano', 'terca'),
(18, 30, 'Basico', 'Vegetariano', 'quarta'),
(19, 30, 'Basico', 'Vegetariano', 'quinta'),
(20, 30, 'Basico', 'Vegetariano', 'sexta'),
(21, 40, 'Basico', 'Sobremesa', 'segunda'),
(22, 31, 'Basico', 'Sobremesa', 'terca'),
(23, 31, 'Basico', 'Sobremesa', 'quarta'),
(24, 31, 'Basico', 'Sobremesa', 'quinta'),
(25, 31, 'Basico', 'Sobremesa', 'sexta'),
(26, 36, 'Basico', 'Lanche', 'segunda'),
(27, 36, 'Basico', 'Lanche', 'terca'),
(28, 36, 'Basico', 'Lanche', 'quarta'),
(29, 36, 'Basico', 'Lanche', 'quinta'),
(30, 36, 'Basico', 'Lanche', 'sexta'),
(31, 35, 'Bercario', 'Reforco_Matinal', 'segunda'),
(32, 35, 'Bercario', 'Reforco_Matinal', 'terca'),
(33, 35, 'Bercario', 'Reforco_Matinal', 'quarta'),
(34, 35, 'Bercario', 'Reforco_Matinal', 'quinta'),
(35, 35, 'Bercario', 'Reforco_Matinal', 'sexta'),
(36, 25, 'Bercario', 'Sopa', 'segunda'),
(37, 25, 'Bercario', 'Sopa', 'terca'),
(38, 25, 'Bercario', 'Sopa', 'quarta'),
(39, 25, 'Bercario', 'Sopa', 'quinta'),
(40, 25, 'Bercario', 'Sopa', 'sexta'),
(41, 27, 'Bercario', 'Prato', 'segunda'),
(42, 27, 'Bercario', 'Prato', 'terca'),
(43, 27, 'Bercario', 'Prato', 'quarta'),
(44, 27, 'Bercario', 'Prato', 'quinta'),
(45, 27, 'Bercario', 'Prato', 'sexta'),
(46, 31, 'Bercario', 'Sobremesa', 'segunda'),
(47, 31, 'Bercario', 'Sobremesa', 'terca'),
(48, 31, 'Bercario', 'Sobremesa', 'quarta'),
(49, 31, 'Bercario', 'Sobremesa', 'quinta'),
(50, 31, 'Bercario', 'Sobremesa', 'sexta'),
(51, 36, 'Bercario', 'Lanche', 'segunda'),
(52, 36, 'Bercario', 'Lanche', 'terca'),
(53, 36, 'Bercario', 'Lanche', 'quarta'),
(54, 36, 'Bercario', 'Lanche', 'quinta'),
(55, 36, 'Bercario', 'Lanche', 'sexta'),
(56, 35, 'Creche', 'Reforco_Matinal', 'segunda'),
(57, 35, 'Creche', 'Reforco_Matinal', 'terca'),
(58, 35, 'Creche', 'Reforco_Matinal', 'quarta'),
(59, 35, 'Creche', 'Reforco_Matinal', 'quinta'),
(60, 35, 'Creche', 'Reforco_Matinal', 'sexta'),
(61, 25, 'Creche', 'Sopa', 'segunda'),
(62, 25, 'Creche', 'Sopa', 'terca'),
(63, 25, 'Creche', 'Sopa', 'quarta'),
(64, 25, 'Creche', 'Sopa', 'quinta'),
(65, 25, 'Creche', 'Sopa', 'sexta'),
(66, 27, 'Creche', 'Prato', 'segunda'),
(67, 27, 'Creche', 'Prato', 'terca'),
(68, 27, 'Creche', 'Prato', 'quarta'),
(69, 27, 'Creche', 'Prato', 'quinta'),
(70, 27, 'Creche', 'Prato', 'sexta'),
(71, 37, 'Creche', 'Merenda', 'segunda'),
(72, 37, 'Creche', 'Merenda', 'terca'),
(73, 37, 'Creche', 'Merenda', 'quarta'),
(74, 37, 'Creche', 'Merenda', 'quinta'),
(75, 37, 'Creche', 'Merenda', 'sexta');

-- --------------------------------------------------------

--
-- Table structure for table `ementa_data`
--

CREATE TABLE `ementa_data` (
  `id_ementa` int(11) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 0,
  `valencia` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 0,
  `ordem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `texto`, `imagem`, `data`, `activo`, `ordem`) VALUES
(3, 'Dia Internacional do Brincar', 'No dia 28/05 comemora-se o Dia Internacional do Brincar!\r\nPara nÃ³s Ã© mesmo uma data muito importante\r\nE Ã© por isso que, no prÃ³ximo dia 27/05, Sexta-Feira, o Teatro vem Ã  escola, com a peÃ§a â€œao CRESCER quero SERâ€.\r\nVamos, juntos, comemorar, jÃ¡ que infÃ¢ncia Ã© magia e toda a brincadeira Ã© fantasia!\r\nSobre a peÃ§a:\r\n\r\nSobre\r\nPartindo da ideia de que SOMOS o que FAZEMOS, esta nova criaÃ§Ã£o irÃ¡ desmistificar o porquÃª de cada individuo estar sempre associado a um desÃ­gnio/funÃ§Ã£o. SerÃ¡ nosso intuito promover a vontade, a escolha de ser, tanto quanto a realidade e imaginaÃ§Ã£o nos permitirem. AtravÃ©s do brincar, homenagearemos as profissÃµes que caÃ­ram em desuso, promovendo o nosso patrimÃ³nio cultural e histÃ³rico, tal como as atuais, que tantas vezes passam despercebidas. Importante dizer que a crianÃ§a tem ainda tempo, para apenas SER.', 'pintura.jpg', '2024-04-16', 1, 0),
(7, 'Bem vindo ao Pop Dance', 'Inovamos e ampliamos o leque da nossa oferta de atividades desportivas.\r\n\r\nA POP Dance chegou ao CCR CCR, Ã s Segundas e Quintas Feiras, das 17:45h Ã s 18:45h.\r\n\r\nNas aulas de Pop Dance, podes contar danÃ§ar aos ritmos contagiantes da Pop, Hip Hop, RNB e Dancehall, entre outros.\r\n\r\nSÃ£o aulas cheias de energia, onde podes desenvolver sequÃªncias coreogrÃ¡ficas e onde se misturam vÃ¡rios estilos das danÃ§as urbanas, num ambiente descontraÃ­do!', 'dance.jpg', '2024-04-04', 1, 99),
(11, 'Vem fazer judo no CCR', 'Com o arranque do ano letivo, o CCR CCR deu inÃ­cio Ã  Ã©poca desportiva!\r\n\r\nO Judo Ã© mais uma modalidade que podes praticar connosco e que te traz muitos benefÃ­cios, contribuindo para o teu\r\ndesenvolvimento fÃ­sico, psÃ­quico e social de forma integrada. \r\n\r\nPraticar Judo desenvolve habilidades e capacidades especÃ­ficas que te ajudarÃ£o a uma convivÃªncia social harmoniosa, ao mesmo tempo que te estimula o teu interesse pela competiÃ§Ã£o saudÃ¡vel.\r\nBasicamente, o Judo proporciona um desenvolvimento do atleta no seu todo.', 'judo.png', '2024-05-09', 1, 222),
(13, 'TÃ­tulo de teste', 'Texto para demonstraÃ§Ã£o.', 'lobo.jpg', '2024-04-17', 0, 0),
(14, 'Dia Mundial da MÃºsica e da Ãgua', 'No prÃ³ximo dia 1 de Outubro comemora-se o Dia Mundial da MÃºsica e da Ãgua.\r\n\r\nDeixamos a sugestÃ£o para as famÃ­lias visitarem o Centro de InterpretaÃ§Ã£o de Monsanto, onde, nesse dia, se irÃ£o realizar vÃ¡rias atividades gratuitas, com orquestra, jogos e lanche.\r\n\r\nApareÃ§am!\r\n', 'music.jpg', '2024-04-15', 1, 0),
(15, 'Noticia teste 1', 'Outro texto.', 'pintura.jpg', '2024-04-08', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `refeicao`
--

CREATE TABLE `refeicao` (
  `id_refeicao` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refeicao`
--

INSERT INTO `refeicao` (`id_refeicao`, `nome`, `tipo`, `descricao`, `activo`) VALUES
(25, 'Caldo verde', 'Sopa', '', 1),
(26, 'Canja', 'Sopa', '', 1),
(27, 'Frango assado', 'Prato', '', 1),
(29, 'Prato dieta', 'Dieta', '', 1),
(30, 'Tofu', 'Vegetariano', '', 1),
(31, 'Chocolate', 'Sobremesa', '', 1),
(32, ' ', 'Sopa', '', 1),
(35, 'Fruta cozida', 'Reforco_Matinal', '', 1),
(36, 'Iogurte', 'Lanche', '', 1),
(37, 'Morangos', 'Merenda', '', 1),
(38, 'Sopa de pedra', 'Sopa', '', 1),
(39, 'Arroz doce', 'Sobremesa', '', 1),
(40, 'Pudim', 'Sobremesa', '', 1),
(41, '', '', '', 1),
(42, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'ccr', '698dc19d489c4e4db73e28a713eab07b', 'ccr-admin');

-- --------------------------------------------------------

--
-- Table structure for table `valencia`
--

CREATE TABLE `valencia` (
  `id_valencia` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celula`
--
ALTER TABLE `celula`
  ADD PRIMARY KEY (`id_celula`),
  ADD KEY `id_refeicao` (`id_refeicao`);

--
-- Indexes for table `ementa_data`
--
ALTER TABLE `ementa_data`
  ADD PRIMARY KEY (`id_ementa`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `refeicao`
--
ALTER TABLE `refeicao`
  ADD PRIMARY KEY (`id_refeicao`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `valencia`
--
ALTER TABLE `valencia`
  ADD PRIMARY KEY (`id_valencia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celula`
--
ALTER TABLE `celula`
  MODIFY `id_celula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `ementa_data`
--
ALTER TABLE `ementa_data`
  MODIFY `id_ementa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `refeicao`
--
ALTER TABLE `refeicao`
  MODIFY `id_refeicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `valencia`
--
ALTER TABLE `valencia`
  MODIFY `id_valencia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
