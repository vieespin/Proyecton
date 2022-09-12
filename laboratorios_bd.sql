drop table if exists HORARIOS;

drop table if exists LABORATORIOS;

drop table if exists RESERVA;

drop table if exists USERS;

/*==============================================================*/
/* Table: HORARIOS                                              */
/*==============================================================*/
create table HORARIOS
(
   ID_HORARIOS          int not null auto_increment,
   NOMBRE_HORARIO       varchar(50),
   HORA_INICIO          time not null,
   HORA_TERMINO         time not null,
   primary key (ID_HORARIOS)
);

/*==============================================================*/
/* Table: LABORATORIOS                                          */
/*==============================================================*/
create table LABORATORIOS
(
   ID_LABORATORIO       int not null auto_increment,
   NOMBRE_LABORATORIO   varchar(50) not null,
   primary key (ID_LABORATORIO)
);

/*==============================================================*/
/* Table: RESERVA                                               */
/*==============================================================*/
create table RESERVA
(
   ID_RESERVA           int not null auto_increment,
   ID_USER              int not null,
   ID_LABORATORIO       int not null,
   ID_HORARIOS          int not null,
   primary key (ID_RESERVA, ID_USER, ID_LABORATORIO, ID_HORARIOS)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   ID_USER              int not null auto_increment,
   USERNAME             varchar(80) not null,
   EMAIL                varchar(80) not null,
   PASSWORD             varchar(250) not null,
   AUTHKEY              varchar(250) not null,
   ACCESSTOKEN          varchar(250) not null,
   ACTIVATE             tinyint not null,
   primary key (ID_USER)
);

alter table RESERVA add constraint FK_REFERENCE_1 foreign key (ID_USER)
      references USERS (ID_USER) on delete restrict on update restrict;

alter table RESERVA add constraint FK_REFERENCE_2 foreign key (ID_LABORATORIO)
      references LABORATORIOS (ID_LABORATORIO) on delete restrict on update restrict;

alter table RESERVA add constraint FK_REFERENCE_3 foreign key (ID_HORARIOS)
      references HORARIOS (ID_HORARIOS) on delete restrict on update restrict;
