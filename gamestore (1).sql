-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Ago-2018 às 03:15
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `descricao` text,
  `data_criado` datetime NOT NULL,
  `data_modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `nome`, `descricao`, `data_criado`, `data_modificado`) VALUES
(1, 'A&ccedil;&atilde;o', 'teste', '2018-08-14 21:14:48', NULL),
(2, 'Sobreviv&ecirc;ncia', 'teste', '2018-08-14 21:15:50', NULL),
(3, 'Aventura', 'teste', '2018-08-14 21:23:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero_jogo`
--

CREATE TABLE `genero_jogo` (
  `id_jogo` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero_jogo`
--

INSERT INTO `genero_jogo` (`id_jogo`, `id_genero`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `descricao` text,
  `lancamento` date DEFAULT NULL,
  `distribuidora` tinytext,
  `dev` tinytext,
  `data_criado` datetime NOT NULL,
  `data_modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `titulo`, `descricao`, `lancamento`, `distribuidora`, `dev`, `data_criado`, `data_modificado`) VALUES
(1, 'Fortnite', '<p>Fortnite &eacute; um jogo eletr&ocirc;nico do g&ecirc;nero tiro em terceira pessoa da Epic Games. Centrado em um cen&aacute;rio limpo durante o dia e de luta &agrave; noite, &eacute; o primeiro jogo da Epic para Unreal Engine 4, da pr&oacute;pria Epic. Come&ccedil;ou a ser desenvolvido em 2013.</p>\r\n\r\n<p>O jogo consiste de at&eacute; cem jogadores que caem de paraquedas em uma ilha em busca de armas e equipamento a fim de matar os outros jogadores, enquanto tentam sobreviver ao mesmo tempo. A &aacute;rea de jogo diminui progressivamente, confinando os sobreviventes a um espa&ccedil;o cada vez menor e for&ccedil;ando encontros. Ganha o &uacute;ltimo jogador ou time sobrevivente. O jogo permite tanto as perspectivas de primeira pessoa como em terceira pessoa.</p>\r\n\r\n<p>O Fortnite possui dois modos de jogo: o Battle Royale, onde 100 competidores entram num mapa e s&atilde;o obrigados a se enfrentar intensamente, j&aacute; que uma tempestade vai tomando conta da regi&atilde;o; e o Salve o Mundo, onde o planeta est&aacute; controlado por uma tempestade que traz com ela v&aacute;rios zumbis. Entretanto, apesar de muitos considerarem o jogo gratuito, o modo Salve o Mundo n&atilde;o &eacute; gratuito.</p>\r\n\r\n<p>O jogo foi lan&ccedil;ado em mar&ccedil;o de 2017 para Microsoft Windows na plataforma de acesso antecipado da Steam, vendendo mais de 18 milh&otilde;es de c&oacute;pias nos primeiros oito meses, e atingindo um pico de mais de 2 milh&otilde;es de jogadores simult&acirc;neos no final de 2017, sendo o jogo mais jogado da plataforma at&eacute; ent&atilde;o. A Epic Games lan&ccedil;ou a vers&atilde;o 1.0 do jogo no dia 20 de dezembro de 2017, a vers&atilde;o para Xbox foi lan&ccedil;ada no dia 12 de dezembro atrav&eacute;s do programa de testes</p>\r\n\r\n<p>O jogo foi inicialmente lan&ccedil;ado em vers&otilde;es alfa e beta para um p&uacute;blico restrito de 80 mil jogadores, incluindo streamers do site Twitch, e pouco antes de liberar o acesso antecipado na Steam a Bluehole abriu alguns servidores para outros streamers. O acesso antecipado foi lan&ccedil;ado em 23 de mar&ccedil;o para Microsoft Windows. Inicialmente essa fase deveria durar at&eacute; setembro de 2017, mas em julho de 2017, Greene anunciou que esse prazo seria estendido para que o jogo estivesse mais bem desenvolvido em seu lan&ccedil;amento oficial. Inicialmente, a Bluehole pensou que o jogo apenas ganharia grande popularidade apenas em seu lan&ccedil;amento, tento planejado o acesso antecipado para avaliar como o jogo se comportaria com um n&uacute;mero moderado de jogadores. A explos&atilde;o em popularidade ainda no acesso antecipado serviu para trazer a tona problemas de conectividade no jogo para os quais Bluehole se voltaria. Durante o m&ecirc;s de agosto, foram lan&ccedil;ados patches semanais para corre&ccedil;&atilde;o de problemas. Nos meses seguintes, a quantidade de patches foi reduzida, pois os patches muito frequentes estavam causando problemas de estabilidade no jogo.</p>\r\n\r\n<p>Em novembro de 2017, a Epic anunciou o n&uacute;mero de mais de 20 milh&otilde;es de jogadores logados em todas as plataformas.</p>', '2017-12-20', 'Epic Games', 'Epic Games', '2018-08-13 21:49:26', NULL),
(2, 'Rocket League', '<p>Rocket League &eacute; um jogo eletr&ocirc;nico de futebol veicular desenvolvido e publicado pela Psyonix. Foi lan&ccedil;ado pela primeira vez para Microsoft Windows e PlayStation 4 em julho de 2015, com as portes para o Xbox One, MacOS, Linux e Nintendo Switch sendo lan&ccedil;ados posteriormente. Em junho de 2016, a 505 Games come&ccedil;ou a distribuir uma vers&atilde;o f&iacute;sica para o PlayStation 4 e Xbox One, com a Warner Bros. Interactive Entertainmentassumindo essas fun&ccedil;&otilde;es at&eacute; o final de 2017.</p>\r\n\r\n<p>Descrito como &quot;futebol, mas com carros movidos a foguete&quot;, Rocket League tem de um a quatro jogadores designados para cada uma das duas equipes, usando ve&iacute;culos movidos a foguete para acertar o gol do advers&aacute;rio e marcar pontos ao longo de uma partida. O jogo inclui modos para um jogador e multijogadores, que podem ser jogados localmente e on-line, incluindo jogos multi-plataforma entre as vers&otilde;es de PlayStation 4 e Microsoft Windows, bem como cross-play entre as vers&otilde;es de Xbox One, Switch e Windows. Atualiza&ccedil;&otilde;es posteriores permitiram a modifica&ccedil;&atilde;o de regras b&aacute;sicas e novos modos de jogo, incluindo os baseados em h&oacute;quei no gelo e basquete.</p>\r\n\r\n<p>Rocket League &eacute; uma continua&ccedil;&atilde;o de Supersonic Acrobatic Rocket-Powered Battle-Cars, publicado pela Psyonix em 2008 para o PlayStation 3. Battle-Cars recebeu cr&iacute;ticas mistas e n&atilde;o foi um grande sucesso, mas ganhou uma base de f&atilde;s leais. A Psyonix continuou a se sustentar atrav&eacute;s do trabalho de desenvolvimento de contrato para outros est&uacute;dios, enquanto procurava desenvolver uma sequ&ecirc;ncia. A empresa iniciou o desenvolvimento formal de Rocket League por volta de 2013, refinando a jogabilidade de Battle-Cars para lidar com cr&iacute;ticas e coment&aacute;rios dos f&atilde;s. A desenvolvedora tamb&eacute;m reconheceu sua falta de marketing para o t&iacute;tulo anterior, e se envolveu tanto nas m&iacute;dias sociais quanto nas promo&ccedil;&otilde;es, incluindo oferecer o jogo como um download gratuito para membros da PlayStation Plus no lan&ccedil;amento, a fim de promover o jogo. </p>\r\n\r\n<p>Rocket League foi elogiado pela cr&iacute;tica, recebendo uma recep&ccedil;&atilde;o positiva por suas melhorias em compara&ccedil;&atilde;o com Battle-Cars, seus gr&aacute;ficos e jogabilidade multijogador, apesar de alguns cr&iacute;ticos serem c&eacute;ticos quanto ao motor de f&iacute;sica do jogo. O jogo ganhou v&aacute;rios pr&ecirc;mios da ind&uacute;stria. e alcan&ccedil;ou mais de seis milh&otilde;es de vendas e 40 milh&otilde;es de jogadores at&eacute; o in&iacute;cio de 2018. Rocket League tamb&eacute;m foi adotado como um eSport, com jogadores profissionais participando da ESL e da Major League Gaming, juntamente com as pr&oacute;prias competi&ccedil;&otilde;es da Psyonix atrav&eacute;s do Rocket League Championship Series (RLCS). </p>', '2015-07-07', 'Psyonix', 'Psyonix', '2018-08-14 21:52:30', NULL),
(3, 'PlayerUnknown&#039;s Battlegrounds', '<p>PlayerUnknown\'s Battlegrounds (PUBG), ou somente Battlegrounds, &eacute; um jogo eletr&ocirc;nico multiplayer desenvolvido pela PUBG Corp., subsidi&aacute;ria da produtora coreana Bluehole, utilizando o motor de jogo Unreal Engine 4. O jogo foi desenvolvido sob a lideran&ccedil;a criativa de Brendan &quot;PlayerUnknown&quot; Greene, que havia previamente desenvolvido diversos mods para outros jogos eletr&ocirc;nicos inspirados no filme Battle Royale, de 2000.   O jogo consiste de at&eacute; cem jogadores que caem de paraquedas em uma ilha em busca de armas e equipamento a fim de matar os outros jogadores, enquanto tentam sobreviver ao mesmo. A &aacute;rea de jogo diminui progressivamente, confinando os sobreviventes a um espa&ccedil;o cada vez menor e for&ccedil;ando encontros. Ganha o &uacute;ltimo jogador ou time sobrevivente. O jogo permite tanto as perspectivas de primeira pessoa como em terceira pessoa. </p>\r\n\r\n<p>O jogo foi lan&ccedil;ado em mar&ccedil;o de 2017 para Microsoft Windows na plataforma de acesso antecipado da Steam, vendendo mais de 18 milh&otilde;es de c&oacute;pias nos primeiros oito meses, e atingindo um pico de mais de 2 milh&otilde;es de jogadores simult&acirc;neos no final de 2017, sendo o jogo mais jogado da plataforma at&eacute; ent&atilde;o. A PUBG Corp. lan&ccedil;ou a vers&atilde;o 1.0 do jogo no dia 20 de dezembro de 2017, e a vers&atilde;o para Xbox foi lan&ccedil;ada no dia 12 de dezembro atrav&eacute;s do programa de testes Xbox Game Preview.</p>\r\n\r\n<p>O jogo foi, de forma geral, bem recebido pela cr&iacute;tica, sendo nomeado para &quot;jogo do ano&quot; enquanto ainda estava em lan&ccedil;amento antecipado, mas recebendo coment&aacute;rios a respeito de bugs ainda presentes ap&oacute;s a sa&iacute;da do acesso antecipado. Segundo os desenvolvedores, o jogo seria eventualmente voltado para eSports, mas, at&eacute; o in&iacute;cio de 2018, Greene considerava que o jogo &quot;ainda n&atilde;o estava l&aacute;&quot;. </p>', '2017-12-20', 'Tencent Games', 'PUBG Corporation', '2018-08-14 21:57:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_noticia`
--

CREATE TABLE `jogo_noticia` (
  `id_jogo` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `subtitulo` tinytext NOT NULL,
  `corpo` mediumtext NOT NULL,
  `autor` int(11) NOT NULL,
  `data_criado` datetime NOT NULL,
  `data_modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `subtitulo`, `corpo`, `autor`, `data_criado`, `data_modificado`) VALUES
(1, 'Google rastreia localização mesmo quando usuários desativam o serviço, diz estudo', 'Estudo da AP diz que empresa não interrompe o rastreamento quando as pessoas pausam o \'histórico de localização\'', 'Para compartilhar esse conteúdo, por favor utilize o link https://www1.folha.uol.com.br/tec/2018/08/google-rastreia-localizacao-mesmo-quando-usuarios-o-desativam-servico-diz-estudo.shtml ou as ferramentas oferecidas na página. Textos, fotos, artes e vídeos da Folha estão protegidos pela legislação brasileira sobre direito autoral. Não reproduza o conteúdo do jornal em qualquer meio de comunicação, eletrônico ou impresso, sem autorização da Folhapress (pesquisa@folhapress.com.br). As regras têm como objetivo proteger o investimento que a Folha faz na qualidade de seu jornalismo. Se precisa copiar trecho de texto da Folha para uso privado, por favor logue-se como assinante ou cadastrado.\r\nPara compartilhar esse conteúdo, por favor utilize o link https://www1.folha.uol.com.br/tec/2018/08/google-rastreia-localizacao-mesmo-quando-usuarios-o-desativam-servico-diz-estudo.shtml ou as ferramentas oferecidas na página. Textos, fotos, artes e vídeos da Folha estão protegidos pela legislação brasileira sobre direito autoral. Não reproduza o conteúdo do jornal em qualquer meio de comunicação, eletrônico ou impresso, sem autorização da Folhapress (pesquisa@folhapress.com.br). As regras têm como objetivo proteger o investimento que a Folha faz na qualidade de seu jornalismo. Se precisa copiar trecho de texto da Folha para uso privado, por favor logue-se como assinante ou cadastrado.', 1, '2018-08-13 19:47:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `descricao` text,
  `data_criado` datetime NOT NULL,
  `data_modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`, `descricao`, `data_criado`, `data_modificado`) VALUES
(1, 'Playstation 4', 'teste', '2018-08-14 20:13:33', NULL),
(2, 'Xbox One', 'teste2', '2018-08-14 20:13:55', NULL),
(3, 'Windows', 'teste', '2018-08-14 21:59:50', NULL),
(4, 'Windows UWP', 'teste', '2018-08-14 21:59:50', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma_jogo`
--

CREATE TABLE `plataforma_jogo` (
  `id_jogo` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `plataforma_jogo`
--

INSERT INTO `plataforma_jogo` (`id_jogo`, `id_plataforma`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag_noticia`
--

CREATE TABLE `tag_noticia` (
  `id_tag` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `user` tinytext NOT NULL,
  `pass` tinytext NOT NULL,
  `caminhoimg` text,
  `data_criado` datetime NOT NULL,
  `data_modificado` datetime DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `user`, `pass`, `caminhoimg`, `data_criado`, `data_modificado`, `ultimo_login`) VALUES
(1, 'Administrador', 'admin', 'admin', NULL, '2018-08-13 19:47:17', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genero_jogo`
--
ALTER TABLE `genero_jogo`
  ADD PRIMARY KEY (`id_jogo`,`id_genero`),
  ADD KEY `id_genero_fkjogo` (`id_genero`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogo_noticia`
--
ALTER TABLE `jogo_noticia`
  ADD PRIMARY KEY (`id_jogo`,`id_noticia`),
  ADD KEY `id_noticia_fkjogo` (`id_noticia`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autorfk` (`autor`);

--
-- Indexes for table `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plataforma_jogo`
--
ALTER TABLE `plataforma_jogo`
  ADD PRIMARY KEY (`id_jogo`,`id_plataforma`),
  ADD KEY `id_plataforma_fkjogo` (`id_plataforma`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_noticia`
--
ALTER TABLE `tag_noticia`
  ADD PRIMARY KEY (`id_tag`,`id_noticia`),
  ADD KEY `id_noticia_fktag` (`id_noticia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `genero_jogo`
--
ALTER TABLE `genero_jogo`
  ADD CONSTRAINT `id_genero_fkjogo` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `id_jogo_fkgen` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`);

--
-- Limitadores para a tabela `jogo_noticia`
--
ALTER TABLE `jogo_noticia`
  ADD CONSTRAINT `id_jogo_fknot` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `id_noticia_fkjogo` FOREIGN KEY (`id_noticia`) REFERENCES `noticia` (`id`);

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `autorfk` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `plataforma_jogo`
--
ALTER TABLE `plataforma_jogo`
  ADD CONSTRAINT `id_jogo_fkplat` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `id_plataforma_fkjogo` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);

--
-- Limitadores para a tabela `tag_noticia`
--
ALTER TABLE `tag_noticia`
  ADD CONSTRAINT `id_noticia_fktag` FOREIGN KEY (`id_noticia`) REFERENCES `noticia` (`id`),
  ADD CONSTRAINT `id_tag_fknot` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
