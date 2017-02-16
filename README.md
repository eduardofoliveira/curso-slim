# curso-slim

create database slim;

create table usuarios(

id bigint not null primery key auto_increment,

email varchar(100) not null,

senha varchar(60) not null

);
´´´php
create table posts(
id bigint not null primery key auto_increment,
titulo varchar(100) not null,
descricao text not null
);
´´´
Monospaced text is marked with two backquotes "``" instead of asterisks;
no bold or italic is possible within it (asterisks just represent
themselves), although in some contexts, code syntax highlighting may be
applied.  Note that in monospaced text, multiple spaces are *not*
collapsed, but are preserved; however, flow and wrapping *do* occur, and
any number of spaces may be replaced by a line break.  Markdown allows
monospaced text within bold or italic sections, but not vice versa -
reStructuredText allows neither.  In summary, the common inline markup
is the following::

    Mark *italic text* with one asterisk, **bold text** with two.
    For ``monospaced text``, use two "backquotes" instead.

Mark *italic text* with one asterisk, **bold text** with two.
For ``monospaced text``, use two "backquotes" instead.

-----
