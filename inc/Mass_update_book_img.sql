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

update books set author_img = CASE
WHEN id = 1 THEN 'A_NLAE.jpg'
WHEN id = 2 THEN 'A_NLAE.jpg'
WHEN id = 3  THEN 'A_TFR.jpg'
WHEN id = 4 THEN 'A_H.jpg'
WHEN id = 5 THEN 'A_HOAYS.JPG'
WHEN id = 6 THEN 'A_SLAL.jpg'
WHEN id = 7 THEN 'A_TSLOBSW.jpg'
WHEN id = 8 THEN 'A_AGOW.jpg'
WHEN id = 9 THEN 'A_CTBC.jpg'
WHEN id = 10 THEN 'A_TJOM.jpg'
WHEN id = 11 THEN 'A_NLAE.jpg'
WHEN id = 12 THEN 'A_AAMD.jpg'
ELSE 
book_img
END
WHERE id in (1,2,3,4,5,6,7,8,9,10,11,12)
;
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