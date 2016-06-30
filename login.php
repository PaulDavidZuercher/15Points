<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
      
      function checkUserPass(){ 
	alert("Func call checkUserPass");
        $.ajax({
          type: "POST",
          url: "/loginProc.php",
          data: {userName: $("#userName").val, passWord: $('#passWord').val},
          success:function(result){$('#output').html(result)}
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
    
    <div id="pwDiv" class="horizontalAndVerticalCentered">
      <form>
        Username:<br>
        <input id="logInput" type="text" name="userName" placeholder="Username"  id="userName">
        <br>
        Password:
        <br>
        <input id="logInput" type="password" name="passWord" placeholder="Password" id="passWord">
        <br> <br>
        <a id="btnUserInfo" class="buttonBlueLeft">Login</a> 
        <a class="buttonBlueRight" href="register.php">Register</a>
        <div id="output" style="width:200px;30px">
        </div>
      </form>
    </div>
  </body>
</html>
