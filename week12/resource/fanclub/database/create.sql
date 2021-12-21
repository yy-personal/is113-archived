drop database if exists week12fanclub;
create database week12fanclub;
use week12fanclub;

create table account (
    username varchar(30),
    hashed_password varchar(100)
);

insert into account values ('selena', '$2y$10$nCVWx9eeRgyeZ4LorSzaQ.HwBobAzeq7xQJn9TM8lIYgG7iKtEMOi');
insert into account values ('justin', '$2y$10$ZmU8wM5z8tP2OT/bKB/49e7tfAHFHMMY/SSAtU801eE8WGPJEG2jG');
insert into account values ('britney', '$2y$10$dd4R2jMngBKukYXhBhkCzO2AEviki5TZjT.degywfBYJQVqfF8nJu');