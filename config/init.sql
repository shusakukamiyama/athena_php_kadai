create database dotinstall_sns_php;

CREATE USER  DBUSER3@localhost  IDENTIFIED  WITH  mysql_native_password  BY 'password';

use dotinstall_sns_php

create table users (
    id int not null auto_increment primary key,
    email varchar(255) UNIQUE,
    PASSWORD varchar(255),
    created datetime,
    modified datetime
);

desc users;