-- Create database
-- CREATE DATABASE telephone_directory;
USE telephone_directory;

CREATE TABLE directory (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  telephone VARCHAR(255) NOT NULL
);
INSERT INTO directory (name, telephone)
VALUES 
  ("John Doe", "555-555-5555"),
  ("Jane Doe", "555-555-5556"),
  ("Bob Smith", "555-555-5557"),
  ("Alice Johnson", "555-555-5558");


