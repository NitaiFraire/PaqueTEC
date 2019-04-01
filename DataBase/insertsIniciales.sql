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

# pais colombia, estado ANTLOQUIA
INSERT INTO ciudades VALUES(2, 3, null, 'MEDELLIN');
INSERT INTO ciudades VALUES(2, 3, null, 'ZARAGOZA');
INSERT INTO ciudades VALUES(2, 3, null, 'GRANADA');

# pais colombia, estado SANTANDER
INSERT INTO ciudades VALUES(2, 4, null, 'SOCORRO');
INSERT INTO ciudades VALUES(2, 4, null, 'OIBA');
INSERT INTO ciudades VALUES(2, 4, null, 'ENCINO');

# pais colombia, estado CAUCA
INSERT INTO ciudades VALUES(2, 3, null, 'BOLIVAR');
INSERT INTO ciudades VALUES(2, 3, null, 'TORIBIO');
INSERT INTO ciudades VALUES(2, 3, null, 'ARGELIA');

# pais argentina, estado CORDOBA
INSERT INTO ciudades VALUES(3, 1, null, 'ARIAS');
INSERT INTO ciudades VALUES(3, 1, null, 'CRUZ DEL EJE');
INSERT INTO ciudades VALUES(3, 1, null, 'DEVOTO');

# pais argentina, estado SANTA FE
INSERT INTO ciudades VALUES(3, 2, null, 'ALDAO');
INSERT INTO ciudades VALUES(3, 2, null, 'BERRETA');
INSERT INTO ciudades VALUES(3, 2, null, 'PIÑERO');

# pais argentina, estado MISIONES
INSERT INTO ciudades VALUES(3, 3, null, 'CAPITAL');
INSERT INTO ciudades VALUES(3, 3, null, 'IGUAZU');
INSERT INTO ciudades VALUES(3, 3, null, 'OBERA');

# pais brasil, estado ACRE
INSERT INTO ciuades VALUES(4, 1, null, 'CRUZEIRO DO SUL');
INSERT INTO ciuades VALUES(4, 1, null, 'XAPURI');
INSERT INTO ciuades VALUES(4, 1, null, 'MANCIO LIMA');

# pais brasil, estado CEARA
INSERT INTO ciudades VALUES(4, 2, null, 'FORTALEZA');
INSERT INTO ciudades VALUES(4, 2, null, 'AQUIRAZ');
INSERT INTO ciudades VALUES(4, 2, null, 'CATO');

# pais brail, estado GOIAS
INSERT INTO ciudades VALUES(4, 3, null, 'GOIANIA');
INSERT INTO ciudades VALUES(4, 3, null, 'CIDADE OCIDENTAL');
INSERT INTO ciudades VALUES(4, 3, null, 'CALDAS NOVAS');

# pais canada, estado ONTARIO
INSERT INTO ciudades VALUES(5, 1, null, 'TORONTO');
INSERT INTO ciudades VALUES(5, 1, null, 'OTTAWA');
INSERT INTO ciudades VALUES(5, 1, null, 'HAMILTON');

# pais canada, estado QUEBEC
INSERT INTO ciudades VALUES(5, 2, null, 'GANBY');
INSERT INTO ciudades VALUES(5, 2, null, 'SAGUENAY');
INSERT INTO ciudades VALUES(5, 2, null, 'MONTREAL');

# pais canada, estado NUNAVUD
INSERT INTO ciudades VALUES(5, 3, null, 'IQALUIT');
INSERT INTO ciudades VALUES(5, 3, null, 'POND INLET');
INSERT INTO ciudades VALUES(5, 3, null, 'ARVIAT');

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
INSERT INTO colonias VALUES(1, 2, 3, null, 'SALVADORES');
INSERT INTO colonias VALUES(1, 2, 3, null, 'URDIÑOLA');
INSERT INTO colonias VALUES(1, 2, 1, null, 'AZUCENA');

