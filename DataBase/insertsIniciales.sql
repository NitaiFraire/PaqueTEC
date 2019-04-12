#***** Paises *****#

INSERT INTO paises VALUES(null, 'MEXICO');
INSERT INTO paises VALUES(null, 'COLOMBIA');
INSERT INTO paises VALUES(null, 'ARGENTINA');
INSERT INTO paises VALUES(null, 'BRASIL');
INSERT INTO paises VALUES(null, 'CANADA');

#***** /Paises *****#


#***** Estados *****#

#***** MEXICO *****#
INSERT INTO estados VALUES(1, null, 'COAHUILA');
INSERT INTO estados VALUES(1, null, 'SINALOA');
INSERT INTO estados VALUES(1, null, 'QUERETARO');

#***** COLOMBIA *****#
INSERT INTO estados VALUES(2, null, 'ANTLOQUIA');
INSERT INTO estados VALUES(2, null, 'SANTANDER');
INSERT INTO estados VALUES(2, null, 'CAUCA');

#***** ARGENTINA *****#
INSERT INTO estados VALUES(3, null, 'CORDOBA');
INSERT INTO estados VALUES(3, null, 'SANTA FE');
INSERT INTO estados VALUES(3, null, 'MISIONES');

#***** BRASIL *****#
INSERT INTO estados VALUES(4, null, 'ACRE');
INSERT INTO estados VALUES(4, null, 'CEARA');
INSERT INTO estados VALUES(4, null, 'GOIAS');

#***** CANADA *****#
INSERT INTO estados VALUES(5, null, 'ONTARIO');
INSERT INTO estados VALUES(5, null, 'QUEBEC');
INSERT INTO estados VALUES(5, null, 'NUNAVUT');

#****** /Estados ******#

#****** Ciudades ******#

# pais MEXICO, estado COAHUILA
INSERT INTO ciudades VALUES(1, 1, null, 'SALTILLO');
INSERT INTO ciudades VALUES(1, 1, null, 'MONCLOVA');
INSERT INTO ciudades VALUES(1, 1, null, 'ACUÑA');

# pais MEXICO, estado SINALOA
INSERT INTO ciudades VALUES(1, 2, null, 'CULIACAN');
INSERT INTO ciudades VALUES(1, 2, null, 'MAZATLAN');
INSERT INTO ciudades VALUES(1, 2, null, 'SALVADOR');

# pais MEXICO, estado QUERETARO
INSERT INTO ciudades VALUES(1, 3, null, 'AZTECA');
INSERT INTO ciudades VALUES(1, 3, null, 'BOLAÑOS');
INSERT INTO ciudades VALUES(1, 3, null, 'JOFRE');

# pais COLOMBIA, estado ANTLOQUIA
INSERT INTO ciudades VALUES(2, 4, null, 'MEDELLIN');
INSERT INTO ciudades VALUES(2, 4, null, 'ZARAGOZA');
INSERT INTO ciudades VALUES(2, 4, null, 'GRANADA');

# pais COLOMBIA, estado SANTANDER
INSERT INTO ciudades VALUES(2, 5, null, 'SOCORRO');
INSERT INTO ciudades VALUES(2, 5, null, 'OIBA');
INSERT INTO ciudades VALUES(2, 5, null, 'ENCINO');

# pais COLOMBIA, estado CAUCA
INSERT INTO ciudades VALUES(2, 6, null, 'BOLIVAR');
INSERT INTO ciudades VALUES(2, 6, null, 'TORIBIO');
INSERT INTO ciudades VALUES(2, 6, null, 'ARGELIA');

# pais ARGENTINA, estado CORDOBA
INSERT INTO ciudades VALUES(3, 7, null, 'ARIAS');
INSERT INTO ciudades VALUES(3, 7, null, 'CRUZ DEL EJE');
INSERT INTO ciudades VALUES(3, 7, null, 'DEVOTO');

