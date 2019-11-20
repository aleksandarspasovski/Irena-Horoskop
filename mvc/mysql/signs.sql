create table signs(
	id int primary key auto_increment not null,
	icon varchar(255) not null,
	sign varchar(100) not null,
	length varchar(100) not null,
	about_sign varchar(5000) not null
);