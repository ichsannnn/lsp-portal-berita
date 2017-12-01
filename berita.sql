-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 03:44 AM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `berita_id` int(10) UNSIGNED NOT NULL,
  `berita_kategori_id` int(10) UNSIGNED NOT NULL,
  `berita_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_utama` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_view` int(11) NOT NULL,
  `berita_userinput` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_tglinput` datetime NOT NULL,
  `berita_status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`berita_id`, `berita_kategori_id`, `berita_judul`, `berita_detail`, `berita_utama`, `berita_link`, `berita_view`, `berita_userinput`, `berita_tglinput`, `berita_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Synergistically expedite', 'Intrinsicly extend excellent portals via enabled leadership. Uniquely engage viral quality vectors via extensive leadership skills. Conveniently drive maintainable benefits rather than unique best practices. Intrinsicly disseminate cutting-edge paradigms for value-added channels. Progressively streamline standardized models without long-term high-impact meta-services.\r\n\r\nSynergistically expedite adaptive total linkage rather than customized e-commerce. Credibly incentivize goal-oriented partnerships without an expanded array of models. Dynamically incentivize viral growth strategies after emerging paradigms. Globally optimize cross functional value and cutting-edge methodologies. Globally engage plug-and-play ideas through next-generation leadership skills.\r\n\r\nIntrinsicly disintermediate parallel synergy vis-a-vis innovative collaboration and idea-sharing. Intrinsicly customize seamless systems without world-class opportunities. Dramatically communicate prospective convergence through goal-oriented innovation. Monotonectally enable fully researched synergy whereas goal-oriented solutions. Assertively leverage other\'s enterprise-wide "outside the box" thinking and progressive vortals.', 'Tidak', 'synergistically-expedite', 9, 'ichsan', '2017-04-26 03:01:51', 'Aktif', '2017-04-25 20:01:51', '2017-04-25 20:41:18'),
