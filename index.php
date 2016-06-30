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
			var name = $('#Name').val();
			var userName = $('#userName').val();
			var passWord = $('#passWord').val();

			$.post("indexProc.php",{'SetOrGet': 1,'loginDataName' : name, 'userName' : userName, 'passWord' : passWord}, function (data, status){alert("result :" +data);});
			
		}
		function addLoginDataToTable()
		{
			$.post(
				"indexProc.php",
				{'SetOrGet': 2},
				function(result, status){$("#passwordView").html(result);}
			);
		}
		
		$(document).ready(function (){
			$(".buttonDiv").click(
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
      		<li><a class="right" href="Logout.php">Logout</a></li>
	</ul>
	
	<div class="wrapperHome">
	
		<div class="tableDiv">
		</div>	
	
		<form>
			<div class="AddDiv">
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
				<a class="buttonHome">Save</a>
			</div>	
			
		</form>
	
	</div>
	
</body> 
</html>
