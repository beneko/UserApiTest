DROP DATABASE userapitest;
CREATE DATABASE userapitest;
USE userapitest;
CREATE TABLE users(
                      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      username VARCHAR(100) NOT NULL UNIQUE,
                      PASSWORD TEXT NOT NULL,
                      email VARCHAR(100) NOT NULL
);