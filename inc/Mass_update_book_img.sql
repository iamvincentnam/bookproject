-- update books set book_img = CASE
-- WHEN id = 2 THEN 'AOG.jpg'
-- WHEN id = 3  THEN 'TFR.jpg'
-- WHEN id = 4 THEN 'H.jpg'
-- WHEN id = 5 THEN 'HOAYS.JPG'
-- WHEN id = 6 THEN 'SLAL.jpg'
-- WHEN id = 7 THEN 'TSLOBSW.jpg'
-- WHEN id = 8 THEN 'AGOW.jpg'
-- WHEN id = 9 THEN 'CTBC.jpg'
-- WHEN id = 10 THEN 'TJOM.jpg'
-- WHEN id = 11 THEN 'NLAE.jpg'
-- WHEN id = 12 THEN 'AAMD.jpg'
-- ELSE 
-- book_img
-- END
-- WHERE id in (2,3,4,5,6,7,8,9,10,11,12)
-- ;

/*To Update the author's image */

update books set book_img = CASE
WHEN book_id  = 3  THEN 'TFR.jpg'
WHEN book_id = 4 THEN 'H.jpg'
WHEN book_id = 5 THEN 'HOAYS.JPG'
WHEN book_id = 6 THEN 'ttayn.jpg'
WHEN book_id = 7 THEN 'ph.jpg'
WHEN book_id = 8 THEN 'SLAL.jpg'
WHEN book_id = 9 THEN 'TSLOBSW.jpg'
WHEN book_id = 10 THEN 'AGOW.jpg'

