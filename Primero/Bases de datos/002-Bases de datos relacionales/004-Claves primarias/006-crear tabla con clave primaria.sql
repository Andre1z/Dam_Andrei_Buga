CREATE TABLE `miempresa`.`empleados` 
(
	`Identificador` INT NOT NULL AUTO_INCREMENT , 
	`nombre` VARCHAR(100) NOT NULL , 
	`apellidos` VARCHAR(100) NOT NULL , 
	`telefono` VARCHAR(100) NOT NULL , 
	`email` VARCHAR(100) NOT NULL , 
	PRIMARY KEY (`Identificador`)
) ENGINE = InnoDB;
