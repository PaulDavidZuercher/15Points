<?php
include 'sqlConnect.php';

if(!$mysqli->query("DROP TABLE IF EXISTS savedLoginData"))
	die("Error" . $mysqli->error);

if(!$mysqli->query("Create Table savedLoginData (userName varchar(64) NOT NULL, foreignServiceName varchar(64), foreignServiceUserName varchar(64) NOT NULL, foreignServicePassWord varchar(64) NOT NULL, creationTimeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (userName) REFERENCES user(userName), PRIMARY KEY (userName));"))
	die("Error" . $mysqli->error);
?>



