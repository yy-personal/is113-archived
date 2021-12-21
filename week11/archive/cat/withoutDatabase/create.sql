drop database if exists animals;
create database animals;

use animals;

create table cat (
    name varchar(50),
    age integer,
    gender char(1),
    status char(1)
);

insert into cat (name, age, gender, status) values ('Dirty', 12, 'M', 'A');
insert into cat (name, age, gender, status) values ('Filthy', 7, 'F', 'A');
insert into cat (name, age, gender, status) values ('Boring', 3, 'M', 'A');
insert into cat (name, age, gender, status) values ('Needy', 3, 'M', 'P');
insert into cat (name, age, gender, status) values ('Lazy', 1, 'F', 'P');
insert into cat (name, age, gender, status) values ('Stinky', 4, 'F', 'A');
insert into cat (name, age, gender, status) values ('Sad', 3, 'F', 'A');
