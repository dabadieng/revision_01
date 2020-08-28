--
-- base de donn�es: 'baseavion'
--
create database if not exists baseagence default character set utf8 collate utf8_general_ci;
use baseagence;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table contact
drop table if exists contact; 
create table contact (
	con_id int not null auto_increment primary key,
	con_nom varchar(255) not null,
	con_prenom VARCHAR(255) not null, 
	con_adresse VARCHAR(255) not null,
	con_ville VARCHAR(255) not null,
	con_cp int not null
)engine=innodb;

-- table vendre
drop table if exists vendre;
create table vendre (
	ven_id int not null auto_increment primary key,
	ven_type varchar (255) not null,
	ven_caracteristique VARCHAR(255) not null,
	ven_adresse VARCHAR(255) not null
)engine=innodb; 

-- table louer
drop table if exists louer;
create table louer (
	lou_id int not null auto_increment primary key,
	lou_type varchar (255) not null,
	lou_caracteristique VARCHAR(255) not null,
	lou_adresse VARCHAR(255) not null
)engine=innodb; 

-- table achater
drop table if exists acheter;
create table acheter (
	ach_id int not null auto_increment primary key,
	ach_type varchar(255) not null,
	ach_caracteristique VARCHAR(255) not null,
	ach_article VARCHAR(255) not null
)engine=innodb; 

-- contraintes

set foreign_key_checks = 1;

-- jeu de données

