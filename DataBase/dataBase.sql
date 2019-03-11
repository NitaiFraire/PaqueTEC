# Drop database paqueteria #

create DATABASE paqueteria;
USE paqueteria;


#*********** Tabla Paises ***********#

CREATE TABLE paises(

    idPais          int(255) auto_increment not null,
    nombrePais      varchar(255) not null,

    CONSTRAINT pk_idPais PRIMARY KEY(idPais),

)ENGINE=InnoDB;

#*********** /Tabla Paises ***********#


#*********** Tabla Estados ***********#

CREATE TABLE estados(

    idPais          int(255) not null,
    idEstado        int(255) auto_increment not null,
    nombreEstado    varchar(255) not null,

    CONSTRAINT pk_estado PRIMARY KEY(idEstado),

    CONSTRAINT fk_estados_paises FOREIGN KEY(idPais) REFERENCES paises(idPais),

)ENGINE=InnoDB;

#*********** /Tabla Estados ***********#


#*********** Tabla Ciudades ***********#

CREATE TABLE ciudades(

    idPais          int(255) not null,
    idEstado        int(255) not null,
    idCiudad        int(255) auto_increment not null,
    nombreCiudad    varchar(255) not null,

    CONSTRAINT pk_ciudad PRIMARY KEY(idCiudad),

    CONSTRAINT fk_ciudades_paises FOREIGN KEY(idPais) REFERENCES paises(idPais)
    CONSTRAINT fk_ciudades_estados FOREIGN KEY(idEstado) REFERENCES estados(idPais),

)ENGINE=InnoDB;

#*********** /Tabla Ciudades ***********#


#*********** Tabla Colonias ***********#

CREATE TABLE colonias(

    idPais              int(255) not null,
    idEstado            int(255) not null,
    idCiudad            int(255) not null,
    idColonia           int(255) auto_increment not null,
    nombreColonia       varchar(255) not null,

    CONSTRAINT pk_colonia PRIMARY KEY(idColonia),

    CONSTRAINT fk_colonias_paises FOREIGN KEY(idPais) REFERENCES paises(idPais)
    CONSTRAINT fk_colonias_estados FOREIGN KEY(idEstado) REFERENCES estados(idEstado),
    CONSTRAINT fk_colonias_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(idCiudad),

)ENGINE=InnoDB;

#*********** /Tabla Colonias ***********#


#*********** Tabla Clientes ***********#

CREATE TABLE clientes(

    idColonia       int(255) not null,
    idCliente       int(255) auto_increment not null,
    nombre          varchar(255) not null,
    paterno         varchar(255) not null,
    materno         varchar(255),
    edad            int(3) not null,
    rfc             varchar(13) not null,
    curp            varchar(18) not null,
    genero          varchar(10) not null,
    email           varchar(255) not null,
    telefono        int(10) not null,
    domicilio       varchar(255) not null,
    
    CONSTRAINT pk_id_cliente PRIMARY KEY(idCliente),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),

    CONSTRAINT ck_genero CHECK(genero = 'MASCULINO' OR genero = 'FEMENINO'),

    CONSTRAINT fk_clientes_colonias FOREIGN KEY(idColonia) REFERENCES colonias(idColonia)

)ENGINE=InnoDB;
 
#*********** /Tabla Clientes ***********#


#*********** Tabla Empleados ***********#

CREATE TABLE empleados(

    idColonia           int(255) not null,
    idEmpleado          int(255) auto_increment not null,
    nombre              varchar(255) not null,
    paterno             varchar(255) not null,
    materno             varchar(255),
    rfc                 varchar(13) not null,
    curp                varchar(18) not null,
    genero              varchar(10) not null,
    email               varchar(255) not null,
    telefono            int(10) not null,
    domicilio           varchar(255) not null,
    rol                 int(1) not null

    CONSTRAINT  pk_empleado PRIMARY KEY(idEmpleado),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),

    CONSTRAINT ck_role CHECK(rol = 1 OR rol = 0),

    CONSTRAINT fk_empleados_colonias FOREIGN KEY(idColonia) REFERENCES colonias(idColonia),

)ENGINE=InnoDB;

#*********** /Tabla Empleados ***********#


#*********** Tabla Paquetes ***********#

CREATE TABLE paquetes(

    idCliente           int(255) not null,
    idEmpleado          int(255) not null,
    idPaquete           int(255) auto_increment not null,
    fechaEnvio          date not null,
    contenido           varchar(255) not null,
    peso                float(100, 2) not null,
    diaAlta             date not null,
    precioEnvio         float(100, 2) not null,
    observaciones       varchar(255),
    fechaEntrega        date not null,
    horaEntrega         time,

    CONSTRAINT pk_id_paquete PRIMARY KEY(idPaquete),

    CONSTRAINT fk_paquete_cliente FOREIGN KEY(idCliente) REFERENCES clientes(idCliente),
    CONSTRAINT fk_paquete_empleado FOREIGN KEY(idEmpleado) REFERENCES empleados(idCliente)
    
)ENGINE=InnoDB;

#*********** /Tabla Paquetes ***********#


#*********** Tabla Devoluciones ***********#

CREATE TABLE devoluciones(

    idPaquete           int(255) not null,
    idDevolucion        int(255) auto_increment not null,
    fechaDevolucion     date not null,
    motivoDevolucion    varchar(255) not null,

    CONSTRAINT pk_paquete PRIMARY KEY(idDevolucion),

    CONSTRAINT fk_devolucion_paquete FOREIGN KEY(idPaquete) REFERENCES paquetes(idPaquete)

)ENGINE=InnoDB;

#*********** /Tabla Devoluciones ***********#