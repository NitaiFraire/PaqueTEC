#***** Paises *****#

INSERT INTO paises VALUES(null, 1, 1, 1, 'mexico');
INSERT INTO paises VALUES(1, 2, 3, 2, 'mexico');
INSERT INTO paises VALUES(null, 3, 2, 6, 'panama');

#***** Paises *****#


#***** Insert Estados *****#

INSERT INTO estados VALUES(null, 1, 1, 'coahuila');
INSERT INTO estados VALUES(1, 2, 2, 'coahuila');

INSERT INTO estados VALUES(null, 3, 3, 'nuevo leon');
INSERT INTO estados VALUES(2, 4, 4, 'nuevo leon');

INSERT INTO estados VALUES(null, 5, 5, 'jalisco');
INSERT INTO estados VALUES(3, 6, 6, 'jalisco');

#***** /Insert Estados *****#


#****** Ciudades ******#

# ciudad saltillo (colonia satelite)
INSERT INTO ciudades VALUES(null, 1, 'saltillo');
# ciudad saltillo (colonia universidad)
INSERT INTO ciudades VALUES(1, 2, 'saltillo');

INSERT INTO ciudades VALUES(null, 2, 'monclova');
INSERT INTO ciudades VALUES(2, 2, 'monclova');

INSERT INTO ciudades VALUES(null, 3, 'monterrey');
INSERT INTO ciudades VALUES(null, 4, 'san pedro');

INSERT INTO ciudades VALUES(null, 5, 'guadalajara');
INSERT INTO ciudades VALUES(null, 6, 'tlaquepaque');

#****** /Ciudades ******#


#****** Colonias ******#

# colonias saltillo (coahuila, méxico) #
INSERT INTO colonias VALUES(null, 'zapaliname');
INSERT INTO colonias VALUES(null, 'guayulera');

# colonias monclova (coahuila, méxico) #
INSERT INTO colonias VALUES(null, 'satelite');
INSERT INTO colonias VALUES(null, 'universidad');

# colonias monterrey (nuevo leon, méxico) #
INSERT INTO colonias VALUES(null, 'salvadores');
INSERT INTO colonias VALUES(null, 'guerrero');

# colonias san pedro (nuevo leon, méxico) #
INSERT INTO colonias VALUES(null, 'salvadores');
INSERT INTO colonias VALUES(null, 'guerrero');

# colonias richmond (virginia, EUA) #
INSERT INTO colonias VALUES(null, 'connecticut');
INSERT INTO colonias VALUES(null, 'delaware');

# colonias san antonio(texas, EUA) #
INSERT INTO colonias VALUES(null, 'mayflower');
INSERT INTO colonias VALUES(null, 'netherland');

#****** /Colonias ******#


## Insert Clientes ##

INSERT INTO clientes VALUES(null, 1, 1, 1, 1, 'juan', 'vargas', 'fraire', 55, 'VAFJ980207LQ6', 'VAFJ320907HCLRRN05', 'MASCULINO', 'juan@hotmail.com', 8441302933, 'nadadores #342');
INSERT INTO clientes VALUES(null, 1, 2, 2, 2, 'oziel', 'lopez', 'arredondo', 55, 'LOAO350808D70', 'LOAO350808HNLPRZ00', 'MASCULINO', 'oziel@hotmail.com', 8443303923, 'bustamante #232');
INSERT INTO clientes VALUES(null, 1, 3, 5, 6, 'javier', 'rodriguez', 'balderas', 55, 'ROBJ820708EGA', 'ROBJ820708HNLDLV04', 'MASCULINO', 'javiersito@hotmail.com', 8663245444, 'mexicali #232');

## /Insert Clientes ##


## Insert Empleados ##

INSERT INTO empleados VALUES(null, 1, 1, 1, 1, 'roberto', 'campos', 'salazar', 'rfc', 'curp', 'MASCULINO', 'roberto@hotmail.com', 2552316538, 'percadores #233');
INSERT INTO empleados VALUES(null, 1, 2, 2, 2, 'maria', 'perez', 'ocampo', 'rfc', 'curps', 'FEMENINO', 'maria123@hotmail.com', 4336549087, 'flamencos #238');
INSERT INTO empleados VALUES(null, 2, 3, 3, 3, 'andrea', 'paredes', 'reyes', 'rfc', 'curp', 'FEMENINO', 'andiLove@hotmail.com', 8779785765, 'garibaldi #434');

## Insert Empleados ##


## Insert Paquetes ##

INSERT INTO paquetes VALUES(null, 1, 1, CURDATE(), 'mochila vans', 10.4, CURDATE(), 100, null, CURDATE() + 2, null);
INSERT INTO paquetes VALUES(null, 2, 2, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);

## Insert /Paquetes ##