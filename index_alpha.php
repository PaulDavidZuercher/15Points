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
	<ul>
      		<li><a class="active" href="http://144.76.65.253/">Home</a></li>
      		<li><a href="login.php">Login</a></li>
      		<li><a href="register.php">Register</a></li>
	</ul>
	
	<div class="banner">
      	<h3>Your passwords</h3>  
    	</div>
	
	<div id="passwordView" style="width:400px;height:200px;">
	</div>
	
	<div id="loginTable">
		<table
			<tr> <th>Website</th> <th> Username </th> <th> Password </th> <th> Data Created</th>
		</table>
	</div>
	
	<div id="pwDiv" class="horizontalAndVerticalCentered">
		<form>
			Accountname:
			<br>
			<input type="text" name="loginDataName" id="loginDataName">
			<br>
			Username:
			<br>
			<input type="text" name="userName" id="userName">
			<br>
			Password:
			<br>
			<input type="text" name="passWord" id="passWord">
    		</form> 
    	</div>
  
</body> 
</html>
