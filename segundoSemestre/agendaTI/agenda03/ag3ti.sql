CREATE DATABASE ag3ti;
USE ag3ti;

CREATE TABLE condominio (
    cod_cond INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    rua VARCHAR(150) NOT NULL,
    numero INT NOT NULL,
    cep VARCHAR(10) NOT NULL,
    CONSTRAINT pk_condominio PRIMARY KEY (cod_cond)
);

CREATE TABLE apartamento (
    numero INT NOT NULL AUTO_INCREMENT,
    tipo ENUM('padrao', 'cobertura') NOT NULL,
    cod_cond INT NOT NULL,
    rg_proprietario VARCHAR(30) NOT NULL,
    numero_garagem INT NOT NULL,
    PRIMARY KEY (numero),
    FOREIGN KEY (cod_cond) REFERENCES condominio(cod_cond),
    FOREIGN KEY (rg_proprietario) REFERENCES proprietario(rg),
    FOREIGN KEY (numero_garagem) REFERENCES garagem(numero)
);

CREATE TABLE proprietario (
    rg VARCHAR(30) NOT NULL, 
    nome VARCHAR(100) NOT NULL, 
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(60) NOT NULL,
    PRIMARY KEY (rg)
);

CREATE TABLE sindico (
    matricula INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150),
    rua VARCHAR(150) NOT NULL,
    numero INT NOT NULL,
    cep VARCHAR(10) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    cod_cond INT,
    PRIMARY KEY (matricula)
);

ALTER TABLE condominio
ADD COLUMN matricula_sindico INT,
ADD CONSTRAINT fk_matricula_sindico
FOREIGN KEY (matricula_sindico) REFERENCES sindico(matricula);

CREATE TABLE garagem (
    numero INT NOT NULL AUTO_INCREMENT,
    tipo ENUM('padrao', 'coberta') NOT NULL,
    PRIMARY KEY (numero));
