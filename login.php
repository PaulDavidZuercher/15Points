<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="formate.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type = "text/javascript">
      function checkUserPass()
      {
        $.ajax({
          type: "POST",
          url: "/loginProc.php",
          data: {userName: $("#userName").val, passWord: $('passWord').val},
          success:function(result){('#output').val(result)}
      });
        
      }
    </script>
      
    </script>
  </head>
  <body>
    <h1>Login</h1>
    
<div class="center"style="width:100px;height:20px">

     <form>
      Username:<br>
      <input type="text" name="userName"  id="userName">
      <br>
      Password:<br>
      <input type="password" name="passWord" id="passWord">
      </form>
      <br>
      <a href="#" onclick="checkUserPass();return false;">Login</a>
    </div>


</body>
</html>
