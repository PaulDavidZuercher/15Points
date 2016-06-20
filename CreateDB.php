<?php
$servername = "localhost";
$username = "root";
$password = "rabadon0p";

// Create connection
$conn = mysqli_connect($localhost, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE 15PointsDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE user (
userName VARCHAR(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
passWord VARCHAR(50) NOT NULL,
MailAdresse VARCHAR(50),
accountCreation TIMESTAMP,
FOREIGN KEY (userName) REFERENCES savedLoginData(userName)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
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
