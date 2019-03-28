#***** Paises *****#

INSERT INTO paises VALUES(null, 'MEXICO');
INSERT INTO paises VALUES(null, 'COLOMBIA');

#***** /Paises *****#


#***** Estados *****#

INSERT INTO estados VALUES(1, null, 'COAHUILA');
INSERT INTO estados VALUES(1, null, 'SINALOA');

INSERT INTO estados VALUES(2, null, 'ANTLOQUIA');
INSERT INTO estados VALUES(2, null, 'SANTANDER');

#***** /Estados *****#


#****** Ciudades ******#

# pais MEXICO, estado COAHUILA
INSERT INTO ciudades VALUES(1, 1, null, 'SALTILLO');
INSERT INTO ciudades VALUES(1, 1, null, 'MONCLOVA');

# pais MEXICO, estado SINALOA
INSERT INTO ciudades VALUES(1, 2, null, 'CULIACAN');
INSERT INTO ciudades VALUES(1, 2, null, 'MAZATLAN');

# pais colombia, estado ANTLOQUIA
INSERT INTO ciudades VALUES(2, 3, null, 'MEDELLIN');
INSERT INTO ciudades VALUES(2, 3, null, 'ZARAGOZA');

# pais colombia, estado SANTANDER
INSERT INTO ciudades VALUES(2, 4, null, 'SOCORRO');
INSERT INTO ciudades VALUES(2, 4, null, 'OIBA');

#****** /Ciudades ******#


#****** Colonias ******#


## pais MEXICO, estado COAHUILA ##

# SALTILLO
INSERT INTO colonias VALUES(1, 1, 1, null, 'ZAPALINAME');
INSERT INTO colonias VALUES(1, 1, 1, null, 'GUAYULERA');

# MONCLOVA
INSERT INTO colonias VALUES(1, 1, 2, null, 'GUERRERO');
INSERT INTO colonias VALUES(1, 1, 2, null, 'DEL RIO');


## pais MEXICO, estado SINALOA ##

# CULICAN
INSERT INTO colonias VALUES(1, 2, 3, null, 'SALVADORES');
INSERT INTO colonias VALUES(1, 2, 3, null, 'URDIÑOLA');

# MAZATLAN
INSERT INTO colonias VALUES(1, 2, 4, null, 'MAREA');
INSERT INTO colonias VALUES(1, 2, 4, null, 'FRUTOS');


## pais COLOMBIA, estado ANTLOQUIA ##

# MEDELLIN
INSERT INTO colonias VALUES(2, 3, 5, null, 'GRANADOS');
INSERT INTO colonias VALUES(2, 3, 5, null, 'ESCOBAR');

# ZARAGOZA
INSERT INTO colonias VALUES(2, 3, 6, null, 'HEROICOS');
INSERT INTO colonias VALUES(2, 3, 6, null, 'CENTRICA');


## pais COLOMBIA, estado SANTANDER ##

# SOCORRO
INSERT INTO colonias VALUES(2, 4, 7, null, 'LIBRADORES');
INSERT INTO colonias VALUES(2, 4, 7, null, 'VALLE VERDE');

# OIBA
INSERT INTO colonias VALUES(2, 4, 8, null, 'ARBOLEDAS');
INSERT INTO colonias VALUES(2, 4, 8, null, 'PARAISO');


#****** /Colonias ******#


#****** Clientes ******#

INSERT INTO clientes VALUES(1, null, 'JUAN', 'VARGAS', 'FRAIRE', 55, 'VAFJ980207LQ6', 'VAFJ320907HCLRRN05', 'MASCULINO', 'juan@hotmail.com', 8441302933, 'nadadores #342');
INSERT INTO clientes VALUES(2, null, 'OZIEL', 'LOPEZ', 'ARREDONDO', 20, 'LOAO350808D70', 'LOAO350808HNLPRZ00', 'MASCULINO', 'oziel@hotmail.com', 8443303923, 'bustamante #232');
INSERT INTO clientes VALUES(3, null, 'JAVIER', 'RODRIGUEZ', 'BALDERAS', 35, 'ROBJ820708EGA', 'ROBJ820708HNLDLV04', 'MASCULINO', 'javiersito@hotmail.com', 8663245444, 'mexicali #232');

#****** /Clientes ******#


#****** Empleados ******#

INSERT INTO empleados VALUES(4, null, 'ROBERTO', 'CAMPOS', 'SALAZAR', 30, 'CASR900502PD2', 'CASR900502HSLMLB01', 'MASCULINO', 'roberto@hotmail.com', '12345678', 2552316538, 'percadores #233', 0);
INSERT INTO empleados VALUES(5, null, 'MARIA', 'PEREZ', 'OCAMPO', 44, 'PEOM250704676', 'PEOM250704MSLRCR07', 'FEMENINO', 'maria123@hotmail.com', 'passworddd', 4336549087, 'flamencos #238', 1);
INSERT INTO empleados VALUES(6, null, 'ANDREA', 'PAREDES', 'REYES', 53, 'PARA2505049F7', 'PARA250504MSLRYN08', 'FEMENINO', 'andiLove@hotmail.com', '43214321432', 8779785765, 'garibaldi #434', 2);

#****** /Empleados ******#


#****** Paquetes ******#

INSERT INTO paquetes VALUES(1, 1, null, CURDATE(), 'mochila vans', 10.4, CURDATE(), 100, null, CURDATE() + 2, null);
INSERT INTO paquetes VALUES(2, 2, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);
INSERT INTO paquetes VALUES(3, 3, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);

#****** /Paquetes ******#
