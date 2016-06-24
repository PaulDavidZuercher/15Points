<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
		
		$(document).ready(
		function(){
			function checkEingaben()
			{
				alert("Working")
  				$.ajax({
					type: "POST",
					url:"/registerProc.php",
					data: {userName: $("#userName").val, E_MailAdresse: $('#E_MailAdresse').val, passWord: $('#passWord').val, passWord2: $('#passWord2')},
					success:function(result){$('#output').html(result);}
				});
			}
		
        		$("#btnUserInfo").click(
          			function(e){
            				e.preventDefault();
            				checkEingaben();
            				return false;
          			}
			);
			
		});	
          		
		</script>
	</head>

	<body>
		
		<ul>
                        <li><a href="http://144.76.65.253/">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a class="active" href="register.php">Register</a></li>
                </ul>
	
		<div id="pwDiv" class="horizontalAndVerticalCentered">
		
			<form action="registerProc.php">
	      		Username:<br>
		      	<input id"logInput" type="text" name="userName" id="userName">
		      	<br>
		      	E-Mailadresse:<br>
		      	<input id"logInput" type="text" name="E_MailAdresse" id="E_MailAdresse">
		      	<br>
      			Password:<br>
     		 	<input id"logInput" type="password" name="passWord" id="passWord">
     		 	<br>
     		 	Password bestaetigen: <br>
     		 	<input id"logInput" type="password" name="passWord2" id="passWord2">
			
			
    		</form>
  		<br>
		<a class="buttonBlueLeft" id="btnUserInfo"  onclick="checkEingaben();return false;">Register</a>
		<a class="buttonBlueRight" href="login.php">Log In </a> 
		<div id="output" style="width:200px;30px">
		</div>
	</body>
</html>
