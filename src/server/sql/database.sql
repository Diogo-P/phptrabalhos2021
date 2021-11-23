create database if not exists podcasts;
use podcasts;

CREATE TABLE if not exists musicas (
  id int(11) NOT NULL,
  img varchar(50) NOT NULL,
  mp3 varchar(50) NOT NULL,
  nome varchar(100) NOT NULL,
  descricao varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE musicas
  ADD PRIMARY KEY (id);

CREATE TABLE if not exists users (
  id int(11) NOT NULL,
  user varchar(20) NOT NULL,
  pass char(32) NOT NULL,
  email varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO users (id, user, pass, email) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com');

ALTER TABLE users
  ADD PRIMARY KEY (id);