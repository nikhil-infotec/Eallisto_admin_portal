 
CREATE DATABASE admin_portal;

USE admin_portal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('admin', MD5('password123'));

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(100),
    address TEXT
);

CREATE TABLE invoices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    date DATE,
    amount DECIMAL(10,2),
    status ENUM('Unpaid', 'Paid', 'Cancelled') DEFAULT 'Unpaid',
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

CREATE TABLE custom_fields (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module ENUM('Customer', 'Invoice'),
    name VARCHAR(100),
    type ENUM('Text', 'Date', 'Decimal', 'Dropdown', 'Lookup'),
    options TEXT
);
