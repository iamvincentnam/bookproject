DROP TABLE IF EXISTS books;

CREATE TABLE books (
  book_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  author_table_id INT(11) NOT NULL,
  genre VARCHAR(255),
  summary LONGTEXT NOT NULL,
  book_img VARCHAR(255) NOT NULL DEFAULT 'placeholder_books.jpg',
  released_year VARCHAR(255) DEFAULT NULL,
  FOREIGN KEY (author_table_id) REFERENCES authors(id) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO books (title, author_table_id, summary, book_img, released_year)
VALUES ('Things Fall Apart',
        1,
        'Set in Nigeria during the late 19th century, \'Things Fall Apart\' portrays the life of Okonkwo, a respected warrior of the Igbo community. The novel delves into the clash between traditional African values and the encroaching influence of colonialism. Through Okonkwo\'s personal struggles and the disintegration of his society, Achebe masterfully explores themes of cultural identity, power, and the tragic consequences of change.',
        'tfa.jpg',
        '1958'),
       ('Arrow of God',
        1,
        'This takes readers to another Igbo community, focusing on Ezeulu, the chief priest of Ulu. Set during the early 20th century, the novel exposes the tensions between traditional religious beliefs and the growing presence of Christianity. As Ezeulu confronts internal and external conflicts, Achebe weaves a complex narrative exploring the power dynamics, spirituality, and the price of religious and political authority.',
        'AOG.jpg',
        '1964');
