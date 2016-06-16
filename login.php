<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
      function checkUserPass(){
        $.ajax({
          type: "POST",
          url: "/loginProc.php",
          data: {userName: $("#userName").val, passWord: $('#passWord').val},
          success:function(result){$('#output').val(result)}
      });
      }
    </script>
  </head>
  <body>
    <div id="pwDiv">
      <form>
        Username:<br>
        <input type="text" name="userName"  id="userName">
        <br>
        Password:
        <br>
        <input type="password" name="passWord" id="passWord">
        <br> <br>
        <a href="#" onclick="checkUserPass();return false;">Login</a>
      </form>
    </div>
  </body>
</html>
