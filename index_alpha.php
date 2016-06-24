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
<h1>Password Manager</h1>
	
	<div id="passwordView" style="width:400px;height:200px;">
	</div>
	
	
	<h2>Add data</h2>
	
		<form>
    		<p>please add password data <br>
         	<p><input name="account" type="text" maxlength="30"><br>account name</p>
		<p><input name="password" type="text"><br>password</p>
		<a class="buttonBlue" href="#" onclick="addLoginData();return false;">Add</a>
    		</form> 
  
</body> 
</html>
