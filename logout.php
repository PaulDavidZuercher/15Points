<?php
session_start();
if ($_SESSION["login"])
{
	if (!session_destroy())
		die ("Logour failed")
	
	$_SESSION["login"] = false;
	$_SESSION["userName"] = "";	
}
