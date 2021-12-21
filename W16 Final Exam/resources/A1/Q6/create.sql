drop database if exists trialfinal_q6;
create database trialfinal_q6;
use trialfinal_q6;

create table user (
    id integer auto_increment primary key,
    username varchar(200),
    passwordHash varchar(1000),
    employeeType varchar(100)
);

insert into user (username, passwordHash, employeeType) values ('donald', '$2y$10$h.IgQD4s28VppNZSrgNXNutTT272hEIOjj0nulqrqF7w0a.KSzIUe', 'management');
insert into user (username, passwordHash, employeeType) values ('hillary', '$2y$10$tJluGYzd1W8LxaUuC6Qn1uVDaK1V42cZkUEqGrsuLSpjAnjL/Rm/2', 'normal');