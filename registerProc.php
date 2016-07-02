<?php 
include 'sqlConnect.php';

$userName = $mysqli->real_escape_string($_POST["userName"]);
$E_MailAdresse = $mysqli->real_escape_string($_POST["E_MailAdresse"]);
$passWord =$mysqli->real_escape_string($_POST["passWord"]);

$res = $mysqli->query("SELECT * FROM user WHERE userName = '$userName'");

if($res->num_rows > 0)
{
	echo ("Username existiert bereits"); 
	exit();
}

$salt = $mysqli->real_escape_string(random_bytes(32));

$res = $mysqli->query("INSERT INTO user (userName,salt, passWord, email) VALUES ('$userName', '$salt', MD5(CONCAT('$salt', ':', '$passWord')), '$E_MailAdresse')");

if(!$res)
	die("Registration failed because querieing failed." . $mysqli->error);


echo ("Registration Succeed. Welcome  ('$userName').");
?>
