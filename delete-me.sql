CREATE DATABASE database_webprog_lab;

USE DATABASE database_webprog_lab;

CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(25) UNIQUE NOT NULL,
    password varchar(255) NOT NULL,
    mothers_last_name varchar(25) NOT NULL
);

CREATE TABLE tasks(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_user int,
    judul varchar(100) UNIQUE,
    due date,
    description varchar(255),
    done boolean,
    status char(1),
    FOREIGN KEY (id_user) REFERENCES users(id)
);

