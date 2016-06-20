<html>

<?php 
  include('sqlConnect.php');
?>

<head>
<title>Overview</title>
</head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		function loadDoc(){
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {loginDataName: $("#account").val, passWord: $('#password').val},
				
			})
				
		}
<body>
<h2>Password Manager</h2>
<h3>Your passwords</h3>
	
	<?php
		$mysqli->prepare("SELECT * FROM savedLoginData SLD, user U WHERE U.userName = SLD.userName AND U.userName = ?");
		$mysqli->bind_param("s", $_POST["userName"])
		$res = mysqli_query($mysqli); 		
		
		echo "<table>";
		while($row = mysqli_fetch_object($res))
			{
			echo "<tr>";
			echo "<td>",$row->,"</td>";
			echo "<td>",$row->urlname,"</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
	
	
	<h4>Add data</h4>
	
		<form>
    		<p>please add password data <br>
         	<p><input name="account" type="text" maxlength="30"><br>account name</p>
		<p><input name="password" type="text"><br>password</p>
		 /*<input type="submit" name="Tagknopf" value="ADD"> --> */
		<button type="button" onclick="loadDoc()">ADD</button>
    		</form> 
  
</body> 
</html>
