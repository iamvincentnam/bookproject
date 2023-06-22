DROP TABLE IF EXISTS `Books`;
CREATE TABLE `Books` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `released_year` int(11) NOT NULL
);

INSERT INTO `Books` (`title`, `author`, `released_year`) VALUES
('Things Fall Apart', 'Chinua Achebe', 1958),
('Arrow of God', 'Chinua Achebe', 1964),
('The Famished Road', 'Ben Okri', 1991),
('Homegoing', 'Yaa Gyasi', 2016),
('Half of a Yellow Sun', 'Chimamanda Ngozi Adichie', 2016),
('So Long a Letter', 'Mariama Bâ', 1979),
('The Secret Lives of Baba Segi\'s Wives', 'Lola Shoneyin', 2010),
('A Grain of Wheat', 'Ngũgĩ wa Thiong\'o', 1967),
('Cry, the Beloved Country', 'Alan Paton', 1948),
('The Joys of Motherhood', 'Buchi Emecheta', 1979),
('No Longer at Ease', 'Chinua Achebe', 1960),
('And After Many Days', 'Jowhor Ile', 2014);
