-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 01 May, 2023 saat 20:30
-- Server versiyası: 10.4.27-MariaDB
-- PHP Versiyası: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `oxuaz`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_mail` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_status` varchar(50) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_category` varchar(255) NOT NULL,
  `a_registered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mail`, `a_password`, `a_status`, `a_img`, `a_category`, `a_registered_date`) VALUES
(1, 'Səbuhi', 'sebuhibov@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', 'foto.jpg', 'Admin', ''),
(2, 'Ahmet Kaya', 'ahmet.kaya@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', 'Active', 'raul.jpg', 'Redactor', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Dillər'),
(2, 'IT'),
(3, 'Sertifikatlar'),
(4, 'Dizayn'),
(5, 'Lifestyle');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_description` longtext NOT NULL,
  `n_date` varchar(50) NOT NULL,
  `n_category` varchar(50) NOT NULL,
  `n_status` varchar(50) NOT NULL,
  `c_teacher` varchar(50) NOT NULL,
  `c_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_img` varchar(255) NOT NULL,
  `t_img` varchar(255) NOT NULL,
  `n_file_ext` varchar(255) NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) NOT NULL,
  `n_updater_id` int(11) NOT NULL,
  `n_update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `c_teacher`, `c_time`, `n_img`, `t_img`, `n_file_ext`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(57, 'Rus Dili', 'Oxu.az olaraq arzu edən hər kəsə ən yeni metodika və Beynəlxalq səviyyədə istifadə olunan tədris vəsaitləri ilə rus dilinini qısa müddətə öyrənmək imkanı yaradır.\r\n\r\nBiz xüsusi Rus dili tədris proqramı ilə həm tədris baxımından, həm də istifadə etdiyimiz ədəbiyyatlarla keyfiyyətli xidmətimizlə fərqlənirik.\r\n\r\nİstifade etdiyimiz xüsusi proqram sizin Rus dili biliyinizi qısa müddətdə inkişaf etidirməyiniz üçün bir stimul olacaq!\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\nKursun Proqramı 6 səviyyədən ibarətdir:\r\n\r\n1. A1 – ЭЛЕМЕНТАРНЫЙ УРОВЕНЬ \r\n\r\n2. A2 –  ПРЕДПОРОГОВЫЙ (БАЗОВЫЙ) УРОВЕНЬ\r\n\r\n3. B1 – ПОРОГОВЫЙ УРОВЕНЬ\r\n\r\n4. B2 - ПОСТПОРОГОВЫЙ УРОВЕНЬ\r\n\r\n5. C1 – УРОВЕНЬ КОМПЕТЕНТНОГО ВЛАДЕНИЯ\r\n\r\n6. C2 –  УРОВЕНЬ НОСИТЕЛЯ ЯЗЫКА\r\n\r\nHər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir.\r\n\r\nProqrama əsasən həftədə 3 saat dərs və əlavə olaraq 1 saat da Ünsiyyət Klubu təşkil olunur. Dərslər fərdi və ya qrupda olmaqla müştərinin ofisində və ya bizim tədris mərkəzimizdə keçirilir.\r\n\r\nQEYD: Dərslər rus dili müəllimliyi üzrə təhsil almış peşakar müəllimlər, rus dilinin müasir metodlarla öyrədilməsi üzrə müxtəlif elmi məqalələrin müəllifləri tərəfindən tədris olunur.', '2023-03-12', 'Dillər', 'Active', 'Rza Talıbov', '6*2 Ay', 'c484d02f0c5b4ef4e8838bf978e264e8.png', '', '.png', 1, '2023-03-11 22:38:42', 0, ''),
(58, 'xas', 'xsaxsaxsaxsa', '2023-03-14', 'Dillər', 'Active', 'Alman', '3 ay', 'a8df2c05b5a286ac51703cbb0a21b788.png', '', '.png', 1, '2023-03-13 20:00:57', 0, ''),
(59, 'sadsa', 'dasdsadsa', '2023-03-15', 'IT', 'Active', '', '', '', '', '', 1, '2023-03-14 19:04:59', 0, ''),
(60, 'sadasds', 'dsadsadsa21321321321321231', '2023-03-08', 'Lifestyle', 'Active', '', '', '', '', '', 1, '2023-03-14 19:05:31', 1, '2023-03-14 19:12:24'),
(61, 'sadasdsadsa', 'wewqjdsnsdnjdsjnfdsdfjndfsn2389u239021908', '2023-03-02', 'IT', 'Active', 'sadsadsaas', '', '', '', '', 1, '2023-03-14 19:14:36', 0, ''),
(62, 'sadasad2123123123', 'dsadasdsadsad asd asd wa wq2231322332q', '2023-03-05', 'Dillər', 'Active', 'sadsadassa', '', '', '', '', 1, '2023-03-14 19:20:24', 1, '2023-03-23 18:52:25'),
(63, 'Lorem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-03-14', 'Dillər', 'Active', 'dsadsasa', '211212', '', '', '', 1, '2023-03-14 19:21:29', 0, ''),
(64, 'Salam', 'Novruz bayramı (tərcümə: Yeni Gün bayramı, Bahar bayramı; fars. نوروز‎ (Novruz), özb. Navruz, türkm. Nowruz, qaz. Naurız, qırğ. Nooruz, türk. Nevruz, krımtat. Navrez.) – Qədim İran və Türk mənşəli xalqlara məxsus bayram.\r\n\r\nNovruz bayramı Şimal yarımkürəsində astronomik yazın başlandığı, gecə-gündüzün bərabərliyi günündə (martın 20-si və ya 21-dən başlayıb 25-nə qədər) keçirilir. Bir sıra xalqlar yaz fəslinin gəlməsini təbiətin canlanması ilə bağlamış, bu münasibətlə şənliklər keçirmiş, onu yeni ilin başlanğıcı kimi bayram etmişlər. Qədim zamanlardan başlayaraq Azərbaycan, İran, Əfqanıstan, Tacikistan, Özbəkistanda və bir çox şərq ölkələrində baharın — yeni ilin gəlişini şənliklərlə qarşılayırlar. Martın 21-i İran və Əfqanıstanda rəsmi təqvimin ilk günü sayılır.\r\n\r\n2009-cu il sentyabrın 30-da Novruz bayramı YUNESKO tərəfindən qeyri-maddi mədəni irs siyahısına daxil edilmiş, 23 fevral 2010-cu ildə isə BMT Baş Assambleyasının 64-cü sessiyasının iclasında mart ayının 21-i \"Beynəlxalq Novruz Günü\" elan edilmişdir. Novruz bayramı Azərbaycanda geniş miqyasda qeyd olunduğu üçün bayram ərəfəsi qeyri-iş günləri elan olunur. Novruz bayramının mənşəyi qədimdir. İslam dini Yaxın Şərq və Orta Asiya ölkələrində yayıldıqdan sonra Ərəb xilafəti bu ölkələrin xalqlarının adət-ənənələrini, bayramlarını təqib etməyə başladı. Əksər xalqlar bahar bayramının əsl mahiyyətindən doğan bir sıra adət-ənənələri, oyunları indiyədək saxlamışlar.\r\n\r\n\r\nSSRİ-nin poçt markası. Azərbaycanda Novruz\r\nOrta əsr müəllifləri Şərq ölkələrində İslam dini yayıldıqdan sonra da Novruz bayramında yaz ənənələrinin, əkinçilik təqvimi etiqadlarının möhkəm yer tutduğunu göstərirlər. Əbu Reyhan Əl Biruni Novruz bayramı haqqında müxtəlif rəvayətlərdən, onun yaranması səbəblərindən, bu bayram münasibətilə xalq arasında yayılmış adət-ənənələrdən bəhs etmiş, Novruz bayramının təbiətin oyanması, əkinçilik təsərrüfatının başlanması ilə bağlı əsl dünyəvi bayram olduğunu qeyd etmişdir.\r\n\r\nNizamül Mülk \"Siyasətnamə\" əsərində Novruz bayramından yazın gəlişi ilə əlaqədar keçirilən kütləvi xalq bayramı kimi bəhs etmişdir. Novruzun gəlişi klassik Şərq, o cümlədən Azərbaycan poeziyasında geniş yayılmış \"Bahariyyə\" adlı lirik şeirlərdə də təsvir və tərənnüm edilir.\r\n\r\nNovruz bayramında müxtəlif oyunlar keçirilir.Bunlara atırma,halay,bənövşə,cıdır-ənzəli,Kosa-kosa və bu kimi oyunlar aid edilir.', '2023-03-19', 'Dizayn', 'Deactive', 'Əbəlfəz', 'dsadsaq', '21956c21bb8967293484a84085bc1010.png', '', '.png', 1, '2023-03-20 15:56:56', 0, ''),
(65, 'Salam', 'İngilis dilindən tərcümə edilib-Nəşriyyat və qrafik dizaynda Lorem ipsum sənədin vizual formasını və ya şriftini mənalı məzmuna etibar etmədən nümayiş etdirmək üçün adətən istifadə olunan yer tutan mətndir. Lorem ipsum, son nüsxə mövcud olmamışdan əvvəl yer tutucu kimi istifadə edilə bilər.', '2023-03-21', 'Dillər', 'Active', 'sadsad', '6*2 aya', 'a916d2dbe9b9d4c52a44813b25ec3757.png', '', '.png', 1, '2023-03-23 18:33:21', 0, ''),
(66, 'Aaaa', 't_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_name', '2023-03-07', 'Dillər', 'Active', 't_img_name', '6*2a', '300fa77282b51861f982bcc950701501.png', '', '.png', 1, '2023-03-23 18:51:44', 0, ''),
(67, 'sdsddsasd', 't_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_namet_img_name', '2023-03-22', 'Dillər', 'Deactive', 't_img_name', 't_img_name', '7f618aa4c610d09715e8ac9aba0438fd.png', '', '.png', 1, '2023-03-23 19:20:02', 1, '2023-03-29 21:19:46');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Cədvəl üçün indekslər `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Cədvəl üçün indekslər `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Cədvəl üçün AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
