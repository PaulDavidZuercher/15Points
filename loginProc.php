<?php
  session_start();
  include 'sqlConnect.php';
  
  //checkt username mit pw in mysql datenbank existieren --> öffenet index oder gibt fehlercode aus
  if(!empty($_POST))
  {
    $userName = $_POST["userName"];
    $passWord = $_POST["passWord"];

    echo ("Username: '$userName', PassWord '$passWord'"); 

    if($res = $mysqli->query("Select * from user where userName = '$userName' && passWord= MD5( CONCAT(salt, ':', '$passWord'))"))
    {
      if($res->num_rows > 0)
      {
	$_SESSION["userName"] = $userName;
	$_SESSION["login"] = true;
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