WHEN book_id = 11 THEN 'ctbc.jpg'
WHEN book_id = 12 THEN 'tjom.jpg'
WHEN book_id = 13 THEN 'scc.jpg'
WHEN book_id = 14 THEN 'nlae.jpg'
WHEN book_id = 15 THEN 'aamd.jpg'
WHEN book_id = 17 THEN 'trb.jpg'
WHEN book_id = 18 THEN 'bh.jpg'
ELSE 
book_img
END
WHERE book_id in (3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18)
;
-- INSERT INTO BOOKS (title, author_table_id, summary, released_year) values
-- (
-- 'The Famished Road', 2, "Ben Okri presents a mystical tale set in Nigeria. The story follows Azaro, an abiku (spirit child) who straddles the worlds of the living and the spirit realm. Through vivid imagery and magical realism, Okri explores the struggles of poverty, political unrest, and the search for meaning in a nation caught between tradition and modernity. It is a profound reflection on the human condition and the resilience of the human spirit.", 1991
-- ),
-- (
-- 'Homegoing', 3, "THe novel traces the lineage of two half-sisters, Effia and Esi, from 18th-century Ghana to modern-day America. Each chapter focuses on a different descendant, painting a powerful and poignant picture of the African diaspora across generations. Gyasi skillfully tackles themes of slavery, colonization, identity, and the lasting impact of historical trauma. Through interwoven narratives, she highlights the interconnectedness of individuals and the enduring strength of heritage.", 2016
-- ),
-- (
-- 'Half of a Yellow Sun', 13,  "Here is a Historic fictional work whose experience of the Nigeria/Biafra War was is being told through the eyes & Experiences of Ugwu. The book follows the lives of Ugwu, Olanna, and Richard. Adichie intricately weaves together their personal stories, capturing the complexities of love, betrayal, and sacrifice amidst the political upheaval.",2016
-- ),
-- (
-- 'The Thing Around Your Neck', 13,  "is a collection of short stories that explores various themes such as identity, cultural clashes, and the experiences of Nigerians both in Nigeria and abroad. Adichie's storytelling prowess shines through in this collection as she presents vivid and thought-provoking narratives that delve into the complexities of human relationships and the challenges faced by individuals in a rapidly changing world.",2009
-- ),
-- (
-- 'Purple Hibiscus', 13,  "Purple Hibiscus is Adichie's debut novel, which tells the story of Kambili, a young girl living in Nigeria under the oppressive rule of her fanatically religious father. As Kambili's family undergoes a series of dramatic events, including political unrest and personal awakenings, she finds her voice and begins to challenge the constraints imposed upon her. Purple Hibiscus is a powerful coming-of-age story that explores themes of family, love, religion, and freedom.", 2003
-- ),
-- (
-- 'So Long a Letter',4, "Set in Senegal, this epistolary novel explores the challenges faced by Ramatoulaye, a middle-aged woman navigating the constraints of a patriarchal society. B� tackles themes of polygamy, women\'s rights, and cultural traditions, highlighting the strength and resilience of African women. Through Ramatoulaye\'s heartfelt letters, B� presents a nuanced depiction of the struggles and triumphs of women in West Africa.", 1979
-- ),
-- (
-- "The Secret Lives of Baba Segi's Wives", 5, "The novel revolves around Baba Segi, a wealthy businessman with multiple wives. As the story unfolds, we delve into the lives and secrets of his four wives, each grappling with personal desires, ambitions, and the complexities of their polygamous marriage. Shoneyin skillfully explores themes of love, betrayal, and the power dynamics within a traditional Nigerian household", 2010
-- ),
-- (
-- 'A Grain of Wheat',6,  "Set during the Mau Mau uprising in Kenya, the novel follows a diverse cast of characters as they navigate the political and social turmoil of the time. Thiong'o delves into themes of sacrifice, betrayal, and the quest for independence. Through vivid storytelling, he provides insights into the complexities of colonialism, nationalism, and the struggle for freedom in East Africa.", 1967
-- ),
-- (
-- 'Cry, the Beloved Country',7, "Set in apartheid-era South Africa, the novel explores the deep racial divides and social injustices of the time. Paton tells the story of Stephen Kumalo, a Zulu priest, and his search for his missing son in Johannesburg. Through Kumalo\'s journey, Paton confronts issues of racial inequality, poverty, and the moral challenges faced by individuals in a divided society", 1948
-- ),
-- (
-- 'The Joys of Motherhood',8, "For a Teenager Like me at that time who read this book, I was traumatized. I could feel it because (1) I had a mother (2) we were not privileged. The novel follows the life of Nnu Ego, a traditional Igbo woman, as she strives to fulfill societal expectations of motherhood. Emecheta examines the pressures faced by women in patriarchal societies and delves into themes of identity, motherhood, and the clash between tradition and modernity.", 1979
-- ),
-- (
-- 'Second Class Citizen',8, "The story revolves around the life of Adah, a young Nigerian woman who faces various challenges and obstacles as she strives to overcome societal limitations and achieve her dreams. Adah's journey takes her from her native Nigeria to London, where she confronts issues of gender inequality, cultural clashes, and the struggle for independence. The novel delves into themes of identity, feminism, and the resilience of the human spirit in the face of adversity.", 1979
-- ),
-- (
-- 'No Longer at Ease',1, "This is a sequel to Things Fall Apart.The novel portrays the life of Obi Okonkwo, a young Nigerian man who returns from studying in England to work in the colonial civil service. Achebe explores the conflicts and dilemmas faced by Obi as he grapples with corruption, cultural clashes, and personal choices in the changing landscape of post-colonial Nigeria", 1960
-- ),
-- (
-- 'And After Many Days',9, "The novel revolves around the Utu family and their search for their missing teenage son, Paul. Ile skillfully captures the political and environmental tensions in the region while delving into the complexities of family, identity, and the impact of societal changes on individuals and communities", 2014
-- ),
-- (
-- 'Weep Not, Child',6, "Weep Not, Child is Ngũgĩ wa Thiong'o's debut novel and one of the earliest major works of East African literature. Set during the period of British colonial rule in Kenya, the story follows Njoroge, a young boy from a Kikuyu family, as he navigates the challenges of poverty, education, and political upheaval. Through Njoroge's journey, the novel explores themes of resistance, identity, and the impact of colonization on African communities.", 1964
-- ),
-- (
-- 'The River Between',6, "This is a novel by Ngũgĩ wa Thiong'o set in colonial Kenya. The story revolves around the conflict between two neighboring communities, the Gikuyu and the Christianized Kameno. Waiyaki, a young leader from the Gikuyu community, becomes caught in the midst of this clash as he tries to bridge the divide and find a balance between tradition and modernity. The novel explores themes of cultural conflict, the impact of Christianity, and the struggle for identity.", 1965
-- ),
-- (
-- "Black Hermit", 6,  "Black Hermit is a play written by Ngũgĩ wa Thiong'o. It tells the story of a young man named Remi, who returns to his village after studying abroad. Kĩoi's arrival disrupts the social order, and his unconventional behavior challenges traditional norms and exposes the hypocrisy of the society he encounters. Black Hermit delves into themes of cultural clash, colonialism, and the search for personal freedom and authenticity.", 1968
-- );



