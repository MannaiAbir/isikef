CREATE TABLE user (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255),
    password varchar(255),
    role ENUM('student', 'prof')
)