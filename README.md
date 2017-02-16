# curso-slim

create database slim;
``
    create table usuarios(
    id bigint not null primery key auto_increment,
    email varchar(100) not null,
    senha varchar(60) not null
    );
``
create table posts(
id bigint not null primery key auto_increment,
titulo varchar(100) not null,
descricao text not null
);
``
    Mark *italic text* with one asterisk, **bold text** with two.
    For ``monospaced text``, use two "backquotes" instead.
``
