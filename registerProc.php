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

$mysqli->query("INSERT INTO user (userName, passWord, email) VALUES ('$userName', '$passWord', '$E_MailAdresse'");
echo ("Regestrierung abgeschloßen. Willkommen ('$userName').");
?>
