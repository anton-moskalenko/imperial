create table rune_imperials
(
    key_imperial bigint unsigned auto_increment,
    title varchar(250) not null,
    status tinyint unsigned not null,
    program text null,
    credits bigint unsigned not null default 0,
    constraint rune_imperials_pk
        primary key (key_imperial)
);