-- INSERT INTO authors (
--    `author_name`, `nationality`, `born_in`, `biography`, `author_img` ) VALUES
-- ('Ben Okri',
-- 'Nigeria',
-- '1959, Minna',
-- "Ben Okri, born on March 15, 1959, is a Nigerian poet and novelist. He is well-known for his belief in the power of storytelling to shape and transform societies. Okri's works often explore themes of spirituality, dreams, and the intersection between myth and reality The Famished Road won the Booker Prize in 1991, but his unconventional narrative style has also drawn criticism from some readers.",
-- "benokri.jpg"),

-- ('Yaa Gyasi',
-- 'Ghanaian',
-- '1989, Mampong Ghana',
-- "Yaa Gyasi, a Ghanaian-American author, gained fame for her debut novel 'Homegoing,' which traces the consequences of slavery through generations. She is celebrated for her ability to delve into complex historical narratives and capture the human experience. Gyasi's work has been widely praised for its depth and emotional resonance.",
-- "yaagyasi.jpg"),

-- ('Mariama Ba',
-- 'Senegalese',
-- '1929.  Dakar, Senegal',
-- "Mariama Ba, a Senegalese author and feminist, is celebrated for her novel 'So Long a Letter,' which challenges traditional gender roles in African society. Ba's work highlights the struggles faced by women and calls for their empowerment. Despite her contributions to literature, she faced opposition and criticism from conservative elements in Senegalese society.", "mariamaba.jpg"),

-- ('Lola Shoneyin',
-- 'Nigeria',
-- '1974, Ibadan',
-- "Lola Shoneyin, a Nigerian poet and author, is known for her advocacy of women's rights and her efforts to promote African literature. Her debut novel The Secret Lives of Baba Segi's Wives tackles themes of polygamy and gender inequality. Shoneyin's work has sparked conversations and debates on cultural norms and societal expectations.",
-- "lolashoneyin.jpg"),

-- ("Ngugi wa Thiong'o",
-- 'Kenyan',
-- '1938, Kamiriithu',
-- "Ngugi wa Thiong'o, a Kenyan writer and activist, is famous for his commitment to decolonizing African literature and promoting indigenous languages. He renounced writing in English and started producing works in Gikuyu, his native language. Thiong'o's activism and cultural beliefs have led to his imprisonment and exile, making him a symbol of resistance against colonialism.",
-- "ngugiwathiongo,jpg"),

-- ('Alan Paton',
-- 'South African',
-- '1903,  Pietermaritzburg South Africa',
-- "Alan Paton, a South African author and anti-apartheid activist, gained international acclaim for his novel Cry, The Beloved Country. He used his writing to shed light on the injustices of apartheid and advocate for racial equality. Paton's work continues to be celebrated for its compassionate portrayal of the human condition and its critique of social divisions.",
-- "alanpaton.jpg"),


-- ('Buchi Emecheta',
-- 'Nigeria',
-- '1944 Lagos, Nigeria',
-- "Buchi Emecheta, a Nigerian-British author, explored themes of gender, race, and identity in her novels. Her work often depicted the struggles and resilience of Nigerian women in the face of cultural and societal expectations. Emecheta's writing challenged traditional gender roles and examined the complexities of the immigrant experience.",
-- "buchiemecheta.jpg"),

-- ('Jowhor Ile',
-- 'Nigeria',
-- '1980, Niger Delta',
-- "Jowhor Ile, a Nigerian novelist, garnered critical acclaim for his debut novel And After Many Days.  His writing captures the nuances of Nigerian society and explores themes of family, loss, and the impact of political instability. Ile's work has been praised for its lyrical prose and insightful portrayal of personal and national narratives. He won the NLNG prize for literature in 2013.",
-- "jowhorile.jpg"),

-- ('Steve Biko',
-- 'South African',
-- "1946 King William's Town, South Africa",
-- "Steve Biko, a South African anti-apartheid activist and writer, played a significant role in the Black Consciousness Movement. He advocated for the empowerment and self-awareness of Black people in South Africa. Biko's writings, such as I Write What I Like, continue to inspire and provoke discussions on racism, identity, and social justice.",
-- "stevebiko.jpg"),

