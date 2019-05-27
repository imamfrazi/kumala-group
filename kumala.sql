-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 27 Bulan Mei 2019 pada 15.25
-- Versi server: 5.7.23
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kumala`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `automotifs`
--

CREATE TABLE `automotifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brocure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(13,2) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `automotifs`
--

INSERT INTO `automotifs` (`id`, `merek`, `nama`, `name`, `brocure`, `deskripsi`, `desc`, `quantity`, `price`, `gambar`, `gambar2`, `gambar3`, `created_at`, `updated_at`) VALUES
(1, 'masda', 'Mazda CX-5', 'Mazda CX-5', '1558883789.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 5, 150000000.00, '1558883789.png', '1558883790.png', '1558883790.png', '2019-05-26 07:16:30', '2019-05-26 07:18:48'),
(3, 'wuling', 'Wuling 1', 'Wuling 1', '1558884056.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 3, 100000000.00, '1558884056.png', '1558884056.png', '1558884056.png', '2019-05-26 07:20:56', '2019-05-26 07:20:56'),
(4, 'honda', 'Honda 1', 'Honda 1', '1558884071.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 3, 100000000.00, '1558884071.png', '1558884072.png', '1558884072.png', '2019-05-26 07:21:12', '2019-05-26 07:21:12'),
(5, 'mercedes', 'Mercy 1', 'Mercy 1', '1558884086.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 3, 100000000.00, '1558884086.png', '1558884086.png', '1558884086.png', '2019-05-26 07:21:26', '2019-05-26 07:21:26'),
(6, 'hyno', 'Hino 1', 'Hino 1', '1558884094.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi velit soluta pariatur ratione porro voluptatem nihil maiores iusto, perspiciatis, nulla, qui dicta quasi cumque expedita? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim omnis provident porro assumenda ex facere, nulla dicta magnam quam id atque. Exercitationem, totam dolore harum suscipit, consequatur veniam iste iure corporis quaerat tempora in libero delectus hic? Distinctio cupiditate obcaecati quidem doloremque harum necessitatibus quibusdam aliquam! Eius, error fuga?', 3, 100000000.00, '1558884094.png', '1558884094.png', '1558884094.png', '2019-05-26 07:21:34', '2019-05-26 07:21:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `type`, `judul`, `heading`, `deskripsi`, `desc`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'berita', 'Mazda A3 Baru', 'New Mazda A3', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.', '1558883320.jpeg', '2019-05-26 07:08:40', '2019-05-26 07:08:40'),
(2, 'promo', 'Mazda A3 Baru', 'New Mazda A3', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.', '1558883339.jpeg', '2019-05-26 07:08:59', '2019-05-26 07:08:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comes`
--

CREATE TABLE `comes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karirs`
--

CREATE TABLE `karirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karirs`
--

INSERT INTO `karirs` (`id`, `position`, `jumlah`, `deskripsi`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Sales', 5, 'Kami Membutuhkan Sales', 'Kami Membutuhkan Sales', '2019-05-26 19:18:34', '2019-05-26 19:18:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_03_10_025951_create_sliders_table', 1),
(9, '2019_03_15_125520_create_partners_table', 1),
(10, '2019_05_25_160706_create_beritas_table', 1),
(11, '2019_05_25_175723_create_karirs_table', 1),
(12, '2019_05_25_183307_create_test_drives_table', 1),
(13, '2019_05_26_000234_create_comes_table', 1),
(14, '2019_05_26_005950_create_pelamars_table', 1),
(15, '2019_05_26_021849_create_automotifs_table', 1),
(16, '2019_05_26_031818_create_trades_table', 1),
(17, '2019_05_26_034929_create_minings_table', 1),
(18, '2019_05_26_040837_create_properties_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minings`
--

CREATE TABLE `minings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(9,2) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'lQW7EoGU1nIKtpadtJSJEqeWoN472iJLstlCLEqw', 'http://localhost', 1, 0, 0, '2019-05-26 06:57:52', '2019-05-26 06:57:52'),
(2, NULL, 'Laravel Password Grant Client', 'KyqIdfujrJ1CtG7JxYAAAASpTZNEfadUsAfxom3P', 'http://localhost', 0, 1, 0, '2019-05-26 06:57:52', '2019-05-26 06:57:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-05-26 06:57:52', '2019-05-26 06:57:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'slider.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(2, '1558883413.jpeg', '2019-05-26 07:10:13', '2019-05-26 07:10:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamars`
--

CREATE TABLE `pelamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelamar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(9,2) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'slider.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Modern Design interior', 'You\'ll be surprised to see the Final Results of your Creation &amp; would crave for more.', '1558883185.jpeg', '2019-05-26 07:06:25', '2019-05-26 07:06:25'),
(3, 'New Mercedes-Benz interior', 'Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.', '1558883242.jpeg', '2019-05-26 07:07:22', '2019-05-26 07:07:22'),
(4, 'All New Honda Modulo', 'qwettyyCreate just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.', '1558905104.jpeg', '2019-05-26 11:44:24', '2019-05-26 13:12:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_drives`
--

CREATE TABLE `test_drives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(9,2) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `bio` mediumtext COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'profile.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `bio`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imam Fachrul Razi', 'admin1@gmail.com', '$2y$10$ImXICtQQcaXfJyasoePlm.MYD2a5I817X75hqe2nd7AAAq21tEjoy', 'admin', NULL, 'profile.png', NULL, '2019-05-26 06:58:55', '2019-05-26 06:58:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `automotifs`
--
ALTER TABLE `automotifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comes`
--
ALTER TABLE `comes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karirs`
--
ALTER TABLE `karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minings`
--
ALTER TABLE `minings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_drives`
--
ALTER TABLE `test_drives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `automotifs`
--
ALTER TABLE `automotifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comes`
--
ALTER TABLE `comes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karirs`
--
ALTER TABLE `karirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `minings`
--
ALTER TABLE `minings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `test_drives`
--
ALTER TABLE `test_drives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
