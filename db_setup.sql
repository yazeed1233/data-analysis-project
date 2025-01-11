-- Create a new SQLite database
CREATE TABLE dictionary (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    word TEXT NOT NULL UNIQUE,
    definition TEXT NOT NULL
);

-- Insert sample data
INSERT INTO dictionary (word, definition) VALUES ('apple', 'A fruit that is typically round and red, green, or yellow.');
INSERT INTO dictionary (word, definition) VALUES ('banana', 'A long curved fruit that grows in clusters and has soft pulpy flesh and yellow skin when ripe.');
INSERT INTO dictionary (word, definition) VALUES ('cherry', 'A small, round fruit that is typically red or black.');
