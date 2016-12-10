CREATE DATABASE vitrine;
use vitrine;

CREATE TABLE vendedor
(
	idVendedor int not null auto_increment primary key,
	nome varchar(50) not null,
	email varchar(50) not null,
	senha varchar(50) not null
);

CREATE TABLE produto
(
	idProduto int not null auto_increment primary key,
	nome varchar(50) not null,
	valor_unitario float not null,
	foto varchar(200) not null
);
