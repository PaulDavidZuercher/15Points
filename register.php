<!DOCTYPE html>
<html>
	<head>
		<title>Sign in</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>

	<body>
		<h1>Registrieren</h1>

		<div id="pwDiv" class="horizontalAndVerticalCentered">
			<form action="registerProc.php">
	      		Username:<br>
		      	<input type="text" name="uid">
		      	<br>
		      	E-Mailadresse:<br>
		      	<input type="text" name="ema">
		      	<br>
      			Password:<br>
     		 	<input type="password" name="psw">
     		 	<br>
     		 	Password bestaetigen: <br>
     		 	<input type="password" name="psw2">
    		</form>

		</div>
	</body>
</html>
