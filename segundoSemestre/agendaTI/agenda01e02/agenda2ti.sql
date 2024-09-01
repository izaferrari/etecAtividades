CREATE DATABASE agenda2ti;

USE agenda2ti;

CREATE TABLE filial (
    codigo INT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    logradouro VARCHAR(200) NOT NULL,
    numero INT NOT NULL,
    bairro VARCHAR(80) NOT NULL,
    cidade VARCHAR(80) NOT NULL,
    uf CHAR(2) NOT NULL,
    cep VARCHAR(9) NOT NULL
);

CREATE TABLE telefone_filial (
    codigo_filial INT,
    telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY (codigo_filial, telefone),
    FOREIGN KEY (codigo_filial) REFERENCES filial(codigo)
);

CREATE TABLE livro (
    ISBN VARCHAR(13) PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ano_publicacao INT NOT NULL,
    editora VARCHAR(255) NOT NULL,
    numero_exemplares INT NOT NULL,
    genero_literario VARCHAR(100),
    codigo_filial INT,
    FOREIGN KEY (codigo_filial) REFERENCES filial(codigo)
);