# MAZATLAN
INSERT INTO colonias VALUES(1, 2, 4, null, 'MAREA');
INSERT INTO colonias VALUES(1, 2, 4, null, 'FRUTOS');
INSERT INTO colonias VALUES(1, 2, 2, null, 'BENITO JUAREZ');

# SALVADOR
INSERT INTO colonias VALUES(1, 2, 3, null, 'AMAPAS');
INSERT INTO colonias VALUES(1, 2, 3, null, 'LOMA LINDA');
INSERT INTO colonias VALUES(1, 2, 3, null, 'LOS ALAMOS');

## pais MEXICO, estado QUERETARO

# azteca
INSERT INTO colonias VALUES(1, 3, 1, null, 'ANAHUAC');
INSERT INTO colonias VALUES(1, 3, 1, null, 'INDEPENDENCIA');
INSERT INTO colonias VALUES(1, 3, 1, null, 'MODELO');

# bolaños
INSERT INTO colonias VALUES(1, 3, 2, null, 'QUINTA ALICIA');
INSERT INTO colonias VALUES(1, 3, 2, null, 'RANCHO BELLAVISTA');
INSERT INTO colonias VALUES(1, 3, 2, null, 'SAN DIEGO');

# jofre
INSERT INTO colonias VALUES(1, 3, 3, null, 'TLANESE');
INSERT INTO colonias VALUES(1, 3, 3, null, 'VISTAS DEL VALLE');
INSERT INTO colonias VALUES(1, 3, 3, null, 'PRADERAS ');

## pais COLOMBIA, estado ANTLOQUIA ##

# MEDELLIN
INSERT INTO colonias VALUES(2, 3, 5, null, 'GRANADOS');
INSERT INTO colonias VALUES(2, 3, 5, null, 'ESCOBAR');
INSERT INTO colonias VALUES(2, 1, 1, null, 'JOSE ÑPZANO');

# ZARAGOZA
INSERT INTO colonias VALUES(2, 3, 6, null, 'HEROICOS');
INSERT INTO colonias VALUES(2, 3, 6, null, 'CENTRICA');
INSERT INTO colonias VALUES(2, 1, 2, null, 'CAUCASIA');

# GRANADA
INSERT INTO colonias VALUES(2, 1, 3, null, 'VILLA MANA');
INSERT INTO colonias VALUES(2, 1, 3, null, 'RIO NECHI');
INSERT INTO colonias VALUES(2, 1, 3, null, 'CIMITARRA');

## pais COLOMBIA, estado SANTANDER ##

# SOCORRO
INSERT INTO colonias VALUES(2, 4, 7, null, 'LIBRADORES');
INSERT INTO colonias VALUES(2, 4, 7, null, 'VALLE VERDE');
INSERT INTO colonias VALUES(2, 2, 1, null, 'PUERTO BERRIO');

# OIBA
INSERT INTO colonias VALUES(2, 4, 8, null, 'ARBOLEDAS');
INSERT INTO colonias VALUES(2, 4, 8, null, 'PARAISO');
<<<<<<< HEAD
 
=======
INSERT INTO colonias VALUES(2, 2, 2, null, 'SEGOVIA');

# ENCINO
INSERT INTO colonias VALUES(2, 2, 3, null, 'EL BAGRE');
INSERT INTO colonias VALUES(2, 2, 3, null, 'RIONEGRO');
INSERT INTO colonias VALUES(2, 2, 3, null, 'LA HONDA');

# CAUCA

# BOLIVAR
INSERT INTO colonias VALUES(2, 3, 1, null, 'VILLA LEYVA');
INSERT INTO colonias VALUES(2, 3, 1, null, 'MONIQUITA');
INSERT INTO colonias VALUES(2, 3, 1, null, 'ENVIGADO');

