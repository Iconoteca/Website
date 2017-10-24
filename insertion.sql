-- Usuarios
INSERT INTO users (nome, email, senha) VALUE ('admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- Categorias
INSERT INTO categorias (nomeCategoria, nomeURL) VALUES ("Outro", "outro"), ("Lítico", "litico"), ("Cerâmica", "ceramica");

-- Artefatos
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
(1, "Artefato de teste 12", "outro",   	"Descrição do portfólio do Artefato de teste 12", "Descrição da página do Artefato de teste 12", "nomeQualquer.stl", 1.5921461, -2.15321497, "img1.jpg"),
(1, "Artefato de teste 13", "ceramica", "Descrição do portfólio do Artefato de teste 13", "Descrição da página do Artefato de teste 13", "nomeQualquer.stl", 1.5921461, -2.15321497, "img1.jpg"),
(1, "Artefato de teste 14", "litico", 	"Descrição do portfólio do Artefato de teste 14", "Descrição da página do Artefato de teste 14", "nomeQualquer.stl", 1.5921461, -2.15321497, "img2.jpg"),
(1, "Artefato de teste 15", "outro", 	"Descrição do portfólio do Artefato de teste 15", "Descrição da página do Artefato de teste 15", "nomeQualquer.stl", 1.5921461, -2.15321497, "img3.jpg"),
(1, "Artefato de teste 16", "ceramica", "Descrição do portfólio do Artefato de teste 16", "Descrição da página do Artefato de teste 16", "nomeQualquer.stl", 1.5921461, -2.15321497, "img4.jpg"),
(1, "Artefato de teste 17", "litico", 	"Descrição do portfólio do Artefato de teste 17", "Descrição da página do Artefato de teste 17", "nomeQualquer.stl", 1.5921461, -2.15321497, "img5.jpg"),
(1, "Artefato de teste 18", "outro", 	"Descrição do portfólio do Artefato de teste 18", "Descrição da página do Artefato de teste 18", "nomeQualquer.stl", 1.5921461, -2.15321497, "img6.jpg"),
(1, "Artefato de teste 19", "ceramica", "Descrição do portfólio do Artefato de teste 19", "Descrição da página do Artefato de teste 19", "nomeQualquer.stl", 1.5921461, -2.15321497, "img6.jpg"),
(1, "Artefato de teste 20", "litico", 	"Descrição do portfólio do Artefato de teste 20", "Descrição da página do Artefato de teste 20", "nomeQualquer.stl", 1.5921461, -2.15321497, "img3.jpg"),
(1, "Artefato de teste 21", "outro", 	"Descrição do portfólio do Artefato de teste 21", "Descrição da página do Artefato de teste 21", "nomeQualquer.stl", 1.5921461, -2.15321497, "img2.jpg"),
(1, "Artefato de teste 22", "ceramica", "Descrição do portfólio do Artefato de teste 22", "Descrição da página do Artefato de teste 22", "nomeQualquer.stl", 1.5921461, -2.15321497, "img5.jpg"),
(1, "Artefato de teste 23", "litico", 	"Descrição do portfólio do Artefato de teste 23", "Descrição da página do Artefato de teste 23", "nomeQualquer.stl", 1.5921461, -2.15321497, "img4.jpg"),
(1, "Artefato de teste 24", "outro",   	"Descrição do portfólio do Artefato de teste 24", "Descrição da página do Artefato de teste 24", "nomeQualquer.stl", 1.5921461, -2.15321497, "img1.jpg");
