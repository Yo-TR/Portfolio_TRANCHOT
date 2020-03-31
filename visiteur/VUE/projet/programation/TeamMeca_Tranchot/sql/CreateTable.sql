CREATE TABLE `pages` (
	`Id_page` INT NOT NULL AUTO_INCREMENT ,
	`Titre` VARCHAR( 255 ) NOT NULL ,
	`Mots_cles` VARCHAR( 255 ) NOT NULL ,
	`Description` VARCHAR( 255 ) NOT NULL ,
	`Contenu` TEXT NOT NULL ,
	`Id_parent` INT DEFAULT '1' NOT NULL ,
	PRIMARY KEY ( `Id_page` )
);