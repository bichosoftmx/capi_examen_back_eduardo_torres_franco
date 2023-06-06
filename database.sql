CREATE DATABASE IF NOT EXISTS apirestcapi;

CREATE TABLE users(
id  int(255) auto_increment not null,
email varchar(255),
name    varchar(255),
surname varchar(255),
password varchar(255),
created_at  datetime DEFAULT NULL,
updated_at  datetime DEFAULT NULL,
remember_token  varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDB;
