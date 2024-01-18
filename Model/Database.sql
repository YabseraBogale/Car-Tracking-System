create table User(
    userid int AUTO_INCREMENT not null primary key,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    middlename varchar(20) not null,
    phonenumber int not null,
    -- needs to be hashed and then stored in the databases
    password varchar(30) not null
)

create table Car(

)