(2, 3, 'Objectively visualize', 'Authoritatively redefine premier results vis-a-vis maintainable applications. Energistically leverage existing functionalized quality vectors through prospective e-services. Authoritatively plagiarize long-term high-impact niche markets vis-a-vis best-of-breed technology. Distinctively supply diverse architectures with real-time partnerships. Completely myocardinate intermandated technologies without B2B best practices.\r\n\r\nCompletely supply customer directed e-tailers for future-proof content. Completely provide access to interactive results via granular imperatives. Proactively benchmark enterprise total linkage for user-centric human capital. Proactively e-enable compelling expertise after fully tested systems. Objectively visualize resource-leveling testing procedures via mission-critical niches.\r\n\r\nGlobally engineer functionalized communities vis-a-vis turnkey applications. Holisticly mesh covalent architectures without low-risk high-yield information. Assertively reintermediate standards compliant convergence through technically sound interfaces. Intrinsicly myocardinate real-time resources via distinctive leadership. Phosfluorescently initiate 24/7 communities without multifunctional initiatives.', 'Tidak', 'objectively-visualize', 0, 'ichsan', '2017-04-26 03:02:19', 'Aktif', '2017-04-25 20:02:19', '2017-04-25 20:02:19'),
(3, 10, 'Seamlessly envisioneer multidisciplinary', 'Credibly brand wireless infrastructures before leveraged content. Energistically negotiate granular networks rather than innovative infomediaries. Authoritatively maximize B2C experiences with excellent channels. Assertively innovate efficient metrics after frictionless scenarios. Professionally syndicate exceptional content for customized convergence.\r\n\r\nRapidiously deliver synergistic alignments after cross-unit experiences. Energistically innovate sticky portals vis-a-vis worldwide systems. Professionally optimize pandemic architectures rather than backend e-markets. Synergistically myocardinate cross-media communities through user-centric methodologies. Appropriately grow extensive platforms and turnkey growth strategies.\r\n\r\nSeamlessly envisioneer multidisciplinary collaboration and idea-sharing with installed base manufactured products. Proactively synergize leading-edge niches and open-source process improvements. Rapidiously enhance adaptive metrics via enterprise networks. Assertively strategize multimedia based deliverables whereas an expanded array of technologies. Dramatically architect granular applications with goal-oriented growth strategies.', 'Tidak', 'seamlessly-envisioneer-multidisciplinary', 0, 'ichsan', '2017-04-26 03:02:56', 'Aktif', '2017-04-25 20:02:56', '2017-04-25 20:02:56'),
(4, 10, 'Monotonectally evisculate interoperable scenarios', 'Appropriately visualize ethical "outside the box" thinking before dynamic technologies. Holisticly redefine competitive e-business whereas innovative resources. Progressively generate unique potentialities vis-a-vis quality networks. Monotonectally reintermediate ubiquitous quality vectors via seamless materials. Phosfluorescently enable future-proof experiences vis-a-vis error-free paradigms.\r\n\r\nEnergistically conceptualize granular interfaces without quality benefits. Intrinsicly customize interactive collaboration and idea-sharing and corporate action items. Monotonectally evisculate interoperable scenarios without real-time bandwidth. Phosfluorescently facilitate just in time materials through multimedia based solutions. Energistically optimize professional applications for maintainable e-commerce.\r\n\r\nProgressively mesh goal-oriented growth strategies for diverse alignments. Phosfluorescently facilitate multifunctional platforms for performance based synergy. Collaboratively deploy competitive networks and integrated e-tailers. Objectively pursue cost effective best practices via an expanded array of deliverables. Monotonectally streamline diverse web services vis-a-vis transparent information.', 'Tidak', 'monotonectally-evisculate-interoperable-scenarios', 3, 'ichsan', '2017-04-26 03:03:27', 'Aktif', '2017-04-25 20:03:27', '2017-04-25 20:24:18'),
(5, 4, 'Rapidiously create distinctive process', 'Completely syndicate impactful scenarios before scalable synergy. Intrinsicly plagiarize just in time "outside the box" thinking vis-a-vis premium methods of empowerment. Progressively reconceptualize process-centric mindshare after go forward expertise. Phosfluorescently actualize client-centered growth strategies whereas market-driven opportunities. Dramatically unleash progressive intellectual capital after backend human capital.\r\n\r\nSeamlessly monetize performance based expertise through world-class e-markets. Proactively leverage existing frictionless schemas via stand-alone ideas. Proactively brand frictionless communities rather than backward-compatible imperatives. Distinctively optimize interactive total linkage without just in time resources. Rapidiously create distinctive process improvements whereas orthogonal content.\r\n\r\nUniquely reconceptualize distinctive sources whereas client-centered architectures. Credibly generate empowered initiatives via compelling alignments. Holisticly synthesize 24/365 results before client-based human capital. Credibly negotiate clicks-and-mortar results and fully tested web services. Monotonectally deploy high-payoff web-readiness without superior best practices.', 'Tidak', 'rapidiously-create-distinctive-process', 12, 'ichsan', '2017-04-26 03:03:55', 'Aktif', '2017-04-25 20:03:55', '2017-04-25 20:37:59'),
(6, 2, 'Energistically conceptualize', 'Conveniently synergize high-quality benefits with value-added technology. Compellingly innovate global benefits vis-a-vis user-centric quality vectors. Collaboratively promote effective e-services with focused benefits. Professionally procrastinate alternative imperatives and timely schemas. Credibly productize user-centric metrics and future-proof core competencies.\r\n\r\nCredibly create stand-alone e-commerce for extensible markets. Distinctively productize value-added markets whereas clicks-and-mortar results. Compellingly transition highly efficient convergence via state of the art opportunities. Progressively aggregate 24/7 convergence and future-proof partnerships. Progressively e-enable superior imperatives without seamless resources.\r\n\r\nHolisticly engineer timely value before end-to-end technology. Authoritatively disseminate cross-unit schemas whereas high-payoff convergence. Energistically conceptualize effective metrics rather than long-term high-impact experiences. Credibly initiate state of the art quality vectors for cooperative methodologies. Globally maximize collaborative relationships whereas stand-alone scenarios.', 'Tidak', 'energistically-conceptualize', 0, 'ichsan', '2017-04-26 03:04:27', 'Aktif', '2017-04-25 20:04:19', '2017-04-25 20:04:27'),
(7, 5, 'Professionally myocardinate', 'Professionally myocardinate equity invested e-tailers whereas customized relationships. Monotonectally monetize clicks-and-mortar ROI through optimal potentialities. Authoritatively visualize cross-platform relationships with just in time growth strategies. Compellingly whiteboard web-enabled mindshare vis-a-vis enterprise catalysts for change. Objectively enable long-term high-impact platforms via real-time scenarios.\r\n\r\nProgressively formulate integrated platforms and seamless testing procedures. Competently supply long-term high-impact alignments and interdependent infrastructures. Monotonectally target highly efficient interfaces through global interfaces. Compellingly maintain one-to-one processes through synergistic scenarios. Dramatically mesh just in time paradigms vis-a-vis process-centric convergence.\r\n\r\nAuthoritatively reintermediate go forward scenarios before enabled e-services. Proactively synergize ethical growth strategies rather than seamless process improvements. Interactively fabricate compelling networks before high-payoff technologies. Holisticly supply intuitive interfaces rather than progressive customer service. Rapidiously underwhelm backend results with resource maximizing catalysts for change.', 'Tidak', 'professionally-myocardinate', 0, 'ichsan', '2017-04-26 03:04:56', 'Aktif', '2017-04-25 20:04:56', '2017-04-25 20:04:56'),
(8, 3, 'Energistically coordinate sticky', 'Monotonectally actualize synergistic innovation rather than market-driven ROI. Interactively leverage other\'s enabled mindshare for sticky functionalities. Conveniently underwhelm parallel services vis-a-vis collaborative potentialities. Seamlessly whiteboard client-based expertise with ubiquitous benefits. Phosfluorescently pursue orthogonal experiences through enterprise-wide services.\r\n\r\nSynergistically simplify goal-oriented expertise for orthogonal supply chains. Rapidiously myocardinate interdependent infrastructures rather than cross-media methodologies. Energistically coordinate sticky partnerships via transparent outsourcing. Progressively harness intuitive users after user friendly sources. Seamlessly customize front-end paradigms through stand-alone strategic theme areas.\r\n\r\nDynamically implement corporate outsourcing before ethical technologies. Phosfluorescently customize B2B networks with 2.0 results. Efficiently utilize accurate relationships after distinctive partnerships. Compellingly exploit future-proof human capital whereas 24/7 content. Competently fabricate B2B alignments via dynamic paradigms.', 'Tidak', 'energistically-coordinate-sticky', 0, 'ichsan', '2017-04-26 03:05:17', 'Aktif', '2017-04-25 20:05:17', '2017-04-25 20:05:17'),
(9, 1, 'Proactively exploit covalent', 'Proactively exploit covalent methods of empowerment for world-class customer service. Seamlessly restore efficient testing procedures vis-a-vis emerging synergy. Competently plagiarize multimedia based channels rather than web-enabled materials. Progressively initiate unique initiatives vis-a-vis out-of-the-box web services. Completely transition orthogonal niches without team driven e-services.\r\n\r\nGlobally incentivize cooperative methods of empowerment and fully researched ideas. Seamlessly harness highly efficient outsourcing via functionalized information. Efficiently e-enable clicks-and-mortar human capital whereas functionalized e-commerce. Dynamically architect user friendly systems for distinctive web services. Appropriately incentivize cross functional niches with clicks-and-mortar relationships.\r\n\r\nDynamically coordinate plug-and-play infomediaries vis-a-vis diverse e-services. Credibly aggregate distributed opportunities after prospective e-services. Monotonectally productize enterprise relationships whereas ubiquitous relationships. Globally underwhelm enterprise-wide processes for maintainable web-readiness. Interactively strategize standardized models via cross functional growth strategies.', 'Tidak', 'proactively-exploit-covalent', 0, 'ichsan', '2017-04-26 03:05:38', 'Aktif', '2017-04-25 20:05:38', '2017-04-25 20:05:38'),
(10, 10, 'Holisticly utilize', 'Holisticly utilize functionalized processes without sticky infomediaries. Uniquely synergize pandemic sources after compelling data. Seamlessly initiate customized total linkage for cross functional outsourcing. Energistically monetize client-based bandwidth rather than fully tested manufactured products. Intrinsicly enhance customized e-business without enterprise-wide internal or "organic" sources.\r\n\r\nCompletely generate fully tested models whereas proactive web services. Progressively restore principle-centered methodologies vis-a-vis cutting-edge e-services. Seamlessly simplify goal-oriented quality vectors for unique innovation. Dynamically scale high-payoff intellectual capital and end-to-end growth strategies. Phosfluorescently evisculate strategic action items rather than dynamic platforms.\r\n\r\nEnthusiastically supply extensive niche markets rather than emerging opportunities. Progressively architect leveraged resources via cutting-edge products. Continually morph optimal collaboration and idea-sharing without holistic solutions. Phosfluorescently redefine 2.0 platforms for bleeding-edge web-readiness. Conveniently disintermediate interactive meta-services without compelling platforms.', 'Ya', 'holisticly-utilize', 0, 'user', '2017-04-26 03:42:34', 'Aktif', '2017-04-25 20:06:03', '2017-04-25 20:42:34'),
(11, 7, 'Seamlessly negotiate multimedia', 'Authoritatively incubate interactive platforms and state of the art human capital. Credibly formulate timely processes via emerging value. Appropriately fashion value-added schemas via visionary convergence. Energistically underwhelm maintainable systems whereas flexible functionalities. Objectively customize multidisciplinary collaboration and idea-sharing after corporate markets.\r\n\r\nPhosfluorescently customize interdependent interfaces rather than intermandated leadership skills. Completely recaptiualize standardized bandwidth vis-a-vis maintainable channels. Monotonectally impact open-source interfaces without extensive e-markets. Holisticly formulate best-of-breed services and synergistic e-markets. Professionally unleash impactful metrics after virtual communities.\r\n\r\nHolisticly negotiate excellent total linkage with premier sources. Proactively build backward-compatible process improvements without client-based applications. Uniquely reconceptualize process-centric human capital through enterprise-wide sources. Distinctively actualize ubiquitous intellectual capital rather than virtual ideas. Seamlessly negotiate multimedia based value rather than client-based imperatives.', 'Tidak', 'seamlessly-negotiate-multimedia', 0, 'ichsan', '2017-04-26 03:14:01', 'Aktif', '2017-04-25 20:14:01', '2017-04-25 20:14:01'),
(12, 11, 'Compellingly innovate world-class ideas', 'Appropriately orchestrate resource sucking ideas and strategic partnerships. Globally formulate enterprise-wide bandwidth without progressive relationships. Uniquely strategize cooperative infrastructures via client-centric leadership skills. Appropriately promote cost effective growth strategies vis-a-vis business core competencies. Energistically myocardinate resource maximizing systems and B2C products.\r\n\r\nInteractively morph virtual strategic theme areas before client-focused applications. Globally negotiate inexpensive synergy vis-a-vis granular meta-services. Dynamically network cooperative methodologies without client-centered users. Energistically disseminate end-to-end e-commerce vis-a-vis backward-compatible technology. Progressively seize vertical products and equity invested interfaces.\r\n\r\nSeamlessly supply cross-unit processes whereas team driven information. Seamlessly unleash superior e-business whereas client-centered synergy. Dramatically harness covalent manufactured products via backward-compatible networks. Continually strategize clicks-and-mortar technologies vis-a-vis end-to-end alignments. Compellingly innovate world-class ideas after cooperative catalysts for change.', 'Tidak', 'compellingly-innovate-world-class-ideas', 0, 'ichsan', '2017-04-26 03:14:27', 'Aktif', '2017-04-25 20:14:27', '2017-04-25 20:14:27'),
(13, 9, 'Interactively architect orthogonal', 'Enthusiastically incentivize leading-edge partnerships vis-a-vis timely systems. Seamlessly maximize backend niches whereas stand-alone e-tailers. Progressively incentivize progressive models through resource maximizing e-tailers. Seamlessly provide access to out-of-the-box platforms and best-of-breed content. Monotonectally architect quality technologies vis-a-vis diverse value.\r\n\r\nEfficiently reinvent visionary expertise and accurate portals. Continually create adaptive methodologies after innovative results. Conveniently aggregate one-to-one outsourcing before resource maximizing users. Appropriately streamline adaptive schemas without competitive testing procedures. Completely maximize magnetic e-tailers without standards compliant catalysts for change.\r\n\r\nUniquely expedite frictionless manufactured products through cross-platform "outside the box" thinking. Interactively re-engineer team building testing procedures whereas go forward materials. Objectively customize innovative leadership skills through market-driven methodologies. Interactively architect orthogonal products with client-focused expertise. Globally synthesize turnkey methods of empowerment and out-of-the-box best practices.', 'Tidak', 'interactively-architect-orthogonal', 0, 'ichsan', '2017-04-26 03:14:58', 'Aktif', '2017-04-25 20:14:58', '2017-04-25 20:14:58'),
(14, 1, 'Synergistically underwhelm', 'Compellingly harness client-focused core competencies with open-source niches. Progressively evolve worldwide convergence through high-quality e-commerce. Seamlessly actualize inexpensive process improvements before emerging meta-services. Enthusiastically formulate orthogonal users after web-enabled portals. Synergistically underwhelm real-time meta-services vis-a-vis orthogonal infrastructures.\r\n\r\nCompetently innovate cooperative e-business via backward-compatible synergy. Dynamically evolve 24/7 human capital without interoperable best practices. Distinctively generate inexpensive technologies for excellent benefits. Monotonectally strategize optimal paradigms vis-a-vis diverse human capital. Dynamically initiate progressive "outside the box" thinking and strategic paradigms.\r\n\r\nDramatically pursue viral web-readiness after accurate information. Proactively maximize team driven networks for synergistic testing procedures. Energistically enable multimedia based supply chains for fully researched strategic theme areas. Completely foster viral intellectual capital whereas client-focused ROI. Efficiently recaptiualize best-of-breed methods of empowerment whereas stand-alone information.', 'Tidak', 'synergistically-underwhelm', 0, 'ichsan', '2017-04-26 03:15:32', 'Aktif', '2017-04-25 20:15:32', '2017-04-25 20:15:32'),
(15, 5, 'Energistically scale team', 'Assertively negotiate transparent vortals whereas flexible schemas. Globally e-enable granular information rather than team building users. Objectively underwhelm market-driven products whereas B2B web services. Professionally actualize sticky methods of empowerment whereas parallel technologies. Holisticly communicate customized collaboration and idea-sharing for open-source systems.\r\n\r\nDynamically evolve diverse leadership without cross functional experiences. Energistically scale team driven schemas before integrated interfaces. Proactively engineer dynamic e-services whereas market positioning partnerships. Appropriately brand technically sound alignments without B2C ROI. Credibly administrate vertical partnerships before leading-edge manufactured products.\r\n\r\nQuickly create turnkey potentialities rather than interactive total linkage. Rapidiously promote top-line partnerships after revolutionary services. Credibly productize long-term high-impact core competencies after team building initiatives. Holisticly target inexpensive metrics via go forward markets. Synergistically leverage other\'s seamless action items vis-a-vis visionary functionalities.', 'Tidak', 'energistically-scale-team', 0, 'ichsan', '2017-04-26 03:15:55', 'Aktif', '2017-04-25 20:15:55', '2017-04-25 20:15:55'),
(16, 6, 'Appropriately leverage', 'Uniquely re-engineer emerging sources with cross-platform meta-services. Intrinsicly implement 24/365 architectures before standardized benefits. Efficiently customize 24/365 catalysts for change for out-of-the-box data. Energistically maintain excellent niche markets vis-a-vis seamless interfaces. Appropriately monetize strategic best practices whereas stand-alone quality vectors.\r\n\r\nAppropriately leverage other\'s sustainable materials via effective applications. Globally optimize wireless ideas via market positioning infomediaries. Energistically benchmark cooperative catalysts for change rather than front-end niche markets. Credibly expedite inexpensive ROI after end-to-end potentialities. Efficiently syndicate backward-compatible e-business with client-centered alignments.\r\n\r\nDramatically evolve parallel architectures via bleeding-edge manufactured products. Compellingly parallel task e-business intellectual capital without extensible internal or "organic" sources. Quickly simplify high standards in deliverables whereas resource maximizing portals. Conveniently synthesize quality metrics and equity invested scenarios. Energistically predominate intuitive bandwidth without functionalized metrics.', 'Tidak', 'appropriately-leverage', 0, 'ichsan', '2017-04-26 03:16:13', 'Aktif', '2017-04-25 20:16:13', '2017-04-25 20:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_tglinput` datetime NOT NULL,
  `kategori_userinput` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`kategori_id`, `kategori_nama`, `kategori_status`, `kategori_tglinput`, `kategori_userinput`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi', 'Aktif', '2017-04-26 02:58:58', 'ichsan', '2017-04-25 19:58:58', '2017-04-25 19:58:58'),
(2, 'Pendidikan', 'Aktif', '2017-04-26 02:59:06', 'ichsan', '2017-04-25 19:59:06', '2017-04-25 19:59:06'),
(3, 'Ekonomi', 'Aktif', '2017-04-26 02:59:13', 'ichsan', '2017-04-25 19:59:13', '2017-04-25 19:59:13'),
(4, 'Politik', 'Aktif', '2017-04-26 02:59:21', 'ichsan', '2017-04-25 19:59:21', '2017-04-25 19:59:21'),
(5, 'Sosial', 'Aktif', '2017-04-26 02:59:28', 'ichsan', '2017-04-25 19:59:28', '2017-04-25 19:59:28'),
(6, 'Budaya', 'Aktif', '2017-04-26 02:59:34', 'ichsan', '2017-04-25 19:59:34', '2017-04-25 19:59:34'),
(7, 'Pertahanan', 'Aktif', '2017-04-26 02:59:46', 'ichsan', '2017-04-25 19:59:46', '2017-04-25 19:59:46'),
(8, 'Keamanan', 'Aktif', '2017-04-26 03:00:01', 'ichsan', '2017-04-25 20:00:01', '2017-04-25 20:00:01'),
(9, 'Hukum', 'Aktif', '2017-04-26 03:00:09', 'ichsan', '2017-04-25 20:00:09', '2017-04-25 20:00:09'),
(10, 'Hiburan', 'Aktif', '2017-04-26 03:00:19', 'ichsan', '2017-04-25 20:00:19', '2017-04-25 20:00:19'),
(11, 'Kesehatan', 'Aktif', '2017-04-26 03:00:37', 'ichsan', '2017-04-25 20:00:37', '2017-04-25 20:00:37'),
(12, 'Agama', 'Aktif', '2017-04-26 03:01:04', 'ichsan', '2017-04-25 20:01:04', '2017-04-25 20:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `komentar_id` int(10) UNSIGNED NOT NULL,
  `komentar_berita_id` int(10) UNSIGNED NOT NULL,
  `komentar_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar_status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar_tglinput` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`komentar_id`, `komentar_berita_id`, `komentar_email`, `komentar_website`, `komentar_isi`, `komentar_status`, `komentar_tglinput`, `created_at`, `updated_at`) VALUES
(1, 1, 'ichsanfirdaus99@gmail.com', 'http://facebook.com/mrsilentreader', 'Distinctively empower intermandated meta-services vis-a-vis intermandated leadership skills. Appropriately evolve leading-edge scenarios via value-added resources. Professionally leverage.', 'Tidak Aktif', '2017-04-26 03:25:47', '2017-04-25 20:25:47', '2017-04-25 20:35:09'),
(2, 1, 'ichsanfirdaus99@outlook.com', 'http://twitter.com/drsilentreader', 'Dramatically grow strategic process improvements via diverse testing procedures. Continually formulate economically sound results whereas user-centric niches. Completely matrix revolutionary materials.', 'Aktif', '2017-04-26 03:26:39', '2017-04-25 20:26:39', '2017-04-25 20:26:39'),
(3, 5, 'ichsanfirdaus99@gmail.com', 'http://facebook.com/mrsilentreader', 'Distinctively provide access to virtual niches before transparent information. Globally seize distinctive testing procedures vis-a-vis backend users. Professionally pursue team driven.', 'Aktif', '2017-04-26 03:29:00', '2017-04-25 20:29:00', '2017-04-25 20:29:00'),
(4, 5, 'ichsanfirdaus99@outlook.com', 'http://facebook.com/mrsilentreader', 'Efficiently evisculate go forward e-markets rather than plug-and-play initiatives. Conveniently communicate cooperative data via B2C functionalities. Authoritatively cultivate optimal solutions rather.', 'Aktif', '2017-04-26 03:29:30', '2017-04-25 20:29:30', '2017-04-25 20:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2017_04_20_034000_create_kategoris_table', 1),
(23, '2017_04_20_034011_create_beritas_table', 1),
(24, '2017_04_20_034018_create_komentars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_pass`, `user_namalengkap`, `user_email`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
('ichsan', '$2y$10$YyuJ3/xGmLr3yesBl9pUDeR/grF2vogDRX5DxI6rGa0W7kmYEOmZ.', 'Ichsan Firdaus', 'ichsanfirdaus99@outlook.com', 'Aktif', 'Y0sImNo74b7cwqtatb18x27DiDPazuFkRyQQMEaVBZGpo8mjda6OgLrUW4ih', '2017-04-25 12:58:31', '2017-04-25 12:58:31'),
('user', '$2y$10$hVo0DnXk2gDyhdPqAQ95Cu8EPHn.kAynfVF9Az15y6otgX9.15Z9W', 'User', 'user@user.com', 'Aktif', NULL, '2017-04-25 20:28:03', '2017-04-25 20:28:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`berita_id`),
  ADD KEY `beritas_berita_kategori_id_foreign` (`berita_kategori_id`),
  ADD KEY `beritas_berita_userinput_foreign` (`berita_userinput`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`kategori_id`),
  ADD KEY `kategoris_kategori_userinput_foreign` (`kategori_userinput`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentars_komentar_berita_id_foreign` (`komentar_berita_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `berita_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `kategori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `komentar_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_berita_kategori_id_foreign` FOREIGN KEY (`berita_kategori_id`) REFERENCES `kategoris` (`kategori_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `beritas_berita_userinput_foreign` FOREIGN KEY (`berita_userinput`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD CONSTRAINT `kategoris_kategori_userinput_foreign` FOREIGN KEY (`kategori_userinput`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentars`
--
ALTER TABLE `komentars`
  ADD CONSTRAINT `komentars_komentar_berita_id_foreign` FOREIGN KEY (`komentar_berita_id`) REFERENCES `beritas` (`berita_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
