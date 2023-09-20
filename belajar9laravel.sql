-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2023 pada 05.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar9laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `ttl_mhs` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telpon_mhs` varchar(255) NOT NULL,
  `email_mhs` varchar(255) NOT NULL,
  `kota_mhs` varchar(255) NOT NULL,
  `agama_mhs` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`created_at`, `updated_at`, `nim_mhs`, `nama_mhs`, `ttl_mhs`, `alamat`, `telpon_mhs`, `email_mhs`, `kota_mhs`, `agama_mhs`, `gambar`) VALUES
('2023-05-02 00:20:07', '2023-05-23 04:49:30', 221110222, 'Apang', 'Bandung 12 12 2003', 'Bandung', '082115644877', 'apang@gmail.com', 'Bandung', 'Islam', ''),
('2023-05-02 00:20:07', '2023-05-23 04:24:54', 221110234, 'Anugrah', 'Bandung 16 10 2004', 'Surabaya', '082144623877', 'anugrah@gmail.com', 'Cimahi', 'Islam', ''),
('2023-05-02 00:20:07', '2023-05-23 04:50:42', 221110329, 'Giri', 'Bandung 16 11 2003', 'Jepang', '082115623877', 'giri@gmail.com', 'Cimahi', 'Islam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `produk_tv` varchar(255) NOT NULL,
  `asal_tv` varchar(255) NOT NULL,
  `harga_tv` varchar(255) NOT NULL,
  `ukuran_tv` varchar(255) NOT NULL,
  `kualitas_tv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`created_at`, `updated_at`, `produk_tv`, `asal_tv`, `harga_tv`, `ukuran_tv`, `kualitas_tv`) VALUES
