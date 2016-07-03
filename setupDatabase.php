<?php
include 'sqlConnect.php';

if(!$mysqli->query("DROP TABLE IF EXISTS savedLoginData;"))
	die("Error 1: " . $mysqli->error);

if(!$mysqli->query("DROP TABLE IF EXISTS user;"))
	die("Error 2: " . $mysqli->error);

if(!$mysqli->query("Create Table user (userName varchar (64) NOT NULL, passWord  varchar(64) NOT NULL, salt varchar(64) NOT NULL, email varchar (64) NOT NULL, regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(userName));")) 
	die("Error 3: " . $mysqli->error);


if(!$mysqli->query("Create Table savedLoginData (userName varchar(64) NOT NULL, foreignServiceName varchar(64) NOT NULL, foreignServiceUserName varchar(64) NOT NULL, foreignServicePassWord varchar(64) NOT NULL, creationTimeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (userName) REFERENCES user(userName), PRIMARY KEY (userName,foreignServiceName, foreignServiceUserName));"))
	die("Error 4: " . $mysqli->error);


?>

