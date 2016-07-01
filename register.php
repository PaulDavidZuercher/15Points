<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
	
			//gibt form werte zur registerProc.php weiter
			function checkEingaben()
			{
				alert("Working");
				var un = $('#userName').val();
				var mail = $('#E_MailAdresse').val();
				var pass = $('#passWord').val();

  				$.post("registerProc.php",
				{'userName': un, 'E_MailAdresse': mail, 'passWord': pass}, 
				function(result){$('#output').html(result);});
			}
		
        		$("#btnUserInfo").click(
          			function(e){
            				e.preventDefault();
            				checkEingaben();
            				return false;
          			}
			);
			
          		
		</script>
	</head>

	<body>
		
		<ul>
                        <li><a href="http://144.76.65.253/">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a class="active" href="register.php">Register</a></li>
                        <li><a class="right" href="logout.php">Logout</a></li>
                </ul>
                
                <div class="banner">
                        <h3>Registrieren</h3>  
                </div>
                
                <div class="wrapperRegister">
                	<form action="registerProc.php">
				<div class="boxRegister">
					
					<div class="placeHolder"></div>
					<div class="placeHolder"></div>
				
					<div class="inputDiv">
						<input class="logInput2" type="text" placeholder="Username" name="userName" id="userName">
					</div>
				
					<div class="inputDiv">
				   		<input  class="logInput2" type="text" placeholder="Email" name="E_MailAdresse" id="E_MailAdresse">
				  	</div>
		        	
		        		<div class="inputDiv">
		        			<input class="logInput2"  type="password" placeholder="Password" name="passWord" id="passWord">
		        		</div>
		        	
		        		<div class="inputDiv">
     		        			<input class="logInput2"  type="password" placeholder="Password wiederholen" name="passWord2" id="passWord2">
     		        		</div>
     		        	</div>
     		        	
     		        	<div class="buttonBox">
      					<a class="buttonLogin" id="btnUserInfo"  onclick="checkEingaben();return false;">Register</a>
        				<a class="buttonLogin" href="login.php">Login</a>	
        				<div id="output" style="width:200px;30px">
		        		</div>
        			</div>
     			</form>	
     		</div>      	
	</body>
</html>