# pais ARGENTINA, estado SANTA FE
INSERT INTO ciudades VALUES(3, 8, null, 'ALDAO');
INSERT INTO ciudades VALUES(3, 8, null, 'BERRETA');
INSERT INTO ciudades VALUES(3, 8, null, 'PIÑERO');

# pais ARGENTINA, estado MISIONES
INSERT INTO ciudades VALUES(3, 9, null, 'CAPITAL');
INSERT INTO ciudades VALUES(3, 9, null, 'IGUAZU');
INSERT INTO ciudades VALUES(3, 9, null, 'OBERA');

# pais BRASIL, estado ACRE
INSERT INTO ciudades VALUES(4, 10, null, 'CRUZEIRO DO SUL');
INSERT INTO ciudades VALUES(4, 10, null, 'XAPURI');
INSERT INTO ciudades VALUES(4, 10, null, 'MANCIO LIMA');

# pais BRASIL, estado CEARA
INSERT INTO ciudades VALUES(4, 11, null, 'FORTALEZA');
INSERT INTO ciudades VALUES(4, 11, null, 'AQUIRAZ');
INSERT INTO ciudades VALUES(4, 11, null, 'CATO');

# pais BRASIL, estado GOIAS
INSERT INTO ciudades VALUES(4, 12, null, 'GOIANIA');
INSERT INTO ciudades VALUES(4, 12, null, 'CIDADE OCIDENTAL');
INSERT INTO ciudades VALUES(4, 12, null, 'CALDAS NOVAS');

# pais CANADA, estado ONTARIO
INSERT INTO ciudades VALUES(5, 13, null, 'TORONTO');
INSERT INTO ciudades VALUES(5, 13, null, 'OTTAWA');
INSERT INTO ciudades VALUES(5, 13, null, 'HAMILTON');

# pais CANADA, estado QUEBEC
INSERT INTO ciudades VALUES(5, 14, null, 'GANBY');
INSERT INTO ciudades VALUES(5, 14, null, 'SAGUENAY');
INSERT INTO ciudades VALUES(5, 14, null, 'MONTREAL');

# pais CANADA, estado NUNAVUD
INSERT INTO ciudades VALUES(5, 15, null, 'IQALUIT');
INSERT INTO ciudades VALUES(5, 15, null, 'POND INLET');
INSERT INTO ciudades VALUES(5, 15, null, 'ARVIAT');

#****** /Ciudades ******#


#****** Colonias ******#

## pais MEXICO, estado COAHUILA ##

# SALTILLO
INSERT INTO colonias VALUES(1, 1, 1, null, 'ZAPALINAME');
INSERT INTO colonias VALUES(1, 1, 1, null, 'GUAYULERA');
INSERT INTO colonias VALUES(1, 1, 1, null, 'BRISAS');

# MONCLOVA
INSERT INTO colonias VALUES(1, 1, 2, null, 'GUERRERO');
INSERT INTO colonias VALUES(1, 1, 2, null, 'DEL RIO');
INSERT INTO colonias VALUES(1, 1, 2, null, 'CAMPESTRE');

# ACUÑA
INSERT INTO colonias VALUES(1, 1, 3, null, 'ENCINOS');
INSERT INTO colonias VALUES(1, 1, 3, null, 'FLORES TAPIA');
INSERT INTO colonias VALUES(1, 1, 3, null, 'TIERRA Y ESPERANZA');

## pais MEXICO, estado SINALOA ##

# CULICAN
INSERT INTO colonias VALUES(1, 2, 4, null, 'SALVADORES');
INSERT INTO colonias VALUES(1, 2, 4, null, 'URDIÑOLA');
INSERT INTO colonias VALUES(1, 2, 4, null, 'AZUCENA');

# MAZATLAN
INSERT INTO colonias VALUES(1, 2, 5, null, 'MAREA');
INSERT INTO colonias VALUES(1, 2, 5, null, 'FRUTOS');
INSERT INTO colonias VALUES(1, 2, 5, null, 'BENITO JUAREZ');

