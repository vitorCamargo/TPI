CREATE DATABASE bdLogin;
USE bdLogin;

CREATE TABLE Usuarios(
id int primary key auto_increment,
nome varchar(100),
login varchar(50),
senha varchar(30));

INSERT INTO Usuarios VALUES (null, "Administrador do Sistema", "admin", "123");
INSERT INTO Usuarios VALUES (null, "Vitor Bueno de Camargo", "vitor", "vbc4m@rg0");