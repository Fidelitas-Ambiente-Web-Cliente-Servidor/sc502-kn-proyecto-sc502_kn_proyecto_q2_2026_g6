-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 05-08-2026 a las 04:30:16
-- Versión del servidor: 8.0.46
-- Versión de PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `AsociacionDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `lugar` varchar(150) DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `nombre`, `descripcion`, `fecha`, `hora`, `lugar`, `id_estado`) VALUES
(1, 'Yoga Comunitario', 'Clase abierta para vecinos.', '2026-08-02', '08:00:00', 'Salón Principal', 1),
(2, 'Asamblea General', 'Reunión de vecinos.', '2026-08-10', '18:00:00', 'Salón Principal', 1),
(3, 'Curso de Cocina', 'Taller básico de cocina.', '2026-08-15', '15:00:00', 'Cocina Comunal', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `fecha_envio` datetime DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `correo`, `telefono`, `asunto`, `mensaje`, `fecha_envio`, `id_estado`) VALUES
(1, 'Ana López', 'ana@gmail.com', '88881111', 'Solicitud de información', 'Quisiera conocer la disponibilidad del salón.', '2026-07-20 09:30:00', 3),
(2, 'Pedro Vargas', 'pedro@gmail.com', '88882222', 'Consulta', '¿Cuál es el costo del alquiler?', '2026-07-21 14:20:00', 3),
(3, 'Laura Castro', 'laura@gmail.com', '88883333', 'Felicitación', 'Excelente servicio brindado.', '2026-07-22 11:15:00', 1),
(4, 'Ana López', 'ana@gmail.com', '88881111', 'Solicitud de información', 'Quisiera conocer la disponibilidad del salón.', '2026-07-20 09:30:00', 3),
(5, 'Pedro Vargas', 'pedro@gmail.com', '88882222', 'Consulta', '¿Cuál es el costo del alquiler?', '2026-07-21 14:20:00', 3),
(6, 'Laura Castro', 'laura@gmail.com', '88883333', 'Felicitación', 'Excelente servicio brindado.', '2026-07-22 11:15:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Pendiente'),
(4, 'Aprobada'),
(5, 'Rechazada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `descripcion`, `imagen`, `fecha_publicacion`, `id_estado`) VALUES
(1, 'Nuevo Reglamento', 'Se actualizó el reglamento del salón comunal.', 'reglamento.jpg', '2026-07-15', 1),
(2, 'Mantenimiento', 'El salón permanecerá cerrado por mantenimiento.', 'mantenimiento.jpg', '2026-07-18', 1),
(3, 'Nuevas Actividades', 'Se agregaron cursos para niños y adultos.', 'actividades.jpg', '2026-07-25', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_email`, `order_date`, `total`) VALUES
(1, 'cris', 'oviedosotocris2019@gmail.com', '2026-08-05 03:02:58', 132.25),
(2, 'Dilana', 'oviedosotocris2019@gmail.com', '2026-08-05 03:07:47', 81.97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_title`, `product_price`, `quantity`, `subtotal`) VALUES
(1, 1, 1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 109.95, 1, 109.95),
(2, 1, 2, 'Mens Casual Premium Slim Fit T-Shirts ', 22.30, 1, 22.30),
(3, 2, 4, 'Mens Casual Slim Fit', 15.99, 1, 15.99),
(4, 2, 3, 'Mens Cotton Jacket', 55.99, 1, 55.99),
(5, 2, 7, 'White Gold Plated Princess', 9.99, 1, 9.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `motivo` text,
  `id_vecino` int DEFAULT NULL,
  `id_salon` int DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `fecha_solicitud`, `fecha_reserva`, `hora_inicio`, `hora_fin`, `motivo`, `id_vecino`, `id_salon`, `id_estado`) VALUES
(1, '2026-07-20', '2026-08-05', '14:00:00', '18:00:00', 'Cumpleaños Familiar', 1, 1, 3),
(2, '2026-07-21', '2026-08-12', '09:00:00', '12:00:00', 'Reunión Vecinal', 2, 2, 4),
(3, '2026-07-22', '2026-08-18', '16:00:00', '20:00:00', 'Baby Shower', 3, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon_comunal`
--

CREATE TABLE `salon_comunal` (
  `id_salon` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `capacidad` int DEFAULT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `salon_comunal`
--

INSERT INTO `salon_comunal` (`id_salon`, `nombre`, `descripcion`, `capacidad`, `ubicacion`, `id_estado`) VALUES
(1, 'Salón Principal', 'Salón para eventos grandes.', 150, 'Primer Piso', 1),
(2, 'Salón Multiuso', 'Espacio para talleres y reuniones.', 80, 'Segundo Piso', 1),
(3, 'Terraza', 'Área abierta para actividades sociales.', 50, 'Exterior', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `rol`, `id_estado`) VALUES
(1, 'Carlos', 'Rodríguez', 'carlos@salon.com', '123456', 'Administrador', 1),
(2, 'María', 'Jiménez', 'maria@salon.com', '123456', 'Administrador', 1),
(3, 'Luis', 'Mora', 'luis@salon.com', '123456', 'Secretario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vecino`
--

CREATE TABLE `vecino` (
  `id_vecino` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `vecino`
--

INSERT INTO `vecino` (`id_vecino`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `direccion`, `id_estado`) VALUES
(1, 'José', 'Ramírez', '101110111', '88884444', 'jose@gmail.com', 'Tibás, San José', 1),
(2, 'Andrea', 'Soto', '202220222', '88885555', 'andrea@gmail.com', 'Santo Domingo, Heredia', 1),
(3, 'Fernando', 'Vargas', '303330333', '88886666', 'fernando@gmail.com', 'Moravia, San José', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_vecino` (`id_vecino`),
  ADD KEY `id_salon` (`id_salon`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `salon_comunal`
--
ALTER TABLE `salon_comunal`
  ADD PRIMARY KEY (`id_salon`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `vecino`
--
ALTER TABLE `vecino`
  ADD PRIMARY KEY (`id_vecino`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salon_comunal`
--
ALTER TABLE `salon_comunal`
  MODIFY `id_salon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vecino`
--
ALTER TABLE `vecino`
  MODIFY `id_vecino` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_vecino`) REFERENCES `vecino` (`id_vecino`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_salon`) REFERENCES `salon_comunal` (`id_salon`),
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `salon_comunal`
--
ALTER TABLE `salon_comunal`
  ADD CONSTRAINT `salon_comunal_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `vecino`
--
ALTER TABLE `vecino`
  ADD CONSTRAINT `vecino_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
