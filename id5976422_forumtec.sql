-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Abr-2019 às 16:08
-- Versão do servidor: 10.3.14-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5976422_forumtec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(9) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome`, `cpf`, `email`, `telefone`, `status`) VALUES
(6, 'Administrador da Página', '1234', 'forumtec@gmail.com', '', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(9) NOT NULL,
  `id_vinculo` int(9) DEFAULT NULL,
  `tipo_vinculo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id_banner`, `id_vinculo`, `tipo_vinculo`) VALUES
(1, 9, 'n'),
(2, 6, 'p'),
(3, 4, 'p'),
(4, 11, 'p'),
(5, 16, 'o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id_instituicao` int(9) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id_instituicao`, `nome`, `cidade`, `status`) VALUES
(7, 'teste', '', 'i'),
(8, 'ULBRA - GUAÍBA', 'GUAÍBA', 'a'),
(9, 'UNIASSELVI', 'GUAÍBA', 'a'),
(10, 'UNOPAR', 'GUAÍBA', 'a'),
(11, 'UNINTER', 'GUAÍBA', 'a'),
(12, 'WIZARD', 'GUAÍBA', 'a'),
(13, 'UERGS', 'GUAÍBA', 'a'),
(14, 'Colégio Dom Antônio', 'GUAÍBA', 'a'),
(15, 'Cursos Líder', 'GUAÍBA', 'a'),
(16, 'Robotics Builder ', 'GUAÍBA', 'a'),
(17, 'Colégio Augusto Meyer', 'GUAÍBA', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `id_local` int(9) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `capacidade` int(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`id_local`, `nome`, `capacidade`, `status`) VALUES
(3, 'Ulbra Guaíba', 600, 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(9) UNSIGNED NOT NULL,
  `id_autor` int(9) UNSIGNED DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `id_autor`, `titulo`, `data`, `texto`, `imagem`, `status`) VALUES
(8, 6, 'Fórum de educação reúne palestras sobre tecnologia nos dias 02, 03 e 04 de outubro de 2017', '2018-09-13', 'A 7ª edição do Fórum de Educação Profissional e Superior de Guaíba inicia nesta segunda-feira (02 de outubro de 2017) com palestras sobre tecnologia. O evento acontece no auditório da Ulbra Guaíba e reúne uma programação especial até quarta-feira (04 de outubro de 2017).\r\nMercado de trabalho para TI, criatividade, evolução tecnológica, marketing digital, indústria 4.0 e drones aplicados à agricultura de precisão são alguns dos diversos temas que serão abordados. \r\n', '8.jpg', 'a'),
(9, 6, '8º Fórum de Educação e Tecnologia', '2018-09-13', 'O 8º FET- Fórum de Educação e Tecnologia, ocorrerá nos dias 16, 17, 18 de Outubro de 2018 na Ulbra Guaíba. \r\nO tema deste ano é Tecnologias e suas relações de trabalho.\r\nContamos com a presença de todos.\r\nInscrições abertas para palestras e oficinas.\r\nInscreva-se já!', '9.png', 'a'),
(10, 6, '', '2018-09-14', '', '10.jpg', 'a'),
(11, 6, 'Nunca Vai Mudar', '2018-10-02', 'Uma breve história sobre a evolução da tecnologia.', '11.jpg', 'a'),
(12, 6, 'Cronograma de Palestras Dia 16 de Outubro 2018', '2018-10-16', 'Abertura Oficial do Evento às <b>19:00</b><br>\r\nStartups: Um jeito eficiente de transformar uma ideia em um negócio. às <b>19:30</b><br>\r\nPense Digital – O Poder do Marketing Digital às <b>20:30</b><br>\r\n<br>\r\n<b> Oficinas</b><br>\r\nCampeonato de Counter Strike 1.6 às <b>14:00</b><br>\r\nOficina de Yoga às <b> 20:00</b>\r\n', '12.png', 'a'),
(13, 6, 'Cronograma de Palestras Dia 17 de Outubro 2018', '2018-10-17', 'Bushidô: o código samurai e a sua influência na sociedade Japonesa moderna às<b> 14:00</b><br>\r\nUso de Redes Neurais para detecção de objetos utilizando imagens de drone é uma ideia às <b>15:00</b><br>\r\nDrones e o Mercado de Trabalho <b> 16:00 </b><br>\r\nPense Digital – O Poder do Marketing Digital às <b> 19:30 </b><br>\r\nCarreira Empreendedora - Carreira 4.0 às <b>20:30</b><br>\r\n<br>\r\n<b>Oficinas</b><br>\r\nStop Motion em sala de aula às <b>15:00</b><br>\r\nComo elaborar apresentações no Power Point às <b>15:00</b><br>\r\nCom reconhecer e “arrumar” pequenos problemas de hardware. às <b>15:00</b><br>\r\nFormatação de trabalhos acadêmicos nas normas da ABNT às <b>19:30</b><br>\r\nOficina de Yoga às <b>20:00</b><br>', '13.png', 'a'),
(14, 6, 'Cronograma de Palestras Dia 18 de Outubro 2018', '2018-10-17', 'Games, Como Programar às <b>14:00</b><br>\r\nO poder da concentração no ensino EAD às <b>15:00</b><br>\r\nPlataforma de Desenvolvimento: Arduino, Raspberry e ESP 8266 às<b> 19:00</b><br>\r\n(In)Segurança na Internet às <b>20:30</b><br> <b>Oficinas</b><br>\r\nDesenvolvendo um aplicativo com Code Block às <b>15:00</b><br>\r\nIniciando com HTML & CSS às <b>15:00</b><br>\r\nMontagem do Braço Robótico às <b>19:30</b><br>\r\nRaciocínio Lógico com Scratch às <b>19:30</b><br>\r\nIniciando com HTML & CSS às <b>19:30</b><br>\r\nOficina de Yoga às <b>20:00</b><br>\r\n', '14.png', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oficina`
--

