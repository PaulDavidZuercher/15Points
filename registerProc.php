<?php 
include 'sqlConnect.php';

$userName = $_POST["userName"];
$E_MailAdresse = $_POST["E_MailAdresse"];
$passWord = $_POST["passWord"];
$ergebnis = $mysqli->query("SELECT userName FROM user WHERE userName = '". $mysqli->real_escape_string('$userName')."' ");

if($ergebnis->fetch_row())
{
	echo ("Username existiert bereits"); 
	exit();
}

$res = $mysqli->query("INSERT INTO user (userName, passWord, email) VALUES ('$userName', '$passWord', '$E_MailAdresse'");
if (!res)
	die("Registration failed because querieing failed." . $mysql->connect_error);
echo ("Regestrierung abgeschloßen. Willkommen ('$userName').");
?>
