DROP TABLE IF EXISTS authors;
CREATE TABLE authors (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  author_name VARCHAR(255) NOT NULL,
  nationality VARCHAR(255) NOT NULL,
  born_in VARCHAR(255) NOT NULL,
  author_img VARCHAR(255) NOT NULL DEFAULT 'placeholder.jpg',
  biography LONGTEXT NOT NULL
);

INSERT INTO authors (author_name, nationality, born_in, author_img, biography)
VALUES ('Chinua Achebe',
        'Nigerian',
        'November 16, 1930',
        'Chinuaachebe.jpg',
        'Achebe grew up in the Igbo (Ibo) town of Ogidi, Nigeria. After studying English and literature at University College (now the University of Ibadan), Achebe taught for a short time before joining the staff of the Nigerian Broadcasting Corporation in Lagos, where he served as director of external broadcasting in 1961–66. In 1967 he cofounded a publishing company at Enugu with the poet Christopher Okigbo, who died shortly thereafter in the Nigerian civil war for Biafran independence, which Achebe openly supported.');
