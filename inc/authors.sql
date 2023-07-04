SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `born_in` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL DEFAULT 'placeholder.jpg',
  `biography` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `authors` (`id`, `author_name`, `nationality`, `born_in`, `author_img`, `biography`) VALUES
(1, 'Chinua Achebe', 'Nigerian', 'November 16, 1930', 'Chinuaachebe.jpg', 'Achebe grew up in the Igbo (Ibo) town of Ogidi, Nigeria. After studying English and literature at University College (now the University of Ibadan), Achebe taught for a short time before joining the staff of the Nigerian Broadcasting Corporation in Lagos, where he served as director of external broadcasting in 1961–66. In 1967 he cofounded a publishing company at Enugu with the poet Christopher Okigbo, who died shortly thereafter in the Nigerian civil war for Biafran independence, which Achebe openly supported.'),
(2, 'Ben Okri', 'Nigeria', '1959, Minna', 'benokri.jpg', 'Ben Okri, born on March 15, 1959, is a Nigerian poet and novelist. He is well-known for his belief in the power of storytelling to shape and transform societies. Okri\'s works often explore themes of spirituality, dreams, and the intersection between myth and reality The Famished Road won the Booker Prize in 1991, but his unconventional narrative style has also drawn criticism from some readers.'),
(3, 'Yaa Gyasi', 'Ghanaian', '1989, Mampong Ghana', 'yaagyasi.jpg', 'Yaa Gyasi, a Ghanaian-American author, gained fame for her debut novel \'Homegoing,\' which traces the consequences of slavery through generations. She is celebrated for her ability to delve into complex historical narratives and capture the human experience. Gyasi\'s work has been widely praised for its depth and emotional resonance.'),
(4, 'Mariama Ba', 'Senegalese', '1929.  Dakar, Senegal', 'mariamaba.jpg', 'Mariama Ba, a Senegalese author and feminist, is celebrated for her novel \'So Long a Letter,\' which challenges traditional gender roles in African society. Ba\'s work highlights the struggles faced by women and calls for their empowerment. Despite her contributions to literature, she faced opposition and criticism from conservative elements in Senegalese society.'),
(5, 'Lola Shoneyin', 'Nigeria', '1974, Ibadan', 'lolashoneyin.jpg', 'Lola Shoneyin, a Nigerian poet and author, is known for her advocacy of women\'s rights and her efforts to promote African literature. Her debut novel The Secret Lives of Baba Segi\'s Wives tackles themes of polygamy and gender inequality. Shoneyin\'s work has sparked conversations and debates on cultural norms and societal expectations.'),
(6, 'Ngugi wa Thiong\'o', 'Kenyan', '1938, Kamiriithu', 'ngugiwathiongo,jpg', 'Ngugi wa Thiong\'o, a Kenyan writer and activist, is famous for his commitment to decolonizing African literature and promoting indigenous languages. He renounced writing in English and started producing works in Gikuyu, his native language. Thiong\'o\'s activism and cultural beliefs have led to his imprisonment and exile, making him a symbol of resistance against colonialism.'),
(7, 'Alan Paton', 'South African', '1903,  Pietermaritzburg South Africa', 'alanpaton.jpg', 'Alan Paton, a South African author and anti-apartheid activist, gained international acclaim for his novel Cry, The Beloved Country. He used his writing to shed light on the injustices of apartheid and advocate for racial equality. Paton\'s work continues to be celebrated for its compassionate portrayal of the human condition and its critique of social divisions.'),
(8, 'Buchi Emecheta', 'Nigeria', '1944 Lagos, Nigeria', 'buchiemecheta.jpg', 'Buchi Emecheta, a Nigerian-British author, explored themes of gender, race, and identity in her novels. Her work often depicted the struggles and resilience of Nigerian women in the face of cultural and societal expectations. Emecheta\'s writing challenged traditional gender roles and examined the complexities of the immigrant experience.'),
(9, 'Jowhor Ile', 'Nigeria', '1980, Niger Delta', 'jowhorile.jpg', 'Jowhor Ile, a Nigerian novelist, garnered critical acclaim for his debut novel And After Many Days.  His writing captures the nuances of Nigerian society and explores themes of family, loss, and the impact of political instability. Ile\'s work has been praised for its lyrical prose and insightful portrayal of personal and national narratives. He won the NLNG prize for literature in 2013.'),
(10, 'Steve Biko', 'South African', '1946 King William\'s Town, South Africa', 'stevebiko.jpg', 'Steve Biko, a South African anti-apartheid activist and writer, played a significant role in the Black Consciousness Movement. He advocated for the empowerment and self-awareness of Black people in South Africa. Biko\'s writings, such as I Write What I Like, continue to inspire and provoke discussions on racism, identity, and social justice.'),
(11, 'Ike Chukwuemeka Vincent', 'Nigeria', '1931', 'chukwuemekavincent.jpg', 'Chukwuemeka Vincent, a Nigerian author, gained recognition for his novel The Potter\'s Wheel. His work delves into themes of personal growth, redemption, and the power of self-discovery. Vincent\'s writing style combines elements of spirituality, philosophy, and introspection, offering readers a thought-provoking and reflective journey.\r\n'),
(12, 'Elechi Amadi', 'Nigeria', '1934: Aluu, Rivers state', 'Elechiamadi.jpg', 'Elechi Amadi, a Nigerian author and former soldier, is renowned for his novel The Concubine. He depicted the traditional life and customs of the Niger Delta region while exploring themes of love, jealousy, and destiny. Amadi\'s works continue to resonate with readers for their rich cultural insights and compelling storytelling.'),
(13, 'Chimamnda Ngozi Adichie', 'Nigeria', '1977,Enugu', 'adichie.jpg', 'Chimamanda Ngozi Adichie, a Nigerian author and feminist, is known for her powerful storytelling and advocacy for gender equality. Her novel Half of a Yellow Sun explores the Biafran War and its impact on individuals. Adichie\'s TED Talk on feminism, We Should All Be Feminists, further propelled her to international recognition and sparked both admiration and controversy..');


ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
