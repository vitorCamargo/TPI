CREATE DATABASE bdCafeteria;
USE bdCafeteria;

CREATE TABLE Categoria (
idcategoria int primary key auto_increment,
descricao varchar(45) NOT NULL);

CREATE TABLE Produto (
idproduto int primary key auto_increment,
descricao varchar(45) NOT NULL,
preco double NOT NULL,
categoria INT NULL,
FOREIGN KEY (categoria) REFERENCES Categoria (idcategoria));

INSERT INTO Categoria VALUES (null, "CAFÉ");
INSERT INTO Categoria VALUES (null, "LANCHES");
INSERT INTO Categoria VALUES (null, "SALGADOS");
INSERT INTO Categoria VALUES (null, "BEBIDAS");

INSERT INTO Produto VALUES (null, "EXPRESSO PEQUENO", 8.30, 1);
INSERT INTO Produto VALUES (null, "CAPUCCINO GRANDE", 4.30, 1);
INSERT INTO Produto VALUES (null, "LATTE GRANDE", 5.40, 1);
INSERT INTO Produto VALUES (null, "X FRANGO", 9.30, 2);
INSERT INTO Produto VALUES (null, "BAURU", 6.40, 2);
INSERT INTO Produto VALUES (null, "X BURGER", 5.80, 2);
INSERT INTO Produto VALUES (null, "MINI PIZZA", 2.50, 3);
INSERT INTO Produto VALUES (null, "CANELONE PORÇÃO", 7.60, 3);
INSERT INTO Produto VALUES (null, "ESFIRA GRANDE", 3.20, 3);
INSERT INTO Produto VALUES (null, "GUARANA ANTARTICA", 2.30, 4);
INSERT INTO Produto VALUES (null, "COCA COLA 600ML", 3.60, 4);
INSERT INTO Produto VALUES (null, "FANTA KS", 1.40, 4);
INSERT INTO Produto VALUES (null, "CERVEJA ANTARTICA ORIGINAL", 6.40, 4);