-- name of database
-- username: yabsera
-- used pass here and published as it was school project and password shouldn't be made public
-- password: 12345678


create database carrentalsystem;

create table User(
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    username varchar(20) not null,
    phonenumber int not null primary key,
    -- needs to be hashed and then stored in the databases
    password varchar(255) not null
);

create table Car(
    platenumber varchar(12) not null primary key,
    driverid int not null,
    price float not null,
    carimage varchar(30) not null,
    
);


-- Admin roles are going to be in the form of function
create table Admin(
    userid int not null,
    password varchar(30) not null,
   
);

-- insert statments
insert into User(firstname,middlename,username,phonenumber,password) values(,,,)

-- example


insert into User(firstname,middlename,lastname,phonenumber,password) values("yabsera","bogale","abate",251920201161,"123qwe")

insert into Car(platenumber,driverid,price,carimage) values(,,,,)

-- select statemnts for cars

 
