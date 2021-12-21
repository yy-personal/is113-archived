drop database if exists week12LT1;
create database week12LT1;
use week12LT1;

create table grade (
    email varchar(200),
    status varchar(100),
    q1 integer,
    q2 integer,
    q3 integer
);

insert into grade values('jcfrantz@smu.edu.sg', 'PASS', 8, 8, 4);
insert into grade values('muhammadss@smu.edu.sg', 'PASS', 7, 8, 3);
insert into grade values('jeddy.tan@smu.edu.sg', 'PASS', 8, 7, 2);
insert into grade values('valerie.lee@smu.edu.sg', 'PASS', 7, 7, 1);
insert into grade values('denzel.chan@smu.edu.sg', 'PASS', 8, 8, 4);
insert into grade values('maurice.lim@smu.edu.sg', 'PASS', 7, 6, 2);
insert into grade values('bowen.hao@smu.edu.sg', 'PASS', 8, 7, 0);
insert into grade values('leandralee@smu.edu.sg', 'PASS', 7, 8, 1);

insert into grade values('jermynyeo@smu.edu.sg', 'FAIL', 4, 3, 0);
insert into grade values('robbie.ng@smu.edu.sg', 'FAIL', 5, 2, 0);
insert into grade values('gigi.teo@smu.edu.sg', 'FAIL', 3, 3, 0);
insert into grade values('belle.lee@smu.edu.sg', 'FAIL', 7, 0, 0);
insert into grade values('susanto@smu.edu.sg', 'FAIL', 6, 1, 0);
insert into grade values('jess.ng@smu.edu.sg', 'FAIL', 6, 2, 0);
insert into grade values('hcboon@smu.edu.sg', 'FAIL', 5, 4, 0);
insert into grade values('dakhnovskiy@smu.edu.sg', 'FAIL', 3, 4, 0);