('2023-05-15 04:32:42', NULL, 'Aqua Japan', 'Jepang', '1,9 Juta', '32 Inci', 'HD'),
('2023-05-15 04:32:42', NULL, 'Coocaa', 'Cina', '1,5 Juta', '44 Inci', 'HD'),
('2023-05-15 04:32:42', '2023-05-23 20:01:19', 'Samsung', 'Korea Selatan', '2,5 Juta', '32 Inci', 'HD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_02_071348_create_mahasiswa_table', 1),
(6, '2023_05_02_114607_add_gambar_to-mahasiswa_table', 2),
(7, '2023_05_14_025952_create_stasiun_table', 3),
(8, '2023_05_14_064238_create_tv_table', 4),
(9, '2023_05_14_074841_create_tugas_table', 5),
(10, '2023_05_15_110050_create_televisi_table', 6),
(11, '2023_05_15_112859_create_merk_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stasiun`
--

CREATE TABLE `stasiun` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Kanal` varchar(50) NOT NULL,
  `lembaga` varchar(50) NOT NULL,
  `Udara` varchar(50) NOT NULL,
  `Wilayah` text NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stasiun`
--

INSERT INTO `stasiun` (`created_at`, `updated_at`, `Kanal`, `lembaga`, `Udara`, `Wilayah`, `Alamat`) VALUES
('2023-05-13 23:57:19', NULL, '23', 'LPP Televisi RI', 'TVRI', 'Kabupaten Demak', 'Pucanggading Demak'),
('2023-05-13 23:57:19', NULL, '25', 'PT. Cakrawala', 'ANTV', 'Kota Semarang', 'Bukit Merpati Semarang'),
('2023-05-13 23:57:19', NULL, '27', 'PT.Indosiar', 'INDOSIAR', 'Kota Semarang', 'Bukit Puncak Semarang'),
('2023-05-14 00:32:35', NULL, '23', 'LPP.Televisi RI', 'TVRI', 'Kabupaten Demak', 'Pucanggading Demak'),
('2023-05-14 00:32:35', NULL, '25', 'PT. Cakrawala', 'ANTV', 'Kota Semarang', 'Bukit Merpati Semarang'),
('2023-05-14 00:32:35', NULL, '27', 'PT.Indosiar', 'INDOSIAR', 'Kota Semarang', 'Bukit Puncak Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `televisi`
--

CREATE TABLE `televisi` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `produk_tv` varchar(255) NOT NULL,
  `asal_tv` varchar(255) NOT NULL,
  `harga_tv` varchar(255) NOT NULL,
  `ukuran layar_tv` varchar(255) NOT NULL,
  `kualitas gambar_tv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `televisi`
--

INSERT INTO `televisi` (`created_at`, `updated_at`, `produk_tv`, `asal_tv`, `harga_tv`, `ukuran layar_tv`, `kualitas gambar_tv`) VALUES
('2023-05-15 04:09:48', NULL, 'Aqua Japan', 'Jepang', '1,9 Juta', '32 Inci', 'HD'),
('2023-05-15 04:09:48', NULL, 'Coocaa', 'Cina', '1,5 Juta', '44 Inci', 'HD'),
('2023-05-15 04:09:48', NULL, 'Samsung', 'Korea Selatan', '2,4 Juta', '32 Inci', 'HD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kanal_tv` varchar(255) NOT NULL,
  `lembaga_tv` varchar(255) NOT NULL,
  `udara_tv` varchar(255) NOT NULL,
  `wilayah_tv` varchar(255) NOT NULL,
  `alamat_tv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`created_at`, `updated_at`, `kanal_tv`, `lembaga_tv`, `udara_tv`, `wilayah_tv`, `alamat_tv`) VALUES
('2023-05-14 01:01:26', NULL, '23', 'LPP. Televisi RI', 'TVRI', 'Kabupaten Demak', 'Pucanggading'),
('2023-05-14 01:03:40', NULL, '23', 'LPP. Televisi RI', 'TVRI', 'Kabupaten Demak', 'Pucanggading'),
('2023-05-14 01:03:40', NULL, '27', 'PT. Indosiar', 'INDOSIAR', 'Kota Semarang', 'Bukit Puncak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tv`
--

CREATE TABLE `tv` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kanal` varchar(255) NOT NULL,
  `lembaga` varchar(255) NOT NULL,
  `udara` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'giri', 'girisejatinugraha@16.com', NULL, '$2y$10$LLHInVC2fLHbar1jzlEwoOYC4JmgE6Kp34Bu3Ti4p3EK.EFMV1Mwe', NULL, NULL, NULL),
(2, 'Giri', 'giri@gmail.com', NULL, '$2y$10$MD/iSOZ7oPhYtfiAj7YJW.j/2VXcrZfNmgU/Te3kP6p/3Tyksgz.S', NULL, '2023-05-06 23:30:47', '2023-05-06 23:30:47'),
(3, 'Apang', 'apang@gmail.com', NULL, '$2y$10$zBflHiieah5hfTBw7XKQ7uBR9Sp.UQ6UmoQZxCY0fL99LeVHUnkXe', NULL, '2023-05-06 23:33:31', '2023-05-06 23:33:31'),
(4, 'sejati', 'sejati@gmail.com', NULL, '$2y$10$dtIlKnZoHs7AfoIA8JQl4eg8EPRdG3xbUt2mGTSm0dV74yrexquWS', NULL, '2023-05-07 00:29:05', '2023-05-07 00:29:05'),
(5, 'rii', 'rii@gmail.com', NULL, '$2y$10$3tVgLAvGwHYiZEX7hNxde.ZSlq.lB.VQZH1ne3r9rtcUiWXAxxDde', NULL, '2023-05-12 17:45:33', '2023-05-12 17:45:33'),
(6, 'hhh', 'hhh@gmail.com', NULL, '$2y$10$iKc74CU6SHeM5HF01sTRmOXMvOU4jDRy6OgAQanpZKuYQPwnr1EZu', NULL, '2023-05-12 17:46:41', '2023-05-12 17:46:41'),
(7, 'Giri', 'iri@gmail.com', NULL, '$2y$10$rX6u1KU0Ywbj6DrEud.AE.vUkYcwt2g6oE5fsyR/KXIxZ0C8I0DPS', NULL, '2023-05-12 18:32:33', '2023-05-12 18:32:33'),
(8, 'Giri', 'ri@gmail.com', NULL, '$2y$10$5uhLVNJUotFVUU.5jkGybO40Tkq6d/pVyqi.v8Qk1LXGEq3qmMvCe', NULL, '2023-05-13 18:26:59', '2023-05-13 18:26:59'),
(9, 'Giri', 'sejatigiri@gmail.com', NULL, '$2y$10$b5W3XELJZHrMrqwkHFLvu.PdPnq1Hk2.Vusg9XmUphZB0.O0Di35K', NULL, '2023-05-13 21:40:25', '2023-05-13 21:40:25'),
(10, 'Giri', 'giri16@gmail.com', NULL, '$2y$10$Z66TKcaUpb.LdAf2rvOHve5cMqwbGzOv.pFNrHRFCErZoaR5DZtJe', NULL, '2023-05-23 18:16:50', '2023-05-23 18:16:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `mahasiswa_nim_mhs_unique` (`nim_mhs`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
