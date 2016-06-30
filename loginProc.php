<?php
  session_start();
  include 'sqlConnect.php';
  
  //checkt username mit pw in mysql datenbank existieren --> öffenet index oder gibt fehlercode aus
  if(!empty($_POST))
  {
    $userName = $_POST["userName"];
    if( $stmt =$mysqli->prepare("Select * from user where userName = ? && passWord = ?")){
    $stmt->bind_param("ss", $_POST["userName"], $_POST["passWord"] );
    $stmt->execute();
    $res = $stmt->get_result();
      if($res->num_rows > 0)
      {
        //user exists 
        $_SESSION["login"] = true;
        $_SESSION["userName"] = $_POST["userName"]; //todo find more safe version :)
        
        echo("<script type=\"text/javascript\"> window.location = \"/index.php\"; </script>" );
        exit();
        
      }
      else{
          echo("Query Error" . $stmt->error);
      }
      
      echo("<p> invalid Username/Password Combination </p>");
      
    }
    
  }
?>
