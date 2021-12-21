drop database if exists wad_warehouse;
create database wad_warehouse;
use wad_warehouse;


drop table if exists category;
create table category (
    category_name varchar(32) primary key
);

insert into category (category_name) 
values 
	('Fruit'), 
	('Meat'),
	('Drink'),
	('Seafood'),
	('Cereals'),
	('Sweets and Chocolate'),
	('Alcoholic Drink');


drop table if exists product;
create table product (
    product_name varchar(32) primary key,
    category_name varchar(32),
    quantity integer,
    price double(12,2)
);

insert into product (product_name, category_name, quantity, price) 
values 
	('Apple', 'Fruit', 12, 2.55),
	('Orange', 'Fruit', 2, 3.45),
	('Pear', 'Fruit', 25, 3.65),
	('Durian', 'Fruit', 2, 29.9),
	('Papaya', 'Fruit', 22, 7.15),
	('Banana', 'Fruit', 23, 3.25),
	('Grape', 'Fruit', 2, 4.65);

insert into product (product_name, category_name, quantity, price)
values 
	('Chicken drumstick', 'Meat', 1, 2.5),
	('Whole chicken', 'Meat', 11, 9.9),
	('Half chicken', 'Meat', 1, 5.5),
	('Chicken wings', 'Meat', 10, 2.0),
	('Beef', 'Meat', 21, 5.15),
	('Mutton', 'Meat', 31, 4.15);

insert into product (product_name, category_name, quantity, price)
values 
	('Coke', 'Drink', 24, 1.4),
	('100 Plus', 'Drink', 41, 1.6),
	('Pepsi', 'Drink', 34, 1.4),
	('Lemon Tea', 'Drink', 42, 1.2),
	('Barley', 'Drink', 4, 1.2),
	('Mineral Water', 'Drink', 4, 0.8);

insert into product (product_name, category_name, quantity, price)values 
	('Promfret', 'Seafood', 3, 18.8),
	('Salmon', 'Seafood', 23, 5.95),
	('Prawn', 'Seafood', 13, 2.15),
	('Crab', 'Seafood', 35, 20.0);

insert into product (product_name, category_name, quantity, price)values 
	('Honey Star', 'Cereals', 35, 3.45),
	('Aunty Toby', 'Cereals', 51, 3.45),
	('Oats and Oats', 'Cereals', 25, 2.0),
	('Rasin Bran', 'Cereals', 5, 2.15),
	('Crunchy Peanut', 'Cereals', 15, 4.50),
	('Cocoa Pebbles', 'Cereals', 5, 4.50);

insert into product (product_name, category_name, quantity, price)
values 
	('White chocolate', 'Sweets and Chocolate', 6, 2.15),
	('Lollipop', 'Sweets and Chocolate', 16, 1.2),
	('Minty Pops', 'Sweets and Chocolate', 62, 2.1),
	('Dark chocolate', 'Sweets and Chocolate', 36, 2.25),
	('Chewy Gums', 'Sweets and Chocolate', 26, 3.0);


insert into product (product_name, category_name, quantity, price)
values 
	('Soju', 'Alcoholic Drink', 0, 10.0),
	('Liger Beer', 'Alcoholic Drink', 10, 6.55),
	('Hadoken Beer', 'Alcoholic Drink', 20, 6.55),
	('Champion Champagne', 'Alcoholic Drink', 0, 12.45),
	('Shoruken Beer', 'Alcoholic Drink', 0, 5.55);





