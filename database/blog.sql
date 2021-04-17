-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 04:50 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Rol'),
(3, 'Sports'),
(4, 'Platforms'),
(5, 'Survival'),
(6, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `description`, `date_creation`) VALUES
(2, 2, 2, 'World of Warcraft ', 'World of Warcraft (abreviado como WoW, literalmente en español Mundo de Warcraft) es un videojuego de rol multijugador masivo en línea desarrollado por Blizzard Entertainment. Es el cuarto juego lanzado establecido en el universo fantástico de Warcraft, el cual fue introducido por primera vez por Warcraft: Orcs & Humans en 1994.4​ World of Warcraft transcurre dentro del mundo de Azeroth, cuatro años después de los sucesos finales de la anterior entrega de Warcraft, Warcraft III: The Frozen Throne.5​ Blizzard Entertainment anunció World of Warcraft el 2 de septiembre de 2001.6​ ', '2021-03-06'),
(3, 3, 3, 'Pro Evolution Soocer 2021', 'eFootball Pro Evolution Soccer 2021 Season Update (también conocido como Pro Evolution Soccer 2021 o simplemente PES 2021), es un videojuego de simulación de fútbol.\r\n\r\nEl juego salió en el 25 aniversario de la serie de videojuegos Pro Evolution Soccer y fue lanzado en Microsoft Windows, PlayStation 4 y Xbox One el 15 de septiembre de 2020, y el 17 de septiembre de 2020 se lanzó en Japón.1​ ', '2021-03-06'),
(4, 4, 1, 'Player Unknowns Battlegrounds ', 'Playerunknown\'s Battlegrounds (estilizado como PUBG) es un videojuego de batalla en línea multijugador masivo desarrollado por Brendan Greene y publicado por Bluehole para Microsoft Windows, Xbox One, PlayStation 4, Android e iOS. El juego era una beta battle royale de ARMA 3 que salió en 2015. El juego se basa en el estilo Battle Royale de los mods previamente desarrollados por Brendan \"Playerunknown\" Greene para otros juegos, pero ampliado independientemente bajo la dirección creativa de él mismo. En el juego, cien jugadores saltan en paracaídas desde un avión a una isla, donde tienen la libertad de moverse hacia un lugar determinado que ellos mismo elijan y buscan armas y equipamiento para matar a otros jugadores mientras evitan ser asesinados. El área segura disponible del mundo del juego disminuye en tamaño durante la partida, dirigiendo a los jugadores sobrevivientes a áreas más reducidas y forzando enfrentamientos. El último jugador o equipo en pie gana la partida. ', '2021-03-06'),
(5, 2, 2, 'League of Legends', 'League of Legends (también conocido por sus siglas LoL) es un videojuego del género multijugador de arena de batalla en línea (MOBA) y deporte electrónico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X y para consolas digitales. En un principio los servidores estaban alojados en la empresa GOA y fue vendida a la empresa china Tencent Holdings Limited.\r\n\r\nEl juego fue diseñado para el sistema operativo Microsoft Windows y lanzaron una beta para OS X dejando al poco tiempo el proyecto de lado.1​ Esta beta ha sido mejorada por parte de usuarios del juego, haciendo posible jugar a una versión actualizada de League of Legends. ', '2021-03-06'),
(6, 3, 3, 'NBA 2K21', 'NBA 2K21 es la nueva entrega de la famosa saga superventas NBA 2K, una experiencia sin igual en videojuegos de deporte. con importantes mejoras en gráficos y jugabilidad, funciones online competitivas y para la comunidad y modos de juego profundos y variados, NBA 2K21 ofrece una inmersión única en todas las facetas del baloncesto NBA y su cultura. Este juego lo es todo. ', '2021-03-06'),
(7, 2, 3, 'Tenis World Tour', 'LAS MAYORES ESTRELLAS DEL TENIS\r\n• Métete en la piel de uno de los 30 mejores tenistas del mundo: Roger Federer, Angelique Kerber, Stan Wawrinka y muchas leyendas del tenis.\r\nMOVIMIENTOS REPRODUCIDOS A LA PERFECCIÓN\r\n• Las animaciones realistas, recreadas cuidadosamente en el juego mediante captura de movimientos, te ayudan a aprender todos los golpes del tenis moderno: cortados, liftados, globos, etc.\r\nTODAS LAS SUPERFICIES DE JUEGO\r\n• 18 tipos de pistas: cemento, tierra batida, hierba, sintética e incluso madera. Cada superficie afecta a las condiciones de juego.\r\nUN COMPLETO MODO CARRERA\r\n• Crea tu jugador y experimenta una carrera digna de un profesional: entrenamientos, torneos, gestión del equipo, compra de material, etc.\r\nUNA DIMENSIÓN TÁCTICA SIN IGUAL\r\n• Decide qué estrategia adoptar en cada partido y usa tus cartas de habilidad para derrotar a tus rivales.', '2021-03-06'),
(8, 2, 1, 'GTA IV Vice City', 'Recomendar un juego de la saga Grand Theft Auto es realmente fácil. Si somos indulgentes con el apartado visual, todos son títulos imprescindibles. Lo suficiente como para que ordenarlos de peor a mejor sea una tarea bastante delicada, aunque no imposible.\r\n\r\nHay muchas maneras de medir el éxito de la licencia estrella de Rockstar. Y es que la saga que combina de manera exquisita crímenes y conducción pasó de ser el ejemplo de manual de que no hay que juzgar un título por su aspecto a encabezar la vanguardia del entretenimiento. Una trayectoria meteórica que abarca 15 entregas si contamos los spin-off y expansiones.', '2021-03-07'),
(9, 8, 6, 'Empires: Dawn of the Modern World', '(Los albores del mundo moderno) es un videojuego de estrategia para Microsoft Windows basado en la historia en tiempo real desarrollado por Stainless Steel Studios y lanzado el 21 de octubre de 2003.1​ Considerado como una secuela no oficial de Empire Earth,2​ el juego consiste en que los jugadores recolecten recursos para construir un imperio, entrenen a las unidades militares, y conquisten las civilizaciones enemigas.3​\r\n\r\nBasado en una versión ligeramente comprimida de Empire Earth, Empires abarca cinco épocas, desde la Edad Media hasta la Segunda Guerra Mundial.4​ El juego cuenta con nueve civilizaciones:. Inglaterra, los francos, Corea y China son jugables a partir de la Edad Media hasta la Edad Imperial, Francia Estados Unidos, Unión Soviética, Alemania y el Reino Unido se pueden reproducir en las edades Primera Guerra Mundial y Segunda Guerra Mundial.5​ El juego atrajo una reacción de crítica positiva.6​\r\n\r\nEn 2009, Activision puso fin a su contrato con el servidor multijugador de GameSpy, y jugar en línea es ahora una actividad no oficial proporcionada por GameRanger. ', '2021-04-15'),
(10, 8, 6, 'Empire Earth', 'Empire Earth es un videojuego de estrategia en tiempo real de construcción de imperios desarrollado por Stainless Steel Studios publicado por Sierra On-Line en noviembre de 2001. Tuvo dos secuelas, Empire Earth II, publicada en abril de 2005, y Empire Earth III en noviembre de 2007. También tuvo una suerte de spin-off en el juego Empires: Dawn of the Modern World, que tenía los mismos desarrolladores y género. En principio, el videojuego es similar a Age of Empires, con la gran diferencia de que ofrece un abaníco de edades que van desde la prehistoria hasta edades del futuro.\r\n\r\nEmpire Earth presenta numerosas novedades, como héroes, diversas maravillas con funciones especiales, y la posibilidad de jugar desde la prehistoria hasta el futuro. ', '2021-04-15'),
(20, 1, 4, 'Super Mario Bros', 'es un videojuego de plataformas, diseñado por Shigeru Miyamoto, lanzado el 13 de septiembre de 1985 y producido por la compañía Nintendo, para la consola Nintendo Entertainment System (NES). El juego describe las aventuras de los hermanos Mario y Luigi, personajes que ya protagonizaron el arcade Mario Bros. de 1983. En esta ocasión ambos deben rescatar a la Princesa Peach del Reino Champiñón que fue secuestrada por el rey de los Koopas, Bowser. A través de ocho diferentes mundos, los jugadores pueden controlar a alguno de los dos hermanos y deben enfrentarse finalmente tras los niveles correspondientes de cada mundo a los monstruos de cada castillo para rescatar a la Princesa Peach.\r\n\r\nSuper Mario Bros. fue el juego que popularizó al personaje de Mario,4​ convirtiéndolo en el ícono principal de Nintendo, y uno de los personajes más reconocidos de los videojuegos, así como su hermano menor Luigi. Además, presentó por primera vez a la Princesa Peach Toadstool, Toad, Bowser, entre otros personajes. Este juego es considerado el primer videojuego de plataformas de desplazamiento lateral de Nintendo y se ha convertido en un hito debido a la trascendencia de su diseño y papel en la industria de los videojuegos. Su lanzamiento fue el primer gran récord de ventas posterior a la crisis de la industria de los videojuegos de 1983 (alcanzando más de 10 millones de cartuchos vendidos), por lo que popularizó, en cierta manera, a la consola NES. En 1999 fue reconocido como uno de los videojuegos más vendidos de todos los tiempos.5​ Shigeru Miyamoto su creador, relata la existencia de Super Mario Bros. debido a que cuando viajaba en un tren le gustaba mirar por la ventana, y se imaginaba que estaba allí saltando afuera.6​ Debido a la popularidad de Mario, se encuentra también en otros videojuegos como el original Donkey Kong y Super Smash Bros.\r\n\r\nTras su éxito comercial, tuvo una secuela directa, conocida en fuera de Japón como Super Mario Bros.: The Lost Levels, ya que en occidente se comercializó como la secuela directa una variación de otro juego en el que había participado Miyamoto, Yume Koujou Doki Doki Panic!, debido a que se consideró la versión lanzada en Japón como demasiado difícil. Tuvo también una variedad de versiones «alternas», como All Night Nippon Super Mario Bros., así como adaptaciones a arcade, películas y series de televisión.\r\n\r\nEl 13 de septiembre de 2010 se conmemoró el 25º aniversario del juego desde su salida para la Famicom en Japón, así como el 25° aniversario de la franquicia. En noviembre de 2010 la ciudad española de Zaragoza dedicó una avenida al famoso fontanero.7​ ', '2021-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `date_creation`) VALUES
(1, 'Juan', 'Medina', 'juan@gmail.com', '$2y$04$3QIXocHinnk7iVA1.m5HK.UbyfazE1Ip6dgXjY4/X8VM0o6ZZlYmu', '2021-02-28'),
(2, 'Natalia', 'Medina', 'natalia@gmail.com', '$2y$04$6Q4MtSiqrzexdJQJIWvVrudyKTL1HWtzmrhviZFckmwbRn0ekCTX2', '2021-02-28'),
(3, 'Carolina', 'Artal', 'carolina@gmail.com', '$2y$04$ZN5s73/sP6hdk5O6/R/fQ.l6QF5UR.F/RzFhQi5A583GrJn3vVziq', '2021-02-27'),
(4, 'Juana', 'Fernandez', 'juana@gmail.com', '$2y$04$4CF/sXt3bxjMqTPqiFXXmORNMRWoYDbGIkt34ZKlPVUcGLC4JG5Kq', '2021-03-06'),
(6, 'Esteban', 'Gutierrez', 'esteban@gmail.com', '$2y$04$7f14lhe5R3rXtZMrDaXV1.TUbgJreJfqyHPY7bGHG3leWqr4iTjIy', '2021-03-06'),
(7, 'Luis', 'Medina', 'luis@gmail.com', '$2y$04$Di9I5dj64XCq7tPCEPk26eRv9RSvcbqGtIun2Kd6vjul11YjO5ie.', '2021-04-12'),
(8, 'Francisco', 'Artal', 'francisco@gmail.com', '$2y$04$rTMMZrTmR26lRuUgOMy5B.VG/ZI1Nyav5H91KtZSnulcSpDSwwAju', '2021-04-12'),
(9, 'Maruja', 'Guerrero', 'maruja@gmail.com', '$2y$04$80Vg7GHdeDqtYMdxMA9Cs.UNbbl6CwuYH7kA/vaq4jsyuVlnxqWc6', '2021-04-12'),
(13, 'Javier', 'Ambrona', 'javier@gmail.com', '$2y$04$Jg/5YmNgHe33DRyD5U.CAejZowVDXo9pOglcvBjVPhYpMVj4duO3G', '2021-04-13'),
(21, 'Pilar', 'Caudevilla', 'pilar@gmail.com', '$2y$04$aHi2O6yBD1JpmyqifEj5..6d3kCG1v6Xx9CR/1cZ92IsxjMeitvHu', '2021-04-13'),
(22, 'Virginia', 'Artal', 'vir@gmail.com', '$2y$04$/0Y0xOEWQA5LDufWwwt8PuMPBLk56oGte0c5scZSWvbRbgfUxkox.', '2021-04-13'),
(23, 'Alberto', 'Pellicena', 'alberto@gmail.com', '$2y$04$5LEDx4iP/ZiC92oGRKAfKumfFJ.lw7DvhZO3QrXzZ5vmSMrGN0T8a', '2021-04-13'),
(24, 'Antonio', 'Garcia', 'antonio@gmail.com', '$2y$04$5Y9rkSlQN7K0gjQVQ5e85u/HSyDwPqYG1Uh/k6/xB4E8lqziY3eBe', '2021-04-13'),
(25, 'Filoberto', 'Perez', 'filoberto@gmail.com', '$2y$04$xmRVd1KosL2JlEm3Jxw1muWYsycRO6dtcIdM0C7LFHOIWwZhruYWC', '2021-04-13'),
(26, 'Eustaquio', 'Fernandez', 'eustaquio@gmail.com', '$2y$04$mc1EHYvWaBiGvP/jX.M1L.Yu8uz5WkRBY0B/c18jxsdMTzz2OuWtO', '2021-04-13'),
(27, 'Roberto', 'Antunez', 'roberto@gmail.com', '$2y$04$eTbt6CgSxjDTSwkZA8ghE.ZC.5fAkWBO.yn/mzbUtLJ/paXqiKS7G', '2021-04-13'),
(28, 'Lorena', 'Peña', 'lorena@gmail.com', '$2y$04$9daA4ZgAKrgmon8zy7ZnqOGWW/7FiyWUfaMMjJWA4GN0dFawVAVRO', '2021-04-13'),
(29, 'Pablo', 'Martinez', 'pablo@gmail.com', '$2y$04$5Zoisg0FyPjRQHwgEXYCkO2lvh038MtJc2y1o9GXOs7fUtH/1jn/S', '2021-04-13'),
(30, 'Esperanza', 'Torrres', 'esperanza@gmail.com', '$2y$04$oJGbjf2RilKAOUsMkxJ3bOTrHdvoGbZj.qPHV0qIauIS5LzvXD1/6', '2021-04-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user` (`user_id`),
  ADD KEY `fk_post_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_post_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
