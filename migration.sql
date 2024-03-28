-- select and run this query to create a new database to store tables
CREATE DATABASE user;

-- select and run this query to create a table to store the users
CREATE TABLE user.users (
    id INT PRIMARY KEY,
    username VARCHAR(30),
    password VARCHAR(15)
);

-- select and run this separetly if the table will be deleted
DROP TABLE IF EXISTS user.users;