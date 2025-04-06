-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS project;

-- Use the project database
USE project;

-- Create the users table if it doesn't exist
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    currency INT DEFAULT 0
);