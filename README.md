# TabNotebook
PHP Tab Notebook

# How to create and initialize the database

CREATE DATABASE `TabNotebook`

CREATE TABLE `Tab` (
	`Id` INT(11) NULL DEFAULT NULL,
	`Text` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci'
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;

insert into Tab(Id) values (1);
insert into Tab(Id) values (2);
insert into Tab(Id) values (3);
insert into Tab(Id) values (4);
insert into Tab(Id) values (5);
