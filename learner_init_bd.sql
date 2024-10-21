-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2020 г., 07:47
-- Версия сервера: 5.5.67-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `learner`
--

-- --------------------------------------------------------

--
-- Структура таблицы `faces`
--

CREATE TABLE `faces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `default` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_03_02_063855_results', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2020_03_02_063050_pantomime', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `pantomime`
--

CREATE TABLE `pantomime` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meaning` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pantomime`
--

INSERT INTO `pantomime` (`id`, `url`, `meaning`, `created_at`, `updated_at`) VALUES
(5, 'img/BtWhFT8spE7Mca2DLd4Wt2X29O1ffbN95fiAhKYd.gif', 'Холодильник', '2020-12-10 01:12:33', '2020-12-10 01:12:33'),
(6, 'img/nhnNAjWFKv9CoMaiPzFuc2u3ofNhYB7WA6KtvYm8.gif', 'Кот Брат', '2020-12-10 01:12:42', '2020-12-10 01:12:42'),
(7, 'img/VJ0xugwtcaguGzEugcZGq6F48UyDUfxS3VyDxP58.gif', 'Полка', '2020-12-10 01:27:44', '2020-12-10 01:27:44'),
(8, 'img/UyFvUNq51oHj1ZE21jhJKqMc1LxMWiQu2McnrCZL.gif', 'Кожа', '2020-12-10 01:27:54', '2020-12-10 01:27:54');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('filiplove48@gmail.com ', '$2y$10$0Pehxw6RqdXRqyR68/skiujt9B96FnxtLnkZwv6aQ.hWT96tpdUHa', '2020-03-23 08:01:34'),
('Expertpsiholog@mail.ru', '$2y$10$kKcCAuZZfVbIpgDPWncdIeI2IqSEg.uESatsSscMoafaRq7yQ8dX6', '2020-03-23 08:08:10'),
('krymkin@mail.ru', '$2y$10$2ivtJZ.CeZGI5BbWKSfgSeN5s8Xw8ztjERgziKuhuyDNIkWctF1..', '2020-03-23 08:09:54'),
('admin@smbs.me', '$2y$10$G.N7MHVmU0Zig/COIOiybekNmWa2v7M9EpCFQDQFL.LrMj8sg.meK', '2020-03-23 08:10:14'),
('NK89161072067@gmail.com', '$2y$10$1SPeLxsedgPyIuLvGPWjF.S9x4UrkLsrWqi5CAqW3h/ATgrMUdlp6', '2020-03-23 08:10:32'),
('Oksglad2008@rambler.ru', '$2y$10$Z5rFocoutJ2Dw6nVpZtcYukW6il7ONU4SbmXDKJUsIKSMGvV5f35W', '2020-03-23 08:10:50'),
('olegshakh@icloud.com', '$2y$10$UCZRG.T8kLTTnbA8wOBIV.mv3AtxCHPM3/9FzNDvwxRdaE10Mlr6m', '2020-03-23 08:11:06'),
('klv@lenta.ru', '$2y$10$vZl9QXc4xPzMR.MrsxxxqOTZVHNGOjCkEAkvObdiHZODqmWzxyj/2', '2020-03-23 08:11:29'),
('helenkuzmina@yandex.ru', '$2y$10$FC7MmBjm3BPyXjLA5NdjTO9KkZgRfwor7edKNvxzedb98PgdF28Ga', '2020-03-23 08:11:58'),
('danila.osipov@gmail.com', '$2y$10$570YwS8g/YEksIxhj5CWGuxSzPw3ZRHuhhjswuhGq8Ij/K1sngMPC', '2020-03-23 10:00:27'),
('ilya.uv@yandex.ru', '$2y$10$t8AgNF07E1jFd0WD0z/HM.vRP3Y9rgpiMEImrxQc5HUI.A5ybJ1ki', '2020-03-26 23:40:23'),
('admin@gmail.com', '$2y$10$18LGaKVgBAzWQxoijm/lSOh/fVKovdSPknxUnSdP9stPbrd.2K3li', '2020-04-23 06:23:40'),
('admin@sector.business', '$2y$10$oRJa0Yl3pxhZLbwcsZwxiuoIbOtJylKzthxsQP6s4Y23GRHryTCRu', '2020-04-28 10:11:15'),
('krayude@gmail.com', '$2y$10$uLPpCeCg.0HIJd5rAIZnQuOybRdSICYEgX5sAEKFTLrT2r9uH6d2C', '2020-05-04 06:19:21'),
('aselesnyov@gmail.com', '$2y$10$uz2I3T1tzBOupESErCILe.ZFjmjVA7TTcGZugnqLGTpG.shvL2AOG', '2020-05-12 05:54:11'),
('cetblg@yandex.ru', '$2y$10$XKpci7f.w23h/.OlLX0uBuQZwT.op5rh8VD6a3mDYwA.PZQgJ.PW.', '2020-05-12 05:54:17'),
('maxxxzor@mail.ru', '$2y$10$S9QvBaFde.ozqp2LqS7u.uNp/IlD4M4Gi0dmW4Pz40iiLzZlWLYq6', '2020-05-12 05:54:21'),
('alexander.podkopaev@gmail.com', '$2y$10$meM.P377oGpultBQHkWkN.zkasR3FhWBShoz5NTd4dkrFz3spziry', '2020-05-12 05:54:30'),
('morozov7765@yandex.ru', '$2y$10$aZUwngbAmPT3s0aztp0IVu4ScMYE5EHJhxzE3nl5VGRlxt1vRBx46', '2020-05-12 05:54:37'),
('Bigboy.1984@mail.ru', '$2y$10$Me4RZ69ILcTXXR7L5jndKuP5RjxgVg0kNfELWf5.eIS9EdcHAQwmG', '2020-05-12 05:54:42'),
('oleksandrfetisov@gmail.com', '$2y$10$DsRrWB7wr/IiQZcUqfNxLet4M0Ww8HP9N3vN.QQfwyGzPwGVbS4iC', '2020-05-12 05:54:50'),
('9183303429@mail.ru', '$2y$10$zN.SSq1KmjxXEcToi0Rdeen4nrJ3oBteA0t4yBVydzBd5EZvBx7BK', '2020-05-12 05:54:55'),
('nik.odnaralov@mail.ru', '$2y$10$alx9P1r9Sn81awOWspiKFuGumvPEyIOS5k.oJZskTsTfikfbu78mu', '2020-05-12 05:55:02'),
('schihovanata@yandex.ru', '$2y$10$etugk2Nl8xxfQl8LGOdWduiD3.q6mDbOC3QGoux9ZQxm/zBSaHGae', '2020-05-12 05:55:08'),
('lady.martens@yandex.ru', '$2y$10$iG94PdV9zprPwkTgDg.liuyn9Bfucac.h8BU0lmnabxUeTIYFgX06', '2020-05-12 05:55:13'),
('kaj_@inbox.ru', '$2y$10$3XwO.3luANPvJjnlgmeuh.q4qhiG.LcO45Dnho44u7ldfKTLhru4K', '2020-05-12 05:55:18'),
('ponomarenko.roman@gmail.com', '$2y$10$OmBDb1j5Bx0vQvGvwQw51edeBEGZjsS3prk59Dlx7w..3XZMTWOZO', '2020-05-12 05:55:27'),
('y020174@mail.ru', '$2y$10$pUViuV3NLE7rkg6e.QbM9Ob55OwZLZYg0zoRN02wALtZOOIzFWkja', '2020-05-12 05:55:33'),
('n9111817777@gmail.com', '$2y$10$6wJmuDPILkA4315lpngtuOIdrXwh1tpCzRj.A7pgf6lRPbzV5yhau', '2020-05-12 05:55:42'),
('ab906777@gmail.com', '$2y$10$lM3fZOTvWuoAoo2LnXnxcukkMIah.Jq1rhzQlO1N4zygU2lpn9oNK', '2020-05-12 05:55:47'),
('a_lomtev@rambler.ru', '$2y$10$Sq3ZFCgKEAL4meERnR0R4.S9Vbe1ucLu2i7/DkmstfhQX1nnmOA2K', '2020-05-12 05:55:50'),
('yura@pekov.org', '$2y$10$c6tQ0aIssnTqRu7DDdAA/ebu9CHGieTKj59p.AjH2v89p/GZc5.wy', '2020-05-12 05:55:59'),
('verunka88@yandex.ru', '$2y$10$4Hn5TW8fXjN2fIfE.PnFQeh9NhCE5VNQLIXM7s0otHhJ1hbby/NaK', '2020-05-12 05:56:04'),
('Userdbf@mail.ru', '$2y$10$f64a7O.tKp1iWLyfwymO9ObNEF1NmXrhWmzm8sxbC8e/oMsSLW3nG', '2020-05-12 05:56:08'),
('antonmakarn1@mail.ru', '$2y$10$mcsllYrvuGpVaJbz7i36pepmC246rRH09uUWoZz5Pbxr8..q5WmoW', '2020-05-12 05:56:11'),
('Anastasiya.surnina@mail.ru', '$2y$10$J3QD5Wn.Pf7BZ/QYcrqRa.2BjmLYnAxtcgo7uLDEsSTdxTSKm6/f2', '2020-05-12 05:56:17'),
('linelimit@tut.by', '$2y$10$XL.I72MuW2ld/KH9DTvNi.DsicCE/uV4zBhXx1.yn1SpGblDcmnv2', '2020-05-12 05:56:22'),
('k.e.shulepov@rt.ru', '$2y$10$TrYE5Hegyi1c1dRfUkzvvecCugVoB0kwtPa344H8DtkCAJ1/ZQSRC', '2020-05-12 05:56:25'),
('Krav7274@mail.ru', '$2y$10$/WkwVHjwfLLMtZz/9zrnaewg52DvP2G2cXn2an0nh9BXmVJt1vBMK', '2020-05-12 05:56:32'),
('margosha100@mail.ru', '$2y$10$xYkJ.JQ9mEMt8TwUJjoZmOtcMqlt/2IARQp8Gp9VKyYqw6c6of/y.', '2020-05-12 05:56:35'),
('Obaramykina@gmail.com', '$2y$10$XY0fspXYEelSpoUE2hn6Wu94rYPhxSjuk9Ir3KMoX7mqxekHLLjaa', '2020-05-12 05:56:39'),
('kovshuraoxana@yandex.ru', '$2y$10$xmwrF0NKillaInQrt/vSee3ROuJSstokkr30m1oATJiX2TELfref6', '2020-05-12 05:56:42'),
('timelevik@gmail.com', '$2y$10$g6l.QzvmbqcaqpwJWfCviezP0lEZoYSIAD9///SGx/nOKpjmi2icG', '2020-05-12 05:56:59'),
('alexer_76@mail.ru', '$2y$10$UWmWT2HWncw0C/jZVZVQd.fOB/K32SsxZ9azhINx5SxRu7VJo2Z4q', '2020-05-12 05:57:03'),
('89182266770@yandex.ru', '$2y$10$6nKnitwBIaGFGQOvCqicQOFrYPkajrca3xeGqBTeIKxZu2KCxR3Ya', '2020-05-12 05:57:06'),
('zlodeia111@gmail.com', '$2y$10$mQYiSiH7fXT0b1Vva.gBQu38TgFrdWND6lqj4xcPkkEUJQhIsqMhi', '2020-05-12 05:57:11'),
('annabalashova@bk.ru', '$2y$10$rLOuVlwUsrQhP0liMyHBC.Y4Sp2xJjThnXQxuqJfznB89L9aQO63y', '2020-05-12 05:57:14'),
('goldemi@mail.ru', '$2y$10$yGTjm8..jcq8RYlYM4Et7uNwtb9PgipH7Kzc9ILRsQ2sfp2iUz5GW', '2020-05-12 05:57:17'),
('ra_timur@rambler.ru', '$2y$10$l5sSnihlG63Qyl3HrAL/0eVzM1Pqd5Ll60FNvnVQChg5PXJeYGczW', '2020-05-12 05:57:20'),
('ntny1986@gmail.com', '$2y$10$TaUHpH3gYbyby6rNWPdXU.FAPy7YrdcCFzVyN1mtHkyNQ3896kQem', '2020-05-12 05:57:24'),
('e-skladchikova@yandex.ru', '$2y$10$8obpsxwCtnxpQby6r8NUvuW/Ogprnqs/9rQq0Vn4THOuv7L2eoCq2', '2020-05-12 05:57:30'),
('aversespb@gmail.com', '$2y$10$RGcc3u8XT9I/lWUZ2QXO4u7G.5/P2EovX/AxekoobYDC2D97iZmWu', '2020-05-12 05:57:35'),
('olyarogalic@gmail.com', '$2y$10$8jW4guy0yO2MHD92gx6zE.h18WosxC2q2qfW4BmaDkuZ4oWqnTIsy', '2020-05-12 05:57:40'),
('a-zalev@yandex.ru', '$2y$10$aCzUdMTj5I5fJhBI27FqkenovCiMmfkMkSNHeX/11U2IU.7b1RpQy', '2020-05-12 05:57:45'),
('Gvm13@list.ru', '$2y$10$I7bBZpM3I5q3/V9Vy2/7KeqtM6S6xql2ltTY3KiX/.ISTZ.OQDIwG', '2020-05-12 05:57:50'),
('Goodwork2018@yandex.ru', '$2y$10$0y6yDQZE7FPf07QEma0otOvKDRE9Jmnx6tE8T8E4wWKJyPl3noTO.', '2020-06-08 07:11:54'),
('lentsar@yandex.ru', '$2y$10$914MBeHtmyHvwySlcODXiuPyzNPCRaS2oQ.4NTjS9Hxikll5BjyE.', '2020-06-08 07:13:10'),
('vladim303@gmail.com', '$2y$10$1jUljA5gan4vWQF8OA3tKOEdWDKk3odNmYS0ctLW5aFG4gHiE1kMy', '2020-06-08 07:15:11'),
('kudrat@yandex.ru', '$2y$10$GH8G4EaIfknbYHvVeYWcrekovCwo9EcnB.TKF2YMLbPecfxGda1mK', '2020-06-08 07:16:10'),
('Mryasov63@mail.ru', '$2y$10$6fgT3SvlvEaxyl77bU6zBOR46UzvZEsq/8s1.xepSJw0CUgiNKgHC', '2020-06-08 07:16:57'),
('kalmychkov@yandex.ru', '$2y$10$j1HuHEvfD5NRax/8rgBpjO7DIHK.0MeZaxG6ZnP46yl7z2xwKnfSe', '2020-06-08 07:17:59'),
('chaschinakat@gmail.com', '$2y$10$5dASNmJBg2cNXrpLUF/Bk.IOPYFPr1NxU5Dxol5JTheidKf8t6ct2', '2020-06-08 07:20:12'),
('wise_natalia@mail.ru', '$2y$10$/ZepUlCDu/B3frZ0isRwlOGw5b4Q.FGDP9HtkWhafuQHG/MdnHtTO', '2020-06-08 07:20:36'),
('Igor@ryzov.ru', '$2y$10$0hkgIU4WxdIS3ynptBTbXed0IQltdcSIpPV3DAmhRfK/cZF.k1mtG', '2020-06-08 07:21:02'),
('brigadir8686@mail.ru', '$2y$10$SoP4f2jJsXakslrUE9hPx.aYeCfoj8s2h5x1Rk8L9nZA4xXMOzEbe', '2020-06-08 07:21:28'),
('roman.vycherov@gmail.com', '$2y$10$IknEyrqAYwtZoH.2Suob..ev5EnllrzrXMPwiMRIbMhJ23ScWs73G', '2020-06-08 07:21:47'),
('kig_arena@hotmail.com', '$2y$10$3aMqg2ql0vEIwRysAXCNfeXKFhE/m/1v.yL360EQ6J3m6qEUtn4Im', '2020-06-08 07:22:09'),
('cheremisin-viktor@mail.ru', '$2y$10$a2Y6XhRSOVP6bjRZfIjHjuE.Yg28btaOuHrsQKyLyWy/eT9EQhk36', '2020-06-08 07:23:07'),
('s.akvarius23@gmail.com', '$2y$10$0ro5v1C9nwF8bHqF5/CE9.nlEcrjPxFUZi4Om26Xl7iIouBRZfe1S', '2020-06-08 07:23:29'),
('Artem@23-remont.com', '$2y$10$XEZ2nmqqLAADbZuqSG9AFOhkXWsX92wDfog5CEYLHLAzhgvHLTEmq', '2020-06-08 07:24:11'),
('RomanLuzan@mail.ru', '$2y$10$MRifVPEL61tqEUkqr9h31.WZkMcxy12L7EyEP44I2n5A3GxwxvbAK', '2020-06-08 07:24:31'),
('garkavtsev@gmail.com', '$2y$10$FZu.B6LyV1z52w7uqUEBBON3xDO43D48WoNhCqS8I.UnSjafVdVDu', '2020-06-08 07:24:51'),
('ivanoe911@gmail.com', '$2y$10$ayjaQ1eC8BIdprhwsHXWCugCTwujgjrkLcNnP6LP/hHSkXozXDzkC', '2020-06-08 07:25:09'),
('apieshkin@yahoo.com', '$2y$10$5soXj.YiNHCjaSdGYkPhQekGjc/scpNXuG/dShcBeZ/eLR3HMZCWi', '2020-06-22 04:08:15'),
('dray.itadakimas19@gmail.com', '$2y$10$JFakFjqckcu0rUFIW9kffewBORh4bkJcE./iJDj1KoYc5Zy1YZoJu', '2020-08-14 09:06:48');

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `user_id`, `result`, `created_at`, `updated_at`) VALUES
(155, 1, '0', '2020-12-03 16:23:30', '2020-12-03 16:23:30'),
(156, 1, '75', '2020-12-03 16:24:15', '2020-12-03 16:24:15'),
(157, 1, '100', '2020-12-07 17:59:24', '2020-12-07 17:59:24'),
(158, 1, '100', '2020-12-09 23:38:25', '2020-12-09 23:38:25'),
(159, 1, '0', '2020-12-09 23:39:08', '2020-12-09 23:39:08'),
(160, 1, '60', '2020-12-09 23:40:08', '2020-12-09 23:40:08'),
(161, 1, '33.333333333333', '2020-12-10 01:27:15', '2020-12-10 01:27:15');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.test', NULL, '$2y$10$U12xLqfqJd.Jes/1Eu0AM.ilr/LY2DP/yZv6TnGkldPDHrXnrX8VO', 1, NULL, NULL, NULL),
(2, 'Вадим Рузахунов', 'a@a.a', NULL, '$2y$10$ftDaRUnX6Sn4TkhjbJ/B5uHxtRQDdogz9/Q218tuPvDyKFP8TF5je', NULL, NULL, '2020-12-10 01:30:08', '2020-12-10 01:30:08'),
(3, 'Вячеслав Гордее', 'admin@admin.admin', NULL, '$2y$10$etDafsnX6SnsdkGRbJ/jd8aoalOduU.asS1/dlOa2LdmJ82LD2.dAA20f', NULL, NULL, '2020-12-11 13:32:17', '2020-12-11 13:32:17');
--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `faces`
--
ALTER TABLE `faces`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pantomime`
--
ALTER TABLE `pantomime`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `faces`
--
ALTER TABLE `faces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `pantomime`
--
ALTER TABLE `pantomime`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
