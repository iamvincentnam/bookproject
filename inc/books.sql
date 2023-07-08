SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_table_id` int(11) NOT NULL,
  `genre` varchar(255) DEFAULT 'historical fiction, novel',
  `summary` longtext NOT NULL,
  `book_img` varchar(255) NOT NULL DEFAULT 'placeholder_books.jpg',
  `released_year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `books` (`book_id`, `title`, `author_table_id`, `genre`, `summary`, `book_img`, `released_year`) VALUES
(1, 'Things Fall Apart', 1, 'Historical Fiction, Novel', 'Set in Nigeria during the late 19th century, \'Things Fall Apart\' portrays the life of Okonkwo, a respected warrior of the Igbo community. The novel delves into the clash between traditional African values and the encroaching influence of colonialism. Through Okonkwo\'s personal struggles and the disintegration of his society, Achebe masterfully explores themes of cultural identity, power, and the tragic consequences of change.', 'tfa.jpg', '1958'),
(2, 'Arrow of God', 1, 'Historical Fiction, Novel', 'This takes readers to another Igbo community, focusing on Ezeulu, the chief priest of Ulu. Set during the early 20th century, the novel exposes the tensions between traditional religious beliefs and the growing presence of Christianity. As Ezeulu confronts internal and external conflicts, Achebe weaves a complex narrative exploring the power dynamics, spirituality, and the price of religious and political authority.', 'AOG.jpg', '1964'),
(3, 'The Famished Road', 2, 'Historical Fiction, Novel', 'Ben Okri presents a mystical tale set in Nigeria. The story follows Azaro, an abiku (spirit child) who straddles the worlds of the living and the spirit realm. Through vivid imagery and magical realism, Okri explores the struggles of poverty, political unrest, and the search for meaning in a nation caught between tradition and modernity. It is a profound reflection on the human condition and the resilience of the human spirit.', 'TFR.jpg', '1991'),
(4, 'Homegoing', 3, 'Historical Fiction, Novel', 'THe novel traces the lineage of two half-sisters, Effia and Esi, from 18th-century Ghana to modern-day America. Each chapter focuses on a different descendant, painting a powerful and poignant picture of the African diaspora across generations. Gyasi skillfully tackles themes of slavery, colonization, identity, and the lasting impact of historical trauma. Through interwoven narratives, she highlights the interconnectedness of individuals and the enduring strength of heritage.', 'H.jpg', '2016'),
(5, 'Half of a Yellow Sun', 13, 'Historical Fiction, Novel', 'Here is a Historic fictional work whose experience of the Nigeria/Biafra War was is being told through the eyes & Experiences of Ugwu. The book follows the lives of Ugwu, Olanna, and Richard. Adichie intricately weaves together their personal stories, capturing the complexities of love, betrayal, and sacrifice amidst the political upheaval.', 'HOAYS.JPG', '2016'),
(6, 'The Thing Around Your Neck', 13, 'Historical Fiction, Novel', 'is a collection of short stories that explores various themes such as identity, cultural clashes, and the experiences of Nigerians both in Nigeria and abroad. Adichie\'s storytelling prowess shines through in this collection as she presents vivid and thought-provoking narratives that delve into the complexities of human relationships and the challenges faced by individuals in a rapidly changing world.', 'ttayn.jpg', '2009'),
(7, 'Purple Hibiscus', 13, 'Historical Fiction, Novel', 'Purple Hibiscus is Adichie\'s debut novel, which tells the story of Kambili, a young girl living in Nigeria under the oppressive rule of her fanatically religious father. As Kambili\'s family undergoes a series of dramatic events, including political unrest and personal awakenings, she finds her voice and begins to challenge the constraints imposed upon her. Purple Hibiscus is a powerful coming-of-age story that explores themes of family, love, religion, and freedom.', 'ph.jpg', '2003'),
(8, 'So Long a Letter', 4, 'Historical Fiction, Novel', 'Set in Senegal, this epistolary novel explores the challenges faced by Ramatoulaye, a middle-aged woman navigating the constraints of a patriarchal society. B� tackles themes of polygamy, women\'s rights, and cultural traditions, highlighting the strength and resilience of African women. Through Ramatoulaye\'s heartfelt letters, B� presents a nuanced depiction of the struggles and triumphs of women in West Africa.', 'SLAL.jpg', '1979'),
(9, 'The Secret Lives of Baba Segi\'s Wives', 5, 'Historical Fiction, Novel', 'The novel revolves around Baba Segi, a wealthy businessman with multiple wives. As the story unfolds, we delve into the lives and secrets of his four wives, each grappling with personal desires, ambitions, and the complexities of their polygamous marriage. Shoneyin skillfully explores themes of love, betrayal, and the power dynamics within a traditional Nigerian household', 'TSLOBSW.jpg', '2010'),
(10, 'A Grain of Wheat', 6, 'Historical Fiction, Novel', 'Set during the Mau Mau uprising in Kenya, the novel follows a diverse cast of characters as they navigate the political and social turmoil of the time. Thiong\'o delves into themes of sacrifice, betrayal, and the quest for independence. Through vivid storytelling, he provides insights into the complexities of colonialism, nationalism, and the struggle for freedom in East Africa.', 'AGOW.jpg', '1967'),
(11, 'Cry, the Beloved Country', 7, 'Historical Fiction, Novel', 'Set in apartheid-era South Africa, the novel explores the deep racial divides and social injustices of the time. Paton tells the story of Stephen Kumalo, a Zulu priest, and his search for his missing son in Johannesburg. Through Kumalo\'s journey, Paton confronts issues of racial inequality, poverty, and the moral challenges faced by individuals in a divided society', 'ctbc.jpg', '1948'),
(12, 'The Joys of Motherhood', 8, 'Historical Fiction, Novel', 'For a Teenager Like me at that time who read this book, I was traumatized. I could feel it because (1) I had a mother (2) we were not privileged. The novel follows the life of Nnu Ego, a traditional Igbo woman, as she strives to fulfill societal expectations of motherhood. Emecheta examines the pressures faced by women in patriarchal societies and delves into themes of identity, motherhood, and the clash between tradition and modernity.', 'tjom', '1979'),
(13, 'Second Class Citizen', 8, 'Historical Fiction, Novel', 'The story revolves around the life of Adah, a young Nigerian woman who faces various challenges and obstacles as she strives to overcome societal limitations and achieve her dreams. Adah\'s journey takes her from her native Nigeria to London, where she confronts issues of gender inequality, cultural clashes, and the struggle for independence. The novel delves into themes of identity, feminism, and the resilience of the human spirit in the face of adversity.', 'scc.jpg', '1979'),
(14, 'No Longer at Ease', 1, 'Historical Fiction, Novel', 'This is a sequel to Things Fall Apart.The novel portrays the life of Obi Okonkwo, a young Nigerian man who returns from studying in England to work in the colonial civil service. Achebe explores the conflicts and dilemmas faced by Obi as he grapples with corruption, cultural clashes, and personal choices in the changing landscape of post-colonial Nigeria', 'nlae.jpg', '1960'),
(15, 'And After Many Days', 9, 'Historical Fiction, Novel', 'The novel revolves around the Utu family and their search for their missing teenage son, Paul. Ile skillfully captures the political and environmental tensions in the region while delving into the complexities of family, identity, and the impact of societal changes on individuals and communities', 'aamd.jpg', '2014'),
(16, 'Weep Not, Child', 6, 'Historical Fiction, Novel', 'Weep Not, Child is Ngũgĩ wa Thiong\'o\'s debut novel and one of the earliest major works of East African literature. Set during the period of British colonial rule in Kenya, the story follows Njoroge, a young boy from a Kikuyu family, as he navigates the challenges of poverty, education, and political upheaval. Through Njoroge\'s journey, the novel explores themes of resistance, identity, and the impact of colonization on African communities.', 'wnc.jpg', '1964'),
(17, 'The River Between', 6, 'Historical Fiction, Novel', 'This is a novel by Ngũgĩ wa Thiong\'o set in colonial Kenya. The story revolves around the conflict between two neighboring communities, the Gikuyu and the Christianized Kameno. Waiyaki, a young leader from the Gikuyu community, becomes caught in the midst of this clash as he tries to bridge the divide and find a balance between tradition and modernity. The novel explores themes of cultural conflict, the impact of Christianity, and the struggle for identity.', 'trb.jpg', '1965'),
(18, 'Black Hermit', 6, 'Historical Fiction, Novel', 'Black Hermit is a play written by Ngũgĩ wa Thiong\'o. It tells the story of a young man named Remi, who returns to his village after studying abroad. Kĩoi\'s arrival disrupts the social order, and his unconventional behavior challenges traditional norms and exposes the hypocrisy of the society he encounters. Black Hermit delves into themes of cultural clash, colonialism, and the search for personal freedom and authenticity.', 'bh.jpg', '1968'),
(19, 'The Potter\'s Wheel', 11, 'historical fiction, novel', 'Obuechina, the only brother of six older sisters, prize pupil in the village school, apple of his doting mother\'s eye, eight years old and hopelessly spoilt. In a vain attempt to salvage his character, his father decides he must be sent away as a servant to a schoolmaster with a dragon of a wife. Obu goes - and comes back very different.', 'tpw.jpg', '1973');


ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_table_id` (`author_table_id`);


ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_table_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
