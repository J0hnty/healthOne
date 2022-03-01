-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 mrt 2022 om 16:00
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `picture`, `description`) VALUES
(2, 'roeitrainer', '/img/roeitrainer.jpg', 'ja dit is stom niet doen'),
(3, 'crosstrainer', '/img/crosstrainer.jpg\n', 'Een crosstrainer is een fitnessapparaat waarmee je jouw hele lichaam traint. Je maakt namelijk een beweging met zowel je benen als je armen. Daarnaast train je ook de spieren in je core (buik en onderrug), borst, rug en schouders. Zowel in sportscholen als bij thuisgebruik zijn crosstrainers al geruime tijd een van de populairste fitnessapparaten.'),
(4, 'hometrainer', '/img/hometrainer.jpg', 'is net fietsen maar dan zonder wind en je kan zelf op bijvoorbeeld muziek je tempo en zwaarheid bepalen.'),
(5, 'loopband', '/img/loopband.jpg', 'lekker lopen niet echt veel meer.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `openingstijden`
--

CREATE TABLE `openingstijden` (
  `id` int(10) NOT NULL,
  `dag` varchar(255) NOT NULL,
  `openingsTijd` varchar(255) NOT NULL,
  `sluitingsTijd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `openingstijden`
--

INSERT INTO `openingstijden` (`id`, `dag`, `openingsTijd`, `sluitingsTijd`) VALUES
(1, 'Maandag', '7:00', '20:00'),
(2, 'Dinsdag', '8:00', '20:00'),
(3, 'Woensdag', '7:00', '20:00'),
(4, 'Donderdag', '8:00', '20:00'),
(5, 'Vrijdag', '7:00', '20:30'),
(6, 'Zaterdag', '8:00', '13:00'),
(7, 'Zondag', '8:00', '13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `serialnumber` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `color` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `serialnumber`, `description`, `picture`, `color`, `brand`, `category_id`) VALUES
(1, 'Bowflex Max Trainer M3', 'EU92FNIR1', 'Elke dag een uur op de crosstrainer, daar heb je natuurlijk geen tijd voor. Met de Bowflex Max Trainer M3 verbrand je in 14 minuten twee keer zoveel calorieën als op een normale crosstrainer. De trainingen zijn gebaseerd op het principe van interval: periodes van hoge intensiteit gevolgd door rust, zodat je ook even kunt bijkomen. Het toestel heeft 8 weerstandniveaus waartussen je snel schakelt via de handgrepen. Zo haal je elke training het maximale uit jezelf. Verbind de Max Trainer M3 via bluetooth met de Max Trainer app om jouw resultaten bij te houden en online trainingen te volgen.', '/img/cr1.jpg', 'zwart', 'Bowflex', 3),
(2, 'LifeSpan Fitness E5i+', 'EU92FNIR4', 'Train als nooit tevoren met de Lifespan E5i+ Elliptische Crosstrainer. Met maar liefst 20 weerstandsniveaus en 21 trainingsprogramma’s raak je met deze crosstrainer nooit uitgetraind. Ga voor een hartslaggestuurde training en train in het voor jou optimale hartslagbereik, om optimaal je trainingsdoelen te bereiken. Of kies voor een van 17 voorgeïnstalleerde trainingsprogramma’s, waaronder vijf afslankprogramma’s, vijf ‘Healthy Living’ programma’s en zeven sporttrainings-programma’s. Vind je geen trainingsprogramma dat bij jouw training past? Geen probleem. Je kan ook gewoon je eigen trainingsschema samenstellen met een van de twee manuele user-programma’s. De E5i wordt geleverd inclusief de LifeSpan Bluetooth 4.0/ANT+ Hartslagmeter met borstband. Door tijdens het trainen je hartslag te meten weet je zeker dat je in het voor jou juiste hartslagbereik traint. Hierdoor kan je veilig trainen en effectief afslanken en je conditie verbeteren.', '/img/cr2.jpg', 'zwart', 'LifeSpan', 3),
(3, 'Bowflex Max Trainer M8i', 'EU92FNIR5', 'De Bowflex® Max Trainer® M8i is het nieuwe topmodel HIIT machines en het begin van een nieuwe revolutie op het gebied van fitness. De Max Trainer M8 is de opvolger van de Max Trainer M7i die met meer dan 1500 online recensies, waarvan meer dan 1200 de maximale score, één van de best verkochte fitnessapparaten voor thuisgebruik wereldwijd is. Met verbeterde LCD/LED schermen, multigrip hendels, aerobe grepen met zowel burn rate als weerstand verstel mogelijkheden, 20 weerstandsniveaus en een hoogwaardig mediahouder voor smartphone of tablet. De unieke cockpit laat je constant zien hoeveel calorieën je op dat moment verbrandt door middel van een toerenteller. Behalve efficiënt ook erg uitdagend om vol te houden. De Max Trainer M8i is voorzien van slimme software. Elke training die je aflegt zorgt ervoor dat de Max Trainer meer inzicht krijgt in je conditie. Op basis van deze trainingsdata zal de Max Trainer je steeds een stapje meer uitdaging geven zodat je continu het maximale uit jezelf haalt voor maximale prestaties.', '/img/cr3.jpg', 'grijs', 'Bowflex', 3),
(4, 'Finnlo LOXON XTR III', 'EU92FNIR6', 'Werk aan uw gezondheid met de compleet vernieuwde Finnlo LOXON XTR III klasse HA ergometer. Premium fitnessapparatuur voor een ambitieuze cardiotraining: inductie remsysteem, 20 kg vliegwielmassa, 16 cm afstand tussen de voetpedalen voor een optimale lichaamshouding, 8 trainingsprogramma\'s en 3 hartslag gestuurde programma\'s.\nVoer een effectieve cardio training uit in uw eigen huis met de Finnlo LOXON XTR III ergometer. De ongelooflijk accurate HA klasse ergometer weerstandsysteem is perfect om optimaal in uw gezondheid te investeren. Verbeter uw uithoudingsvermogen en geef uw bloedsomloop een flinke boost door de dynamische beweging op de LOXON XTR. Activeer de spieren in uw bovenlichaam door beide armen te bewegen waardoor uw meer calorieën verbrandt – perfect voor gewichtsverlies en vetverbranding. Tevens worden de spieren versterkt en werkt u aan uw uiterlijk.', '/img/cr4.jpg', 'grijs', 'Finnlo', 3),
(5, 'Focus Fitness Fox 3 iPlus', 'EU92FNIR7', 'De Focus Fitness Fox 3 iPlus is de ideale crosstrainer voor de thuissporter. De Fox 3 iPlus is niet alleen stabiel en sterk, maar ook nog eens geruisloos. Naast een vliegwiel van 7 kg en verstelbare voetpedalen is de Fox 3 iPlus voorzien van de nieuwste technieken. Denk hierbij aan de ingebouwde Bluetooth functie waarmee de computer van de crosstrainer contact maakt met je tablet of smartphone. Hierdoor neemt je tablet of smartphone de functie van trainingscomputer over en kun je met zeer interessante app’s interactief trainen.', '/img/cr5.jpg', 'zwart', 'Focus Fitness', 3),
(6, 'Focus Fitness Fox 5', 'EU92FNIR8', 'De crosstrainer Fox 5 is dankzij de zeer hoge kwaliteit en betaalbare prijs niet voor niets ons bestverkochte en best beoordeelde model.\r\nMede dankzij het vliegwiel van 10 kg zorgt de Fox 5 ervoor dat je altijd op een natuurlijke en soepele manier kunt trainen. Of je de Fox 5 gebruikt voor revalidatie, in beweging wilt blijven of er intensief gebruik van wilt maken. Deze crosstrainer is geschikt voor iedereen! En dat blijkt: in juni 2017 heeft de Focus Fitness Fox 5 crosstrainer een Kieskeurig Review Award gewonnen dankzij de positieve reviews van consumenten!', '/img/cr6.jpg', 'zwart', 'Focus Fitness', 3),
(8, 'Tunturi FitRow 50', 'EU93FNIR1', 'Werken aan je conditie of simpelweg fit blijven? Dan is de FitRow 50 een geschikte roeitrainer voor jou. De roeitrainer heeft 17 trainingsprogramma\'s, waarmee je elke training uitdagend maakt. Het apparaat heeft ook 1 hartslaggerichtprogramma. Zo train je eenvoudig gericht op een doel om af te vallen of conditie te verhogen. Niet genoeg uitdaging? Maak dan ook gebruik van 1 van de 16 weerstandsniveaus om je trainingen te verzwaren. Na de training berg je de roeier gemakkelijk op in de hoek van de ruimte. Het apparaat is namelijk inklapbaar.', '/img/rt2.jpeg', 'zwart', 'Tunturi', 2),
(9, 'Flow Fitness Como Water W', 'EU93FNIR2', 'Met de Flow Fitness Como Water W train je je hele lichaam met een realistische roeitraining. Dankzij de hoge bouwkwaliteit is het apparaat tot 6 uur per dag te gebruiken, wat hem geschikt maakt voor het hele gezin of een duurtraining. Kies uit één van de 2 vooraf ingestelde trainingsprogramma\'s om jezelf uit te dagen, of start je eigen training. Omdat de roeitrainer op waterweerstand werkt, voelt de training realistisch aan. Ook is de weerstand oneindig te verzwaren, want hoe harder je roeit hoe zwaarder het wordt. Op het ingebouwde lcd scherm zie je je roeisnelheid, wattage, afgelegde afstand, calorieverbruik en hartslag. Na gebruik klap je achterkant van de Como Water W op en rol je hem naar de hoek van de kamer om ruimte te besparen.', '/img/rt3.jpeg', 'zwart', 'Flow', 2),
(10, 'Tunturi FitRun 70i', 'EU93FNIR3', 'Als je geen zin hebt om buiten een rondje te lopen, gebruik je de Tunturi FitRun 70i. De loopband heeft 14 programma\'s die allemaal gebaseerd zijn op intervaltraining. Wanneer je nog meer trainingsmogelijkheden wil, download je de FitShow app op je telefoon of tablet. Met een snelheid tot 20 km/u weet je zeker dat je een goede snelheid kan halen voor je sprintjes. Op het display zie je de tijd, afstand en geschatte calorie verbranding. Wil je liever een filmpje kijken tijdens het lopen? Dankzij de tablethouder kun je tijdens het lopen eenvoudig dingen op je tablet bekijken. Heb je niet veel ruimte in je kamer? Na de training klap je de loopband eenvoudig in.', '/img/lb1.jpeg', 'zwart', 'Tunturi', 5),
(11, 'Flow Fitness DTM 400i', 'EU93FNIR4', 'Houd thuis je conditie op peil met de Flow Fitness DTM400i. Verbind de loopband via bluetooth met de Fitshow app en krijg extra trainingsmogelijkheden en motivatie. Dankzij de maximum snelheid van 14 kilometer per uur krijg je voldoende uitdaging. Verander tijdens de training eenvoudig de snelheid of de hellingshoek via het overzichtelijke scherm. Na gebruik schuif je hem gemakkelijk onder je bed, want hij is inklapbaar en smaller dan standaard loopbanden. Om de DTM 400i in elkaar te zetten heb je niet meer dan 15 minuten nodig. Hij is namelijk al bijna helemaal voorgemonteerd.', '/img/lb2.jpeg', 'zwart', 'Flow', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` bigint(20) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `realName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `userName`, `date`, `description`, `product_id`, `realName`, `title`) VALUES
(10, 'Jan peter', '2021-12-02', 'de crosstrainer is beter dan ik vooraf had verwacht :)\r\nik ben er heel blij mee.', 2, '', 'beter dan gedacht'),
(11, 'Jaap', '2021-12-09', 'mijn aapjes kunnen hier ook op trainen top', 2, '', 'aapjes'),
(13, 'Daan', '2021-12-09', 'prima ding', 2, '', 'prima'),
(14, 'Jaapie', '2022-01-17', 'egg', 1, '', 'Pure kanker'),
(15, 'Jaap', '2022-01-18', 'hallo', 2, '', 'saa'),
(16, 'Jaap', '2022-01-18', 'thjgfg', 2, '', 'aa'),
(17, 'Jaapie24', '2022-02-25', 'hij doet wat er in de beschrijving staat', 1, '', 'Pracht ding '),
(20, 'JaaboiJohan', '2022-02-25', 'eeee', 1, '', 'aaa'),
(21, 'JaaboiJohan', '2022-02-25', 'eeee', 1, '', 'aaa'),
(22, 'J0hnty', '2022-02-25', 'ja', 1, '', 'nee'),
(23, 'J0hnty', '2022-02-25', 'ja', 1, '', 'nee'),
(24, 'J0hnty', '2022-02-25', 'ja', 1, '', 'nee'),
(25, 'J0hnty', '2022-02-25', 'rwerwefwefwf', 1, '', 'erwerwer'),
(26, 'J0hnty', '2022-02-25', 'dsadsasda', 1, '', 'sdadassda'),
(27, 'J0hnty', '2022-02-25', 'dsadasdasdasdasd', 8, '', 'dasdsadas'),
(28, 'J0hnty', '2022-02-25', 'dasdasdasdasd', 1, '', 'asdsadsa'),
(29, 'J0hnty', '2022-02-25', 'dasdasdasdasd', 1, '', 'asdsadsa');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `birthday`, `email`, `profilepicture`, `role`) VALUES
(1, 'Jaapie24', 'qwerty', 'Jaap', 'van der plas', '1970-10-14', 'jaap@yepmail.com', '', 'admin'),
(2, 'JaaboiJohan', 'qwerty2', 'Johan', 'van der ende', '1996-09-06', 'johanvde@maily.com', '', 'member'),
(3, 'J0hnty', 'qwerty', 'Johnty', 'van Delden', '0000-00-00', 'johnty@healthone.nl', '', 'member'),
(4, 'PieterPost', 'qwerty', 'Piet', 'Post', '0000-00-00', 'ppost@healthone.nl', '', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `openingstijden`
--
ALTER TABLE `openingstijden`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `openingstijden`
--
ALTER TABLE `openingstijden`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
