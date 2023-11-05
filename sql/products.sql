CREATE TABLE products (
    product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_id INT NOT NULL,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    quantity_available INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);