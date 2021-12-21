drop database if exists week11extras;

create database week11extras;
use week11extras;

CREATE TABLE IF NOT EXISTS person (
    id           INT NOT NULL AUTO_INCREMENT,
    name        VARCHAR(128)  NOT NULL,
    gender      CHAR(2) NOT NULL,
    age   		INT NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO person (name, gender, age) VALUES ('Amy', 'F', '28');
INSERT INTO person (name, gender, age) VALUES ('Bill', 'M', '18');
INSERT INTO person (name, gender, age) VALUES ('Charles', 'M', '17');
INSERT INTO person (name, gender, age) VALUES ('Doraemon', 'F', '32');