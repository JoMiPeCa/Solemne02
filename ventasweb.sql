SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*==============================================================*/
/* Base de datos: `exportaciones`                                 */
/*==============================================================*/
CREATE DATABASE IF NOT EXISTS `ventasweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ventasweb`;

drop table if exists ACCESO;

/*==============================================================*/
/* Table: ACCESO                                                */
/*==============================================================*/
create table ACCESO (
   IDACCESO             bigint unsigned not null auto_increment,
   NOMUSUARIO           varchar(20)          null,
   PWDUSUARIO           varchar(40)          null,
   NOMBRE               varchar(40)          null,
   pref01               int         default 0,
   pref02               int         default 0,
   pref03               int          default 0,
   pref04               int          default 0,
   primary key (IDACCESO)
);




drop table if exists OFERTA;

/*==============================================================*/
/* Table: ACCESO                                                */
/*==============================================================*/
create table OFERTA (
   IDOFERTA             bigint unsigned not null auto_increment,
   DESCRIPCION           varchar(100)          null,
   PRECIO           int          null,
   DIAS               varchar(40)          null,
   FECHAINICIO               date         default 0,
   primary key (IDOFERTA)
);

/*Creación de registros 1234/123478*/
INSERT INTO ACCESO(NOMUSUARIO,PWDUSUARIO,NOMBRE, PREF01,PREF02,PREF03,PREF04)
     VALUES ('flopez','81dc9bdb52d04dc20036dbd8313ed055','Fabián Lopez',1,1,1,0);

INSERT INTO ACCESO(NOMUSUARIO,PWDUSUARIO,NOMBRE, PREF01,PREF02,PREF03,PREF04)
     VALUES ('psuazo','fcea920f7412b5da7be0cf42b8c93759','Patricio Suazo',0,0,1,1);