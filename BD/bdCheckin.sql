
----creacion de la base
CREATE DATABASE dbCheckin;

----creacion de las tablas
CREATE TABLE PASAJEROS 
( idPasajero INT PRIMARY KEY,
apellido VARCHAR(50), nombres VARCHAR(100), documento INT(8),correo VARCHAR(50), telefono INT(10));

CREATE TABLE AVIONES 
( idAvion INT PRIMARY KEY,
fabricante VARCHAR(100),modelo VARCHAR(50),matricula CHAR(8),filas INT(50),butacasFila INT(10));

CREATE TABLE VUELOS 
( idVuelo INT PRIMARY KEY,
numero INT(4), origen CHAR(3),destino CHAR(3),fecha DATE, horaSalida TIME,horaLlegada TIME,
idAvion INT,
----Se establecen las claves foraneas
CONSTRAINT FK_Avion FOREIGN KEY (idAvion) REFERENCES AVIONES(idAvion));

CREATE TABLE PASAJEROSVUELOS 
(fila CHAR(2),butaca INT(50),
idVuelo INT, idPasajero INT,
PRIMARY KEY (`idVuelo`, `idPasajero`),
----Se establecen las claves foraneas
CONSTRAINT FK_Vuelo FOREIGN KEY (idVuelo) REFERENCES VUELOS(idVuelo),
CONSTRAINT FK_Pasajero FOREIGN KEY (idPasajero) REFERENCES PASAJEROS(idPasajero));


--Valores por defecto de butcas y fila de pasajerosvuelos seteados en 0

ALTER TABLE PASAJEROSVUELOS
ADD fila int NOT NULL DEFAULT(0)
GO

ALTER TABLE PASAJEROSVUELOS
ADD butaca int NOT NULL DEFAULT(0)
GO