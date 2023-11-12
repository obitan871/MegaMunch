CREATE TABLE orders (
    order_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_id INT NOT NULL,
    order_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(5,2) NOT NULL,
    order_status VARCHAR(20) NOT NULL,
    FOREIGN KEY  (customer_id) REFERENCES users(customer_id)
);