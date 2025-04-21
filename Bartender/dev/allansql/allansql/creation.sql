DROP DATABASE IF EXISTS Allan ;

CREATE DATABASE Allan;

USE Allan;

CREATE TABLE pages(
	id INT PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) UNIQUE NOT NULL,
    titre VARCHAR(255),
    description VARCHAR(255),
    accroche VARCHAR(255),
    texte TEXT    
);

CREATE TABLE images(
	id INT PRIMARY KEY AUTO_INCREMENT,
    page_id INT,
    FOREIGN KEY(page_id) REFERENCES pages(id),
    image_url VARCHAR(255)
)