# SALVADOR
INSERT INTO colonias VALUES(1, 2, 6, null, 'AMAPAS');
INSERT INTO colonias VALUES(1, 2, 6, null, 'LOMA LINDA');
INSERT INTO colonias VALUES(1, 2, 6, null, 'LOS ALAMOS');

## pais MEXICO, estado QUERETARO

# AZTECA
INSERT INTO colonias VALUES(1, 3, 7, null, 'ANAHUAC');
INSERT INTO colonias VALUES(1, 3, 7, null, 'INDEPENDENCIA');
INSERT INTO colonias VALUES(1, 3, 7, null, 'MODELO');

# BOLAÑOS
INSERT INTO colonias VALUES(1, 3, 8, null, 'QUINTA ALICIA');
INSERT INTO colonias VALUES(1, 3, 8, null, 'RANCHO BELLAVISTA');
INSERT INTO colonias VALUES(1, 3, 8, null, 'SAN DIEGO');

# JOFRE
INSERT INTO colonias VALUES(1, 3, 9, null, 'TLANESE');
INSERT INTO colonias VALUES(1, 3, 9, null, 'VISTAS DEL VALLE');
INSERT INTO colonias VALUES(1, 3, 9, null, 'PRADERAS ');

## pais COLOMBIA, estado ANTLOQUIA ##

# MEDELLIN
INSERT INTO colonias VALUES(2, 4, 10, null, 'GRANADOS');
INSERT INTO colonias VALUES(2, 4, 10, null, 'ESCOBAR');
INSERT INTO colonias VALUES(2, 4, 10, null, 'JOSE LOZANO');

# ZARAGOZA
INSERT INTO colonias VALUES(2, 4, 11, null, 'HEROICOS');
INSERT INTO colonias VALUES(2, 4, 11, null, 'CENTRICA');
INSERT INTO colonias VALUES(2, 4, 11, null, 'CAUCASIA');

# GRANADA
INSERT INTO colonias VALUES(2, 4, 12, null, 'VILLA MANA');
INSERT INTO colonias VALUES(2, 4, 12, null, 'RIO NECHI');
INSERT INTO colonias VALUES(2, 4, 12, null, 'CIMITARRA');

## pais COLOMBIA, estado SANTANDER ##

# SOCORRO
INSERT INTO colonias VALUES(2, 5, 13, null, 'LIBRADORES');
INSERT INTO colonias VALUES(2, 5, 13, null, 'VALLE VERDE');
INSERT INTO colonias VALUES(2, 5, 13, null, 'PUERTO BERRIO');

# OIBA
INSERT INTO colonias VALUES(2, 5, 14, null, 'ARBOLEDAS');
INSERT INTO colonias VALUES(2, 5, 14, null, 'PARAISO');
INSERT INTO colonias VALUES(2, 5, 14, null, 'SEGOVIA');

# ENCINO
INSERT INTO colonias VALUES(2, 5, 15, null, 'EL BAGRE');
INSERT INTO colonias VALUES(2, 5, 15, null, 'RIONEGRO');
INSERT INTO colonias VALUES(2, 5, 15, null, 'LA HONDA');

## pais COLOMBIA, estado CAUCA ##

# BOLIVAR
INSERT INTO colonias VALUES(2, 6, 16, null, 'VILLA LEYVA');
INSERT INTO colonias VALUES(2, 6, 16, null, 'MONIQUITA');
INSERT INTO colonias VALUES(2, 6, 16, null, 'ENVIGADO');

# TORIBIO
INSERT INTO colonias VALUES(2, 6, 17, null, 'ESPINAL');
INSERT INTO colonias VALUES(2, 6, 17, null, 'CHAPARRAL');
INSERT INTO colonias VALUES(2, 6, 17, null, 'CARTAGO');

