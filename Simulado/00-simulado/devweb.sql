create database devweb2_1etapa_prova_final;

use devweb2_1etapa_prova_final;

create table certidoes_nascimento
(
	id int unsigned not null auto_increment,
	nome varchar(255) not null,
	nome_mae varchar(255) not null,
	nome_pai varchar(255) not null,
	matricula varchar(255) not null,
	primary key(id)
);
