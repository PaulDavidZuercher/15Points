<?php
  session_start();
  include 'sqlConnect.php'
  
  if(!empty($_POST)
  {
    $userName = $_POST["userName"];
    $mysqli->prepare("Select * from user where username = ? && passWord = ?");
    $mysqli->bind_param("ss", $_POST["userName"], $_POST["passWord"] );
    if($res = $conn->execute())
    {
      if($res->num_rows > 0)
      {
        //user exists 
        $_SESSION["login"] = true;
        $_SESSION["userName"] = $_POST["userName"]; //todo find more safe version :)
        
        echo("<script type=\"text/javascript\"> window.location = \"/index.php\"; </script>" )
        exit();
        
      }
      
      echo("<p> invalid Username/Password Combination </p>");
      
    }
    
  }
?>