# ARGELIA
INSERT INTO colonias VALUES(2, 6, 18, null, 'MANIZALES');
INSERT INTO colonias VALUES(2, 6, 18, null, 'SOACHA');
INSERT INTO colonias VALUES(2, 6, 18, null, 'ACACIAS');

## pais ARGENTINA, estado CORDOBA ##

#ARIAS
INSERT INTO colonias VALUES(3, 7, 19, null, 'NUEVA GALIA');
INSERT INTO colonias VALUES(3, 7, 19, null, 'BAGUAL');
INSERT INTO colonias VALUES(3, 7, 19, null, 'ITALO');

#CRUZ DEL EJE
INSERT INTO colonias VALUES(3, 7, 20, null, 'BARON');
INSERT INTO colonias VALUES(3, 7, 20, null, 'SANTA ROSA');
INSERT INTO colonias VALUES(3, 7, 20, null, 'TELEN');

# DEVOTO
INSERT INTO colonias VALUES(3, 7, 21, null, 'LA PASTORIL');
INSERT INTO colonias VALUES(3, 7, 21, null, 'SANTA ISABEL');
INSERT INTO colonias VALUES(3, 7, 21, null, 'BARRANCAS');

## pais ARGENTINA, estado SANTA FE

# ALDAO
INSERT INTO colonias VALUES(3, 8, 22, null, 'CHOS MALAR');
INSERT INTO colonias VALUES(3, 8, 22, null, 'HUNCAL');
INSERT INTO colonias VALUES(3, 8, 22, null, 'LAS LAJAS');

#BERRETA
INSERT INTO colonias VALUES(3, 8, 23, null, 'ZAPALA');
INSERT INTO colonias VALUES(3, 8, 23, null, 'LAS COLORADAS');
INSERT INTO colonias VALUES(3, 8, 23, null, 'ACHICO');

#PI�EROS
INSERT INTO colonias VALUES(3, 8, 24, null, 'PASO FLORES');
INSERT INTO colonias VALUES(3, 8, 24, null, 'COMALLO');
INSERT INTO colonias VALUES(3, 8, 24, null, 'PILCANIYU');

## pais ARGENTINA, estado MISIONES

# CAPITAL
INSERT INTO colonias VALUES(3, 9, 25, null, 'QUETREQUILE');
INSERT INTO colonias VALUES(3, 9, 25, null, 'RIO CHICO');
INSERT INTO colonias VALUES(3, 9, 25, null, 'LAS BAYAS');

# IGUAZU
INSERT INTO colonias VALUES(3, 9, 26, null, 'EL BOLSON');
INSERT INTO colonias VALUES(3, 9, 26, null, 'LLANADA GRANDE');
INSERT INTO colonias VALUES(3, 9, 26, null, 'CHOLILA');

# OBRERA
INSERT INTO colonias VALUES(3, 9, 27, null, 'LOS CIPRESES');
INSERT INTO colonias VALUES(3, 9, 27, null, 'GASTRE');
INSERT INTO colonias VALUES(3, 9, 27, null, 'EL CAIN');

## pais BRASIL, estado ACRE

#CRUZEIRO DO SUL
INSERT INTO colonias VALUES(4, 10, 28, null, 'SIERRA COLORADA');
INSERT INTO colonias VALUES(4, 10, 28, null, 'VILCHETA');
INSERT INTO colonias VALUES(4, 10, 28, null, 'MANCHA BLANCA');

# XAPURI
INSERT INTO colonias VALUES(4, 10, 29, null, 'POMONA');
INSERT INTO colonias VALUES(4, 10, 29, null, 'LAMARQUE');
INSERT INTO colonias VALUES(4, 10, 29, null, 'DARWIN');

# MANCIO LIMA
INSERT INTO colonias VALUES(4, 10, 30, null, 'PULCHES');
INSERT INTO colonias VALUES(4, 10, 30, null, 'VALLE DAZA');
INSERT INTO colonias VALUES(4, 10, 30, null, 'GENERAL ARCHA');

