create database if not exists mogador_payment;
use mogador_payment;
create table if not exists card_informations(
card_number varchar(21),
card_name varchar(50),
cvv_number varchar(5),
month_expiry varchar(2),
year_expîry int,
constraint pk_card primary key (card_number)
);