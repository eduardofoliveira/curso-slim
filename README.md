# curso-slim

#Banco de dados Mysql

    create database slim;

    create table usuarios(
    id bigint not null primery key auto_increment,
    email varchar(100) not null,
    senha varchar(60) not null
    );

    create table posts(
    id bigint not null primery key auto_increment,
    titulo varchar(100) not null,
    descricao text not null
    );
    
    INSERT INTO ususario (email, senha) VALUES ('admin@admin.com.br', '123456');

#.htacess

    <IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteCond %{HTTP:Authorization} ^(.*)$
    RewriteRule ^(.*)$ slim-curso/public/$1 [e=HTTP_AUTHORIZATION:%1,L]
    </IfModule>
