create table users (
	id int primary key auto_increment,
	first_name varchar(100),
	last_name varchar(100),
	nickname varchar(100),
	email varchar(100),
	password varchar(100)
);
create table users_info (
	users_id int primary key auto_increment not null,
	country varchar(155),
	address varchar(255),
	phone_number varchar(100),
	gender varchar(100),
	id int not null
	foreign key (id) references users(id)
);
create table uploads (
	id int primary key auto_increment,
	file_path varchar(100),
	name varchar(100),
	alt varchar(100),
	user_id int not null
);
