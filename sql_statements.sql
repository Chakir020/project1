-- opdracht 5
Create database project1;
use project1;

--opdracht 5.1
create table Account(
	id int auto_increment not null,
    email varchar(255)unique ,
    password varchar(255),
    Primary key(id)
);

--opdracht 5.2 
create table Persoon(
	id int auto_increment not null,
    account_id int not null,
    Voornaam varchar(255),
    tussenvoegsel varchar(255),
    Achternaam varchar(255),
    gebruikersnaam varchar(255),
    primary key(id),
    foreign key(account_id) references account(id)
);

