<?php
session_start();	
if($_SESSION["login"] && $_GET["debug"] != "true")
	die("<html><head><script>window.location = \"/index.php\"</script></head><body><p>redirecting...</p></body></html>");
?>


<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
      function checkUserPass(){ 
        alert("called :)");
        var un = $('#userName').val();
        var pw = $('#passWord').val();
        $.post("loginProc.php", 
	{
		'userName' : un, 
		'passWord' : pw 
	},
	function(data,status)
	{
		$('#output').html(data);
		alert(data);
	});
      }
      
$(document).ready(function(){      
        $("#btnUserInfo").click(
          function(e){
            e.preventDefault();
            checkUserPass();
            return false;
          });
});
      
    </script>
  </head>
  <body>
    <ul>
      <li><a href="http://144.76.65.253/">Home</a></li>
      <li><a class="active"  href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
    
    <div class="banner">
      <h3>Login</h3>  
    </div>
    
    <div class="wrapperLogin">
    	<form>
    		<div class="boxLogin">
    			
			<div class="placeHolder"></div>
			<div class="placeHolder"></div>
			
			<div class="inputDiv">
				<input <input class="logInput" type="text" name="userName" placeholder="Username"  id="userName">
			</div>
			
			<div class="placeHolder"></div>
			
			<div class="inputDiv">
				<input class="logInput" type="password" name="passWord" placeholder="Password" id="passWord">
			</div>
			
        		<div id="output" style="width:200px;30px">
        		</div>
        	
      		
      		</div>
      		
      		<div class="buttonBox">
      		<a id="btnUserInfo" class="button_example">    Login    </a> 
        	</div>
        	
      	</form>
    </div>
  </body>
</html>