## pais BRASIL, estado CEARA

# FORTALEZA
INSERT INTO colonias VALUES(4, 11, 31, null, 'ATLALIVA ROCCA');
INSERT INTO colonias VALUES(4, 11, 31, null, 'MACACHIN');
INSERT INTO colonias VALUES(4, 11, 31, null, 'RIVERA');

# AQUIRAZ
INSERT INTO colonias VALUES(4, 11, 32, null, 'PUAN');
INSERT INTO colonias VALUES(4, 11, 32, null, 'PIGUE');
INSERT INTO colonias VALUES(4, 11, 32, null, 'CORONEL SUAREZ');

# CATO
INSERT INTO colonias VALUES(4, 11, 33, null, 'RONDONIA');
INSERT INTO colonias VALUES(4, 11, 33, null, 'BOCA DE ACRE');
INSERT INTO colonias VALUES(4, 11, 33, null, 'MAPIA');

## pais BRASIL, estado GOIAS

#GOIANIA
INSERT INTO colonias VALUES(4, 12, 34, null, 'NOVA EPRESA');
INSERT INTO colonias VALUES(4, 12, 34, null, 'MANOEL URBANO');
INSERT INTO colonias VALUES(4, 12, 34, null, 'CACHUELA DO CASTRO');

# CIDADE OCIDENTAL
INSERT INTO colonias VALUES(4, 12, 35, null, 'BUZETA');
INSERT INTO colonias VALUES(4, 12, 35, null, 'ESTANI');
INSERT INTO colonias VALUES(4, 12, 35, null, 'EL SARA');

#CELDAS NOVAS
INSERT INTO colonias VALUES(4, 12, 36, null, 'BAURES');
INSERT INTO colonias VALUES(4, 12, 36, null, 'CASARABE');
INSERT INTO colonias VALUES(4, 12, 36, null, 'LORETO');

## pais CANADA, estado ONTARIO

#TORONTO
INSERT INTO colonias VALUES(5, 13, 37, null, 'ORANGEVILLE');
INSERT INTO colonias VALUES(5, 13, 37, null, 'CALEDON');
INSERT INTO colonias VALUES(5, 13, 37, null, 'ERIN');

#OTAWA
INSERT INTO colonias VALUES(5, 13, 38, null, 'BRAMPTON');
INSERT INTO colonias VALUES(5, 13, 38, null, 'NORTH YORK');
INSERT INTO colonias VALUES(5, 13, 38, null, 'SMITHFIELD');

#HAMILTON
INSERT INTO colonias VALUES(5, 13, 39, null, 'YORK');
INSERT INTO colonias VALUES(5, 13, 39, null, 'WOODBRIDGE');
INSERT INTO colonias VALUES(5, 13, 39, null, 'WILLOW DALE');

## pais CANADA, estado QUEBEC

#GANBY
INSERT INTO colonias VALUES(5, 14, 40, null, 'BAYVIEW');
INSERT INTO colonias VALUES(5, 14, 40, null, 'DOWNSVIEW');
INSERT INTO colonias VALUES(5, 14, 40, null, 'MALVERN');

#SAGUENAY
INSERT INTO colonias VALUES(5, 14, 41, null, 'STEELES');
INSERT INTO colonias VALUES(5, 14, 41, null, 'CLIFFSIDE');
INSERT INTO colonias VALUES(5, 14, 41, null, 'PORT UNION');

#MONTREAL
INSERT INTO colonias VALUES(5, 14, 42, null, 'RICHMOND HILL');
INSERT INTO colonias VALUES(5, 14, 42, null, 'VAUGHAN');
INSERT INTO colonias VALUES(5, 14, 42, null, 'KING CITY');

## pais CANADA, estado NUNAVUT

#IQALUIT
INSERT INTO colonias VALUES(5, 15, 43, null, 'LASKAY');
INSERT INTO colonias VALUES(5, 15, 43, null, 'GORNMLEY');
INSERT INTO colonias VALUES(5, 15, 43, null, 'PICKERING');

