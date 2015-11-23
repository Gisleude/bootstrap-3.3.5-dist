-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2015 às 20:06
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doencas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE IF NOT EXISTS `doenca` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `subname` text NOT NULL,
  `tags` text NOT NULL,
  `description` text NOT NULL,
  `cause` text NOT NULL,
  `tratament` text NOT NULL,
  `medicaments` text NOT NULL,
  `prevetion` text NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `doenca`
--

INSERT INTO `doenca` (`ID`, `name`, `subname`, `tags`, `description`, `cause`, `tratament`, `medicaments`, `prevetion`, `image`) VALUES
(1, 'Gripe', 'Secreções nasais, espirro, febre, vermelhidão no rosto, dores no corpo, cansaço.', 'secreções nasais, espirro, febre, vermelhidão no rosto, dores no corpo, cansaço', 'Também conhecida como influenza, a gripe é uma infecção do sistema respiratório cuja principal complicação é a pneumonia, responsável por um grande número de internações hospitalares no país. A gripe inicia-se com febre alta, em geral acima de 38ºC, seguida de dor muscular, dor de garganta, dor de cabeça e tosse seca.\r\n\r\nA febre é o sintoma mais importante da gripe e dura em torno de três dias. Os sintomas respiratórios, como tosse, tornam-se mais evidentes com a progressão da gripe e mantêm-se, em geral, por três a quatro dias após o desaparecimento da febre. É uma doença muito comum em todo o mundo, sendo possível uma pessoa adquirir influenza várias vezes ao longo de sua vida. a gripe também é frequentemente confundida com outras viroses respiratórias e, por isso, o seu diagnóstico de certeza só é feito mediante exame laboratorial específico.\r\n\r\nTodos os anos, com a aproximação do inverno, começamos a nos preocupar em evitar as doenças respiratórias que popularmente chamamos de gripe. Apesar de usarmos esse termo de forma genérica para nos referirmos a sintomas como nariz entupido, espirros e dor de cabeça, a gripe e os resfriados são causados por vírus diferentes e apresentam algumas características que permitem a sua diferenciação.\r\n\r\nEnquanto a maioria das pessoas é infectada algumas vezes durante o ano com o vírus do resfriado, a gripe ocorre com menos frequência, manifestando-se, por exemplo, uma vez em alguns anos.', 'A gripe é causada pelo vírus influenza. Seus sintomas geralmente aparecem de forma repentina, com febre, vermelhidão no rosto, dores no corpo e cansaço. Entre o segundo e o quarto dia, os sintomas do corpo tendem a diminuir enquanto os sintomas respiratórios aumentam, aparecendo com frequência uma tosse seca.\r\n\r\nComo no resfriado, a presença de secreções nasais e espirros na gripe é comum.\r\n\r\nJá o resfriado é causado, na maioria das vezes, por rinovírus. Seus primeiros sinais costumam ser coceira no nariz ou irritação na garganta, os quais são seguidos após algumas horas por espirros e secreções nasais. A congestão nasal também é comum nos resfriados, porém, ao contrário da gripe, a maioria dos adultos e crianças não apresenta febre ou apenas febre baixa.', 'Ainda não existem medicamentos que tenham demonstrado bons resultados no combate aos vírus da gripe e do resfriado. Por isso, o tratamento é direcionado ao alívio dos sintomas da gripe. Os principais medicamentos sintomáticos utilizados são os analgésicos e antitérmicos, que aliviam a dor e a febre.\r\n\r\nAtenção: mesmo medicamentos que podem ser comprados sem necessidade de receita médica, como aqueles receitados para gripe, podem provocar reações indesejadas. Somente o profissional de saúde poderá indicar o medicamento mais apropriado para cada caso.', 'Medicamentos para Gripe\r\nOs medicamentos mais usados para o tratamento de gripe são:\r\n<br>\r\nAdvil<br>\r\nAlivium<br>\r\nApracur<br>\r\nBenegrip<br>\r\nBisolvon<br>\r\nBromexina<br>\r\nCarbocisteína<br>\r\nCimegripe 77C<br>\r\nCimegripe Adulto<br>\r\nCimegripe Bebê e Criança<br>\r\nCimegripe Dia<br>\r\nCoristina D<br>\r\nIbuprofeno<br>\r\nParacetamol<br>\r\nTrimedal<br>\r\nSomente um médico pode dizer qual o medicamento mais indicado para o seu caso, bem como a dosagem correta e a duração do tratamento. Siga sempre à risca as orientações do seu médico e NUNCA se automedique. Não interrompa o uso do medicamento sem consultar um médico antes e, se tomá-lo mais de uma vez ou em quantidades muito maiores do que a prescrita, siga as instruções na bula.', 'Prevenção\r\nA vacina da gripe é a melhor maneira de evitar a gripe e suas complicações. Todos os anos, é necessário receber uma nova dose, já que a sua composição é alterada de acordo com o tipo de vírus mais provável de se disseminar. A vacina da gripe previne aproximadamente 70-90% dos casos de gripe, mas não protege contra outras infecções respiratórias, como o resfriado.\r\n\r\nO efeito preventivo da vacina da gripe é observado cerca de duas semanas após a sua administração. Por isso, a aplicação da vacina deve ser feita antes do inverno, época em que ocorrem os maiores índices de infecção. Como o vírus utilizado na vacina foi inativado em laboratório, não é possível que a vacinação provoque gripe.\r\n\r\nAs reações adversas à vacina da gripe que podem ocorrer costumam ser leves, como: dor no local da injeção, febre e mal-estar, que duram um ou dois dias. Há evidências de que quem recebe a vacina todos os anos desenvolve maior resistência à doença, por isso, todas as pessoas que tiveram acesso à vacina devem recebê-la anualmente. Para o resfriado, ainda não há vacina disponível.', 'http://www.ilustrados.com/wp-content/uploads/2014/05/gripe.jpg'),
(2, 'Hipertireoidismo', 'Ansiedade, irritabilidade e nervosismo,\r\nTremor nas mãos e nos dedos,\r\nSuor excessivo,\r\nMudanças na menstruação,\r\nIntolerância ao calor.', 'Perda de peso repentina,\r\nTaquicardia, arritmia, palpitações,\r\nAumento no apetite,\r\nAnsiedade, irritabilidade e nervosismo,\r\nTremor nas mãos e nos dedos,\r\nSuor excessivo,\r\nMudanças na menstruação,\r\nIntolerância ao calor,\r\nMudanças no funcionamento do intestino, com evacuações frequentes,\r\n,Bócio,nódulos na tireoide,\r\nFadiga e fraqueza muscular,\r\nDificuldade para dormir,\r\nAfilamento da pele,\r\nCabelo quebradiço,\r\nInquietação,\r\nDesenvolvimento da mama,Pele fria e úmida', 'O hipertireoidismo é um problema no qual a glândula da tireoide produz hormônios em excesso. Aqui a glândula é hiperativa, ou seja, trabalha em excesso.\r\n\r\nDe acordo com dados do Instituto Brasileiro de Geografia e Estatística (IBGE-2010), 15% da população sofre de problemas na tireoide, entre eles o hipertireoidismo.', 'A glândula da tireoide é um órgão do sistema endócrino. Ela encontra-se na parte da frente do pescoço, logo abaixo da laringe. A glândula produz os hormônios tiroxina e tri-iodotironina, que controlam como cada célula do corpo gasta energia. Esse processo é chamado de metabolismo.\r\n\r\nO hipertireoidismo ocorre quando a tireoide produz grandes quantidades desses hormônios em um período curto (agudo) ou longo (crônico) de tempo. Várias doenças e distúrbios podem causar esse problema, incluindo:\r\n\r\nIngestão excessiva de iodo\r\nDoença de Graves (responsável pela maioria dos casos de hipertireoidismo)\r\nInflamação da tireoide (tireoidite) devido a infecções virais ou outros motivos – como a tireoidite após o parto\r\nTumores não-cancerígenos da tireoide ou da glândula pituitária\r\nSuperdosagem de hormônio da tireoide\r\nTumores nos testículos ou ovários.', 'Existem diversos tipos de tratamento para hipertireoidismo, que dependem da causa da doença e da gravidade dos sintomas.\r\n\r\nMedicamentos antitireoidianos. Essas drogas diminuem a quantidade de hormônio produzido pela tireoide. A droga preferida é o metimazol. Para as mulheres grávidas ou lactantes, o propiltiouracil (PTU) pode ser preferido. Como o PTU tem sido associado a efeitos secundários, ele não é utilizado rotineiramente fora da gravidez. Ambas as drogas controlam, mas podem não curar o hipertireoidismo\r\nIngestão de iodo radioativo. Esse tratamento cura o problema da tireoide, mas geralmente leva à sua destruição permanente. Você provavelmente precisará tomar comprimidos de hormônio tireoideanos para o resto de sua vida para manter níveis hormonais normais\r\nCaso a tireoide seja removida com cirurgia ou destruída com radiação, será preciso repor os hormônios com pílulas pelo resto da vida.', '', 'Não existe evidência científica para a prevenção de hipertireoidismo.', 'http://images.minhavida.com.br/imgHandler.ashx?mid=35219');
--
-- Database: `usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` text NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` text NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modifier` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `User`, `Password`, `Email`, `Created`, `Modifier`) VALUES
(1, 'Gisleude', 'gis995511', 'gisleudenem@live.com', '2015-11-05 18:03:29', '0000-00-00 00:00:00'),
(7, 'Murilo', '123456', 'murilo@test.com.br', '2015-11-17 14:53:47', '0000-00-00 00:00:00'),
(6, 'Lily', '123456789', 'lilyoi@hotmail.com', '2015-11-10 17:02:50', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