# TORIBIO
INSERT INTO colonias VALUES(2, 3, 2, null, 'ESPINAL');
INSERT INTO colonias VALUES(2, 3, 2, null, 'CHAPARRAL');
INSERT INTO colonias VALUES(2, 3, 2, null, 'CARTAGO');

# ARGELIA
INSERT INTO colonias VALUES(2, 3, 3, null, 'MANIZALES');
INSERT INTO colonias VALUES(2, 3, 3, null, 'SOACHA');
INSERT INTO colonias VALUES(2, 3, 3, null, 'ACACIAS');

## pais ARGENTINA, estado CORDOBA ##

#ARIAS
INSERT INTO colonias VALUES(3, 1, 1, null, 'NUEVA GALIA');
INSERT INTO colonias VALUES(3, 1, 1, null, 'BAGUAL');
INSERT INTO colonias VALUES(3, 1, 1, null, 'ITALO');

#CRUZ DEL EJE
INSERT INTO colonias VALUES(3, 1, 2, null, 'BARON');
INSERT INTO colonias VALUES(3, 1, 2, null, 'SANTA ROSA');
INSERT INTO colonias VALUES(3, 1, 2, null, 'TELEN');

# DEVOTO
INSERT INTO colonias VALUES(3, 1, 3, null, 'LA PASTORIL');
INSERT INTO colonias VALUES(3, 1, 3, null, 'SANTA ISABEL');
INSERT INTO colonias VALUES(3, 1, 3, null, 'BARRANCAS');

## pais ARGENTINA, estado SANTA FE

# ALDAO
INSERT INTO colonias VALUES(3, 2, 1, null, 'CHOS MALAR');
INSERT INTO colonias VALUES(3, 2, 1, null, 'HUNCAL');
INSERT INTO colonias VALUES(3, 2, 1, null, 'LAS LAJAS');

#BERRETA
INSERT INTO colonias VALUES(3, 2, 2, null, 'ZAPALA');
INSERT INTO colonias VALUES(3, 2, 2, null, 'LAS COLORADAS');
INSERT INTO colonias VALUES(3, 2, 2, null, 'ACHICO');

#PIÑEROS
INSERT INTO colonias VALUES(3, 2, 3, null, 'PASO FLORES');
INSERT INTO colonias VALUES(3, 2, 3, null, 'COMALLO');
INSERT INTO colonias VALUES(3, 2, 3, null, 'PILCANIYU');

## pais ARGENTINA, estado MISIONES

# CAPITAL
INSERT INTO colonias VALUES(3, 3, 1, null, 'QUETREQUILE');
INSERT INTO colonias VALUES(3, 3, 1, null, 'RIO CHICO');
INSERT INTO colonias VALUES(3, 3, 1, null, 'LAS BAYAS');

# IGUAZU
INSERT INTO colonias VALUES(3, 3, 2, null, 'EL BOLSON');
INSERT INTO colonias VALUES(3, 3, 2, null, 'LLANADA GRANDE');
INSERT INTO colonias VALUES(3, 3, 2, null, 'CHOLILA');

# OBRERA
INSERT INTO colonias VALUES(3, 3, 3, null, 'LOS CIPRESES');
INSERT INTO colonias VALUES(3, 3, 3, null, 'GASTRE');
INSERT INTO colonias VALUES(3, 3, 3, null, 'EL CAIN');

## pais ARGENTINA, estado ACRE

#CRUZEIRO DO SUL
INSERT INTO colonias VALUES(4, 1, 1, null, 'SIERRA COLORADA');
INSERT INTO colonias VALUES(4, 1, 1, null, 'VILCHETA');
INSERT INTO colonias VALUES(4, 1, 1, null, 'MANCHA BLANCA');

# XAPURI
INSERT INTO colonias VALUES(4, 1, 2, null, 'POMONA');
INSERT INTO colonias VALUES(4, 1, 2, null, 'LAMARQUE');
INSERT INTO colonias VALUES(4, 1, 2, null, 'DARWIN');

