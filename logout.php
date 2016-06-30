<?php
session_start();
if ($_SESSION["login"])
{
	if (!session_destroy())
		die ("Logour failed");
	
	$_SESSION["login"] = false;
	$_SESSION["userName"] = "";	
	
	echo ("<html> <head> <script> window.location=\"login.php\"</script></head> <body><p> redirecting... </body></html>");	
}

else{
	echo ("You are not logged in :)");
}
?>
