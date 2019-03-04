create DATABASE ventas;
USE ventas;

CREATE TABLE clientes(

    id_cliente      int(255) auto_increment not null,
    id_correo       int(255) not null,
    id_telefono     int(255) not null,
    nombre          varchar(255) not null,
    paterno         varchar(255) not null,
    materno         varchar(255),
    genero          varchar(10) not null,
    edad            int(3) not null,
    rfc             varchar(13) not null,
    curp            varchar(18) not null,
    domicilio       varchar(255) not null,
    

    CONSTRAINT pk_id_cliente PRIMARY KEY(id_cliente),

    CONSTRAINT uq_rfc UNIQUE(rfc),
    CONSTRAINT uq_curp UNIQUE(curp),

    CONSTRAINT ck_genero CHECK (genero = 'masculino' OR genero = 'femenino');

    CONSTRAINT fk_clientes_correo FOREIGN KEY(id_correo) REFERENCES correos(id_correo),
    CONSTRAINT fk_clientes_telefono FOREIGN KEY(id_telefono) REFERENCES telefonos(id_telefono),



)ENGINE=InnoDB;

CREATE TABLE paquetes(

    id_paquete      int(255) auto_increment not null,
    id_devolucion   int(255) not null,
    id_cliente      int(255) not null,
    fecha_envio     date not null,
    contenido       varchar(255) not null,
    peso            float(100, 2) not null,
    dia_alta        date not null,
    precio_envio    float(100, 2) not null,
    observaciones   varchar(255),
    fecha_entrega   date not null,
    hora_entrega    time

    CONSTRAINT pk_id_paquete PRIMARY KEY(id_paquete),

    CONSTRAINT fk_cliente_paquete FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente),
    CONSTRAINT fk_devolucion_paquete FOREIGN KEY(id_devolucion) REFERENCES devoluciones(id_paquete)
    
)ENGINE=InnoDB;

CREATE TABLE empleados(

    id_empleado         int(255) auto_increment not null,
    id_correo           int(255) not null,
    id_telefono         int(255) not null,
    id_estado           int(255) not null,          
    id_ciudad           int(255) not null,
    id_colonia          int(255) not null,
    nombre              varchar(255) not null,
    paterno             varchar(255) not null,
    materno             varchar(255),
    genero              varchar(10) not null,
    edad                int(3) not null,
    rfc                 varchar(13) not null,
    curp                varchar(18) not null,
    domicilio           varchar(255) not null,

    CONSTRAINT  pk_empleado PRIMARY KEY(id_empleado),

    CONSTRAINT  fk_correo_empleado FOREIGN KEY(id_correo) REFERENCES correos(id_correo),
    CONSTRAINT  fk_telefono_empleado FOREIGN KEY(id_telefono) REFERENCES telefonos(id_telefono),
    CONSTRAINT  fk_estado_empleado FOREIGN KEY(id_estado) REFERENCES estados(id_estado),
    CONSTRAINT  fk_ciudad_empleado FOREIGN KEY(id_ciudad) REFERENCES ciudades(id_ciudad),
    CONSTRAINT  fk_colonias_empleado FOREIGN KEY(id_colonia) REFERENCES colonias(id_colonia),

)ENGINE=InnoDB;

# para que la tabla colonia si tenemos un campo domicilio??

CREATE TABLE devoluciones(

    id_paquete          int(255) auto_increment not null,
    id_empleado         int(255) not null,
    fecha_devolucion    date not null,
    motivo_devolucion   varchar(255),

    CONSTRAINT pk_paquete PRIMARY KEY(id_paquete),
    CONSTRAINT fk_empleado_devolucion FOREIGN KEY(id_empleado) REFERENCES empleados(id_empleado)

)ENGINE=InnoDB;

# porque relacionado con empleado si la devolucion la hace el cliente

CREATE TABLE telefonos(

    id_telefono         int(255) auto_increment not null,
    telefonos           int(10) not null,

    CONSTRAINT pk_telefono PRIMARY KEY(id_telefono)

)ENGINE=InnoDB;

# porque telefonos no puede ir en la tabla de empleados y clientes?

CREATE TABLE estados(

    id_estado       int(255) auto_increment not null,
    nombre          varchar(255) not null,

    CONSTRAINT pk_estado PRIMARY KEY(id_estado),

)ENGINE=InnoDB;

CREATE TABLE ciudades(

    id_ciudad       int(255) auto_increment not null,
    id_estado       int(255) not null,
    nombre          varchar(255) not null,

    CONSTRAINT pk_ciudad PRIMARY KEY(id_ciudad),
    CONSTRAINT fk_estados_ciudades FOREIGN KEY(id_estado) REFERENCES estados(id_estado)

)ENGINE=InnoDB;

CREATE TABLE colonias(

    id_colonia          int(255) auto_increment not null,
    id_ciudad           int(255) not null,
    nombre              varchar(255) not null,

    CONSTRAINT pk_colonia PRIMARY KEY(id_colonia),
    CONSTRAINT fk_estados_ciudades FOREIGN KEY(id_ciudad) REFERENCES ciudades(id_ciudad)

)ENGINE=InnoDB;