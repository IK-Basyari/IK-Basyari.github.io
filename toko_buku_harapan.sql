-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2021 pada 13.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku_harapan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `synopsis`, `cover`) VALUES
(63, 'Rimba', '124435553', '<p>Apaan Aja Jadi lah</p>\r\n', 'Tipografi.jpg'),
(70, 'Sontoloyo', '988765712', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Modi&nbsp;reprehenderit&nbsp;eveniet&nbsp;atque&nbsp;soluta&nbsp;perferendis&nbsp;est&nbsp;corrupti&nbsp;provident&nbsp;eum,&nbsp;quas&nbsp;rerum&nbsp;earum&nbsp;voluptatibus&nbsp;voluptatem&nbsp;animi?&nbsp;Nisi,&nbsp;iusto&nbsp;harum&nbsp;beatae&nbsp;ipsum&nbsp;placeat&nbsp;quia&nbsp;natus,&nbsp;deleniti&nbsp;velit&nbsp;magni&nbsp;architecto&nbsp;facere&nbsp;in&nbsp;corrupti,&nbsp;rerum&nbsp;est.&nbsp;Atque&nbsp;vel&nbsp;est&nbsp;aspernatur&nbsp;consectetur&nbsp;tempore&nbsp;dicta&nbsp;nisi&nbsp;in&nbsp;nemo&nbsp;fugit&nbsp;ut&nbsp;similique&nbsp;modi&nbsp;at&nbsp;numquam&nbsp;sint&nbsp;commodi&nbsp;natus&nbsp;fugiat&nbsp;laudantium&nbsp;praesentium,&nbsp;officiis&nbsp;aliquid&nbsp;provident&nbsp;voluptatibus&nbsp;quis&nbsp;dolorem&nbsp;labore?&nbsp;Animi&nbsp;commodi&nbsp;est&nbsp;qui,&nbsp;vero&nbsp;accusantium&nbsp;in&nbsp;repellat&nbsp;nihil&nbsp;autem&nbsp;asperiores&nbsp;iste&nbsp;mollitia&nbsp;expedita&nbsp;porro&nbsp;laudantium&nbsp;quam&nbsp;consectetur&nbsp;quidem&nbsp;alias&nbsp;officia&nbsp;possimus&nbsp;quasi&nbsp;et&nbsp;ducimus&nbsp;quo.&nbsp;Tempora&nbsp;ea&nbsp;vel&nbsp;consequuntur?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n', 'IMG_1828.JPG'),
(71, 'Sihoo', '2147483647', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Modi&nbsp;reprehenderit&nbsp;eveniet&nbsp;atque&nbsp;soluta&nbsp;perferendis&nbsp;est&nbsp;corrupti&nbsp;provident&nbsp;eum,&nbsp;quas&nbsp;rerum&nbsp;earum&nbsp;voluptatibus&nbsp;voluptatem&nbsp;animi?&nbsp;Nisi,&nbsp;iusto&nbsp;harum&nbsp;beatae&nbsp;ipsum&nbsp;placeat&nbsp;quia&nbsp;natus,&nbsp;deleniti&nbsp;velit&nbsp;magni&nbsp;architecto&nbsp;facere&nbsp;in&nbsp;corrupti,&nbsp;rerum&nbsp;est.&nbsp;Atque&nbsp;vel&nbsp;est&nbsp;aspernatur&nbsp;consectetur&nbsp;tempore&nbsp;dicta&nbsp;nisi&nbsp;in&nbsp;nemo&nbsp;fugit&nbsp;ut&nbsp;similique&nbsp;modi&nbsp;at&nbsp;numquam&nbsp;sint&nbsp;commodi&nbsp;natus&nbsp;fugiat&nbsp;laudantium&nbsp;praesentium,&nbsp;officiis&nbsp;aliquid&nbsp;provident&nbsp;voluptatibus&nbsp;quis&nbsp;dolorem&nbsp;labore?&nbsp;Animi&nbsp;commodi&nbsp;est&nbsp;qui,&nbsp;vero&nbsp;accusantium&nbsp;in&nbsp;repellat&nbsp;nihil&nbsp;autem&nbsp;asperiores&nbsp;iste&nbsp;mollitia&nbsp;expedita&nbsp;porro&nbsp;laudantium&nbsp;quam&nbsp;consectetur&nbsp;quidem&nbsp;alias&nbsp;officia&nbsp;possimus&nbsp;quasi&nbsp;et&nbsp;ducimus&nbsp;quo.&nbsp;Tempora&nbsp;ea&nbsp;vel&nbsp;consequuntur?</p>\r\n', 'IMG_1703.JPG'),
(72, 'Ananta Series', '2147483647', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Modi&nbsp;reprehenderit&nbsp;eveniet&nbsp;atque&nbsp;soluta&nbsp;perferendis&nbsp;est&nbsp;corrupti&nbsp;provident&nbsp;eum,&nbsp;quas&nbsp;rerum&nbsp;earum&nbsp;voluptatibus&nbsp;voluptatem&nbsp;animi?&nbsp;Nisi,&nbsp;iusto&nbsp;harum&nbsp;beatae&nbsp;ipsum&nbsp;placeat&nbsp;quia&nbsp;natus,&nbsp;deleniti&nbsp;velit&nbsp;magni&nbsp;architecto&nbsp;facere&nbsp;in&nbsp;corrupti,&nbsp;rerum&nbsp;est.&nbsp;Atque&nbsp;vel&nbsp;est&nbsp;aspernatur&nbsp;consectetur&nbsp;tempore&nbsp;dicta&nbsp;nisi&nbsp;in&nbsp;nemo&nbsp;fugit&nbsp;ut&nbsp;similique&nbsp;modi&nbsp;at&nbsp;numquam&nbsp;sint&nbsp;commodi&nbsp;natus&nbsp;fugiat&nbsp;laudantium&nbsp;praesentium,&nbsp;officiis&nbsp;aliquid&nbsp;provident&nbsp;voluptatibus&nbsp;quis&nbsp;dolorem&nbsp;labore?&nbsp;Animi&nbsp;commodi&nbsp;est&nbsp;qui,&nbsp;vero&nbsp;accusantium&nbsp;in&nbsp;repellat&nbsp;nihil&nbsp;autem&nbsp;asperiores&nbsp;iste&nbsp;mollitia&nbsp;expedita&nbsp;porro&nbsp;laudantium&nbsp;quam&nbsp;consectetur&nbsp;quidem&nbsp;alias&nbsp;officia&nbsp;possimus&nbsp;quasi&nbsp;et&nbsp;ducimus&nbsp;quo.&nbsp;Tempora&nbsp;ea&nbsp;vel&nbsp;consequuntur?</p>\r\n', 'IMG_1764.JPG'),
(73, 'King Books', '2147483647', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Modi&nbsp;reprehenderit&nbsp;eveniet&nbsp;atque&nbsp;soluta&nbsp;perferendis&nbsp;est&nbsp;corrupti&nbsp;provident&nbsp;eum,&nbsp;quas&nbsp;rerum&nbsp;earum&nbsp;voluptatibus&nbsp;voluptatem&nbsp;animi?&nbsp;Nisi,&nbsp;iusto&nbsp;harum&nbsp;beatae&nbsp;ipsum&nbsp;placeat&nbsp;quia&nbsp;natus,&nbsp;deleniti&nbsp;velit&nbsp;magni&nbsp;architecto&nbsp;facere&nbsp;in&nbsp;corrupti,&nbsp;rerum&nbsp;est.&nbsp;Atque&nbsp;vel&nbsp;est&nbsp;aspernatur&nbsp;consectetur&nbsp;tempore&nbsp;dicta&nbsp;nisi&nbsp;in&nbsp;nemo&nbsp;fugit&nbsp;ut&nbsp;similique&nbsp;modi&nbsp;at&nbsp;numquam&nbsp;sint&nbsp;commodi&nbsp;natus&nbsp;fugiat&nbsp;laudantium&nbsp;praesentium,&nbsp;officiis&nbsp;aliquid&nbsp;provident&nbsp;voluptatibus&nbsp;quis&nbsp;dolorem&nbsp;labore?&nbsp;Animi&nbsp;commodi&nbsp;est&nbsp;qui,&nbsp;vero&nbsp;accusantium&nbsp;in&nbsp;repellat&nbsp;nihil&nbsp;autem&nbsp;asperiores&nbsp;iste&nbsp;mollitia&nbsp;expedita&nbsp;porro&nbsp;laudantium&nbsp;quam&nbsp;consectetur&nbsp;quidem&nbsp;alias&nbsp;officia&nbsp;possimus&nbsp;quasi&nbsp;et&nbsp;ducimus&nbsp;quo.&nbsp;Tempora&nbsp;ea&nbsp;vel&nbsp;consequuntur?</p>\r\n', 'IMG_1796.JPG'),
(74, 'Cadar', '6635358877', '<p>hfssjjsuyryryrygsgsgsrrfafafvhshsllllllllllllllllllllllllllllllllag</p>\r\n', 'IMG_1702.JPG'),
(75, 'Aku Sopo', '65656', '<p>hfgdhgfhg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n', 'IMG_1693.JPG'),
(76, 'Liverpoll', '6565677566344', '<p>hfgdhgfhg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n', 'IMG_1693.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `publisher`
--

INSERT INTO `publisher` (`id`, `company_name`, `address`, `phone`) VALUES
(42, 'PT. Kartika Abadi', 'Jl. Raya Error Id', '2147483647'),
(58, 'PT. Smart Tbk', 'Jl. Indo Pasific No 5', '086553441332'),
(64, 'PT. Indo Dana', 'Jl. Raya Endorse Roma', '0813456787665'),
(66, 'PT. Adikarya Group', 'Jl. Raya Endorse Roma', '088812663773'),
(67, 'PT. Indo Karya Malang', 'Jl. Raya Endorse Roma', '08234155624'),
(68, 'PT. Kartika Grilia Jaya ', 'Jl. Raya Indo Pasific', '081234576652'),
(69, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'irvan', '21ad0bd836b90d08f4cf640b4c298e7c'),
(5, 'bacen', '202cb962ac59075b964b07152d234b70'),
(8, 'Chandra', '5462929db201a15aaf6d2d3400b66773'),
(9, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `writers`
--

CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `writers`
--

INSERT INTO `writers` (`id`, `name`, `phone_number`, `address`, `email`, `photo`) VALUES
(64, 'Irvani khoiril Basyari', '2147483647', 'Jl. Raya Ahmad Yani', 'bacenmlg@gmail.com', 'IMG_1793.JPG'),
(67, 'Bacen dot komset', '0819763518822', 'Jl. Raya Indo Pasific', 'usahaonline@gmail.com', 'IMG_1700.JPG'),
(70, 'Maichel Oman Damir', '2147483647', 'Jl. Raya Ahmad Yani', 'bacenmlg@gmail.com', 'IMG_1716.JPG'),
(71, 'Bacen Edukasi', '2147483647', 'Jl. Raya Ahmad Dahlan', 'bb@gmail.com', 'IMG_1692.JPG'),
(72, 'Ahmad Yudha ', '2147483647', 'Jl. Raya Ahmad Yani', 'err@dkdfd', 'IMG_1708.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
