create table menu
(
    menu_id         integer      not null
        primary key,
    org_name        varchar(100) not null,
    structure       varchar(300) not null,
    price           text         not null,
    weight          text         not null,
    type_of_dish_id integer
        constraint fk_menu_type_of_dish
            references type_of_dish
);

alter table menu
    owner to postgres;


