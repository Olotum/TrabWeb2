create database if not exists team_mk;
use team_mk;
create table if not exists users(
	id tinyint unsigned primary key auto_increment,
    name varchar(50) not null,
    cpf varchar(11) not null,
    cargo varchar(50) not null,
    setor varchar(50) not null,
    classificacao varchar(5) not null,
    password char(60) not null
);
create table if not exists solicitacoes(
	id tinyint unsigned primary key auto_increment,
    colab_id tinyint unsigned not null,
    solicitador_id tinyint unsigned not null,
    classification varchar(5) not null,
    description text not null,
    notes text null,
    constraint fk_colab foreign key (colab_id) references users(id),
    constraint fk_solicitador foreign key (solicitador_id) references users(id)
);
select s.*,u.name as "solicitador",us.name as "colab" from solicitacoes s inner join users u on s.solicitador_id = u.id inner join users us on s.colab_id = us.id;