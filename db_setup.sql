CREATE DATABASE dictionary;
USE dictionary;
CREATE TABLE words(
    id INT AUTO_INCREMENT PRIMARY KEY,
    word VARCHAR(100),
    definition TEXT
);
INSERT INTO words(word, definition) VALUES
('apple', 'A fruit that is typically red, green, or yellow.'),
('banana', 'A long curved fruit that grows in clusters and has soft pulpy flesh and yellow skin when ripe.'),
('cherry', 'A small, round fruit that is typically red or black.'),
('date', 'The sweet fruit of the date palm, often eaten dried.'),
('elderberry', 'A small dark purple fruit that grows in clusters on the elder tree.');