#POND INLET
INSERT INTO colonias VALUES(5, 15, 44, null, 'AJAX');
INSERT INTO colonias VALUES(5, 15, 44, null, 'WEST HILL');
INSERT INTO colonias VALUES(5, 15, 44, null, 'LEMON VILLE');

#ARVIAT
INSERT INTO colonias VALUES(5, 15, 45, null, 'BALLANTRAE');
INSERT INTO colonias VALUES(5, 15, 45, null, 'SNOWBALL');
INSERT INTO colonias VALUES(5, 15, 45, null, 'GOODWOOD');

#****** /Colonias ******#

#****** Clientes ******#

INSERT INTO clientes VALUES(1, 1, 1, 1, null, 'JUAN', 'VARGAS', 'FRAIRE', 55, 'VAFJ980207LQ6', 'VAFJ320907HCLRRN05', 'MASCULINO', 'juan@hotmail.com', 8441302933, 'nadadores #342');
INSERT INTO clientes VALUES(5, 3, 2, 1, null, 'OZIEL', 'LOPEZ', 'ARREDONDO', 20, 'LOAO350808D70', 'LOAO350808HNLPRZ00', 'MASCULINO', 'oziel@hotmail.com', 8443303923, 'bustamante #232');
INSERT INTO clientes VALUES(9, 5, 3, 2, null, 'JAVIER', 'RODRIGUEZ', 'BALDERAS', 35, 'ROBJ820708EGA', 'ROBJ820708HNLDLV04', 'MASCULINO', 'javiersito@hotmail.com', 8663245444, 'mexicali #232');

INSERT INTO clientes VALUES(9, 5, 3, 2, null, 'JAVIER', 'RODRIGUEZ', 'BALDERAS', 35, 'RFBJ820708EGA', 'RFBJ820708HNLDLV04', 'MASCULINO', 'javiersfito@hotmail.com', 8663245444, 'mexicali #232');

#****** /Clientes ******#


#****** Empleados ******#

# password : qweasdzxc #
INSERT INTO empleados VALUES(1, 1, 1, 1, null, 'Nitai', 'Fernandez', 'Fraire', 30, '0101010101010', '101010101010101010', 'MASCULINO', 'nitai@hotmail.com', '$2y$04$oc37dqEkM6D6IQmZ1sClOegGSF3ACi69g2WHBTuQ1ICbqWV67YIyu', 2552316538, 'percadores #233', 0);
INSERT INTO empleados VALUES(1, 1, 1, 1, null, 'ROBERTO', 'CAMPOS', 'SALAZAR', 30, 'CASR900502PD2', 'CASR900502HSLMLB01', 'MASCULINO', 'roberto@hotmail.com', '12345678', 2552316538, 'percadores #233', 0);
INSERT INTO empleados VALUES(5, 3, 2, 1, null, 'MARIA', 'PEREZ', 'OCAMPO', 44, 'PEOM250704676', 'PEOM250704MSLRCR07', 'FEMENINO', 'maria123@hotmail.com', 'passworddd', 4336549087, 'flamencos #238', 1);
INSERT INTO empleados VALUES(9, 5, 3, 2, null, 'ANDREA', 'PAREDES', 'REYES', 53, 'PARA2505049F7', 'PARA250504MSLRYN08', 'FEMENINO', 'andiLove@hotmail.com', '43214321432', 8779785765, 'garibaldi #434', 2);

#****** /Empleados ******#


#****** Paquetes ******#

INSERT INTO paquetes VALUES(1, 1, null, CURDATE(), 'mochila vans', 10.4, CURDATE(), 100, null, CURDATE() + 2, null);
INSERT INTO paquetes VALUES(2, 2, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);
INSERT INTO paquetes VALUES(3, 3, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);

#****** /Paquetes ******#
