
CREATE TABLE membres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) ,
    email VARCHAR(100)  UNIQUE
);




CREATE TABLE projets (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    type ENUM('court','long'),
    member_id INT ,
    FOREIGN KEY (member_id) REFERENCES membres(id)
);

CREATE TABLE activites (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL ,
    description TEXT,
    project_id INT ,
    FOREIGN KEY (project_id) REFERENCES projets(id)
);

