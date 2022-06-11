-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 03.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_213040014_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `judul_movie` varchar(100) NOT NULL,
  `sutradara_movie` varchar(100) NOT NULL,
  `aktor_movie` varchar(200) NOT NULL,
  `link_movie` varchar(255) NOT NULL,
  `tahun_rilis_movie` int(4) NOT NULL,
  `studio_movie` varchar(25) NOT NULL,
  `gambar_movie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie`
--

INSERT INTO `movie` (`id_movie`, `judul_movie`, `sutradara_movie`, `aktor_movie`, `link_movie`, `tahun_rilis_movie`, `studio_movie`, `gambar_movie`) VALUES
(1, 'The Shawshank Redemption', 'Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton', 'https://www.youtube.com/watch?v=PLl99DlL6b4', 1994, 'Warner Bros', 'shawsank.jpg'),
(2, 'The Godfather', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Can', 'https://www.youtube.com/watch?v=sY1S34973zA', 1972, 'Paramount Pictures', 'godfather.jpg'),
(3, 'The Dark Knight', 'Christoper Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart', 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 2008, 'Warner Bros', 'dark_knight.jpg'),
(4, 'The Godfather: Part II', 'Francis Ford Coppola', 'Al Pacino, Robert De Niro, Robert Duvall', 'https://www.youtube.com/watch?v=9O1Iy9od7-A', 1974, 'Paramount Pictures', 'godfather_2.jpg'),
(5, 'The Lord of the Rings: The Return of the King', 'Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen', 'https://www.youtube.com/watch?v=r5X-hFf6Bwo', 2003, 'New Line Cinema', 'lord_rings_3.jpg'),
(7, 'The Lord of the Rings: The Two Towers', 'Peter Jackson', 'Elijah Wood, Ian McKellen, Viggo Mortensen', 'https://youtu.be/LbfMDwc4azU', 2002, 'New Line Cinema', 'lord_rings_2.jpg'),
(8, 'Forrest Gump', 'Robert Zemeckis', 'Tom Hanks, Robin Wright, Gary Sinise', 'https://youtu.be/bLvqoHBptjg', 1994, 'Paramount Pictures', 'forrest_gump.jpg'),
(9, 'Inception', 'Christoper Nolan', 'Leonardo di Caprio, Joseph Gordon-Levitt, Elliot Page', 'https://youtu.be/YoHD9XEInc0', 2010, 'Warner Bros', 'inception.jpg'),
(10, 'Interstellar', 'Christoper Nolan', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain', 'https://youtu.be/zSWdZVtXT7E', 2014, 'Warner Bros', 'interstellar.jpg'),
(17, 'The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 'Elijah Wood, Ian McKellen, Orlando Bloom', 'https://youtu.be/V75dMMIW2B4', 2001, 'New Line Cinema', 'lord_rings_1.jpg'),
(19, 'Avatar', 'James Cameron', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', 'https://www.youtube.com/watch?v=5PSNL1qE6VY', 2009, 'Twentieth Century Fox', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie_series_terbaik`
--

CREATE TABLE `movie_series_terbaik` (
  `id_movie` int(11) DEFAULT NULL,
  `id_series` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie_series_terbaik`
--

INSERT INTO `movie_series_terbaik` (`id_movie`, `id_series`) VALUES
(NULL, NULL),
(NULL, NULL),
(NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `series`
--

CREATE TABLE `series` (
  `id_series` int(11) NOT NULL,
  `judul_series` varchar(100) NOT NULL,
  `sutradara_series` varchar(100) NOT NULL,
  `aktor_series` varchar(200) NOT NULL,
  `link_series` varchar(255) NOT NULL,
  `tahun_rilis_series` int(4) NOT NULL,
  `studio_series` varchar(50) NOT NULL,
  `gambar_series` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `series`
--

INSERT INTO `series` (`id_series`, `judul_series`, `sutradara_series`, `aktor_series`, `link_series`, `tahun_rilis_series`, `studio_series`, `gambar_series`) VALUES
(1, 'Planet Earth II', 'Emma Brennand', 'David Attenborough, Max Hug Williams, Gordon Buchanan', 'https://youtu.be/c8aFcHFu8QM', 2016, 'BBC Natural History Unit', 'planet_earth_2.jpg'),
(2, 'Breaking Bad', 'Vince Gilligan', 'Bryan Cranston, Aaron Paul, Anna Gun', 'https://youtu.be/HhesaQXLuRY', 2008, 'High Bridge Productions', 'breaking_bad.jpg'),
(3, 'Planet Earth', 'Alastair Fothergill, Keith Scholey', 'Sigourney Weaver, David Attenborough, Nikolay Drozdov', 'https://youtu.be/I8Az_IIgw4U', 2006, 'BBC', 'planet_earth_1.jpg'),
(4, 'Band of Brothers', 'Phil Alden Robinson, Richard Loncraine, Mikael Salomon, etc.', 'Scott Grimes, Damian Lewis, Ron Livingston', 'https://youtu.be/aH06LWZs-Ys', 2001, 'DreamWorks', 'band_of_brothers.jpg'),
(5, 'Chernobyl', 'Craig Mazin', 'Jessie Buckley, Jared Haris, Stellan Skarsgard', 'https://youtu.be/s9APLXM9Ei8', 2019, 'HBO', 'chernobyl.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ghifarullah19', '$2y$10$zJXe2j9IOQzRpM17r0yN6OR9dPbvgfzRVwXbgFZc9QSzUjVHUaCcG'),
(2, 'admin', '$2y$10$uBgAXRnEdUq0AGc2LprUReVRdLdvKdhHV2i8Ph1FRkwKJ72dsjYJG'),
(3, 'admin_second', '$2y$10$k5dtebtXBRJVNUHSrfQMIOp09LNJH7Q.FXiemS/JHWvawI/jDzY3u'),
(4, 'admin_third', '$2y$10$2L53TYPmrklBmiqbpoe9p.aeS7Bq3LKFeRjtenQWrgc2nWJdodPi.'),
(5, 'admin_fourth', '$2y$10$IrRdTS/f2dZkpAAZfo5al.3IvBpjObkKjKeWRxnIRFrwD8gfHzcpq'),
(6, 'admin_fifth', '$2y$10$zeqhpH.Oo2ZQn7aEmYnikOkSM2/NjDdhdbLitTurWEDpa./rO/Ayu'),
(7, 'admin_sixth', '$2y$10$l2woY4./WdL583lIcokXGuDzLPntwbppmszRxJETisJ431gjwHC4K'),
(8, 'admin_seventh', '$2y$10$f1kdYzD8JoBg39BVGFz6TeZyvbc.E4C6qhgumqUdfGCI8g4xmNIPq'),
(9, 'admin_eigthth', '$2y$10$8POLVpSyp8KtaOLeT55uFuvM.T5RTk1M9.4HhKTk6x3qofovrHhHC'),
(10, 'admin_ninth', '$2y$10$ZeeCM0P63r/FoVyIfg3cy.WfGZsFn/ZGLmibjmuXpNFqm62CU/2fW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indeks untuk tabel `movie_series_terbaik`
--
ALTER TABLE `movie_series_terbaik`
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_series` (`id_series`);

--
-- Indeks untuk tabel `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_series`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `series`
--
ALTER TABLE `series`
  MODIFY `id_series` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `movie_series_terbaik`
--
ALTER TABLE `movie_series_terbaik`
  ADD CONSTRAINT `movie_series_terbaik_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`),
  ADD CONSTRAINT `movie_series_terbaik_ibfk_2` FOREIGN KEY (`id_series`) REFERENCES `series` (`id_series`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
