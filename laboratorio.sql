drop table if exists usuarios cascade;
create table usuarios
(
	id bigserial NOT NULL,
	username text NOT NULL,
	password text,
	token text,
	nombre text NOT NULL,
	paterno text NOT NULL,
	
	materno text,
	
	primary key(id)
);

drop table if exists materias cascade;
create table materias
(
	id bigserial NOT NULL,
	clave text NOT NULL,
	nombre text NOT NULL,

	primary key(id)
);

drop table if exists grupos cascade;
create table grupos
(
	id bigserial NOT NULL,
	nombre text NOT NULL,
	nivel int NOT NULL,
	check (nivel > 0 and nivel < 10),
	primary key(id)
);

drop table if exists grupos_miembros cascade;
create table grupos_miembros
(
	id bigserial NOT NULL,
	nu_alumno bigint NOT NULL,
	nu_grupo bigint NOT NULL,
	
	primary key(id),
	foreign key (nu_alumno) references usuarios(id),
	foreign key (nu_grupo) references grupos(id)
);

drop table if exists productos cascade;
create table productos
(
	id bigserial NOT NULL,
	nombre text NOT NULL,
	descripcion text,
	
	primary key(id)
);

drop table if exists inventario cascade;
create table inventario
(
	id bigserial NOT NULL,
	nu_producto bigint,
	cantidad int,
	
	primary key(id),
	foreign key (nu_producto) references productos(id)
);

drop table if exists sesiones cascade;
create table sesiones
(
	id bigserial NOT NULL,
	nu_docente bigint NOT NULL,
	nu_materia bigint NOT NULL,
	fecha_inicio timestamp,
	duracion int,
	nombre text,
	
	primary key(id),
	foreign key (nu_docente) references usuarios(id),
	foreign key (nu_materia) references materias(id),
        unique(fecha_inicio)
);

drop table if exists sesiones_productos cascade;	
create table sesiones_productos
(
	id bigserial NOT NULL,
	nu_sesion bigint NOT NULL,
	nu_producto bigint NOT NULL,
	cantidad int NOT NULL,
	
	primary key(id),
	foreign key (nu_sesion) references sesiones(id),
	foreign key (nu_producto) references productos(id)
);

drop table if exists bitacora cascade;
create table bitacora
(
	id bigserial NOT NULL,
	nu_sesion bigint,
	nu_alumno bigint NOT NULL,
	fecha timestamp,
	
	primary key(id),
	foreign key (nu_alumno) references usuarios(id),
	foreign key (nu_sesion) references sesiones(id)
);
