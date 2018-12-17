create database PAMI;
use PAMI;

create table users(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	image varchar(255),
	status int default 1,
	kind int default 1,
	created_at datetime
);
insert into users (name,username,email,password,created_at) value ("admin","admin","admin@admin.com","admin",NOW());

/*se crea una sola tabla para tareas y proyectos mientras se avanza con el proyecto*/
create table Project(
	id int not null auto_increment primary key,
	title varchar(512),
	description text,
	file varchar(255),
	start_at date,
	finish_at date,
	item_id int,
	is_featured boolean not null default 0,
	kind int not null, /* 1. proyecto, 2. tarea, 3. archivo, 4. comentario*/
	status int not null default 1,
	created_at datetime
);
