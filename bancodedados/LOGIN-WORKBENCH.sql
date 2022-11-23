create database login;
use login;
create table aluno (
rm_aluno INT(6),
email_aluno varchar (120),
senha_aluno varchar (30),
PRIMARY KEY (rm_aluno)
); 

create table adm (
id_adm INT(15),
email_adm varchar (120),
senha_adm varchar (30),
PRIMARY KEY  (id_adm)
);