# MANCIO LIMA
INSERT INTO colonias VALUES(4, 1, 3, null, 'PULCHES');
INSERT INTO colonias VALUES(4, 1, 3, null, 'VALLE DAZA');
INSERT INTO colonias VALUES(4, 1, 3, null, 'GENERAL ARCHA');

## pais ARGENTINA, estado CEARA

# FORTALEZA
INSERT INTO colonias VALUES(4, 2, 1, null, 'ATLALIVA ROCCA');
INSERT INTO colonias VALUES(4, 2, 1, null, 'MACACHIN');
INSERT INTO colonias VALUES(4, 2, 1, null, 'RIVERA');

# AQUIRA
INSERT INTO colonias VALUES(4, 2, 2, null, 'PUAN');
INSERT INTO colonias VALUES(4, 2, 2, null, 'PIGUE');
INSERT INTO colonias VALUES(4, 2, 2, null, 'CORONEL SUAREZ');

# CATO
INSERT INTO colonias VALUES(4, 2, 3, null, 'RONDONIA');
INSERT INTO colonias VALUES(4, 2, 3, null, 'BOCA DE ACRE');
INSERT INTO colonias VALUES(4, 2, 3, null, 'MAPIA');

## pais ARGENTINA, estado GOIAS

#GOIANIA
INSERT INTO colonias VALUES(4, 3, 1, null, 'NOVA EPRESA');
INSERT INTO colonias VALUES(4, 3, 1, null, 'MANOEL URBANO');
INSERT INTO colonias VALUES(4, 3, 1, null, 'CACHUELA DO CASTRO');

# CIDADE OCIDENTAL
INSERT INTO colonias VALUES(4, 3, 2, null, 'BUZETA');
INSERT INTO colonias VALUES(4, 3, 2, null, 'ESTANI');
INSERT INTO colonias VALUES(4, 3, 2, null, 'EL SARA');

#CELDAS NOVAS
INSERT INTO colonias VALUES(4, 3, 3, null, 'BAURES');
INSERT INTO colonias VALUES(4, 3, 3, null, 'CASARABE');
INSERT INTO colonias VALUES(4, 3, 3, null, 'LORETO');

## pais CANADA, estado ONTARIO
#TORONTO
INSERT INTO colonias VALUES(5, 1, 1, null, 'ORANGEVILLE');
INSERT INTO colonias VALUES(5, 1, 1, null, 'CALEDON');
INSERT INTO colonias VALUES(5, 1, 1, null, 'ERIN');

#OTAWA
INSERT INTO colonias VALUES(5, 1, 2, null, 'BRAMPTON');
INSERT INTO colonias VALUES(5, 1, 2, null, 'NORTH YORK');
INSERT INTO colonias VALUES(5, 1, 2, null, 'SMITHFIELD');

#HAMILTON
INSERT INTO colonias VALUES(5, 1, 3, null, 'YORK');
INSERT INTO colonias VALUES(5, 1, 3, null, 'WOODBRIDGE');
INSERT INTO colonias VALUES(5, 1, 3, null, 'WILLOW DALE');

## pais CANADA, estado QUEBEC
#GANBY
INSERT INTO colonias VALUES(5, 2, 1, null, 'BAYVIEW');
INSERT INTO colonias VALUES(5, 2, 1, null, 'DOWNSVIEW');
INSERT INTO colonias VALUES(5, 2, 1, null, 'MALVERN');

#SAGUENAY
INSERT INTO colonias VALUES(5, 2, 2, null, 'STEELES');
INSERT INTO colonias VALUES(5, 2, 2, null, 'CLIFFSIDE');
INSERT INTO colonias VALUES(5, 2, 2, null, 'PORT UNION');

#MONTREAL
INSERT INTO colonias VALUES(5, 2, 3, null, 'RICHMOND HILL');
INSERT INTO colonias VALUES(5, 2, 3, null, 'VAUGHAN');
INSERT INTO colonias VALUES(5, 2, 3, null, 'KING CITY');


