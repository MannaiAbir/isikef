CREATE TABLE replies (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    author INT NOT NULL,
    parent_comment INT NOT NULL,
    content varchar(255),
    FOREIGN KEY (author) REFERENCES user(id),
    FOREIGN KEY (parent_comment) REFERENCES comments(id)
)