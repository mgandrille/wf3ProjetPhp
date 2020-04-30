#CREATE DATABASE maBoutique ;
USE maBoutique;

CREATE TABLE produit (
	id 			INT NOT NULL AUTO_INCREMENT,
    category		VARCHAR(100),
    type			VARCHAR(100),
    matiere		VARCHAR(100),
    price			DECIMAL,
    description	MEDIUMTEXT,
    
    PRIMARY KEY(id)
) ENGINE=INNODB CHARACTER SET=utf8;

