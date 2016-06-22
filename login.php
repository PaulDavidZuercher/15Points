<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
      
      function checkUserPass(){ 
        $.ajax({
          type: "POST",
          url: "/loginProc.php",
          data: {userName: $("#userName").val, passWord: $('#passWord').val},
          success:function(result){$('#output').html(result)}
      });
      }
      
      
      $(document).ready( 
        $("#btnUserInfo").click(
          function(e){
            e.preventDefault();
            CheckUserPass();
            return false;
          });
      
    </script>
  </head>
  <body>
    
    <ul>
      <li><a href="http://144.76.65.253/">Home</a></li>
      <li><a class="active"  href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
    
    <div id="pwDiv" class="horizontalAndVerticalCentered">
      <form>
        Username:<br>
        <input type="text" name="userName"  id="userName">
        <br>
        Password:
        <br>
        <input type="password" name="passWord" id="passWord">
        <br> <br>
        <a id="btnUserInfo" class="buttonBlue" href="#" onclick="checkUserPass();return false;">Login</a> 
        <a class="buttonBlue" href="register.php">Register</a>
        <div id="output" style="width:200px;30px">
        </div>
      </form>
    </div>
  </body>
</html>
