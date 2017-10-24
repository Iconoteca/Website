CREATE DATABASE Iconoteca
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE Iconoteca;

SELECT * FROM usuarios;
SELECT * FROM categorias;
SELECT * FROM artefatos;
SELECT * FROM imagens;

/* Usuarios */
CREATE TABLE IF NOT EXISTS usuarios (
	idUser INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    senha VARCHAR(32) NOT NULL,
    PRIMARY KEY (idUser)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
/* // Usuarios */

/* Icones */
CREATE TABLE IF NOT EXISTS artefatos (
	idArtefato INT(11) NOT NULL AUTO_INCREMENT,
	idOwner  INT(11) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    categoria VARCHAR(20) NOT NULL,
	shortDesc VARCHAR(140),
	complDesc TEXT NOT NULL,
	nomeArquivo VARCHAR(60),
	lat FLOAT NOT NULL,
	lng FLOAT NOT NULL,
	figure VARCHAR(60),
    FOREIGN KEY (idOwner) REFERENCES usuarios (idUser),
    FOREIGN KEY (categoria) REFERENCES categorias (nomeURL),
	PRIMARY KEY (idArtefato)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
/* // Icones */

/* Categorias */
CREATE TABLE IF NOT EXISTS categorias (
	idCategoria INT(2) NOT NULL AUTO_INCREMENT,
    nomeCategoria VARCHAR(20) NOT NULL UNIQUE,
    nomeURL VARCHAR(20) NOT NULL UNIQUE,
    PRIMARY KEY (idCategoria)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
/* // Categorias */

/* Imagens */
CREATE TABLE IF NOT EXISTS imagens (
	idIcone INT(11) NOT NULL,
    nomeImagem VARCHAR(60) NOT NULL,
    FOREIGN KEY (idIcone) REFERENCES artefatos (idArtefato)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

SELECT nomeImagem FROM artefatos
INNER JOIN  imagens ON artefatos.idArtefato = imagens.idIcone;
/* // Imagens */

-- Icones
INSERT INTO artefatos (idOwner, nome, categoria, shortDesc, complDesc, nomeArquivo, lat, lng, figure) VALUES
(1, "Artefato de teste 01", "ceramica", "Descrição do portfólio do Artefato de teste 01", "Descrição da página do Artefato de teste 01", "nomeQualquer.stl", 1.5921461, -2.15321497, "img1.jpg"),
(1, "Artefato de teste 02", "litico", 	"Descrição do portfólio do Artefato de teste 02", "Descrição da página do Artefato de teste 02", "nomeQualquer.stl", 1.5921461, -2.15321497, "img2.jpg"),
(1, "Artefato de teste 03", "outro", 	"Descrição do portfólio do Artefato de teste 03", "Descrição da página do Artefato de teste 03", "nomeQualquer.stl", 1.5921461, -2.15321497, "img3.jpg"),
(1, "Artefato de teste 04", "ceramica", "Descrição do portfólio do Artefato de teste 04", "Descrição da página do Artefato de teste 04", "nomeQualquer.stl", 1.5921461, -2.15321497, "img4.jpg"),
(1, "Artefato de teste 05", "litico", 	"Descrição do portfólio do Artefato de teste 05", "Descrição da página do Artefato de teste 05", "nomeQualquer.stl", 1.5921461, -2.15321497, "img5.jpg"),
(1, "Artefato de teste 06", "outro", 	"Descrição do portfólio do Artefato de teste 06", "Descrição da página do Artefato de teste 06", "nomeQualquer.stl", 1.5921461, -2.15321497, "img6.jpg"),
(1, "Artefato de teste 07", "ceramica", "Descrição do portfólio do Artefato de teste 07", "Descrição da página do Artefato de teste 07", "nomeQualquer.stl", 1.5921461, -2.15321497, "img6.jpg"),
(1, "Artefato de teste 08", "litico", 	"Descrição do portfólio do Artefato de teste 08", "Descrição da página do Artefato de teste 08", "nomeQualquer.stl", 1.5921461, -2.15321497, "img3.jpg"),
(1, "Artefato de teste 09", "outro", 	"Descrição do portfólio do Artefato de teste 09", "Descrição da página do Artefato de teste 09", "nomeQualquer.stl", 1.5921461, -2.15321497, "img2.jpg"),
(1, "Artefato de teste 10", "ceramica", "Descrição do portfólio do Artefato de teste 10", "Descrição da página do Artefato de teste 10", "nomeQualquer.stl", 1.5921461, -2.15321497, "img5.jpg"),
(1, "Artefato de teste 11", "litico", 	"Descrição do portfólio do Artefato de teste 11", "Descrição da página do Artefato de teste 11", "nomeQualquer.stl", 1.5921461, -2.15321497, "img4.jpg"),
(1, "Artefato de teste 12", "outro",   	"Descrição do portfólio do Artefato de teste 12", "Descrição da página do Artefato de teste 12", "nomeQualquer.stl", 1.5921461, -2.15321497, "img1.jpg");
