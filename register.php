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
				$("#output").html("Processing...");
				var un = $('#userName').val();
				var mail = $('#E_MailAdresse').val();
				var pass1 = $('#passWord1').val();
				var pass2 = $('#passWord2').val();

				if(pass1 !== pass2)
				{
					$('#output').html("Passwords don't match :/");
					return false;
				}					

  				$.post("registerProc.php",
				{'userName': un, 'E_MailAdresse': mail, 'passWord': pass1}, 
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a class="active" href="register.php">Register</a></li>
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
		        			<input class="logInput2"  type="password" placeholder="Password" name="passWord" id="passWord1">
		        		</div>
		        	
		        		<div class="inputDiv">
     		        			<input class="logInput2"  type="password" placeholder="Password wiederholen" name="passWord2" id="passWord2">
     		        		</div>
					<div id= "output">
					</div>
     		        	</div>
     		        	
     		        	<div class="buttonBoxRegister">
      					<a class="button_example" id="btnUserInfo"  onclick="checkEingaben();return false;">Register</a>

        			</div>
     			</form>	
     		</div>      	
	</body>
</html>
