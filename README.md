# connection with database using php & mysql

## I use XAMPP & localhost for server

## Create base
CREATE DATABASE usersdb;

## Create table
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    sport VARCHAR(100) NOT NULL
);
