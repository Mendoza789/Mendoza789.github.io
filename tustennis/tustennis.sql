-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 04:32:20
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tustennis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_oferta` int(11) NOT NULL,
  `id_tennis` int(11) DEFAULT NULL,
  `descuento` float NOT NULL,
  `fin_oferta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id_oferta`, `id_tennis`, `descuento`, `fin_oferta`) VALUES
(2, 4, 27, '2021-04-30'),
(6, 1, 47, '2021-04-29'),
(7, 12, 20, '2021-05-31'),
(8, 33, 10, '2021-05-28'),
(9, 35, 15, '2021-04-30'),
(10, 6, 15, '2021-05-12'),
(11, 20, 10, '2021-05-27'),
(12, 29, 10, '2021-04-20'),
(13, 26, 15, '2021-05-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tennis`
--

CREATE TABLE `tennis` (
  `id_tennis` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `color` varchar(50) NOT NULL,
  `talla` varchar(15) NOT NULL,
  `genero` int(1) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL,
  `destacado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tennis`
--

INSERT INTO `tennis` (`id_tennis`, `marca`, `modelo`, `color`, `talla`, `genero`, `descripcion`, `precio`, `ruta_imagen`, `destacado`) VALUES
(1, 'Adidas', 'Superstar', 'Cloud White / Core Black / Gold Metallic', '23-26', 1, 'No lo pienses. Ponte tu mejor atuendo. Esta noche brillarás. Los tenis adidas Superstar han sido un símbolo de expresión personal durante 50 años. Este par continúa con la tradición con llamativos detalles dorados. Lúcelos con estilo y deja que tu personalidad brille.', 1999.5, 'tennis/T61.jpg', 1),
(2, 'Adidas', 'U_Path X', 'Core Black / Cloud White / Screaming Pink', '23-26', 1, 'La vida pasa volando. Nadie lo puede negar y estos tenis adidas son los compañeros perfectos para seguirte el ritmo. La suela de caucho resiste al desgaste y el exterior en malla y piel llena de comodidad tu día a día ajetreado. ¿Y en los momentos de descanso? Pues, se sienten igual de suaves y cómodos.', 1840.2, 'tennis/T2.jpg', 0),
(3, 'Tlaloc', 'Atl', 'Azul - Blanco', '24-28', 0, 'Huaraches de alta tecnología con moda prehispánica.', 1250.5, 'tennis/huaraches-azules.jpg', 0),
(4, 'Adidas', 'Forum Bold', 'Off White / True Pink / Core Black', '23-26', 1, '¿Banqueta o pasarela? Ambas. ¿Extraños o bailarines profesionales? También ambos. Domina tu look y haz de las calles tu patio trasero con estos tenis adidas Forum. Inspirados en la actitud de los 80, llevan tu look diario a otro nivel con su suela tipo plataforma y un exterior único que evoca los comienzos de estilo vogue. No lo pienses. Haz tu mejor pose.', 2999, 'tennis/T3.jpg', 0),
(5, 'Adidas', 'Sonkei', 'Cloud White / Core Black / Bliss Purple', '22-25', 1, 'Estos tenis ofrecen un estilo deportivo y a la vez urbano que querrás llevar a todas partes. Con su estética divertida y diseño circular de arco infinito, los adidas Sonkei son tus nuevos tenis favoritos. Póntelos con un conjunto de pants y sudadera adidas o con un jean de cintura alta y viaja de regreso a los 80 con estilo.', 1399, 'tennis/T4.jpg', 0),
(6, 'Adidas', 'Nmd_R1', 'Core Black / Core Black / Gold Metallic', '22-25', 1, 'Cuando recibes un mensaje de texto con una invitación para salir a la calle no necesitas mucho convencimiento. Ni siquiera tienes que conocer los detalles. Sin importar el lugar o la actividad, siempre te anotas y estos tenis adidas NMD_R1 te acompañan a cada paso del camino con sus detalles metalizados para que nunca pases desapercibido.', 2999, 'tennis/T5.jpg', 0),
(7, 'Puma', 'Cell Vive Clean Running', 'Elektro Peach', '22-26', 1, 'PUMA orgánicamente inspirado acciones lenguaje de diseño 10CELL su ADN a la célula de los zapatos corrientes Vive Limpio de las mujeres. de esta pieza precio accesible trae esta esculpido, célula-como la estructura de esta pieza el rendimiento post-moderna al pueblo.', 1799, 'tennis/T6.jpg', 0),
(12, 'Puma', 'Running Resolve', 'High Risk Red-Puma Black', '25-30', 0, 'Abrir nuevos caminos en el concepto zapatilla de running con nuestra determinación de los zapatos corrientes, equipadas con lo último en tecnología de atletismo incluyendo CMEVA moldeada por compresión para un liso, paso acolchado y una suela de goma para el rebote final.', 1299, 'tennis/T10.jpg', 0),
(13, 'Puma ', 'Cruise Rider Silk Road', 'Green-Aquamarine', '22-26-5', 1, 'Inspirados en la belleza de los famosos Silk Road, estos tenis incluyen combinaciones de colores que crean un look muy original. La entresuela IMEVA te brinda liviandad y comodidad para que tus pies sean los más felices', 1999, 'tennis/T7.jpg', 0),
(14, 'Puma', 'Electron Street Metallic ', 'Puma Black-Rose Gold', '22-26.5', 1, 'Estos tenis llamativos están inspirados en el mundo de la tecnología visual y son excelentes tanto en términos de estilo como de comodidad. Cuentan con elementos de marca audaces y paneles superiores contrastantes, que le dan un toque de estilo urbano a tu look. Tienen un diseño tecnológico en el talón que se combina con la plantilla SoftFoam+ de PUMA para amortiguar cada paso que das durante el día.\r\n', 1799, 'tennis/T8.jpg', 0),
(15, 'Puma', 'RS-Curve Glow L', 'Plein Air-Puma White-Peach', '22-26.5', 1, 'Ingrese a un mundo nuevo y brillante con el futurista RS-Curve Glow, una adición específica para mujeres a la icónica familia RS. La parte superior de tela presenta detalles metálicos y llamativos estampados ondulados para una apariencia llamativa.\r\n', 2599, 'tennis/T9.jpg', 0),
(16, 'Puma', 'Rs-X Mix', 'Black-CASTLEROCK-Yell. Alert', '25-30', 0, 'Equípate con lo mejor de ambos mundos gracias a nuestros tenis RS-X Mix, una incorporación a nuestra familia RS-X. Este diseño toma todas las innovaciones textiles de más éxito de las cuatro últimas temporadas y sube su volumen, todo para crear una experiencia moderna, cómoda y atrevida que encantará a los amantes de la moda urbana.\r\n', 2599, 'tennis/T11.jpg', 0),
(17, 'Puma', 'Electron Street', 'Quarry-Puma White-Gum', '22.5-30', 0, 'Creadas para la calle, las Electron Street presentan un impresionante estilo viztech donde destaca un complemento de talón con tecnología visible que absorbe los impactos para caminar cómodamente. Corre rápida y cómodamente por las calles gracias al exterior de punto transpirable, paneles sintéticos para una mayor sujeción y un elástico en el talón con la marca. La plantilla SoftFoam+ ofrece una amortiguación superior y comodidad óptima a cada paso.\r\n', 1799, 'tennis/T12.jpg', 0),
(18, 'Adidas', 'NmdD_R1', 'Core Black / Core Black / Core Black', '25-29.5', 0, 'Entra en acción con los llamativos estampados inspirados en videojuegos de los tenis NMD_R1. Sus inconfundibles inserciones en la mediasuela te mantienen en lo más alto del juego. Siente el legado nómada de los NMD al canalizar la amortiguación con retorno de energía y muévete en un mundo de nuevas posibilidades. Rinde tributo al pasado mientras miras hacia el futuro con unos tenis que se ven y se sienten bien.\r\n', 2999, 'tennis/T13.jpg', 0),
(19, 'Adidas', 'Harden Stepback 2', 'Yellow / Crew Yellow / Royal Blue', '25.5-28', 0, 'Un poco de color no está demás cuando estás encestando sin parar. Creados para el estilo de juego distintivo de James Harden, estos tenis de básquet adidas tienen una mediasuela Bounce flexible que brinda la amortiguación que necesitas para atacar el aro rival. Los detalles en color de contraste en el exterior te hacen notar en cada rincón de la cancha.\r\n', 1999, 'tennis/T14.jpg', 0),
(20, 'Nike', 'Air Max Infinity', 'White', '22', 1, 'Estos zapatos casuales combinan una parte de material sintético para una gran comodidad y durabilidad, además de tener cordones que se ajustan a tu medida. Su principal atractivo es su unidad Max Air en el talón que se encarga de dar amortiguación en cada una de tus pisadas y su suela de goma añade agarre seguro.\r\n', 1999, 'tennis/T15.jpg', 0),
(21, 'Nike', 'Air Max VG-R', 'White', '25-29', 0, 'Camina suave y cómodamente con los Tenis Nike Air Max VG-R para hombres. Podrás combinarlos con muchas cosas, ya que son perfectos para tu porte casual regular.\r\n', 1999, 'tennis/T16.jpg', 0),
(22, 'Nike', 'SuperRep Go', 'Gray', '22-27', 1, 'El calzado deportivo Nike de dama tiene la frescura ideal para tu pie mientras te mueves con intensidad por su confección de malla en la parte superior, la amortiguación en cada salto, paso y sentadillas brinda la comodidad con espuma en la parte interna y el arco hacia el exterior con suela de goma más resistente en áreas de tracción.\r\n', 2099, 'tennis/T17.jpg', 0),
(23, 'Nike', 'Air Zoom Winflo 7', 'Red', '28.5', 0, 'Los Tenis Nike Air Zoom Winflo 7 quedan perfecto contigo que buscas calzado de calidad, que sean ligeros y cómodos, además de lucir increíbles gracias a su diseño.\r\n', 2099, 'tennis/T18.jpg', 0),
(24, 'Reebok', 'Nano X1', 'Negro', '26-19', 0, 'Los Tenis Reebok Nano X1 de hombres están listos para ejercicios de mayor intensidad como escaladoras de montaña, saltar al cajón para mayor impulso, levantar pesas para fortalecer tus músculos y empezar a rodar la llanta en días de Crossfit incrementando tu rendimiento deportivo.', 2699, 'tennis/T19.jpg', 0),
(25, 'Reebok', 'Nano X', 'Gray', '22.5-23', 1, 'Los Tenis Reebok Nano X para Mujeres te permitirán la comodidad para esos entrenamientos intensos y que sientes un apoyo nulo, este par te acompaña desde el principio de tu calentamiento hasta el ultimo burpee, tienen la amortiguación ligera para cada salto en tu rutina complicada.', 2699, 'tennis/T20.jpg', 0),
(26, 'Reebok', 'Royal Complete Clean 2.0', 'White', '25-28', 0, 'Camina suave y cómodamente con los Tenis Reebok Royal Complete Clean 2.0 Unisex. Te ofrecen un gran estilo a tus pies y esto los hacen sencillos de poder combinar con muchas cosas que gustes ponerte.', 999, 'tennis/T21.jpg', 0),
(27, 'Reebok', 'Freestyle Motion Lo', 'Arena', '22.5-25.5', 1, 'Este calzado deportivo es ideal para que luzcas en cada entrenamiento, su ligereza te brinda un rendimiento óptimo para seguir con gran parte de tus ejercicios, en la parte superior cuenta con un tejido de malla para una mayor transpirabilidad para el pie y con la flexibilidad para los movimientos de más agilidad.', 1899, 'tennis/T22.jpg', 0),
(28, 'Nike', 'Cosmic Unity Amalgam', 'Black', '25-28', 0, 'Este calzado en color negro y verde tiene una construcción de un mínimo de 20% materiales reciclados. Mantienen así la transpiribilidad y también los hacen más ligeros. Cuentan con unas agujetas y lengüeta, que son sencillas de ajustar.', 3399, 'tennis/T23.jpg', 0),
(29, 'Nike', ' Air Zoom Terra Kiger 7', 'Green', '25-30', 0, 'Los Tenis Nike Air Zoom Terra Kiger 7 son para trail running especiales para terrenos rocosos, el diseño es ligero y veloz para mantener un ritmo alto en tus entrenamientos. La parte superior está hecha de material de malla y dan una ventilación adicional, el sistema Dynamic Fit se ajusta cómodamente alrededor del mediopié.', 2699, 'tennis/T24.jpg', 0),
(30, 'Vans', 'Classic Slip-On Bandana Yellow', 'Yellow', '25-28', 0, 'Siente la comodidad y suavidad que VANS te ofrece en cada paso con los Tenis Vans Classic Slip-On Bandana Yellow para hombres. Estupendos y perfectos para cualquier día de la semana que gustes ponértelos.', 1999, 'tennis/T25.jpg', 0),
(31, 'Vans', 'Old Skool Shale Green', 'Green', '25.5-28', 0, 'Los Tenis Vans Old Skool Shale Green para hombres son perfectos para cualquier día de la semana. Son estupendos para tu porte casual regular y podrás combinarlos con cualquier cosa que gustes ponerte.', 1199, 'tennis/T26.jpg', 0),
(32, 'Vans', 'Style 36 Bandana True Blue', 'Blue', '26-30', 0, 'Siente la suavidad y comodidad que VANS te ofrece con los Tenis Vans Style 36 Bandana True Blue para hombres. Estupendos para tu porte casual regular.', 1299, 'tennis/T27.jpg', 0),
(33, 'Vans', 'Old Skool Ditsy Floral', 'Multicolor', '24.5-25.5', 1, 'Con un tono primaveral es que llegan los Tenis Vans Old Skool Ditsy Floral. Estupendos para tu porte casual regular y combinar con cualquier cosa que gustes.', 1299, 'tennis/T28.jpg', 0),
(34, 'Vans', 'Ultrarange Rapidweld', 'Pick', '22.5-26', 1, 'Los tenis Vans Ultrarange Rapidweld para mujeres mezclan el estilo deportivo y moderno para usar en tu día, además de usar en cualquier ocasión, ya que aportan un diseño versátil y muy cómodo.', 1799, 'tennis/T29.jpg', 0),
(35, 'Vans', 'Checkerboard Classic Slip.On', 'Multicolor', '24.5', 1, 'Los Tenis Vans Checkerboard Classic Slip.On unisex son un calzado clásico y de los más famosos de Vans. Sin duda, deben formar parte de tu colección y usar en tus looks diarios.', 999, 'tennis/T30.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `rol_usuario` int(1) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `ap_paterno_usuario` varchar(50) NOT NULL,
  `ap_materno_usuario` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `rol_usuario`, `nombre_usuario`, `ap_paterno_usuario`, `ap_materno_usuario`, `fecha_nacimiento`, `email_usuario`, `password_usuario`) VALUES
(1, 0, 'Antonio', 'Juárez', 'González', '1982-03-08', 'ant@gmail.com', '0d6e038495b5289e8ffc574f04e51e728f0d9d22d67bb68bf2e720b6eca88a2b'),
(2, 1, 'Daniel', 'Hernández', 'Hernández', '1981-08-24', 'dan@gmail.com', '838f0974a3779d71f57fda16dd41149a6043d29670dd67fee98338f4bfd3eb72'),
(3, 1, 'Micro', 'de la Luz', 'Juárez', '2007-09-07', 'micro@gmail.com', '1b2c577292e9db65e54ac393b4d83627982df6e84b9d86ee89ab5ea6812edac1'),
(4, 1, 'Oddie', 'Juárez', 'Can', '1998-09-19', 'oddie@gmail.com', 'ec659139e65490e1c8471751fe1d48a16760edc8c4519f62d711a084836dc223'),
(5, 1, 'Gufy', 'Juárez', 'Chien', '1990-09-19', 'gufy@gmail.com', 'a1bf67aab0100316f0698d36943999dc22a5608ccf72f7fa11aa6d52828dc3fb'),
(10, 1, 'Ana', 'Solís', 'López', '2000-07-05', 'ana@gmail.com', 'e82827b00b2ca8620beb37f879778c082b292a52270390cff35b6fe3157f4e8b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `fk_tennis` (`id_tennis`);

--
-- Indices de la tabla `tennis`
--
ALTER TABLE `tennis`
  ADD PRIMARY KEY (`id_tennis`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tennis`
--
ALTER TABLE `tennis`
  MODIFY `id_tennis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `fk_id_tennis` FOREIGN KEY (`id_tennis`) REFERENCES `tennis` (`id_tennis`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
