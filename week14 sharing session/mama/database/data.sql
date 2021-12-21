drop database if exists sharingstore;
create database sharingstore;
use sharingstore;

create table store (
    name varchar(30) primary key,
    owner varchar(100)
);

insert into store values ('East', 'Kim Jong Un');
insert into store values ('West', 'Kim Yo Jong');


create table item (
    id varchar(30) primary key,
    description varchar(100),
    price decimal(15,2),
    quantity integer,
    store_name varchar(100),
    foreign key (store_name) references store(name)
);

insert into item values('A123', "Supreme Shampoo", 5.75, 12, 'East');
insert into item values('B456', "Supreme Toothbrush", 3.50, 5, 'East');
insert into item values('C789', "Supreme Pencil", 1.25, 7, 'West');
insert into item values('D987', "Supreme Coffee", 4.75, 30, 'West');
insert into item values('E654', "Supreme Beer", 3.75, 100, 'West');


create table account (
    username varchar(30) primary key,
    password varchar(100)
);

insert into account values ('selena', 'selena123');
insert into account values ('justin', 'justin123');



create table account_secure (
    username varchar(30) primary key,
    password varchar(100)
);

insert into account_secure values ('selena', '$2y$10$nCVWx9eeRgyeZ4LorSzaQ.HwBobAzeq7xQJn9TM8lIYgG7iKtEMOi');
insert into account_secure values ('justin', '$2y$10$ZmU8wM5z8tP2OT/bKB/49e7tfAHFHMMY/SSAtU801eE8WGPJEG2jG');


