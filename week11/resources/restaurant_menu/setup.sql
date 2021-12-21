drop database if exists week11extrasq6;

create database week11extrasq6;
use week11extrasq6;

CREATE TABLE IF NOT EXISTS food (
    sku         INT NOT NULL,
    fooddesc    VARCHAR(128)  NOT NULL,
    category    VARCHAR(128)  NOT NULL,
    price       FLOAT(10,2)   NOT NULL,
    PRIMARY KEY(sku)
);



INSERT INTO food (sku, fooddesc, category, price) VALUES (101, 'Fish and Chips', 'Main', 15.80);
INSERT INTO food (sku, fooddesc, category, price) VALUES (102, 'Beef Steak', 'Main', 20.90);
INSERT INTO food (sku, fooddesc, category, price) VALUES (103, 'Noodle', 'Main', 10.70);
INSERT INTO food (sku, fooddesc, category, price) VALUES (201, 'Fries', 'Side', 10.70);
INSERT INTO food (sku, fooddesc, category, price) VALUES (202, 'Salad', 'Side', 10.70);
INSERT INTO food (sku, fooddesc, category, price) VALUES (301, 'Orange Juice', 'Drink', 5.70);
INSERT INTO food (sku, fooddesc, category, price) VALUES (302, 'Apple Juice', 'Drink', 6.80);
