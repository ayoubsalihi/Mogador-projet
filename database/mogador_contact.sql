create database if not exists mogador_contact;
use mogador_contact;
create table if not exists contact_form(
full_name varchar(100),
email varchar(200),
Phone_number varchar(20),
Message varchar(300)
);

create table if not exists emails_newsletters(
mail varchar(50)
);