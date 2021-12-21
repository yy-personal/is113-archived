drop database if exists week12school;
create database week12school;
use week12school;

create table grade (
    username varchar(30),
    course_id varchar(30),
    course_title varchar(100),
    course_grade varchar(10)
);

insert into grade values ('selena', 'IS111', 'Introduction to Programming', 'C');
insert into grade values ('justin', 'IS111', 'Introduction to Programming', 'A+');
insert into grade values ('britney', 'IS111', 'Introduction to Programming', 'B');
insert into grade values ('zac', 'IS111', 'Introduction to Programming', 'B');

insert into grade values ('selena', 'IS112', 'Introduction to Databases', 'B-');
insert into grade values ('justin', 'IS112', 'Introduction to Databases', 'A-');
insert into grade values ('britney', 'IS112', 'Introduction to Databases', 'B+');
insert into grade values ('zac', 'IS112', 'Introduction to Databases', 'C+');

insert into grade values ('selena', 'IS113', 'Introduction to Web', 'C+');
insert into grade values ('justin', 'IS113', 'Introduction to Web', 'A');
insert into grade values ('britney', 'IS113', 'Introduction to Web', 'A-');
insert into grade values ('zac', 'IS113', 'Introduction to Web', 'B-');

insert into grade values ('selena', 'IS210', 'Advanced Programming', 'C-');
insert into grade values ('justin', 'IS210', 'Advanced Programming', 'A');
insert into grade values ('britney', 'IS210', 'Advanced Programming', 'B+');
insert into grade values ('zac', 'IS210', 'Advanced Programming', 'C');

insert into grade values ('selena', 'IS230', 'Advanced Web', 'D+');
insert into grade values ('justin', 'IS230', 'Advanced Web', 'B+');
insert into grade values ('britney', 'IS230', 'Advanced Web', 'B');
insert into grade values ('zac', 'IS230', 'Advanced Web', 'C-');

insert into grade values ('selena', 'ECON100', 'Introduction to Economics', 'C');
insert into grade values ('justin', 'OBHR101', 'Introduction to Organizations', 'A-');
insert into grade values ('britney', 'PSYC200', 'Psychology Survey Methods', 'B');
insert into grade values ('zac', 'MKTG101', 'Introduction to Marketing', 'B-');


create table account (
    username varchar(30),
    password varchar(30)
);

insert into account values ('selena', 'selena123');
insert into account values ('justin', 'justin123');
insert into account values ('britney', 'britney123');
insert into account values ('zac', 'zac123');