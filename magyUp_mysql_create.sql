CREATE TABLE `dogs` (
	`id_dog` int(10) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	`image` varchar(255) NOT NULL,
	`name` varchar(255) NOT NULL,
	`age` FLOAT(4,2) NOT NULL,
	`color` varchar(20) NOT NULL,
	`cena` int NOT NULL,
	`sex` varchar(10) NOT NULL,
	`id_poroda` int(10) NOT NULL,
	PRIMARY KEY (`id_dog`)
);

CREATE TABLE `pokupatel` (
	`id_pok` int(10) NOT NULL AUTO_INCREMENT,
	`fio` varchar(20) NOT NULL,
	`tel` int(20) NOT NULL,
	`e-mail` varchar(20) NOT NULL,
	`pass` varchar(20) NOT NULL,
	`street` varchar(20) NOT NULL,
	`house` varchar(20) NOT NULL,
	`kv` int(10) NOT NULL,
	PRIMARY KEY (`id_pok`)
);

CREATE TABLE `poroda` (
	`id_poroda` int(10) NOT NULL AUTO_INCREMENT,
	`name_poroda` varchar(20) NOT NULL,
	PRIMARY KEY (`id_poroda`)
);

CREATE TABLE `zacaz` (
	`id_zac` int(10) NOT NULL AUTO_INCREMENT,
	`data` DATE NOT NULL,
	`id_pok` int(10) NOT NULL,
	`id_dog` int(10) NOT NULL,
	PRIMARY KEY (`id_zac`)
);

CREATE TABLE `admin` (
	`login` varchar(20) NOT NULL,
	`pass` varchar(20) NOT NULL,
	`id_pok` int(10) NOT NULL
);

ALTER TABLE `dogs` ADD CONSTRAINT `dogs_fk0` FOREIGN KEY (`id_poroda`) REFERENCES `poroda`(`id_poroda`);

ALTER TABLE `zacaz` ADD CONSTRAINT `zacaz_fk0` FOREIGN KEY (`id_pok`) REFERENCES `pokupatel`(`id_pok`);

ALTER TABLE `zacaz` ADD CONSTRAINT `zacaz_fk1` FOREIGN KEY (`id_dog`) REFERENCES `dogs`(`id_dog`);

ALTER TABLE `admin` ADD CONSTRAINT `admin_fk0` FOREIGN KEY (`id_pok`) REFERENCES `pokupatel`(`id_pok`);

