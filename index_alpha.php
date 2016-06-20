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
	
		function addLoginData(){
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {loginDataName: $("#account").val, passWord: $('#password').val, SetorGet: 1 ,
				
			})
		}
		function addLoginData(){
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {SetorGet: 2},
				success: function(result){$("#passwordView").html = result}
			})
		}
<body>
<h2>Password Manager</h2>
<h3>Your passwords</h3>
	
	<div id="passwordView" style="width:400px;height:200px;">
	</div>
	
	
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
