drop database if exists week12extra;

create database week12extra;
use week12extra;

CREATE TABLE IF NOT EXISTS item (
    name       VARCHAR(128)  NOT NULL,
    price      INT NOT NULL,
    PRIMARY KEY(name)
);

INSERT INTO item (name, price) VALUES ('iPhoneXs', 2088);
INSERT INTO item (name, price) VALUES ('iPhoneXsMax', 2388);
INSERT INTO item (name, price) VALUES ('SamsungS10e', 988);
INSERT INTO item (name, price) VALUES ('SamsungS10', 1228);
INSERT INTO item (name, price) VALUES ('SamsungS10plus', 1428);
INSERT INTO item (name, price) VALUES ('HuaweiMate20Pro', 1080);
INSERT INTO item (name, price) VALUES ('HuaweiP30', 1880);
INSERT INTO item (name, price) VALUES ('LGV40Thinq', 1098);
INSERT INTO item (name, price) VALUES ('LGG7Thinq', 589);




