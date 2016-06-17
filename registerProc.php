<?php 
include 'sqlConnect.php'

$userName = $_POST["uid"]
$ema = $_POST["ema"]
$passWord = $_POST["psw"] 
$passWord2 = $_POST["psw2"]
$accountCreation = time()


if($passWord != $passWord2) {
	
	echo "<p>Password unterschiedlich. Bitte erneut eingeben.</p>"
	exit();
}

$ergebnis = mysqli_query($conn, "SELECT userName FROM user")
while($row = mysqli_fetsch_object($ergebnis))
{
 
if ($ergebnis = $userName) {
	echo "<p>Username existiert bereits</p> 
	exit();

}
}
$eintrag = mysqli_query($conn, "INSERT INTO user (userName, passWord, E-MailAdresse, accountCreation) VALUES ('$userName', '$ema', '$passWord', '$accountCreation')") 
?>
