<?php 
// todo: prevent sql injection

include 'sqlConnect.php';
echo("test");
$userName = $_POST["userName"];
$E_MailAdresse = $_POST["E_MailAdresse"];
$passWord = $_POST["passWord"];
$passWord2 = $_POST["passWord2"]; 
$accountCreation = new DateTime('now', new DateTimeZone('EUROPE'));

 
if($passWord != $passWord2) {
	echo "Password unterschiedlich. Bitte erneut eingeben.";
	exit();
}

$ergebnis = $mysqli->query("SELECT userName FROM user WHERE userName = '".mysql_real_escape_string('$userName')."' ");

if($ergebnis->fetch_row())
{
	echo "Username existiert bereits"; 
	exit();
}

$mysqli->query("INSERT INTO user (userName, passWord, email, reg_date) VALUES ('$userName', '$passWord', '$E_MailAdresse', '$accountCreation')");

 echo "Regestrierung abgeschloßen. Willkommen ('$userName').";
?>
