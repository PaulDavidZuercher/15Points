<?php 
// todo: prevent sql injection

include 'sqlConnect.php';

$userName = $_POST["uid"];
$email = $_POST["ema"];
$passWord = $_POST["psw"];
//$passWord2 = $_POST["psw2"]; s. z. 10ff
$reg_date = new DateTime('now', new DateTimeZone('EUROPE'));

// do it in  register.php because of better feedback
//if($passWord != $passWord2) {
//	echo "<p>Password unterschiedlich. Bitte erneut eingeben.</p>"
//	exit();
//}

$ergebnis = $mysqli->query("SELECT userName FROM user where userName = '$userName' && passWord = '$passWord'");
if($ergebnis->fetch_row())
{
	echo ("<p>Username existiert bereits</p>"); 
	exit();
}

$mysqli->query("INSERT INTO user (userName, passWord, email, reg_date) VALUES ('$userName', '$email', '$passWord', '$reg_date')") 
?>
