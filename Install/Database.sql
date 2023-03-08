create table rune_imperials
(
	key_imperial bigint unsigned auto_increment,
	title varchar(250) not null,
	status tinyint unsigned not null,
	program text null,
	power smallint unsigned not null,
	constraint rune_imperials_pk
		primary key (key_imperial)
);

