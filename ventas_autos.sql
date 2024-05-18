-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2024 a las 01:17:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `id` int(200) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Marca` varchar(30) DEFAULT NULL,
  `Modelo` varchar(30) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Precio` decimal(65,0) NOT NULL,
  `Pais` varchar(30) DEFAULT NULL,
  `Ruta` varchar(30) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automoviles`
--

INSERT INTO `automoviles` (`id`, `Nombre`, `Marca`, `Modelo`, `Estado`, `Precio`, `Pais`, `Ruta`, `Descripcion`) VALUES
(1, 'Toyota Camry', 'Toyota', 'Camry', 'Nuevo', '25000', 'Japón', 'fotos/Toyota Camry.jpg', 'El Toyota Camry es un sedán mediano conocido por su fiabilidad y eficiencia. Es popular entre los conductores que buscan un automóvil cómodo y económico con un buen rendimiento en carretera. Con su reputación de durabilidad y bajos costos de mantenimiento, el Camry es una opción sólida tanto para conductores individuales como para familias.'),
(2, 'Ford Mustang', 'Ford', 'Mustang', 'Usado', '35000', 'Estados Unidos', 'fotos/Ford Mustang.jpg', 'El Ford Mustang es un icono del automovilismo estadounidense, conocido por su potencia y estilo deportivo. Como uno de los pony cars más emblemáticos, el Mustang ofrece una experiencia de conducción emocionante con su motor potente y su diseño aerodinámico. Es popular entre los entusiastas del automovilismo y aquellos que buscan una combinación de rendimiento y estilo único.'),
(3, 'Volkswagen Golf', 'Volkswagen', 'Golf', 'Usado', '18000', 'Alemania', 'fotos/Volkswagen Golf.jpg', 'El Volkswagen Golf es un hatchback compacto reconocido por su calidad de construcción y versatilidad. Con su diseño funcional y ágil manejo, el Golf es ideal tanto para la conducción diaria en la ciudad como para viajes más largos. Además, ofrece una amplia gama de opciones de motorización y características de seguridad avanzadas.\r\n\r\n'),
(4, 'Honda Civic', 'Honda', 'Civic', 'Nuevo', '22000', 'Japón', 'fotos/Honda Civic.jpg', ' El Honda Civic es un automóvil compacto conocido por su eficiencia, confiabilidad y confort. Con su diseño moderno y tecnología innovadora, el Civic ofrece una experiencia de conducción agradable y práctica. Es popular entre los conductores que buscan un automóvil económico y de bajo consumo de combustible sin comprometer el rendimiento o la comodidad.'),
(5, 'BMW 3 Series', 'BMW', '3 Series', 'Nuevo', '45000', 'Alemania', 'fotos/BMW 3 Series.png', 'El BMW Serie 3 es una berlina de lujo reconocida por su elegancia, rendimiento y tecnología avanzada. Como uno de los modelos más emblemáticos de BMW, el Serie 3 combina un diseño impresionante con un manejo dinámico y potentes opciones de motorización. Es apreciado por aquellos que buscan un automóvil premium que ofrezca tanto lujo como emoción al volante.'),
(6, 'Chevrolet Corvette', 'Chevrolet', 'Corvette', 'Nuevo', '65000', 'Estados Unidos', 'fotos/Chevrolet Corvette.jpg', 'El Chevrolet Corvette es un icónico automóvil deportivo estadounidense conocido por su potencia y estilo distintivo. Con su diseño aerodinámico y motor de alto rendimiento, el Corvette ofrece una experiencia de conducción emocionante y una imagen impresionante en la carretera.'),
(7, 'Mercedes-Benz Clase C', 'Mercedes-Benz', 'Clase C', 'Usado', '40000', 'Alemania', 'fotos/Mercedes_Benz ClaseC.jpg', 'El Mercedes-Benz Clase C es una berlina de lujo alemana que combina elegancia, tecnología avanzada y un rendimiento excepcional. Con su diseño refinado y características de seguridad innovadoras, el Clase C es ideal para aquellos que buscan comodidad y prestigio en un automóvil'),
(8, 'Nissan Sentra', 'Nissan', 'Sentra', 'Nuevo', '22000', 'Japón', 'fotos/Nissan Sentra.png', 'El Nissan Sentra es un automóvil compacto japonés conocido por su confiabilidad y eficiencia. Es popular entre los conductores que buscan un vehículo práctico y económico para el uso diario, con un buen equilibrio entre comodidad, espacio y economía de combustible.'),
(9, 'Audi A4', 'Audi', 'A4', 'Nuevo', '48000', 'Alemania', 'fotos/Audi A4.jpg', 'El Audi A4 es una berlina de lujo alemana reconocida por su calidad de construcción, tecnología avanzada y experiencia de conducción refinada. Con su elegante diseño exterior, interior lujoso y potentes motores, el A4 ofrece un equilibrio excepcional entre rendimiento y confort.'),
(10, 'Ford Escape', 'Ford', 'Escape', 'Nuevo', '28000', 'Estados Unidos', 'fotos/Ford Escape.avif', 'El Ford Escape es un SUV compacto estadounidense conocido por su versatilidad y capacidad todoterreno. Con su diseño moderno, eficiencia de combustible y opciones de motorización potentes, el Escape es una opción popular tanto para familias como para conductores individuales.'),
(11, 'Toyota RAV4', 'Toyota', 'RAV4', 'Usado', '32000', 'Japón', 'fotos/Toyota RAV4.jpg', ' El Toyota RAV4 es un SUV compacto japonés conocido por su durabilidad, confiabilidad y versatilidad. Con su diseño robusto y características de seguridad avanzadas, el RAV4 es una opción popular entre los conductores que buscan un vehículo utilitario deportivo cómodo y confiable.'),
(12, 'BMW Serie 5', 'BMW', 'Serie 5', 'Nuevo', '60000', 'Alemania', 'fotos/BMW Serie 5.jpg', 'El BMW Serie 5 es una berlina de lujo alemana reconocida por su elegancia, rendimiento y tecnología avanzada. Con su diseño refinado, potentes motores y características de vanguardia, el Serie 5 ofrece una experiencia de conducción premium y un estilo distintivo.'),
(13, 'Honda Accord', 'Honda', 'Accord', 'Usado', '25000', 'Japón', 'fotos/Honda Accord.png', 'El Honda Accord es una berlina mediana japonesa conocida por su fiabilidad, eficiencia y comodidad. Con su diseño aerodinámico, amplio interior y características de seguridad líderes en su clase, el Accord es una opción popular entre los conductores que buscan un automóvil familiar confiable y cómodo.'),
(14, 'Volkswagen Jetta', 'Volkswagen', 'Jetta', 'Nuevo', '24000', 'Alemania', 'fotos/Volkswagen Jetta.png', 'El Volkswagen Jetta es un sedán compacto alemán conocido por su calidad de construcción, eficiencia de combustible y manejo ágil. Con su diseño elegante y características tecnológicas avanzadas, el Jetta es una opción popular entre los conductores que buscan un automóvil práctico y cómodo para el uso diario.'),
(15, 'Hyundai Elantra', 'Hyundai', 'Elantra', 'Nuevo', '21000', 'Corea del Sur', 'fotos/Hyundai Elantra.jpg', 'El Hyundai Elantra es un sedán compacto surcoreano conocido por su valor, confiabilidad y economía de combustible. Con su diseño moderno y características tecnológicas avanzadas, el Elantra ofrece una experiencia de conducción cómoda y segura a un precio asequible.'),
(16, 'Kia Sportage', 'Kia', 'Sportage', 'Nuevo', '27000', 'Corea del Sur', 'fotos/Kia Sportage.jpg', 'El Kia Sportage es un SUV compacto surcoreano conocido por su diseño llamativo, calidad de construcción y manejo ágil. Con su amplio interior, características de seguridad avanzadas y opciones de motorización eficientes, el Sportage es una opción popular entre los conductores que buscan un vehículo versátil para el uso diario.'),
(17, 'Subaru Outback', 'Subaru', 'Outback', 'Usado', '30000', 'Japón', 'fotos/Subaru Outback.png', 'El Subaru Outback es un SUV familiar japonés conocido por su tracción en todas las ruedas, durabilidad y capacidad todoterreno. Con su diseño robusto y características de seguridad líderes en su clase, el Outback es una opción popular entre los conductores aventureros y aquellos que buscan un vehículo confiable para todas las condiciones de conducción.'),
(18, 'Mazda CX-5', 'Mazda', 'CX-5', 'Nuevo', '29000', 'Japón', 'fotos/Mazda CX5.png', ' El Mazda CX-5 es un SUV compacto japonés conocido por su estilo deportivo, manejo ágil y eficiencia de combustible. Con su diseño elegante y características de seguridad avanzadas, el CX-5 ofrece una experiencia de conducción emocionante y cómoda para conductores y pasajeros.'),
(19, 'Tesla Model 3', 'Tesla', 'Model 3', 'Nuevo', '45000', 'Estados Unidos', 'fotos/Tesla Model 3.png', 'El Tesla Model 3 es un sedán eléctrico estadounidense conocido por su rendimiento impresionante, tecnología innovadora y diseño futurista. Con su motor eléctrico y batería de larga duración, el Model 3 ofrece una experiencia de conducción única y sostenible.'),
(20, 'Volvo XC60', 'Volvo', 'XC60', 'Nuevo', '55000', 'Suecia', 'fotos/Volvo XC60.avif', 'El Volvo XC60 es un SUV de lujo sueco conocido por su seguridad líder en su clase, diseño elegante y comodidad excepcional. Con su interior espacioso y características tecnológicas avanzadas, el XC60 ofrece una experiencia de conducción premium y una sensación de lujo en cada viaje.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo usuario`
--

CREATE TABLE `tipo usuario` (
  `id` int(100) NOT NULL,
  `tipo_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo usuario`
--

INSERT INTO `tipo usuario` (`id`, `tipo_user`) VALUES
(1, 'SuperAdministrador'),
(2, 'Administrador'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `tipo usuario` varchar(20) NOT NULL,
  `genero` varchar(20) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `tipo usuario`, `genero`) VALUES
(1, 'Amiel', '123456', '1', 'Hombre'),
(2, 'obed', '12345', '2', 'Hombre'),
(3, 'Marcos', '12345', '3', 'Mujer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo usuario`
--
ALTER TABLE `tipo usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo usuario` (`tipo usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipo usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
