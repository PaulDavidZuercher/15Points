<?php
  session_start();
  include 'sqlConnect.php';
  
  if(!empty($_POST))
  {
    $userName = $_POST["userName"];
    $stmt =$mysqli->prepare("Select * from user where userName = ? && passWord = ?");
    $stmt->bind_param("ss", $_POST["userName"], $_POST["passWord"] );
    $stmt->execute();
    $stmt->close();
    if($res = $stmt->query())
    {
      if($res->num_rows > 0)
      {
        //user exists 
        $_SESSION["login"] = true;
        $_SESSION["userName"] = $_POST["userName"]; //todo find more safe version :)
        
        echo("<script type=\"text/javascript\"> window.location = \"/index.php\"; </script>" );
        exit();
        
      }
      else{
          echo("Query Error" . $mysqli->connect_errno());
      }
      
      echo("<p> invalid Username/Password Combination </p>");
      
    }
    
  }
?>
