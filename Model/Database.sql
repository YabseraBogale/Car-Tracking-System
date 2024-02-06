-- name of database
-- username: yabsera
-- used pass here and published as it was school project and password shouldn't be made public
-- password: 12345678


create database carTrackingSystem;

create table User(
    id int not null AUTO_INCREMENT primary key,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    username varchar(20) not null,
    email varchar(20) not null,
    password varchar(20) not null
    
);

create table Car(

    id int not null primary key,
    platenumber varchar(15) not null,
    carimage varchar(20) not null,
    foreign key(id) references User(id)

)

ALTER TABLE User AUTO_INCREMENT = 1;
 
insert into User(id,firstname,lastname,username,email,password) values(?,'?','?','?','?','?');
insert into Car(id,platenumber,carimage) values(?,'?','?')