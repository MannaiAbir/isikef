    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    author INT NOT NULL,
    parent_comment INT NOT NULL,
    content varchar(255),
    FOREIGN KEY (author) REFERENCES user(id),
    FOREIGN KEY (parent_comment) REFERENCES comments(id)

CREATE TABLE students (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(100) NOT NULL,
ecole VARCHAR(255) NOT NULL,
age INT(10) NOT NULL
);
students
INSERT INTO `students` (`id`, `nom`, `ecole`, `age`) VALUES
(1, 'John Doe', 'johndoe', '2'),
(2, 'David Deacon', 'david', '5'),
(3, 'Sam White', 'samwhit', '6');
