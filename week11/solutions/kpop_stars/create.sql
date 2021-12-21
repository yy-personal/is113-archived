drop database if exists kpop;
create database kpop;
use kpop;

create table star (
    id integer auto_increment primary key,
    name varchar(100),
    gender char(1),
    photo varchar(50),
    headline varchar(200)
);

insert into star (name, gender, photo, headline) values ('Jennie', 'F', 'jennie813.jpg', 'She is NOT related to Kim Jong Un');
insert into star (name, gender, photo, headline) values ('Seolhyun', 'F', 'seolhyun482.jpg', 'Her nose is natural');
insert into star (name, gender, photo, headline) values ('Seungri', 'M', 'seungri194.jpg', 'His name is all over the news now!');
insert into star (name, gender, photo, headline) values ('Taeyang', 'M', 'taeyang503.jpg', 'He is still married');