/* Crear Base de Datos */
CREATE DATABASE `test-js-propiedades`;

/* Tabla Usuario */
CREATE TABLE `test-js-propiedades`.`usuarios` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `Usuario` VARCHAR(64) NOT NULL , 
    `Hashed_Password` VARCHAR(128) NOT NULL , 
    PRIMARY KEY (`ID`)
    ) 
    ENGINE = InnoDB;

/* Tablas ComboBox */

/* Tabla Inmueble */
CREATE TABLE `test-js-propiedades`.`inmueble` ( 
    `PK_Inmueble_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `Inmueble` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`PK_Inmueble_ID`)
    ) 
    ENGINE = InnoDB;

/* Tabla Operacion */
CREATE TABLE `test-js-propiedades`.`Operacion` ( 
    `PK_Operacion_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `Operacion` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`PK_Operacion_ID`)
    ) 
    ENGINE = InnoDB;

/* Tabla Ubicacion */
CREATE TABLE `test-js-propiedades`.`Ubicacion` ( 
    `PK_Ubicacion_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `Ubicacion` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`PK_Ubicacion_ID`)
    ) 
    ENGINE = InnoDB;

/* Tabla Condicion */
CREATE TABLE `test-js-propiedades`.`Condicion` ( 
    `PK_Condicion_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `Condicion` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`PK_Condicion_ID`)
    ) 
    ENGINE = InnoDB;

/* Tabla Estado */
CREATE TABLE `test-js-propiedades`.`Estado` ( 
    `PK_Estado_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `Estado` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`PK_Estado_ID`)
    ) 
    ENGINE = InnoDB;

/* Tabla Propiedades */
CREATE TABLE `test-js-propiedades`.`propiedades` ( 
    `PK_Propiedades_ID` INT NOT NULL AUTO_INCREMENT , 
    `Nombre_propietario` VARCHAR(64) NOT NULL , 
    `Precio` INT NOT NULL , 
    `Direccion` VARCHAR(128) NOT NULL , 
    `Dormitorios` INT NOT NULL , 
    `Baños` INT NOT NULL , 
    `Estacionamientos` INT NOT NULL , 
    `Metros_Construidos` INT NOT NULL , 
    `Superficie_Terreno` INT NOT NULL , 
    `fk_inmueble` INT UNSIGNED NOT NULL , 
    `fk_operacion` INT UNSIGNED NOT NULL , 
    `fk_ubicacion` INT UNSIGNED NOT NULL , 
    `fk_condicion` INT UNSIGNED NOT NULL , 
    `fk_estado` INT UNSIGNED NOT NULL , 
    PRIMARY KEY (`PK_Propiedades_ID`)
    ) 
    ENGINE = InnoDB;

/* Claves Foraneas */

ALTER TABLE `propiedades` 
ADD CONSTRAINT `fk_condicon_id` 
FOREIGN KEY (`fk_condicion`) 
REFERENCES `condicion`(`PK_Condicion_ID`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT;

ALTER TABLE `propiedades` 
ADD CONSTRAINT `fk_inmueble_id` 
FOREIGN KEY (`fk_inmueble`) 
REFERENCES `inmueble`(`PK_Inmueble_ID`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT; 

ALTER TABLE `propiedades` 
ADD CONSTRAINT `fk_estado_id` 
FOREIGN KEY (`fk_estado`) 
REFERENCES `estado`(`PK_Estado_ID`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT; 

ALTER TABLE `propiedades` 
ADD CONSTRAINT `fk_operacion_id` 
FOREIGN KEY (`fk_operacion`) 
REFERENCES `operacion`(`PK_Operacion_ID`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT;
 
ALTER TABLE `propiedades` 
ADD CONSTRAINT `fk_ubicacion_id` 
FOREIGN KEY (`fk_ubicacion`) 
REFERENCES `ubicacion`(`PK_Ubicacion_ID`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT;
