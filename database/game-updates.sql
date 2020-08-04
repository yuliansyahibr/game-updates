-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 04:38 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game-updates`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `konten_artikel` longtext,
  `time_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_game`, `judul_artikel`, `konten_artikel`, `time_created`, `id_user`) VALUES
(1, 1, 'Final_Fantasy_VII', '<p><em><strong>Final Fantasy VII</strong></em> is the seventh main installment in the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_series\" title=\"Final Fantasy series\"><em>Final Fantasy</em> series</a>, developed and published by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Square_Co.,_Ltd.\" title=\"Square Co., Ltd.\">Squaresoft</a>. It was released in January 1997 for the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/PlayStation\" title=\"PlayStation\">PlayStation</a>, and was later re-released for the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Microsoft_Windows\" title=\"Microsoft Windows\">Microsoft Windows</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/PlayStation_3\" title=\"PlayStation 3\">PlayStation 3</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/PlayStation_Portable\" title=\"PlayStation Portable\">PlayStation Portable</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/PlayStation_Vita\" title=\"PlayStation Vita\">PlayStation Vita</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/PlayStation_4\" title=\"PlayStation 4\">PlayStation 4</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/IOS\" title=\"IOS\">iOS</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Android_(system)\" title=\"Android (system)\">Android</a>, Xbox one and Switch platforms, it is also included on the PlayStation Classic mini console. It was directed by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Yoshinori_Kitase\" title=\"Yoshinori Kitase\">Yoshinori Kitase</a>, produced by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Hironobu_Sakaguchi\" title=\"Hironobu Sakaguchi\">Hironobu Sakaguchi</a>, with a score produced by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Nobuo_Uematsu\" title=\"Nobuo Uematsu\">Nobuo Uematsu</a>and character designs by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Tetsuya_Nomura\" title=\"Tetsuya Nomura\">Tetsuya Nomura</a>. It was the first title in the series to feature three-dimensional graphics, pre-rendered backgrounds and numerous&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Full_motion_video\" title=\"Full motion video\">full motion videos</a>, and the first to be released in Europe.</p><p><em>Final Fantasy VII</em> follows the story of mercenary&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Cloud_Strife\" title=\"Cloud Strife\">Cloud Strife</a>, who is hired by the eco-terrorist group&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/AVALANCHE\" title=\"AVALANCHE\">AVALANCHE</a>&mdash;led by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Barret_Wallace\" title=\"Barret Wallace\">Barret Wallace</a>&mdash;to help fight the mega-corporation&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Shinra_Electric_Power_Company\" title=\"Shinra Electric Power Company\">Shinra Electric Power Company</a>, who attempts to drain&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Gaia_(Final_Fantasy_VII)\" title=\"Gaia (Final Fantasy VII)\">the planet&#39;s</a> <a href=\"https://finalfantasy.fandom.com/wiki/Lifestream\" title=\"Lifestream\">lifeblood</a> as an energy source to further their profits. Apathetic to the cause, Cloud initially fights for personal gain, and for the promise he made to childhood friend&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Tifa_Lockhart\" title=\"Tifa Lockhart\">Tifa Lockhart</a>. Cloud eventually joins forces with many others to save the planet, which is threatened by Shinra and Cloud&#39;s nemesis&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Sephiroth\" title=\"Sephiroth\">Sephiroth</a>, and discovers a reason to fight for a cause other than his own.</p><p>The gameplay is a departure from previous entries in the series in many ways. Though it retains the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Battle_system#Active_Time_Battle\" title=\"Battle system\">Active Time Battle</a> pseudo-turn based menu command system,&nbsp;<em>Final Fantasy VII</em> features three&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Party\" title=\"Party\">party</a> members rather than four. The&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Materia_(Final_Fantasy_VII)\" title=\"Materia (Final Fantasy VII)\">Materia</a> system allows the player to customize each party member&#39;s abilities to their liking, and the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Limit_(Final_Fantasy_VII)\" title=\"Limit (Final Fantasy VII)\">Limit</a> system grants them unique combat skills. Though&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Minigame\" title=\"Minigame\">minigames</a> had been a recurring feature,&nbsp;<em>Final Fantasy VII</em> introduces numerous new ones, many of them playable in the theme park&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Gold_Saucer_(Final_Fantasy_VII)\" title=\"Gold Saucer (Final Fantasy VII)\">Gold Saucer</a> varying from&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Chocobo_Square_(Final_Fantasy_VII)\" title=\"Chocobo Square (Final Fantasy VII)\">racing</a> with&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Chocobo_(Final_Fantasy_VII)\" title=\"Chocobo (Final Fantasy VII)\">Chocobos</a> to&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Icicle_Inn#Snowboarding\" title=\"Icicle Inn\">snowboarding</a>.</p><p><em>Final Fantasy VII</em> is the best-selling game in the series with over 11 million units sold.<sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-FFVII_iTunes_App-2\">[3]</a></sup> It is widely renowned as one of the most influential RPGs to date.<sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-FFVII_still_resonates_USGamer-3\">[4]</a></sup><sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-FFVII_not_overrated_Destructoid-4\">[5]</a></sup><sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-Bit_Cultures_Top_10_FFVII_Influence-5\">[6]</a></sup> Its memorable <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII:_Original_Soundtrack\" title=\"Final Fantasy VII: Original Soundtrack\">soundtrack</a>, <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_characters\" title=\"Final Fantasy VII characters\">characters</a> and story make it one of the most popular games in the series, a prominent feature in <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_in_popular_culture\" title=\"Final Fantasy in popular culture\">popular culture</a>, and a frequent candidate for lists of the greatest games of all time.<sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-IGN_Top_100_Games-6\">[7]</a></sup><sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-Empire_100_Greatest_Videogames-7\">[8]</a></sup><sup><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII#cite_note-Gamingbolt_Top_100_Videogames-8\">[9]</a></sup> The popularity of the title has spawned a yet-to-be-released remake, titled simply <em><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_Remake\" title=\"Final Fantasy VII Remake\">Final Fantasy VII Remake</a></em>, and a series of prequels, sequels and spinoffs titled the <em><a href=\"https://finalfantasy.fandom.com/wiki/Compilation_of_Final_Fantasy_VII\" title=\"Compilation of Final Fantasy VII\">Compilation of Final Fantasy VII</a></em>.</p><p><br></p><h3 class=\"headline\">Gameplay</h3><p><em>Final Fantasy VII</em> uses the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Battle_system#Active_Time_Battle\" title=\"Battle system\">Active Time Battle</a> system, in which the party member&#39;s action is input with a command in a menu once their ATB gauge fills, with up to three playable characters in a party, who can have various&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_weapons\" title=\"Final Fantasy VII weapons\">weapons</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_armor\" title=\"Final Fantasy VII armor\">armor</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_accessories\" title=\"Final Fantasy VII accessories\">accessories</a> and&mdash;unique to the game&mdash;<a href=\"https://finalfantasy.fandom.com/wiki/Materia_(Final_Fantasy_VII)\" title=\"Materia (Final Fantasy VII)\">Materia</a> equipped. Party members stand in a&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Row\" title=\"Row\">row</a> (though their position can be altered in the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Menu_(Final_Fantasy_VII)\" title=\"Menu (Final Fantasy VII)\">menu</a>) facing rows of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_enemies\" title=\"Final Fantasy VII enemies\">enemies</a>, which come arranged in one of many&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Attack_formations#Final_Fantasy_VII\" title=\"Attack formations\">attack formations</a>: facing them, surrounded by them, or surrounding them. The character commands include&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Attack_(command)#Final_Fantasy_VII\" title=\"Attack (command)\">Attack</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Magic_(Final_Fantasy_VII)\" title=\"Magic (Final Fantasy VII)\">Magic</a>, a command provided by&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Command_Materia_(Final_Fantasy_VII)\" title=\"Command Materia (Final Fantasy VII)\">Command Materia</a>,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Summon_(Final_Fantasy_VII)\" title=\"Summon (Final Fantasy VII)\">Summon</a> or&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Item\" title=\"Item\">Item</a> command to use an&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_items\" title=\"Final Fantasy VII items\">item</a> in their inventory, with the additional ability to&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Defend_(ability)\" title=\"Defend (ability)\">Defend</a> or change row.</p><p>Abilities the character can use depend on their equipped Materia, which can provide additional Magic, Summon and command abilities, or in other cases swap out commands for more powerful equivalents (such as <a href=\"https://finalfantasy.fandom.com/wiki/Command_Materia_(Final_Fantasy_VII)#W-Item\" title=\"Command Materia (Final Fantasy VII)\">W-Item</a>replacing Item), and allows them to use any combination of abilities. Materia can also <a href=\"https://finalfantasy.fandom.com/wiki/Support_Materia_(Final_Fantasy_VII)\" title=\"Support Materia (Final Fantasy VII)\">provide enhancements when combined with other Materia</a>, or simply <a href=\"https://finalfantasy.fandom.com/wiki/Independent_Materia_(Final_Fantasy_VII)\" title=\"Independent Materia (Final Fantasy VII)\">provide support abilities on their own</a>.</p><p>Once a&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Limit_(Final_Fantasy_VII)\" title=\"Limit (Final Fantasy VII)\">Limit</a> gauge fills, the Attack command is replaced with &quot;Limit&quot;, and a character has access to one of their specific Limit abilities (depending on their current Limit level and unlocked Limit abilities). Unlike the battle abilities provided by Materia, each Limit is character-specific with unique effects varying from dealing physical or magical damage to providing healing and buffs, which factor in different&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_stats\" title=\"Final Fantasy VII stats\">stats</a>. Though most simply require choosing the ability and then choosing its target,&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Tifa_Lockhart/Gameplay\" title=\"Tifa Lockhart/Gameplay\">Tifa&#39;s</a> Limits and&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Cait_Sith_(Final_Fantasy_VII)/Gameplay\" title=\"Cait Sith (Final Fantasy VII)/Gameplay\">Cait Sith</a>&#39;s second Limit require the use of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Slots_(ability_type)\" title=\"Slots (ability type)\">Slots</a>, and&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Vincent_Valentine/Gameplay\" title=\"Vincent Valentine/Gameplay\">Vincent</a>&#39;s Limits as well as one of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Red_XIII/Gameplay\" title=\"Red XIII/Gameplay\">Red XIII&#39;s</a> Limits transform themselves to become more powerful yet uncontrollable rather than choosing a target. The Limit system is partially inherited from the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Desperation_Attack\" title=\"Desperation Attack\">Desperation Attacks</a> of&nbsp;<em><a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VI\" title=\"Final Fantasy VI\">Final Fantasy VI</a></em>, but is based on a gauge rather than&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_stats#HP\" title=\"Final Fantasy VII stats\">HP</a>percentage, and includes a greater variety of abilities beyond simply damaging.</p><p>While the majority of previous titles featured four playable characters, <em>Final Fantasy VII</em> features three, which became the standard in following games. Though many of the <a href=\"https://finalfantasy.fandom.com/wiki/Status_effect\" title=\"Status effect\">status effects</a> are borrowed from status effects from previous titles, the <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_statuses#Barrier\" title=\"Final Fantasy VII statuses\">Barrier</a> and <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_statuses#MBarrier\" title=\"Final Fantasy VII statuses\">MBarrier</a> (known in other games as <a href=\"https://finalfantasy.fandom.com/wiki/Protect_(status)\" title=\"Protect (status)\">Protect</a> and <a href=\"https://finalfantasy.fandom.com/wiki/Shell_(status)\" title=\"Shell (status)\">Shell</a>) have a limited use visualized by a gauge, which, like the main ATB gauge, can be sped up using <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_statuses#Haste\" title=\"Final Fantasy VII statuses\">Haste</a> and slowed down using <a href=\"https://finalfantasy.fandom.com/wiki/Final_Fantasy_VII_statuses#Slow\" title=\"Final Fantasy VII statuses\">Slow</a>. As the first three dimensional title in the series, the default camera setting moves it throughout the battle to focus on the command being used and their effects, unlike previous entries where the camera was fixed on a top-down position.</p><p><br></p><h3 class=\"headline\">Synopsis</h3><p><br></p><p>An energy manufacturing mega-company known as Shinra, Inc. is harvesting the sheer life energy of the Planet (known as the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Lifestream\" title=\"Lifestream\">Lifestream</a>) as a simple fossil fuel. The Lifestream is processed and made into products ranging from electricity and heat to&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Mako\" title=\"Mako\">Mako</a> and Materia. The latter two materials can work miracles, granting the wisdom of the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Cetra\" title=\"Cetra\">Ancients</a> to the user. However, the Lifestream, like most other fuels, is finite in supply, and the Planet&#39;s lifeforce is being malevolently drained by the constant exploitation of Mako by Shinra. Though aware of the harmful effects, they function without remorse.</p><p><br></p><p>However, the real battle lies not with a corporation, but a force much more competent from the distant past. A long-thought dead warrior bent on becoming a god by draining all of the Lifestream from the Planet has risen again and will stop at nothing to achieve his goal.</p><p><br></p><p>Now a small rebel group emanating from the slums must quell the various dangers toward the innocent, and one mercenary for hire must look amidst the lies and deception and find the man he is within.</p><p>&mdash;Official Introduction</p><p>The planet of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Gaia_(Final_Fantasy_VII)\" title=\"Gaia (Final Fantasy VII)\">Gaia</a>, referred to simply as &quot;the Planet&quot; by its inhabitants, has three main continents. The planet is a living organism, and its lifeblood is the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Lifestream\" title=\"Lifestream\">Lifestream</a>, the liquid form being&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Mako\" title=\"Mako\">Mako</a>, that wells in the substrata. Above the surface Mako crystallizes into Materia that allows its users to manipulate the powers of the planet in a phenomenon many call&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Magic_(term)\" title=\"Magic (term)\">magic</a>. Harvesting Mako as an energy source drains the planet of its life, and corrupts life forms, creating&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Monster_(term)#Final_Fantasy_VII\" title=\"Monster (term)\">monsters</a> in the wild.</p><p>The planet was once home to the Ancients, who called themselves the <a href=\"https://finalfantasy.fandom.com/wiki/Cetra\" title=\"Cetra\">Cetra</a>. The Cetra traveled the planet cultivating life wherever they went, and were said to be able to enter communion with the planet itself. At the end of their journey, legends tell, the Cetra entered the <a href=\"https://finalfantasy.fandom.com/wiki/Promised_Land_(Final_Fantasy_VII)\" title=\"Promised Land (Final Fantasy VII)\">Promised Land</a>, a place of supreme happiness.</p><p>The dominant faction of the world is the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Shinra_Electric_Power_Company\" title=\"Shinra Electric Power Company\">Shinra Electric Power Company</a>, a powerful corporation that harvests Mako as an energy source. Shinra is seen as responsible for raising the quality of life for everyone in its sphere of influence. It has its own army, its special force being the&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/SOLDIER\" title=\"SOLDIER\">SOLDIER</a>, and is present in most parts of the planet. Shinra is opposed by a small terrorist organization known as&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/AVALANCHE\" title=\"AVALANCHE\">AVALANCHE</a> who seeks to stop Shinra from killing the planet by draining the Lifestream.</p><p>Shinra&#39;s base of operations is the metropolis of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Midgar\" title=\"Midgar\">Midgar</a> ringed by eight&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Mako_Reactor\" title=\"Mako Reactor\">Mako Reactors</a> that drain Mako for energy. While the upper city is an industrial powerhouse with a generally high quality of life, the lower city is made up of&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Midgar_Slums\" title=\"Midgar Slums\">slums</a> and receives little light and its air is polluted. The harvesting of Mako energy has made the area around Midgar a&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Midgar_Wasteland\" title=\"Midgar Wasteland\">barren wasteland</a> habited by monsters where&nbsp;<a href=\"https://finalfantasy.fandom.com/wiki/Flower_(symbolism)\" title=\"Flower (symbolism)\">flowers</a> rarely grow.</p>', '2019-06-09 09:40:03', 1),
(2, 2, 'Metal_Gear_Solid_V', '<p><em><strong>Metal Gear Solid V: The Phantom Pain</strong></em><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-2\">[b]</a></sup> is an <a href=\"https://en.wikipedia.org/wiki/Action-adventure_game\" title=\"Action-adventure game\">action-adventure</a> <a href=\"https://en.wikipedia.org/wiki/Stealth_game\" title=\"Stealth game\">stealth game</a> developed by <a href=\"https://en.wikipedia.org/wiki/Kojima_Productions\" title=\"Kojima Productions\">Kojima Productions</a> and published by <a href=\"https://en.wikipedia.org/wiki/Konami\" title=\"Konami\">Konami</a>. It was released worldwide for <a href=\"https://en.wikipedia.org/wiki/Microsoft_Windows\" title=\"Microsoft Windows\">Microsoft Windows</a>, <a href=\"https://en.wikipedia.org/wiki/PlayStation_3\" title=\"PlayStation 3\">PlayStation 3</a>, <a href=\"https://en.wikipedia.org/wiki/PlayStation_4\" title=\"PlayStation 4\">PlayStation 4</a>, <a href=\"https://en.wikipedia.org/wiki/Xbox_360\" title=\"Xbox 360\">Xbox 360</a> and <a href=\"https://en.wikipedia.org/wiki/Xbox_One\" title=\"Xbox One\">Xbox One</a> on September 1, 2015. It is the ninth installment in the <a href=\"https://en.wikipedia.org/wiki/Metal_Gear_series\" title=\"Metal Gear series\">series</a> that was directed, written and designed by <a href=\"https://en.wikipedia.org/wiki/Hideo_Kojima\" title=\"Hideo Kojima\">Hideo Kojima</a> following <em><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_Ground_Zeroes\" title=\"Metal Gear Solid V: Ground Zeroes\">Metal Gear Solid V: Ground Zeroes</a></em>, a stand-alone prologue released the previous year, as well as his final work at Konami.</p><p>Set in 1984, nine years after the events of <em>Ground Zeroes</em> and eleven years before the events of the original <em><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_(video_game)\" title=\"Metal Gear (video game)\">Metal Gear</a></em>, the story follows mercenary leader <a href=\"https://en.wikipedia.org/wiki/Venom_Snake\" title=\"Venom Snake\">Punished &quot;Venom&quot; Snake</a> as he ventures into <a href=\"https://en.wikipedia.org/wiki/Soviet_Union\" title=\"Soviet Union\">Soviet</a>-occupied <a href=\"https://en.wikipedia.org/wiki/Afghanistan\" title=\"Afghanistan\">Afghanistan</a> and the <a href=\"https://en.wikipedia.org/wiki/Angola\" title=\"Angola\">Angola</a>&ndash;<a href=\"https://en.wikipedia.org/wiki/Zaire\" title=\"Zaire\">Zaire</a> border region to exact revenge on the people who destroyed his forces and came close to killing him during the climax of <em>Ground Zeroes</em>. It carries over the tagline of <em>Tactical Espionage Operations</em> first used in <em><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid:_Peace_Walker\" title=\"Metal Gear Solid: Peace Walker\">Metal Gear Solid: Peace Walker</a></em>.</p><p><em>The Phantom Pain</em> was critically acclaimed upon release, with its gameplay drawing praise for its variety of <a href=\"https://en.wikipedia.org/wiki/Game_mechanics\" title=\"Game mechanics\">mechanics</a> and interconnected systems, which allow a high degree of player freedom in approaching objectives. While the story was acknowledged for its emotional power and exploration of mature <a href=\"https://en.wikipedia.org/wiki/Theme_(narrative)\" title=\"Theme (narrative)\">themes</a>, it drew criticism from some critics for its lack of focus, with further scrutiny over its second half and ending that left several plot points unresolved; this was linked to conclusive evidence of removed content, which led some to suggest that the game was released unfinished. Despite this, <em>The Phantom Pain</em> received perfect review scores from several publications and was described by some critics as one of the greatest stealth games of all time. A complete edition that bundles <em>The Phantom Pain</em> and <em>Ground Zeroes</em> together, titled <em>Metal Gear Solid V: The Definitive Experience</em>, was released in October 2016.</p><p><br></p><h3 class=\"headline\">Gameplay</h3><p><br></p><p><em>Metal Gear Solid V: The Phantom Pain</em> is an <a href=\"https://en.wikipedia.org/wiki/Action-adventure_game\" title=\"Action-adventure game\">action-adventure</a>, <a href=\"https://en.wikipedia.org/wiki/Stealth_game\" title=\"Stealth game\">stealth</a> game in which players take the role of Punished &quot;Venom&quot; Snake from a <a href=\"https://en.wikipedia.org/wiki/Virtual_camera_system#Third-person_view\" title=\"Virtual camera system\">third-person perspective</a> in an <a href=\"https://en.wikipedia.org/wiki/Open_world\" title=\"Open world\">open world</a> environment.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-3\">[1]</a></sup> The gameplay elements were largely unchanged from <em>Ground Zeroes</em>, meaning that players will have to sneak from several points in the game world, avoiding enemy guards, and remaining undetected.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-Bino-4\">[2]</a></sup> Included in Snake&#39;s repertoire are binoculars, maps, a variety of weapons, explosives, and stealth-based items such as cardboard boxes and decoys.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-Bino-4\">[2]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-5\">[3]</a></sup> Following one of the series traditions, <em>The Phantom Pain</em> encourages players to progress through the game without killing, using non-lethal weapons such as tranquilizer darts to subdue enemies.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-6\">[4]</a></sup> Players may traverse the game world with vehicles such as jeeps and tanks, in addition to traveling on foot or on horseback, and as certain locations are mountainous,<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-7\">[5]</a></sup> occasionally, players can opt to go <a href=\"https://en.wikipedia.org/wiki/Rock_climbing\" title=\"Rock climbing\">rock climbing</a> as a shortcut.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-8\">[6]</a></sup> They may call for helicopter support against enemy soldiers or request airstrikes that can bomb the target area or change the current weather.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-companion-9\">[7]</a></sup> Snake can call on AI companions&mdash;including <a href=\"https://en.wikipedia.org/wiki/Quiet_(Metal_Gear)\" title=\"Quiet (Metal Gear)\">Quiet</a>, a silent female sniper with supernatural abilities; D-Horse, a horse capable of wearing armor and hiding Snake during travel; D-Walker, a manned, highly agile mobile weapons platform that can provide heavy weapons support; and D-Dog, a wolf pup raised and trained on the new Mother Base to assist him in the field.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-GS_MGSV-Wolf-10\">[8]</a></sup> The companions&#39; abilities and their effectiveness will depend on the player&#39;s relationship with them.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-companion-9\">[7]</a></sup>There is a large emphasis based on tactics in <em>The Phantom Pain</em>.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-11\">[9]</a></sup></p><p>As in <em>Peace Walker</em>, <em>The Phantom Pain</em> features a base-building system that allows players to develop weapons and items from their home base.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-12\">[10]</a></sup> Recruitment of enemy soldiers and <a href=\"https://en.wikipedia.org/wiki/Prisoner_of_war\" title=\"Prisoner of war\">prisoners</a> has also returned for this purpose, allowing the base to grow through organization. The player is given the option to access their base from their real-life smartphones and other devices via a companion app.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-demo-13\">[11]</a></sup> Unlike in <em>Peace Walker</em> where players can only see Mother Base from the air, they can control Snake as he explores the complex on foot. The <a href=\"https://en.wikipedia.org/wiki/Fulton_surface-to-air_recovery_system\" title=\"Fulton surface-to-air recovery system\">Fulton surface-to-air recovery system</a>, an item introduced into gameplay in <em>Peace Walker,</em> returns as well, with players able to transport captured soldiers and other objects such as animals and vehicles back to Mother Base.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-14\">[12]</a></sup> Money for upgrading Mother Base&#39;s defenses and technology can be collected from objects found all over the map, such as diamonds, shipping containers, and special blueprint boxes,<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-15\">[13]</a></sup> as well as sending recruited soldiers on combat missions around the world. The income is invested in upgrades to the appearance and abilities, weapons and equipment of Snake, his AI companions, and vehicles. For example, Snake&#39;s prosthetic arm can be modified with a taser, echolocation function, or remote controls that allow it to fly as a drone.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-16\">[14]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-17\">[15]</a></sup></p><p>Game design direction allows the player to choose in what order the story events take place by selecting missions in any order they like, and yet still &quot;understand the encompassing message by the end&quot;.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-Nyxus-18\">[16]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-19\">[17]</a></sup>T he enemy AI has improved in terms of situational awareness. If players frequently use particular weapons or tactics to subdue enemy soldiers, this will see the enemy increase in numbers and be outfitted with better equipment; for example, the frequent use of headshots will see enemy soldiers don metal helmets to make targeting the head harder.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-20\">[18]</a></sup></p><p>The game has a dynamic weather system and day-night cycle that runs in real-time.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-Gamespot-21\">[19]</a></sup> The cycle is able to be fast-forwarded when Snake lights a &quot;Phantom Cigar&quot;, a type of <a href=\"https://en.wikipedia.org/wiki/Electronic_cigarette\" title=\"Electronic cigarette\">electronic cigar</a>; a digital silver <a href=\"https://en.wikipedia.org/wiki/Seiko\" title=\"Seiko\">Seiko</a> <a href=\"https://en.wikipedia.org/wiki/Watch\" title=\"Watch\">watch</a> panel appears on screen to denote time.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-22\">[20]</a></sup> The passage of time enables players to analyze the movement of marked enemy forces in the area, such as shifts in sentry patrols and individual patrol routes. Weather effects, such as sandstorms and rain, affects the gameplay environment by reducing visibility or masking the sound of footsteps.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-africa-23\">[21]</a></sup></p><p>Kojima spoke about the restrictive nature of previous <em>Metal Gear Solid</em> titles, saying that they &quot;set [the player] on one rail to get from point A to point B, with a certain amount of freedom between&quot;. In stark contrast, <em>The Phantom Pain</em> offers players new ways of traversal and sneaking methods, such as taking a motorcycle, plane or helicopter to the mission area (however, usage of the former two vehicles was later dropped during development). Players are able to traverse the game world or deploy directly to landing zones that allow for different approaches. A video published after the E3 2015 convention showcased this, with the same mission played four times in a number of different ways: with the player opting for stealth, launching a direct assault via helicopter gunship, attempting to assassinate a target with a sniper rifle, and smuggling an explosive device into an enemy base by way of an unsuspecting patrol vehicle crew.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-24\">[22]</a></sup> The player&#39;s actions affect the wider game world; for example, sabotaging a radar installation will open up new entry points.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-25\">[23]</a></sup> The playable world in <em>The Phantom Pain</em> is two hundred times larger than that of <em>Ground Zeroes</em>, featuring a variety of climate conditions and environments. This allows the players to freely roam the map while proceeding to either story missions or sidequests, as in other games with <a href=\"https://en.wikipedia.org/wiki/Nonlinear_gameplay\" title=\"Nonlinear gameplay\">nonlinear gameplay</a>. In addition, players who have previously played <em>Ground Zeroes</em> are able to import save data into <em>The Phantom Pain</em> and gain special perks.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-Famitsu_feature-26\">[24]</a></sup></p><h3><span style=\"font-size: 24px;\">Multiplayer</span></h3><p><em>Metal Gear Solid V: The Phantom Pain</em> includes two multiplayer modes: first, the new <em><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Online\" title=\"Metal Gear Online\">Metal Gear Online</a></em>, developed by Kojima Productions&#39; newly formed Los Angeles division (now known as Konami Los Angeles Studio).<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-27\">[25]</a></sup> The first footage for multiplayer was revealed in December 2014.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-28\">[26]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-polygon-kojimaremoved-29\">[27]</a></sup> While originally set for launch alongside the release of <em>The Phantom Pain</em>, <em>Metal Gear Online</em> was postponed to October 6 for consoles and January 2016 for Microsoft Windows.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-30\">[28]</a></sup></p><p>The second multiplayer mode is an extension of the Mother Base base-building feature. Players are able to expand their operations to include &quot;Forward Operating Bases&quot; which can be used to generate resources and income for the single-player campaign.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-GIFOBMGO3-31\">[29]</a></sup> These facilities can be attacked by other players, making a player-versus-player mode available whereby the attacking team attempts to steal resources and/or soldiers and the defending team tries to protect the Forward Operating Base from the intruder. Defenders are able to call on their friends to aid in the defense, especially if their Forward Operating Base is attacked during a story mission.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-32\">[30]</a></sup> Players are able to customize the security, staffing, and layout of their Forward Operating Bases, allowing for a large number of compound configurations. Following the success or failure of the intrusion, the location of the attacking player&#39;s Forward Operating Base is revealed to the defending player;<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-33\">[31]</a></sup> however, defending players can only launch a retaliatory strike if the attacker was discovered during their infiltration. The Forward Operating Base feature is an entirely separate multiplayer experience to <em>Metal Gear Online</em><sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-GIFOBMGO3-31\">[29]</a></sup> and is also needed to increase the number of combat units the player can deploy.</p><p>During development, Kojima Productions and Konami attracted criticism for their decision to include <a href=\"https://en.wikipedia.org/wiki/Microtransactions\" title=\"Microtransactions\">microtransactions</a>; a system that allows players to pay for access to content in the game. However, a spokesperson for Kojima Productions confirmed that the system was included to benefit players who may not have the time to complete the game, given its scale, and that no content would be available exclusively through microtransactions.<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-34\">[32]</a></sup> Further controversy emerged following the publication of an early review claiming that the Forward Operating Base mode was behind a paywall,<sup><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_The_Phantom_Pain#cite_note-GSpot-35\">[33]</a></sup> which Konami refuted saying that microtransactions acted as an <a href=\"https://en.wikipedia.org/wiki/Pay_to_win\" title=\"Pay to win\">accelerator</a> rather than a paywall.</p><p><br></p><h3 class=\"headline\">Synopsis</h3><p><br></p><p>In 1984, nine years after the events of&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Metal_Gear_Solid_V:_Ground_Zeroes\" title=\"Metal Gear Solid V: Ground Zeroes\">Metal Gear Solid V: Ground Zeroes</a></em>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Big_Boss_(Metal_Gear)\" title=\"Big Boss (Metal Gear)\">Big Boss</a> awakens from a coma in a hospital in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cyprus\" title=\"Cyprus\">Cyprus</a>.&nbsp;<a href=\"https://en.wikipedia.org/wiki/Quiet_(Metal_Gear)\" title=\"Quiet (Metal Gear)\">Quiet</a>, a Cipher assassin, tries to kill him, but Big Boss is rescued by a heavily bandaged man called Ishmael. The pair escapes the hospital while evading pursuit from Cipher&#39;s soldiers and two superhumans,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Psycho_Mantis\" title=\"Psycho Mantis\">Tretij Rebenok, the &quot;Third Child&quot;</a> and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Colonel_Volgin\" title=\"Colonel Volgin\">the &quot;Man on Fire&quot;</a>. Although Big Boss loses sight of Ishmael, he is recovered by his ally&nbsp;<a href=\"https://en.wikipedia.org/wiki/Revolver_Ocelot\" title=\"Revolver Ocelot\">Revolver Ocelot</a> and brought aboard&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Diamond_Dogs\" title=\"List of characters in the Metal Gear series\">Diamond Dogs</a>, a new mercenary group founded by&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Master_Miller\" title=\"List of characters in the Metal Gear series\">Kazuhira Miller</a> on an offshore platform near&nbsp;<a href=\"https://en.wikipedia.org/wiki/Seychelles\" title=\"Seychelles\">Seychelles</a>.</p><p>Big Boss adopts the code name &quot;<a href=\"https://en.wikipedia.org/wiki/Venom_Snake\" title=\"Venom Snake\">Venom Snake</a>&quot; and begins searching for Cipher. During his journey, Snake becomes involved in the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Soviet%E2%80%93Afghan_War\" title=\"Soviet–Afghan War\">Soviet-Afghan</a> and the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Angolan_Civil_War\" title=\"Angolan Civil War\">Angolan Civil</a> Wars, and he recruits Quiet, who no longer speaks and has gained superhuman abilities; scientist&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Huey\" title=\"List of characters in the Metal Gear series\">Dr. Huey Emmerich</a>; and&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Code_Talker\" title=\"List of characters in the Metal Gear series\">Code Talker</a>, a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Navajo_people\" title=\"Navajo people\">Navajo</a> expert on parasites forced to work for Cipher. Snake also ends up capturing&nbsp;<a href=\"https://en.wikipedia.org/wiki/Liquid_Snake\" title=\"Liquid Snake\">Eli</a>, a British child believed to be&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Les_Enfants_Terrible\" title=\"List of characters in the Metal Gear series\">a clone of Snake</a>, who leads a band of child soldiers is brought to the base after an operation. Though there is speculation into whether or not he is Big Boss&#39; son, a DNA test confirms that Venom Snake and Eli are not genetically related.</p><p>Snake learns that Cipher&#39;s leader Major Zero was usurped and&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#XOF\" title=\"List of characters in the Metal Gear series\">XOF</a>, a rogue faction of Cipher, was responsible for destroying MSF. XOF&#39;s leader&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Skull_Face\" title=\"List of characters in the Metal Gear series\">Skull Face</a> considers Cipher&#39;s plan to unite the world for peace as the same as making it culturally American, obliterating other cultures. To avoid this, he intends to release a unique parasite that kills anyone who speaks English. A modified parasite was used to give Quiet and Skull Face&#39;s elite soldiers, the Skulls, their unusual abilities. After releasing the English strain parasite, Skull Face plans to make nuclear weapons available to as many groups as he can, believing that&nbsp;<a href=\"https://en.wikipedia.org/wiki/Deterrence_theory\" title=\"Deterrence theory\">nuclear deterrence</a> will stop the weapons actually being used, attaining world peace while still protecting the integrity of each culture. However, he will secretly retain remote control of the weapons. Skull Face intends to use the threat of the latest Metal Gear system, known as ST-84 &quot;Sahelanthropus&quot;, to make nuclear weapons desirable again, but as he cannot get it to function, he is dependent on the Third Child&#39;s psychic abilities to manipulate it.</p><p>During a test, the Third Child turns against Skull Face, having Sahelanthropus seriously wound him and crush the Man on Fire. Although Snake defeats the Metal Gear, he is only able to recover one of Skull Face&#39;s three parasite vials; one goes missing and the other is taken by the Third Child and given to Eli. Skull Face is left to die by Snake and Miller but Huey executes him. The Diamond Dogs return to their base with Sahelanthropus. Following their return, Eli, the Third Child, and the child soldiers steal Sahelanthropus and flee the base. It transpires that the Third Child was not consciously working for Skull Face, but his psychic powers enthralled him to the will of the most vengeful person nearby, meaning Sahelanthropus&#39; attack was instigated by Eli.</p><p>An epidemic of parasites occurs on base forcing Snake to personally kill many of his own men to contain it. To honor them, he has their cremated remains turned into diamonds to carry into battle. Huey is accused of causing the epidemic while attempting to mutate the parasites to sell as weapons. Alongside suspicion of his role in MSF&#39;s destruction, and evidence that he murdered his wife&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_characters_in_the_Metal_Gear_series#Strangelove\" title=\"List of characters in the Metal Gear series\">Dr. Strangelove</a> while arguing over using&nbsp;<a href=\"https://en.wikipedia.org/wiki/Otacon\" title=\"Otacon\">their son</a> in experiments, Snake exiles him from Diamond Dogs. Following this event, Quiet disappears in Afghanistan. Code Talker reveals that Quiet was infected with the English strain parasite with the intention of joining Diamond Dogs in order to spread it, but her allegiance shifted to Snake and so she remained silent to prevent an outbreak. Huey&#39;s mutation of the parasite convinced Quiet that she could not guarantee the safety of Diamond Dogs. Snake finds her and helps her fight off the Soviet army. They defeat the wave but as another one approaches they are forced to hide in a sandstorm. Quiet is then forced to speak to summon help when Snake is bitten by a venomous snake. She flees to avoid causing another epidemic.</p><p>It is later revealed that Venom Snake is not actually Big Boss but a loyal MSF medic caught in the same explosion that injured Ishmael, the real Big Boss. During his coma, the medic was transformed into a second Big Boss via&nbsp;<a href=\"https://en.wikipedia.org/wiki/Plastic_surgery\" title=\"Plastic surgery\">plastic surgery</a> and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hypnotherapy\" title=\"Hypnotherapy\">hypnotherapy</a> to serve as a decoy for the actual Big Boss while he wages a covert war against Cipher. Venom Snake goes on to set the events of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Metal_Gear_(video_game)\" title=\"Metal Gear (video game)\">Outer Heaven uprising</a> in motion and dies at the hands of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Solid_Snake\" title=\"\">Solid Snake</a>. The original Big Boss resurfaces during the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Metal_Gear_2:_Solid_Snake\" title=\"Metal Gear 2: Solid Snake\">Zanzibar Land disturbance</a>. Miller and Ocelot discuss Big Boss&#39; plans to create Outer Heaven. While Ocelot remains supportive, Miller is disgusted at his former ally&#39;s deception but agrees to continue assisting Venom Snake and Big Boss&#39; sons in hopes of contributing to the real Big Boss&#39; downfall.</p>', '2019-06-09 09:40:03', 1);
INSERT INTO `artikel` (`id_artikel`, `id_game`, `judul_artikel`, `konten_artikel`, `time_created`, `id_user`) VALUES
(3, 3, 'Sekiro__Shadows_Die_Twice', '<p><em><strong>Sekiro: Shadows Die Twice</strong></em> is an <a href=\"https://en.wikipedia.org/wiki/Action-adventure_video_game\" title=\"Action-adventure video game\">action-adventure video game</a> developed by <a href=\"https://en.wikipedia.org/wiki/FromSoftware\" title=\"FromSoftware\">FromSoftware</a> and published by <a href=\"https://en.wikipedia.org/wiki/Activision\" title=\"Activision\">Activision</a>. The game was released worldwide for <a href=\"https://en.wikipedia.org/wiki/Microsoft_Windows\" title=\"Microsoft Windows\">Microsoft Windows</a>, <a href=\"https://en.wikipedia.org/wiki/PlayStation_4\" title=\"PlayStation 4\">PlayStation 4</a>, and <a href=\"https://en.wikipedia.org/wiki/Xbox_One\" title=\"Xbox One\">Xbox One</a> on March 22, 2019. The game follows a <a href=\"https://en.wikipedia.org/wiki/Sengoku_period\" title=\"Sengoku period\">Sengoku period</a><a href=\"https://en.wikipedia.org/wiki/Shinobi\" title=\"Shinobi\">shinobi</a> known as Wolf as he attempts to take revenge on a <a href=\"https://en.wikipedia.org/wiki/Samurai\" title=\"Samurai\">samurai</a> clan who attacked him and kidnapped his lord. The game received universal acclaim from critics, who commonly compared and contrasted it to the <a href=\"https://en.wikipedia.org/wiki/Souls_(series)\" title=\"Souls (series)\"><em>Souls</em> series</a> of games also made by FromSoftware. While its high level of difficulty received some criticism, praise was directed toward its gameplay, story and setting. Within ten days of its release, the game had sold over two million copies worldwide.&nbsp;</p><p><br></p><h3 class=\"headline\">Gameplay</h3><p><em>Sekiro: Shadows Die Twice</em> is an&nbsp;<a href=\"https://en.wikipedia.org/wiki/Action-adventure_game\" title=\"Action-adventure game\">action-adventure game</a> played from a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Third-person_view\" title=\"Third-person view\">third-person view</a>.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-polygon_e3_2018-1\">[1]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-2\">[2]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-Engadget-4\">[4]</a></sup> Compared to&nbsp;<a href=\"https://en.wikipedia.org/wiki/FromSoftware\" title=\"FromSoftware\">FromSoftware&#39;</a>s own&nbsp;<a href=\"https://en.wikipedia.org/wiki/Souls_(series)\" title=\"Souls (series)\"><em>Souls</em> series</a>, the game features fewer&nbsp;<a href=\"https://en.wikipedia.org/wiki/Role-playing_video_game\" title=\"Role-playing video game\">role-playing</a> elements, lacking&nbsp;<a href=\"https://en.wikipedia.org/wiki/Character_creation\" title=\"Character creation\">character creation</a> and the ability to level up a variety of stats, as well as having no&nbsp;<a href=\"https://en.wikipedia.org/wiki/Multiplayer\" title=\"Multiplayer\">multiplayer</a> elements.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-Engadget-4\">[4]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-5\">[5]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-Variety-6\">[6]</a></sup> It does, however, include gear upgrading, a skill tree, and limited ability customization. Rather than attacking to whittle an enemy&#39;s&nbsp;<a href=\"https://en.wikipedia.org/wiki/Health_points\" title=\"Health points\">health points</a>, combat in&nbsp;<em>Sekiro</em> revolves around using a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Katana\" title=\"Katana\">katana</a> to attack their posture and balance instead, which eventually leads to an opening that allows for a single killing blow.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-7\">[7]</a></sup></p><p>The game also features <a href=\"https://en.wikipedia.org/wiki/Stealth_game\" title=\"Stealth game\">stealth</a> elements, allowing players to immediately eliminate some enemies if they can get in range undetected.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup> In addition, the player character has the ability to use various tools to assist with combat and exploration, such as a <a href=\"https://en.wikipedia.org/wiki/Grappling_hook\" title=\"Grappling hook\">grappling hook</a>.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup> If the player character <a href=\"https://en.wikipedia.org/wiki/Life_(gaming)\" title=\"Life (gaming)\">dies</a>, they have the option of being revived on the spot if they have resurrection power, which is restored by defeating enemies, instead of <a href=\"https://en.wikipedia.org/wiki/Respawning\" title=\"Respawning\">respawning</a> at earlier checkpoints.</p><p><br></p><h3 class=\"headline\">Plot</h3><p>In a re-imagined late&nbsp;<a href=\"https://en.wikipedia.org/wiki/16th_century\" title=\"16th century\">16th century</a> <a href=\"https://en.wikipedia.org/wiki/Sengoku_period\" title=\"Sengoku period\">Sengoku period</a> Japan, warlord Isshin Ashina staged a bloody coup and seized control of the land of Ashina from the Interior Ministry.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-polygon_e3_2018-1\">[1]</a></sup> During this time, a nameless orphan is adopted by the wandering shinobi named Ukonzaemon Usui, known to many as Owl, who named the boy Wolf and trained him in the ways of the shinobi. Two decades later, the Ashina clan is on the brink of collapse due to a combination of the now elderly Isshin having fallen ill and the clan&#39;s enemies steadily closing in from all sides. Desperate to save his clan, Isshin&#39;s grandson Genichiro sought the Divine Heir Kuro so he can use the boy&#39;s &quot;Dragon Heritage&quot; to create an immortal army. Wolf, now a full fledged shinobi and Kuro&#39;s personal bodyguard, loses his left arm while failing to stop Genichiro. As he received the dragon&rsquo;s blood from Kuro three years prior, Wolf survives his wounds and awakes in an abandoned temple. In the temple, he meets the Sculptor, a former shinobi named Sekijo who now carves Buddha statues, and Wolf finds that his missing arm has been replaced with the Shinobi Prosthetic, a sophisticated artificial arm that can wield a variety of gadgets and weaponry.<sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-GameplayPreview-3\">[3]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-engadget_e3_2018-8\">[8]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Sekiro:_Shadows_Die_Twice#cite_note-eurogamer_announce-9\">[9]</a></sup></p><p>With the Shinobi Prosthetic, Wolf assaults Ashina Castle and confronts Genichiro again, defeating him, although the latter is able to escape by drinking the Rejuvenating waters, which is a man-made replication of the dragon&rsquo;s blood. Despite having an opportunity to flee Ashina forever, Kuro instead decides to stay and perform the &quot;Immortal Severance&quot; ritual, which would remove his Dragon Heritage and prevent anybody else from fighting over him to obtain immortality. Wolf reluctantly agrees to help Kuro and sets out to the areas surrounding the castle to collect all of the necessary components of the ritual, including a special sword that can cut immortals known as the Mortal Blade. When Wolf returns, he encounters Owl, who was previously thought to have been killed three years ago. Owl reveals that he also seeks the Dragon Heritage from Kuro, and orders Wolf to renounce his loyalty to Kuro.</p><p>Wolf is then presented with the option to follow Owl and betray Kuro or to remain loyal to Kuro. If Wolf sides with Owl, he is forced to fight Emma, a doctor in service to Isshin, and Isshin himself. Upon defeating them, Wolf then stabs Owl in the back while Kuro in horror realizes Wolf has been corrupted by bloodlust and fallen down the path of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Asura_(Buddhism)\" title=\"Asura (Buddhism)\">Shura</a>. It is then stated that a demon roamed the lands for many years slaughtering many people. If Kuro is chosen Wolf fights and kills Owl. He then uses the items he has gathered to enter Fountainhead Palace. Wolf then enters the Divine Realm, where he fights the Divine Dragon to obtain its tears for Immortal Severance. Upon returning to Ashina Castle Wolf discovers that it has been attacked by the Interior Ministry and is informed by Emma that Kuro has fled through a secret escape passage. Wolf finds an injured Kuro and Genichiro, wielding a second Mortal Blade. Genichiro then challenges Wolf a final time. Upon his defeat, he sacrifices himself to bring Isshin, who recently died from his illness, back to life at the height of his power. Although Isshin is on Wolf and Kuro&#39;s side, he honors Genichiro&#39;s sacrifice and chooses to fight Wolf.</p><p>After defeating Isshin, the player can obtain three endings depending on what is given to Kuro. The standard ending is &quot;Immortal Severance&quot;. Wolf gives Kuro the dragon tears and severs his ties to the Divine Dragon. This process ends up killing Kuro, while Wolf becomes the next sculptor and ends his life as a shinobi. In the &quot;Purification&quot; ending Wolf manages to save Kuro at the cost of his own life. The final ending, &quot;Return,&quot; is obtained by helping the Divine Child of the Rejuvenating Waters complete a ritual to return the power of the Divine Dragon to its birthplace in the West. Kuro&#39;s body dies but his spirit is transferred into the Divine Child&#39;s heart. Wolf remains a shinobi and chooses to travel with the Divine Child on their westward journey.</p>', '2019-06-15 17:01:36', 1),
(4, 4, 'Devil_May_Cry_5', '<p><em><strong>Devil May Cry 5</strong></em><sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-1\">[a]</a></sup> is an <a href=\"https://en.wikipedia.org/wiki/Action-adventure_game\" title=\"Action-adventure game\">action-adventure</a> <a href=\"https://en.wikipedia.org/wiki/Hack_and_slash\" title=\"Hack and slash\">hack and slash</a> <a href=\"https://en.wikipedia.org/wiki/Video_game\" title=\"Video game\">video game</a> developed and published by <a href=\"https://en.wikipedia.org/wiki/Capcom\" title=\"Capcom\">Capcom</a>. It is the sixth installment in the franchise and the fifth installment of the mainline <em><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry\" title=\"Devil May Cry\">Devil May Cry</a></em> series, and was released for <a href=\"https://en.wikipedia.org/wiki/Microsoft_Windows\" title=\"Microsoft Windows\">Microsoft Windows</a>, <a href=\"https://en.wikipedia.org/wiki/PlayStation_4\" title=\"PlayStation 4\">PlayStation 4</a>, and <a href=\"https://en.wikipedia.org/wiki/Xbox_One\" title=\"Xbox One\">Xbox One</a> on March 8, 2019. The game takes place five years after <em><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_4\" title=\"Devil May Cry 4\">Devil May Cry 4</a></em> and follows <a href=\"https://en.wikipedia.org/wiki/Dante_(Devil_May_Cry)\" title=\"Dante (Devil May Cry)\">Dante</a>, <a href=\"https://en.wikipedia.org/wiki/Nero_(Devil_May_Cry)\" title=\"Nero (Devil May Cry)\">Nero</a> and a new protagonist named V as they attempt to stop the demon Urizen. <em>Devil May Cry 5</em> received positive reviews from critics with many lauding it as a return to form for the franchise and for revitalising the character-action genre of games. The game has sold over 2 million copies less than a month after its release.&nbsp;</p><p><br></p><h3 class=\"headline\">Gameplay</h3><p>The gameplay features the return of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dante_(Devil_May_Cry)\" title=\"Dante (Devil May Cry)\">Dante</a> and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Nero_(Devil_May_Cry)\" title=\"Nero (Devil May Cry)\">Nero</a> as playable characters, along with a new character,<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-e3-2018-2\">[1]</a></sup> named &quot;V&quot;.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-3\">[2]</a></sup> The gameplay is similar to the other titles in the&nbsp;<em>Devil May Cry</em> series, focusing on fast-paced &quot;stylish action&quot;. The player fights off hordes of demons with a variety of attacks and weapons and receives a style-rating in combat based on a number of factors, such as move variety, the length of a combo and dodging attacks. The music in the game changes based on the player&#39;s performance in combat.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-4\">[3]</a></sup></p><p>Nero is equipped with his Red Queen sword, his Blue Rose double-barreled revolver, and an assortment of new robotic arms called Devil Breakers, with a variety of functions such as grabbing enemies from a distance or stopping time to freeze an enemy in place.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-capcom-unity-5\">[4]</a></sup> Along with his signature blade Rebellion and the demonic sword Sparda, Dante was shown using two new Devil Arms, a pair of buzzsaw-like weapons that combine into a motorcycle called Cavaliere, and a set of fiery gauntlets and boots called Balrog. In addition, Dante also wields a stronger version of the <em>Cerberus</em>nunchaku introduced in <em>Devil May Cry 3</em>. He also wears the Dr. Faust, a hat that requires red orbs to attack and it is a risk-award weapon depending on the player&#39;s actions. Both Kalina Ann from Devil May Cry 3 and Kalina Ann 2 also can be used by Dante.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-6\">[5]</a></sup> The third playable character, V, who wields a book and a silver cane, uses three demons based on enemies from the first game to fight which includes Griffon, an eagle that uses ranged lightning based attacks, Shadow, a panther that forms blades, spikes and portals out of its body, and Nightmare, a large golem which V enters a Devil Trigger-like state, which turns his hair white, to summon, which uses a combination of melee attacks and laser beams. Once the enemy turns light purple, V uses his cane to finish the battle.</p><p><br></p><h3 class=\"headline\">Plot</h3><p>Five years after the events of&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_4\" title=\"Devil May Cry 4\">Devil May Cry 4</a></em>, Nero has set up his own demon hunting agency based out of a van adorned with a neon &quot;Devil May Cry&quot; sign Dante gave him with support from Kyrie and his engineer, Nico. On April 30, Nero encounters a dying demon who rips off his Devil Bringer arm and uses the Devil Arm Yamato to open a portal to escape in. A few days later, a man known as &quot;V&quot; comes to the Devil May Cry office to hire Dante, Lady, and Trish to kill a certain returning demon.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-7\">[6]</a></sup> The group arrives in Red Grave City on May 16, crossing paths with Nero as they share the same target: A demon named Urizen who has planted a demonic tree called Qliphoth in the city, which is killing people for their blood. The assembled group attempts to attack Urizen together, but the demon overpowers them all; Dante is ultimately defeated and ejected from the Qliphoth with his sword Rebellion shattered, Lady and Trish are captured and turned into cores for the demons Artemis and Cavaliere Angelo, and V and Nero escape to safety.</p><p>A month later on June 15, Nero returns to Red Grave after being outfitted with the &quot;Devil Breaker&quot; prosthetic arm Nico made for him.<sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-8\">[7]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_5#cite_note-:0-9\">[8]</a></sup> Nero meets up with V after besting the demon Goliath, who is seeking Qliphoth for its fruit - born of condensed human blood - which makes whomever consumes it the king of the Underworld. As the pair destroy the Qliphoth&#39;s roots while searching for Dante, Nero defeats Artemis to rescue Lady while V slays the demon-parasite Nidhogg, later aiding Nero against the root construct Gilgamesh. V rejoins Nero after learning another demon, Malphas, is also after the Qliphoth&#39;s fruit while seeking the Devil Sword Sparda in fear of its namesake&#39;s descendants acquiring it. V splits off to find the Sparda first and discovers it along with a hibernating Dante, whose presence was being hidden by the sword. V awakens Dante by threatening to stab him with the Sparda.</p><p>After learning what occurred during his month-long coma, Dante fights his way to Urizen and frees Trish from Cavaliere Angelo along the way. V then reveals to Trish that Urizen is actually the demon-side of Dante&#39;s brother&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vergil_(Devil_May_Cry)\" title=\"Vergil (Devil May Cry)\">Vergil</a>, who used Yamato&#39;s power to separate his demon and human halves - the latter of which manifested as V himself, whose body is reaching its limit. Dante, having heard the full story when first meeting V, deduces Rebellion&#39;s power is the opposite - the ability to unify something - as he travels the remnant of his childhood home. Realizing why his father gave him Rebellion, Dante stabs himself with the broken sword&#39;s hilt to absorb the Sparda into himself, acquiring his Sin Devil Trigger form along with his own Devil Sword Dante. Nero attempts to confront Urizen again but is overpowered once more, and Dante arrives just in time to save him. Dante gains the upper hand with his new powers, but Urizen takes his leave once the Qliphoth begins to bear fruit. While Dante is conflicted on having Nero join them, an ailing V insists on it and the three split up to find their own way to Urizen. Dante arrives first and defeats King Cerberus before facing Urizen, having now eaten Qliphoth&#39;s fruit. Meanwhile, after saving V from Malphas, Nero learns of Dante&#39;s history with Vergil. He and V reach Dante just as he defeats Urizen, but a dying V intervenes and merges with Urizen before Dante can finish him, reviving Vergil once more.</p><p>Dante attacks the newly-revived Vergil, who overpowers him quickly before opening a portal to the top of the Qliphoth tree, telling Dante to recover to his full strength before they battle again. Nero insists on going after Vergil himself, seeking answers and revenge for losing his arm. Dante, having known that he was the young demon hunter&#39;s uncle since they first met on Fortuna, finally reveals to Nero that he is Vergil&#39;s son and sends him away to keep his hands clean from killing his own father. Nero, Nico, Lady, and Trish escape the slowly-expanding Qliphoth but, despite the group urging him not to confront his father, an angry and confused Nero goes back to chase after Vergil.</p><p>Dante fights his way through V&#39;s now-independent familiars - revealed to be embodiments of Vergil&#39;s memories from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Devil_May_Cry_(video_game)\" title=\"Devil May Cry (video game)\">his time as Nelo Angelo</a> - and they elect to die by Dante&#39;s hand as a way of lessening Vergil&#39;s trauma. Dante soon reaches Vergil and the sons of Sparda engage in yet another duel with each other, where Dante tells Vergil that Nero is his son. Following a call with Kyrie, Nero expresses his conflicted emotions at having found his family and not having the strength to save Kyrie&#39;s brother Credo years ago. Kyrie convinces Nero to stick to his instincts, and the young demon hunter resolves to save both his father and uncle from killing each other, finally regaining his Devil Bringer powers. Nero arrives just in time to stop Dante and Vergil as their fight reaches its climax, fully awakening his Devil Trigger while regenerating his right arm. Vergil mocks his son&#39;s resolve of a peaceful solution as he decides to fight him instead, but finds himself pushed back until he begrudgingly concedes. Giving Nero V&#39;s book to remember him by, Vergil joins Dante in a one-way trip to the Underworld to cut the Qliphoth down and seal the portal before it rips Red Grave City apart.</p><p>As the Qliphoth falls, Nero leaves Red Grave City alongside Nico while taking out any straggling demons along the way. Weeks later, Trish and Lady are hired for a new job by Morrison, who Dante left in charge of his office before the events at Red Grave City. In the Underworld, Dante and Vergil duel each-other endlessly - due to being equally matched and the constant interference from demons out to kill them - though their rivalry appears to be on more friendly terms. The game ends as Dante and Vergil fight against a demon horde with Dante saying his catchphrase &quot;Jackpot!&quot;, much to Vergil&#39;s annoyance.</p>', '2019-06-15 17:04:00', 1),
(6, 6, 'Death_Stranding', '', '2019-06-15 22:22:02', 1),
(7, 7, 'Super_Smash_Bros._Ultimate', '', '2019-06-15 22:23:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id_developer` int(11) NOT NULL,
  `nama_developer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id_developer`, `nama_developer`) VALUES
