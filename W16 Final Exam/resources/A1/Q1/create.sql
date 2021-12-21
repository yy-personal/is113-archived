drop database if exists trialfinal_q1;
create database trialfinal_q1;
use trialfinal_q1;

create table product (
    id integer auto_increment not null primary key,
    name varchar(100),
    price double
);

create table inventory (
    product_id integer not null,
    constraint fk_product foreign key (product_id) references product(id),
    size varchar(1),
    stock integer
);


insert into product (`name`, price) values ('SIS T-Shirt', 15);
insert into product (`name`, price) values ('SMU T-Shirt', 17);
insert into product (`name`, price) values ('LKCSB Polo Shirt', 22);

insert into inventory values (1, 'S', 1);
insert into inventory values (1, 'M', 2);
insert into inventory values (1, 'L', 3);

insert into inventory values (2, 'S', 1);
insert into inventory values (2, 'L', 3);

insert into inventory values (3, 'S', 5);
insert into inventory values (3, 'M', 2);
insert into inventory values (3, 'L', 1);