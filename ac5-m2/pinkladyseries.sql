-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2017 a las 10:33:13
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
-- Base de datos: `pinkladyseries`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--
CREATE database pinkladyseries;

USE pinkladyseries;


CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `genero_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `genero`, `genero_url`) VALUES
(1, 'Accion', 'accion'),
(2, 'Miedo', 'miedo'),
(3, 'Aventura', 'aventura'),
(4, 'Drama', 'drama'),
(5, 'Crimen', 'crimen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `titulo_url` varchar(150) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `sinopsis` text,
  `genero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `titulo`, `titulo_url`, `imagen`, `sinopsis`, `genero`) VALUES
(1, 'Better call Saul T3', 'BettercallSaulT3', 'https://cdn-images-1.medium.com/max/800/1*oAU5gghX_Mhiy2xsmVsDRw.jpeg', 'Si Better Call Saul naciÃ³ a la sombra de la mÃ­tica Breaking Bad, serie madre de la cual es spin-off, con el final de la tercera temporada se ha consolidado con entidad propia como una de las propuestas mÃ¡s interesantes de la televisiÃ³n. Curiosamente, la serie ha ido ganando personalidad y enteros a la vez que el universo Breaking Bad ha ido penetrando en ella. Desde HÃ©ctor Salamanca hasta Gus Fring, muchos son los elementos de ese mundo creado por Vince Gilligan que se han incorporado a la serie. Jimmy McGill ya ha emprendido su particular viaje hacia Saul Goodman, en un punto de no retorno del que empezamos a vislumbrar las consecuencias y que estamos deseosos por comprobar en la prÃ³xima temporada.', 1),
(2, '13 reason why', '13reasonwhy', 'https://cdn-images-1.medium.com/max/800/1*iBglR9oJf7LsewD31uHMlg.jpeg', 'Hannah Baker se ha suicidado y ha dejado siete casetes, trece caras en total, grabados con las trece razones que le llevaron a quitarse la vida, cada una dedicada a un compaÃ±ero diferente de su instituto, incluido Clay, un chico tÃ­mido para el que escuchar las cintas trae de vuelta dolorosos recuerdos. Con este argumento, Por trece razones ha sido una de las revelaciones del aÃ±o, con polÃ©micas encendidas sobre el tratamiento que hace del suicidio y del acoso que Hannah sufre en el instituto, y una segunda temporada ya confirmada por Netflix.', 1),
(3, 'Love T2', 'Love T2', 'https://cdn-images-1.medium.com/max/800/1*yoF5nndpv97rH5faYEDxQA.jpeg', 'Netflix ha tenido una buena primera mitad de 2017 en lo que se refiere a comedias romÃ¡nticas. AdemÃ¡s de Master of none, la segunda temporada de Love ha convencido a quienes no habÃ­an quedado del todo contentos con su entrega inicial al seguir apostando por la naturalidad y por desmontar lo clichÃ©s del gÃ©nero. La relaciÃ³n entre Mickey y Gus no es el Ãºnico centro de la serie, que amplÃ­a su mundo al mostrar tambiÃ©n a sus amigos y al resto del entorno personal de cada uno de ellos. La producciÃ³n de Judd Apatow ha encontrado su camino y se ha consolidado entre las series mÃ¡s recomendables de Netflix, y tambiÃ©n entre las comedias de corte indie que se llevan ahora en la televisiÃ³n por cable y en streaming.', 2),
(4, 'LegiÃ³n', 'Legion', 'https://cdn-images-1.medium.com/max/800/1*Oudev_Un1DYYS1wTHXrq3w.jpeg', 'En un aÃ±o en el que el cine de superhÃ©roes se ha salido de la fÃ³rmula habitual con Logan y Wonder Woman, ha sido una serie la que ha mostrado que todavÃ­a puede haber acercamientos originales y casi experimentales a historias de gente con superpoderes. LegiÃ³n ha sido la primera colaboraciÃ³n entre Marvel y el estudio FOX en televisiÃ³n, y ha sido de lo mÃ¡s llamativo del aÃ±o. Creada por Noah Hawley, adapta la historia de un personaje poco conocido del universo de X-Men, David Haller, y explota al mÃ¡ximo las posibilidades visuales que le dan sus poderes telequinÃ©ticos, y su confusiÃ³n entre lo que es real y lo que sÃ³lo estÃ¡ en su cabeza. AdemÃ¡s, le ha dado a Aubrey Plaza uno de los personajes de estos primeros seis meses de 2017.', 2),
(5, 'American Gods', 'AmericanGods', 'https://cdn-images-1.medium.com/max/800/1*2atpGU5JdgCZxgg_0cKb4A.jpeg', 'DespuÃ©s de demostrar que se podÃ­a hacer algo parecido a una Ã³pera en televisiÃ³n con Hannibal, Bryan Fuller, en colaboraciÃ³n con Michael Green, ha dado rienda suelta a todas sus excentricidades visuales para adaptar a la pequeÃ±a pantalla American Gods, el libro de Neil Gaiman sobre una lucha entre los dioses tradicionales y los de la sociedad moderna. La serie ha tenido varios momentos muy impactantes (la presentaciÃ³n de Bilquis ha sido sÃ³lo uno de ellos) y ha ampliado y profundizado en personajes que en la novela estaban mÃ¡s bien infrautilizados, como Laura Moon. Ha ido ganando fans con el paso de los capÃ­tulos.', 3),
(6, 'Fargo T3', 'FargoT3', 'https://cdn-images-1.medium.com/max/800/1*H3pIqM5VakWo0689lUZbuw.jpeg', 'De las tres temporadas emitidas hasta ahora de esta serie de antologÃ­a, la tercera es la que ha dividido mÃ¡s al pÃºblico. Para algunos, ha sido la mÃ¡s floja de las tres; para otros, ha recuperado el nivel en su tramo final, cuando sus personajes femeninos dan un paso al frente y suceden a los hermanos Stussy como los protagonistas de la entrega. Fargo ha sido, ademÃ¡s, el mejor escaparate para las habilidades de Carrie Coon para quienes no la hubieran visto en The Leftovers, y aunque sÃ­ ha sido demasiado obvia en algunos momentos, ha tenido dos episodios muy interesantes por sus digresiones en la historia y en la forma de contarla: el tercero, ambientado en Los Ãngeles, y el cuarto, que enmarca toda la temporada en Pedro y el lobo.', 3),
(7, 'Taboo', 'Taboo', 'https://cdn-images-1.medium.com/max/800/1*W6mfqrGb6copP0AzQjilFA.jpeg', 'Venganzas, secretos familiares y las reglas hipÃ³critas y clasistas de la sociedad victoriana. A todo eso se enfrenta, cual elefante en una cacharrerÃ­a, el personaje de Tom Hardy en Taboo, un hombre que regresa a Londres a hacerse cargo de la herencia de la familia, aunque esa herencia vaya a estar sumergida en la violencia. Hardy ha creado la serie junto a su padre y a Steven Knight, responsable de Peaky Blinders, y la ha imbuido de intensidad y de una gran personalidad visual, con ese retrato feÃ­sta de la capital inglesa en el siglo XIX. Su personaje carga contra el establishment social para conseguir su venganza, y su aura de solitario inconformista ha atraÃ­do a bastantes espectadores.', 4),
(8, 'Feud', 'Feud', 'https://cdn-images-1.medium.com/max/800/1*h7ZvUqkRviPhptG3pt9HMg.jpeg', 'Bette Davis y Joan Crawford eran dos leyendas vivas de Hollywood que, en los aÃ±os 60, casi estaban olvidadas. Ya no eran unas veinteaÃ±eras y los estudios las habÃ­an apartado, pero ninguna estaba preparada para dejar de trabajar. AhÃ­ entraron en escena Â¿QuÃ© fue de Baby Jane? y el director Robert Aldrich. Y Feud, la nueva serie de antologÃ­a de Ryan Murphy, lo cuenta todo. Sostenida por las grandes interpretaciones de Susan Sarandon y Jessica Lange, la temporada se articula alrededor de la rivalidad entre Davis y Crawford, alimentada por el estudio porque le servÃ­a para ganar mÃ¡s dinero, y teje un panorama de soledad, discriminaciÃ³n y oportunidades perdidas que ha sido de lo mÃ¡s interesante del aÃ±o. Y luego estÃ¡ Mamacita, claro.', 4),
(9, 'Big little lies', 'Biglittlelies', 'https://cdn-images-1.medium.com/max/800/1*prf1IByLs3SIOzcWIl403Q.jpeg', 'Big little lies tardÃ³ un poco en ganarse el favor de los crÃ­ticos. Los nombres detrÃ¡s y delante de las cÃ¡maras habÃ­an generado expectaciÃ³n, pero los primeros episodios dejaron a algunos espectadores un poco desconcertados por la mezcla de tonos presentes, entre la sÃ¡tira social y la historia de misterio. Sin embargo, conforme Celeste (Nicole Kidman) fue adueÃ±Ã¡ndose de la historia, la percepciÃ³n de la miniserie cambiÃ³. La progresiva revelaciÃ³n de que su marido es un maltratador, y cÃ³mo van entrelazÃ¡ndose el trauma de Jane y los problemas familiares de Madeleine, elevan Big little lies a lo mÃ¡s alto del podio en estos primeros seis meses del aÃ±o. La direcciÃ³n de Jean-Marc VallÃ©e es tambiÃ©n de lo mÃ¡s estimulante, y su uso de la mÃºsica ha sido igualmente destacable.', 5),
(10, 'The Handmaidâ€™s Tale', 'The HandmaidsTale', 'https://cdn-images-1.medium.com/max/800/1*_y3aUfK3Glrr2MkY0tVHzA.png', 'HabÃ­a mucha expectaciÃ³n por ver quÃ© hacÃ­a Hulu con la adaptaciÃ³n de la novela de Margaret Atwood, El cuento de la criada. La plataforma de streaming no habÃ­a tenido, hasta ahora, ningÃºn gran Ã©xito entre sus producciones de ficciÃ³n, y la distopÃ­a totalitaria y misÃ³gina de Atwood ya habÃ­a sido adaptada al cine y hasta a la Ã³pera. Al final, The Handmaidâ€™s Tale se posiciona a acabar el aÃ±o como una de sus mejores series por la manera en la que trata la historia de Offred, su construcciÃ³n del mundo de Gilead, la impresionante interpretaciÃ³n de Elisabeth Moss y una fotografÃ­a y una direcciÃ³n muy reseÃ±ables.', 5);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genero` (`genero`),
  ADD UNIQUE KEY `genero_url` (`genero_url`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo_url` (`titulo_url`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_ibfk_1` FOREIGN KEY (`genero`) REFERENCES `genero` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
