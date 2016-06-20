<?php
$servername = "localhost";
$username = "jan";
$password = "paul";

include connect.php

// Create database
$query =  "CREATE DATABASE 15PointsDB";
$mysqli->query($query);
if ($mysqli->connect_errno) {
    echo "Database 15PointsDB created successfully";
} else {
    echo "Error creating database: " . $mysqli->connect_error;
}

// sql to create table
$query = "CREATE TABLE user (
userName VARCHAR(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
passWord VARCHAR(50) NOT NULL,
MailAdresse VARCHAR(50),
accountCreation TIMESTAMP,
FOREIGN KEY (userName) REFERENCES savedLoginData(userName)
)";

$mysqli->query($query);
if ($mysqli->connect_errno) {
    echo "Database Table created successfully";
} else {
    echo "Error creating database: " . $mysqli->connect_error;
}
// sql to create table
$sql = "CREATE TABLE savedLoginData (
userName VARCHAR(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
loginDataName VARCHAR(50) NOT NULL,
passWord VARCHAR(50),
dataCreation TIMESTAMP,
FOREIGN KEY (userName) REFERENCES user(userName)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);
?>
