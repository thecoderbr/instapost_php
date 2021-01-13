CREATE DATABASE thecoder;

USE thecoder;

CREATE TABLE ponto(
    id          INTEGER AUTO_INCREMENT PRIMARY KEY,
    matricula   VARCHAR(100) NOT NULL,
    tipo        VARCHAR(10) NOT NULL,
    dtponto     VARCHAR(10) NOT NULL,
    hrponto     VARCHAR(8) NOT NULL
);

desc ponto;