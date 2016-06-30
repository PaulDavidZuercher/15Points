<?php
  session_start();
  include 'sqlConnect.php';
  
  //checkt username mit pw in mysql datenbank existieren --> öffenet index oder gibt fehlercode aus
  if(!empty($_POST))
  {
    $userName = $mysqli->real_escape_string($_POST["userName"]);
    $passWord = $mysqli->real_escape_string($_POST["passWord"]);
    echo ("Username: '$userName', PassWord '$passWord'"); 
    if($res = $mysqli->query("Select * from user where userName = '$userName' && passWord = '$passWord'"))
    {
      if($res->num_rows > 0)
      {
        die("<script type=\"text/javascript\"> window.location = \"/index.php\"; </script>" );
        exit();
      }
      else{
        die("<p> invalid Username/Password Combination </p>");
      }
    }
    else{
       die("failed to query");
    }
    
  }
?>
