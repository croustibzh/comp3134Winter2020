CREATE USER 'morgan'@'localhost' IDENTIFIED BY 'moejoe';

GRANT ALL PRIVILEGES ON * . * TO 'morgan'@'localhost';


CREATE SCHEMA if not exists my_db;
use my_db;
CREATE TABLE IF NOT EXISTS Users (
 ID INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(15) not null,
 email VARCHAR(30) not null,
 firstname VARCHAR(30) not null,
 lastname VARCHAR(30) not null,
 active BOOL not null
 );
 
 INSERT INTO Users (username,email,firstname,lastname,active)
value ('bblanc', 'ben@rip_php.com', 'Ben', 'Blanc', 0);

 INSERT INTO Users (username,email,firstname,lastname,active)
value ('jdoe', 'john@meh_php.com', 'John', 'Doe', 0);

INSERT INTO Users (username,email,firstname,lastname,active)
value ('plop', 'plop@love_php.com', 'Philip', 'Morris', 0);

INSERT INTO Users (username,email,firstname,lastname,active)
value ('etarcos', 'oldgreek@mail.com', 'Soc', 'Rates', 1);

INSERT INTO Users (username,email,firstname,lastname,active)
value ('scar', 'scar@email.com', 'Sam', 'Carter', 0);

INSERT INTO Users (username,email,firstname,lastname,active)
value ('danjack', 'daniel@stargate.com', 'Daniel', 'Jackson', 1);