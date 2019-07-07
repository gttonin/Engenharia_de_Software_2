CREATE DATABASE IF NOT EXISTS ipesquisa;

use ipesquisa;

CREATE TABLE IF NOT EXISTS usuario (
    id INT(11) NOT NULL auto_increment PRIMARY KEY,
    primeiroNome VARCHAR(30) NOT NULL,
    ultimoNome VARCHAR(60) NOT NULL,
    numeroDocumento VARCHAR(20) NOT NULL,
    tipoDocumento VARCHAR(9) NOT NULL,
    tipoUsuario VARCHAR (11) NOT NULL,
    entidade VARCHAR (12) NOT NULL, 
    email VARCHAR (70) NOT NULL UNIQUE,
    senha VARCHAR (50) NOT NULL,
    telefone VARCHAR(13) ,
    celular VARCHAR(13) NOT NULL,
    endereco VARCHAR (150) NOT NULL,
    bairro VARCHAR(20) NOT NULL,
    estado VARCHAR (50) NOT NULL,
    pais VARCHAR (30) NOT NULL,
    lattes VARCHAR(100) ,                   
    linkedin VARCHAR(100) ,
    twitter VARCHAR(100) 
);

CREATE TABLE IF NOT EXISTS artigo (
    id INT(11) NOT NULL auto_increment PRIMARY KEY,
    idAutor INT(11) NOT NULL,
    tituloPostagem VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    resumo VARCHAR(600) NOT NULL,
    textoPrincipal MEDIUMTEXT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    dataPostagem VARCHAR(50) NOT NULL,
    imagem MEDIUMTEXT,
    CONSTRAINT FK_IdAutor FOREIGN KEY (idAutor) REFERENCES usuario(id)
);  

INSERT INTO usuario
VALUES 
(1, 'Nome', 'Teste', '418339871', 'RG', 'Aluno', 'Universidade', 'teste@gmail.com', '123456', '4935654565', '4991995356', 'Endereço teste', 'bairroo', 'estadoo', 'pais', 'lates', 'linkedin', 'twitter'),
(2, 'Nome2', 'Teste2', '418339871', 'RG', 'Aluno', 'Universidade', 'askdjhasjk@gmail.com', '123456','4935652225', '2221995356', 'Endereço teste22', 'bairroo2', 'estadoo2', 'pais2', 'lates2', 'linkedin2', 'twitter2');

INSERT INTO artigo 
VALUES
(1, 1, 'Titulo teste', 'Autor Renomado', 'resumaaaao', 'alksdjalskdjaslkdjaslkdjasocaskjcaoisjdkaljsdalkjsdoiasijdalkskjlsajhasdlkjasldkaslkd', 'Ciência da Computação' , '04 de julho de 2019', 'asdkjasdh'),
(2, 2, 'Titulo teste2', 'Autor Renomado2', 'resumaaaao2', 'alksdjalskdjaslkdjaslkdjasocaskjcaoisjdkaljsdalkjsdoiasijdalkskjlsajhasdlkjasldkaslkd2', 'Matemática' , '04 de julho de 2019', 'kjhasdkjads'),
(3, 2, 'Titulo teste3', 'Autor Renomado3', 'resumaaaao3', 'alksdjalskdjaslkdjaslkdjasocaskjcaoisjdkaljsdalkjsdoiasijdalkskjlsajhasdlkjasldkaslkd3', 'Matemática' ,'04 de julho de 2019', 'jkhaskjdhaskjd'),
(4, 1, 'Titulo teste4', 'Autor Renomado4', 'resumaaaao4', 'alksdjalskdjaslkdjaslkdjasocaskjcaoisjdkaljsdalkjsdoiasijdalkskjlsajhasdlkjasldkaslkd4', 'Empresa' , '04 de julho de 2019', 'kjasdhkjasdh');