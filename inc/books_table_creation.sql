SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL DEFAULT 'placeholder.jpg',
  `summary` longtext NOT NULL,
  `book_img` varchar(255) NOT NULL DEFAULT 'placeholder_books.jpg',
  `released_year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `author_img`, `summary`, `book_img`, `released_year`) VALUES
(1, 'Things Fall Apart', 'Chinua Achebe', '', 'A_NLAE.jpg', 'Set in Nigeria during the late 19th century, \'Things Fall Apart\' portrays the life of Okonkwo, a respected warrior of the Igbo community. The novel delves into the clash between traditional African values and the encroaching influence of colonialism. Through Okonkwo\'s personal struggles and the disintegration of his society, Achebe masterfully explores themes of cultural identity, power, and the tragic consequences of change.', 'tfa.jpg', '1958'),
(2, 'Arrow of God', 'Chinua Achebe', '', 'A_NLAE.jpg', '\'Arrow of God\' takes readers to another Igbo community, focusing on Ezeulu, the chief priest of Ulu. Set during the early 20th century, the novel exposes the tensions between traditional religious beliefs and the growing presence of Christianity. As Ezeulu confronts internal and external conflicts, Achebe weaves a complex narrative exploring the power dynamics, spirituality, and the price of religious and political authority.', 'AOG.jpg', '1964'),
(3, 'The Famished Road', 'Ben Okri', '', 'A_TFR.jpg', ' Ben Okri presents a mystical tale set in Nigeria. The story follows Azaro, an abiku (spirit child) who straddles the worlds of the living and the spirit realm. Through vivid imagery and magical realism, Okri explores the struggles of poverty, political unrest, and the search for meaning in a nation caught between tradition and modernity. It is a profound reflection on the human condition and the resilience of the human spirit.', 'TFR.jpg', '1991'),
(4, 'Homegoing', 'Yaa Gyasi', '', 'A_H.jpg', ' THe novel traces the lineage of two half-sisters, Effia and Esi, from 18th-century Ghana to modern-day America. Each chapter focuses on a different descendant, painting a powerful and poignant picture of the African diaspora across generations. Gyasi skillfully tackles themes of slavery, colonization, identity, and the lasting impact of historical trauma. Through interwoven narratives, she highlights the interconnectedness of individuals and the enduring strength of heritage.', 'H.jpg', '2016'),
(5, 'Half of a Yellow Sun', 'Chimamanda Ngozi Adichie', '', 'A_HOAYS.JPG', 'Here is a Historic fictional work whose experience of the Nigeria/Biafra War was is being told through the eyes & Experiences of Ugwu. The book follows the lives of Ugwu, Olanna, and Richard. Adichie intricately weaves together their personal stories, capturing the complexities of love, betrayal, and sacrifice amidst the political upheaval.', 'HOAYS.JPG', '2016'),
(6, 'So Long a Letter', 'Mariama Bâ', '', 'A_SLAL.jpg', 'Set in Senegal, this epistolary novel explores the challenges faced by Ramatoulaye, a middle-aged woman navigating the constraints of a patriarchal society. Bâ tackles themes of polygamy, women\'s rights, and cultural traditions, highlighting the strength and resilience of African women. Through Ramatoulaye\'s heartfelt letters, Bâ presents a nuanced depiction of the struggles and triumphs of women in West Africa.', 'SLAL.jpg', '1979'),
(7, 'The Secret Lives of Baba Segi\'s Wives', 'Lola Shoneyin', '', 'A_TSLOBSW.jpg', 'The novel revolves around Baba Segi, a wealthy businessman with multiple wives. As the story unfolds, we delve into the lives and secrets of his four wives, each grappling with personal desires, ambitions, and the complexities of their polygamous marriage. Shoneyin skillfully explores themes of love, betrayal, and the power dynamics within a traditional Nigerian household.', 'TSLOBSW.jpg', '2010'),
(8, 'A Grain of Wheat', 'Ngũgĩ wa Thiong\'o', '', 'A_AGOW.jpg', 'Set during the Mau Mau uprising in Kenya, the novel follows a diverse cast of characters as they navigate the political and social turmoil of the time. Thiong\'o delves into themes of sacrifice, betrayal, and the quest for independence. Through vivid storytelling, he provides insights into the complexities of colonialism, nationalism, and the struggle for freedom in East Africa.', 'AGOW.jpg', '1967'),
(9, 'Cry, the Beloved Country', 'Alan Paton', '', 'A_CTBC.jpg', 'Set in apartheid-era South Africa, the novel explores the deep racial divides and social injustices of the time. Paton tells the story of Stephen Kumalo, a Zulu priest, and his search for his missing son in Johannesburg. Through Kumalo\'s journey, Paton confronts issues of racial inequality, poverty, and the moral challenges faced by individuals in a divided society.', 'CTBC.jpg', '1948'),
(10, 'The Joys of Motherhood', 'Buchi Emecheta', '', 'A_TJOM.jpg', 'For a Teenager Like me at that time who read this book, I was traumatized. I could feel it because (1) I had a mother (2) we were not privileged. The novel follows the life of Nnu Ego, a traditional Igbo woman, as she strives to fulfill societal expectations of motherhood. Emecheta examines the pressures faced by women in patriarchal societies and delves into themes of identity, motherhood, and the clash between tradition and modernity.', 'TJOM.jpg', '1979'),
(11, 'No Longer at Ease', 'Chinua Achebe', '', 'A_NLAE.jpg', 'This is a sequel to Things Fall Apart.The novel portrays the life of Obi Okonkwo, a young Nigerian man who returns from studying in England to work in the colonial civil service. Achebe explores the conflicts and dilemmas faced by Obi as he grapples with corruption, cultural clashes, and personal choices in the changing landscape of post-colonial Nigeria.', 'NLAE.jpg', '1960'),
(12, 'And After Many Days', 'Jowhor Ile', '', 'A_AAMD.jpg', 'The novel revolves around the Utu family and their search for their missing teenage son, Paul. Ile skillfully captures the political and environmental tensions in the region while delving into the complexities of family, identity, and the impact of societal changes on individuals and communities.', 'AAMD.jpg', '2014');


ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
