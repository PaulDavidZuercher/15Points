<?php 
// todo: prevent sql injection

include 'sqlConnect.php';

$userName = $_POST["userName"];
$E_MailAdresse = $_POST["E_MailAdresse"];
$passWord = $_POST["passWord"];
$passWord2 = $_POST["passWord2"]; 
$accountCreation = new DateTime('now', new DateTimeZone('EUROPE'));

 
if($passWord != $passWord2) {
	echo "Password unterschiedlich. Bitte erneut eingeben.";
	exit();
}

$ergebnis = $mysqli->query("SELECT userName FROM user where userName = '$userName' ");

if($ergebnis->fetch_row())
{
	echo "Username existiert bereits"; 
	exit();
}

$mysqli->query("INSERT INTO user (userName, passWord, E-MailAdresse, accountCreation) VALUES ('$userName', '$passWord', '$E_MailAdresse', '$accountCreation')") 

 echo "Regestrierung abgeschloßen. Willkommen ('$userName').";
?>
