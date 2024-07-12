CREATE DATABASE kosp9197_kosmoskita

USE kosp9197_kosmoskita;

-- Untuk fitur Admin
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);


INSERT INTO users (username, password, full_name, email) VALUES ('admin', MD5('admin'), 'Admin', 'anshafarell@gmail.com');

-- Untuk fitur Fakta Menarik
CREATE TABLE fun_facts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fact_text TEXT
);

-- Untuk fitur Kabar Astronomi
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(50) NOT NULL,
    content TEXT NOT NULL,
    image LONGBLOB,
    submitted_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_edited_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author) REFERENCES users(username)
);