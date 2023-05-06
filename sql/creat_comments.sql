CREATE TABLE comments (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    author INT NOT NULL,
    content varchar(255),
    FOREIGN KEY (author) REFERENCES user(id)
)