drop database if exists week13extra;

create database week13extra;
use week13extra;

CREATE TABLE if not exists useraccount (
  username varchar(20) NOT NULL,
  password_hash varchar(64) NOT NULL
);

INSERT INTO useraccount (username, password_hash) VALUES
('zack', '$2y$10$EKPRz0VyZPumX63D7Z768ORzQMPNO4wg00AChOMUwKi/wOp1f7SlK'),
('yew', '$2y$10$bs3aXFCJyYfP7jWljcRjxukiVbhRBLWNSJgTOD/CHWQVgV7hCd0t.'),
('wong', '$2y$10$wD9/9pDxg3/JSavLqszwxuGZ1odhUBCGos8LOlYu0Y4NVuIQEmq1e'),
('tan', '$2y$10$ys8PC5qrBElBGtkU3wwrMOiIQdBkgyQibOzDZRQv1EQrJ6H1YtnYy');


ALTER TABLE useraccount 
  ADD PRIMARY KEY (username);
  
