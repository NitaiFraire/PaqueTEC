# Drop database paqueteria #

create DATABASE paqueteria;
USE paqueteria;


#*********** Tabla Paises ***********#

CREATE TABLE paises(

    id              int(255) auto_increment not null,
    nombre          varchar(255) not null,

    CONSTRAINT pk_estado PRIMARY KEY(id),

)ENGINE=InnoDB;

#*********** /Tabla Paises ***********#


#*********** Tabla Estados ***********#

CREATE TABLE estados(

    id              int(255) auto_increment not null,
    idPais          int(255) not null,
    nombre          varchar(255) not null,

    CONSTRAINT pk_estado PRIMARY KEY(id),

    CONSTRAINT fk_estados_paises FOREIGN KEY(idPais) REFERENCES paises(id),

)ENGINE=InnoDB;

#*********** /Tabla Estados ***********#


#*********** Tabla Ciudades ***********#

CREATE TABLE ciudades(

    id              int(255) auto_increment not null,
    idEstado        int(255) not null,
    idPais          int(255) not null,
    nombre          varchar(255) not null,

    CONSTRAINT pk_ciudad PRIMARY KEY(id),

    CONSTRAINT fk_ciudades_estados FOREIGN KEY(idEstado) REFERENCES estados(id),
    CONSTRAINT fk_ciudades_paises FOREIGN KEY(idPais) REFERENCES paises(id)

)ENGINE=InnoDB;

#*********** /Tabla Ciudades ***********#


#*********** Tabla Colonias ***********#

CREATE TABLE colonias(

    id                  int(255) auto_increment not null,
    idCiudad            int(255) not null,
    idEstado            int(255) not null,
    idPais              int(255) not null,
    nombre              varchar(255) not null,

    CONSTRAINT pk_colonia PRIMARY KEY(id),

    CONSTRAINT fk_colonias_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(id),
    CONSTRAINT fk_colonias_estados FOREIGN KEY(idEstado) REFERENCES estados(id),
    CONSTRAINT fk_colonias_paises FOREIGN KEY(idPais) REFERENCES paises(id)

)ENGINE=InnoDB;

#*********** /Tabla Colonias ***********#


#*********** Tabla Clientes ***********#

CREATE TABLE clientes(

    id              int(255) auto_increment not null,
    idPais          int(255) not null,  
    idEstado        int(255) not null,     
    idCiudad        int(255) not null,
    idColonia       int(255) not null,
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
    
    CONSTRAINT pk_id_cliente PRIMARY KEY(id),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),

    CONSTRAINT ck_genero CHECK(genero = 'MASCULINO' OR genero = 'FEMENINO'),

    CONSTRAINT fk_clientes_paises FOREIGN KEY(idPais) REFERENCES paises(id),
    CONSTRAINT fk_clientes_estados FOREIGN KEY(idEstado) REFERENCES estados(id),
    CONSTRAINT fk_clientes_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(id),
    CONSTRAINT fk_clientes_colonias FOREIGN KEY(idColonia) REFERENCES colonias(id)

)ENGINE=InnoDB;
 
#*********** /Tabla Clientes ***********#


#*********** Tabla Empleados ***********#

CREATE TABLE empleados(

    id                  int(255) auto_increment not null,
    idPais              int(255) not null,  
    idEstado            int(255) not null,     
    idCiudad            int(255) not null,
    idColonia           int(255) not null,
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

    CONSTRAINT  pk_empleado PRIMARY KEY(id),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),

    CONSTRAINT ck_role CHECK(rol = 1 OR rol = 0),

    CONSTRAINT fk_empleados_paises FOREIGN KEY(idPais) REFERENCES paises(id),
    CONSTRAINT fk_empleados_estados FOREIGN KEY(idEstado) REFERENCES estados(id),
    CONSTRAINT fk_empleados_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(id),
    CONSTRAINT fk_empleados_colonias FOREIGN KEY(idColonia) REFERENCES colonias(id),

)ENGINE=InnoDB;

#*********** /Tabla Empleados ***********#


#*********** Tabla Paquetes ***********#

CREATE TABLE paquetes(

    id                  int(255) auto_increment not null,
    idCliente           int(255) not null,
    idEmpleado          int(255) not null,
    fechaEnvio          date not null,
    contenido           varchar(255) not null,
    peso                float(100, 2) not null,
    diaAlta             date not null,
    precioEnvio         float(100, 2) not null,
    observaciones       varchar(255),
    fechaEntrega        date not null,
    horaEntrega         time,

    CONSTRAINT pk_id_paquete PRIMARY KEY(id),

    CONSTRAINT fk_paquete_cliente FOREIGN KEY(idCliente) REFERENCES clientes(id),
    CONSTRAINT fk_paquete_empleado FOREIGN KEY(idEmpleado) REFERENCES empleados(id)
    
)ENGINE=InnoDB;

#*********** /Tabla Paquetes ***********#


#*********** Tabla Devoluciones ***********#

CREATE TABLE devoluciones(

    id                  int(255) auto_increment not null,
    idPaquete           int(255) not null,
    fechaDevolucion     date not null,
    motivoDevolucion    varchar(255) not null,

    CONSTRAINT pk_paquete PRIMARY KEY(id),

    CONSTRAINT fk_devolucion_paquete FOREIGN KEY(idPaquete) REFERENCES paquetes(id)

)ENGINE=InnoDB;

#*********** /Tabla Devoluciones ***********#