## pais CANADA, estado NUNAVUD
#IQALUIT
INSERT INTO colonias VALUES(5, 3, 1, null, 'LASKAY');
INSERT INTO colonias VALUES(5, 3, 1, null, 'GORNMLEY');
INSERT INTO colonias VALUES(5, 3, 1, null, 'PICKERING');

#POND INLET
INSERT INTO colonias VALUES(5, 3, 2, null, 'AJAX');
INSERT INTO colonias VALUES(5, 3, 2, null, 'WEST HILL');
INSERT INTO colonias VALUES(5, 3, 2, null, 'LEMON VILLE');

#ARVIAT
INSERT INTO colonias VALUES(5, 3, 3, null, 'BALLANTRAE');
INSERT INTO colonias VALUES(5, 3, 3, null, 'SNOWBALL');
INSERT INTO colonias VALUES(5, 3, 3, null, 'GOODWOOD');
>>>>>>> 5a4eac3bf48b633e211ee04e381e1fdfe23e8352

#****** /Colonias ******#


#****** Clientes ******#

INSERT INTO clientes VALUES(1, 1, 1, 1, null, 'JUAN', 'VARGAS', 'FRAIRE', 55, 'VAFJ980207LQ6', 'VAFJ320907HCLRRN05', 'MASCULINO', 'juan@hotmail.com', 8441302933, 'nadadores #342');
INSERT INTO clientes VALUES(5, 3, 2, 1, null, 'OZIEL', 'LOPEZ', 'ARREDONDO', 20, 'LOAO350808D70', 'LOAO350808HNLPRZ00', 'MASCULINO', 'oziel@hotmail.com', 8443303923, 'bustamante #232');
INSERT INTO clientes VALUES(9, 5, 3, 2, null, 'JAVIER', 'RODRIGUEZ', 'BALDERAS', 35, 'ROBJ820708EGA', 'ROBJ820708HNLDLV04', 'MASCULINO', 'javiersito@hotmail.com', 8663245444, 'mexicali #232');

INSERT INTO clientes VALUES(9, 5, 3, 2, null, 'JAVIER', 'RODRIGUEZ', 'BALDERAS', 35, 'RFBJ820708EGA', 'RFBJ820708HNLDLV04', 'MASCULINO', 'javiersfito@hotmail.com', 8663245444, 'mexicali #232');

#****** /Clientes ******#


#****** Empleados ******#

INSERT INTO empleados VALUES(1, 1, 1, 1, null, 'ROBERTO', 'CAMPOS', 'SALAZAR', 30, 'CASR900502PD2', 'CASR900502HSLMLB01', 'MASCULINO', 'roberto@hotmail.com', '12345678', 2552316538, 'percadores #233', 0);
INSERT INTO empleados VALUES(5, 3, 2, 1, null, 'MARIA', 'PEREZ', 'OCAMPO', 44, 'PEOM250704676', 'PEOM250704MSLRCR07', 'FEMENINO', 'maria123@hotmail.com', 'passworddd', 4336549087, 'flamencos #238', 1);
INSERT INTO empleados VALUES(9, 5, 3, 2, null, 'ANDREA', 'PAREDES', 'REYES', 53, 'PARA2505049F7', 'PARA250504MSLRYN08', 'FEMENINO', 'andiLove@hotmail.com', '43214321432', 8779785765, 'garibaldi #434', 2);

#****** /Empleados ******#


#****** Paquetes ******#

INSERT INTO paquetes VALUES(1, 1, null, CURDATE(), 'mochila vans', 10.4, CURDATE(), 100, null, CURDATE() + 2, null);
INSERT INTO paquetes VALUES(2, 2, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);
INSERT INTO paquetes VALUES(3, 3, null, CURDATE(), 'camisa polo0', 200, CURDATE(), 200, null, CURDATE() + 4, null);

#****** /Paquetes ******#
