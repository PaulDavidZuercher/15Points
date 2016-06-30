<html>

<?php 
  include('sqlConnect.php'); //Einbinden der Datenbank
?>

<head>
	<title>Overview</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		function addLoginDataToServer() //übernehmen der Daten aus dem Formular per POST Methode; sofortiges tabellarisches Wiederanzeigen 
		{
			$.ajax({
				type: "POST",
				url: "/indexProc.php", //Weiterleitung zur Datenbankanfrage
				data: {loginDataName: $("#account").val, passWord: $('#password').val, SetorGet: 1}, //Auslesen der Daten; Schreiben in Variablen
				success: function(result){$("#loginTable").html = result} //Das geladene Ergebnis soll im "div", das "#paswordView" heißt, angezeigt werden
			});
		}
		function addLoginDataToTable()
		{
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {SetorGet: 2},
				success: function(result){$("#passwordView").html = result}
			});
		}
	</script>
</head>

<body>
	<ul> <!--Homeleiste-->
      		<li><a class="active" href="http://144.76.65.253/">Home</a></li> 
      		<li><a href="login.php">Login</a></li>
      		<li><a href="register.php">Register</a></li>
	</ul>
	
	
	
</body> 
</html>
