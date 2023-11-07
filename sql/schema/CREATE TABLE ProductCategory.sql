CREATE TABLE ProductCategory (
    pid INT NOT NULL,
    cid INT NOT NULL,
    PRIMARY KEY (pid, cid),
    FOREIGN KEY (pid) REFERENCES Product (id),
    FOREIGN KEY (cid) REFERENCES Category (id)
);

