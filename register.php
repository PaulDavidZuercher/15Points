<!DOCTYPE html>
<html>
	<head>
		<title>log in</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
		function checkEingaben()
		{
  			if (window.XMLHttpRequest)
  			{
  				// AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
  				xmlhttp=new XMLHttpRequest();
			}
 		  	else
			{
 		       		// AJAX mit IE6, IE5
		        	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    			}
		    	xmlhttp.onreadystatechange=function()
		    	{
        		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		        {
		        	document.getElementById("warnung").innerHTML=xmlhttp.responseText;
        		}
		}
		    	xmlhttp.open("POST","registerProc.php?",true);
		    	xmlhttp.send();		
		}
		

		$(document).ready(
        	$("#btnUserInfo").click(
          	function(e){
            	e.preventDefault();
            	CheckEingaben();
            	return false;
		</script>
	</head>

	<body>
	
		<div id="pwDiv" class="horizontalAndVerticalCentered">
		
			<form action="registerProc.php">
	      		Username:<br>
		      	<input type="text" name="uid">
		      	<br>
		      	E-Mailadresse:<br>
		      	<input type="text" name="ema">
		      	<br>
      			Password:<br>
     		 	<input type="password" name="psw">
     		 	<br>
     		 	Password bestaetigen: <br>
     		 	<input type="password" name="psw2" >
			
			
    		</form>
  		<br>
		<button id="btnUserInfo" href="#" onclick="passwortcheck()"; return false;>Register</button>
		<button class"buttonBlue" href="login.php">Log In </button> 
		<div id="output" style="width:200px;30px">
		</div>
	</body>
</html>
