-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2021 a las 16:21:48
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sol1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `autor`, `titulo`, `contenido`, `fecha`) VALUES
(6, 'Bryan  ', 'Mi primer blog  ', 'Era un pueblecito rayano, Ribamoura, vivero de contrabandistas, donde esta profesión de riesgo y lucro hacía a la gente menos dormida de lo que suelen ser los pueblerinos. Abundaban los mozos de cabeza caliente, y se desdeñaba al que no era capaz de coger una escopeta y salir a la ganancia.\r\n\r\nLas mujeres, vestidas y adornadas con lo que da de sí el contrabando, lucían pendientes de ostentosa filigrana, patenas fastuosas, pañuelos de seda de colorines; en las casas no faltaba ron jamaiqueño ni queso de Flandes, y los hombres poseían armas inglesas, bolsas de piel y tabaco Virginia y Macuba. Al través de Portugal, Inglaterra enviaba sus productos, y de España pasaban otros, cruzando el caudaloso río.\r\n\r\nAlgunos días del año se interrumpía el tráfico y la industria de Ribamoura. El pueblo entero se congregaba a celebrar las solemnidades consuetudinarias, que servían de pretexto para solaces y holgorio. Tal ocurría con el Carnaval, tal con la fiesta de la Patrona, tal con los días de la Semana Santa. A pesar de ser éstos de penitencia y mortificación, para los de Ribamoura tenían carácter de fiesta; en ellos se celebraba, en la iglesia principal, espacioso edificio de la época herreriana, la representación de la Pasión, con personajes de carne y hueso, y encargándose de los papeles gente del pueblo mismo.\r\n\r\nVenido de Oporto, un actor portugués, con el instinto dramático de la raza, organizaba y dirigía la representación; pero sin tomar parte en ella. Esto se hubiese considerado en Ribamoura irreverente. «Trabajaban» por devoción y por respeto tradicional a los misterios redentores; pero nunca hubiesen admitido a nadie mercenario, ni tolerado que hiciese los papeles nadie de mala reputación. Gente honrada, aunque contrabandease; que eso no deshonra. Ni por pecado lo daban en el confesionario los frailes...', '2021-10-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `autor`, `tema`, `contenido`, `fecha`) VALUES
(1, 'Bryan  ', 'COMO HACER LA MEJOR PIZZA CASERA', 'La receta de hoy en realidad son 10, porque tenemos varias recetas para hacer masa para pizza, la salsa para pizza y luego 6 recetas de pizzas variadas, para que tengáis donde escoger una vez hayáis preparado la masa. También os va a valer si compráis la masa ya hecha, pero os prometo que si la hacéis casera merecerá realmente la pena. No tiene nada que ver una pizza con la masa casera que comprada, absolutamente nada.\r\n\r\nComo ejemplos de pizzas, tendremos la pizza margarita, una de pollo y setas, otra de jamón ibérico y por último una que está muy de moda en los tiempos que corren, la hawaiana. Para quien no lo sepa, la pizza hawaiana es de pollo con piña, cosa que crea bastante controversia, ya que esta pizza genera tanto amor como odio. Os dejo las cuatro para que podáis escoger la que más os guste o simplemente ninguna. Podéis hacer la pizza con los ingredientes que os venga en gana.\r\n\r\nTodas las recetas, incluida la de la masa, tendrán su respectivo enlace a la receta completa. También tenéis el vídeo con la receta de la masa, las de las cuatro pizzas y como extra la de una salsa de tomate casera especial para pizzas.', '2021-10-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`) VALUES
(6, 'Bryan', 'bryan@mail.com', '$2y$10$IyUh2AKAk1cJZAJ4ZxggTO5WwKA7R7xPZhIQz6C2lxCHgULhVRSzu'),
(7, 'Pablo', 'pablo@mail.com', '$2y$10$zm4AxDrdQJ8D0qSB4.ybJOiByFGNQJ34CNDLYt5K2Dg60QLrWucZ6'),
(8, 'bryan aranda', 'bryana@mail.com', '$2y$10$47cN68eMvefX3XNPtPWr6uPMX53KwxRICov9rbNXmXmAzuqMDtKWK'),
(9, 'nuevo', 'nuevo@mail.com', '$2y$10$un9fHwJfg6QbuVizbKCzYOhjVjI1phq/sT51Rf5FB0gBldlrZgHlu'),
(10, 'carlos', 'carlos@mail.cl', '$2y$10$mTDZdGEHWniga0.u5nRu1u814zURuLBzXp0Od4pA381oUZLNpGVXe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