CREATE TABLE `oficina` (
  `id_oficina` int(9) UNSIGNED NOT NULL,
  `id_local` int(9) UNSIGNED DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fim` datetime DEFAULT NULL,
  `anexo` varchar(50) DEFAULT NULL,
  `legendaAnexo` varchar(50) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oficina`
--

INSERT INTO `oficina` (`id_oficina`, `id_local`, `titulo`, `descricao`, `inicio`, `fim`, `anexo`, `legendaAnexo`, `imagem`, `status`) VALUES
(8, 3, 'Como elaborar apresentações no Power Point', 'Orientação e Prática para  normas de formatação de apresentação profissional e acadêmica em Power point.\r\n', '2018-10-17 15:00:00', '2018-10-17 16:30:00', NULL, NULL, '8.jpg', 'a'),
(9, 3, 'Formatação de trabalhos acadêmicos nas normas da ABNT', 'Orientação e prática de formatação de artigo científico segundo as normas da ABNT.\r\n', '2018-10-17 19:30:00', '2018-10-17 21:00:00', NULL, NULL, '9.jpg', 'a'),
(10, 3, ' Iniciando com HTML & CSS', 'Aprenda os primeiros passos para criação de web sites e interfaces de aplicações web.\r\n', '2018-10-18 15:00:00', '2018-10-18 16:30:00', NULL, NULL, '10.jpg', 'a'),
(11, 3, 'Iniciando com HTML & CSS ', 'Aprenda os primeiros passos para criação de web sites e interfaces de aplicações web.\r\n', '2018-10-18 19:30:00', '2018-10-18 21:00:00', NULL, NULL, '11.jpg', 'a'),
(12, 3, 'Hardware Descomplicado', 'Com reconhecer e “arrumar” pequenos problemas de hardware.', '2018-10-17 16:00:00', '2018-10-17 17:30:00', '', '', '12.jpg', 'i'),
(13, 3, 'Hardware Descomplicado', 'Com reconhecer e “arrumar” pequenos problemas de hardware.', '2018-10-17 19:30:00', '2018-10-17 21:00:00', '', '', '13.jpg', 'i'),
(14, 3, ' Desenvolvendo um aplicativo com Code Block ', 'O objetivo da oficina é apresentar e capacitar o aluno a desenvolver um aplicativo utilizando a programação estruturada em blocos (Code Block), através da plataforma MIT App Inventor 2.\r\n', '2018-10-18 15:00:00', '2018-10-18 16:30:00', NULL, NULL, '14.jpg', 'a'),
(15, 3, 'Oficina de Yoga', 'Oficina: Educando o corpo através do Yoga.\r\nYoga é uma filosofia que busca promover a qualidade de vida, trabalhando o autoconhecimento, desenvolvendo força, flexibilidade e equilíbrio.', '2018-10-16 20:00:00', '2018-10-16 21:00:00', '', '', '15.jpg', 'a'),
(16, 3, 'Oficina de Yoga', 'Oficina: Educando o corpo através do Yoga.\r\nYoga é uma filosofia que busca promover a qualidade de vida, trabalhando o autoconhecimento, desenvolvendo força, flexibilidade e equilíbrio.', '2018-10-18 20:00:00', '2018-10-18 21:00:00', '', '', '16.jpg', 'a'),
(17, 3, 'Oficina de Yoga', 'Oficina: Educando o corpo através do Yoga.\r\nYoga é uma filosofia que busca promover a qualidade de vida, trabalhando o autoconhecimento, desenvolvendo força, flexibilidade e equilíbrio.', '2018-10-17 20:00:00', '2018-10-17 21:00:00', '', '', '17.jpg', 'a'),
(19, 3, 'Campeonato de Counter Strike 1.6', 'Inscrições através do formulário: <a href=\"https://bit.ly/2yo4XtQ\"> <b>Link do Formulário</b></a>\r\nPara mais informações baixe as regras do jogo, chama a galera e vem se divertir!', '2018-10-16 14:00:00', '2018-10-16 17:30:00', '19.pdf', 'Regras do Jogo', '19.jpg', 'a'),
(20, 3, 'Stop Motion em sala de aula', 'A oficina de Stop Motion visa instrumentalizar professores e alunos para o uso dessa técnica na sala de aula de forma didática utilizando as ferramentas presentes na escola para criar animações através de fotografias digitais e programas como Power Point e Libre Office Impress.', '2018-10-17 15:00:00', '2018-10-17 17:00:00', NULL, NULL, '20.jpeg', 'a'),
(21, 3, 'Raciocínio Lógico com Scratch', 'A oficina apresentará noções básicas de Scratch para apurar o raciocínio lógico de forma pedagógica com aplicações didáticas.\r\n', '2018-10-18 19:30:00', '2018-10-18 21:00:00', NULL, NULL, '21.png', 'a'),
(22, 3, 'Montagem do Braço Robótico', 'Demonstração de montagem do braço robótico.\r\nSerá realizada na sala 217, campus Ulbra Guaíba.', '2018-10-18 19:30:00', '2018-10-18 21:00:00', '', '', '22.jpg', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestra`
--

CREATE TABLE `palestra` (
  `id_palestra` int(9) UNSIGNED NOT NULL,
  `id_local` int(9) UNSIGNED DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fim` datetime DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `anexo` varchar(50) DEFAULT NULL,
  `legendaAnexo` varchar(50) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palestra`
--

INSERT INTO `palestra` (`id_palestra`, `id_local`, `titulo`, `descricao`, `inicio`, `fim`, `token`, `anexo`, `legendaAnexo`, `imagem`, `status`) VALUES
(1, 3, 'Um dia na vida de um programador', 'Ut euismod ipsum mollis risus aliquam, tempus tristique turpis gravida. Sed fermentum metus id velit aliquam sodales. Mauris vel nulla scelerisque, consequat massa vitae, rutrum dui. Sed varius, odio vitae mattis volutpat, leo dui egestas felis, eu porta eros lorem non leo. Fusce et quam ullamcorper, vulputate eros non, placerat nisl. Donec et efficitur nisl. Phasellus at sapien id velit viverra condimentum. Donec fringilla nibh id felis fermentum, ut porta odio porta.\r\n\r\n', '2018-08-22 16:00:00', '2018-08-22 17:00:00', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1.jpg', 'i'),
(2, 3, 'A UERGS Atuando na Geração de Inovação e Sustentabilidade', 'Para entendermos como ações de sustentabilidade podem fazer parte da nossa rotina, primeiramente é necessário entender o que significa sustentabilidade. Sustentabilidade trata-se do desenvolvimento que seja capaz de suprir as necessidades da geração atual sem comprometer a capacidade de atender as necessidades das futuras gerações, ou seja, sem esgotar os recursos para o futuro. A UERGS tem atuado fortemente em ações que promovam o desenvolvimento, a pesquisa e a extensão de forma a trazer soluções inovadoras que tragam maior conforto e bem-estar para as pessoas, porém, sendo parceiro do nosso planeta. A tentativa é harmonizar dois objetivos: o desenvolvimento econômico associado a novas soluções e a conservação ambiental. Com isso esperamos popularizar a ciência e a tecnologia na sociedade brasileira e despertar o interesse dos estudos por novas tecnologias, desenvolvimento de softwares e ações de desenvolvimento sustentável, aproximando estas tecnologias da comunidade em geral e promovendo a desmistificação do conhecimento científico. Como forma de ampliar o potencial de divulgação e popularização da ciência, estamos promovendo na Uergs com a participação da população em geral diversos eventos, projetos, palestras, maratonas e olimpíadas dentro desta temática que serão apresentados durante a palestra.', '2018-10-16 14:00:00', '2018-10-16 16:00:00', 'c81e728d9d4c2f636f067f89cc14862c', NULL, NULL, '2.jpg', 'i'),
(3, 3, 'Mineração de dados - dos conceitos às aplicações e sua influência na atualidade', 'Com os avanços tecnológicos, a queda do preço do hardware e o aumento da capacidade de armazenamento, muitas instituições, desde as mais simples até as mais complexas, armazenam suas informações em meio digital. A EMC Corporation, empresa americana conhecida por desenvolver soluções para armazenamento dados, divulgou, que o volume de dados produzidos alcance 44 trilhões de gigabytes em 2020. Porém, esse volume de dados precisa fazer algum sentido, gerar alguma informação que seja útil a fim de servir de apoio em tomadas de decisões. Para extrair informações nessas bases de dados, podem-se aplicar técnicas tradicionais de consultas em bases de dados, porém, estas se tornam limitantes quando há necessidade de se apresentar resultados mais elaborados, como busca de padrões, descoberta de conhecimento, realização de predições, entre outros, é preciso aplicar técnicas de Mineração de Dados. Dessa forma, ao utilizar Mineração de Dados é possível conhecer melhor sobre, por exemplo, os clientes de uma empresa, sobre quais produtos devam estar em quais locais para alavancar as vendas de um cliente, com a finalidade de personalizar um serviço ou um atendimento.', '2018-10-17 15:30:00', '2018-10-17 17:00:00', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '', '', '3.jpg', 'i'),
(4, 3, 'O poder da concentração no ensino EAD ', 'Inevitavelmente, o ensino EAD veio para ficar. Com o avanço da tecnologia, o ensino EAD também avança e se tornará em um futuro próximo uma opção sem igual de ensino. Mas, assim como existem inúmeras vantagens nesse sistema de ensino, existem algumas barreiras que dificultam o aprendizado. A principal barreira que se tem verificado é a falta de capacidade que algumas pessoas têm em se concentrar. E é fato que o poder de concentração tem a ver com o controle da mente. Aliás, controlar a mente resolveria muitos de nossos problemas; a má notícia é que isto é extremamente difícil. Neste cenário atual em que vive nossa sociedade, onde há uma enxurrada de informações vindas das mais variadas fontes, parece que chegar a um nível de concentração está cada vez mais difícil. Esta palestra procura mostrar alternativas para se chegar a um nível aceitável de concentração quando se trata de estudar para o EAD.', '2018-10-18 15:30:00', '2018-10-18 17:00:00', 'a87ff679a2f3e71d9181a67b7542122c', NULL, NULL, '4.jpg', 'a'),
(5, 3, 'Eletrônica Analógica e Acústica', '', '2018-10-16 15:00:00', '2018-10-16 17:00:00', 'e4da3b7fbbce2345d7772b0674a318d5', NULL, NULL, '5.jpg', 'i'),
(6, 3, '(In)Segurança na Internet ', '', '2018-10-18 20:30:00', '2018-10-18 22:00:00', '1679091c5a880faf6fb5e6087eb1b2dc', NULL, NULL, '6.jpg', 'a'),
(7, 3, 'Uso de Redes Neurais para detecção de objetos utilizando imagens de drone é uma ideia', 'Uso de Redes Neurais é considerado uma forma de inteligência artificial. E esta pode ser usada para detecção de objetos utilizando imagens de drone e trazer avanços em diversas áreas.', '2018-10-17 15:00:00', '2018-10-17 15:30:00', '8f14e45fceea167a5a36dedd4bea2543', '', '', '7.jpg', 'a'),
(8, 3, 'Bushidô: o código samurai e a sua influência na sociedade Japonesa moderna', 'A prática do Bushidô deu aos japoneses valores que tornaram possível criar uma economia superpoderosa, uma sociedade justa baseada na manufatura de produtos de elevado valor tecnológico. Tudo isso, mesmo sendo um pais assolado por catástrofes naturais (terremotos, tsunamis e furacões). Mesmo após serem derrotados em uma guerra onde foram alvo de duas bombas atômicas (Em Hiroshima e Nagasaki em 1945). Mesmo um desastre nuclear recente (Usina Nuclear de Fukushima 2011). Quais os segredos destas práticas?', '2018-10-17 14:00:00', '2018-10-17 15:00:00', 'c9f0f895fb98ab9159f51fd0297e236d', '', '', '8.jpg', 'a'),
(9, 3, 'Crise!? Não no mercado de TI', 'Sem Spoiler !', '2018-10-17 19:00:00', '2018-10-17 22:00:00', '45c48cce2e2d7fbdea1afc51c7c6ad26', '', '', '9.jpg', 'i'),
(10, 3, 'Pense Digital – O Poder do Marketing Digital', 'Uma palestra inovadora para quem tem vontade de ingressar no mercado Digital Business, ou que tenha uma grande ideia ou até um sonho que precisa tirar do papel. Nessa palestra você vai conhecer mais sobre tendências, cenários, ferramentas e aplicações nesse mudo digital.\r\nAssim como o futuro das novas tecnologias, revelam e provocam transformações, o Marketing Digital apresentado de forma objetiva, ilumina o universo de muitos profissionais.\r\nVenha conhecer mais sobre o poder do marketing digital e seus influenciadores, entenda como fazer parte disso em sua profissão, no seu dia –a –dia. O primeiro passo nunca é fácil, mas com essa mentoria, o caminho para o sucesso é logo ali.\r\n', '2018-10-17 19:30:00', '2018-10-17 20:30:00', 'd3d9446802a44259755d38e6d163e820', '', '', '10.jpg', 'a'),
(11, 3, 'Startups: Um jeito eficiente de transformar uma ideia em um negócio.', 'O mercado de trabalho e a criação de Startups.', '2018-10-16 19:30:00', '2018-10-16 20:30:00', '6512bd43d9caa6e02c990b0a82652dca', '', '', '11.jpeg', 'a'),
(12, 3, 'Plataforma de Desenvolvimento: Arduino, Raspberry e ESP 8266', '', '2018-10-18 19:30:00', '2018-10-18 21:00:00', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '12.jpg', 'a'),
(14, 3, 'O poder da concentração no ensino EAD', 'Inevitavelmente, o ensino EAD veio para ficar. Com o avanço da tecnologia, o ensino EAD também avança e se tornará em um futuro próximo uma opção sem igual de ensino. Mas, assim como existem inúmeras vantagens nesse sistema de ensino, existem algumas barreiras que dificultam o aprendizado. A principal barreira que se tem verificado é a falta de capacidade que algumas pessoas têm em se concentrar. E é fato que o poder de concentração tem a ver com o controle da mente. Aliás, controlar a mente resolveria muitos de nossos problemas; a má notícia é que isto é extremamente difícil. Neste cenário atual em que vive nossa sociedade, onde há uma enxurrada de informações vindas das mais variadas fontes, parece que chegar a um nível de concentração está cada vez mais difícil. Esta palestra procura mostrar alternativas para se chegar a um nível aceitável de concentração quando se trata de estudar para o EAD.', '2018-10-18 15:30:00', '2018-10-18 17:00:00', 'aab3238922bcc25a6f606eb525ffdc56', '', '', '14.jpg', 'i'),
(15, 3, 'teste', '', '2018-10-09 17:00:00', '2018-10-09 19:00:00', '9bf31c7ff062936a96d3c8bd1f8f2ff3', '', '', '15.jpg', 'i'),
(16, 3, 'Carreira Empreendedora - Carreira 4.0', 'Madaleine Schein é Diretora da Schein Gestão Empresarial, Diretora de Gestão Empresarial, Inovação e Qualidade da ASBRAV, integrante do Comitê de Inovação da ABRH, Presidente do Comitê Regional da Qualidade de Cachoeirinha – PGQP (2012/2013), avaliadora do Programa Gaúcho de Qualidade e Produtividade – PGQP, membro da Sociedade Brasileira de Gestão do Conhecimento – SBGC, Mestre em Administração e Negócios pela Pontifícia Universidade Católica do Rio Grande do Sul – PUCRS, especialista em Comércio Exterior com ênfase em Empresas de Pequeno Porte pela Universidade Católica de Brasília – UCB, MBA em Marketing pela Escola Superior de Propaganda e Marketing – ESPM, Pós-Graduada em Análise de Sistemas pela Pontifícia Universidade Católica do Rio Grande do Sul – PUCRS, formada em Tecnólogo em Processamento de Dados na Universidade do Vale do Rio dos Sinos – UNISINOS, possui ampla experiência profissional como consultora de negócios e carreiras especializada em Inteligência Competitiva, professora universitária, coach e palestrante.', '2018-10-17 20:30:00', '2018-10-17 21:30:00', 'c74d97b01eae257e44aa9d5bade97baf', '', '', '16.jpg', 'a'),
(17, 3, 'Drones e o mercado de trabalho', 'Os Drones são aplicáveis em inúmeras áreas e com diversas funcionalidades, e ainda existem muitos mercados ocultos que, no futuro, podem vir a ter demanda, além de muitas oportunidades a novos profissionais. O mercado de Drones aplicado à agricultura é uma das áreas que mais cresce no mundo. Acredita-se que esta área será responsável por 80% do mercado no futuro. Aliados ao Drone, a área de inteligência artificial e seus métodos fornecem ferramentas que são fundamentais para extrar informações em imagens de forma automática, ou seja, sem ajuda do humano, trazendo confiabilidade e rapidez em tomadas de decisões.', '2018-10-17 16:00:00', '2018-10-17 17:00:00', '70efdf2ec9b086079795c442636b55fb', '', '', '17.jpg', 'a'),
(18, 3, 'Games, Como Programar', '', '2018-10-18 14:00:00', '2018-10-18 15:00:00', '6f4922f45568161a8cdf4ad2299f6d23', NULL, NULL, '18.jpg', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestrante`
--

CREATE TABLE `palestrante` (
  `id_palestrante` int(9) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palestrante`
--

INSERT INTO `palestrante` (`id_palestrante`, `nome`, `cpf`, `email`, `endereco`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `descricao`, `status`) VALUES
(2, 'Dr Arnaldo César Ramos', '88866644432', 'dr@arnaldo.com', 'rua fernando de noronha', 'Flores laranjas', 'Porto city', 'pc', '98500000', '99135576', 'Profissional da Ã¡rea de TI desde 1998, Dr Arnaldo jÃ¡ foi premiado diversas vezes pela academia internacional de tecnologia.', 'i'),
(3, 'Vitória Ramos Leite', '33355544423', 'vitoria@leite.com', 'rua oscar lima', 'limoeiro ', 'SÃ£o luis ', 'sl', '94500000', '99881223', '', 'i'),
(4, 'Carlos Saldanha Filho', '77788866654', 'carlito@gmail.com', 'alvorada negra', 'escuridÃ£o', 'trevas city', 'ft', '98700000', '99654323', 'Melhor programador ever.', 'i'),
(5, 'Débora Motta ', '', '', '', '', '', '', '', '', 'Débora Motta é professora na Universidade Estadual do Rio Grande do Sul - UERGS, Guaíba, Brasil, desde 2014. Obteve o título de doutorado em Ciência da Computação, pela Universidade Federal do Rio Grande do Sul - UFRGS, em 2013, Porto Alegre, Brasil e o título de mestre também em Ciência da Computação pela mesma universidade, em 2010. Possui graduação em Engenharia em Sistemas Digitais pela UERGS em 2007. Realizou uma colaboração no Politecnico di Milano, Itália, em 2011 e o doutorado sanduíche no CEA-Leti, Grenoble, França em 2012. Suas principais pesquisas são na área de sistemas digitais, arquitetura e organização de computadores, sistemas adaptativos e multiprocessados em chip.', 'a'),
(6, 'Fabrícia Damando Santos ', '', '', '', '', '', '', '', '', 'Fabrícia Damando Santos atualmente é professora da Universidade Estadual do Rio Grande do Sul no curso de Engenharia de Computação, Coordenou o Curso de Especialização em Educação em Engenharia e Ensino de Ciências e Matemática. Possui doutorado em Informática na Educação pela UFRGS/PPGIE. Cursou bacharelado em Ciência da Computação pela PUC-Goiás e cursou o mestrado em Engenharia Elétrica e de Computação pela Universidade Federal de Goiás. É especialista em Mídias na Educação. Foi professora na UFG. Tem experiência na área de Ciência da Computação, atuando principalmente nos seguintes temas: mineração de dados e mineração de dados educacionais, banco de dados, computação afetiva, engenharia de software além de atuar na área de informática educativa no desenvolvimento de tecnologias para apoio no processo de aprendizagem nos diversos níveis e áreas do conhecimento. É uma apaixonada pelo ensino! ', 'a'),
(7, 'Madaleine Schein', '', '', '', '', '', '', '', '', 'Madaleine Schein é Diretora da Schein Gestão Empresarial, Diretora de Gestão Empresarial, Inovação e Qualidade da ASBRAV, integrante do Comitê de Inovação da ABRH, Presidente do Comitê Regional da Qualidade de Cachoeirinha – PGQP (2012/2013), avaliadora do Programa Gaúcho de Qualidade e Produtividade – PGQP, membro da Sociedade Brasileira de Gestão do Conhecimento – SBGC, Mestre em Administração e Negócios pela Pontifícia Universidade Católica do Rio Grande do Sul – PUCRS, especialista em Comércio Exterior com ênfase em Empresas de Pequeno Porte pela Universidade Católica de Brasília – UCB, MBA em Marketing pela Escola Superior de Propaganda e Marketing – ESPM, Pós-Graduada em Análise de Sistemas pela Pontifícia Universidade Católica do Rio Grande do Sul – PUCRS, formada em Tecnólogo em Processamento de Dados na Universidade do Vale do Rio dos Sinos – UNISINOS, possui ampla experiência profissional como consultora de negócios e carreiras especializada em Inteligência Competitiva, professora universitária, coach e palestrante.', 'a'),
(8, 'Bruno Dalapicola Bergamaschi de Souza ', '', '', '', '', '', '', '', '', 'Bruno Dalapicola Bergamaschi de Souza é consultor em Tecnologia da Informação.', 'a'),
(9, 'Dalijares Santos Jardim ', '', '', '', '', '', '', '', '', 'Dalijares Santos Jardim é Técnico em Eletrônica Industrial.', 'a'),
(10, 'Elgio Schlemer ', '', '', '', '', '', '', '', '', 'Elgio Schlemer atua por mais de dez anos como administrador de redes no Instituto de Informática da Ufrgs. Atualmente professor da Ulbra em diversas disciplinas incluindo Redes e Segurança. Nas disciplinas de programação faz questão de destacar práticas seguras de programação. Autor de diversos artigos sobre firewall e criptografia no portal Viva o Linux.', 'a'),
(11, 'Vinícius Roratto', '', '', '', '', '', '', '', '', 'Vinícius Roratto é jornalista formado pela PUCRS, especializado em comunicação digital e estudante de engenharia da computação pela UFRGS. Trabalha para a PixForce coordenando os setores de processamento de imagens e desenvolvimento. Desde o início de carreira se especializou em imagens, seja  operando câmeras DSLR, seja buscando padrões em ortorretificações, imagens de Drones ou satélites.', 'a'),
(12, 'Letícia Guimarães', '', '', '', '', '', '', '', '', 'Letícia Guimarães é Professora na Universidade Estadual do Rio Grande do Sul - UERGS, desde 2010. Possui graduação em Engenharia Elétrica pela Pontifícia Universidade Católica do Rio Grande do Sul (1987), mestrado em Engenharia Elétrica - Instrumentação Eletrônica pela Universidade Federal do Rio Grande do Sul (1997) e doutorado em Ciência de Computação e Engenharia de Sistemas - Muroran Institute of Technology no Japão (2002). Tem experiência na área de processamento digital de sinais, com ênfase em processamento de imagens, atuando principalmente nos seguintes temas: processamento de imagem, classificação e reconhecimento automático de padrões, segmentação de imagens, microscopia óptica e visão computacional.', 'a'),
(13, 'Eduardo Isaia Filho', '', '', '', '', '', '', '', '', 'Eduardo Isaia Filho é graduado em Ciência da Computação pela Universidade de Santa Cruz do Sul (2000), Mestre em Computação pela Universidade Federal do Rio Grande do Sul (2003) e Google Certified Innovator (2014) e Google Certified Trainer (2017). Atualmente coorderna os processos de Tecnologias Digitais na Aprendizagem na ULBRA. Apaixonado por: tecnologias, ministrar aulas, escalar em rocha e compartilhar conhecimento.', 'a'),
(14, 'Priscila Cunha', '', '', '', '', '', '', '', '', 'Priscila Cunha é formada em Formada em Administração de Empresas Bacharel, Pós- graduada em Comunicação e Publicidade Digital pela ESIC (Escola especializada em administração e marketing em Curitiba/PR), pós graduando em Coaching, extensões pela ESPM em Planejamento Estratégico e Comunicação, profissional formada através da Academia Digital em marketing digital avançado, certificações pelo Google. Marketing Digital . Comunicação e Marketing . Consultora. Professora de Marketing Digital e Administração de Empresas. Há mais de 8 anos, atuo com marketing  estratégico e agora com estratégias de marketing digital, entre as áreas de atuação focada em planejamento, gerenciamento de projetos e estratégias para o plano de comunicação. Com experiência em pesquisa de inteligência de mercado para atacado e varejo, realizei atendimento e projetos para empresas como Carrefour, Kraft Foods, Wal-Mart, Boticário entre outras. ', 'a'),
(15, 'Edison da Silva Campos', '', '', '', '', '', '', '', '', 'Edison da Silva Campos é orientador na Uninter Polo Guaíba, desde 2015, com enfoque nas disciplinas que envolvam operações matemáticas dos cursos de Engenharia (Produção, Elétrica e de Computação), Licenciatura em Matemática e alguns cursos referentes à gestão.  Formado em Engenharia Elétrica pela PUCRS e com mestrado em engenharia ligada ao setor de Celulose e Papel pela Universidade Federal de Santa Maria, trabalhou durante a maior parte de sua carreira nesse setor. No entanto, durante muitos anos foi professor de Matemática, Estatística e Física, buscando sempre tornar o aprendizado dessas disciplinas o menos traumático possível,  o que fez com que se tornasse um entusiasta quando o assunto é o ensino e, principalmente, o ensino à distância (EAD).', 'a'),
(16, 'Márcio Roberto da Silva da Silva', '', '', '', '', '', '', '', '', 'é Pós-doutorado em gestão de territórios de inovação pela UJI - Universidade Jaume I de Castellón/Espanha no Parque Científico e Tecnológico Espaitec (2016), mestrado e doutorado em ensino de ciências e matemática pela Ulbra - Universidade Luterana do Brasil (2006 e 2015), especialização em análise de sistemas pela Unisinos - Universidade do Vale do Rio dos Sinos (1994) e graduação em tecnologias em processamento de dados pela ULBRA - Universidade Luterana do Brasil (1992). É professor dos cursos da área de tecnologia e computação da ULBRA desde 1994, atuando na graduação e pós-graduação. Atual Diretor de Inovação da ULBRA. Já atuou como empreendedor nas empresas Info World Tecnologia e Informática Ltda., Mais Automação Tecnologias Inteligentes e da Prevacine Clínica de Vacinas, Terra Brasilis Bar e Choperia, Churrasco e Cia Alimentos e Safra Online. Tem experiência na área de gestão do ensino superior tendo trabalho durante 15 anos na coordenação dos cursos de informática da ULBRA e em administração com ênfase em empreendedorismo em informática, atuando principalmente nos seguintes temas: informática na educação, empreendedorismo em informática, gestão da inovação, automação comercial e engenharia de software. Tem como áreas de interesse de pesquisa: gestão da inovação; territórios inovadores, humanos e inteligentes.', 'a'),
(17, 'Dionata Nunes', '', '', '', '', '', '', '', '', 'Analista de desenvolvimento de software pleno at Cliever Tecnologia. Bacharel em Engenharia de Sistemas Digitais. Experiência profissional como  desenvolvedor de sistemas. Pesquisa, desenvolvimento e execução de projetos e atividades relacionados a produtos e serviços da área de computação, tecnologias móveis, energia e automação.', 'a'),
(18, 'Mônica S. Wazlawick', '', '', '', '', '', '', '', '', 'Licenciada em Biologia pela  Faculdade de Tecnologia e Ciência- FTC/ BA. Pós Graduação em Metodologia do Ensino na Educação Superior – Centro Universitário Internacional Uninter. Atualmente orientadora acadêmica do polo de apoio presencial Uninter - Guaíba.', 'a'),
(19, 'Jaqueline da S. M. de Barros ', '', '', '', '', '', '', '', '', 'Licenciada em Letras pela Universidade Luterana do Brasil e especialista em Supervisão Escolar pelo Centro Universitário Internacional Uninter. Atualmente é professora da rede pública de ensino e coordenadora pedagógica do polo de apoio presencial Uninter – Guaíba.\r\n', 'a'),
(20, 'Palmer Oliveira', '', '', '', '', '', '', '', '', 'Trabalha como Web Developer há mais de 8 anos,  estudante de Ciência da Computação na Ulbra Gravataí/RS. Tem uma profunda vontade de aprender e entender como as coisas funcionam.\r\n', 'a'),
(21, 'Douglas Garcia', '', '', '', '', '', '', '', '', 'Técnico em Informática, acadêmico do Curso de Análise e Desenvolvimento de Sistemas.\r\n', 'a'),
(22, 'Taiz Santos', '', '', '', '', '', '', '', '', 'Acadêmica do Curso de Análise e Desenvolvimento de Sistemas.', 'a'),
(23, 'Jaqueline Bencke', '', 'jaquebencke@yahoo.com.br', '', '', '', '', '', '', 'Formada em Samkya Sádhana Yoga – Filosofia e prática e Yoga para crianças. Experiência de 10 anos na área e 2 anos como instrutora.', 'a'),
(24, 'FET', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(25, 'Lincoln Vinicius Schreiber', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(26, 'Delvin Carvalho', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(27, 'João Gustavo Atkinson Amorim', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(28, 'João Gustavo Atkinson Amorim', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(29, 'Francisco Silva', '', 'fetguaiba@gmail.com', '', '', '', '', '', '', '', 'a'),
(30, 'Rafael Wandame Luz', '', 'forumtec@gmail.com', '', '', '', '', '', '', '', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestrante_oficina`
--

CREATE TABLE `palestrante_oficina` (
  `id_palestrante_oficina` int(11) NOT NULL,
  `id_palestrante` int(9) UNSIGNED NOT NULL,
  `id_oficina` int(9) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palestrante_oficina`
--

INSERT INTO `palestrante_oficina` (`id_palestrante_oficina`, `id_palestrante`, `id_oficina`) VALUES
(17, 18, 9),
(18, 19, 9),
(19, 18, 8),
(20, 19, 8),
(21, 20, 10),
(22, 20, 11),
(25, 22, 14),
(34, 24, 19),
(36, 23, 17),
(37, 23, 16),
(38, 23, 15),
(39, 30, 20),
(40, 30, 21),
(42, 21, 12),
(43, 21, 13),
(44, 15, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestrante_palestra`
--

CREATE TABLE `palestrante_palestra` (
  `id_palestrante_palestra` int(11) NOT NULL,
  `id_palestrante` int(9) UNSIGNED NOT NULL,
  `id_palestra` int(9) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palestrante_palestra`
--

INSERT INTO `palestrante_palestra` (`id_palestrante_palestra`, `id_palestrante`, `id_palestra`) VALUES
(28, 2, 1),
(29, 3, 1),
(30, 4, 1),
(52, 15, 4),
(55, 10, 6),
(57, 8, 5),
(58, 9, 5),
(59, 5, 2),
(67, 16, 11),
(73, 21, 15),
(74, 22, 15),
(79, 29, 18),
(81, 6, 3),
(82, 11, 7),
(83, 12, 8),
(84, 25, 17),
(85, 26, 17),
(86, 27, 17),
(87, 14, 10),
(89, 13, 9),
(90, 15, 14),
(92, 7, 16),
(93, 17, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `id_participante` int(9) UNSIGNED NOT NULL,
  `id_instituicao` int(9) UNSIGNED DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id_participante`, `id_instituicao`, `nome`, `cpf`, `email`, `telefone`, `status`) VALUES
(32, NULL, 'Miguel Roque de Souza', '01725797089', 'miguel.rocker@gmail.com', '51996665387', 'a'),
(34, 10, 'Kelly Matos Rodrigues Carvalho', '73747360025', 'kr.matos@hotmail.com', '51995010703', 'a'),
(35, 8, 'Luterobarbossa@hotmail.com', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(36, 8, 'Luterobarbossa@hotmail.com', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(37, NULL, 'Lutero Barbosa', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(38, NULL, 'Lutero Barbosa', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(39, NULL, 'Lutero Barbosa', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(40, NULL, 'Lutero Barbosa', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(41, NULL, 'Lutero Barbosa', '60108901017', 'Luterobarbossa@hotmail.con', '984364442', 'a'),
(42, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(43, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '996544254', 'a'),
(44, NULL, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '996544254', 'a'),
(45, NULL, 'Leticia Menezes Pereira', '', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(46, 9, 'Sara Micaela Fagundds Peter', '03444269048', 'sarahmika99@gmail.com', '51996015604', 'a'),
(47, 9, 'Sara Micaela Fagundes Peter', '034.442.690', 'sarahmika99@gmail.com', '51996015604', 'a'),
(48, 9, 'Daiane Ferreira Podel', '86696629068', 'daipodel18@hotmail.com', '51999987033', 'a'),
(49, 9, 'Daiane Ferreira Podel', '86696629068', 'daipodel18@hotmail.com', '51999987033', 'a'),
(50, 9, 'AMANDA FERREIRA', '03724818092', 'amanda.ferreira9995@gmail.com', '51995588878', 'a'),
(51, NULL, 'AMANDA FERREIRA', '03724818092', 'amanda.ferreira9995@gmail.com', '51995588878', 'a'),
(52, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(53, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(54, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(55, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(56, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(57, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(58, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(59, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(60, 9, 'GESER FILIPE OLIVEIRA SPAGIARI', '02889966070', 'geserfilipe@hotmail.com', '995376974', 'a'),
(61, 8, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(62, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(63, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(64, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(65, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(66, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(67, 12, 'carlos', '86782177072', 'jp-taltrax@hotmail.com', '99147455', 'a'),
(68, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(69, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(70, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(71, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(72, NULL, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(73, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(74, 8, 'João Pedro da Silva Fernandes Teste', '86782177072', 'jp-taltrax@hotmail.com2', '99147455', 'a'),
(75, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(76, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(77, 9, 'Priscila Cunha', '00592701018', 'priscilaops@yahoo.com.br', '51999555661', 'a'),
(78, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(79, NULL, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabrieleghisio@gmail.com', '5199955634', 'a'),
(80, 8, 'Lucas', '', 'lucaspbecker@gmail.com', '99887766', 'a'),
(81, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(82, NULL, 'MANOBROWN', '86998876545', 'manito@gmail.com', '99147455', 'a'),
(83, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(84, NULL, 'MANOBROWNDOIS', '99988877722', 'manitobrown2@gmail.com', '99840630', 'a'),
(85, 8, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(86, NULL, 'Maria Adelina Raupp Sganzerla', '55446353072', 'masganzerla@gmail.com', '5130264859', 'a'),
(87, 9, 'Camila Maciel', '81876262087', 'milabmaciel@gmail.com', '51982962051', 'a'),
(88, 9, 'Priscila Cunha', '00592701018', 'priscila.cunha@pensemark.com.br', '51999555661', 'a'),
(89, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(90, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(91, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(92, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(93, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(94, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'Brunagabriele2009@hotmail.com', '51999556381', 'a'),
(95, NULL, 'Kassio Andrade conte', '03026457051', 'Kciondrade@hotmail.com', '51980200014', 'a'),
(96, 9, 'Kelen da Costa Martins', '02645684009', 'kelenmartins16@hotmail.com', '51998121046', 'a'),
(97, 9, 'Andreza Araujo Fernandes', '03500928005', 'andreza---fernandes@hotmail.com', '51991805132', 'a'),
(98, 13, 'Kenny Douglas Grzesczak', '03070758002', 'kennydouglas.g@gmail.com', '51992540939', 'a'),
(99, 9, 'GESER FILIPE OLIVEIRA SPAGIARI', '02889966070', 'geserfilipe@hormail.com', '51995376974', 'a'),
(100, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(101, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(102, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(103, 9, 'JULIANE', '86645480059', 'JULIANE_SAVEDRA@HOTMAIL.COM.BR', '51993293741', 'a'),
(104, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(105, 9, 'Bruna Gabriele Ghisio Schaussard', '01690339020', 'brunagabriele2009@hotmail.com', '51999556381', 'a'),
(106, NULL, 'Fabiano Nunes dos santos', '76369730068', 'f.n.santos2006@gmail.com', '51999895774', 'a'),
(107, 9, 'Priscila Cunha', '00592701018', 'Priscilamktdigital@gmail.com', '51999666881', 'a'),
(108, 9, 'Daiane Ferreira Podel', '86696629068', 'daipodel18@hotmail.com', '51999987033', 'a'),
(109, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(110, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(111, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(112, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(113, 9, 'Leticia Menezes Pereira', '00257746030', 'leticiamenezes2021@gmail.com', '51996544254', 'a'),
(114, 9, 'Julia Justino', '03418262007', 'vanderleijustino@hotmail.com', '996943735', 'a'),
(115, 8, 'Paulo César Santos Couto', '63408503087', 'paulocouto@imobiliariaguaiba.com.br', '999911485', 'a'),
(116, NULL, 'Jairo antônio viana salvador', '26921413004', 'jairosalvador@imobiliariaguaiba.com.br', '51981331911', 'a'),
(117, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(118, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(119, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(120, 9, 'Bruno Figueredo da Silva', '04392802060', 'bruno.figueredo.1@gmail.com', '51997887318', 'a'),
(121, 9, 'Elisabete Cardoso Walczaki', '74794574053', 'elisabetewalczaki@gmail.com', '51996936492', 'a'),
(122, 8, 'Leonardo de Oliveira Meirelles', '', 'leo2meirelles@hotmail.com', '998833818', 'a'),
(123, 8, 'Fernanda Walker', '68129319004', 'fernandawalk@gmail.com', '991236030', 'a'),
(124, 8, 'cristiano marques fonseca', '02141476062', 'cristianomf90@gmail.com', '51997460653', 'a'),
(125, NULL, 'Flávio da Silva Pereira', '00330063006', 'flavio15spereira@gmail.com', '996530820', 'a'),
(126, 9, 'Antônio Rudinei da Silva Souza', '00359008062', 'tony_rudy_souza@hotmail.com', '998030556', 'a'),
(127, 9, 'Suane Barros da Luz', '01175056090', 'suanebarros@outlook.com', '996490111', 'a'),
(128, 8, 'Matheus De Brida', '', 'matheusbrida@gmail.com', '51998951559', 'a'),
(129, 9, 'rosilene kunde pontes', '02139852095', 'kunderosilene@gmail.com', '51995114962', 'a'),
(130, NULL, 'Marcos Vinicius Pontes', '02378991088', 'marcosvinicius25225@gmail.com', '51982318222', 'a'),
(131, 8, 'Jhonatan Frade', '94262470253', 'jhone.rondonia@gmail.com', '51991750880', 'a'),
(132, 8, 'Leonardo Barão Berbigier', '03950839070', 'lberbigier123@gmail.com', '51995174255', 'a'),
(133, 8, 'Luan Carlos Fink', '03608020012', 'finkluan@gmail.com', '981091410', 'a'),
(134, 8, 'Guilherme Mayer', '03256816002', 'mayergr@outlook.com', '51996515107', 'a'),
(135, 8, 'Eduardo', '03345569027', 'silvapereiraeduardo@gmail.com', '51994061351', 'a'),
(136, 8, 'Jhonatan Frade', '94262470253', 'jhone.rondonia@gmai.com', '51991750880', 'a'),
(137, 8, 'Micael Silva', '02924077001', 'micael0711@gmail.com', '51997618493', 'a'),
(138, 8, 'Davi Vicente', '06445319912', 'davinv96@outlook.com', '51997437391', 'a'),
(139, 8, 'Michel Oczust Moraes', '', 'michel.oczust@mail.com', '982964852', 'a'),
(140, NULL, 'Viviane Alves Goulart', '03642686036', 'vivianegoulart97@gmail.com', '995888351', 'a'),
(141, NULL, 'Danilo ferreira dos reis', '03306878081', 'danilo1993reis@hotmail.com', '51986365521', 'a'),
(142, 8, 'Gisele Abreu Abreu', '68262019091', 'eletrobivolt@terra.com.br', '999783424', 'a'),
(143, NULL, 'Mailine Dias', '04620519006', 'maicardoso98@gmail.com', '51997209141', 'a'),
(144, NULL, 'Lázaro Morrudo Schuch', '58412875087', 'lazaroschuch@gmail.com', '51985542028', 'a'),
(145, NULL, 'Marcio Padula', '00359417078', 'marcio.padula@hotmail.com', '993455259', 'a'),
(146, NULL, 'Willian Maia Silveira', '83717188020', 'willianmaiasilveira29@gmail.com', '51993331212', 'a'),
(147, NULL, 'Carlos Eduardo Coutinho Innocente', '', 'hcidao.1@gmail.com', '51993599568', 'a'),
(148, NULL, 'Maicon', '03186436001', 'maicon_massiirer@hotmail.com', '985192357', 'a'),
(149, NULL, 'Gabriel Dias Coquejo', '04317023067', 'gabrielcoquejo@outlook.com', '995888418', 'a'),
(150, NULL, 'jessica carrabba', '84719672000', 'jessicamottacarrabba@gmail.com', '51993468332', 'a'),
(151, NULL, 'ALESSANDRO ROSA RIBEIRO', '', 'aleribeiro1305@hotmail.com', '998002508', 'a'),
(152, NULL, 'graziela rainys', '92554717087', 'graziela.r@hotmail.com', '51984047254', 'a'),
(153, NULL, 'rosito da silva figueira', '00257018000', 'rositodasilvafigueira@gmail.com', '51991088730', 'a'),
(154, NULL, 'vanessa correa', '02026837023', 'vanessacorrea@hotmail.com', '51999172499', 'a'),
(155, NULL, 'Vladimir Oliveira Guimarães', '', 'vladimiroliveiraguima@gmail.com', '51998687482', 'a'),
(156, 8, 'ALEXSANDER MAXIMILIANO OLIVEIRA DE MEDEIROS', '00228020026', 'ALEXSANDERMEDEIROS40@GMAIL.COM', '99825044', 'a'),
(157, NULL, 'Alana Guterres', '04133173074', 'alana.guterres99@gmail.com', '51999180627', 'a'),
(158, NULL, 'Wellinson Barreto da Silva', '03268295045', 'wellinson.sivasud@gmail.com', '51998403668', 'a'),
(159, NULL, 'Mauricio Boeira Campos', '93373848091', 'boeiracamposmano@gmail.com', '995437180', 'a'),
(160, NULL, 'Filipe de Lima Couto', '04305242001', 'filipelimacouto@gmail.com', '51997683528', 'a'),
(161, NULL, 'GABRIEL KOELZER ALVES', '03030537048', 'gabrielkalves@gmail.com', '51996629061', 'a'),
(162, 17, 'Alessandro Silva Lacerda Pereira', '04187945024', 'alessandroslpcontato@gmail.com', '995055469', 'a'),
(163, NULL, 'Douglas dos Santos Conceição', '04517982017', 'douglasconceicao1818@gmail.com', '9977493458', 'a'),
(164, 17, 'Paulo Ricardo Silva da Silva', '', 'guaiba753@gmail.com', '51980251073', 'a'),
(165, 9, 'Andreza Beatriz da Silva Rodrigues', '04875325037', 'Andrezabiasr@gmail.com', '995081463', 'a'),
(166, 17, 'claudenir gularte gadea', '45737398072', 'claudenirgadea@gmail.com', '51981634011', 'a'),
(167, NULL, 'claudenir gularte gadea', '45737398072', 'claludenirgadea@gmail.com', '51981634011', 'a'),
(168, 17, 'Roger Ambos Barbosa', '01435101006', 'roger.maggot@gmail.com', '51993492002', 'a'),
(169, 17, 'André Colvara Spagiari', '00688298095', 'andre.colvara@gmail.com', '51995073692', 'a'),
(170, NULL, 'Giuliano Martins Terra', '90005481015', 'gmterra1@hotmail.com', '51998320341', 'a'),
(171, NULL, 'MAIQUE DE SOUZA BITENCOURT', '03006684060', 'MAIQUESOUZABITENCOURT@HOTMAIL.COM', '997781622', 'a'),
(172, 17, 'pablo vieira salvador', '02752480032', 'pablovieira09@hotmail.com', '995893546', 'a'),
(173, 17, 'Andre Rodrigues dos Anjos', '53161564049', 'andrerodriguesdosanjos@gmail.com.br', '999380458', 'a'),
(174, 17, 'Edemilson Ramos', '', 'edemilson.silva98@gmail.com', '999920260', 'a'),
(175, 17, 'lucas lemos de oliveira', '84676493053', 'llemos500@gmail.com', '51997732172', 'a'),
(176, 8, 'Hebert Stanley', '80797040072', 'hebertstanley@gmail.com', '51984963581', 'a'),
(177, 17, 'Bruno Bandeira Pereira', '03623565059', 'brunoabandeira@gmail.com', '995133259', 'a'),
(178, NULL, 'Márcia Gabriela Souza Bastos', '', 'gabrelbibi@gmail.com', '51996467624', 'a'),
(179, 17, 'Nicholas Amadeus Hoffmann', '02350649040', 'nicholas.hoffmann377@gmail.com', '999476299', 'a'),
(180, NULL, 'Matheo Rocha de Souza', '04823816048', 'math.sou@hotmail.com', '51985434872', 'a'),
(181, 8, 'Emerson Pakulski Antunes', '00352158018', 'emersonpantunes@gmail.com', '51998084120', 'a'),
(182, 9, 'Fernanda de Souza Schulz', '02724630009', 'fernandaschulzfg@gmail.com', '51996480815', 'a'),
(183, 9, 'Larissa Silva Barreto', '04158201039', 'larissa032128@gmail.com', '98445961', 'a'),
(184, NULL, 'Bruno Pires Bugert', '04351330040', 'Bruno_bugert@hotmail.com', '96338544', 'a'),
(185, 9, 'Kelly Rodrigues Da Silva', '01634878043', 'kelly.rodr.silva@gmail.com', '51996806547', 'a'),
(186, NULL, 'Gabriel Pintanel Duarte', '84701714020', 'gabriel@protefix.com.br', '997211408', 'a'),
(187, 8, 'Lilian Dornelles Otta', '03918448061', 'lilian.dornelles@icloud.com', '51999813990', 'a'),
(188, 17, 'BÁRBARA BARROS LOPES', '', 'BARBARALOPES210@GMAIL.COM', '995566028', 'a'),
(189, 17, 'BÁRBARA BARROS LOPES', '', 'BARBARALOPES219@GMAIL.COM', '995566028', 'a'),
(190, 17, 'Addy guilherme Dias de Oliveira', '04945045590', 'GuilhermeDias210701@gmail.com', '981701275', 'a'),
(191, 17, 'Brenda da Silva Andriotti', '04991604010', 'brendadasilvaandriotti@gmail.com', '980168512', 'a'),
(192, 17, 'ALDAIR JOSÉ PIRES VIEIRA JUNIOR', '', 'BILLSENAC@GMAIL.COM', '9822433504', 'a'),
(193, 17, 'Bruno Rosa Simoes', '04713830070', 'bruno.simoes.0516@gmail.com', '980405986', 'a'),
(194, 17, 'gabriel xavier souza', '03265886042', 'xgabriel04@gmail.com', '982201741', 'a'),
(195, 8, 'vinicius de souza chepp', '05184180045', 'viniciuschepp2018@gmail.com', '51984576597', 'a'),
(196, 17, 'ISADORA SABRIELE LOPES DA SILVA', '05463705003', 'isadoralopes626@gmail.com', '999193057', 'a'),
(197, NULL, 'Douglas', '04250152030', 'teixeiradouglas16@gmail.com', '980594475', 'a'),
(198, NULL, 'weslley schuch', '04975513064', 'schuchweslley@gmail.com', '998566772', 'a'),
(199, 17, 'alexandra ketlyn Medeiros da Silva dos Santos', '05264458073', 'alexandramedeiros220@gmail.com', '51996900093', 'a'),
(200, 17, 'Nicolle Allama', '04836770009', 'allamanicolle2001@gmail.com', '980250252', 'a'),
(201, 8, 'Estela sanguine Freitas', '02705768009', 'Estela.freitas@hotmail.com', '997626182', 'a'),
(202, 17, 'Vivian Andrielle Verli Fraga', '03089866013', 'mara.rubia.e.andre@gmail.com', '51995366102', 'a'),
(203, 17, 'Rodolfo dos Santos Carneiro', '86845322015', 'rodolfo_carneiro@outlook.com', '997052857', 'a'),
(204, 9, 'Michele Cury Scopel', '85048534034', 'michele_scopel@hotmail.com', '980570423', 'a'),
(205, NULL, 'Leonardo Bernardes Leite', '03102439047', 'leonardobernardescf@hotmail.com', '51996332101', 'a'),
(206, 17, 'vinicius debon', '05181920080', 'viniciusdebonduarte@gmail.com', '982604671', 'a'),
(207, 17, 'carolina da costa azambuja', '', 'carolcostta82@gmail.com', '997286634', 'a'),
(208, 17, 'LUCAS RATNIEKS', '04988253023', 'LRATNIEKS@gmail.com', '51998460923', 'a'),
(209, 17, 'Róberti Ferraz', '04109470080', 'robertiferraz16@gmail.com', '996750894', 'a'),
(210, 17, 'muniky couto de freitas', '', 'muniky.freitas@icloud.com', '998199177', 'a'),
(211, 17, 'Kauani Gonçalves', '', 'goncalveskauani20@gmail.com', '993721442', 'a'),
(212, 17, 'Allan Maxsuell', '', 'allanmaxsuell909@gmail.com', '995813263', 'a'),
(213, NULL, 'Jadilson Martins', '01121220066', 'Jadinson.martins@gmail.com', '51997073062', 'a'),
(214, 9, 'Marcia da Silva Anselmo', '97522279020', 'marciasilvaanselmo@yahoo.com.br', '51995114979', 'a'),
(215, NULL, 'Jose Luis de Avellar Bento', '14007177015', 'bento.proman@gmail.com', '51999706874', 'a'),
(216, 9, 'Sani Medeiros Mendes da Silva', '98498304091', 'sanimedeirosmendes@gmail.com', '51996045071', 'a'),
(217, NULL, 'JULIANA ZUCHETTI', '00211340200', 'zu_zuchetti@yahoo.com.br', '51997904648', 'a'),
(218, NULL, 'Cristina Pinhatti Heidrich', '00618568000', 'cristinapinhatti@hotmail.com', '999133813', 'a'),
(219, 9, 'Gilberto Tech Ferreira', '00873317050', 'gilberto.tech.f@gmail.com', '51999103990', 'a'),
(220, NULL, 'Ana Paula Trindade Pessoa', '94350191020', 'anatrindii@hotmail.com', '51997810787', 'a'),
(221, NULL, 'Miguel Roque de Souza', '01725797089', 'miguel.rocker@gmail.com', '51996665387', 'a'),
(222, 17, 'Bruno da Silva Fagundes', '03774009040', 'Bruno.s_fagundes@hotmail.com', '51998337236', 'a'),
(223, 9, 'Lethicia cartana de oliveira pereira', '87434032049', 'le.cartana@hotmail.com', '995000597', 'a'),
(224, 9, 'Regina Cruz de Oliveira', '00885152069', 'Regininhaco06@gmail.com', '51992289352', 'a'),
(225, 9, 'Safira Mendes Branco', '03185375084', 'safira_branco@outlook.com', '5134911999', 'a'),
(226, 9, 'JOAO HENRIQUE MORESCO JACQUES', '03107573043', 'joaohmj@gmail.com', '51989153832', 'a'),
(227, 9, 'Lívia DAvila Pereira', '01032781092', 'liviadavilad@gmail.com', '31140266', 'a'),
(228, 13, 'Adriane Parraga', '88931102020', 'adriane.parraga@gmail.com', '5132889000', 'a'),
(229, 8, 'Thayná Deamici Simão', '02558901095', 'Tanydeamici@gmail.com', '999177057', 'a'),
(230, 9, 'Eduarda Lopes Garcia', '02340266009', 'dudalopesgarcia@hotmail.com', '51996375741', 'a'),
(231, 17, 'Luísa Fernanda Paz do Nascimento', '04619583090', 'pontocom1@live.com', '51999232522', 'a'),
(232, 17, 'Jennifer de Oliveira Neves', '04859817001', 'jennineves28@gmail.com', '51984157609', 'a'),
(233, 17, 'juliana medeiros antunes', '04618019069', 'julianamedeiros671@gmail.com', '55991141514', 'a'),
(234, 17, 'Andresa Isabel Silva da Silva', '05393423004', 'silvaandresa897@gmail.com', '51982211346', 'a'),
(235, 17, 'Emelin De Moura Barreto', '04724334070', 'emelinmoura2@gmail.com', '51996744019', 'a'),
(236, 17, 'Érika Moreto Mielczarski', '03112359054', 'erika.moreto@hotmail.com', '51980432052', 'a'),
(237, 17, 'wellinson Barreto da Silva', '03268295045', 'wellinson.silvasud@gmail.com', '51998403668', 'a'),
(238, NULL, 'Fabíola Florence Ermel', '02910715035', 'fabiolaermel@yahoo.com.br', '51997091201', 'a'),
(239, 17, 'Bruno Dorneles Couto', '04443744002', 'brunnocouto77@gmail.com', '995427408', 'a'),
(240, 8, 'Thainá', '03455949088', 'ttt.gomes@gmail.com', '51999550288', 'a'),
(241, 17, 'vinicius de caldas', '', 'vncsc028@gmail.com', '5199930255', 'a'),
(242, 8, 'Ândrio Hass Taege', '02737573009', 'andrioht@gmail.com', '996461657', 'a'),
(243, 8, 'Lucas Ribeiro Espitalher', '04201978001', 'lucasespitalher@gmail.com', '5198645256', 'a'),
(244, 8, 'Rodrigo Silveira Guterres', '04631720000', 'urodrigosg@gmail.com', '995145539', 'a'),
(245, 17, 'hariel longaray conceição', '03879331073', 'hariel.longaray@outlook.com.br', '999021661', 'a'),
(246, NULL, 'Sérgio Assunção', '03794094883', 'sergio.assuncao@hotmail.com', '5134911999', 'a'),
(247, 9, 'Lucas da Silva Friedrich', '01948005042', 'lucas.silvafriedrich@gmail.com', '980132492', 'a'),
(248, 9, 'Dyenifer Araujo', '01447093097', 'dyeniifer@hotmail.com', '5194293443', 'a'),
(249, 9, 'Kaua Mikoski Jorge', '03249710016', 'kauaadm1@gmail.com', '05183350941', 'a'),
(250, 9, 'Ricardo Santos silva', '96401745053', 'Ricardo.sansil@gmail.com', '34012338', 'a'),
(251, NULL, 'PATRICIA DA MOTA COSTA PINHEIRO', '79698085149', 'patriciamotacosta@yahoo.com.br', '96230073', 'a'),
(252, 9, 'ricardo santos silva', '96401745053', 'rikardo.sansil@gmail.com', '34012338', 'a'),
(253, NULL, 'VIVIAN BARCELLOS', '00389227030', 'vivian_barcellos@hotmail.com', '92951634', 'a'),
(254, NULL, 'FABIANA BRUM', '00651725070', 'fabiana.brum@gmail.com', '998490869', 'a'),
(255, NULL, 'Roselaine Nunes da silva', '02542246017', 'Rozzenunes@gmail.com', '51996143337', 'a'),
(256, 9, 'Clarissa Correia Souza', '86346183087', 'clarissacs_2006@yahoo.com.br', '51997086558', 'a'),
(257, 8, 'Tainá Conceição Machado', '03363091044', 'tainainf@gmail.com', '998196576', 'a'),
(258, 9, 'Jesusalem da Silva Pereira', '33659141020', 'jesusalempereira@bol.com.br', '997341949', 'a'),
(259, 8, 'Jéferson Biasibetti', '02638640069', 'jeferson.biasibetti@hotmail.com', '51991343494', 'a'),
(260, 9, 'Ana luisa silva de oliveira', '01087006074', 'analuisachitao@gmail.com', '51996977960', 'a'),
(261, 9, 'Priscila da Rosa Marcelino ', '00900606010', 'priscilamarcelinoeldoradoobras@gmail.com', '51998390297', 'a'),
(262, NULL, 'JOEL JARDIM DA SILVEIRA', '56557965034', 'joelj.silveira@gmail.com', '51997081924', 'a'),
(263, 9, 'Luana Xavier Simão', '03396491009', 'luana.riodosul@gmail.com', '51997365318', 'a'),
(264, 17, 'Leon Denniz', '03936285071', 'leondeniz2011@gmail.com', '999734355', 'a'),
(265, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(266, NULL, 'Neusi Caetano Martins', '93860560034', 'eletrobivolt@terra.com', '5130551626', 'a'),
(267, NULL, 'Gabriela Souza dos Santos', '05309362088', 'gabrielasouza_santos@hotmail.com', '51998293599', 'a'),
(268, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(269, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(270, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(271, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(272, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(273, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(274, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(275, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(276, NULL, 'Carine da Silva Ferreira', '03311402090', 'carynysilvinhacoltinho@hotmail.com', '51993259733', 'a'),
(277, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(278, NULL, 'Gabriela da Silva maciel', '02430040018', 'gabi_maciel8@Hotmail.com', '993259733', 'a'),
(279, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(280, NULL, 'Victoria Wachoski da silva Thomas', '03246258040', 'victoriasilva.thomas@gmail.com', '989453730', 'a'),
(281, 8, 'Lucas Pacheco Krüger', '04745137001', 'lucaskruger2010@gmail.com', '34020215', 'a'),
(282, 17, 'Paulo Cesar Duarte Vieira', '34891307072', 'pcdvieira@gmail.com', '51996552498', 'a'),
(283, 8, 'Taiz', '', 'gsantostaiz@gmail.com', '51985728671', 'a'),
(284, 8, 'Cleomar Santos', '98702815087', 'cs.cleomarsantos@gmail.com', '51998539876', 'a'),
(285, 17, 'Vitor Ambos Silveira', '03720915042', 'vitor_ambos@hotmail.com', '34032112', 'a'),
(286, NULL, 'Paula Renata Silva de Oliveira', '00198793006', 'spaularenata@gmail.com', '51996870561', 'a'),
(287, NULL, 'Marcia Lisiane da Silva', '01708425098', 'marcia.lisiane@sesirs.org.br', '51997113409', 'a'),
(288, 8, 'José Filipe de Quadros Nunes', '99861844015', 'jfqn5@yahoo.com.br', '995630965', 'a'),
(289, 9, 'Luana Xavier', '03396491009', 'lubsxai52@gmail.com', '51996365318', 'a'),
(290, 8, 'tais nunes de quadros', '01595712003', 'TAIS_NQ@HOTMAIL.COM', '51999119000', 'a'),
(291, NULL, 'Patrícia dos santos', '01055617035', 'patriciamdp@gmail.com', '981852902', 'a'),
(292, 8, 'Gabriel', '', 'gabriel_pasin2011@hotmail.com', '51995811608', 'a'),
(293, 17, 'Débora Colvara Vieira', '60025369067', 'deboracolvara@outlook.com', '51997528232', 'a'),
(294, 8, 'Felipe frade de oliveira pereira', '94262489272', 'felipe_ted2@outlook.com', '51995049979', 'a'),
(295, NULL, 'Eduardo de Oliveira Rosa', '01682228096', 'spore.cria@gmail.com', '982463128', 'a'),
(296, NULL, 'SIMONE DORNELES', '94144036049', 'simone_cdorneles@hotmail.com', '981511202', 'a'),
(297, 8, 'Thalys Garcia da Silva', '02940087059', 'thalys_1999@hotmail.com', '5134041113', 'a'),
(298, 8, 'João Carlos Cabreira', '96454229068', 'Jccabreirajc18@gmail.com', '981070986', 'a'),
(299, NULL, 'Francielly Correa de Souza', '03977538020', 'franciellycorrea@hotmail.com', '51999482092', 'a'),
(300, 8, 'Paulo da Silva Pereira', '86744500082', 'paulosilva9517@gmail.com', '51998589140', 'a'),
(301, NULL, 'Andressa Bosquerolli', '03948002061', 'andressa.bosquerolli@gmail.com', '998360696', 'a'),
(302, 8, 'Marlon Dietrich', '84897600049', 'marlon-dietrich@hotmail.com', '51996707829', 'a'),
(303, 8, 'luiz miguel medronha couto', '04053051096', 'luizmiguel.mc@hotmail.com', '51998225504', 'a'),
(304, 8, 'Gabriel Schnorr Henriques', '04339579050', 'henriques.gabriell@gmail.com', '51996945681', 'a'),
(305, 17, 'Rafael Duarte Lira', '03478499038', 'r.duartelira@gmail.com', '51995102185', 'a'),
(306, 9, 'Alexsader Vasconcelos', '04162933014', 'alexsandervasconcelosdasilva@gmail.com', '5134914359', 'a'),
(307, 9, 'Maria Beatris Azambuja da Silva', '63410966072', 'beatrisazambuja.71@gmail.com', '51996180302', 'a'),
(308, 8, 'Julien Rodrigues do Nascimento', '00128019093', 'julienrn@gmail.com', '999520840', 'a'),
(309, NULL, 'Laura Duarte Pereira Castro', '04393161033', 'lauradpcastro@hotmail.com', '51982830388', 'a'),
(310, 7, 'Ariane Gonzalez', '01557979057', 'ariane_gonzalez27@hotmail.com', '5134800463', 'a'),
(311, NULL, 'Lucas Ferreira Rosa', '02235802010', 'lucasferreirarosa90@gmail.com', '5134911054', 'a'),
(312, 8, 'Raylson', '05058801051', 'raylsonsilva10@gmail.com', '998962058', 'a'),
(313, NULL, 'vitor veiga dias', '04459367033', 'vitorveigadias@gmail.com', '985353829', 'a'),
(314, 9, 'Sara Micaela Fagundes Peter', '03444269048', 'Sarahmika99@gmail.com', '51996015604', 'a'),
(315, 9, 'Innaê Fontoura Martins', '03702026002', 'innaec@yahoo.com', '51993337821', 'a'),
(316, 8, 'Aline Silva De Souza', '02082562026', 'aline.souza.1986@bol.com.br', '51998353400', 'a'),
(317, NULL, 'ANDRIELE ALVES NASCIMENTO', '52669525136', 'amadeubolognesi@gmail.com', '34807072', 'a'),
(318, NULL, 'Miguel Roque de Souza', '01725797089', 'miguel.rocker@gmail.com', '51996665387', 'a'),
(319, 9, 'Cleiton dos Passos Nunes', '02574676025', 'Kleytonpassos@gmail.com', '997681835', 'a'),
(320, 9, 'Roxana Denise Pereira Nuñez', '02398404021', 'roxananunez26@hotmail.com', '998563022', 'a'),
(321, 8, 'Rosária Milene de Oliverira Araujo', '96823712015', 'rosaria.araujonascimento@gmail.com', '996070840', 'a'),
(322, 9, 'Márcia Abreu da Silva', '01890804002', 'marciaabreudasilva2@gmail.com', '5198222191', 'a'),
(323, 9, 'Tuane Olsieski Vasconcelos', '02884238018', 'tuane.vasconcelos@outlook.com', '5134801161', 'a'),
(324, 8, 'Pamela Hols', '02945384027', 'pamelahols@gmail.com', '5130844515', 'a'),
(325, 8, 'Daiane Abdalah', '81680384015', 'day.abdalah@hotmail.com', '51980618226', 'a'),
(326, 9, 'Fernando da Silva Freitas', '00449137023', 'fernandodasilvafreitas@yahoo.com.br', '51996538301', 'a'),
(327, 9, 'Daniela Cardoso machado', '02952956006', 'daniela@hamorim.com.br', '51984306859', 'a'),
(328, 8, 'Fabiane lima Silva', '89477537004', 'Fabianelimalima@gmail.com', '986332372', 'a'),
(329, 9, 'Leonardo Everton Pereira Da Silva', '02258327040', 'leonardo_everton2@hotmail.com', '51996927546', 'a'),
(330, 9, 'Marcelo Oliveira de Abreu', '71438890087', 'mabreu.1750@gmail.com', '51985038452', 'a'),
(331, 9, 'Monique da Silva Nunes', '02687700002', 'moniqquenunes92@gmail.com', '51996573818', 'a'),
(332, 9, 'Jessica de caldas engel', '02562911016', 'Jessik.engel@gmail.com', '997911126', 'a'),
(333, 8, 'Paula Alixandra Collor', '01066312095', 'paulacollor40@gmail.com', '51996630680', 'a'),
(334, 8, 'Erica Beatriz da Rosa Gomes', '02559523094', 'ericabeatrizgomes@gmail.com', '51984470104', 'a'),
(335, 9, 'Rosita da Conceição', '96405694020', 'zitacolorada@gmail.com', '992568952', 'a'),
(336, 9, 'Rosangela Lima de freitas', '98683136000', 'Rosangela.limafreitas@gmail.com', '51998557870', 'a'),
(337, NULL, 'Alex Geremias Leal', '00053403061', 'alexgleal@gmail.com', '51997009041', 'a'),
(338, 8, 'Josiane Baguinski', '02832819010', 'Josiane.baguinski@gmail.com', '997302116', 'a'),
(339, 8, 'Thais petri', '03409103058', 'Thaispetri27@gmail.com', '996094776', 'a'),
(340, 9, 'Karine Farias Fagundes', '02686697083', 'Karinefarias431@gmail.com', '51980469399', 'a'),
(341, 9, 'Sharon Antunes', '03808593008', 'Antunessharon@gmail.com', '51997204900', 'a'),
(342, 9, 'Aline velho torres', '01993605029', 'Alinne123v@gmail.com', '51997700139', 'a'),
(343, 9, 'Patricia Lima de freitas', '00362128065', 'Patylf@hotmail.com', '51996355384', 'a'),
(344, 8, 'Mirian Souza', '78473756053', 'mirianmirian15@hotmail.com', '998378623', 'a'),
(345, 8, 'Bruna Silva menna', '04433071056', 'Mennabruna02@gmail.com', '51996460147', 'a'),
(346, NULL, 'Oziel Souza da Silva', '03056763002', 'ozielsouza4@hotmail.com', '51995155005', 'a'),
(347, NULL, 'renan', '05093800007', 'renan_cabreira@hotmail.com', '99840630', 'a'),
(348, 8, 'Bruno Arena de Vargas', '03962727035', 'brunoarenavargas@hotmail.com', '997433480', 'a'),
(349, NULL, 'William Bierhals da costa', '03195534002', 'bierhals.william@gmail.com', '980278875', 'a'),
(350, NULL, 'Julio Cesar', '52750060044', 'juliosouzapaz@gmail.com', '995327901', 'a'),
(351, NULL, 'Andre vieira', '93131119004', 'contato@guaibabox.com.br', '51999835185', 'a'),
(352, NULL, 'Pablo Ribeiro Isquierdo', '01372604073', 'Ysquyerdo@yahoo.com.br', '51997606878', 'a'),
(353, NULL, 'Giovani Marcomin Cavaler', '07451071928', 'Giovanicavaler26@gmail.com', '981051341', 'a'),
(354, NULL, 'Fernanda Korpalski Papke', '01142695050', 'fernanda_papke@yahoo.com.br', '51991712341', 'a'),
(355, 9, 'Felipe Medeiros Lopes', '03399996080', 'felipeemedeiroslopes@gmail.com', '995759243', 'a'),
(356, NULL, 'Rodrigo Mette', '93527667091', 'rmette.mette@gmail.com', '999733261', 'a'),
(357, NULL, 'Leovan da Silva ferreira', '01400822041', 'Leovanferreira@yahoo.com.br', '986250540', 'a'),
(358, NULL, 'IURI LUIS JORGE DE ANDRADE', '83248323000', 'iurigrunge@hotmail.com', '982171903', 'a'),
(359, 8, 'Silvio Willian Pimentel Gonçalves', '86479903072', 'silviowillianpg@gmail.com', '985361726', 'a'),
(360, 8, 'Bruno Corrêa Herdina', '03334136019', 'brunoherdina@outlook.com', '995880535', 'a'),
(361, 8, 'Helena Giovana Wirvas de Antoni', '03554351016', 'helenaantoni03@gmail.com', '51995277785', 'a'),
(362, NULL, 'Letícia Abreu Carvalho', '02995509079', 'letty.abreu@hotmail.com', '51998526801', 'a'),
(363, NULL, 'Leo', '', 'leo.lvs@gmail.com', '9996244857', 'a'),
(364, 8, 'Gustavo Schranck', '02287197044', 'gustavo.schranck@gmail.com', '996221136', 'a'),
(365, 8, 'Rudieri de Medeiros', '03525768044', 'rudierimedeiros@yahoo.com.br', '997251226', 'a'),
(366, 9, 'Gabrielly Ribeiro da Rosa', '02971806065', 'Gabriellyribeiro963@gmail.com', '51998060805', 'a'),
(367, 8, 'Anaí Antunes da Silva', '97349380020', 'anaiantunes@outlook.com', '51984287013', 'a'),
(368, NULL, 'João Pedro Marques dos Santos', '02426968052', 'laforeze99@gmail.com', '985608756', 'a'),
(369, 8, 'Karen Pinzon de Souza', '05069722085', 'kahsark@gmail.com', '991864081', 'a'),
(370, 17, 'JATNIEL PEIXOTO', '03136036570', 'jatniel.peixoto1@gmail.com', '51998621562', 'a'),
(371, 8, 'Viviane de Oliveira Machado', '03154624007', 'vivianedeoliveira9@hotmail.com', '997881403', 'a'),
(372, 8, 'Jéssica da Silva Martins ', '03776753005', 'jessica.santanalopes@hotmail.com', '997868646', 'a'),
(373, 8, 'Alexandre Willy Hencke Lourenze', '03343343064', 'alexandre.lourenze@gmail.com', '998741232', 'a'),
(374, 8, 'Luciana M Hein', '', 'lucianamphein@gmail.com', '51981102617', 'a'),
(375, 8, 'Eliane Perin', '', 'perineliane@yahoo.com.br', '51981142145', 'a'),
(376, 8, 'Silvia Regina Baum Bruniczaki', '02263969080', 'silviareginabaum@gmail.com', '998792168', 'a'),
(377, 8, 'Alice Oliveira de Oliveira', '02011598052', 'Aliceoliveiramedeiros@gmail.com', '986114363', 'a'),
(378, NULL, 'Michele Sirlem Fagundes Cirne', '03197347064', 'michelefagundescirne@gmail.com', '51996020374', 'a'),
(379, 8, 'Adair da silva', '99030560010', 'adairdsilva@gmail.com', '51993107008', 'a'),
(380, 8, 'Vilma', '98148842000', 'villmadarosa@gmail.com', '5130681007', 'a'),
(381, 8, 'Mario Oliveira', '94129169068', 'mvcolmail@gmail.com', '997848800', 'a'),
(382, 8, 'Davi da Silva Correa', '95332243049', 'davcorrea.ti@gmail.com', '984507169', 'a'),
(384, 8, 'Aglai Machado de Medeiros', '04500306013', 'demedeirosglai@gmail.com', '995020939', 'a'),
(385, NULL, 'Cristiano do Santos Borges', '70154317004', 'cris-bor@bol.com.br', '984551858', 'a'),
(386, NULL, 'André da Cruz', '63418991068', 'ttandrecruz@gmail.com', '999057090', 'a'),
(387, 8, 'Lucas do Santos Araujo', '02319662022', 'lucaaraujo21@yahoo.com.br', '998333438', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante_oficina`
--

CREATE TABLE `participante_oficina` (
  `id_participante_oficina` int(10) UNSIGNED NOT NULL,
  `id_oficina` int(9) UNSIGNED NOT NULL,
  `id_participante` int(9) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participante_oficina`
--

INSERT INTO `participante_oficina` (`id_participante_oficina`, `id_oficina`, `id_participante`) VALUES
(3, 11, 65),
(4, 14, 68),
(5, 11, 67),
(6, 11, 74),
(7, 11, 82),
(8, 11, 86),
(9, 9, 121),
(10, 14, 148),
(11, 11, 148),
(12, 16, 143),
(13, 11, 144),
(14, 11, 153),
(15, 16, 144),
(16, 16, 153),
(17, 10, 144),
(18, 10, 153),
(19, 14, 144),
(20, 14, 153),
(21, 13, 162),
(22, 11, 162),
(23, 13, 157),
(24, 16, 157),
(25, 14, 162),
(26, 14, 157),
(27, 12, 157),
(28, 8, 157),
(29, 12, 162),
(30, 10, 157),
(31, 10, 162),
(32, 11, 181),
(33, 16, 204),
(34, 16, 217),
(35, 15, 218),
(36, 15, 217),
(37, 17, 218),
(38, 16, 238),
(39, 15, 238),
(40, 16, 240),
(41, 15, 240),
(42, 17, 240),
(43, 13, 244),
(44, 16, 251),
(45, 15, 253),
(46, 17, 253),
(47, 16, 254),
(48, 17, 254),
(49, 15, 254),
(50, 16, 265),
(51, 15, 267),
(52, 20, 267),
(53, 16, 268),
(54, 16, 269),
(55, 16, 270),
(56, 16, 271),
(57, 16, 272),
(58, 16, 273),
(59, 16, 274),
(60, 15, 277),
(61, 17, 279),
(62, 20, 280),
(63, 10, 281),
(64, 12, 281),
(65, 21, 144),
(66, 22, 144),
(67, 13, 144),
(68, 13, 144),
(69, 13, 144),
(70, 13, 144),
(71, 13, 144),
(72, 16, 290),
(73, 15, 291),
(74, 16, 296),
(75, 17, 296),
(76, 11, 309),
(77, 16, 310),
(78, 14, 311),
(79, 8, 311),
(80, 8, 312),
(81, 9, 311),
(82, 9, 316),
(83, 9, 216),
(84, 13, 216),
(85, 16, 344),
(86, 16, 371),
(87, 21, 372),
(88, 11, 372),
(89, 21, 373),
(90, 16, 377);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante_palestra`
--

CREATE TABLE `participante_palestra` (
  `id_participante_palestra` int(9) UNSIGNED NOT NULL,
  `id_palestra` int(9) UNSIGNED NOT NULL,
  `id_participante` int(9) UNSIGNED NOT NULL,
  `entrada` datetime DEFAULT NULL,
  `entrada_lat` double DEFAULT NULL,
  `entrada_lng` double DEFAULT NULL,
  `saida` datetime DEFAULT NULL,
  `saida_lat` double DEFAULT NULL,
  `saida_lng` double DEFAULT NULL,
  `user_ip` varchar(45) DEFAULT NULL,
  `user_agent` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participante_palestra`
--

INSERT INTO `participante_palestra` (`id_participante_palestra`, `id_palestra`, `id_participante`, `entrada`, `entrada_lat`, `entrada_lng`, `saida`, `saida_lat`, `saida_lng`, `user_ip`, `user_agent`) VALUES
(5, 11, 81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 10, 83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 11, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 10, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 6, 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 4, 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 9, 92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 10, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 11, 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 9, 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 11, 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 6, 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 4, 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 10, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 11, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 10, 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 10, 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 6, 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 6, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 11, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 10, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 11, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 10, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 9, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 9, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 6, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 12, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 6, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 10, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 11, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 10, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 9, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 10, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 6, 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 6, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 10, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 10, 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 11, 113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 10, 114, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 10, 115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 10, 116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 6, 117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 12, 118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 9, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 11, 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 10, 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 11, 122, '2018-10-16 22:16:19', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; LG-D337 Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36'),
(55, 10, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 10, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 11, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 11, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 10, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 9, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 12, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 6, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 6, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 12, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 9, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 7, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 7, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 8, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 8, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 11, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 10, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 11, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 10, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 10, 129, '2018-10-16 23:23:48', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-K430 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(76, 11, 129, '2018-10-17 00:30:27', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-K430 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(77, 11, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 10, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 9, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 9, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 6, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 6, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 15, 80, '2018-10-09 20:17:13', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G610M Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(84, 3, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 10, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 11, 132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 11, 131, '2018-10-16 22:20:56', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.1.0; Moto G (5) Build/OPP28.85-16) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(88, 10, 133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 10, 132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 11, 133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 10, 134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 11, 135, '2018-10-16 22:15:01', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532MT Build/MMB29T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(93, 12, 136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 11, 137, '2018-10-17 00:31:48', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.0.0; moto g(6) Build/OPSS27.82-87-3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(95, 11, 134, '2018-10-16 22:21:48', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532MT Build/MMB29T; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 Mobile Safari/537.36'),
(96, 6, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 11, 138, '2018-10-16 22:18:44', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1'),
(98, 10, 135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 10, 137, '2018-10-17 00:30:56', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.0.0; moto g(6) Build/OPSS27.82-87-3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(100, 11, 139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 6, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 12, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 4, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 9, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 14, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 8, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 9, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 10, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 11, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 6, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 12, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 4, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 3, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 14, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 7, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 8, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 10, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 10, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 12, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 11, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 6, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 11, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 6, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 9, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 6, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 12, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 11, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 12, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 10, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 10, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 11, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 6, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 10, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 9, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 9, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 6, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 6, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 10, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 12, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 11, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 12, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 10, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 6, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 12, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 6, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 12, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 6, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 9, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 4, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 9, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 4, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 11, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 11, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 11, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 11, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 9, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 11, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 9, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 6, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 6, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 12, 158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 11, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 12, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 12, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 12, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 4, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 6, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 9, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 4, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 9, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 9, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 9, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 12, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 12, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 9, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 9, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 12, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 10, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 4, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 12, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 6, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 12, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 9, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 9, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 3, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 12, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 6, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 10, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 9, 158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 11, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 10, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 14, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 11, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 10, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 10, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 9, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 9, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 7, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 12, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 10, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 7, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 7, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 10, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 12, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 4, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 6, 158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 8, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 11, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 8, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 9, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 8, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 9, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 10, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 11, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 3, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 3, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 14, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 11, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 3, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 11, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 7, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 12, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 11, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 11, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 8, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 6, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 10, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 11, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 6, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 16, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 12, 164, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 12, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 4, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 16, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 9, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 6, 165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 3, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 7, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 6, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 12, 165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 8, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 12, 166, '2018-10-18 22:02:17', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-K430 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(249, 10, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 4, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 11, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 9, 165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 16, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 9, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 10, 165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 3, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 14, 167, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 11, 165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 6, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 11, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 11, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 12, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 10, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 9, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 4, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 11, 170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 10, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 11, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 11, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 16, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 14, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 12, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 18, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 9, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 6, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 9, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 9, 170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 10, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 16, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 16, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 16, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 9, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 11, 173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 12, 170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 12, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 9, 173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 17, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 9, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 12, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 6, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(294, 6, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(295, 12, 173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(297, 7, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 18, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 11, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(300, 12, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 8, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 10, 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 10, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 11, 176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 6, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 10, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 9, 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 9, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 10, 176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, 16, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 12, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 12, 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 6, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, 6, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, 6, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, 9, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 10, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(318, 12, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(319, 4, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 14, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(321, 18, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(322, 16, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(323, 9, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(324, 17, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(325, 7, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 8, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(327, 10, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(328, 11, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(329, 6, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(330, 12, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(331, 4, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(332, 14, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(333, 18, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(334, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(335, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(336, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(337, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(339, 16, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(340, 9, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(341, 17, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 7, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 8, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 10, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 11, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(346, 4, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(347, 14, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 18, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(349, 16, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(350, 6, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(351, 17, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 12, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(353, 7, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(354, 16, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(355, 8, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 9, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 10, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(358, 11, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 10, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 11, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(361, 6, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 12, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(363, 16, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(364, 9, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 11, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 10, 182, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 10, 183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 18, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 10, 184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 10, 185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 10, 186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 11, 187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 10, 187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 11, 188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 10, 189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(376, 10, 190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 10, 191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 11, 190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 11, 191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 10, 192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 11, 193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 11, 192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 10, 193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(386, 10, 194, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 10, 195, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(388, 11, 195, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(389, 11, 194, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(390, 11, 196, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 11, 197, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(392, 10, 196, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(393, 10, 197, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(394, 10, 198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(395, 11, 198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(396, 11, 199, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(397, 10, 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(398, 11, 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(400, 11, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(401, 11, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 6, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(403, 12, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(404, 11, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(405, 10, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(406, 10, 205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(407, 10, 206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(408, 10, 207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(409, 11, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(410, 11, 205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(411, 10, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(412, 11, 207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(413, 10, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(414, 11, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(416, 10, 211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(417, 10, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(419, 10, 212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(421, 11, 206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(422, 11, 211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(423, 11, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(425, 11, 212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(429, 10, 213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(430, 11, 214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(431, 11, 215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(432, 10, 214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(433, 10, 215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(434, 9, 216, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(435, 10, 219, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(436, 10, 220, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(437, 12, 221, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(438, 9, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(439, 9, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(440, 4, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(441, 4, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(442, 6, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(443, 6, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(444, 12, 222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(445, 9, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(446, 9, 223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(447, 9, 224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(448, 9, 225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(449, 9, 226, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(450, 9, 227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(451, 7, 228, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(452, 9, 229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(453, 9, 230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(454, 10, 231, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(455, 10, 232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(456, 11, 232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(457, 11, 233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(458, 11, 234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 11, 235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(460, 11, 236, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(461, 10, 233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(462, 10, 234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(463, 10, 235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(464, 10, 236, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(465, 6, 237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 10, 237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 11, 237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(468, 11, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(469, 6, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(470, 16, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(471, 12, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(472, 16, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(473, 17, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(474, 9, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(475, 10, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(476, 7, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(477, 6, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(478, 16, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(479, 10, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 6, 241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 10, 241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 11, 241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 11, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 10, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(489, 9, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(490, 16, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 6, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 12, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(493, 11, 243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(494, 12, 243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 16, 243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 10, 243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 11, 244, '2018-10-16 22:16:10', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; ASUS_X00ID Build/NMF26F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(499, 10, 244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 9, 244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 11, 225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 12, 245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 11, 246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 9, 247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(506, 9, 248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(507, 9, 249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(508, 9, 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(509, 10, 252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(510, 9, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(511, 9, 256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(512, 11, 257, '2018-10-16 22:15:02', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1'),
(513, 10, 257, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(514, 9, 258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(515, 11, 259, '2018-10-16 22:15:18', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1'),
(516, 10, 259, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(518, 9, 260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(519, 9, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(520, 10, 262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(521, 6, 262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(522, 12, 262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(523, 11, 262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(529, 9, 263, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(530, 12, 264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(531, 9, 264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(532, 10, 266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(533, 11, 266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(534, 10, 267, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(535, 4, 267, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(536, 4, 275, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(537, 6, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(539, 6, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(540, 12, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(541, 12, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(542, 16, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(543, 16, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(544, 10, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(545, 9, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(546, 9, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(547, 10, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(548, 11, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(549, 11, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(550, 18, 281, '2018-10-18 19:36:34', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJ25.93-14) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36'),
(551, 9, 281, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(552, 6, 282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(553, 12, 282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(554, 16, 282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(555, 9, 282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(556, 10, 282, '2018-10-16 23:39:23', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-X230 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36'),
(557, 11, 282, '2018-10-16 23:33:02', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-X230 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36'),
(558, 18, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(559, 16, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(560, 11, 283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(561, 10, 283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(562, 11, 284, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(563, 6, 283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(564, 6, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(565, 12, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(566, 16, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(567, 9, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(568, 10, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(569, 11, 285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(570, 10, 286, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(571, 10, 287, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(572, 6, 287, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(573, 6, 286, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(574, 6, 288, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(575, 9, 289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(576, 11, 292, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(577, 10, 292, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(578, 9, 293, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(579, 16, 293, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(580, 11, 294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(581, 18, 295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(582, 10, 294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(583, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(584, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(585, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(586, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(587, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(588, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(589, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(590, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(591, 10, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(592, 11, 288, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(593, 11, 80, '2018-10-16 22:47:13', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G610M Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(594, 10, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(595, 11, 281, '2018-10-16 22:25:47', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4) Build/MPJ24.139-50) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36'),
(596, 10, 281, '2018-10-17 00:28:30', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4) Build/MPJ24.139-50) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36'),
(597, 11, 297, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(598, 10, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(599, 11, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(600, 16, 299, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(601, 11, 300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(602, 12, 299, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(603, 16, 301, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(604, 11, 302, '2018-10-16 22:16:22', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-K430 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(605, 10, 302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(606, 11, 303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(607, 11, 304, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(608, 11, 305, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(609, 9, 306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(610, 9, 307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(611, 6, 293, '2018-10-18 22:04:20', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G610M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/7.4 Chrome/59.0.3071.125 Mobile Safari/537.36'),
(612, 12, 293, '2018-10-18 22:29:29', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G610M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/7.4 Chrome/59.0.3071.125 Mobile Safari/537.36'),
(613, 10, 303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(614, 10, 308, '2018-10-16 23:31:21', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360M Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36'),
(615, 3, 311, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(616, 14, 311, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(617, 12, 313, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(618, 8, 311, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(619, 9, 313, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(620, 10, 314, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(621, 10, 315, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(622, 8, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(623, 7, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(624, 17, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(625, 16, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(626, 16, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(627, 17, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(628, 10, 316, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(629, 17, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(630, 4, 317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(631, 17, 281, '2018-10-17 19:26:33', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJ25.93-14) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36'),
(632, 16, 227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(633, 16, 318, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(634, 16, 225, '2018-10-17 23:57:11', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-H815 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(635, 10, 225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(636, 16, 223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(637, 10, 223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(638, 16, 256, '2018-10-17 23:56:22', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.1.0; Moto G (5S) Build/OPP28.65-37-2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(639, 16, 248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(640, 10, 248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(641, 16, 260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(642, 10, 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(643, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(644, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(645, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(646, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(647, 10, 224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(648, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(649, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(650, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(651, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(652, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(653, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(654, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(655, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(656, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(657, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(658, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(659, 16, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(660, 16, 224, '2018-10-17 23:56:30', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; Moto G Play Build/NPIS26.48-43-2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(661, 10, 260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(662, 10, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(663, 16, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(664, 16, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(665, 16, 165, '2018-10-17 23:56:32', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-H815 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(666, 16, 249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(667, 10, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(668, 10, 249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(669, 10, 247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(670, 16, 247, '2018-10-18 00:09:40', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-K430 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(671, 16, 255, '2018-10-17 23:50:03', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; LG-M320 Build/NRD90U; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 Mobile Safari/537.36'),
(672, 10, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(673, 16, 302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(674, 16, 319, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(675, 10, 216, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(676, 16, 216, '2018-10-17 23:25:40', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; SM-G570M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(677, 16, 230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(678, 10, 230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(679, 16, 289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(680, 10, 289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(681, 16, 320, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(682, 16, 229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(683, 10, 229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(684, 16, 226, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(685, 10, 226, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(686, 16, 308, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(687, 10, 321, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(688, 16, 321, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(689, 10, 306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(690, 10, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(691, 10, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(692, 16, 306, '2018-10-17 23:55:18', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0; LG-H815 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(693, 10, 322, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(694, 16, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(695, 10, 323, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(696, 10, 324, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(697, 10, 227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(698, 16, 307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(699, 16, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(700, 10, 325, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(701, 10, 326, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(702, 10, 327, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(703, 10, 328, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(704, 16, 328, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(705, 10, 329, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(706, 10, 330, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(707, 10, 331, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(708, 16, 324, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(710, 10, 332, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(712, 10, 333, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(713, 16, 258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(714, 10, 258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(715, 10, 334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(716, 10, 335, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(717, 16, 333, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(718, 16, 334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(719, 10, 336, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(720, 10, 337, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(721, 10, 338, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(722, 10, 339, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(723, 10, 340, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(724, 10, 341, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(725, 10, 342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(726, 10, 343, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(727, 16, 244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(728, 16, 294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(729, 10, 344, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(730, 16, 345, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(731, 10, 346, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(732, 10, 347, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(733, 10, 348, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(734, 10, 349, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(735, 10, 350, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(736, 10, 351, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(737, 10, 352, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(738, 10, 353, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(739, 16, 351, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(740, 16, 352, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(741, 10, 354, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(742, 10, 355, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(743, 16, 346, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(745, 10, 356, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(746, 10, 357, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(747, 16, 353, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(748, 16, 357, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(750, 16, 348, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(751, 10, 358, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(753, 16, 354, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(754, 16, 358, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(755, 10, 359, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(758, 10, 360, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(759, 16, 359, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(760, 16, 360, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(761, 10, 361, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(762, 10, 295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(763, 16, 361, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(764, 10, 362, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(766, 16, 295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(767, 16, 362, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(768, 10, 364, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(769, 10, 365, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(770, 10, 366, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `participante_palestra` (`id_participante_palestra`, `id_palestra`, `id_participante`, `entrada`, `entrada_lat`, `entrada_lng`, `saida`, `saida_lat`, `saida_lng`, `user_ip`, `user_agent`) VALUES
(771, 10, 367, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(772, 16, 349, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(773, 16, 344, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(774, 16, 363, '2018-10-17 23:32:47', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.1.0; Moto G (5S) Plus Build/OPS28.65-36) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(775, 18, 368, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(776, 4, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(777, 12, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(778, 6, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(779, 6, 369, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(780, 12, 369, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(781, 18, 370, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(782, 12, 370, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(783, 6, 370, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(784, 12, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(785, 12, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(786, 6, 295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(787, 12, 295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(788, 18, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(789, 4, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(790, 12, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(791, 6, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(792, 12, 344, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(793, 6, 344, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(794, 12, 266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(795, 6, 266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(799, 6, 372, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(800, 12, 372, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(801, 12, 308, '2018-10-18 22:41:49', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360M Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36'),
(802, 12, 321, '2018-10-18 22:42:17', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360M Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36'),
(803, 6, 308, '2018-10-18 23:16:58', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360M Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36'),
(804, 6, 321, '2018-10-18 23:17:07', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360M Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36'),
(805, 12, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(806, 12, 374, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(807, 12, 375, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(808, 12, 338, '2018-10-18 22:34:52', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; Moto G (5S)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.64 Mobile Safari/537.36'),
(809, 6, 338, '2018-10-18 21:42:51', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; Moto G (5S)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.64 Mobile Safari/537.36'),
(810, 12, 376, '2018-10-18 22:25:55', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J120H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36'),
(811, 6, 376, '2018-10-18 23:15:16', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J120H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36'),
(812, 6, 378, '2018-10-18 23:16:26', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; LG-K220 Build/MXB48T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(813, 6, 377, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(814, 6, 373, '2018-10-18 21:14:45', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; Moto G (5S)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.64 Mobile Safari/537.36'),
(815, 6, 334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(816, 6, 379, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(817, 12, 373, '2018-10-18 22:29:31', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.1.1; Moto G (5S)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.64 Mobile Safari/537.36'),
(818, 6, 380, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(819, 12, 381, '2018-10-18 22:31:21', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; SM-A510M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(820, 6, 381, '2018-10-18 23:23:27', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 7.0; SM-A510M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(821, 6, 382, '2018-10-18 23:23:25', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-A720F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(822, 12, 382, '2018-10-18 22:38:48', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-A720F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36'),
(823, 12, 334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(825, 6, 375, '2018-10-18 23:28:13', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Linux; Android 6.0.1; SAMSUNG SM-G532MT Build/MMB29T) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/7.4 Chrome/59.0.3071.125 Mobile Safari/537.36'),
(826, 6, 384, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(827, 6, 385, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(828, 6, 386, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(829, 6, 387, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(830, 6, 67, '2018-10-18 20:40:20', NULL, NULL, NULL, NULL, NULL, '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrocinador`
--

CREATE TABLE `patrocinador` (
  `id_patrocinador` int(9) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `logo` varchar(20) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `patrocinador`
--

INSERT INTO `patrocinador` (`id_patrocinador`, `nome`, `email`, `cnpj`, `tipo`, `logo`, `status`) VALUES
(2, 'IBM', 'ibm@tec.com', '99988877765', 'j', '2_logo.png', 'i'),
(3, 'casa da tecnologia', 'casa@tec.com', '77766655543', 'j', '', 'i'),
(4, 'Unopar', 'unoparvirtual@unopar.br', '75234583000114', 'j', '4_logo.png', 'a'),
(5, 'ULBRA- GUAÍBA', 'ulbraguaiba@ulbra.br', '88332580000670', 'j', '5_logo.jpg', 'a'),
(6, 'WIZARD', '', '12167108000152', 'j', '6_logo.jpg', 'a'),
(7, 'Colégio Dom Antônio', 'guaiba.forumeducacao@gmail.com', '', 'j', '7_logo.png', 'a'),
(8, 'Secretaria da Educação', '', '', 'j', '8_logo.jpg', 'a'),
(9, 'Robotics Builder', '', '', 'j', '9_logo.jpg', 'a'),
(10, 'UERGS', '', '', 'j', '10_logo.png', 'a'),
(11, 'Cursos Líder', '', '', 'j', '11_logo.png', 'a'),
(12, 'AM', '', '', 'j', '12_logo.png', 'a'),
(13, 'UNINTER', '', '', 'j', '13_logo.jpg', 'a'),
(14, 'Studio Schêng - Yoga', '', '', 'j', '14_logo.jpg', 'a'),
(15, 'UNIASSELVI', '', '', 'j', '15_logo.jpg', 'a'),
(16, 'Tok Graf', '', '', 'j', '16_logo.jpg', 'a'),
(18, 'Studio Shêng- Yoga', '', '', 'f', '18_logo.jpg', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `status`) VALUES
(1, 'Lucas', 'lucaspybecker@hotmail.com', 'I2VjLpexanc=', 'A'),
(2, 'ForumTec', 'forumtec@gmail.com', 'I2VjLpexanc=', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_erro`
--

CREATE TABLE `usuarios_erro` (
  `id_usuarios_erro` int(10) UNSIGNED NOT NULL,
  `datahora` datetime NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `user_ip` varchar(20) DEFAULT NULL,
  `user_agent` varchar(200) DEFAULT NULL,
  `host` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_erro`
--

INSERT INTO `usuarios_erro` (`id_usuarios_erro`, `datahora`, `login`, `senha`, `user_ip`, `user_agent`, `host`) VALUES
(1, '2018-10-11 05:05:07', 'forumtec@gmail.com', 'foeum2018', '187.26.197.246', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com'),
(2, '2018-10-12 04:08:30', 'forumtec@gmail.com', 'forum2018', '187.26.154.42', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com'),
(3, '2018-10-12 04:08:41', 'forumtec@gmail.com', 'foumtec', '187.26.154.42', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com'),
(4, '2018-10-12 12:53:43', 'forumtec@gmail.com', 'foeumtec', '177.18.70.89', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com'),
(5, '2018-10-12 12:53:56', 'forumtec@gmail.com', 'forum20q8', '177.18.70.89', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_log`
--

CREATE TABLE `usuarios_log` (
  `id_acesso` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `inicio` datetime NOT NULL,
  `fim` datetime DEFAULT NULL,
  `session_id` varchar(200) NOT NULL,
  `user_ip` varchar(20) DEFAULT NULL,
  `user_agent` varchar(200) DEFAULT NULL,
  `host` varchar(200) DEFAULT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_log`
--

INSERT INTO `usuarios_log` (`id_acesso`, `id_usuario`, `inicio`, `fim`, `session_id`, `user_ip`, `user_agent`, `host`, `status`) VALUES
(7, 2, '2018-07-29 21:39:11', '2018-07-29 22:09:25', 'v56uqqal3derua5vhssmd2u2a1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'localhost', 'I'),
(8, 2, '2018-08-01 00:29:27', '2018-08-01 01:15:14', 'v56uqqal3derua5vhssmd2u2a1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'localhost', 'I'),
(9, 2, '2018-08-02 19:29:43', '2018-08-02 20:38:14', 'i1uerj29act5hjj473h7kpdg54', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'localhost', 'I'),
(10, 2, '2018-08-04 20:09:37', '2018-08-04 21:11:32', 'gi5feejl4hvqbtlmc7p9rh0274', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(11, 2, '2018-08-05 11:44:25', '2018-08-05 12:42:38', '67fj9bk3l6rfrv0ltfsnq1nbh0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(12, 2, '2018-08-05 13:11:59', '2018-08-05 14:02:25', '67fj9bk3l6rfrv0ltfsnq1nbh0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(13, 2, '2018-08-05 18:57:25', '2018-08-05 19:44:25', '67fj9bk3l6rfrv0ltfsnq1nbh0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(14, 2, '2018-08-05 19:56:29', '2018-08-05 20:45:21', '67fj9bk3l6rfrv0ltfsnq1nbh0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(15, 2, '2018-08-06 15:06:05', '2018-08-06 18:09:19', 'rant2utlr6bvghrt03g184p3f1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.64', 'localhost', 'I'),
(16, 2, '2018-08-13 16:21:14', '2018-08-13 16:51:38', 'b1ed8grisjfk18usebplcbu9a2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'localhost', 'I'),
(17, 2, '2018-08-13 19:41:37', '2018-08-13 21:06:35', 'qbe9l2rqkv58v57ma8r00v9a50', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(18, 2, '2018-08-13 21:33:05', '2018-08-13 22:04:58', 'u2e3o02r3idrou8eki8d1g9as1', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'www.fetguaiba.com.br', 'I'),
(19, 2, '2018-08-14 18:29:45', '2018-08-14 20:26:37', 'vqe3eu0qdk469vfeam984t9g66', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(20, 2, '2018-08-14 20:39:40', '2018-08-14 22:21:26', 'vqe3eu0qdk469vfeam984t9g66', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(21, 2, '2018-08-14 22:22:45', '2018-08-14 23:53:29', 'vqe3eu0qdk469vfeam984t9g66', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(22, 2, '2018-08-15 00:05:06', '2018-08-15 01:05:35', 'vqe3eu0qdk469vfeam984t9g66', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(23, 2, '2018-08-16 02:54:57', '2018-08-16 03:43:41', 'vqe3eu0qdk469vfeam984t9g66', '187.71.159.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(24, 2, '2018-08-16 18:50:37', '2018-08-16 19:41:56', 'vqe3eu0qdk469vfeam984t9g66', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(25, 2, '2018-08-23 21:50:04', '2018-08-23 22:20:22', '1sd7kr67mc900ifc1qujlm6ov1', '186.216.241.3', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'fetguaiba.com.br', 'I'),
(26, 2, '2018-09-13 14:00:12', '2018-09-13 16:06:10', 'c4qtbh3lbhpr3n6bcki5itfhv2', '187.71.159.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(27, 2, '2018-09-13 15:37:01', '2018-09-13 16:07:01', 'j9muq6tmng7ts83ivuum4ocjl0', '179.241.155.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(28, 2, '2018-09-13 15:37:08', '2018-09-13 16:08:04', 'c4qtbh3lbhpr3n6bcki5itfhv2', '179.241.155.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(29, 2, '2018-09-14 20:27:09', '2018-09-14 21:46:02', 'g04dqg1r6kcndgtsqcg64cm1v5', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(30, 2, '2018-09-16 19:55:16', '2018-09-16 20:25:16', 'g04dqg1r6kcndgtsqcg64cm1v5', '187.27.36.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(31, 2, '2018-09-17 13:36:47', '2018-09-17 14:10:25', 'niqh1167fnc5h5bvcrq5efsbl0', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'fetguaiba.com.br', 'I'),
(32, 2, '2018-09-21 17:44:39', '2018-09-21 18:15:44', '40likkflocjvnc92qef50ofg56', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'fetguaiba.com.br', 'I'),
(33, 2, '2018-09-23 20:18:43', '2018-09-23 20:49:19', '6lpfrsir8uudf03o01ofrq7sl1', '189.27.154.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 OPR/55.0.2994.61', 'app-1527549887.000webhostapp.com', 'I'),
(34, 2, '2018-09-23 20:19:30', '2018-09-23 20:50:50', '6lpfrsir8uudf03o01ofrq7sl1', '189.27.154.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 OPR/55.0.2994.61', 'app-1527549887.000webhostapp.com', 'I'),
(35, 2, '2018-09-23 21:05:36', '2018-09-23 21:45:46', '679sct11thu3hcpk0t1krpj8r6', '189.27.154.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 OPR/55.0.2994.61', 'app-1527549887.000webhostapp.com', 'I'),
(36, 2, '2018-09-24 00:40:04', '2018-09-24 01:11:55', '3epa6a44tsckvjtppu5rlh40o6', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'fetguaiba.com.br', 'I'),
(37, 2, '2018-09-25 03:11:59', '2018-09-25 03:51:36', 'ucb0fvan77pqbepj6emld9sh92', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(38, 2, '2018-09-25 16:10:45', '2018-09-25 16:41:36', 'ucb0fvan77pqbepj6emld9sh92', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(39, 2, '2018-09-25 18:10:03', '2018-09-25 18:40:21', 'ucb0fvan77pqbepj6emld9sh92', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(40, 2, '2018-10-02 20:41:20', '2018-10-02 21:13:53', '906ht9gde5e9r35qg43vqmgp97', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(41, 2, '2018-10-03 21:20:45', '2018-10-03 21:51:21', 'bv7ds0fah8bj1c0t188lnoflq6', '186.216.241.3', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15', 'app-1527549887.000webhostapp.com', 'I'),
(42, 2, '2018-10-08 17:46:01', '2018-10-08 18:59:57', 'lkm2mcbjcnm7vl0qg8jqjeghq4', '177.57.191.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(43, 2, '2018-10-08 21:25:41', '2018-10-08 22:03:51', 'lkm2mcbjcnm7vl0qg8jqjeghq4', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(44, 2, '2018-10-09 01:46:00', '2018-10-09 02:45:12', 'lkm2mcbjcnm7vl0qg8jqjeghq4', '191.246.78.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(45, 2, '2018-10-09 03:41:52', '2018-10-09 04:18:58', 'gadltnopqm7foohim0hh7drci3', '191.246.78.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(46, 2, '2018-10-09 18:02:03', '2018-10-09 18:37:18', 'lkm2mcbjcnm7vl0qg8jqjeghq4', '187.71.232.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(47, 2, '2018-10-09 20:03:46', '2018-10-09 20:53:03', 's8sb1di43haka8f2n432apv273', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'fetguaiba.com.br', 'I'),
(48, 2, '2018-10-09 21:18:41', '2018-10-09 21:48:54', '57v51eg3r378avtan5pup8iaj4', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(49, 2, '2018-10-09 21:39:41', '2018-10-09 22:14:23', '9gpglssctk96ggsuhrmgq3u464', '177.101.248.43', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15', 'app-1527549887.000webhostapp.com', 'I'),
(50, 2, '2018-10-09 22:13:02', '2018-10-09 22:48:18', '57v51eg3r378avtan5pup8iaj4', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(51, 2, '2018-10-09 23:07:03', '2018-10-10 01:09:39', '57v51eg3r378avtan5pup8iaj4', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(52, 2, '2018-10-11 05:05:25', '2018-10-11 05:48:48', '1buajon5itlrsf7h0hfheilre3', '187.26.197.246', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(53, 2, '2018-10-12 12:54:13', '2018-10-12 13:24:24', '41i35mmg3hpa1jibsmf7n16pd3', '177.18.70.89', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-18) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(54, 2, '2018-10-13 21:37:29', '2018-10-13 22:14:23', 'fkthc79guror248cnv0ltpiah5', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(55, 2, '2018-10-13 21:44:24', '2018-10-13 22:14:24', 'maublao9vv3fulq9mrtqvrstd0', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(56, 2, '2018-10-13 21:44:33', '2018-10-13 22:23:42', 'maublao9vv3fulq9mrtqvrstd0', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(57, 2, '2018-10-13 22:43:26', '2018-10-13 23:13:58', 'maublao9vv3fulq9mrtqvrstd0', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(58, 2, '2018-10-13 23:58:54', '2018-10-14 00:29:03', 'maublao9vv3fulq9mrtqvrstd0', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(59, 2, '2018-10-14 20:26:35', '2018-10-14 20:57:30', '8nihhnailp4c0o9j1b7rkojjt3', '201.86.197.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.36', 'app-1527549887.000webhostapp.com', 'I'),
(60, 2, '2018-10-15 01:35:41', '2018-10-15 02:21:19', 'maublao9vv3fulq9mrtqvrstd0', '187.36.18.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(61, 2, '2018-10-16 02:31:58', '2018-10-16 03:08:01', 'npbsab74pq36g7ohq4ob4he5u2', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(62, 2, '2018-10-16 15:44:20', '2018-10-16 17:18:57', '6jb54g5moknjdnspgv5lfv3sr4', '187.71.224.56', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(63, 2, '2018-10-16 19:03:24', '2018-10-16 19:33:50', 's8sb1di43haka8f2n432apv273', '179.109.58.195', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'fetguaiba.com.br', 'I'),
(64, 2, '2018-10-17 02:44:55', '2018-10-17 04:22:06', '6jb54g5moknjdnspgv5lfv3sr4', '177.57.47.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(65, 2, '2018-10-17 12:22:42', '2018-10-17 12:52:43', '6jb54g5moknjdnspgv5lfv3sr4', '179.240.229.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(66, 2, '2018-10-17 19:16:36', '2018-10-17 19:47:09', 'v2rrfpoae6d3chikohiulmc9i6', '177.134.78.218', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(67, 2, '2018-10-17 19:17:18', '2018-10-17 19:47:23', '4ervei85s6mc3625a36ufugc94', '177.134.78.218', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'app-1527549887.000webhostapp.com', 'I'),
(68, 2, '2018-10-17 19:17:39', '2018-10-17 19:48:26', 'v2rrfpoae6d3chikohiulmc9i6', '177.134.78.218', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(69, 2, '2018-10-17 22:29:46', '2018-10-18 00:08:00', 'nq3t4faoog0vf0efl4josjgr83', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(70, 2, '2018-10-18 16:55:38', '2018-10-18 17:34:47', 'ut42k5t92nvnvf04qerp0evpu6', '189.27.154.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(71, 2, '2018-10-18 19:14:33', '2018-10-18 19:57:56', 'ut42k5t92nvnvf04qerp0evpu6', '189.27.154.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(72, 2, '2018-10-18 21:57:53', '2018-10-18 23:27:55', 'k0td23726tptkuu71sufmjdes7', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(73, 2, '2018-10-18 23:28:10', '2018-10-19 00:07:43', 'k0td23726tptkuu71sufmjdes7', '177.220.249.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 OPR/56.0.3051.43', 'app-1527549887.000webhostapp.com', 'I'),
(74, 2, '2018-11-06 20:37:58', '2018-11-06 21:08:15', 'gvbboctckoe8bdu3oj2g5pv8p0', '186.216.241.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 'app-1527549887.000webhostapp.com', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id_instituicao`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `fk_noticia_autor1_idx` (`id_autor`);

--
-- Indexes for table `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`id_oficina`),
  ADD KEY `fk_oficina_local_idx` (`id_local`);

--
-- Indexes for table `palestra`
--
ALTER TABLE `palestra`
  ADD PRIMARY KEY (`id_palestra`),
  ADD KEY `fk_palestra_local1_idx` (`id_local`);

--
-- Indexes for table `palestrante`
--
ALTER TABLE `palestrante`
  ADD PRIMARY KEY (`id_palestrante`);

--
-- Indexes for table `palestrante_oficina`
--
ALTER TABLE `palestrante_oficina`
  ADD PRIMARY KEY (`id_palestrante_oficina`),
  ADD KEY `id_palestrante` (`id_palestrante`),
  ADD KEY `id_oficina` (`id_oficina`);

--
-- Indexes for table `palestrante_palestra`
--
ALTER TABLE `palestrante_palestra`
  ADD PRIMARY KEY (`id_palestrante_palestra`),
  ADD KEY `id_palestrante` (`id_palestrante`),
  ADD KEY `id_palestra` (`id_palestra`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_participante`),
  ADD KEY `fk_participante_instituicao1_idx` (`id_instituicao`);

--
-- Indexes for table `participante_oficina`
--
ALTER TABLE `participante_oficina`
  ADD PRIMARY KEY (`id_participante_oficina`),
  ADD KEY `fk_participante_oficina_oficina1_idx` (`id_oficina`),
  ADD KEY `fk_participante_oficina_participante1_idx` (`id_participante`);

--
-- Indexes for table `participante_palestra`
--
ALTER TABLE `participante_palestra`
  ADD PRIMARY KEY (`id_participante_palestra`),
  ADD KEY `fk_participante_palestra_participante1_idx` (`id_participante`),
  ADD KEY `fk_participante_palestra_palestra1_idx` (`id_palestra`);

--
-- Indexes for table `patrocinador`
--
ALTER TABLE `patrocinador`
  ADD PRIMARY KEY (`id_patrocinador`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuarios_erro`
--
ALTER TABLE `usuarios_erro`
  ADD PRIMARY KEY (`id_usuarios_erro`);

--
-- Indexes for table `usuarios_log`
--
ALTER TABLE `usuarios_log`
  ADD PRIMARY KEY (`id_acesso`),
  ADD KEY `fk_acessos_usuarios1_idx` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id_instituicao` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id_local` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id_oficina` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `palestra`
--
ALTER TABLE `palestra`
  MODIFY `id_palestra` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `palestrante`
--
ALTER TABLE `palestrante`
  MODIFY `id_palestrante` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `palestrante_oficina`
--
ALTER TABLE `palestrante_oficina`
  MODIFY `id_palestrante_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `palestrante_palestra`
--
ALTER TABLE `palestrante_palestra`
  MODIFY `id_palestrante_palestra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
  MODIFY `id_participante` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `participante_oficina`
--
ALTER TABLE `participante_oficina`
  MODIFY `id_participante_oficina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `participante_palestra`
--
ALTER TABLE `participante_palestra`
  MODIFY `id_participante_palestra` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=831;

--
-- AUTO_INCREMENT for table `patrocinador`
--
ALTER TABLE `patrocinador`
  MODIFY `id_patrocinador` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios_erro`
--
ALTER TABLE `usuarios_erro`
  MODIFY `id_usuarios_erro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuarios_log`
--
ALTER TABLE `usuarios_log`
  MODIFY `id_acesso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticia_autor1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `oficina`
--
ALTER TABLE `oficina`
  ADD CONSTRAINT `fk_oficina_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `palestra`
--
ALTER TABLE `palestra`
  ADD CONSTRAINT `fk_palestra_local1` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `palestrante_oficina`
--
ALTER TABLE `palestrante_oficina`
  ADD CONSTRAINT `palestrante_oficina_ibfk_1` FOREIGN KEY (`id_palestrante`) REFERENCES `palestrante` (`id_palestrante`),
  ADD CONSTRAINT `palestrante_oficina_ibfk_2` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`);

--
-- Limitadores para a tabela `palestrante_palestra`
--
ALTER TABLE `palestrante_palestra`
  ADD CONSTRAINT `palestrante_palestra_ibfk_1` FOREIGN KEY (`id_palestrante`) REFERENCES `palestrante` (`id_palestrante`),
  ADD CONSTRAINT `palestrante_palestra_ibfk_2` FOREIGN KEY (`id_palestra`) REFERENCES `palestra` (`id_palestra`);

--
-- Limitadores para a tabela `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `fk_participante_instituicao1` FOREIGN KEY (`id_instituicao`) REFERENCES `instituicao` (`id_instituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `participante_oficina`
--
ALTER TABLE `participante_oficina`
  ADD CONSTRAINT `fk_participante_oficina_oficina1` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participante_oficina_participante1` FOREIGN KEY (`id_participante`) REFERENCES `participante` (`id_participante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `participante_palestra`
--
ALTER TABLE `participante_palestra`
  ADD CONSTRAINT `fk_participante_palestra_palestra1` FOREIGN KEY (`id_palestra`) REFERENCES `palestra` (`id_palestra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participante_palestra_participante1` FOREIGN KEY (`id_participante`) REFERENCES `participante` (`id_participante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios_log`
--
ALTER TABLE `usuarios_log`
  ADD CONSTRAINT `fk_acessos_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
