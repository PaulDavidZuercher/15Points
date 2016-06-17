<html>

<?php 
  include('connect.php'); 
  // Einbinden der Datei 'connect.php'
?>

<head>
<title>Overview</title>
</head>
	<script type="text/javascript">
	
		function proceed(){
			$.ajax({
				type: "POST",
				url: "/overViewProc.php",
				data: 
			})
				
		}

<body>
<h2>Passwort Manager</h2>

<h3>Your passwords</h3>

	<!--Tabelle der bereits gespeicherten Passwörter-->
	
	
	<h4>Add data</h4> <!--Formular um neue Daten hinzuzufügen-->
	
    <form action="index.php" method="post"> <!--neue php oder mit ajax aktualisieren?!-->
        <p>please add password data <br>
          <p><input name="account" type="text" maxlength="30"><br>account name</p>
		  <p><input name="username" type="text"><br>username</p>
		  <p><input name="password" type="text"><br>password<!--Verschlüsselung?--> </p>
		  <p><input name="notes" type="text"><br>notes</p>
        </p>
        <input type="submit" name="Tagknopf" value="ADD"><!--sollte dann oben in der Tabelle neue Daten anzeigen -->
    </form> 
  
</body> 
</html>
