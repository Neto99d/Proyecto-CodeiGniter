-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 22:10:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercioql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Pastas', 'Pastas para comidas', NULL),
(2, 'Viandas', 'Viandas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('rfgj3d4gui0i34pfqaa0vseapt0pbr13', '::1', 1656448943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363434383934333b),
('0cu7hl0g9qcauvjgb2klsnk5ut4fg4sj', '::1', 1656449248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363434393234383b),
('m0d05s761v66fdmg0uaoi6us5erj85om', '::1', 1656449612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363434393631323b),
('jo6u913fr6jmcpesotkniq25s1a544i1', '::1', 1656450585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435303538353b),
('5oubra625gsba3crg41s5ag74efp0mrq', '::1', 1656450936, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435303933363b),
('gd69qbblo42rokrb86uqub6043oe0rb7', '::1', 1656451283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435313238333b),
('55qdc1hbho1254rr7b8hs7b398ep39qj', '::1', 1656451826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435313832363b),
('kvissl02enh5iobmva63eb3c8ac7pnh7', '::1', 1656452144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435323134343b),
('bhupgqmmfbkdc3svj8iqt3srd2iibgvl', '::1', 1656452793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435323739333b),
('7cel3d2ssr0actg3hj4i2dct3idf8na6', '::1', 1656453100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435333130303b),
('o167pcuejso822umfpj6ve23so0jb3ha', '::1', 1656453649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435333634393b),
('8ce6dlmr6pnk9stsfo88doago73pc2pa', '::1', 1656454794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435343739343b69647c733a323a223138223b6e6f6d6272657c733a333a224c6961223b6170656c6c69646f737c733a343a22466f6e74223b646972656363696f6e7c733a31323a22542d3537204d6963726f2038223b74656c65666f6e6f7c733a383a223534353538323230223b636f7272656f7c733a31333a226c696140756f2e6564752e6375223b697341646d696e7c733a313a2231223b6c6f676765645f696e7c623a313b5f5f63695f766172737c613a373a7b733a363a226e6f6d627265223b693a313635363534343530393b733a393a226170656c6c69646f73223b693a313635363534343530393b733a393a22646972656363696f6e223b693a313635363534343530393b733a383a2274656c65666f6e6f223b693a313635363534343530393b733a363a22636f7272656f223b693a313635363534343530393b733a373a22697341646d696e223b693a313635363534343530393b733a393a226c6f676765645f696e223b693a313635363534343530393b7d),
('e7pffn8cf6lo9kuhei83q9vko5vqlrtt', '::1', 1656455098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435353039383b69647c733a323a223138223b6e6f6d6272657c733a333a224c6961223b6170656c6c69646f737c733a343a22466f6e74223b646972656363696f6e7c733a31323a22542d3537204d6963726f2038223b74656c65666f6e6f7c733a383a223534353538323230223b636f7272656f7c733a31333a226c696140756f2e6564752e6375223b697341646d696e7c733a313a2231223b6c6f676765645f696e7c623a313b5f5f63695f766172737c613a373a7b733a363a226e6f6d627265223b693a313635363534343530393b733a393a226170656c6c69646f73223b693a313635363534343530393b733a393a22646972656363696f6e223b693a313635363534343530393b733a383a2274656c65666f6e6f223b693a313635363534343530393b733a363a22636f7272656f223b693a313635363534343530393b733a373a22697341646d696e223b693a313635363534343530393b733a393a226c6f676765645f696e223b693a313635363534343530393b7d),
('7aoq999fe6qiji3gfc2ora4pfuh4h7if', '::1', 1656455506, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435353530363b69647c733a323a223138223b6e6f6d6272657c733a333a224c6961223b6170656c6c69646f737c733a343a22466f6e74223b646972656363696f6e7c733a31323a22542d3537204d6963726f2038223b74656c65666f6e6f7c733a383a223534353538323230223b636f7272656f7c733a31333a226c696140756f2e6564752e6375223b697341646d696e7c733a313a2231223b6c6f676765645f696e7c623a313b5f5f63695f766172737c613a373a7b733a363a226e6f6d627265223b693a313635363534353230393b733a393a226170656c6c69646f73223b693a313635363534353230393b733a393a22646972656363696f6e223b693a313635363534353230393b733a383a2274656c65666f6e6f223b693a313635363534353230393b733a363a22636f7272656f223b693a313635363534353230393b733a373a22697341646d696e223b693a313635363534353230393b733a393a226c6f676765645f696e223b693a313635363534353230393b7d),
('g83okdjv2js1hudhnf2qc0l7vbd2rcjj', '::1', 1656455879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435353837393b69647c733a323a223137223b6e6f6d6272657c733a353a224a6f726765223b6170656c6c69646f737c733a393a224865726e616e64657a223b646972656363696f6e7c733a31313a22522d3335206170746f2036223b74656c65666f6e6f7c733a383a223536333437393936223b636f7272656f7c733a31363a2275736572406578616d706c652e636f6d223b697341646d696e7c4e3b6c6f676765645f696e7c623a313b),
('5bs9pqnb6ocsg63qb29vsk70ogavpfoa', '::1', 1656456703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435363730333b69647c733a323a223135223b6e6f6d6272657c733a343a2244757661223b6170656c6c69646f737c733a373a2245726e6573746f223b646972656363696f6e7c733a343a22522d3335223b74656c65666f6e6f7c733a383a223536333437393936223b636f7272656f7c733a31373a2261646d696e406578616d706c652e636f6d223b697341646d696e7c4e3b6c6f676765645f696e7c623a313b),
('71vi0tgb5abdag4r24jm5138v8pe1nq2', '::1', 1656457901, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435373930313b),
('0d1s1jk4vdqdvdd01haubu1sedptdd3a', '::1', 1656458186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363435383138363b),
('7voh467s8lg73ie53m1tt5lrk0gfe5im', '::1', 1656512698, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363531323639383b),
('idq0l72fg9kj8e74d6aobpe3kgf1seo6', '::1', 1656512908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363531323930383b),
('5bh546v16v030fvmh458dvjhqb0o6v5i', '::1', 1656618623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363631383632333b69647c733a323a223138223b6e6f6d6272657c733a333a224c6961223b6170656c6c69646f737c733a343a22466f6e74223b646972656363696f6e7c733a31323a22542d3537204d6963726f2038223b74656c65666f6e6f7c733a383a223534353538323230223b636f7272656f7c733a31333a226c696140756f2e6564752e6375223b697341646d696e7c733a313a2231223b6c6f676765645f696e7c623a313b5f5f63695f766172737c613a373a7b733a363a226e6f6d627265223b693a313635363730383331333b733a393a226170656c6c69646f73223b693a313635363730383331333b733a393a22646972656363696f6e223b693a313635363730383331333b733a383a2274656c65666f6e6f223b693a313635363730383331333b733a373a22697341646d696e223b693a313635363730383331333b733a363a22636f7272656f223b693a313635363730383331333b733a393a226c6f676765645f696e223b693a313635363730383331333b7d),
('s687ggh1uogtm0okgehu074alst03hq6', '::1', 1656619309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363631393330393b69647c733a323a223135223b6e6f6d6272657c733a343a2244757661223b6170656c6c69646f737c733a373a2245726e6573746f223b646972656363696f6e7c733a343a22522d3335223b74656c65666f6e6f7c733a383a223536333437393936223b636f7272656f7c733a31373a2261646d696e406578616d706c652e636f6d223b697341646d696e7c733a303a22223b6c6f676765645f696e7c623a313b5f5f63695f766172737c613a373a7b733a363a226e6f6d627265223b693a313635363730383738353b733a393a226170656c6c69646f73223b693a313635363730383738353b733a393a22646972656363696f6e223b693a313635363730383738353b733a383a2274656c65666f6e6f223b693a313635363730383738353b733a373a22697341646d696e223b693a313635363730383738353b733a363a22636f7272656f223b693a313635363730383738353b733a393a226c6f676765645f696e223b693a313635363730383738353b7d),
('71f0am2365md334phnomva633hgihsb6', '::1', 1656619567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363631393536373b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `username`, `telefono`, `direccion`, `email`, `password`, `isAdmin`) VALUES
(15, 'Duva', 'Ernesto', 'neto99', '56347996', 'R-35', 'admin@example.com', 'admin', NULL),
(17, 'Jorge', 'Hernandez', 'user99', '56347996', 'R-35 apto 6', 'user@example.com', '1234', NULL),
(18, 'Lia', 'Font', 'lia99', '54558220', 'T-57 Micro 8', 'lia@uo.edu.cu', 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `importe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `categoria_id` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `disponible` int(200) DEFAULT NULL,
  `cantPedida` int(11) DEFAULT NULL,
  `imagenProd` varchar(100) DEFAULT NULL,
  `peso` varchar(15) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `estado`, `disponible`, `cantPedida`, `imagenProd`, `peso`, `fecha`) VALUES
(1, 'Puré de Tomate', ' Puré para acompañar sus alimentos, excelente para Pizzas.', '50', 'Pastas', NULL, 0, 0, 'pure.png', '    ', '0000-00-00'),
(2, 'Papas', 'Papas de buena calidad, buen tamaño.', '60', 'Viandas', NULL, 223, 0, 'papas.jpg', 'Lb', '0000-00-00'),
(3, 'Fongo', 'Manos de fongo maduro.', '40', 'Viandas', NULL, 46, 0, 'fongo-maduro.jpg', '', '0000-00-00'),
(4, 'Mostaza', 'Pomos de Mostaza, excelente para complementar con queso y pan.', '50', 'Pastas', NULL, 10, 3, 'mostaza.jpg', '', '0000-00-00'),
(11, 'Remolacha', 'Remolacha', '50', 'Viandas', NULL, 23, NULL, 'Imagen-no-disp.png', '', '2022-06-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venta_detalle_idx` (`venta_id`),
  ADD KEY `fk_producto_detalle_idx` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_categoria_producto_idx` (`categoria_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_venta_idx` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_producto_detalle` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_detalle` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
