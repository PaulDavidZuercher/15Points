<html>

<?php 
session_start();
if(!$_SESSION["login"] && $_GET["debug"] != "true")
	die("<html> <head><script>window.location = \"login.php\"</script> </head><body> </body> </html>");


  include('sqlConnect.php'); //Einbinden der Datenbank
?>

<head>
	<title>Overview</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script type="text/javascript">

		function addLoginDataToServer() //übernehmen der Daten aus dem Formular per POST Methode; Weitergabe an indexProc.php
		{
			var name = $('#Name').val(); 
			var userName = $('#userName').val();
			var passWord = $('#passWord').val();

			$.post("indexProc.php",{'SetOrGet': 1, 'foreignServiceName' : name, 'foreignServiceUserName' : userName, 'foreignServicePassWord' : passWord}, function (data, status){alert("result :" +data);});
			
		}

		function addLoginDataToTable() //fügt soeben gespeicherte Daten der Tabelle hinzu
		{
			$.post(
				"indexProc.php",
				{'SetOrGet': 2},
				function(result, status){$("#tableDiv").html(result);} //zeigt Datensätze im div "tableDiv" an
			);
		}
		
		$(document).ready(function (){ //bei Klick auf den Save Button wird die Methode aufgerufen
			$(".buttonDiv").click(
			function(e){
			  e.preventDefault();
			  addLoginDataToServer();
			  addLoginDataToTable();
			  return false;
			});
			addLoginDataToTable();
			});
			
		function ranString(len){
			var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-#*?!§$%&";
			var charLen = chars.length;

			randStr = "";

			for(var i=0; i < len; i++)
			{
		randStr += chars.charAt(Math.floor(Math.random() * charLen));
			}
        		return randStr;
		}

		function ranPass() {
		  var k = prompt("Wie ist die gewünschte länge der Passwörter?");
		  var a = ranString(k);
		  var b = ranString(k);
		  var c = ranString(k);
		  var d = ranString(k);
		  var e = ranString(k);
		  alert(a + "\n" + b + "\n" + c + "\n" + d + "\n" + e + "\n" + f);
		}
	</script>
</head>
<body>
	<ul> <!--Homeleiste-->
      		<li><a class="active" href="index.php">Home</a></li> 
      		<li><a href="login.php">Login</a></li>
      		<li><a href="register.php">Register</a></li>
      		<li><a class="right" href="logout.php">Logout</a></li>
	</ul>
	
	<div class="wrapperHome">
	
		<div id="tableDiv"> <!-- Anzeige div für Datensätze -->
		</div>	
	
		<form>
			<div class="AddDiv"> <!-- Formular -->
				<div class="miniDiv">
					<input class="logInput" type="text" name="userName" placeholder="Name" id="Name">
				</div>
				<div class="miniDiv">
					<input class="logInput" type="text" name="userName" placeholder="Username" id="userName">
				</div>
				<div class="miniDiv">
					<input class="logInput" type="password" name="passWord" placeholder="Password" id="passWord">
				</div>	
			</div>
			
			<div class="buttonDiv">
				<a class="button_example">Save</a>
			</div>	
			
			<button class="button_example" onclick="ranPass()">Random Passwords</button>
			
		</form>
	
	</div>
	
</body> 
</html>
