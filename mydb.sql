SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(1) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(4, 'Hong', '123', 'xpesz2002@gmail.com'),
(5, 'Gop', '123', 'Eiei@gmail.com'),
(6, 'Oakkie', '123456', 'kkkk@gmail.com'),
(7, 'Fifa', '123456', '123456@gmail.com'),
(8, 'Pat', '123456789', 'pat@gmail.com'),
(9, 'Kendo', '1234', 'Heheh@gmail.com');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
