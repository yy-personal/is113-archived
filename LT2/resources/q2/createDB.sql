drop database if exists lt2q2;
create database lt2q2;
use lt2q2;

create table accounts (
    username varchar(40)  primary key,
    password varchar(40),
    fullname varchar(40),
    role varchar(10)
);

insert into accounts (username, password, fullname, role) values 
    ('user1', 'user1', 'Barack Obama', 'client'),
    ('user2', 'user2', 'Donald Trump','client'),
    ('manager1', 'manager1', 'Bill Gate','manager');


create table aircons (
    aircon_id varchar(40)  primary key,
    username varchar(40),
    name varchar(40),
    location varchar(60),
    last_request_date date,
    last_request_status varchar(40)
);

insert into aircons (aircon_id, username, name, location, last_request_date,last_request_status) values 
    ('u1_aircon1', 'user1', 'Bed Room 1', 'Clementi Ave 2, Blk351', '2020-08-09','rejected'),
    ('u1_aircon2', 'user1', 'Bed Room 2', 'Clementi Ave 2, Blk351','2020-05-11','pending'),
    ('u1_aircon3', 'user1', 'Bed Room 3', 'Clementi Ave 2, Blk351','2020-03-04','accepted'),
    ('u1_aircon4', 'user1', 'Living Room 1', 'Clementi Ave 2, Blk351','2020-01-10','completed'),
    ('u2_aircon1', 'user2', 'Bed Room 1', '29 International Business Park Rd', '2020-08-09','completed'),
    ('u2_aircon2', 'user2', 'Bed Room 2', '29 International Business Park Rd','2020-05-11','pending'),
    ('u2_aircon3', 'user2', 'Bed Room 3', '29 International Business Park Rd','2020-03-04','accepted'),
    ('u2_aircon4', 'user2', 'Living Room 1', '29 International Business Park Rd','2020-01-10','completed');
    

create table requests (
    id integer auto_increment primary key,
    aircon_id varchar(40),
    request_date date,
    status varchar(40)
);

insert into requests (aircon_id, request_date,status) values 
    ('u1_aircon2', '2020-05-11','pending'),
    ('u1_aircon3', '2020-03-04','accepted'),
    ('u2_aircon2', '2020-05-11','pending'),
    ('u2_aircon3', '2020-03-04','accepted');
   