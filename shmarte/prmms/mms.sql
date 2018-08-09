-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2017 a las 11:22:55
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE DATABASE mms;

USE mms;

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `genero_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `genero`, `genero_url`) VALUES
(1, 'Drama', 'drama'),
(2, 'Aventura', 'aventura'),
(3, 'Terror', 'terror'),
(4, 'Fantasia', 'fantasia'),
(5, 'Crimen', 'crimen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sinopsis` text COLLATE utf8_spanish_ci,
  `genero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `titulo`, `titulo_url`, `imagen`, `sinopsis`, `genero`) VALUES
(1, 'Juego de Tronos', 'JuegosDeTronos', 'http://es.web.img3.acsta.net/cx_120_160_50_50/pictures/17/06/22/08/48/549705.jpg', 'HBO, desde la calidad que caracteriza a la cadena, nos brinda una vez m?s una magistral adaptaci?n televisiva de la serie de novelas \'Canci?n de hielo y fuego\' del escritor estadounidense George R. R. Martin. La versi?n para la peque?a pantalla de esta historia comparte t?tulo con el primero de los libros de la saga, \'Juego de tronos\', y est? escrita y producida por David Benioff (\'Troya\', \'X-Men Origins: Wolverine\') y D.B. Weiss.\r\n\r\nLa serie nos sit?a en Invernalia, uno de los siete reinos del continente de Poniente. Tras un largo verano, Lord Eddard \'Ned\' Stark (Sean Ben, \'El se?or de los anillo\', \'Troya\', \'Equilibrium\'), se?or de Invernalia, es llamado a ocupar el cargo de Mano del Rey. Se ver? obligado a dejar su tierra para unirse a la corte del rey Robert Baratheon \'El Usurpador\' (Mark Addy, \'Robin Hood\', \'Los Picapiedra en Viva Rock Vegas\'), se?or de los Siete Reinos, hombre d?scolo y otrora un gran guerrero. Pronto, los principios y la ?tica de Ned Stark chocar?n con la forma de vida del rey Baratheon, pero incluso m?s con la de los Lannister, una de las siete familias m?s importantes del reino de la cual la reina Cersei Lannister (Lena Headey, \'300\') proviene. No menos tormentosa ser? la relaci?n con su hermano Jaime Lannister (Nikolaj Coster-Waldau, \'Black Hawk derribado\', El reino de los cielos\') y el enano Tyrion (Peter Dinklage, \'Elf\', \'Las Cr?nicas de Narnia\').\r\n\r\nInmerso en este mundo cuyas estaciones duran d?cadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones m?s sombr?os y maravillosos, Ned Stark tendr? que lidiar con la traici?n, la lealtad, la compasi?n y la sed de venganza. Desde su nueva posici?n m?s cercana al rey, ocupar? el lugar ideal para intentar desentra?ar una mara?a de intrigas que pondr? en peligro tanto su vida como la de los miembros de su familia: su esposa Catelyn (Michelle Fairley, \'Harry Potter\') y sus hijos Robb (Richard Madden, \'Sirens\'), Bran (Isaac Hempstead-Wright), Arya (Maisie Williams), Sansa (Sophie Turner) y el bastardo Jon Nieve (Kit Harington). Giros dr?sticos en la trama, ?pica, violencia, sangre y sexo se juntan en esta superproducci?n que te dejar? pegado a la pantalla.', 4),
(2, 'Los 100', 'Los100', 'http://es.web.img1.acsta.net/cx_120_160/pictures/14/02/16/23/53/181925.jpg', '\'Los 100\' es un drama post apocal?ptico escrito por Jason Rothenberg (Body Politic), basado en los libros de Kass Morgan. La historia est? centrada en lo que ocurre con la civilizaci?n casi cien a?os despu?s de que una guerra nuclear la haya devastado.\r\n\r\nDespu?s de que ocurriese esa catastr?fica guerra nuclear, se produjo una huida de los humanos que consiguieron sobrevivir. El futuro de la supervivencia de la raza humana est? en manos de unos j?venes delincuentes que consiguieron huir y salvarse de la guerra. ?stos viven desde entonces en una nave espacial. Desde la estaci?n espacial The Ark, cien de los supervivientes son enviados de vuelta al planeta tierra para investigarlo y poder estudiar las posibilidades que existen de volver a colonizar la tierra.\r\n\r\nLa serie de CW est? protagonizada por Eliza Taylor (\'Patrick\'), Marie Avgeropoulos (\'Sensaci?n de vivir: la nueva generaci?n\'), Thomas McDonell (\'El reino prohibido\'), Bobby Morley (\'Road Train\'), Eli Goree (\'Sobrenatural\'), Christopher Larkin (\'A very Natural Thing\') y Devon Bostick (\'Small Time\'), entre otros.', 2),
(3, 'Vikingos', 'Vikingos', 'http://es.web.img3.acsta.net/cx_120_160/pictures/14/01/13/10/06/336848.jpg', 'Este nuevo drama hist?rico, dirigido por Michael Hirst (\'Elizabeth\', \'The Tudors\'), de History Channel est? centrado en Ragnar Lothbrok, figura m?tica que aseguraba que era el descendiente de Od?n, el dios principal de la mitolog?a n?rdica.\r\n\r\nEn ella, Travis Fimmel (\'Country Outlaw\', \'Despertar\') interpreta a Ragnar Lothbrok, cuyo mayor sue?o es explorar nuevas civilizaciones surcando los mares. Gracias a la ayuda de su amigo buf?n Floki, al que da vida Gustaf Skarsg?rd (\'Autumn Blood\', \'Kon-Tiki\'), construyen nuevos nav?os m?s r?pidos y elegantes con los que poder dar forma a su mayor ilusi?n. En su aventura chocan con Earl Haraldson, Gabriel Byrne (\'En terapia\', \'Asalto al distrito 13\'), su principal enemigo, que sospecha de las expectativas de Lothbrok. La lucha entre ambos no se hace esperar.\r\n\r\nLothbrok consigue llegar a ser el mejor guerrero de la tribu vikinga mientras lucha por convertirse el rey de Dinamarca y gran parte de, lo que hoy es, Suecia. La serie resalta las batallas con mayor imaginaci?n, haciendo m?s ?nfasis en los puntos de vista individuales, las estrategias y astucias de los personajes.', 2),
(4, 'The Walking Dead', 'TheWalkingDead', 'http://es.web.img3.acsta.net/cx_120_160/medias/nmedia/18/78/35/82/20303823.jpg', 'La historia nos traslada a un escenario post-pand?mico en el que un virus ha acabado con la pr?ctica totalidad de la poblaci?n mundial convirti?ndolos en zombis. Seremos testigo de la lucha de un grupo de supervivientes por mantenerse a salvo en este entorno infestado de zombis o, como ellos prefieren llamarlos, caminantes.\r\n\r\nNuestro protagonista, Rick Grimes (Andrew Lincoln, \'Love Actually\', \'Cumbres Borrascosas\') es un polic?a que despierta de un estado comatoso y encuentra este desolador panorama. Su ?nica raz?n para seguir adelante es encontrar a su mujer Lori (Sarah Wayne Callies, \'Prison Break\') y a su hijo Carl (Chandler Riggs). Ambos, que siguen vivos, est?n en un grupo de supervivientes en el que tambi?n se encuentra el ex compa?ero de patrulla y mejor amigo de Rick, Shane Walsh (Jon Bernthal, \'El escritor\') con el que Lori, creyendo a su marido muerto, tiene un romance.\r\n\r\n\'The Walking Dead\' est? inspirada en la serie de novelas gr?ficas de mismo t?tulo escritas por el guionista Robert Kirkman (\'Spawn\', \'Spider-Man Unlimited\', \'Marvel Zombies\'), Tony Moore (\'Ghost Rider\') y Charlie Adlard (\'Juez Dredd\'). La adaptaci?n audiovisual de estas viene a cargo de Frank Darabont (\'Cadena perpetua\', \'La milla verde\'), al menos hasta que fue despedido durante el rodaje de la segunda temporada por problemas de presupuesto con la cadena AMC.', 3),
(5, 'La niebla', 'LaNiebla', 'http://es.web.img2.acsta.net/cx_120_160/pictures/17/04/26/10/59/430828.jpg', 'Una aterradora tormenta electrica arrasa un peque?o pueblo que, al d?a siguente, despierta con total normalidad hasta que una densa y extra?a niebla comienza a entenderse por la localidad. Este fen?meno antinatural deja a sus habitantes pr?cticamente aislados al reducir la visibilidad dr?sticamente, pero lo peor es que parece que hay algo m?s: comienzan a entreverse numerosas criaturas que no dudan en atacar a cualquier persona que se atreva a moverse a trav?s de la niebla.\r\n\r\nThe Mist es una miniserie de misterio e intriga con toques de terror basada en la novela del mismo nombre escrita por el autor Stephen King, que fue publicada en 1983. La miniserie cuenta con 10 episodios que detallan los eventos que suceden en el pueblo como producto de la aparici?n de esta aparentemente inofensiva niebla que va causando caos a medida que se expande. Este thriller de misterio est? escrito y producido por Christian Torpe, creador del exitoso drama dan?s Rita.\r\n\r\nEsta adaptaci?n televisiva est? dirigida, asimismo, por el director ganador del Emmy Adam Bernstein (Californication, Breaking Bad), y producida por TWC-Dimension Television (compa??a que ha producido dos cintas basadas en la obra de Stephen King en el pasado) para la cadena Spike TV.', 3),
(6, 'Lucifer', 'Lucifer', 'http://es.web.img2.acsta.net/cx_120_160/pictures/15/12/02/17/55/431521.jpg', 'La historia de Lucifer es la que todos conocemos: un ?ngel ca?do del cielo. Sin embargo, este se?or del infierno est? aburrido de su propia existencia. Por ello, Lucifer decide abandonar su reino e ir a la ciudad de Los ?ngeles a descubrir qu? puede ofrecerle el mundo mortal.\r\n\r\nEn su b?squeda de \"qu? hacer con su tiempo\" decide abrir un distinguido club nocturno, llamado Lux, y se dedica a disfrutar de sus cosas favoritas: el vino, las mujeres y la m?sica. Sin embargo, su apacible vida se ve alterada cuando una mujer es brutalmente asesinada cerca de su club. De repente, siente que debe hacerse justicia y por ello comienza a ayudar a la polic?a a intentar resolver diversos casos de homicidios, convirti?ndose as? en una especie de colaborador.\r\n\r\nProducida por Warner Bross y emitida en Fox, esta historia est? basada en la novela gr?fica de mismo nombre y supone el \'spin-off\' de otro c?mic, The Sandman de Neil Gaiman. Tom Kapinos (Californication) ser? productor ejecutivo junto a Jerry Burckheimer (CSI), Jonathan Littman (Rehenes), Ildy Modrovich (CSI: Miami), Joe Henderson (Ladr?n de guante blanco) y  Len Wiseman (Sleepy Hollow)', 4),
(7, 'Peque?as mentirosas', 'PequenasMentirosas', 'http://es.web.img2.acsta.net/cx_120_160/pictures/14/02/28/12/11/294575.jpg', 'Este drama adolescente cargado de misterio se trata de la adaptaci?n televisiva desarrollada por I. Marlene King (\'Devu?lveme mi suerte\') de la popular serie de novelas hom?nima escrita por Sara Shepard. El ?xito cosechado por la primera temporada de la serie la ha situado por encima de otros dramas adolescentes como \'Gossip Girl\' o \'Glee\'.\r\n\r\n\'Pretty Little Liars\' sigue la vida de cuatro chicas adolescentes: Aria Montgomery (Lucy Hale, \'Privileged\'), Emily Fields (Shay Mitchell, \'Aaron Stone\'), Hannah Marin (Ashley Benson, \'Eastwick\') y Spencer Hastings (Troian Bellisario, \'Navy: Investigaci?n criminal\') cuyo mundo se viene abajo con la desaparici?n de la l?der del grupo, Alison DiLaurentis (Sasha Pieterse, \'H?roes\'). Un a?o despu?s la tragedia se torna segura, el cuerpo es encontrado y las cuatro amigas vuelven a reunirse en el funeral de su amiga sin saber lo que les espera. \r\n\r\nA partir de entonces, las j?venes empiezan a recibir misteriosos mensajes de una fuente an?nima que se hace llamar \'A\' y que de alg?n modo conoce todos sus secretos. \'A\' amenaza con hacerlos p?blicos, por lo que el grupo de chicas pone todo su empe?o en evitar que esto suceda, descubrir la verdadera identidad de su acosadora y arrojar algo de luz sobre qui?n asesin? a su mejor amiga.', 1),
(8, 'Sobrenatural', 'Sobrenatural', 'http://es.web.img3.acsta.net/cx_120_160/pictures/198/176/19817606_20130928183928839.jpg', 'Drama sobrenatural con notables toques de humor creado por Eric Kripke (\'Revolution\') para CW que cuenta la historia de dos hermanos que recorren los Estados Unidos en un Chevrolet Impala enfrent?ndose a todo tipo de seres sobrenaturales por el camino.\r\n\r\n27 a?os atr?s los hermanos Sam (Jared Padalecki, \'Las chicas Gilmore\') y Dean Winchester (Jensen Ackles, \'Dark Angel\', \'Smallville\') vieron morir a su madre a manos de una misteriosa fuerza sobrenatural. Como consecuencia, su padre John Winchester (Jeffrey Dean Morgan, \'Magic City\') dedic? su vida a convertirles en soldados. Les ense?? a combatir contra las paranormales fuerzas del mal que viven en la oscuridad tales como vampiros, lic?ntropos o fantasmas.\r\n\r\nJohn en uno de sus peculiares cazas de esp?ritus desaparece; es el momento de demostrar todo lo aprendido. Sam y Dean Winchester emprenden una b?squeda con el diario personal de su padre como ?nica informaci?n de su posible paradero. Un diario repleto de detalles acerca de sucesos extraordinarios y criaturas sobrehumanas. Por el camino salvar?n personas inocentes v?ctimas de los sucesos paranormales y recolectar?n pistas que les acercar?n cada vez m?s a su padre.', 3),
(9, 'American Horror Story', 'AmericanHorrorStory', 'http://es.web.img1.acsta.net/cx_120_160/pictures/17/07/28/10/34/286022.jpg', 'Concebida por los creadores de \'Glee\' y \'Nip/Tuck, a golpe de bistur?\', Ryan Murphy y Brad Falchuk, \'American Horror Story\' narra en cada una de sus temporadas una historia independiente ambientada en lugares y con personajes distintos. La primera de la historias que trata la serie habla sobre la vida de la familia Harmon con tintes terror?ficos que recuerdan a \'Paranormal Activity\'. Ben (Dylan McDermott \'El Abogado\') es un sensible terapeuta que lleva una vida normal hasta que un oscuro secreto le obliga a mudarse a Los ?ngeles junto a su familia. Le acompa?an su mujer Vivien (Connie Britton \'Friday Night Lights\') y la hija que tienen ambos en com?n, Violet (Taissa Farmiga -hermana peque?a de Vera Farmiga-).\r\n\r\nLa casa que eligen los Harmon para alojarse en Los ?ngeles es antigua, t?trica y cuenta con un s?tano en el que no s?lo habita el polvo, sino tambi?n una malvada criatura. Entre el resto de los personajes se encuentran una ama de llaves (Frances Conroy \'A dos metros bajo tierra\'), una vecina fisgona llamada Constance (Jessica Lange \'Big Fish\'), un hombre quemado que responde al nombre de Larry (Denis O\'Hare \'True Blood\') y un paciente peligroso de Ben, Tate (Evan Peters \'Kick-Ass. Listo para machacar\'), que se fija en la hija de los Harmon.\r\n\r\nLa ficci?n incorpora en su primera temporada cameos de renombre, como los de Eric Stonestreet (\'Modern Family\'), un paciente con fobia a las leyendas urbanas, y Zachary Quinto (\'H?roes\', \'Star Trek\'), personaje recurrente de la primera temporada. Tambi?n colabora el actor Eric Close (\'Sin rastro\'), que da vida a un bellaco encantador llamado Hugo que protagonizar? numerosos \'flashbacks\' ambientados en los 80.', 1),
(10, 'Bates Motel', 'BatesMotel', 'http://es.web.img3.acsta.net/cx_120_160/pictures/16/02/01/15/11/358423.jpg', 'Escrita por Anthony Cipriano y producida por Universal Television junto a Carlton Cuse (ex creador de \'Perdidos\') y Kerry Ehrin (\'Parenthood\'), \'Bates Motel\', se trata de una precuela contempor?nea de la archiconocida pel?cula de Hitchcock: \'Psicosis\'.\r\n\r\nLa serie protagonizada por Norman Bates (Freddie Highmore, \'Charlie y la f?brica de chocolate\', \'Las cr?nicas de Spiderwick\'), el encargado del motel Bates que da nombre a la serie, sigue la evoluci?n de Norman desde su infancia hasta convertirse en el psic?pata que todos conocemos. Aquel que un d?a acog?o a una hermosa secretaria llamada Marion Crane que hu?a de su empresa con una gran suma de dinero. Un viaje al retorcido y oscuro pasado de uno de los criminales mas conocidos de la historia del cine, en donde no pod?a faltar la relaci?n de Norman con su madre interpretada por Vera Farmiga (\'Infiltrados\', \'El ni?o con el pijama de rayas\').\r\n\r\nAl joven ingl?s Freddie Highmore, le acompa?an Nicola Peltz (\'The Last Airbender\') quien interpreta a Bradley Kenner, una joven bastante adelantada para su edad que ser? motivo de admiraci?n para Norman; Max Thieriot (\'Jumper\') dando vida a Dylan, el hermano mayor del psic?pata, un joven rebelde que no hace nada m?s que traer problemas a la familia Bates; Nestor Carbonell (\'Perdidos\') como Royce Romero, un perverso sheriff del pueblo y su ayudante Zach Shelby, interpretado por Mike Vogel (\'Pan Am\').', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genero` (`genero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `genero`
--
ALTER TABLE `genero`
  ADD CONSTRAINT `genero_ibfk_1` FOREIGN KEY (`id`) REFERENCES `series` (`genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
