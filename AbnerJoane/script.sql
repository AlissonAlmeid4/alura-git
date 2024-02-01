create database DBAJ;
use DBAJ

create table pessoa (
codigo int primary key auto_increment,
nome varchar(30),
celular varchar(11),
tipo varchar(9)
)


insert into pessoa(nome, celular, tipo)
values ('Alisson', '11992325271','adm');

insert into pessoa(nome, celular, tipo)
values ('Abner', '11958572118','noivo');

insert into pessoa(nome, celular, tipo)
values ('Natan', '11952403783','convidado');

select * from pessoa