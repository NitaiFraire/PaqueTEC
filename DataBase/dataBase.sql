# Drop database paqueteria; #

create DATABASE paqueteria;
USE paqueteria;


#***********  Paises ***********#

CREATE TABLE paises(

    idPais          int(255) auto_increment not null,
    nombrePais      varchar(255) not null,

    CONSTRAINT pk_idPais PRIMARY KEY(idPais)

)ENGINE=InnoDB;

#***********  /Paises ***********#


#***********  Estados  ***********#

CREATE TABLE estados(

    idPais          int(255) not null,
    idEstado        int(255) auto_increment not null,
    nombreEstado    varchar(255) not null,

    CONSTRAINT pk_estado PRIMARY KEY(idEstado),

    CONSTRAINT fk_estados_paises FOREIGN KEY(idPais) REFERENCES paises(idPais)

)ENGINE=InnoDB;

#***********  /Estados  ***********#


#***********  Ciudades ***********#

CREATE TABLE ciudades(

    idPais          int(255) not null,
    idEstado        int(255) not null,
    idCiudad        int(255) auto_increment not null,
    nombreCiudad    varchar(255) not null,

    CONSTRAINT pk_ciudad PRIMARY KEY(idCiudad),

    CONSTRAINT fk_ciudades_paises FOREIGN KEY(idPais) REFERENCES paises(idPais),
    CONSTRAINT fk_ciudades_estados FOREIGN KEY(idEstado) REFERENCES estados(idEstado)

)ENGINE=InnoDB;

#***********  /Ciudades  ***********#


#***********  Colonias  ***********#

CREATE TABLE colonias(

    idPais              int(255) not null,
    idEstado            int(255) not null,
    idCiudad            int(255) not null,
    idColonia           int(255) auto_increment not null,
    nombreColonia       varchar(255) not null,

    CONSTRAINT pk_colonia PRIMARY KEY(idColonia),

    CONSTRAINT fk_colonias_paises FOREIGN KEY(idPais) REFERENCES paises(idPais),
    CONSTRAINT fk_colonias_estados FOREIGN KEY(idEstado) REFERENCES estados(idEstado),
    CONSTRAINT fk_colonias_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(idCiudad)

)ENGINE=InnoDB;

#***********  /Colonias  ***********#


#***********  Clientes  ***********#

CREATE TABLE clientes(

    idColonia       int(255) not null,
    idCiudad        int(255) not null,
    idEstado        int(255) not null,
    idPais          int(255) not null,
    idCliente       int(255) auto_increment not null,
    nombre          varchar(255) not null,
    paterno         varchar(255) not null,
    materno         varchar(255),
    edad            int(3) not null,
    rfc             varchar(13) not null,
    curp            varchar(18) not null,
    genero          varchar(10) not null,
    email           varchar(255) not null,
    telefono        varchar(10) not null,
    domicilio       varchar(255) not null,
    
    CONSTRAINT pk_id_cliente PRIMARY KEY(idCliente),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),
    CONSTRAINT uq_telefono UNIQUE(telefono),

    CONSTRAINT ck_genero CHECK(genero = 'MASCULINO' OR genero = 'FEMENINO'),

    CONSTRAINT fk_clientes_colonias FOREIGN KEY(idColonia) REFERENCES colonias(idColonia),
    CONSTRAINT fk_clientes_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(idCiudad),
    CONSTRAINT fk_clientes_estados FOREIGN KEY(idEstado) REFERENCES estados(idEstado),
    CONSTRAINT fk_clientes_paises FOREIGN KEY(idPais) REFERENCES paises(idPais)

)ENGINE=InnoDB;
 
#***********  /Clientes  ***********#


#***********  Empleados  ***********#

CREATE TABLE empleados(

    idColonia           int(255) not null,
    idCiudad            int(255) not null,
    idEstado            int(255) not null,
    idPais              int(255) not null,
    idEmpleado          int(255) auto_increment not null,
    nombre              varchar(255) not null,
    paterno             varchar(255) not null,
    materno             varchar(255),
    edad                int(3) not null,
    rfc                 varchar(13) not null,
    curp                varchar(18) not null,
    genero              varchar(10) not null,
    email               varchar(255) not null,
    password            varchar(255) not null,
    telefono            varchar(10) not null,
    domicilio           varchar(255) not null,
    rol                 int(1),

    CONSTRAINT  pk_empleado PRIMARY KEY(idEmpleado),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),
    CONSTRAINT uq_email UNIQUE(email),
    CONSTRAINT uq_telefono UNIQUE(telefono),

    # 0 = gerente, 1 = planta, 2 = repartidor #
    CONSTRAINT ck_role CHECK(rol = 0 OR rol = 1 OR rol = 2),

    CONSTRAINT fk_empleados_colonias FOREIGN KEY(idColonia) REFERENCES colonias(idColonia),
    CONSTRAINT fk_empleados_ciudades FOREIGN KEY(idCiudad) REFERENCES ciudades(idCiudad),
    CONSTRAINT fk_empleados_estados FOREIGN KEY(idEstado) REFERENCES estados(idEstado),
    CONSTRAINT fk_empleados_paises FOREIGN KEY(idPais) REFERENCES paises(idPais)
    
)ENGINE=InnoDB;

#***********  /Empleados  ***********#


#***********  Paquetes  ***********#

CREATE TABLE paquetes(

    idCliente           int(255) not null,
    idEmpleado          int(255) not null,
    idPaquete           int(255) auto_increment not null,
    fechaAlta           date not null,
    fechaEntrega        date not null,
    fechaEnvio          date not null,
    horaEntrega         time,
    contenido           varchar(255) not null,
    peso                float(100, 2) not null,
    precioEnvio         float(100, 2) not null,
    observaciones       varchar(255),
    estado              int(1),

    CONSTRAINT pk_id_paquete PRIMARY KEY(idPaquete),

    # 0 = registrado, 1 = enviado, 2 = entregado, 3 = devuelto #
    CONSTRAINT ck_estado CHECK(estado = 0 OR estado = 1 OR estado = 2 OR estado = 3),

    CONSTRAINT fk_paquete_cliente FOREIGN KEY(idCliente) REFERENCES clientes(idCliente),
    CONSTRAINT fk_paquete_empleado FOREIGN KEY(idEmpleado) REFERENCES empleados(idEmpleado)
    
)ENGINE=InnoDB;

#***********  /Paquetes  ***********#


#***********  Devoluciones  ***********#

CREATE TABLE devoluciones(

    idPaquete           int(255) not null,
    idDevolucion        int(255) auto_increment not null,
    fechaDevolucion     date not null,
    motivoDevolucion    varchar(255) not null,

    CONSTRAINT pk_paquete PRIMARY KEY(idDevolucion),

    CONSTRAINT fk_devolucion_paquete FOREIGN KEY(idPaquete) REFERENCES paquetes(idPaquete)

)ENGINE=InnoDB;

#***********  /Devoluciones  ***********#