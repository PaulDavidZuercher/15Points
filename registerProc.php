<?php 
// todo: prevent sql injection

include 'sqlConnect.php';
$userName = $_POST["userName"];
$E_MailAdresse = $_POST["E_MailAdresse"];
$passWord = $_POST["passWord"];
$accountCreation = new DateTime('now', new DateTimeZone('Europe/London'));

$ergebnis = $mysqli->query("SELECT userName FROM user WHERE userName = '".mysql_real_escape_string('$userName')."' ");

if($ergebnis->fetch_row())
{
	echo "Username existiert bereits"; 
	exit();
}

$mysqli->query("INSERT INTO user (userName, passWord, email, reg_date) VALUES ('$userName', '$passWord', '$E_MailAdresse', '$accountCreation')");

 echo "Regestrierung abgeschloßen. Willkommen ('$userName').";
?>