-- ('Ike Chukwuemeka Vincent',
-- 'Nigeria',
-- '1931',
-- "Chukwuemeka Vincent, a Nigerian author, gained recognition for his novel The Potter's Wheel. His work delves into themes of personal growth, redemption, and the power of self-discovery. Vincent's writing style combines elements of spirituality, philosophy, and introspection, offering readers a thought-provoking and reflective journey.
-- ", "chukwuemekavincent.jpg"),


-- ('Elechi Amadi',
-- 'Nigeria',
-- '1934: Aluu, Rivers state',
-- "Elechi Amadi, a Nigerian author and former soldier, is renowned for his novel The Concubine. He depicted the traditional life and customs of the Niger Delta region while exploring themes of love, jealousy, and destiny. Amadi's works continue to resonate with readers for their rich cultural insights and compelling storytelling.", "Elechiamadi.jpg");

/* To Update the summary*/
-- update books set summary = CASE
-- WHEN id = 2 THEN "'Arrow of God' takes readers to another Igbo community, focusing on Ezeulu, the chief priest of Ulu. Set during the early 20th century, the novel exposes the tensions between traditional religious beliefs and the growing presence of Christianity. As Ezeulu confronts internal and external conflicts, Achebe weaves a complex narrative exploring the power dynamics, spirituality, and the price of religious and political authority."
-- WHEN id = 3  THEN " Ben Okri presents a mystical tale set in Nigeria. The story follows Azaro, an abiku (spirit child) who straddles the worlds of the living and the spirit realm. Through vivid imagery and magical realism, Okri explores the struggles of poverty, political unrest, and the search for meaning in a nation caught between tradition and modernity. It is a profound reflection on the human condition and the resilience of the human spirit."
-- WHEN id = 4 THEN " THe novel traces the lineage of two half-sisters, Effia and Esi, from 18th-century Ghana to modern-day America. Each chapter focuses on a different descendant, painting a powerful and poignant picture of the African diaspora across generations. Gyasi skillfully tackles themes of slavery, colonization, identity, and the lasting impact of historical trauma. Through interwoven narratives, she highlights the interconnectedness of individuals and the enduring strength of heritage."
-- WHEN id = 5 THEN "Here is a Historic fictional work whose experience of the Nigeria/Biafra War was is being told through the eyes & Experiences of Ugwu. The book follows the lives of Ugwu, Olanna, and Richard. Adichie intricately weaves together their personal stories, capturing the complexities of love, betrayal, and sacrifice amidst the political upheaval."

-- WHEN id = 6 THEN "Set in Senegal, this epistolary novel explores the challenges faced by Ramatoulaye, a middle-aged woman navigating the constraints of a patriarchal society. Bâ tackles themes of polygamy, women's rights, and cultural traditions, highlighting the strength and resilience of African women. Through Ramatoulaye's heartfelt letters, Bâ presents a nuanced depiction of the struggles and triumphs of women in West Africa."
-- WHEN id = 7 THEN "the novel revolves around Baba Segi, a wealthy businessman with multiple wives. As the story unfolds, we delve into the lives and secrets of his four wives, each grappling with personal desires, ambitions, and the complexities of their polygamous marriage. Shoneyin skillfully explores themes of love, betrayal, and the power dynamics within a traditional Nigerian household."
-- WHEN id = 8 THEN "Set during the Mau Mau uprising in Kenya, the novel follows a diverse cast of characters as they navigate the political and social turmoil of the time. Thiong'o delves into themes of sacrifice, betrayal, and the quest for independence. Through vivid storytelling, he provides insights into the complexities of colonialism, nationalism, and the struggle for freedom in East Africa."
-- WHEN id = 9 THEN "Set in apartheid-era South Africa, the novel explores the deep racial divides and social injustices of the time. Paton tells the story of Stephen Kumalo, a Zulu priest, and his search for his missing son in Johannesburg. Through Kumalo's journey, Paton confronts issues of racial inequality, poverty, and the moral challenges faced by individuals in a divided society."
-- WHEN id = 10 THEN "For a Teenager Like me at that time who read this book, I was traumatized. I could feel it because (1) I had a mother (2) we were not privileged. The novel follows the life of Nnu Ego, a traditional Igbo woman, as she strives to fulfill societal expectations of motherhood. Emecheta examines the pressures faced by women in patriarchal societies and delves into themes of identity, motherhood, and the clash between tradition and modernity."
-- WHEN id = 11 THEN "This is a sequel to Things Fall Apart.The novel portrays the life of Obi Okonkwo, a young Nigerian man who returns from studying in England to work in the colonial civil service. Achebe explores the conflicts and dilemmas faced by Obi as he grapples with corruption, cultural clashes, and personal choices in the changing landscape of post-colonial Nigeria."
-- WHEN id = 12 THEN "The novel revolves around the Utu family and their search for their missing teenage son, Paul. Ile skillfully captures the political and environmental tensions in the region while delving into the complexities of family, identity, and the impact of societal changes on individuals and communities."
-- ELSE 
-- book_img
-- END
-- WHERE id in (2,3,4,5,6,7,8,9,10,11,12)
-- ;