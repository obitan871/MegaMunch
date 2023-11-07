CREATE TABLE Product (
    id INT NOT NULL,
    name VARCHAR (50) NOT NULL,
    image VARCHAR (500) NOT NULL,
    price DECIMAL (10, 2) NOT NULL,
    quantity INT NOT NULL,
    description VARCHAR (1000),
    PRIMARY KEY (id)
);

