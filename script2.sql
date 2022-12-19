create table type_of_dish
(
    type_of_dish_id integer      not null
        primary key,
    type_name       varchar(100) not null
);

alter table type_of_dish
    owner to postgres;


