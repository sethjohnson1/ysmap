drop table layers;
create table layers(
	id int not null auto_increment,
	primary key(id),
	name varchar(100),
	created datetime,
	modified datetime,
	classname varchar(40),
	visible tinyint(1),
	img varchar(40),
	metatitle varchar(200),
	metadescription varchar(200)
);

drop table places;
create table places(
	id int not null auto_increment,
	primary key(id),
	name varchar(100),
	created datetime,
	modified datetime,
	classname varchar(40),
	visible tinyint(1),
	img varchar(40),
	metatitle varchar(200),
	metadescription varchar(200),
	iscoutid int,
	lat int,
	lng int
);

drop table layers_places;
create table layers_places(
	id int not null auto_increment,
	primary key(id),
	layer_id int,
	place_id int
);
