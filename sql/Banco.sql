drop database SOS_Ferramentas;
CREATE DATABASE SOS_Ferramentas;
use SOS_Ferramentas;

CREATE TABLE Profissional(
idProfissional INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(45),
foto VARCHAR(150),
especialidade VARCHAR(45),
telefone VARCHAR(45)
);

CREATE TABLE Produtos(
idProdutos INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nomeProduto VARCHAR(45),
foto VARCHAR(150),
descricao TEXT,
dataEntrega DATE,
dataDevolucao DATE,
valor float,
profissional_id INT,
FOREIGN KEY (profissional_id) REFERENCES Profissional (idProfissional)
);

CREATE TABLE Cliente(
idCliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(45),
foto VARCHAR(150),
logradouro VARCHAR(45),
telefone VARCHAR(45),
produto_id INT,
FOREIGN KEY (produto_id) REFERENCES Produtos (idProdutos)
);

CREATE TABLE Usuario (
  idUsuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  email VARCHAR(45),
  senha VARCHAR(100),
  fkprofissional_id INT,
  fkcliente_id INT,
  FOREIGN KEY (fkprofissional_id) REFERENCES Profissional (idProfissional),
  FOREIGN KEY (fkcliente_id) REFERENCES Cliente (idCliente)
);








