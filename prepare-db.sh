mysql -h 127.0.0.1 -P 13306 -u db_user -ppassword db <<EOT

DROP TABLE if exists user;
DROP TABLE if exists city;
DROP TABLE if exists wojewodztwo;
create table user(id INT AUTO_INCREMENT UNIQUE PRIMARY KEY, city_id INT, name VARCHAR(20), surname VARCHAR(30), birthday DATE) CHARACTER SET utf8 COLLATE utf8_unicode_ci;
insert into user (city_id, name, surname, birthday) values (1, 'Anna', 'Nowak', '2000-01-01'), (2, 'Bronisław', 'Bańkowski', '1999-12-31'), (1, 'Cyprian', 'Cyliński', '1998-06-01');

create table wojewodztwo(id INT AUTO_INCREMENT UNIQUE PRIMARY KEY, wojewodztwo VARCHAR(100)) CHARACTER SET utf8 COLLATE utf8_unicode_ci;
insert into wojewodztwo (wojewodztwo) values ('Wielkopolskie');

create table city(id INT AUTO_INCREMENT UNIQUE PRIMARY KEY, wojewodztwo_id INT, city VARCHAR(100)) CHARACTER SET utf8 COLLATE utf8_unicode_ci;
insert into city (city, wojewodztwo_id) values ('Poznań', 1), ('Gniezno', 1);

EOT
