

<?php 
// todo: prevent sql injection

include 'sqlConnect.php';

$userName = $_POST["uid"];
$ema = $_POST["ema"];
$passWord = $_POST["psw"];
//$passWord2 = $_POST["psw2"]; s. z. 10ff
$accountCreation = time()

// do it in  register.php because of better feedback
//if($passWord != $passWord2) {
//	echo "<p>Password unterschiedlich. Bitte erneut eingeben.</p>"
//	exit();
//}

$ergebnis = $mysqli->query("SELECT userName FROM user where userName = '$userName' && passWord = '$passWord'");
if($ergebnis->fetch_row())
{
	echo "<p>Username existiert bereits</p>" 
	exit();
}

$mysqli->query("INSERT INTO user (userName, passWord, E-MailAdresse, accountCreation) VALUES ('$userName', '$ema', '$passWord', '$accountCreation')") 
?>
