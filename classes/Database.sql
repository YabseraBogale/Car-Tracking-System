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

    id int not null AUTO_INCREMENT primary key,
    platenumber varchar(15) not null,
    carimage varchar(20) not null,
    foreign key(id) references User(id)

)

create table Location(
    id int not null AUTO_INCREMENT primary key,
    lat int not null,
    long int not null,
    foreign key(id) references Car(id)
)

create table Admin(
    id int not null AUTO_INCREMENT primary key,
    username varchar(30)not null,
    password varchar(20) not null

)


insert

insert into Admin(username,password) values('yabsera','12345678');
insert into Admin(username,password) values('mikie','123456788');
insert into Admin(username,password) values('Tare','123456789');

insert into User(firstname,lastname,username,email,password) values('?','?','?','?','?');
insert into Car(platenumber,carimage) values('?','?')
insert into Location(lat,long) values(?,?)
Delete from CAR Where platenumber="?";