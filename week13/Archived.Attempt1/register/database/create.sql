drop database if exists week13;
create database week13;
use week13;

create table account (
    username varchar(30) primary key,
    password varchar(100)
);

insert into account values ('selena', 'selena123');
insert into account values ('justin', 'justin123');
insert into account values ('britney', 'britney123');