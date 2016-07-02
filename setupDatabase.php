<?php
include 'sqlConnect.php';

if(!$mysqli->query("DROP TABLE IF EXISTS users"))
	die("Error" . $mysqli->error);

if!($mysqli->query("Create Table savedLoginData (userName varchar(64) NOT NULL, foreignServiceName varchar(64), foreignServiceUserName varchar(64) NOT NULL, foreignServicePassWord varchar(64) NOT NULL, creationTimeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP);"))
	die("Error" . $mysqli->error);
?>



