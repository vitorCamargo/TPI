CREATE DATABASE bdViagem;
USE bdViagem;

CREATE TABLE Login(
id int primary key auto_increment,
nome varchar(100) not null,
login varchar(50) not null,
senha varchar(30) not null);

CREATE TABLE Reserva(
id int primary key auto_increment,
nome varchar(100) not null,
nome_reserva varchar(20) not null,
horario varchar(10),
qtd int not null,
preco_unit float not null,
preco_total float not null,
id_login int,
FOREIGN KEY(id_login) REFERENCES Login (id));