USE maboutique;

CREATE TABLE users (
	id			INT NOT NULL AUTO_INCREMENT,
    email		VARCHAR(70),
    password	VARCHAR(150),
    create_at	DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    primary key(id)
);
