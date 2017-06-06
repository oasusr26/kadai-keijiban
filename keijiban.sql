create database keijiban;
create table keijiban.keijiban (
    id int auto_increment not null primary key,
    user varchar(100),
    content text(400),
    password varchar(255),
    created_at timestamp not null default current_timestamp
);