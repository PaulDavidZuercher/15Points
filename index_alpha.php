<html>

<?php 
  include('sqlConnect.php');
?>

<head>
	<title>Overview</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		function addLoginData()
		{
			$.ajax({
				type: "POST",
				url: "/indexProc.php",
				data: {loginDataName: $("#account").val, passWord: $('#password').val, SetorGet: 1 ,
				
			});
		}
		function addLoginData()
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
      		<li><a href="http://144.76.65.253/">Home</a></li>
      		<li><a class="active"  href="login.php">Login</a></li>
      		<li><a href="register.php">Register</a></li>
	</ul>
	
	<div class="banner">
      	<h3>Your passwords</h3>  
    	</div>
	
	<div id="passwordView" style="width:400px;height:200px;">
	</div>
	
	
	<div id="pwDiv" class="horizontalAndVerticalCentered">
		<form>
    			<p>please add password data <br>
         		<p><input name="account" type="text"><br>account name</p>
			<p><input name="password" type="text"><br>password</p>
			<a class="buttonBlueLeft" href="#" onclick="addLoginData();return false;">Add</a>
    		</form> 
    	</div>
  
</body> 
</html>
