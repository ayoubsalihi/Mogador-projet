create database if not exists mogador_management;
use mogador_management;
create table if not exists Personal(
id_client int auto_increment,
first_name varchar(60),
last_name varchar(60),
day_of_birth int,
month_of_birth int,
year_of_birth int,
constraint pk_idC primary key (id_client)
);

create table if not exists contact_informations(
phone_number varchar(14),
adress varchar(100),
suite_adress  varchar(100) default 'none',
city varchar(30),
state varchar(60),
zip_code int,
country varchar(30),
constraint pk_tele primary key (phone_number)
);

create table if not exists connection_informations(
email varchar(100),
username varchar(25),
password_user varchar(40),
constraint pk_email primary key (email)
);
create table if not exists room(
room_number int,
room_type varchar(40) default 'single',
constraint pk_roomN primary key (room_number)
);
create table if not exists reservation(
reservation_id int auto_increment,
reservation_date date,
client_id int,
room_number int,
constraint pk_reservationID primary key (reservation_id),
constraint fk_clientID foreign key (client_id) references personal(id_client),
constraint fk_room_number foreign key (room_number) references room(room_number)
);