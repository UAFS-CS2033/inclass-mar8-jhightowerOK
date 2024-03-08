drop database if exists mar8DB;
drop user if exists 'mar8DBuser'@'localhost';
create database mar8DB;
use mar8DB;

create user 'mar8DBuser'@'localhost' identified by 'mar8DBpass';
grant all on mar8DB.* to 'mar8DBuser'@'localhost';

create table profiles(
   profileID int AUTO_INCREMENT,
   firstName varchar(100),
   lastName varchar (100),
   username varchar(100),
   passwd varchar(100),
   primary key(profileID)
)engine=innodb;

INSERT INTO profiles (firstName, lastName, username, passwd) VALUES
('John', 'Doe', 'johndoe', 'password123'),
('Jane', 'Smith', 'janesmith', 'pass456'),
('Robert', 'Johnson', 'robjohn', 'securepass'),
('Emily', 'Brown', 'emilyb', '1234abcd'),
('Michael', 'Williams', 'mike_w', 'p@ssword!'),
('Amanda', 'Jones', 'amandaj', 'pass123'),
('Christopher', 'Taylor', 'ctaylor', 'taylorpass'),
('Jennifer', 'Miller', 'jenmiller', 'millerpwd'),
('David', 'Anderson', 'david_a', 'anderson123'),
('Laura', 'Robinson', 'laurar', 'robinsonpass');
