<html>

<?php 
  include('sqlConnect.php'); //Einbinden der Datenbank
?>

<head>
	<title>Overview</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		function addLoginDataToServer() //übernehmen der Daten aus dem Formular per POST Methode um sie in die Datenbank zu speichern
		{
			$.ajax({
				type: "POST",
				url: "/indexProc.php", //Weiterleitung zur Datenbankanfrage
				data: {loginDataName: $("#account").val, passWord: $('#password').val, SetorGet: 1}, //Auslesen der Daten; Schreiben in Variablen
				success: function(result){$("#loginTable").html = result} //Das Ergebnis soll im div "#loginTable angezeigt werden
			});
		}
		function addLoginDataToTable() 
		{
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {SetorGet: 2},
				success: function(result){$("#loginTable").html = result}
			});
		}
		$(document).ready(function(){      
		 	$("#btnUserInfo").click(
          		function(e){
        		e.preventDefault();
            		addLoginDataToServer();
            		addLoginDataToTable();
            		return false;
          		});
		});
	</script>
	
</head>

<body>
	<ul> <!--Homeleiste-->
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
		<form> <!--Formular zum Eingeben neuer Datensätze-->
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
			<br>
			<a class="buttonBlueLeft" id="btnUserInfo">Add</a> <!-- beim Anklicken des Buttons sollen die Methoden aufgerufen werden, die die Daten zur Proc.php weiterleiten-->
    		</form> 
    	</div>
  
</body> 
</html>
