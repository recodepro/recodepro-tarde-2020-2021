create database sistema;

create table sistema.usuarios(
    id int not null primary key AUTO_INCREMENT,
    nome varchar(80) not null,
    imagem varchar(150),
    email varchar(80) not null UNIQUE,
    senha char(32) not null
);

CREATE TABLE postagens (
	id_postagens int PRIMARY KEY AUTO_INCREMENT,
    conteudo VARCHAR(400) NOT NULL,
    
	fk_usuario int NOT NULL,
    
    FOREIGN KEY(fk_usuario) REFERENCES usuarios(id) ON DELETE CASCADE
);