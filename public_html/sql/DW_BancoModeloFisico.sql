-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Usuario (
id_Usua int(11) AUTO_INCREMENT PRIMARY KEY,
nome varchar(30) NOT NULL,
login varchar(15) NOT NULL,
senha varchar(15) NOT NULL
)

CREATE TABLE eventos (
id_Even int(11) AUTO_INCREMENT PRIMARY KEY,
title varchar(30) NOT NULL,
start varchar(15) NOT NULL,
end varchar(15) NOT NULL,
id_Usua int(11) NOT NULL,
FOREIGN KEY(id_Usua) REFERENCES Usuario (id_Usua)
)

