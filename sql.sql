CREATE TABLE Registration (
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Email varchar(30) NOT NULL UNIQUE,
    Username varchar(30) NOT NULL,
    ExpertiseLevel ENUM('Beginner', 'Intermediate', 'Advanced') NOT NULL,
    Password longtext NOT NULL
)