(1, 'Capcom'),
(2, 'Square Enix'),
(3, 'Nintendo'),
(4, 'Konami'),
(5, 'FromSoftware');

-- --------------------------------------------------------

--
-- Table structure for table `edit_artikel_logs`
--

CREATE TABLE `edit_artikel_logs` (
  `id_log` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prev_konten` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id_game` int(11) NOT NULL,
  `judul_game` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `game_img` varchar(45) DEFAULT NULL,
  `id_developer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id_game`, `judul_game`, `release_date`, `game_img`, `id_developer`) VALUES
(1, 'Final Fantasy VII', '1997-01-31', 'Final_Fantasy_VII.jpg', 2),
(2, 'Metal Gear Solid V', '2015-10-01', 'Metal_Gear_Solid_V.jpg', 4),
(3, 'Sekiro: Shadows Die Twice', '2019-03-22', 'Sekiro__Shadows_Die_Twice.jpg', 2),
(4, 'Devil May Cry 5', '2019-03-08', 'Devil_May_Cry_5.jpg', 1),
(6, 'Death Stranding', '2019-10-08', 'Death_Stranding.png', 2),
(7, 'Super Smash Bros. Ultimate', '2018-07-12', 'Super_Smash_Bros__Ultimate.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `game_genres`
--

CREATE TABLE `game_genres` (
  `id_game` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_genres`
--

INSERT INTO `game_genres` (`id_game`, `id_genre`) VALUES
(1, 2),
(1, 5),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `game_platforms`
--

CREATE TABLE `game_platforms` (
  `id_game` int(11) NOT NULL,
  `id_platform` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_platforms`
--

INSERT INTO `game_platforms` (`id_game`, `id_platform`) VALUES
(1, 1),
(1, 2),
(1, 12),
(1, 13),
(2, 1),
(2, 4),
(2, 5),
(2, 8),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id_genre`, `nama_genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Fighting'),
(4, 'FPS'),
(5, 'RPG'),
(6, 'Racing'),
(7, 'MMORPG'),
(8, 'Sports'),
(9, 'Simulator'),
(10, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` varchar(500) NOT NULL,
  `time_komentar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `time_komentar`, `id_artikel`, `id_user`) VALUES
(1, 'Nice', '2019-06-13 16:58:00', 1, 2),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat molestiae minus sint repudiandae ducimus eaque inventore velit dolores quis eveniet tempora officiis, sequi sed voluptas. Esse eum architecto sequi quia?', '2019-06-13 16:58:00', 1, 3),
(3, 'Test', '2019-06-13 16:58:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id_platform` int(11) NOT NULL,
  `nama_platform` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `jenis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id_platform`, `nama_platform`, `company`, `jenis`) VALUES
(1, 'Windows PC', 'Microsoft', 'PC'),
(2, 'Playstation X', 'Sony', 'Console'),
(3, 'Playstation 2', 'Sony', 'Console'),
(4, 'Playstation 3', 'Sony', 'Console'),
(5, 'Playstation 4', 'Sony', 'Console'),
(6, 'PSP', 'Sony', 'Handheld'),
(7, 'Xbox', 'Microsoft', 'Console'),
(8, 'Xbox 360', 'Microsoft', 'Console'),
(9, 'Xbox One', 'Microsoft', 'Console'),
(10, 'Wii U', 'Nintendo', 'Console'),
(11, 'Nintendo Switch', 'Nintendo', 'Handheld'),
(12, 'Android', 'Google', 'Mobile'),
(13, 'IOS', 'Apple', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `time_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama`, `profile_pic`, `time_created`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Administrator', 'admin.jpg', '2019-06-08 17:28:46'),
(2, 'user1', 'user123', 'user1@gmail.com', 'User 1', 'user1.jpg', '2019-06-08 17:28:46'),
(3, 'john', 'john', 'john@hotmail.com', 'John Wick', 'john.jpg', '2019-06-09 09:32:44'),
(4, 'aldianfn', 'aldianfn', 'aldian@gmail.com', 'Aldian FN', 'aldian.jpg', '2019-06-09 09:32:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_user1_idx` (`id_user`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD UNIQUE KEY `judul_artikel_UNIQUE` (`judul_artikel`),
  ADD KEY `fk_konten_games1_idx` (`id_game`),
  ADD KEY `fk_artikel_user1_idx` (`id_user`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id_developer`);

--
-- Indexes for table `edit_artikel_logs`
--
ALTER TABLE `edit_artikel_logs`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `fk_artikel_has_user_user1_idx` (`id_user`),
  ADD KEY `fk_artikel_has_user_artikel1_idx` (`id_artikel`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`),
  ADD UNIQUE KEY `judul_game_UNIQUE` (`judul_game`),
  ADD KEY `fk_games_developers1_idx` (`id_developer`);

--
-- Indexes for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD PRIMARY KEY (`id_game`,`id_genre`),
  ADD KEY `fk_games_has_genres_genres1_idx` (`id_genre`),
  ADD KEY `fk_games_has_genres_games1_idx` (`id_game`);

--
-- Indexes for table `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD PRIMARY KEY (`id_game`,`id_platform`),
  ADD KEY `fk_games_has_platforms_platforms1_idx` (`id_platform`),
  ADD KEY `fk_games_has_platforms_games1_idx` (`id_game`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_konten_idx` (`id_artikel`),
  ADD KEY `fk_komentar_viewer_idx` (`id_user`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id_platform`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id_developer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `edit_artikel_logs`
--
ALTER TABLE `edit_artikel_logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id_platform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_artikel_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `edit_artikel_logs`
--
ALTER TABLE `edit_artikel_logs`
  ADD CONSTRAINT `fk_artikel_has_user_artikel1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_artikel_has_user_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `fk_games_developers1` FOREIGN KEY (`id_developer`) REFERENCES `developers` (`id_developer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD CONSTRAINT `fk_games_has_genres_games1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games_has_genres_genres1` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD CONSTRAINT `fk_games_has_platforms_games1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games_has_platforms_platforms1` FOREIGN KEY (`id_platform`) REFERENCES `platforms` (`id_platform`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_viewer` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_konten` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
