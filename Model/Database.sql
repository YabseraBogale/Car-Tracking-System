-- name of database
-- username: yabsera
-- used pass here and published as it was school project and password shouldn't be made public
-- password: 12345678


create database carTrackingSystem;

create table User(
    userid int NOT NULL primary key,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    middlename varchar(20) not null,
    phonenumber int not null,
    -- needs to be hashed and then stored in the databases
    password varchar(30) not null
)

create table Car(
    platenumber varchar(12) not null primary key,
    driverid int not null,
    currentlocation text not null,
    startinglocation text not null,
    carimage varchar(30) not null,
    FOREIGN KEY (driverid) REFERENCES User(userid) 
);


-- Admin roles are going to be in the form of function
create table Admin(
    userid int not null,
    password varchar(30) not null,
    FOREIGN KEY (userid) REFERENCES User(userid)  
);

-- insert statments
insert into User(firstname,middlename,lastname,phonenumber,password) values(,,,)

-- example


insert into User(firstname,middlename,lastname,phonenumber,password) values("yabsera","bogale","abate",251920201161,"123qwe")

insert into Car(platenumber,driverid,currentlocation,startinglocation,carimage) values(,,,,)

-- select statemnts for cars

 
