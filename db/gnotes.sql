create database db_gnotes;
	use db_gnotes;

	create table tblAdministrador(
		idAdmin int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		email varchar(30) NOT NULL,
		pass varchar(25) NOT NULL
		);

	create table tblAlumnos(
		idAlumno int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nombre varchar(30) NOT NULL,
		apellido0 varchar(30) NOT NULL,
		apellido1 varchar(30) NULL,
		grupo enum('DAW') NOT NULL,
		email varchar(30) NULL,
		pass varchar(25) NULL
		);

	create table tblNotas(
		idNotas int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nomAsignatura enum('Matemáticas','Fisica','Programación') NOT NULL,
		nota decimal(2,2) NULL,
		idAlumnoFK int(11) NULL
		);

	/*---------Alter Tables---------*/

	alter table tblNotas
		add constraint fk_idAlumno foreign key(idAlumnoFK)
		references tblAlumnos(idAlumno);