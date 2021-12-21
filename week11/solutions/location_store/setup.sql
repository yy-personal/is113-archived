drop database if exists week11extrasq4;

create database week11extrasQ4;
use week11extrasQ4;

CREATE TABLE IF NOT EXISTS shop(
    id           INT NOT NULL AUTO_INCREMENT,
    shopname     VARCHAR(128)  NOT NULL,
    location     VARCHAR(128)  NOT NULL,
    PRIMARY KEY(id)
);


INSERT INTO shop (shopname, location) VALUES ('MyShop', 'Jurong');
INSERT INTO shop (shopname, location) VALUES ('MyShop', 'Bencoolen');
INSERT INTO shop (shopname, location) VALUES ('FamilyShop', 'Jurong');
INSERT INTO shop (shopname, location) VALUES ('BuyFromMe', 'Jurong');
INSERT INTO shop (shopname,location) VALUES ('ComeBuy', 'Bencoolen');
INSERT INTO shop (shopname, location) VALUES ('AAASuperstore', 'Bencoolen');
INSERT INTO shop (shopname, location) VALUES ('LowestPrice', 'Changi');

CREATE TABLE IF NOT EXISTS product(
    id           INT NOT NULL AUTO_INCREMENT,
    shopname     VARCHAR(128) NOT NULL,
    item         VARCHAR(128)  NOT NULL,
    category     VARCHAR(128) NOT NULL,
    price   	 FLOAT(10,2) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO product (shopname , item, category, price) VALUES ('MyShop','Apple', 'Fruit', 0.65);
INSERT INTO product (shopname , item, category, price) VALUES ('MyShop','Orange','Fruit', 0.80);
INSERT INTO product (shopname, item, category, price) VALUES ('MyShop','Celery','Vegetable', 2.70);
INSERT INTO product (shopname , item, category, price) VALUES ('MyShop','Cabbage','Vegetable', 3.00);
INSERT INTO product (shopname , item, category, price) VALUES ('MyShop','Broccoli','Vegetable', 1.85);

INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Orange','Fruit', 0.90);
INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Celery','Vegetable', 3.10);
INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Cabbage', 'Vegetable', 3.00);
INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Broccoli','Vegetable', 2.85);
INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Transformer','Toy', 25.20);
INSERT INTO product (shopname , item, category, price) VALUES ('FamilyShop','Lego','Toy', 85.20);

INSERT INTO product (shopname , item, category, price) VALUES ('ComeBuy', 'Pen','Stationery', 1.20);
INSERT INTO product (shopname , item, category, price) VALUES ('ComeBuy', 'Pencil','Stationery', 0.20);



